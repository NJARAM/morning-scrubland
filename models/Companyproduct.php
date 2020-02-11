<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "companyproduct".
 *
 * @property int $ID
 * @property int $lpo_number
 * @property string $lpo_date
 * @property string $item_description
 * @property string $unit_of_issue
 * @property int $quantity
 * @property float $unit_price
 * @property float $total_cost
 * @property int $PL4A_No
 * @property string $Item_category
 * @property int $Vehicle_No
 * @property string $Requisioner
 * @property string $Directors
 * @property int $Department
 * @property int $Authorised_By
 * @property int $Procurement_Method
 * @property string $Supplier
 * @property int $Invoice_no
 * @property int $Scheme_Applied
 * @property int $AGPO_No
 * @property string $Invoice_Date
 * @property float $Invoice_Amount
 * @property int $Delivery_Note_No
 * @property string $Status
 * @property string $Quote
 */
class Companyproduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companyproduct';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lpo_number', 'lpo_date', 'item_description', 'unit_of_issue', 'quantity', 'unit_price', 'total_cost', 'PL4A_No', 'Item_category', 'Vehicle_No', 'Requisioner', 'Directors', 'Department', 'Authorised_By', 'Procurement_Method', 'Supplier', 'Invoice_no', 'Scheme_Applied', 'AGPO_No', 'Invoice_Date', 'Invoice_Amount', 'Delivery_Note_No', 'Status', 'Quote'], 'safe'],
            [['lpo_number', 'quantity', 'PL4A_No', 'Vehicle_No', 'Department', 'Authorised_By', 'Procurement_Method', 'Invoice_no', 'Scheme_Applied', 'AGPO_No', 'Delivery_Note_No'], 'integer'],
            [['lpo_date', 'Invoice_Date'], 'safe'],
            [['unit_price', 'total_cost', 'Invoice_Amount'], 'number'],
            [['item_description', 'Requisioner', 'Directors', 'Quote'], 'string', 'max' => 255],
            [['unit_of_issue', 'Item_category', 'Supplier', 'Status'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'lpo_number' => 'Lpo Number',
            'lpo_date' => 'Lpo Date',
            'item_description' => 'Item Description',
            'unit_of_issue' => 'Unit Of Issue',
            'quantity' => 'Quantity',
            'unit_price' => 'Unit Price',
            'total_cost' => 'Total Cost',
            'PL4A_No' => 'Pl4 A No',
            'Item_category' => 'Item Category',
            'Vehicle_No' => 'Vehicle No',
            'Requisioner' => 'Requisioner',
            'Directors' => 'Directors',
            'Department' => 'Department',
            'Authorised_By' => 'Authorised By',
            'Procurement_Method' => 'Procurement Method',
            'Supplier' => 'Supplier',
            'Invoice_no' => 'Invoice No',
            'Scheme_Applied' => 'Scheme Applied',
            'AGPO_No' => 'Agpo No',
            'Invoice_Date' => 'Invoice Date',
            'Invoice_Amount' => 'Invoice Amount',
            'Delivery_Note_No' => 'Delivery Note No',
            'Status' => 'Status',
            'Quote' => 'Quote',
        ];
    }
}
