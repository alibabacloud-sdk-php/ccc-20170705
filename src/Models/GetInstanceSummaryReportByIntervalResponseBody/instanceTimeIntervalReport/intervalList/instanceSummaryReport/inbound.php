<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceSummaryReportByIntervalResponseBody\instanceTimeIntervalReport\intervalList\instanceSummaryReport;

use AlibabaCloud\Tea\Model;

class inbound extends Model
{
    /**
     * @var int
     */
    public $averageRingTime;

    /**
     * @var int
     */
    public $averageTalkTime;

    /**
     * @var int
     */
    public $averageWaitTime;

    /**
     * @var int
     */
    public $averageWorkTime;

    /**
     * @var int
     */
    public $callsAbandonedInIVR;

    /**
     * @var int
     */
    public $callsAbandonedInQueue;

    /**
     * @var int
     */
    public $callsHandled;

    /**
     * @var int
     */
    public $callsIncomingIVR;

    /**
     * @var int
     */
    public $callsIncomingLine;

    /**
     * @var int
     */
    public $callsIncomingQueue;

    /**
     * @var int
     */
    public $callsOffered;

    /**
     * @var float
     */
    public $handleRate;

    /**
     * @var int
     */
    public $maxRingTime;

    /**
     * @var string
     */
    public $maxTalkTime;

    /**
     * @var int
     */
    public $maxWaitTime;

    /**
     * @var int
     */
    public $maxWorkTime;

    /**
     * @var float
     */
    public $satisfactionIndex;

    /**
     * @var int
     */
    public $satisfactionSurveysOffered;

    /**
     * @var int
     */
    public $satisfactionSurveysResponded;

    /**
     * @var float
     */
    public $serviceLevel20;

    /**
     * @var int
     */
    public $totalRingTime;

    /**
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var int
     */
    public $totalWaitTime;

