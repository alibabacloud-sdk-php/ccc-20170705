<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody\user\detail;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody\user\roles;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetUserByExtensionResponseBody\user\skillLevels;
use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var detail
     */
    public $detail;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ramId;

    /**
     * @var roles[]
     */
    public $roles;

    /**
     * @var skillLevels[]
     */
    public $skillLevels;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'detail'      => 'Detail',
        'instanceId'  => 'InstanceId',
        'ramId'       => 'RamId',
        'roles'       => 'Roles',
        'skillLevels' => 'SkillLevels',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }
        if (null !== $this->roles) {
            $res['Roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['Roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->skillLevels) {
            $res['SkillLevels'] = [];
            if (null !== $this->skillLevels && \is_array($this->skillLevels)) {
                $n = 0;
                foreach ($this->skillLevels as $item) {
                    $res['SkillLevels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n            = 0;
                foreach ($map['Roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SkillLevels'])) {
            if (!empty($map['SkillLevels'])) {
                $model->skillLevels = [];
                $n                  = 0;
                foreach ($map['SkillLevels'] as $item) {
                    $model->skillLevels[$n++] = null !== $item ? skillLevels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
