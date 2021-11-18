<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListOutboundPhoneNumberOfUserResponseBody\numberList;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListOutboundPhoneNumberOfUserResponseBody\outboundPhoneNumbers;
use AlibabaCloud\Tea\Model;

class ListOutboundPhoneNumberOfUserResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var numberList
     */
    public $numberList;

    /**
     * @var outboundPhoneNumbers
     */
    public $outboundPhoneNumbers;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                 => 'Code',
        'httpStatusCode'       => 'HttpStatusCode',
        'message'              => 'Message',
        'numberList'           => 'NumberList',
        'outboundPhoneNumbers' => 'OutboundPhoneNumbers',
        'requestId'            => 'RequestId',
        'success'              => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->numberList) {
            $res['NumberList'] = null !== $this->numberList ? $this->numberList->toMap() : null;
        }
        if (null !== $this->outboundPhoneNumbers) {
            $res['OutboundPhoneNumbers'] = null !== $this->outboundPhoneNumbers ? $this->outboundPhoneNumbers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOutboundPhoneNumberOfUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NumberList'])) {
            $model->numberList = numberList::fromMap($map['NumberList']);
        }
        if (isset($map['OutboundPhoneNumbers'])) {
            $model->outboundPhoneNumbers = outboundPhoneNumbers::fromMap($map['OutboundPhoneNumbers']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
