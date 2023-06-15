<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Account;

/**
 * AccountSearch represents the model behind the search form of `common\models\Account`.
 */
class AccountSearch extends Account
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'account_types_ID', 'customer_ID', 'account_number', 'account_title', 'effective_from', 'application_ID', 'created_by', 'created_on', 'timestamp', 'product_ID', 'scheme_ID', 'branch_ID', 'supporting_document', 'user_image', 'signature_image', 'dividend_account_ID', 'introducer_ID', 'legacy_account_number', 'user_blob', 'profit_run_date'], 'safe'],
            [['sr', 'status', 'is_deleted', 'approved', 'membership_number'], 'integer'],
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
        $query = Account::find();

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
            'status' => $this->status,
            'effective_from' => $this->effective_from,
            'is_deleted' => $this->is_deleted,
            'created_on' => $this->created_on,
            'timestamp' => $this->timestamp,
            'approved' => $this->approved,
            'profit_run_date' => $this->profit_run_date,
            'membership_number' => $this->membership_number,
        ]);

        $query->andFilterWhere(['like', 'ID', $this->ID])
            ->andFilterWhere(['like', 'account_types_ID', $this->account_types_ID])
            ->andFilterWhere(['like', 'customer_ID', $this->customer_ID])
            ->andFilterWhere(['like', 'account_number', $this->account_number])
            ->andFilterWhere(['like', 'account_title', $this->account_title])
            ->andFilterWhere(['like', 'application_ID', $this->application_ID])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'product_ID', $this->product_ID])
            ->andFilterWhere(['like', 'scheme_ID', $this->scheme_ID])
            ->andFilterWhere(['like', 'branch_ID', $this->branch_ID])
            ->andFilterWhere(['like', 'supporting_document', $this->supporting_document])
            ->andFilterWhere(['like', 'user_image', $this->user_image])
            ->andFilterWhere(['like', 'signature_image', $this->signature_image])
            ->andFilterWhere(['like', 'dividend_account_ID', $this->dividend_account_ID])
            ->andFilterWhere(['like', 'introducer_ID', $this->introducer_ID])
            ->andFilterWhere(['like', 'legacy_account_number', $this->legacy_account_number])
            ->andFilterWhere(['like', 'user_blob', $this->user_blob]);

        return $dataProvider;
    }
}
