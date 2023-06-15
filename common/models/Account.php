<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property string $ID
 * @property int|null $sr
 * @property string $account_types_ID
 * @property string $customer_ID
 * @property string|null $account_number
 * @property string|null $account_title
 * @property int|null $status
 * @property string|null $effective_from
 * @property int|null $is_deleted
 * @property string|null $application_ID
 * @property string|null $created_by
 * @property string|null $created_on
 * @property string|null $timestamp
 * @property string|null $product_ID
 * @property string|null $scheme_ID
 * @property int|null $approved
 * @property string $branch_ID
 * @property string|null $supporting_document
 * @property string|null $user_image
 * @property string|null $signature_image
 * @property string|null $dividend_account_ID
 * @property string|null $introducer_ID
 * @property string|null $legacy_account_number
 * @property resource|null $user_blob
 * @property string|null $profit_run_date
 * @property int|null $membership_number
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'account_types_ID', 'customer_ID', 'branch_ID'], 'required'],
            [['sr', 'status', 'is_deleted', 'approved', 'membership_number'], 'integer'],
            [['effective_from', 'created_on', 'timestamp', 'profit_run_date'], 'safe'],
            [['user_blob'], 'string'],
            [['ID', 'account_types_ID', 'customer_ID', 'application_ID', 'created_by', 'product_ID', 'scheme_ID', 'branch_ID', 'dividend_account_ID', 'introducer_ID', 'legacy_account_number'], 'string', 'max' => 64],
            [['account_number'], 'string', 'max' => 32],
            [['account_title'], 'string', 'max' => 200],
            [['supporting_document', 'user_image', 'signature_image'], 'string', 'max' => 100],
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
            'account_types_ID' => 'Account Types ID',
            'customer_ID' => 'Customer ID',
            'account_number' => 'Account Number',
            'account_title' => 'Account Title',
            'status' => 'Status',
            'effective_from' => 'Effective From',
            'is_deleted' => 'Is Deleted',
            'application_ID' => 'Application ID',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'timestamp' => 'Timestamp',
            'product_ID' => 'Product ID',
            'scheme_ID' => 'Scheme ID',
            'approved' => 'Approved',
            'branch_ID' => 'Branch ID',
            'supporting_document' => 'Supporting Document',
            'user_image' => 'User Image',
            'signature_image' => 'Signature Image',
            'dividend_account_ID' => 'Dividend Account ID',
            'introducer_ID' => 'Introducer ID',
            'legacy_account_number' => 'Legacy Account Number',
            'user_blob' => 'User Blob',
            'profit_run_date' => 'Profit Run Date',
            'membership_number' => 'Membership Number',
        ];
    }
}
