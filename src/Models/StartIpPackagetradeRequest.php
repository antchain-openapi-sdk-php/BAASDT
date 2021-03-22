<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class StartIpPackagetradeRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    // 集群ID
    /**
     * @var string
     */
    public $productInstanceId;

    // 基础请求参数
    /**
     * @var BaseRequestInfo
     */
    public $baseRequest;

    // 买方的链上账户Id
    /**
     * @var string
     */
    public $accountId;

    // IP ID
    /**
     * @var string
     */
    public $ipId;

    // true 只上链不走真实支付，false 上链并链下真实支付账单
    /**
     * @var bool
     */
    public $onlyCallBlockchain;

    // 终端商品价格区间
    /**
     * @var string
     */
    public $priceRange;

    // 套餐中包含终端商品数量
    /**
     * @var int
     */
    public $amount;

    // 套餐交易应付金额，单位元，保留两位小数
    /**
     * @var string
     */
    public $expectedTotalPrice;

    // 授权合作开始期限（毫秒时间戳）
    /**
     * @var int
     */
    public $authBeginTime;

    // 授权合作结束期限（毫秒时间戳）
    /**
     * @var int
     */
    public $authEndTime;

    // 备注信息
    /**
     * @var string
     */
    public $memo;
    protected $_name = [
        'authToken'          => 'auth_token',
        'productInstanceId'  => 'product_instance_id',
        'baseRequest'        => 'base_request',
        'accountId'          => 'account_id',
        'ipId'               => 'ip_id',
        'onlyCallBlockchain' => 'only_call_blockchain',
        'priceRange'         => 'price_range',
        'amount'             => 'amount',
        'expectedTotalPrice' => 'expected_total_price',
        'authBeginTime'      => 'auth_begin_time',
        'authEndTime'        => 'auth_end_time',
        'memo'               => 'memo',
    ];

    public function validate()
    {
        Model::validateRequired('baseRequest', $this->baseRequest, true);
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('ipId', $this->ipId, true);
        Model::validateRequired('onlyCallBlockchain', $this->onlyCallBlockchain, true);
        Model::validateRequired('priceRange', $this->priceRange, true);
        Model::validateRequired('amount', $this->amount, true);
        Model::validateRequired('expectedTotalPrice', $this->expectedTotalPrice, true);
        Model::validateRequired('authBeginTime', $this->authBeginTime, true);
        Model::validateRequired('authEndTime', $this->authEndTime, true);
        Model::validateRequired('memo', $this->memo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->baseRequest) {
            $res['base_request'] = null !== $this->baseRequest ? $this->baseRequest->toMap() : null;
        }
        if (null !== $this->accountId) {
            $res['account_id'] = $this->accountId;
        }
        if (null !== $this->ipId) {
            $res['ip_id'] = $this->ipId;
        }
        if (null !== $this->onlyCallBlockchain) {
            $res['only_call_blockchain'] = $this->onlyCallBlockchain;
        }
        if (null !== $this->priceRange) {
            $res['price_range'] = $this->priceRange;
        }
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->expectedTotalPrice) {
            $res['expected_total_price'] = $this->expectedTotalPrice;
        }
        if (null !== $this->authBeginTime) {
            $res['auth_begin_time'] = $this->authBeginTime;
        }
        if (null !== $this->authEndTime) {
            $res['auth_end_time'] = $this->authEndTime;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartIpPackagetradeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['base_request'])) {
            $model->baseRequest = BaseRequestInfo::fromMap($map['base_request']);
        }
        if (isset($map['account_id'])) {
            $model->accountId = $map['account_id'];
        }
        if (isset($map['ip_id'])) {
            $model->ipId = $map['ip_id'];
        }
        if (isset($map['only_call_blockchain'])) {
            $model->onlyCallBlockchain = $map['only_call_blockchain'];
        }
        if (isset($map['price_range'])) {
            $model->priceRange = $map['price_range'];
        }
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['expected_total_price'])) {
            $model->expectedTotalPrice = $map['expected_total_price'];
        }
        if (isset($map['auth_begin_time'])) {
            $model->authBeginTime = $map['auth_begin_time'];
        }
        if (isset($map['auth_end_time'])) {
            $model->authEndTime = $map['auth_end_time'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }

        return $model;
    }
}