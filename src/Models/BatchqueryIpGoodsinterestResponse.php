<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class BatchqueryIpGoodsinterestResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // ip重要信息
    /**
     * @var IpEmphasisInfo[]
     */
    public $ipList;

    // 结果总数，不是列表值，用于分页
    /**
     * @var int
     */
    public $allCount;
    protected $_name = [
        'reqMsgId'   => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg'  => 'result_msg',
        'ipList'     => 'ip_list',
        'allCount'   => 'all_count',
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
        if (null !== $this->ipList) {
            $res['ip_list'] = [];
            if (null !== $this->ipList && \is_array($this->ipList)) {
                $n = 0;
                foreach ($this->ipList as $item) {
                    $res['ip_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->allCount) {
            $res['all_count'] = $this->allCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchqueryIpGoodsinterestResponse
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
        if (isset($map['ip_list'])) {
            if (!empty($map['ip_list'])) {
                $model->ipList = [];
                $n             = 0;
                foreach ($map['ip_list'] as $item) {
                    $model->ipList[$n++] = null !== $item ? IpEmphasisInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['all_count'])) {
            $model->allCount = $map['all_count'];
        }

        return $model;
    }
}
