<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetCallMeasureSummaryReportResponseBody\numberReports\list_;

use AlibabaCloud\Tea\Model;

class numberReport extends Model
{
    /**
     * @var int
     */
    public $day;

    /**
     * @var int
     */
    public $year;

    /**
     * @var int
     */
    public $inboundDurationByMinute;

    /**
     * @var int
     */
    public $outboundCount;

    /**
     * @var int
     */
    public $outboundDurationByMinute;

    /**
     * @var string
     */
    public $number;

    /**
     * @var int
     */
    public $inboundCount;

    /**
     * @var int
     */
    public $month;
    protected $_name = [
        'day'                      => 'Day',
        'year'                     => 'Year',
        'inboundDurationByMinute'  => 'InboundDurationByMinute',
        'outboundCount'            => 'OutboundCount',
        'outboundDurationByMinute' => 'OutboundDurationByMinute',
        'number'                   => 'Number',
        'inboundCount'             => 'InboundCount',
        'month'                    => 'Month',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->year) {
            $res['Year'] = $this->year;
        }
        if (null !== $this->inboundDurationByMinute) {
            $res['InboundDurationByMinute'] = $this->inboundDurationByMinute;
        }
        if (null !== $this->outboundCount) {
            $res['OutboundCount'] = $this->outboundCount;
        }
        if (null !== $this->outboundDurationByMinute) {
            $res['OutboundDurationByMinute'] = $this->outboundDurationByMinute;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->inboundCount) {
            $res['InboundCount'] = $this->inboundCount;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return numberReport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }
        if (isset($map['InboundDurationByMinute'])) {
            $model->inboundDurationByMinute = $map['InboundDurationByMinute'];
        }
        if (isset($map['OutboundCount'])) {
            $model->outboundCount = $map['OutboundCount'];
        }
        if (isset($map['OutboundDurationByMinute'])) {
            $model->outboundDurationByMinute = $map['OutboundDurationByMinute'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['InboundCount'])) {
            $model->inboundCount = $map['InboundCount'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }

        return $model;
    }
}
