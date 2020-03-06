<?php

namespace Rbac\Lib;

use Cake\Core\InstanceConfigTrait;
use Cake\ORM\TableRegistry;

/**
 * Created by PhpStorm.
 * User: flow
 * Date: 21.08.15
 * Time: 11:29
 */
class Rbac
{
    use InstanceConfigTrait;

    protected $_defaultConfig = [
        'users_table' => 'User.Users',
    ];

    protected $Users;

    protected $Roles;

    protected $Permissions;

    public function __construct(array $config = [])
    {
        $this->setConfig($config);

        $this->Users = TableRegistry::getTableLocator()->get($this->getConfig('users_table'));
        $this->Roles = TableRegistry::getTableLocator()->get('User.Roles');
        $this->Permissions = TableRegistry::getTableLocator()->get('User.Permissions');
    }

    /**
     * Get user by model and id
     * @param $modelName
     * @param $modelId
     */
    public function getUser($modelName, $modelId)
    {

    }

    /**
     * Get roles of user
     * @param $modelName
     * @param $modelId
     */
    public function getUserRoles($modelName, $modelId)
    {

    }

    /**
     * Get permissions of user
     * @param $modelName
     * @param $modelId
     */
    public function getUserPermissions($modelName, $modelId)
    {

    }

    /**
     * Get role by id
     * @param $roleId
     */
    public function getRole($roleId)
    {

    }

    /**
     * Get list of users associated with given role
     * @param $roleId
     */
    public function getRoleUsers($roleId)
    {

    }

    /**
     * Get list of permissions associated with given role
     * @param $roleId
     */
    public function getRolePermissions($roleId)
    {

    }

    /**
     * Get permission by id
     * @param $permId
     */
    public function getPermission($permId)
    {

    }

    /**
     * Get list of roles associated with given permission
     * @param $permId
     */
    public function getPermissionRoles($permId)
    {

    }

    /**
     * Get list of permissions associated with given permission
     * @param $permId
     */
    public function getPermissionUsers($permId)
    {

    }

    public function userAddRole($user, $role)
    {

    }

    public function roleAddPermission($role, $permission)
    {

    }

}