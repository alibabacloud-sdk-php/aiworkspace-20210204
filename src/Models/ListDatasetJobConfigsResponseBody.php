<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetJobConfigsResponseBody extends Model
{
    /**
     * @var DatasetJobConfig[]
     */
    public $datasetJobConfigs;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'datasetJobConfigs' => 'DatasetJobConfigs',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->datasetJobConfigs)) {
            Model::validateArray($this->datasetJobConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetJobConfigs) {
            if (\is_array($this->datasetJobConfigs)) {
                $res['DatasetJobConfigs'] = [];
                $n1                       = 0;
                foreach ($this->datasetJobConfigs as $item1) {
                    $res['DatasetJobConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetJobConfigs'])) {
            if (!empty($map['DatasetJobConfigs'])) {
                $model->datasetJobConfigs = [];
                $n1                       = 0;
                foreach ($map['DatasetJobConfigs'] as $item1) {
                    $model->datasetJobConfigs[$n1++] = DatasetJobConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
