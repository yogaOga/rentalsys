<?php

/**
 * This is the model class for table "h_occupation_employee".
 *
 * The followings are the available columns in table 'h_occupation_employee':
 * @property integer $id
 * @property integer $employee_id
 * @property string $join_date
 * @property string $quit_date
 * @property string $company_name
 * @property string $position
 * @property integer $total_junior
 * @property string $position_of_senior
 * @property string $reason
 *
 * The followings are the available model relations:
 * @property MEmployee $employee
 */
//class HOccupationEmployee extends CActiveRecord
class HOccupationEmployee extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'h_occupation_employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, join_date, quit_date, company_name, position, position_of_senior, reason', 'required'),
			array('employee_id, total_junior', 'numerical', 'integerOnly'=>true),
			array('company_name', 'length', 'max'=>100),
			array('position, position_of_senior', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, join_date, quit_date, company_name, position, total_junior, position_of_senior, reason', 'safe', 'on'=>'search'),
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
			'employee' => array(self::BELONGS_TO, 'MEmployee', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'employee_id' => 'Employee',
			'join_date' => 'Join Date',
			'quit_date' => 'Quit Date',
			'company_name' => 'Company Name',
			'position' => 'Position',
			'total_junior' => 'Total Junior',
			'position_of_senior' => 'Position Of Senior',
			'reason' => 'Reason',
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
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('join_date',$this->join_date,true);
		$criteria->compare('quit_date',$this->quit_date,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('total_junior',$this->total_junior);
		$criteria->compare('position_of_senior',$this->position_of_senior,true);
		$criteria->compare('reason',$this->reason,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HOccupationEmployee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
