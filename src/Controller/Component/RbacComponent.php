<?php
declare(strict_types=1);

namespace Rbac\Controller\Component;

use Cake\Controller\Component;
use Cake\Http\Exception\NotImplementedException;
use Cake\ORM\TableRegistry;

/**
 * Class RbacComponent
 *
 * @package User\Controller\Component
 * @property \Rbac\Controller\Component\AuthComponent $Auth
 */
class RbacComponent extends Component
{
    /**
     * @var array
     */
    public $components = ['Auth'];

    /**
     * @var array
     */
    protected $_defaultConfig = [
        'users_table' => 'User.Users',
        'roles_table' => 'User.Roles',
        'permissions_table' => 'User.Permissions',
    ];

    /**
     * @var \User\Model\Table\UsersTable
     */
    public $Users;

    /**
     * @var \User\Model\Table\RolesTable
     */
    public $Roles;

    /**
     * @var \User\Model\Table\PermissionsTable
     */
    public $Permissions;

    /**
     * {@inheritDoc}
     */
    public function initialize(array $config)
    {
        $this->Users = TableRegistry::getTableLocator()->get($this->getConfig('users_table'));
        $this->Roles = TableRegistry::getTableLocator()->get($this->getConfig('roles_table'));
        $this->Permissions = TableRegistry::getTableLocator()->get($this->getConfig('permissions_table'));
    }

    /**
     * Get current authenticated user
     * via AuthComponent
     *
     * @return array
     */
    public function getAuthUser()
    {
        return $this->Auth->user();
    }

    /**
     * Get user by model and id
     *
     * @param int $userId User ID
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function getUser($userId)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }

    /**
     * Get roles of user
     *
     * @param int $userId User ID
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function getUserRoles($userId)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }

    /**
     * Get permissions of user
     *
     * @param int $userId User ID
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function getUserPermissions($userId)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }

    /**
     * Get role by id
     *
     * @param int $roleId Role ID
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function getRole($roleId)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }

    /**
     * Get list of users associated with given role
     *
     * @param int $roleId Role ID
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function getRoleUsers($roleId)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }

    /**
     * Get list of permissions associated with given role
     *
     * @param int $roleId Role ID
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function getRolePermissions($roleId)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }

    /**
     * Get permission by id
     *
     * @param int $permId Permission ID
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function getPermission($permId)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }

    /**
     * Get list of roles associated with given permission
     *
     * @param int $permId Permission ID
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function getPermissionRoles($permId)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }

    /**
     * Get list of permissions associated with given permission
     *
     * @param int $permId Permission ID
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function getPermissionUsers($permId)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }

    /**
     * @param string $user User name
     * @param string $role Role name
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function userAddRole($user, $role)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }

    /**
     * @param string $role Role name
     * @param string $permission Permission name
     * @throws \Cake\Http\Exception\NotImplementedException
     * @return void
     */
    public function roleAddPermission($role, $permission)
    {
        throw new NotImplementedException(self::class . '::' . __FUNCTION__ . "() not implemented yet");
    }
}
