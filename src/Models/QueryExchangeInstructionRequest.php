<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class QueryExchangeInstructionRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 链ID
    /**
     * @var string
     */
    public $chainId;

    // 权益商品ID
    /**
     * @var string
     */
    public $equityId;

    // 发起操作的租户ID
    /**
     * @var string
     */
    public $optTenantId;

    // 原始订单交易ID。由采购商在创建对换单时传入，不可更新。
    /**
     * @var string
     */
    public $originTxId;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'chainId'           => 'chain_id',
        'equityId'          => 'equity_id',
        'optTenantId'       => 'opt_tenant_id',
        'originTxId'        => 'origin_tx_id',
    ];

    public function validate()
    {
        Model::validateRequired('chainId', $this->chainId, true);
        Model::validateRequired('equityId', $this->equityId, true);
        Model::validateRequired('optTenantId', $this->optTenantId, true);
        Model::validateRequired('originTxId', $this->originTxId, true);
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
        if (null !== $this->chainId) {
            $res['chain_id'] = $this->chainId;
        }
        if (null !== $this->equityId) {
            $res['equity_id'] = $this->equityId;
        }
        if (null !== $this->optTenantId) {
            $res['opt_tenant_id'] = $this->optTenantId;
        }
        if (null !== $this->originTxId) {
            $res['origin_tx_id'] = $this->originTxId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryExchangeInstructionRequest
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
        if (isset($map['chain_id'])) {
            $model->chainId = $map['chain_id'];
        }
        if (isset($map['equity_id'])) {
            $model->equityId = $map['equity_id'];
        }
        if (isset($map['opt_tenant_id'])) {
            $model->optTenantId = $map['opt_tenant_id'];
        }
        if (isset($map['origin_tx_id'])) {
            $model->originTxId = $map['origin_tx_id'];
        }

        return $model;
    }
}
