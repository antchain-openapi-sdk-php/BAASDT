<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class CheckIpCodeResponse extends Model
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

    // 被扫描的次数(包含本次)
    /**
     * @var int
     */
    public $scannedCount;

    // 扫描历史列表(仅展示最近扫描的50次信息)
    /**
     * @var IPCodeScannedInfo[]
     */
    public $scannedList;
    protected $_name = [
        'reqMsgId'     => 'req_msg_id',
        'resultCode'   => 'result_code',
        'resultMsg'    => 'result_msg',
        'scannedCount' => 'scanned_count',
        'scannedList'  => 'scanned_list',
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
        if (null !== $this->scannedCount) {
            $res['scanned_count'] = $this->scannedCount;
        }
        if (null !== $this->scannedList) {
            $res['scanned_list'] = [];
            if (null !== $this->scannedList && \is_array($this->scannedList)) {
                $n = 0;
                foreach ($this->scannedList as $item) {
                    $res['scanned_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckIpCodeResponse
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
        if (isset($map['scanned_count'])) {
            $model->scannedCount = $map['scanned_count'];
        }
        if (isset($map['scanned_list'])) {
            if (!empty($map['scanned_list'])) {
                $model->scannedList = [];
                $n                  = 0;
                foreach ($map['scanned_list'] as $item) {
                    $model->scannedList[$n++] = null !== $item ? IPCodeScannedInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
