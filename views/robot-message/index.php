<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RobotMessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Robot Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="robot-message-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('添加 Robot Message', ['create'], ['class' => 'btn btn-success','data-toggle'=>'modal','data-target'=>'#modal-dailog']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'code',
            'name',
            [
                'class' => '\app\grid\ActionColumn',
                'buttonsOptions'=>[
                    'update'=>[
                        'data-toggle'=>'modal',
                        'data-target'=>'#modal-dailog',
                    ],
                    'view'=>[
                        'data-toggle'=>'modal',
                        'data-target'=>'#modal-dailog',
                    ],
                ]
        	]
       ]
    ]); ?>
</div>
