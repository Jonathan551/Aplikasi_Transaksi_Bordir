<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Barang $model */

$this->title = 'Create Barang';
$this->params['breadcrumbs'][] = ['label' => 'Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-content">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>