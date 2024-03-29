<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class UpdateIpAccountRequest extends Model
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

    // 基础参数
    /**
     * @var BaseRequestInfo
     */
    public $baseRequest;

    // 链上账户id
    /**
     * @var string
     */
    public $accountId;

    // 商户账户名称
    /**
     * @var string
     */
    public $merchantAliasName;

    // 商户类型(本期仅支持: 1:企业, 6:个人商户)
    /**
     * @var int
     */
    public $merchantType;

    // 商户证件类型，201--统一社会信用证--营业执照号；
    /**
     * @var int
     */
    public $merchantCertType;

    // 本期支持统一社会信用证代码
    /**
     * @var string
     */
    public $merchantCertNumber;

    // 联系人信息
    /**
     * @var IPContactInfo
     */
    public $contactInfo;

    // 商户经营地址
    /**
     * @var IPAddressInfo
     */
    public $contactAddress;

    // 备注信息
    /**
     * @var string
     */
    public $memo;

    // 店铺名称
    /**
     * @var string
     */
    public $shopName;

    // 更多联系信息，用于运营联系商家
    // 注：更新时如果为空，则联系人信息被覆盖为空，更新时为空相当于删除功能
    /**
     * @var SimpleContactInfo[]
     */
    public $additionalContactInfo;
    protected $_name = [
        'authToken'             => 'auth_token',
        'productInstanceId'     => 'product_instance_id',
        'baseRequest'           => 'base_request',
        'accountId'             => 'account_id',
        'merchantAliasName'     => 'merchant_alias_name',
        'merchantType'          => 'merchant_type',
        'merchantCertType'      => 'merchant_cert_type',
        'merchantCertNumber'    => 'merchant_cert_number',
        'contactInfo'           => 'contact_info',
        'contactAddress'        => 'contact_address',
        'memo'                  => 'memo',
        'shopName'              => 'shop_name',
        'additionalContactInfo' => 'additional_contact_info',
    ];

    public function validate()
    {
        Model::validateRequired('baseRequest', $this->baseRequest, true);
        Model::validateRequired('accountId', $this->accountId, true);
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
        if (null !== $this->merchantAliasName) {
            $res['merchant_alias_name'] = $this->merchantAliasName;
        }
        if (null !== $this->merchantType) {
            $res['merchant_type'] = $this->merchantType;
        }
        if (null !== $this->merchantCertType) {
            $res['merchant_cert_type'] = $this->merchantCertType;
        }
        if (null !== $this->merchantCertNumber) {
            $res['merchant_cert_number'] = $this->merchantCertNumber;
        }
        if (null !== $this->contactInfo) {
            $res['contact_info'] = null !== $this->contactInfo ? $this->contactInfo->toMap() : null;
        }
        if (null !== $this->contactAddress) {
            $res['contact_address'] = null !== $this->contactAddress ? $this->contactAddress->toMap() : null;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->shopName) {
            $res['shop_name'] = $this->shopName;
        }
        if (null !== $this->additionalContactInfo) {
            $res['additional_contact_info'] = [];
            if (null !== $this->additionalContactInfo && \is_array($this->additionalContactInfo)) {
                $n = 0;
                foreach ($this->additionalContactInfo as $item) {
                    $res['additional_contact_info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIpAccountRequest
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
        if (isset($map['merchant_alias_name'])) {
            $model->merchantAliasName = $map['merchant_alias_name'];
        }
        if (isset($map['merchant_type'])) {
            $model->merchantType = $map['merchant_type'];
        }
        if (isset($map['merchant_cert_type'])) {
            $model->merchantCertType = $map['merchant_cert_type'];
        }
        if (isset($map['merchant_cert_number'])) {
            $model->merchantCertNumber = $map['merchant_cert_number'];
        }
        if (isset($map['contact_info'])) {
            $model->contactInfo = IPContactInfo::fromMap($map['contact_info']);
        }
        if (isset($map['contact_address'])) {
            $model->contactAddress = IPAddressInfo::fromMap($map['contact_address']);
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['shop_name'])) {
            $model->shopName = $map['shop_name'];
        }
        if (isset($map['additional_contact_info'])) {
            if (!empty($map['additional_contact_info'])) {
                $model->additionalContactInfo = [];
                $n                            = 0;
                foreach ($map['additional_contact_info'] as $item) {
                    $model->additionalContactInfo[$n++] = null !== $item ? SimpleContactInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
