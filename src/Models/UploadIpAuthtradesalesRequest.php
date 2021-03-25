<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class UploadIpAuthtradesalesRequest extends Model
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

    // 请求参数
    /**
     * @var BaseRequestInfo
     */
    public $baseRequest;

    // 上传记录的用户的链上账户Id
    /**
     * @var string
     */
    public $accountId;

    // 订单ID
    /**
     * @var string
     */
    public $ipOrderId;

    // true 只上链不走真实支付，false 上链并链下真实支付账单
    /**
     * @var bool
     */
    public $onlyCallBlockchain;

    // 授权佣金比例
    /**
     * @var string
     */
    public $authRate;

    // 本次结算周期开始时间
    /**
     * @var int
     */
    public $settlementBeginTime;

    // 本次结算周期结束时间
    /**
     * @var int
     */
    public $settlementEndTime;

    // 终端商品销售数量
    /**
     * @var int
     */
    public $amount;

    // 销售金额
    /**
     * @var string
     */
    public $sales;

    // 实付金额
    /**
     * @var string
     */
    public $payment;

    // 商品信息
    /**
     * @var string
     */
    public $goodsInfo;

    // 数据上传操作者
    /**
     * @var string
     */
    public $operator;

    // 备注信息
    /**
     * @var string
     */
    public $memo;
    protected $_name = [
        'authToken'           => 'auth_token',
        'productInstanceId'   => 'product_instance_id',
        'baseRequest'         => 'base_request',
        'accountId'           => 'account_id',
        'ipOrderId'           => 'ip_order_id',
        'onlyCallBlockchain'  => 'only_call_blockchain',
        'authRate'            => 'auth_rate',
        'settlementBeginTime' => 'settlement_begin_time',
        'settlementEndTime'   => 'settlement_end_time',
        'amount'              => 'amount',
        'sales'               => 'sales',
        'payment'             => 'payment',
        'goodsInfo'           => 'goods_info',
        'operator'            => 'operator',
        'memo'                => 'memo',
    ];

    public function validate()
    {
        Model::validateRequired('baseRequest', $this->baseRequest, true);
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('ipOrderId', $this->ipOrderId, true);
        Model::validateRequired('onlyCallBlockchain', $this->onlyCallBlockchain, true);
        Model::validateRequired('authRate', $this->authRate, true);
        Model::validateRequired('settlementBeginTime', $this->settlementBeginTime, true);
        Model::validateRequired('settlementEndTime', $this->settlementEndTime, true);
        Model::validateRequired('amount', $this->amount, true);
        Model::validateRequired('sales', $this->sales, true);
        Model::validateRequired('payment', $this->payment, true);
        Model::validateRequired('goodsInfo', $this->goodsInfo, true);
        Model::validateRequired('operator', $this->operator, true);
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
        if (null !== $this->ipOrderId) {
            $res['ip_order_id'] = $this->ipOrderId;
        }
        if (null !== $this->onlyCallBlockchain) {
            $res['only_call_blockchain'] = $this->onlyCallBlockchain;
        }
        if (null !== $this->authRate) {
            $res['auth_rate'] = $this->authRate;
        }
        if (null !== $this->settlementBeginTime) {
            $res['settlement_begin_time'] = $this->settlementBeginTime;
        }
        if (null !== $this->settlementEndTime) {
            $res['settlement_end_time'] = $this->settlementEndTime;
        }
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->sales) {
            $res['sales'] = $this->sales;
        }
        if (null !== $this->payment) {
            $res['payment'] = $this->payment;
        }
        if (null !== $this->goodsInfo) {
            $res['goods_info'] = $this->goodsInfo;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadIpAuthtradesalesRequest
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
        if (isset($map['ip_order_id'])) {
            $model->ipOrderId = $map['ip_order_id'];
        }
        if (isset($map['only_call_blockchain'])) {
            $model->onlyCallBlockchain = $map['only_call_blockchain'];
        }
        if (isset($map['auth_rate'])) {
            $model->authRate = $map['auth_rate'];
        }
        if (isset($map['settlement_begin_time'])) {
            $model->settlementBeginTime = $map['settlement_begin_time'];
        }
        if (isset($map['settlement_end_time'])) {
            $model->settlementEndTime = $map['settlement_end_time'];
        }
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['sales'])) {
            $model->sales = $map['sales'];
        }
        if (isset($map['payment'])) {
            $model->payment = $map['payment'];
        }
        if (isset($map['goods_info'])) {
            $model->goodsInfo = $map['goods_info'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }

        return $model;
    }
}
