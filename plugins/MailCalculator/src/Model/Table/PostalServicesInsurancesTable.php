<?php
namespace MailCalculator\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PostalServicesInsurances Model
 *
 * @property \Cake\ORM\Association\BelongsTo $PostalServices
 * @property \Cake\ORM\Association\BelongsTo $Insurances
 *
 * @method \MailCalculator\Model\Entity\PostalServicesInsurance get($primaryKey, $options = [])
 * @method \MailCalculator\Model\Entity\PostalServicesInsurance newEntity($data = null, array $options = [])
 * @method \MailCalculator\Model\Entity\PostalServicesInsurance[] newEntities(array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\PostalServicesInsurance|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \MailCalculator\Model\Entity\PostalServicesInsurance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\PostalServicesInsurance[] patchEntities($entities, array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\PostalServicesInsurance findOrCreate($search, callable $callback = null)
 */
class PostalServicesInsurancesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('postal_services_insurances');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('PostalServices', [
            'foreignKey' => 'postal_service_id',
            'joinType' => 'INNER',
            'className' => 'MailCalculator.PostalServices'
        ]);
        $this->belongsTo('Insurances', [
            'foreignKey' => 'insurance_id',
            'joinType' => 'INNER',
            'className' => 'MailCalculator.Insurances'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['postal_service_id'], 'PostalServices'));
        $rules->add($rules->existsIn(['insurance_id'], 'Insurances'));

        return $rules;
    }
}
