<?php

use common\models\Withdrawal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\WithdrawalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Withdrawals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="withdrawal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Withdrawal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'sr',
            'application_ID',
            'account_no',
            'crm_no',
            //'transaction_no',
            //'date',
            //'branch_name',
            //'branch_code',
            //'amount',
            //'cheque_no',
            //'dated',
            //'cheque_branch_name',
            //'cheque_branch_code',
            //'description:ntext',
            //'branch_ID',
            //'account_ID',
            //'withdraw_fee',
            //'created_on',
            //'created_by',
            //'approved',
            //'posted',
            //'current_balance',
            //'timestamp',
            //'post_run_ID',
            //'account_type',
            //'cheque_account_no',
            //'cheque_account_title',
            //'cheque_no_withdrawal',
            //'cheque_date',
            //'cheque_given_account_no',
            //'cheque_given_account_title',
            //'instrument',
            //'ib_head_ofc_account_ID',
            //'ib_head_ofc_instrument_ID',
            //'ib_head_ofc_branch_ID',
            //'ib_account_ID',
            //'ib_instrument_ID',
            //'ib_branch_ID',
            //'ib_reference_ID',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Withdrawal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
