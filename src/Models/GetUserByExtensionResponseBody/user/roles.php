<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody\user;

use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @var string
     */
    public $roleDescription;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'roleDescription' => 'RoleDescription',
        'instanceId'      => 'InstanceId',
        'roleName'        => 'RoleName',
        'roleId'          => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleDescription) {
            $res['RoleDescription'] = $this->roleDescription;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleDescription'])) {
            $model->roleDescription = $map['RoleDescription'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
