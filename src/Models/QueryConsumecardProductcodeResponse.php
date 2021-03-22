<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class QueryConsumecardProductcodeResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMsg;

    // 场景码配置信息列表
    /**
     * @var ProductCodeInfo[]
     */
    public $productCodeInfos;
    protected $_name = [
        'reqMsgId'         => 'req_msg_id',
        'resultCode'       => 'result_code',
        'resultMsg'        => 'result_msg',
        'productCodeInfos' => 'product_code_infos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->productCodeInfos) {
            $res['product_code_infos'] = [];
            if (null !== $this->productCodeInfos && \is_array($this->productCodeInfos)) {
                $n = 0;
                foreach ($this->productCodeInfos as $item) {
                    $res['product_code_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConsumecardProductcodeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['product_code_infos'])) {
            if (!empty($map['product_code_infos'])) {
                $model->productCodeInfos = [];
                $n                       = 0;
                foreach ($map['product_code_infos'] as $item) {
                    $model->productCodeInfos[$n++] = null !== $item ? ProductCodeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}