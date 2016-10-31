<?php
namespace MailCalculator\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Insurances Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AllowedProducts
 * @property \Cake\ORM\Association\BelongsToMany $PostalServices
 *
 * @method \MailCalculator\Model\Entity\Insurance get($primaryKey, $options = [])
 * @method \MailCalculator\Model\Entity\Insurance newEntity($data = null, array $options = [])
 * @method \MailCalculator\Model\Entity\Insurance[] newEntities(array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\Insurance|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \MailCalculator\Model\Entity\Insurance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\Insurance[] patchEntities($entities, array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\Insurance findOrCreate($search, callable $callback = null)
 */
class InsurancesTable extends Table
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

        $this->table('insurances');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('AllowedProducts', [
            'foreignKey' => 'allowed_product_id',
            'className' => 'MailCalculator.AllowedProducts'
        ]);
        $this->belongsToMany('PostalServices', [
            'foreignKey' => 'insurance_id',
            'targetForeignKey' => 'postal_service_id',
            'joinTable' => 'postal_services_insurances',
            'className' => 'MailCalculator.PostalServices'
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

        $validator
            ->allowEmpty('name');

        $validator
            ->numeric('price')
            ->allowEmpty('price');

        $validator
            ->decimal('max_value')
            ->allowEmpty('max_value');

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
        $rules->add($rules->existsIn(['allowed_product_id'], 'AllowedProducts'));

        return $rules;
    }
}
