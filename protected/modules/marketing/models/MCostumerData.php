<?php

/**
 * This is the model class for table "m_costumer_data".
 *
 * The followings are the available columns in table 'm_costumer_data':
 * @property integer $id
 * @property string $no_cmd
 * @property string $name_pic
 * @property string $company_address_pic
 * @property string $home_address_pic
 * @property integer $city_pic
 * @property string $npwp_pic
 * @property integer $payment_system_pic
 * @property integer $payment_term_pic
 * @property integer $average_gross_incorme_per_month
 * @property string $name_bank
 * @property string $address_bank
 * @property string $no_account_bank
 * @property string $name_reference
 * @property string $address_reference
 * @property string $phone_reference
 * @property integer $vehicles_reference
 * @property string $title_cmd
 * @property string $name_cmd
 * @property string $address_cmd
 * @property integer $city_cmd
 * @property string $fax_cmd
 * @property integer $zip_code_cmd
 * @property string $email_cmd
 * @property string $office_phone_cmd
 * @property string $home_phone_cmd
 * @property integer $type_of_business
 * @property integer $ownership
 * @property string $name_management
 * @property integer $position_management
 * @property string $phone_management
 * @property string $handphone_management
 * @property integer $create_at
 * @property string $create_date
 */
class MCostumerData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    public $mobil_id;
	public function tableName()
	{
		return 'm_costumer_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_cmd, name_pic, npwp_pic, payment_system_pic, payment_term_pic, no_account_bank, name_reference, phone_reference, vehicles_reference, name_cmd, name_management, create_at', 'required'),
			array('city_pic, payment_system_pic, payment_term_pic, average_gross_incorme_per_month, vehicles_reference, city_cmd, zip_code_cmd, type_of_business, ownership, position_management', 'numerical', 'integerOnly'=>true),
			array('no_cmd, npwp_pic, fax_cmd', 'length', 'max'=>20),
			array('name_pic, name_bank, name_reference, name_cmd, email_cmd, name_management', 'length', 'max'=>100),
			array('no_account_bank', 'length', 'max'=>30),
			array('phone_reference', 'length', 'max'=>12),
			array('title_cmd', 'length', 'max'=>50),
                        array('email_cmd','email'),
			array('office_phone_cmd, home_phone_cmd, phone_management, handphone_management', 'length', 'max'=>20),
			array('company_address_pic, home_address_pic, address_bank, address_reference, address_cmd, create_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, no_cmd, name_pic, company_address_pic, home_address_pic, city_pic, npwp_pic, payment_system_pic, payment_term_pic, average_gross_incorme_per_month, name_bank, address_bank, no_account_bank, name_reference, address_reference, phone_reference, vehicles_reference, title_cmd, name_cmd, address_cmd, city_cmd, fax_cmd, zip_code_cmd, email_cmd, office_phone_cmd, home_phone_cmd, type_of_business, ownership, name_management, position_management, phone_management, handphone_management, create_at, create_date', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'no_cmd' => 'No Cmd',
			'name_pic' => 'Name',
			'company_address_pic' => 'Company Address ',
			'home_address_pic' => 'Home Address',
			'city_pic' => 'City',
			'npwp_pic' => 'NPWP',
			'payment_system_pic' => 'Payment System',
			'payment_term_pic' => 'Payment Term',
			'average_gross_incorme_per_month' => 'Average Gross Incorme Per Month',
			'name_bank' => 'Name',
			'address_bank' => 'Address',
			'no_account_bank' => 'No Account',
			'name_reference' => 'Name',
			'address_reference' => 'Address',
			'phone_reference' => 'Phone',
			'vehicles_reference' => 'Vehicles',
			'title_cmd' => 'Title',
			'name_cmd' => 'Name',
			'address_cmd' => 'Address',
			'city_cmd' => 'City',
			'fax_cmd' => 'Fax',
			'zip_code_cmd' => 'Zip Code',
			'email_cmd' => 'Email',
			'office_phone_cmd' => 'Office Phone',
			'home_phone_cmd' => 'Home Phone',
			'type_of_business' => 'Type Of Business',
			'ownership' => 'Ownership',
			'name_management' => 'Name',
			'position_management' => 'Position',
			'phone_management' => 'Phone',
			'handphone_management' => 'Handphone',
			'create_at' => 'Create At',
			'create_date' => 'Create Date',
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
		$criteria->compare('no_cmd',$this->no_cmd,true);
		$criteria->compare('name_pic',$this->name_pic,true);
		$criteria->compare('company_address_pic',$this->company_address_pic,true);
		$criteria->compare('home_address_pic',$this->home_address_pic,true);
		$criteria->compare('city_pic',$this->city_pic);
		$criteria->compare('npwp_pic',$this->npwp_pic,true);
		$criteria->compare('payment_system_pic',$this->payment_system_pic);
		$criteria->compare('payment_term_pic',$this->payment_term_pic);
		$criteria->compare('average_gross_incorme_per_month',$this->average_gross_incorme_per_month);
		$criteria->compare('name_bank',$this->name_bank,true);
		$criteria->compare('address_bank',$this->address_bank,true);
		$criteria->compare('no_account_bank',$this->no_account_bank,true);
		$criteria->compare('name_reference',$this->name_reference,true);
		$criteria->compare('address_reference',$this->address_reference,true);
		$criteria->compare('phone_reference',$this->phone_reference,true);
		$criteria->compare('vehicles_reference',$this->vehicles_reference);
		$criteria->compare('title_cmd',$this->title_cmd,true);
		$criteria->compare('name_cmd',$this->name_cmd,true);
		$criteria->compare('address_cmd',$this->address_cmd,true);
		$criteria->compare('city_cmd',$this->city_cmd);
		$criteria->compare('fax_cmd',$this->fax_cmd,true);
		$criteria->compare('zip_code_cmd',$this->zip_code_cmd);
		$criteria->compare('email_cmd',$this->email_cmd,true);
		$criteria->compare('office_phone_cmd',$this->office_phone_cmd,true);
		$criteria->compare('home_phone_cmd',$this->home_phone_cmd,true);
		$criteria->compare('type_of_business',$this->type_of_business);
		$criteria->compare('ownership',$this->ownership);
		$criteria->compare('name_management',$this->name_management,true);
		$criteria->compare('position_management',$this->position_management);
		$criteria->compare('phone_management',$this->phone_management,true);
		$criteria->compare('handphone_management',$this->handphone_management,true);
		$criteria->compare('create_at',$this->create_at);
		$criteria->compare('create_date',$this->create_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MCostumerData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function title(){
        return array(
            array('id'=>'PT','value'=>'PT'),
            array('id'=>'PD','value'=>'PD'),
            array('id'=>'CV','value'=>'CV'),
            array('id'=>'PN','value'=>'PD'),
            array('id'=>'FIRMA','value'=>'FIRMA'),
            array('id'=>'YAYASAN','value'=>'YAYASAN'),
            array('id'=>'KOMITE','value'=>'KOMITE'),
            array('id'=>'REP.OFFICE','value'=>'REP.OFFICE'),
            array('id'=>'MR','value'=>'MR'),
        );
    }
}
