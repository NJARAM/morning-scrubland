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
            [['lpo_number', 'quantity', 'PL4A_No', 'Department', 'Procurement_Method', 'Invoice_no', 'Scheme_Applied', 'AGPO_No', 'Delivery_Note_No'], 'integer'],
            [['lpo_date', 'Invoice_Date'], 'safe'],
            [['unit_price', 'total_cost', 'Invoice_Amount'], 'number'],
            [['item_description', 'Requisioner', 'Directors', 'Quote', 'Authorised_By', 'Vehicle_No'], 'string', 'max' => 255],
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

    public function getPmethod(){
        $pMethod= $this->Procurement_Method;
        switch($pMethod){
        case 1:return 'Open Data';
        break;
        case 2:return 'Low Value';
        break;
        case 3:return 'Proforma';
        break;
        case 4:return 'Restricted Tender';
        break;
        case 5:return 'Direct Procurement';
        break;
        case 6:return 'Force Account';
        break;
        case 7:return 'Request for quotation';
        break;
        case 8:return 'Other';
        break;
        default:
        return '-Not Set-';
        }
    }
        public function getDepartmentName(){
            $departmentName= $this->Department;
            switch($departmentName){
            case 1:return 'Tourism';
            break;
            case 2:return 'AD';
            break;
            case 3:return 'PAC';
            break;
            case 4:return 'Buildings';
            break;
    
            case 5:return 'Fence';
            break;
            case 6:return 'Procurement';
            break;
            case 7:return 'Accounts';
            break;
            case 8:return 'Human Capital';
            break;
            case 9:return 'Roads';
            break;
        case 10:return 'Customer Care';
        break;
        case 11:return 'Administration';
        break;
        case 12:return 'ICT';
        break;
        case 13:return 'Telcom';
        break;
        case 14:return 'RPU';
        break;
        case 15:return 'Intelligence';
         break;
         case 16:return 'Education';
         break;
          case 17:return 'Research';
         break;
         case 18:return 'Ngong';
         break;
         case 19:return 'Machakos';
         break;
         case 20:return 'Makueni';
        break;
        case 21:return 'Ngurumani';
        break;
        case 22:return 'WorkShop';
        break;
        case 23:return 'EastGate';
        break;
      
         default:
        return 'Other';
            }
        }


        public function getSupplierName(){
            $suppliername= $this->Supplier;
            switch( $suppliername){
            case 1:return 'Admiral trading co. ltd';
            break;
            case 2:return 'Toyota Kenya Limited';
            break;
            case 3:return 'Merida Spares';
            break;
            case 4:return 'Dapny Limited';
            break;
    
            case 5:return 'National Oil Corporation';
            break;
            case 6:return 'Duke energy products & Company';
            break;
            case 7:return 'Starbell Agencies';
            break;
            case 8:return 'Tanar Suppliers';
            break;
            case 9:return ' Upper Land petrol station';
            break;
        case 10:return 'Aquara Aqencies';
        break;
        case 11:return 'Sagoo Holdings';
        break;
        case 12:return ' City engineering hydraulic';
        break;
        case 13:return 'Cherik enterprises';
        break;
        case 14:return 'Wire products ltd';
        break;
        case 15:return 'Kenol Kobil';
         break;
         case 16:return 'Kansai plascom';
         break;
          case 17:return 'Samco auto parts';
         break;
         case 18:return 'Autostyle Performance Limited';
         break;
         case 19:return 'Nairobi Crankshaft center';
         break;
         case 20:return ' Ministry of transport';
        break;
        case 21:return 'Jaidah motors ltd';
        break;
        case 22:return ' E. A drillicon ltd';
        break;
        case 23:return 'Chloride Oxide';
        break;
        case 24:return 'Badgas autospares';
    break;
    case 25:return 'Andy Ventures';
    break;
    case 26:return ' Anitaan agencies';
    break;
    case 27:return 'Roots general suppliers';
    break;
    case 28:return 'Elwalk printers';
    break;
    case 29:return 'Other';
    break;
      
         default:
        return '-Not Set-';
            }
        }


        public function getScheme(){
            $scheme= $this->Scheme_Applied;
            switch( $scheme){
            case 1:return 'Youth';
            break;
            case 2:return 'Women';
            break;
            case 3:return 'PWD';
            break;
            case 4:return 'Open To All';
            break;     
            case 29:return 'Other';
            break;
            default:
            return '-Not Set-';
            }
        }

   
}
