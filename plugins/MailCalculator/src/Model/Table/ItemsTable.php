<?php
namespace MailCalculator\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AllowedProducts Model
 *
 * @property \Cake\ORM\Association\HasMany $Insurances
 *
 * @method \MailCalculator\Model\Entity\AllowedProduct get($primaryKey, $options = [])
 * @method \MailCalculator\Model\Entity\AllowedProduct newEntity($data = null, array $options = [])
 * @method \MailCalculator\Model\Entity\AllowedProduct[] newEntities(array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\AllowedProduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \MailCalculator\Model\Entity\AllowedProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\AllowedProduct[] patchEntities($entities, array $data, array $options = [])
 * @method \MailCalculator\Model\Entity\AllowedProduct findOrCreate($search, callable $callback = null)
 */
class AllowedProductsTable extends Table
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

        $this->table('allowed_products');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Insurances', [
            'foreignKey' => 'allowed_product_id',
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

        $validator
            ->allowEmpty('name');

        return $validator;
    }
}
