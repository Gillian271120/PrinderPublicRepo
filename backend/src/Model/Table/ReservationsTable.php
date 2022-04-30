<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reservations Model
 *
 * @method \App\Model\Entity\Reservation newEmptyEntity()
 * @method \App\Model\Entity\Reservation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Reservation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reservation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reservation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Reservation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reservation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reservation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reservation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reservation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reservation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reservation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Reservation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReservationsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('reservations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('clientDni')
            ->maxLength('clientDni', 9)
            ->minLength('clientDni', 9)
            ->requirePresence('clientDni', 'create')
            ->notEmptyString('clientDni');

        $validator
            ->scalar('clientFullname')
            ->maxLength('clientFullname', 255)
            ->requirePresence('clientFullname', 'create')
            ->notEmptyString('clientFullname');

        $validator
            ->scalar('clientTelephone')
            ->maxLength('clientTelephone', 15)
            ->minLength('clientTelephone', 9)
            ->requirePresence('clientTelephone', 'create')
            ->notEmptyString('clientTelephone');

        $validator
            ->scalar('service')
            ->maxLength('service', 255)
            ->requirePresence('service', 'create')
            ->notEmptyString('service');

        $validator
            ->requirePresence('clientCreditCard', 'create')
            ->maxLength('clientCreditCard', 12)
            ->minLength('clientCreditCard', 12)
            ->notEmptyString('clientCreditCard');

        $validator
            ->decimal('subtotal')
            ->requirePresence('subtotal', 'create')
            ->notEmptyString('subtotal');
        $validator
            ->integer('numberClients')
            ->maxLength('numberClients',3)
            ->requirePresence('numberClients', 'create')
            ->notEmptyString('numberClients');

        return $validator;
    }
}
