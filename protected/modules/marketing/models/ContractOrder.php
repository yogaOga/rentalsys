<?php

/**
 * This is the model class for table "contract_order".
 *
 * The followings are the available columns in table 'contract_order':
 * @property integer $id_Contract_Order
 * @property integer $MarketingID
 * @property integer $No_Penawaran
 * @property integer $Id_Customer
 * @property integer $Nama_Customer
 * @property integer $No_Telp
 * @property integer $Contact_Person
 * @property integer $Marketing_Name
 * @property integer $ID_Prospek
 * @property string $Alamat_Prospek
 * @property integer $No_Fax
 * @property integer $No_Hp
 * @property integer $No_PO_System
 * @property integer $Rent_Period
 * @property string $Delivery_Date
 * @property string $Type_Contract_Order
 *
 * The followings are the available model relations:
 * @property TProspect $marketing
 */
class ContractOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    public $car_id;
	public function tableName()
	{
		return 'contract_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MarketingID, No_Penawaran, No_Telp, Contact_Person, Marketing_Name,No_PO_System,ID_Prospek', 'required'),
			array('MarketingID, No_Penawaran, Id_Customer, Nama_Customer, No_Telp, Contact_Person, Marketing_Name, ID_Prospek, No_Fax, No_Hp, No_PO_System, Rent_Period', 'numerical', 'integerOnly'=>true),
			array('Type_Contract_Order', 'length', 'max'=>100),
			array('Delivery_Date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_Contract_Order, MarketingID, No_Penawaran, Id_Customer, Nama_Customer, No_Telp, Contact_Person, Marketing_Name, ID_Prospek, Alamat_Prospek, No_Fax, No_Hp, No_PO_System, Rent_Period, Delivery_Date, Type_Contract_Order', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'marketing' => array(self::BELONGS_TO, 'TProspect', 'MarketingID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_Contract_Order' => 'Id Contract Order',
			'MarketingID' => 'Marketing',
			'No_Penawaran' => 'No Penawaran',
			'Id_Customer' => 'Customer',
			'Nama_Customer' => 'Name Customer',
			'No_Telp' => 'No Telp',
			'Contact_Person' => 'Contact Person',
			'Marketing_Name' => 'Marketing Name',
			'ID_Prospek' => 'Prospek',
			'Alamat_Prospek' => 'Address Prospek',
			'No_Fax' => 'No Fax',
			'No_Hp' => 'No Hp',
			'No_PO_System' => 'No. Po System',
			'Rent_Period' => 'Rent Period',
			'Delivery_Date' => 'Delivery Date',
			'Type_Contract_Order' => 'Type Contract Order',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_Contract_Order',$this->id_Contract_Order);
		$criteria->compare('MarketingID',$this->MarketingID);
		$criteria->compare('No_Penawaran',$this->No_Penawaran);
		$criteria->compare('Id_Customer',$this->Id_Customer);
		$criteria->compare('Nama_Customer',$this->Nama_Customer);
		$criteria->compare('No_Telp',$this->No_Telp);
		$criteria->compare('Contact_Person',$this->Contact_Person);
		$criteria->compare('Marketing_Name',$this->Marketing_Name);
		$criteria->compare('ID_Prospek',$this->ID_Prospek);
		$criteria->compare('Alamat_Prospek',$this->Alamat_Prospek,true);
		$criteria->compare('No_Fax',$this->No_Fax);
		$criteria->compare('No_Hp',$this->No_Hp);
		$criteria->compare('No_PO_System',$this->No_PO_System);
		$criteria->compare('Rent_Period',$this->Rent_Period);
		$criteria->compare('Delivery_Date',$this->Delivery_Date,true);
		$criteria->compare('Type_Contract_Order',$this->Type_Contract_Order,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContractOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
