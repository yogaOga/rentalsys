<?php

/**
 * This is the model class for table "t_booking_stock".
 *
 * The followings are the available columns in table 't_booking_stock':
 * @property integer $id_Booking_Stock
 * @property string $Booking
 * @property string $Booking_Date
 * @property integer $PO_System
 * @property string $PO_Custumer
 * @property string $Custumer_Name
 * @property string $Address
 * @property string $Contact_Person
 * @property integer $period_rent
 * @property integer $Marketing_Officer
 * @property string $Delivery_Date
 * @property integer $Unit
 * @property integer $Nomor_Polisi_KBM_Stock_Pool
 * @property string $locked_date
 * @property integer $mo_booking
 *
 * The followings are the available model relations:
 * @property Vehicle $nomorPolisiKBMStockPool
 * @property MoBooking $moBooking
 * @property PurchaseOrder $pOSystem
 */
class TBookingStock extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_booking_stock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Booking, PO_System, PO_Custumer, Contact_Person, Marketing_Officer, Delivery_Date', 'required'),
			array('PO_System, period_rent, Marketing_Officer, Unit, Nomor_Polisi_KBM_Stock_Pool, mo_booking', 'numerical', 'integerOnly'=>true),
			array('Booking, Custumer_Name, Address, Contact_Person', 'length', 'max'=>20),
			array('PO_Custumer', 'length', 'max'=>35),
			array('Booking_Date, locked_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_Booking_Stock, Booking, Booking_Date, PO_System, PO_Custumer, Custumer_Name, Address, Contact_Person, period_rent, Marketing_Officer, Delivery_Date, Unit, Nomor_Polisi_KBM_Stock_Pool, locked_date, mo_booking', 'safe', 'on'=>'search'),
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
			'nomorPolisiKBMStockPool' => array(self::BELONGS_TO, 'Vehicle', 'Nomor_Polisi_KBM_Stock_Pool'),
			'moBooking' => array(self::BELONGS_TO, 'MoBooking', 'mo_booking'),
			'pOSystem' => array(self::BELONGS_TO, 'PurchaseOrder', 'PO_System'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_Booking_Stock' => 'Id Booking Stock',
			'Booking' => 'Booking',
			'Booking_Date' => 'Booking Date',
			'PO_System' => 'Po System',
			'PO_Custumer' => 'Po Custumer',
			'Custumer_Name' => 'Custumer Name',
			'Address' => 'Address',
			'Contact_Person' => 'Contact Person',
			'period_rent' => 'Period Rent',
			'Marketing_Officer' => 'Marketing Officer',
			'Delivery_Date' => 'Delivery Date',
			'Unit' => 'Unit',
			'Nomor_Polisi_KBM_Stock_Pool' => 'Nomor Polisi Kbm Stock Pool',
			'locked_date' => 'Locked Date',
			'mo_booking' => 'Mo Booking',
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

		$criteria->compare('id_Booking_Stock',$this->id_Booking_Stock);
		$criteria->compare('Booking',$this->Booking,true);
		$criteria->compare('Booking_Date',$this->Booking_Date,true);
		$criteria->compare('PO_System',$this->PO_System);
		$criteria->compare('PO_Custumer',$this->PO_Custumer,true);
		$criteria->compare('Custumer_Name',$this->Custumer_Name,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('Contact_Person',$this->Contact_Person,true);
		$criteria->compare('period_rent',$this->period_rent);
		$criteria->compare('Marketing_Officer',$this->Marketing_Officer);
		$criteria->compare('Delivery_Date',$this->Delivery_Date,true);
		$criteria->compare('Unit',$this->Unit);
		$criteria->compare('Nomor_Polisi_KBM_Stock_Pool',$this->Nomor_Polisi_KBM_Stock_Pool);
		$criteria->compare('locked_date',$this->locked_date,true);
		$criteria->compare('mo_booking',$this->mo_booking);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TBookingStock the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
