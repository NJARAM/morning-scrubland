<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Companyproduct;

/**
 * CompanyproductSearch represents the model behind the search form of `app\models\Companyproduct`.
 */
class CompanyproductSearch extends Companyproduct
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'lpo_number', 'quantity', 'PL4A_No', 'Vehicle_No', 'Department', 'Authorised_By', 'Procurement_Method', 'Invoice_no', 'Scheme_Applied', 'AGPO_No', 'Delivery_Note_No'], 'integer'],
            [['lpo_date', 'item_description', 'unit_of_issue', 'Item_category', 'Requisioner', 'Directors', 'Supplier', 'Invoice_Date', 'Status', 'Quote'], 'safe'],
            [['unit_price', 'total_cost', 'Invoice_Amount'], 'number'],
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
        $query = Companyproduct::find();

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
            'ID' => $this->ID,
            'lpo_number' => $this->lpo_number,
            'lpo_date' => $this->lpo_date,
            'quantity' => $this->quantity,
            'unit_price' => $this->unit_price,
            'total_cost' => $this->total_cost,
            'PL4A_No' => $this->PL4A_No,
            'Vehicle_No' => $this->Vehicle_No,
            'Department' => $this->Department,
            'Authorised_By' => $this->Authorised_By,
            'Procurement_Method' => $this->Procurement_Method,
            'Invoice_no' => $this->Invoice_no,
            'Scheme_Applied' => $this->Scheme_Applied,
            'AGPO_No' => $this->AGPO_No,
            'Invoice_Date' => $this->Invoice_Date,
            'Invoice_Amount' => $this->Invoice_Amount,
            'Delivery_Note_No' => $this->Delivery_Note_No,
        ]);

        $query->andFilterWhere(['like', 'item_description', $this->item_description])
            ->andFilterWhere(['like', 'unit_of_issue', $this->unit_of_issue])
            ->andFilterWhere(['like', 'Item_category', $this->Item_category])
            ->andFilterWhere(['like', 'Requisioner', $this->Requisioner])
            ->andFilterWhere(['like', 'Directors', $this->Directors])
            ->andFilterWhere(['like', 'Supplier', $this->Supplier])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Quote', $this->Quote]);

        return $dataProvider;
    }
}
