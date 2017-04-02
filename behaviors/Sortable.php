<?php

namespace dench\sortable\behaviors;

use yii\base\Behavior;
use yii\db\ActiveRecord;
use yii\db\Query;

class Sortable extends Behavior
{
    /** @var Query */
    public $query;

    /** @var string */
    public $orderAttribute = 'position';

    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_INSERT => 'beforeInsert',
        ];
    }

    public function beforeInsert()
    {
        /** @var ActiveRecord $model */
        $className = $this->owner->className();
        $model = new $className();
        $last = $model::find()->orderBy([$this->orderAttribute => SORT_DESC])->one();
        if ($last === null) {
            $this->owner->{$this->orderAttribute} = 1;
        } else {
            $this->owner->{$this->orderAttribute} = $last->{$this->orderAttribute} + 1;
        }
    }
}