    /**
     * @var int
     */
    public $totalWorkTime;
    protected $_name = [
        'averageRingTime'              => 'AverageRingTime',
        'averageTalkTime'              => 'AverageTalkTime',
        'averageWaitTime'              => 'AverageWaitTime',
        'averageWorkTime'              => 'AverageWorkTime',
        'callsAbandonedInIVR'          => 'CallsAbandonedInIVR',
        'callsAbandonedInQueue'        => 'CallsAbandonedInQueue',
        'callsHandled'                 => 'CallsHandled',
        'callsIncomingIVR'             => 'CallsIncomingIVR',
        'callsIncomingLine'            => 'CallsIncomingLine',
        'callsIncomingQueue'           => 'CallsIncomingQueue',
        'callsOffered'                 => 'CallsOffered',
        'handleRate'                   => 'HandleRate',
        'maxRingTime'                  => 'MaxRingTime',
        'maxTalkTime'                  => 'MaxTalkTime',
        'maxWaitTime'                  => 'MaxWaitTime',
        'maxWorkTime'                  => 'MaxWorkTime',
        'satisfactionIndex'            => 'SatisfactionIndex',
        'satisfactionSurveysOffered'   => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'serviceLevel20'               => 'ServiceLevel20',
        'totalRingTime'                => 'TotalRingTime',
        'totalTalkTime'                => 'TotalTalkTime',
        'totalWaitTime'                => 'TotalWaitTime',
        'totalWorkTime'                => 'TotalWorkTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageRingTime) {
            $res['AverageRingTime'] = $this->averageRingTime;
        }
        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }
        if (null !== $this->averageWaitTime) {
            $res['AverageWaitTime'] = $this->averageWaitTime;
        }
        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
        }
        if (null !== $this->callsAbandonedInIVR) {
            $res['CallsAbandonedInIVR'] = $this->callsAbandonedInIVR;
        }
        if (null !== $this->callsAbandonedInQueue) {
            $res['CallsAbandonedInQueue'] = $this->callsAbandonedInQueue;
        }
        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }
        if (null !== $this->callsIncomingIVR) {
            $res['CallsIncomingIVR'] = $this->callsIncomingIVR;
        }
        if (null !== $this->callsIncomingLine) {
            $res['CallsIncomingLine'] = $this->callsIncomingLine;
        }
        if (null !== $this->callsIncomingQueue) {
            $res['CallsIncomingQueue'] = $this->callsIncomingQueue;
        }
        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
        }
        if (null !== $this->handleRate) {
            $res['HandleRate'] = $this->handleRate;
        }
        if (null !== $this->maxRingTime) {
            $res['MaxRingTime'] = $this->maxRingTime;
        }
        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }
        if (null !== $this->maxWaitTime) {
            $res['MaxWaitTime'] = $this->maxWaitTime;
        }
        if (null !== $this->maxWorkTime) {
            $res['MaxWorkTime'] = $this->maxWorkTime;
        }
        if (null !== $this->satisfactionIndex) {
            $res['SatisfactionIndex'] = $this->satisfactionIndex;
        }
        if (null !== $this->satisfactionSurveysOffered) {
            $res['SatisfactionSurveysOffered'] = $this->satisfactionSurveysOffered;
        }
        if (null !== $this->satisfactionSurveysResponded) {
            $res['SatisfactionSurveysResponded'] = $this->satisfactionSurveysResponded;
        }
        if (null !== $this->serviceLevel20) {
            $res['ServiceLevel20'] = $this->serviceLevel20;
        }
        if (null !== $this->totalRingTime) {
            $res['TotalRingTime'] = $this->totalRingTime;
        }
        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
        }
        if (null !== $this->totalWaitTime) {
            $res['TotalWaitTime'] = $this->totalWaitTime;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inbound
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageRingTime'])) {
            $model->averageRingTime = $map['AverageRingTime'];
        }
        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }
        if (isset($map['AverageWaitTime'])) {
            $model->averageWaitTime = $map['AverageWaitTime'];
        }
        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
        }
        if (isset($map['CallsAbandonedInIVR'])) {
            $model->callsAbandonedInIVR = $map['CallsAbandonedInIVR'];
        }
        if (isset($map['CallsAbandonedInQueue'])) {
            $model->callsAbandonedInQueue = $map['CallsAbandonedInQueue'];
        }
        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }
        if (isset($map['CallsIncomingIVR'])) {
            $model->callsIncomingIVR = $map['CallsIncomingIVR'];
        }
        if (isset($map['CallsIncomingLine'])) {
            $model->callsIncomingLine = $map['CallsIncomingLine'];
        }
        if (isset($map['CallsIncomingQueue'])) {
            $model->callsIncomingQueue = $map['CallsIncomingQueue'];
        }
        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }
        if (isset($map['HandleRate'])) {
            $model->handleRate = $map['HandleRate'];
        }
        if (isset($map['MaxRingTime'])) {
            $model->maxRingTime = $map['MaxRingTime'];
        }
        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }
        if (isset($map['MaxWaitTime'])) {
            $model->maxWaitTime = $map['MaxWaitTime'];
        }
        if (isset($map['MaxWorkTime'])) {
            $model->maxWorkTime = $map['MaxWorkTime'];
        }
        if (isset($map['SatisfactionIndex'])) {
            $model->satisfactionIndex = $map['SatisfactionIndex'];
        }
        if (isset($map['SatisfactionSurveysOffered'])) {
            $model->satisfactionSurveysOffered = $map['SatisfactionSurveysOffered'];
        }
        if (isset($map['SatisfactionSurveysResponded'])) {
            $model->satisfactionSurveysResponded = $map['SatisfactionSurveysResponded'];
        }
        if (isset($map['ServiceLevel20'])) {
            $model->serviceLevel20 = $map['ServiceLevel20'];
        }
        if (isset($map['TotalRingTime'])) {
            $model->totalRingTime = $map['TotalRingTime'];
        }
        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }
        if (isset($map['TotalWaitTime'])) {
            $model->totalWaitTime = $map['TotalWaitTime'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }

        return $model;
    }
}
