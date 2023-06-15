<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "withdrawal".
 *
 * @property string $ID
 * @property int|null $sr
 * @property string|null $application_ID
 * @property string|null $account_no
 * @property string|null $crm_no
 * @property int|null $transaction_no
 * @property string|null $date
 * @property string|null $branch_name
 * @property string|null $branch_code
 * @property float|null $amount
 * @property string|null $cheque_no
 * @property string|null $dated
 * @property string|null $cheque_branch_name
 * @property string|null $cheque_branch_code
 * @property string|null $description
 * @property string $branch_ID
 * @property string $account_ID
 * @property string|null $withdraw_fee
 * @property string|null $created_on
 * @property string|null $created_by
 * @property int|null $approved
 * @property int $posted
 * @property float|null $current_balance
 * @property string $timestamp
 * @property string|null $post_run_ID
 * @property string|null $account_type
 * @property string|null $cheque_account_no
 * @property string|null $cheque_account_title
 * @property string|null $cheque_no_withdrawal
 * @property string|null $cheque_date
 * @property string|null $cheque_given_account_no
 * @property string|null $cheque_given_account_title
 * @property int|null $instrument
 * @property string|null $ib_head_ofc_account_ID
 * @property string|null $ib_head_ofc_instrument_ID
 * @property string|null $ib_head_ofc_branch_ID
 * @property string|null $ib_account_ID
 * @property string|null $ib_instrument_ID
 * @property string|null $ib_branch_ID
 * @property string|null $ib_reference_ID
 */
class Withdrawal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'withdrawal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'branch_ID', 'account_ID'], 'required'],
            [['sr', 'transaction_no', 'approved', 'posted', 'instrument'], 'integer'],
            [['date', 'dated', 'created_on', 'timestamp', 'cheque_date'], 'safe'],
            [['amount', 'current_balance'], 'number'],
            [['description'], 'string'],
            [['ID', 'application_ID', 'cheque_no', 'branch_ID', 'account_ID', 'created_by', 'post_run_ID', 'account_type', 'cheque_account_title', 'cheque_given_account_title', 'ib_head_ofc_account_ID', 'ib_head_ofc_instrument_ID', 'ib_head_ofc_branch_ID', 'ib_account_ID', 'ib_instrument_ID', 'ib_branch_ID', 'ib_reference_ID'], 'string', 'max' => 64],
            [['account_no', 'crm_no', 'branch_code', 'cheque_branch_code', 'cheque_account_no', 'cheque_no_withdrawal', 'cheque_given_account_no'], 'string', 'max' => 32],
            [['branch_name', 'cheque_branch_name'], 'string', 'max' => 200],
            [['withdraw_fee'], 'string', 'max' => 45],
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
            'application_ID' => 'Application ID',
            'account_no' => 'Account No',
            'crm_no' => 'Crm No',
            'transaction_no' => 'Transaction No',
            'date' => 'Date',
            'branch_name' => 'Branch Name',
            'branch_code' => 'Branch Code',
            'amount' => 'Amount',
            'cheque_no' => 'Cheque No',
            'dated' => 'Dated',
            'cheque_branch_name' => 'Cheque Branch Name',
            'cheque_branch_code' => 'Cheque Branch Code',
            'description' => 'Description',
            'branch_ID' => 'Branch ID',
            'account_ID' => 'Account ID',
            'withdraw_fee' => 'Withdraw Fee',
            'created_on' => 'Created On',
            'created_by' => 'Created By',
            'approved' => 'Approved',
            'posted' => 'Posted',
            'current_balance' => 'Current Balance',
            'timestamp' => 'Timestamp',
            'post_run_ID' => 'Post Run ID',
            'account_type' => 'Account Type',
            'cheque_account_no' => 'Cheque Account No',
            'cheque_account_title' => 'Cheque Account Title',
            'cheque_no_withdrawal' => 'Cheque No Withdrawal',
            'cheque_date' => 'Cheque Date',
            'cheque_given_account_no' => 'Cheque Given Account No',
            'cheque_given_account_title' => 'Cheque Given Account Title',
            'instrument' => 'Instrument',
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
