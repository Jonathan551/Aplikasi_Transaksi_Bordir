<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Mesin $model */

$this->title = $model->mesin_id;
$this->params['breadcrumbs'][] = ['label' => 'Mesins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mesin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'mesin_id' => $model->mesin_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'mesin_id' => $model->mesin_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mesin_id',
            'nama',
            'deskripsi:ntext',
        ],
    ]) ?>

</div>
