<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class QueryCouponCollectionResponse extends Model
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

    // 批次详情
    /**
     * @var CouponCollection
     */
    public $couponCollection;

    // 交易区块高度
    /**
     * @var int
     */
    public $blockNumber;
    protected $_name = [
        'reqMsgId'         => 'req_msg_id',
        'resultCode'       => 'result_code',
        'resultMsg'        => 'result_msg',
        'couponCollection' => 'coupon_collection',
        'blockNumber'      => 'block_number',
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
        if (null !== $this->couponCollection) {
            $res['coupon_collection'] = null !== $this->couponCollection ? $this->couponCollection->toMap() : null;
        }
        if (null !== $this->blockNumber) {
            $res['block_number'] = $this->blockNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCouponCollectionResponse
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
        if (isset($map['coupon_collection'])) {
            $model->couponCollection = CouponCollection::fromMap($map['coupon_collection']);
        }
        if (isset($map['block_number'])) {
            $model->blockNumber = $map['block_number'];
        }

        return $model;
    }
}