<?php

use common\models\Deposit;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\DepositSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Deposits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deposit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Deposit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'sr',
            'date',
            'timestamp',
            'application_ID',
            //'account_no',
            //'crm_no',
            //'branch_ID',
            //'transaction_no',
            //'created_by',
            //'created_on',
            //'instrument',
            //'amount',
            //'cheque_no',
            //'dated',
            //'cheque_branch_name',
            //'cheque_branch_code',
            //'cheque_account_title',
            //'cheque_account_no',
            //'description:ntext',
            //'account_ID',
            //'deposit_fee',
            //'chq_account_ID',
            //'instrument_no',
            //'approved',
            //'deposit_branch_name',
            //'deposit_branch_code',
            //'posted',
            //'current_balance',
            //'is_run_profit',
            //'post_run_ID',
            //'interest',
            //'other',
            //'other_amount',
            //'account_type',
            //'loan_sanctioned:boolean',
            //'is_dividend:boolean',
            //'profit_run_ID',
            //'ib_head_ofc_account_ID',
            //'ib_head_ofc_instrument_ID',
            //'ib_head_ofc_branch_ID',
            //'ib_account_ID',
            //'ib_instrument_ID',
            //'ib_branch_ID',
            //'ib_reference_ID',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Deposit $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
