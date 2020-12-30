<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetJobStatusByCallIdResponseBody\job;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobStatusByCallIdResponseBody\job\tasks\contact;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobStatusByCallIdResponseBody\job\tasks\conversation;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $planedTime;

    /**
     * @var string
     */
    public $chatbotId;

    /**
     * @var int
     */
    public $actualTime;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var contact
     */
    public $contact;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $brief;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var conversation[]
     */
    public $conversation;
    protected $_name = [
        'status'        => 'Status',
        'planedTime'    => 'PlanedTime',
        'chatbotId'     => 'ChatbotId',
        'actualTime'    => 'ActualTime',
        'calledNumber'  => 'CalledNumber',
        'endTime'       => 'EndTime',
        'scenarioId'    => 'ScenarioId',
        'contact'       => 'Contact',
        'jobId'         => 'JobId',
        'callId'        => 'CallId',
        'callingNumber' => 'CallingNumber',
        'brief'         => 'Brief',
        'duration'      => 'Duration',
        'taskId'        => 'TaskId',
        'conversation'  => 'Conversation',
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
        if (null !== $this->planedTime) {
            $res['PlanedTime'] = $this->planedTime;
        }
        if (null !== $this->chatbotId) {
            $res['ChatbotId'] = $this->chatbotId;
        }
        if (null !== $this->actualTime) {
            $res['ActualTime'] = $this->actualTime;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->contact) {
            $res['Contact'] = null !== $this->contact ? $this->contact->toMap() : null;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->brief) {
            $res['Brief'] = $this->brief;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->conversation) {
            $res['Conversation'] = [];
            if (null !== $this->conversation && \is_array($this->conversation)) {
                $n = 0;
                foreach ($this->conversation as $item) {
                    $res['Conversation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PlanedTime'])) {
            $model->planedTime = $map['PlanedTime'];
        }
        if (isset($map['ChatbotId'])) {
            $model->chatbotId = $map['ChatbotId'];
        }
        if (isset($map['ActualTime'])) {
            $model->actualTime = $map['ActualTime'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['Contact'])) {
            $model->contact = contact::fromMap($map['Contact']);
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['Brief'])) {
            $model->brief = $map['Brief'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Conversation'])) {
            if (!empty($map['Conversation'])) {
                $model->conversation = [];
                $n                   = 0;
                foreach ($map['Conversation'] as $item) {
                    $model->conversation[$n++] = null !== $item ? conversation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
