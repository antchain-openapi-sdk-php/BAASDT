<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class APIWhiteListInfo extends Model {
    protected $_name = [
        'chainId' => 'chain_id',
        'extension' => 'extension',
        'level' => 'level',
        'tenantId' => 'tenant_id',
        'updateTime' => 'update_time',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->chainId) {
            $res['chain_id'] = $this->chainId;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->updateTime) {
            $res['update_time'] = $this->updateTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return APIWhiteListInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['chain_id'])){
            $model->chainId = $map['chain_id'];
        }
        if(isset($map['extension'])){
            $model->extension = $map['extension'];
        }
        if(isset($map['level'])){
            $model->level = $map['level'];
        }
        if(isset($map['tenant_id'])){
            $model->tenantId = $map['tenant_id'];
        }
        if(isset($map['update_time'])){
            $model->updateTime = $map['update_time'];
        }
        return $model;
    }
    // 链ID
    /**
     * @example antdao
     * @var string
     */
    public $chainId;

    // 扩展字段
    /**
     * @example extension
     * @var string
     */
    public $extension;

    // 权限级别，暂时不用
    /**
     * @example 0
     * @var integer
     */
    public $level;

    // 租户ID
    /**
     * @example OKIJUHYG
     * @var string
     */
    public $tenantId;

    // 更新时间
    /**
     * @example 20200425204555
     * @var string
     */
    public $updateTime;

}
