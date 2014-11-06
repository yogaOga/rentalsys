<?php

/**
 * This is the model class for table "h_warning_letter".
 *
 * The followings are the available columns in table 'h_warning_letter':
 * @property integer $id
 * @property integer $employee_id
 * @property string $nip
 * @property string $employee_name
 * @property string $position
 * @property string $description
 * @property string $warning_type
 * @property string $created_at
 * @property integer $created_by
 *
 * The followings are the available model relations:
 * @property MEmployee $employee
 */
//class HWarningLetter extends CActiveRecord
class HWarningLetter extends BaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'h_warning_letter';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id, nip, employee_name, position, description, warning_type, created_at, created_by', 'required'),
			array('employee_id, created_by', 'numerical', 'integerOnly'=>true),
			array('nip', 'length', 'max'=>25),
			array('employee_name', 'length', 'max'=>60),
			array('position', 'length', 'max'=>50),
			array('warning_type', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employee_id, nip, employee_name, position, description, warning_type, created_at, created_by', 'safe', 'on'=>'search'),
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
			'nip' => 'Employee ID',
			'employee_name' => 'Employee Name',
			'position' => 'Position',
			'description' => 'Description',
			'warning_type' => 'Type',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
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
		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('employee_name',$this->employee_name,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('warning_type',$this->warning_type,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HWarningLetter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
