<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreatePredictiveJobGroupRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isDraft;

    /**
     * @var string
     */
    public $jobFilePath;

    /**
     * @var string[]
     */
    public $jobsJson;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ratio;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $strategyJson;

    /**
     * @var bool
     */
    public $timingSchedule;
    protected $_name = [
        'description'    => 'Description',
        'instanceId'     => 'InstanceId',
        'isDraft'        => 'IsDraft',
        'jobFilePath'    => 'JobFilePath',
        'jobsJson'       => 'JobsJson',
        'name'           => 'Name',
        'ratio'          => 'Ratio',
        'skillGroupId'   => 'SkillGroupId',
        'strategyJson'   => 'StrategyJson',
        'timingSchedule' => 'TimingSchedule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isDraft) {
            $res['IsDraft'] = $this->isDraft;
        }
        if (null !== $this->jobFilePath) {
            $res['JobFilePath'] = $this->jobFilePath;
        }
        if (null !== $this->jobsJson) {
            $res['JobsJson'] = $this->jobsJson;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
        }
        if (null !== $this->timingSchedule) {
            $res['TimingSchedule'] = $this->timingSchedule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePredictiveJobGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsDraft'])) {
            $model->isDraft = $map['IsDraft'];
        }
        if (isset($map['JobFilePath'])) {
            $model->jobFilePath = $map['JobFilePath'];
        }
        if (isset($map['JobsJson'])) {
            if (!empty($map['JobsJson'])) {
                $model->jobsJson = $map['JobsJson'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['StrategyJson'])) {
            $model->strategyJson = $map['StrategyJson'];
        }
        if (isset($map['TimingSchedule'])) {
            $model->timingSchedule = $map['TimingSchedule'];
        }

        return $model;
    }
}
