<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BAASDT\Models;

use AlibabaCloud\Tea\Model;

class BlockReceipt extends Model
{
    // 使用的gas数量
    /**
     * @example 9640671
     *
     * @var int
     */
    public $gasUsed;

    // 收据log信息
    /**
     * @example
     *
     * @var LogEntry[]
     */
    public $logs;

    // 交易输出
    /**
     * @example 00
     *
     * @var string
     */
    public $output;

    // 交易结果，0为成功
    /**
     * @example 0
     *
     * @var int
     */
    public $result;
    protected $_name = [
        'gasUsed' => 'gas_used',
        'logs'    => 'logs',
        'output'  => 'output',
        'result'  => 'result',
    ];

    public function validate()
    {
        Model::validateRequired('gasUsed', $this->gasUsed, true);
        Model::validateRequired('logs', $this->logs, true);
        Model::validateRequired('output', $this->output, true);
        Model::validateRequired('result', $this->result, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gasUsed) {
            $res['gas_used'] = $this->gasUsed;
        }
        if (null !== $this->logs) {
            $res['logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['logs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BlockReceipt
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gas_used'])) {
            $model->gasUsed = $map['gas_used'];
        }
        if (isset($map['logs'])) {
            if (!empty($map['logs'])) {
                $model->logs = [];
                $n           = 0;
                foreach ($map['logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? LogEntry::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}
