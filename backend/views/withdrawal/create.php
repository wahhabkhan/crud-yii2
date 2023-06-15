<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Withdrawal $model */

$this->title = 'Create Withdrawal';
$this->params['breadcrumbs'][] = ['label' => 'Withdrawals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="withdrawal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
