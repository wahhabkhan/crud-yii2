<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "deposit".
 *
 * @property string $ID
 * @property int|null $sr
 * @property string|null $date
 * @property string|null $timestamp
 * @property string|null $application_ID
 * @property string|null $account_no
 * @property string|null $crm_no
 * @property string $branch_ID
 * @property int|null $transaction_no
 * @property string|null $created_by
 * @property string|null $created_on
 * @property int|null $instrument
 * @property float|null $amount
 * @property string|null $cheque_no
 * @property string|null $dated
 * @property string|null $cheque_branch_name
 * @property string|null $cheque_branch_code
 * @property string|null $cheque_account_title
 * @property string|null $cheque_account_no
 * @property string|null $description
 * @property string $account_ID
 * @property float|null $deposit_fee
 * @property string|null $chq_account_ID
 * @property string|null $instrument_no
 * @property int|null $approved
 * @property string|null $deposit_branch_name
 * @property string|null $deposit_branch_code
 * @property int $posted
 * @property float|null $current_balance
 * @property int $is_run_profit
 * @property string|null $post_run_ID
 * @property float|null $interest
 * @property int|null $other
 * @property float|null $other_amount
 * @property int|null $account_type
 * @property bool|null $loan_sanctioned
 * @property bool|null $is_dividend
 * @property string|null $profit_run_ID
 * @property string|null $ib_head_ofc_account_ID
 * @property string|null $ib_head_ofc_instrument_ID
 * @property string|null $ib_head_ofc_branch_ID
 * @property string|null $ib_account_ID
 * @property string|null $ib_instrument_ID
 * @property string|null $ib_branch_ID
 * @property string|null $ib_reference_ID
 */
class Deposit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deposit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'branch_ID', 'account_ID'], 'required'],
            [['sr', 'transaction_no', 'instrument', 'approved', 'posted', 'is_run_profit', 'other', 'account_type'], 'integer'],
            [['date', 'timestamp', 'created_on', 'dated'], 'safe'],
            [['amount', 'deposit_fee', 'current_balance', 'interest', 'other_amount'], 'number'],
            [['description'], 'string'],
            [['loan_sanctioned', 'is_dividend'], 'boolean'],
            [['ID', 'application_ID', 'branch_ID', 'created_by', 'cheque_no', 'account_ID', 'chq_account_ID', 'instrument_no', 'post_run_ID', 'profit_run_ID', 'ib_head_ofc_account_ID', 'ib_head_ofc_instrument_ID', 'ib_head_ofc_branch_ID', 'ib_account_ID', 'ib_instrument_ID', 'ib_branch_ID', 'ib_reference_ID'], 'string', 'max' => 64],
            [['account_no', 'crm_no', 'cheque_branch_code', 'cheque_account_no'], 'string', 'max' => 32],
            [['cheque_branch_name', 'cheque_account_title'], 'string', 'max' => 200],
            [['deposit_branch_name'], 'string', 'max' => 100],
            [['deposit_branch_code'], 'string', 'max' => 45],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'sr' => 'Sr',
            'date' => 'Date',
            'timestamp' => 'Timestamp',
            'application_ID' => 'Application ID',
            'account_no' => 'Account No',
            'crm_no' => 'Crm No',
            'branch_ID' => 'Branch ID',
            'transaction_no' => 'Transaction No',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'instrument' => 'Instrument',
            'amount' => 'Amount',
            'cheque_no' => 'Cheque No',
            'dated' => 'Dated',
            'cheque_branch_name' => 'Cheque Branch Name',
            'cheque_branch_code' => 'Cheque Branch Code',
            'cheque_account_title' => 'Cheque Account Title',
            'cheque_account_no' => 'Cheque Account No',
            'description' => 'Description',
            'account_ID' => 'Account ID',
            'deposit_fee' => 'Deposit Fee',
            'chq_account_ID' => 'Chq Account ID',
            'instrument_no' => 'Instrument No',
            'approved' => 'Approved',
            'deposit_branch_name' => 'Deposit Branch Name',
            'deposit_branch_code' => 'Deposit Branch Code',
            'posted' => 'Posted',
            'current_balance' => 'Current Balance',
            'is_run_profit' => 'Is Run Profit',
            'post_run_ID' => 'Post Run ID',
            'interest' => 'Interest',
            'other' => 'Other',
            'other_amount' => 'Other Amount',
            'account_type' => 'Account Type',
            'loan_sanctioned' => 'Loan Sanctioned',
            'is_dividend' => 'Is Dividend',
            'profit_run_ID' => 'Profit Run ID',
            'ib_head_ofc_account_ID' => 'Ib Head Ofc Account ID',
            'ib_head_ofc_instrument_ID' => 'Ib Head Ofc Instrument ID',
            'ib_head_ofc_branch_ID' => 'Ib Head Ofc Branch ID',
            'ib_account_ID' => 'Ib Account ID',
            'ib_instrument_ID' => 'Ib Instrument ID',
            'ib_branch_ID' => 'Ib Branch ID',
            'ib_reference_ID' => 'Ib Reference ID',
        ];
    }
}
