<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetPermissionResponseBody\permissionRules;
use AlibabaCloud\Tea\Model;

class GetPermissionResponseBody extends Model
{
    /**
     * @example PaiDLC:ListJobs
     *
     * @var string
     */
    public $permissionCode;

    /**
     * @var permissionRules[]
     */
    public $permissionRules;

    /**
     * @example 5A14FA81-DD4E-******-6343FE44B941
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionCode) {
            $res['PermissionCode'] = $this->permissionCode;
        }
        if (null !== $this->permissionRules) {
            $res['PermissionRules'] = [];
            if (null !== $this->permissionRules && \is_array($this->permissionRules)) {
                $n = 0;
                foreach ($this->permissionRules as $item) {
                    $res['PermissionRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPermissionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionCode'])) {
            $model->permissionCode = $map['PermissionCode'];
        }
        if (isset($map['PermissionRules'])) {
            if (!empty($map['PermissionRules'])) {
                $model->permissionRules = [];
                $n                      = 0;
                foreach ($map['PermissionRules'] as $item) {
                    $model->permissionRules[$n++] = null !== $item ? permissionRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
