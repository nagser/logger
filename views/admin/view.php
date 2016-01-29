<?php

use app\base\widgets\DetailView\AdminDetailView;

/* @var $this yii\web\View */
/* @var $recordModel app\modules\logger\models\LoggerRecord */
/* @var $model app\modules\logger\models\LoggerModel*/
/* @var $loggerModel app\modules\logger\models\LoggerModel */

$this->title = ucfirst($recordModel->category);
$this->params['breadcrumbs'][] = ['label' => Yii::t('logger', 'Logs list'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="users-record-view">

<!--	<p>-->
<!--		--><?//= Html::a(Yii::t('logger', 'Delete log'), ['delete', 'id' => $recordModel->id], [
//			'class' => 'btn btn-danger jsDialog',
//			'data-modal-type' => 'confirm',
//			'data-modal-class' => 'danger',
//            'data-message' => Yii::t('yii', 'Are you sure you want to delete this item?')
//		]) ?>
<!--	</p>-->

	<?= AdminDetailView::widget([
		'model' => $recordModel,
		'attributes' => [
            [
                'label' => Yii::t('logger', 'Id'),
                'attribute' => 'id',
            ],
            [
                'label' => Yii::t('logger', 'Category'),
                'attribute' => 'category',
            ],
            [
                'label' => Yii::t('logger', 'Level'),
                'attribute' => 'level',
            ],
            [
                'label' => Yii::t('logger', 'Log time'),
                'attribute' => 'level',
                'format' => 'datetime',
            ],
            [
                'label' => Yii::t('logger', 'Prefix'),
                'attribute' => 'prefix',
            ],
            [
                'label' => Yii::t('logger', 'Message'),
                'attribute' => 'message',
				'valueColOptions' => ['style' => 'word-break: break-all;'],
				'format' => 'ntext'
            ],
		],
	]) ?>

</div>
