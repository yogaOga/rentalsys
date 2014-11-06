<?php

/**
 * This is the model class for table "purchase_order".
 *
 * The followings are the available columns in table 'purchase_order':
 * @property integer $id
 * @property integer $marketing_id
 * @property string $tender_no
 * @property string $customer_name
 * @property string $telephone
 * @property string $contact_person
 * @property string $marketing_name
 * @property integer $prospect_id
 * @property string $prospect_address
 * @property string $fax
 * @property string $handphone
 * @property string $po_system_no
 * @property string $period_rent
 * @property string $po_customer_no
 * @property string $delivery_date
 * @property integer $vehicle_id
 * @property integer $unit_requirement
 * @property string $accesories
 * @property integer $rate
 * @property integer $contract_period
 * @property integer $approved
 * @property string $created_date
 * @property integer $created_user
 * @property integer $updated_user
 * @property string $updated_date
 *
 * The followings are the available model relations:
 * @property Vehicle $vehicle
 * @property TProspect $prospect
 */
class PurchaseOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'purchase_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marketing_id, tender_no, telephone, marketing_name, prospect_id, po_system_no, po_customer_no, created_date, created_user', 'required'),
			array('marketing_id, prospect_id, vehicle_id, unit_requirement, rate, contract_period, approved, created_user, updated_user', 'numerical', 'integerOnly'=>true),
			array('tender_no', 'length', 'max'=>30),
			array('customer_name, contact_person, marketing_name, prospect_address, accesories', 'length', 'max'=>255),
			array('telephone, fax, handphone, po_system_no', 'length', 'max'=>16),
			array('period_rent', 'length', 'max'=>20),
			array('po_customer_no', 'length', 'max'=>35),
			array('delivery_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, marketing_id, tender_no, customer_name, telephone, contact_person, marketing_name, prospect_id, prospect_address, fax, handphone, po_system_no, period_rent, po_customer_no, delivery_date, vehicle_id, unit_requirement, accesories, rate, contract_period, approved, created_date, created_user, updated_user, updated_date', 'safe', 'on'=>'search'),
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
			'vehicle' => array(self::BELONGS_TO, 'Vehicle', 'vehicle_id'),
			'prospect' => array(self::BELONGS_TO, 'TProspect', 'prospect_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'marketing_id' => 'Marketing',
			'tender_no' => 'Tender No',
			'customer_name' => 'Customer Name',
			'telephone' => 'Telephone',
			'contact_person' => 'Contact Person',
			'marketing_name' => 'Marketing Name',
			'prospect_id' => 'Prospect',
			'prospect_address' => 'Prospect Address',
			'fax' => 'Fax',
			'handphone' => 'Handphone',
			'po_system_no' => 'Po System No',
			'period_rent' => 'Period Rent',
			'po_customer_no' => 'Po Customer No',
			'delivery_date' => 'Delivery Date',
			'vehicle_id' => 'Vehicle',
			'unit_requirement' => 'Unit Requirement',
			'accesories' => 'Accesories',
			'rate' => 'Rate',
			'contract_period' => 'Contract Period',
			'approved' => 'Approved',
			'created_date' => 'Created Date',
			'created_user' => 'Created User',
			'updated_user' => 'Updated User',
			'updated_date' => 'Updated Date',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('marketing_id',$this->marketing_id);
		$criteria->compare('tender_no',$this->tender_no,true);
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('contact_person',$this->contact_person,true);
		$criteria->compare('marketing_name',$this->marketing_name,true);
		$criteria->compare('prospect_id',$this->prospect_id);
		$criteria->compare('prospect_address',$this->prospect_address,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('handphone',$this->handphone,true);
		$criteria->compare('po_system_no',$this->po_system_no,true);
		$criteria->compare('period_rent',$this->period_rent,true);
		$criteria->compare('po_customer_no',$this->po_customer_no,true);
		$criteria->compare('delivery_date',$this->delivery_date,true);
		$criteria->compare('vehicle_id',$this->vehicle_id);
		$criteria->compare('unit_requirement',$this->unit_requirement);
		$criteria->compare('accesories',$this->accesories,true);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('contract_period',$this->contract_period);
		$criteria->compare('approved',$this->approved);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_user',$this->created_user);
		$criteria->compare('updated_user',$this->updated_user);
		$criteria->compare('updated_date',$this->updated_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PurchaseOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
