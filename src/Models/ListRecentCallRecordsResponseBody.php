<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords;
use AlibabaCloud\Tea\Model;

class ListRecentCallRecordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var callDetailRecords
     */
    public $callDetailRecords;
    protected $_name = [
        'requestId'         => 'RequestId',
        'success'           => 'Success',
        'code'              => 'Code',
        'message'           => 'Message',
        'httpStatusCode'    => 'HttpStatusCode',
        'callDetailRecords' => 'CallDetailRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->callDetailRecords) {
            $res['CallDetailRecords'] = null !== $this->callDetailRecords ? $this->callDetailRecords->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRecentCallRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['CallDetailRecords'])) {
            $model->callDetailRecords = callDetailRecords::fromMap($map['CallDetailRecords']);
        }

        return $model;
    }
}
