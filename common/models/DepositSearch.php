<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Deposit;

/**
 * DepositSearch represents the model behind the search form of `common\models\Deposit`.
 */
class DepositSearch extends Deposit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'date', 'timestamp', 'application_ID', 'account_no', 'crm_no', 'branch_ID', 'created_by', 'created_on', 'cheque_no', 'dated', 'cheque_branch_name', 'cheque_branch_code', 'cheque_account_title', 'cheque_account_no', 'description', 'account_ID', 'chq_account_ID', 'instrument_no', 'deposit_branch_name', 'deposit_branch_code', 'post_run_ID', 'profit_run_ID', 'ib_head_ofc_account_ID', 'ib_head_ofc_instrument_ID', 'ib_head_ofc_branch_ID', 'ib_account_ID', 'ib_instrument_ID', 'ib_branch_ID', 'ib_reference_ID'], 'safe'],
            [['sr', 'transaction_no', 'instrument', 'approved', 'posted', 'is_run_profit', 'other', 'account_type'], 'integer'],
            [['amount', 'deposit_fee', 'current_balance', 'interest', 'other_amount'], 'number'],
            [['loan_sanctioned', 'is_dividend'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Deposit::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'sr' => $this->sr,
            'date' => $this->date,
            'timestamp' => $this->timestamp,
            'transaction_no' => $this->transaction_no,
            'created_on' => $this->created_on,
            'instrument' => $this->instrument,
            'amount' => $this->amount,
            'dated' => $this->dated,
            'deposit_fee' => $this->deposit_fee,
            'approved' => $this->approved,
            'posted' => $this->posted,
            'current_balance' => $this->current_balance,
            'is_run_profit' => $this->is_run_profit,
            'interest' => $this->interest,
            'other' => $this->other,
            'other_amount' => $this->other_amount,
            'account_type' => $this->account_type,
            'loan_sanctioned' => $this->loan_sanctioned,
            'is_dividend' => $this->is_dividend,
        ]);

        $query->andFilterWhere(['like', 'ID', $this->ID])
            ->andFilterWhere(['like', 'application_ID', $this->application_ID])
            ->andFilterWhere(['like', 'account_no', $this->account_no])
            ->andFilterWhere(['like', 'crm_no', $this->crm_no])
            ->andFilterWhere(['like', 'branch_ID', $this->branch_ID])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'cheque_no', $this->cheque_no])
            ->andFilterWhere(['like', 'cheque_branch_name', $this->cheque_branch_name])
            ->andFilterWhere(['like', 'cheque_branch_code', $this->cheque_branch_code])
            ->andFilterWhere(['like', 'cheque_account_title', $this->cheque_account_title])
            ->andFilterWhere(['like', 'cheque_account_no', $this->cheque_account_no])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'account_ID', $this->account_ID])
            ->andFilterWhere(['like', 'chq_account_ID', $this->chq_account_ID])
            ->andFilterWhere(['like', 'instrument_no', $this->instrument_no])
            ->andFilterWhere(['like', 'deposit_branch_name', $this->deposit_branch_name])
            ->andFilterWhere(['like', 'deposit_branch_code', $this->deposit_branch_code])
            ->andFilterWhere(['like', 'post_run_ID', $this->post_run_ID])
            ->andFilterWhere(['like', 'profit_run_ID', $this->profit_run_ID])
            ->andFilterWhere(['like', 'ib_head_ofc_account_ID', $this->ib_head_ofc_account_ID])
            ->andFilterWhere(['like', 'ib_head_ofc_instrument_ID', $this->ib_head_ofc_instrument_ID])
            ->andFilterWhere(['like', 'ib_head_ofc_branch_ID', $this->ib_head_ofc_branch_ID])
            ->andFilterWhere(['like', 'ib_account_ID', $this->ib_account_ID])
            ->andFilterWhere(['like', 'ib_instrument_ID', $this->ib_instrument_ID])
            ->andFilterWhere(['like', 'ib_branch_ID', $this->ib_branch_ID])
            ->andFilterWhere(['like', 'ib_reference_ID', $this->ib_reference_ID]);

        return $dataProvider;
    }
}
