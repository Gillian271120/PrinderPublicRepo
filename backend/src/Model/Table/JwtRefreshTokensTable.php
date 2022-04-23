<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JwtRefreshTokens Model
 *
 * @method \App\Model\Entity\JwtRefreshToken newEmptyEntity()
 * @method \App\Model\Entity\JwtRefreshToken newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\JwtRefreshToken[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JwtRefreshToken get($primaryKey, $options = [])
 * @method \App\Model\Entity\JwtRefreshToken findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\JwtRefreshToken patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JwtRefreshToken[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\JwtRefreshToken|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JwtRefreshToken saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JwtRefreshToken[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\JwtRefreshToken[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\JwtRefreshToken[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\JwtRefreshToken[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JwtRefreshTokensTable extends Table
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

        $this->setTable('jwt_refresh_tokens');
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
            ->uuid('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('model')
            ->maxLength('model', 50)
            ->requirePresence('model', 'create')
            ->notEmptyString('model');

        $validator
            ->uuid('foreign_key')
            ->requirePresence('foreign_key', 'create')
            ->notEmptyString('foreign_key');

        $validator
            ->scalar('token')
            ->maxLength('token', 500)
            ->allowEmptyString('token');

        $validator
            ->integer('expired')
            ->requirePresence('expired', 'create')
            ->notEmptyString('expired');

        return $validator;
    }
}
