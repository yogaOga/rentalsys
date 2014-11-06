<?php

/**
 * This is the model class for table "t_booking_kendaraan".
 *
 * The followings are the available columns in table 't_booking_kendaraan':
 * @property integer $id_Booking_Kendaraan
 * @property string $No_Booking
 * @property string $Booking_Date
 * @property integer $PO_System
 * @property string $Customer_Name
 * @property string $ID_Custumer
 * @property string $Address
 * @property string $Contact_Person
 * @property integer $Rent_Period
 * @property integer $Marketing_Officer
 * @property string $Delivery_Date
 * @property integer $Unit
 * @property integer $Nomor_Polisi_KBM_GS
 * @property integer $Jangka_Waktu_GS
 * @property string $Alasan_dilakukan_GS
 *
 * The followings are the available model relations:
 * @property PurchaseOrder $pOSystem
 * @property Vehicle $nomorPolisiKBMGS
 */
class TBookingKendaraan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_booking_kendaraan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('No_Booking, PO_System, ID_Custumer, Contact_Person, Marketing_Officer, Delivery_Date', 'required'),
			array('PO_System, Rent_Period, Marketing_Officer, Unit, Nomor_Polisi_KBM_GS, Jangka_Waktu_GS', 'numerical', 'integerOnly'=>true),
			array('No_Booking, ID_Custumer', 'length', 'max'=>35),
			array('Customer_Name, Contact_Person', 'length', 'max'=>20),
			array('Address', 'length', 'max'=>100),
			array('Alasan_dilakukan_GS', 'length', 'max'=>255),
			array('Booking_Date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_Booking_Kendaraan, No_Booking, Booking_Date, PO_System, Customer_Name, ID_Custumer, Address, Contact_Person, Rent_Period, Marketing_Officer, Delivery_Date, Unit, Nomor_Polisi_KBM_GS, Jangka_Waktu_GS, Alasan_dilakukan_GS', 'safe', 'on'=>'search'),
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
			'pOSystem' => array(self::BELONGS_TO, 'PurchaseOrder', 'PO_System'),
			'nomorPolisiKBMGS' => array(self::BELONGS_TO, 'Vehicle', 'Nomor_Polisi_KBM_GS'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_Booking_Kendaraan' => 'Id Booking Kendaraan',
			'No_Booking' => 'No Booking',
			'Booking_Date' => 'Booking Date',
			'PO_System' => 'Po System',
			'Customer_Name' => 'Customer Name',
			'ID_Custumer' => 'Id Custumer',
			'Address' => 'Address',
			'Contact_Person' => 'Contact Person',
			'Rent_Period' => 'Rent Period',
			'Marketing_Officer' => 'Marketing Officer',
			'Delivery_Date' => 'Delivery Date',
			'Unit' => 'Unit',
			'Nomor_Polisi_KBM_GS' => 'Nomor Polisi Kbm Gs',
			'Jangka_Waktu_GS' => 'Jangka Waktu Gs',
			'Alasan_dilakukan_GS' => 'Alasan Dilakukan Gs',
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

		$criteria->compare('id_Booking_Kendaraan',$this->id_Booking_Kendaraan);
		$criteria->compare('No_Booking',$this->No_Booking,true);
		$criteria->compare('Booking_Date',$this->Booking_Date,true);
		$criteria->compare('PO_System',$this->PO_System);
		$criteria->compare('Customer_Name',$this->Customer_Name,true);
		$criteria->compare('ID_Custumer',$this->ID_Custumer,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('Contact_Person',$this->Contact_Person,true);
		$criteria->compare('Rent_Period',$this->Rent_Period);
		$criteria->compare('Marketing_Officer',$this->Marketing_Officer);
		$criteria->compare('Delivery_Date',$this->Delivery_Date,true);
		$criteria->compare('Unit',$this->Unit);
		$criteria->compare('Nomor_Polisi_KBM_GS',$this->Nomor_Polisi_KBM_GS);
		$criteria->compare('Jangka_Waktu_GS',$this->Jangka_Waktu_GS);
		$criteria->compare('Alasan_dilakukan_GS',$this->Alasan_dilakukan_GS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TBookingKendaraan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
