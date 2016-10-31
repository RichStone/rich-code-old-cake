<?php
namespace MailCalculator\Controller;

use MailCalculator\Controller\AppController;
use Cake\View\CellTrait;

/**
 * PostalServices Controller
 *
 * @property \MailCalculator\Model\Table\PostalServicesTable $PostalServices
 */
class PostalServicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        
    }

    /**
     * View method
     *
     * @param string|null $id Postal Service id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postalService = $this->PostalServices->get($id, [
            'contain' => []
        ]);
        $this->set('postalService', $postalService);
        $this->set('_serialize', ['postalService']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postalService = $this->PostalServices->newEntity();
        if ($this->request->is('post')) {
            $postalService = $this->PostalServices->patchEntity($postalService, $this->request->data);
            if ($this->PostalServices->save($postalService)) {
                $this->Flash->success(__('The postal service has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The postal service could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('postalService'));
        $this->set('_serialize', ['postalService']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Postal Service id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postalService = $this->PostalServices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postalService = $this->PostalServices->patchEntity($postalService, $this->request->data);
            if ($this->PostalServices->save($postalService)) {
                $this->Flash->success(__('The postal service has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The postal service could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('postalService'));
        $this->set('_serialize', ['postalService']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Postal Service id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postalService = $this->PostalServices->get($id);
        if ($this->PostalServices->delete($postalService)) {
            $this->Flash->success(__('The postal service has been deleted.'));
        } else {
            $this->Flash->error(__('The postal service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function overview()
    {
        //cake's default bake methods:
        $postalServices = $this->paginate($this->PostalServices);

        $this->set(compact('postalServices'));
        $this->set('_serialize', ['postalServices']);
    }

    use CellTrait;

    /**
     * get all the necessary data to determine shipping options and
     * transmit to the CalculationCell.
     */
    public function getPackageData()
    {
        $postalServices = $this->PostalServices->find('all');
        $this->set(compact('postalServices'));
        if($this->request->is(['post', 'put'])) {
            $fetchedServices = $this->fetchShippingOption($this->request);
            $insuredOption = $fetchedServices[0];
            $uninsuredOption = $fetchedServices[1];

            $packageValue = $this->request->data['value'];
            $packageContent = $this->request->data['content_id'];
            debug($packageContent);die;
            $calcResultCell = $this->cell('MailCalculator.Calculation', [$packageValue, $insuredOption, $uninsuredOption]);
            $this->set(compact('calcResultCell'));
        }
    }

    /**
     * choose the right shipping option according to the user's input
     * @param $request contains the users getPackageData() request
     * @return array with the two cheapest options, (insured and uninsured)
     */
    public function fetchShippingOption($request)
    {
        $fetchedServices = null;

        $content_id = $request->data['package_content'];
        $packageValue = $request->data['value'];
        $packageWeight = $request->data['weight'];
        $packageHeight = $request->data['height'];

        //insured option
        $postalServiceInsured = $this->PostalServices->find()->matching('Insurances', function ($q) {
            return $q->where(['Insurances.name !=' => 'Unversichert']);
        });
        $postalServiceInsured = $postalServiceInsured->find('all', [
            'conditions' => [
                'PostalServices.max_weight >' => $packageWeight,
                'PostalServices.max_height >' => $packageHeight,
            ],
            'order' => ['PostalServices.price' => 'ASC'],
        ])
            ->first();


        //risky option
        $postalServiceUninsured = $this->PostalServices->find()->matching('Insurances', function ($q) {
            return $q->where(['Insurances.name =' => 'Unversichert']);
        });
        $postalServiceUninsured = $postalServiceUninsured->find('all', [
            'conditions' => [
                'PostalServices.max_weight >' => $packageWeight,
                'PostalServices.max_height >' => $packageHeight,
            ],
            'order' => ['PostalServices.price' => 'ASC'],
        ])
            ->first();

        return $fetchedServices = [$postalServiceInsured, $postalServiceUninsured];
    }

    public function statistics($postalService) {
        $this->set(compact('postalService'));
    }
}