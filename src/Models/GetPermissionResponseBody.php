<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetPermissionResponseBody\permissionRules;

class GetPermissionResponseBody extends Model
{
    /**
     * @var string
     */
    public $permissionCode;
    /**
     * @var permissionRules[]
     */
    public $permissionRules;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'permissionCode'  => 'PermissionCode',
        'permissionRules' => 'PermissionRules',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->permissionRules)) {
            Model::validateArray($this->permissionRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissionCode) {
            $res['PermissionCode'] = $this->permissionCode;
        }

        if (null !== $this->permissionRules) {
            if (\is_array($this->permissionRules)) {
                $res['PermissionRules'] = [];
                $n1                     = 0;
                foreach ($this->permissionRules as $item1) {
                    $res['PermissionRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PermissionCode'])) {
            $model->permissionCode = $map['PermissionCode'];
        }

        if (isset($map['PermissionRules'])) {
            if (!empty($map['PermissionRules'])) {
                $model->permissionRules = [];
                $n1                     = 0;
                foreach ($map['PermissionRules'] as $item1) {
                    $model->permissionRules[$n1++] = permissionRules::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
