<?php
namespace MailCalculator\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PostalServices Model
 *
 * @method \MailCalculator\Model\Entity\PostalService get($primaryKey, $options = [])
 * @method \MailCalculator\Model\Entity\PostalService newEntity($data = null, array $options = [])
 * @method \MailCalculator\Model\Entity\PostalService[] newEntities(array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\PostalService|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \MailCalculator\Model\Entity\PostalService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\PostalService[] patchEntities($entities, array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\PostalService findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PostalServicesTable extends Table
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

        $this->table('postal_services');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->decimal('price')
            ->allowEmpty('price');

        $validator
            ->boolean('tracked')
            ->allowEmpty('tracked');

        $validator
            ->decimal('insurance_max_sum')
            ->allowEmpty('insurance_max_sum');

        $validator
            ->allowEmpty('insurance_type');

        $validator
            ->allowEmpty('insurance_forbidden_products');

        $validator
            ->integer('max_weight')
            ->allowEmpty('max_weight');

        $validator
            ->integer('max_height')
            ->allowEmpty('max_height');

        $validator
            ->integer('max_width')
            ->allowEmpty('max_width');

        $validator
            ->integer('max_length')
            ->allowEmpty('max_length');

        $validator
            ->integer('max_overall_size')
            ->allowEmpty('max_overall_size');

        $validator
            ->allowEmpty('country_iso');

        $validator
            ->allowEmpty('country_name');

        $validator
            ->allowEmpty('shipping_range');

        $validator
            ->allowEmpty('additional_info');

        return $validator;
    }
}
