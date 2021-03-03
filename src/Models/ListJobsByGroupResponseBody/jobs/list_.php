<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListJobsByGroupResponseBody\jobs;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListJobsByGroupResponseBody\jobs\list_\contacts;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListJobsByGroupResponseBody\jobs\list_\extras;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListJobsByGroupResponseBody\jobs\list_\summary;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $callingNumbers;

    /**
     * @var summary[]
     */
    public $summary;

    /**
     * @var contacts[]
     */
    public $contacts;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $failureReason;

    /**
     * @var int
     */
    public $systemPriority;

    /**
     * @var extras[]
     */
    public $extras;

    /**
     * @var string
     */
    public $referenceId;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $jobId;
    protected $_name = [
        'status'         => 'Status',
        'callingNumbers' => 'CallingNumbers',
        'summary'        => 'Summary',
        'contacts'       => 'Contacts',
        'priority'       => 'Priority',
        'failureReason'  => 'FailureReason',
        'systemPriority' => 'SystemPriority',
        'extras'         => 'Extras',
        'referenceId'    => 'ReferenceId',
        'scenarioId'     => 'ScenarioId',
        'strategyId'     => 'StrategyId',
        'groupId'        => 'GroupId',
        'jobId'          => 'JobId',
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
        if (null !== $this->callingNumbers) {
            $res['CallingNumbers'] = $this->callingNumbers;
        }
        if (null !== $this->summary) {
            $res['Summary'] = [];
            if (null !== $this->summary && \is_array($this->summary)) {
                $n = 0;
                foreach ($this->summary as $item) {
                    $res['Summary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = [];
            if (null !== $this->contacts && \is_array($this->contacts)) {
                $n = 0;
                foreach ($this->contacts as $item) {
                    $res['Contacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->failureReason) {
            $res['FailureReason'] = $this->failureReason;
        }
        if (null !== $this->systemPriority) {
            $res['SystemPriority'] = $this->systemPriority;
        }
        if (null !== $this->extras) {
            $res['Extras'] = [];
            if (null !== $this->extras && \is_array($this->extras)) {
                $n = 0;
                foreach ($this->extras as $item) {
                    $res['Extras'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CallingNumbers'])) {
            if (!empty($map['CallingNumbers'])) {
                $model->callingNumbers = $map['CallingNumbers'];
            }
        }
        if (isset($map['Summary'])) {
            if (!empty($map['Summary'])) {
                $model->summary = [];
                $n              = 0;
                foreach ($map['Summary'] as $item) {
                    $model->summary[$n++] = null !== $item ? summary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n               = 0;
                foreach ($map['Contacts'] as $item) {
                    $model->contacts[$n++] = null !== $item ? contacts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['FailureReason'])) {
            $model->failureReason = $map['FailureReason'];
        }
        if (isset($map['SystemPriority'])) {
            $model->systemPriority = $map['SystemPriority'];
        }
        if (isset($map['Extras'])) {
            if (!empty($map['Extras'])) {
                $model->extras = [];
                $n             = 0;
                foreach ($map['Extras'] as $item) {
                    $model->extras[$n++] = null !== $item ? extras::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
