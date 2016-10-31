<?php
namespace MailCalculator\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Countries Model
 *
 * @method \MailCalculator\Model\Entity\Country get($primaryKey, $options = [])
 * @method \MailCalculator\Model\Entity\Country newEntity($data = null, array $options = [])
 * @method \MailCalculator\Model\Entity\Country[] newEntities(array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\Country|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \MailCalculator\Model\Entity\Country patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\Country[] patchEntities($entities, array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\Country findOrCreate($search, callable $callback = null)
 */
class CountriesTable extends Table
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

        $this->table('countries');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->allowEmpty('iso_code');

        $validator
            ->integer('name')
            ->allowEmpty('name');

        return $validator;
    }
}
