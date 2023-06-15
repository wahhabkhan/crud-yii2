<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Withdrawal;

/**
 * WithdrawalSearch represents the model behind the search form of `common\models\Withdrawal`.
 */
class WithdrawalSearch extends Withdrawal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'application_ID', 'account_no', 'crm_no', 'date', 'branch_name', 'branch_code', 'cheque_no', 'dated', 'cheque_branch_name', 'cheque_branch_code', 'description', 'branch_ID', 'account_ID', 'withdraw_fee', 'created_on', 'created_by', 'timestamp', 'post_run_ID', 'account_type', 'cheque_account_no', 'cheque_account_title', 'cheque_no_withdrawal', 'cheque_date', 'cheque_given_account_no', 'cheque_given_account_title', 'ib_head_ofc_account_ID', 'ib_head_ofc_instrument_ID', 'ib_head_ofc_branch_ID', 'ib_account_ID', 'ib_instrument_ID', 'ib_branch_ID', 'ib_reference_ID'], 'safe'],
            [['sr', 'transaction_no', 'approved', 'posted', 'instrument'], 'integer'],
            [['amount', 'current_balance'], 'number'],
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
        $query = Withdrawal::find();

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
            'transaction_no' => $this->transaction_no,
            'date' => $this->date,
            'amount' => $this->amount,
            'dated' => $this->dated,
            'created_on' => $this->created_on,
            'approved' => $this->approved,
            'posted' => $this->posted,
            'current_balance' => $this->current_balance,
            'timestamp' => $this->timestamp,
            'cheque_date' => $this->cheque_date,
            'instrument' => $this->instrument,
        ]);

        $query->andFilterWhere(['like', 'ID', $this->ID])
            ->andFilterWhere(['like', 'application_ID', $this->application_ID])
            ->andFilterWhere(['like', 'account_no', $this->account_no])
            ->andFilterWhere(['like', 'crm_no', $this->crm_no])
            ->andFilterWhere(['like', 'branch_name', $this->branch_name])
            ->andFilterWhere(['like', 'branch_code', $this->branch_code])
            ->andFilterWhere(['like', 'cheque_no', $this->cheque_no])
            ->andFilterWhere(['like', 'cheque_branch_name', $this->cheque_branch_name])
            ->andFilterWhere(['like', 'cheque_branch_code', $this->cheque_branch_code])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'branch_ID', $this->branch_ID])
            ->andFilterWhere(['like', 'account_ID', $this->account_ID])
            ->andFilterWhere(['like', 'withdraw_fee', $this->withdraw_fee])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'post_run_ID', $this->post_run_ID])
            ->andFilterWhere(['like', 'account_type', $this->account_type])
            ->andFilterWhere(['like', 'cheque_account_no', $this->cheque_account_no])
            ->andFilterWhere(['like', 'cheque_account_title', $this->cheque_account_title])
            ->andFilterWhere(['like', 'cheque_no_withdrawal', $this->cheque_no_withdrawal])
            ->andFilterWhere(['like', 'cheque_given_account_no', $this->cheque_given_account_no])
            ->andFilterWhere(['like', 'cheque_given_account_title', $this->cheque_given_account_title])
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
