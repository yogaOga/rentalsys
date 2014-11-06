<?php

/**
 * This is the model class for table "t_vehicle_request".
 *
 * The followings are the available columns in table 't_vehicle_request':
 * @property integer $id_Vehicle_Request
 * @property integer $No_Request
 * @property string $Request_Date
 * @property integer $PO_System
 * @property integer $PO_Custumer
 * @property string $Custumer_Name
 * @property string $Address
 * @property integer $Contact_Person
 * @property string $Rent_Period
 * @property integer $Harga_Sewa
 * @property string $Marketing_Officer
 * @property string $Delivery_Date
 * @property integer $Unit_merk_type_warna_keluaran
 * @property string $Tambahan_Interior
 */
class TVehicleRequest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_vehicle_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('No_Request, Request_Date, PO_System, PO_Custumer, Custumer_Name, Address, Contact_Person, Rent_Period, Harga_Sewa, Marketing_Officer, Delivery_Date, Unit_merk_type_warna_keluaran, Tambahan_Interior', 'required'),
			array('No_Request, PO_System, PO_Custumer, Contact_Person, Harga_Sewa, Unit_merk_type_warna_keluaran', 'numerical', 'integerOnly'=>true),
			array('Custumer_Name, Address', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_Vehicle_Request, No_Request, Request_Date, PO_System, PO_Custumer, Custumer_Name, Address, Contact_Person, Rent_Period, Harga_Sewa, Marketing_Officer, Delivery_Date, Unit_merk_type_warna_keluaran, Tambahan_Interior', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_Vehicle_Request' => 'Id Vehicle Request',
			'No_Request' => 'No Request',
			'Request_Date' => 'Request Date',
			'PO_System' => 'Po System',
			'PO_Custumer' => 'Po Custumer',
			'Custumer_Name' => 'Custumer Name',
			'Address' => 'Address',
			'Contact_Person' => 'Contact Person',
			'Rent_Period' => 'Rent Period',
			'Harga_Sewa' => 'Harga Sewa',
			'Marketing_Officer' => 'Marketing Officer',
			'Delivery_Date' => 'Delivery Date',
			'Unit_merk_type_warna_keluaran' => 'Unit Merk Type Warna Keluaran',
			'Tambahan_Interior' => 'Tambahan Interior',
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

		$criteria->compare('id_Vehicle_Request',$this->id_Vehicle_Request);
		$criteria->compare('No_Request',$this->No_Request);
		$criteria->compare('Request_Date',$this->Request_Date,true);
		$criteria->compare('PO_System',$this->PO_System);
		$criteria->compare('PO_Custumer',$this->PO_Custumer);
		$criteria->compare('Custumer_Name',$this->Custumer_Name,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('Contact_Person',$this->Contact_Person);
		$criteria->compare('Rent_Period',$this->Rent_Period,true);
		$criteria->compare('Harga_Sewa',$this->Harga_Sewa);
		$criteria->compare('Marketing_Officer',$this->Marketing_Officer,true);
		$criteria->compare('Delivery_Date',$this->Delivery_Date,true);
		$criteria->compare('Unit_merk_type_warna_keluaran',$this->Unit_merk_type_warna_keluaran);
		$criteria->compare('Tambahan_Interior',$this->Tambahan_Interior,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TVehicleRequest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
