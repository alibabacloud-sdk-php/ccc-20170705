<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseResponseBody\contactFlow\versions;

use AlibabaCloud\Tea\Model;

class contactFlowVersion extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $contactFlowVersionId;

    /**
     * @var string
     */
    public $contactFlowVersionDescription;

    /**
     * @var string
     */
    public $lastModifiedBy;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'status'                        => 'Status',
        'lastModified'                  => 'LastModified',
        'version'                       => 'Version',
        'contactFlowVersionId'          => 'ContactFlowVersionId',
        'contactFlowVersionDescription' => 'ContactFlowVersionDescription',
        'lastModifiedBy'                => 'LastModifiedBy',
        'content'                       => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->contactFlowVersionId) {
            $res['ContactFlowVersionId'] = $this->contactFlowVersionId;
        }
        if (null !== $this->contactFlowVersionDescription) {
            $res['ContactFlowVersionDescription'] = $this->contactFlowVersionDescription;
        }
        if (null !== $this->lastModifiedBy) {
            $res['LastModifiedBy'] = $this->lastModifiedBy;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactFlowVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ContactFlowVersionId'])) {
            $model->contactFlowVersionId = $map['ContactFlowVersionId'];
        }
        if (isset($map['ContactFlowVersionDescription'])) {
            $model->contactFlowVersionDescription = $map['ContactFlowVersionDescription'];
        }
        if (isset($map['LastModifiedBy'])) {
            $model->lastModifiedBy = $map['LastModifiedBy'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
