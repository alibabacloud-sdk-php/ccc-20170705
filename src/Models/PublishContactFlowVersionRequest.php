<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class PublishContactFlowVersionRequest extends Model
{
    /**
     * @var string
     */
    public $contactFlowVersionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $useTianGong;
    protected $_name = [
        'contactFlowVersionId' => 'ContactFlowVersionId',
        'instanceId'           => 'InstanceId',
        'useTianGong'          => 'UseTianGong',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactFlowVersionId) {
            $res['ContactFlowVersionId'] = $this->contactFlowVersionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->useTianGong) {
            $res['UseTianGong'] = $this->useTianGong;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishContactFlowVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactFlowVersionId'])) {
            $model->contactFlowVersionId = $map['ContactFlowVersionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UseTianGong'])) {
            $model->useTianGong = $map['UseTianGong'];
        }

        return $model;
    }
}
