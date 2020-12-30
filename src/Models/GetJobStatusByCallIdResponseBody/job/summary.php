<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetJobStatusByCallIdResponseBody\job;

use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @var string
     */
    public $summaryName;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $summaryId;
    protected $_name = [
        'summaryName' => 'SummaryName',
        'category'    => 'Category',
        'content'     => 'Content',
        'summaryId'   => 'SummaryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summaryName) {
            $res['SummaryName'] = $this->summaryName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->summaryId) {
            $res['SummaryId'] = $this->summaryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SummaryName'])) {
            $model->summaryName = $map['SummaryName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SummaryId'])) {
            $model->summaryId = $map['SummaryId'];
        }

        return $model;
    }
}
