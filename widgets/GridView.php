<?php

namespace PauloSales\yii\SemanticUI\widgets;

class GridView extends \yii\grid\GridView
{
    /**
     * @var array
     */
    public $tableOptions = ['class' => 'ui table'];

    /**
     * @var string
     */
    public $dataColumnClass = 'PauloSales\yii\SemanticUI\widgets\DataColumn';

    /**
     * @var array
     */
    public $pager = ['class' => 'PauloSales\yii\SemanticUI\widgets\LinkPager'];
}
