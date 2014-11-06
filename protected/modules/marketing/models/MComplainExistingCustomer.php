<?php

/**
 * This is the model class for table "m_complain_existing_customer".
 *
 * The followings are the available columns in table 'm_complain_existing_customer':
 * @property integer $id
 * @property string $periode
 * @property integer $branch
 * @property integer $marketing_officer
 * @property string $customer
 * @property string $complain_date
 * @property string $complain
 * @property string $complainer_name
 * @property string $follow_up_date
 * @property string $follow_up_description
 * @property string $pic
 * @property string $remarks
 * @property integer $created_user
 * @property string $created_date
 * @property integer $updated_user
 * @property string $updated_date
 *
 * The followings are the available model relations:
 * @property LBranch $branch0
 */
class MComplainExistingCustomer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'm_complain_existing_customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer, complain_date, complainer_name, follow_up_date, created_user, created_date', 'required'),
			array('branch, marketing_officer, created_user, updated_user', 'numerical', 'integerOnly'=>true),
			array('periode', 'length', 'max'=>50),
			array('customer, complainer_name, pic', 'length', 'max'=>100),
			array('complain, follow_up_description, remarks', 'length', 'max'=>255),
			array('updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, periode, branch, marketing_officer, customer, complain_date, complain, complainer_name, follow_up_date, follow_up_description, pic, remarks, created_user, created_date, updated_user, updated_date', 'safe', 'on'=>'search'),
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
			'branch0' => array(self::BELONGS_TO, 'LBranch', 'branch'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'periode' => 'Periode',
			'branch' => 'Branch',
			'marketing_officer' => 'Marketing Officer',
			'customer' => 'Customer',
			'complain_date' => 'Complain Date',
			'complain' => 'Complain',
			'complainer_name' => 'Complainer Name',
			'follow_up_date' => 'Follow Up Date',
			'follow_up_description' => 'Follow Up Description',
			'pic' => 'Pic',
			'remarks' => 'Remarks',
			'created_user' => 'Created User',
			'created_date' => 'Created Date',
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
		$criteria->compare('periode',$this->periode,true);
		$criteria->compare('branch',$this->branch);
		$criteria->compare('marketing_officer',$this->marketing_officer);
		$criteria->compare('customer',$this->customer,true);
		$criteria->compare('complain_date',$this->complain_date,true);
		$criteria->compare('complain',$this->complain,true);
		$criteria->compare('complainer_name',$this->complainer_name,true);
		$criteria->compare('follow_up_date',$this->follow_up_date,true);
		$criteria->compare('follow_up_description',$this->follow_up_description,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('created_user',$this->created_user);
		$criteria->compare('created_date',$this->created_date,true);
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
	 * @return MComplainExistingCustomer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
