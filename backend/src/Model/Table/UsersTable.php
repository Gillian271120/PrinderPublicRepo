<?php
declare(strict_types=1);

/**
 * Copyright 2010 - 2019, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2018, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace App\Model\Table;

use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use Cake\I18n\FrozenTime;
use Cake\Log\Log;
use Cake\Utility\Security;
use App\Model\Entity\User;
use CakeDC\Users\Model\Table\UsersTable as baseTable;

/**
 * Users Model
 *
 * @method \CakeDC\Users\Model\Entity\User get($primaryKey, $options = [])
 * @method \CakeDC\Users\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \CakeDC\Users\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \CakeDC\Users\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeDC\Users\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeDC\Users\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakeDC\Users\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \CakeDC\Users\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 * @mixin \CakeDC\Users\Model\Behavior\AuthFinderBehavior
 * @mixin \CakeDC\Users\Model\Behavior\LinkSocialBehavior
 * @mixin \CakeDC\Users\Model\Behavior\PasswordBehavior
 * @mixin \CakeDC\Users\Model\Behavior\RegisterBehavior
 * @mixin \CakeDC\Users\Model\Behavior\SocialAccountBehavior
 * @mixin \CakeDC\Users\Model\Behavior\SocialBehavior
 */
class UsersTable extends baseTable
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

        $this->setEntityClass(User::class);
    }

    public function beforeSave(EventInterface $event, User $entity, \ArrayObject $options)
    {
        if ($entity->isDirty('token')) {
            $entity->token_expires = FrozenTime::create()->addDay();
        }
    }

    public function updateToken(User $user): User|false
    {
        $user->token = Security::randomString();
        $result = $this->save($user);
        if (!$result) {
            Log::error('Error when try tyo update token');
        };

        return $result;
    }
}