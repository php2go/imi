<?php

namespace Imi\Model\Annotation\Relation;

use Imi\Bean\Annotation\Parser;

/**
 * 一对多关联.
 *
 * @Annotation
 * @Target("PROPERTY")
 * @Parser("Imi\Model\Parser\RelationParser")
 */
class OneToMany extends RelationBase
{
    /**
     * 只传一个参数时的参数名.
     *
     * @var string
     */
    protected $defaultFieldName = 'model';

    /**
     * 关联的模型类
     * 可以是包含命名空间的完整类名
     * 可以同命名空间下的类名.
     *
     * @var string
     */
    public $model;

    /**
     * 排序规则字符串.
     *
     * 例：age desc, id desc
     *
     * @var string
     */
    public $order;
}
