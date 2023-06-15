<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Account $model */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Accounts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="account-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID], [
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
            'ID',
            'sr',
            'account_types_ID',
            'customer_ID',
            'account_number',
            'account_title',
            'status',
            'effective_from',
            'is_deleted',
            'application_ID',
            'created_by',
            'created_on',
            'timestamp',
            'product_ID',
            'scheme_ID',
            'approved',
            'branch_ID',
            'supporting_document',
            'user_image',
            'signature_image',
            'dividend_account_ID',
            'introducer_ID',
            'legacy_account_number',
            'user_blob',
            'profit_run_date',
            'membership_number',
        ],
    ]) ?>

</div>
