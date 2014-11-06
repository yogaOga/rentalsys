<?php

/**
 * This is the model class for table "t_activity_plan".
 *
 * The followings are the available columns in table 't_activity_plan':
 * @property integer $id
 * @property integer $id_marketing
 * @property string $start_date
 * @property string $end_date
 * @property integer $working_duration
 * @property integer $scale_of_priority_id
 * @property string $estimation_of_result
 * @property integer $final_result_id
 * @property string $note_of_manager
 * @property integer $created_user
 * @property string $created_date
 * @property integer $update_user
 * @property string $update_date
 *
 * The followings are the available model relations:
 * @property MlScaleOfPriority $finalResult
 * @property MlScaleOfPriority $scaleOfPriority
 */
class TActivityPlan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_activity_plan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_marketing, estimation_of_result, created_user, created_date', 'required'),
			array('id_marketing, working_duration, scale_of_priority_id, final_result_id, created_user, update_user', 'numerical', 'integerOnly'=>true),
			array('estimation_of_result, note_of_manager', 'length', 'max'=>255),
			array('start_date, end_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_marketing, start_date, end_date, working_duration, scale_of_priority_id, estimation_of_result, final_result_id, note_of_manager, created_user, created_date, update_user, update_date', 'safe', 'on'=>'search'),
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
			'finalResult' => array(self::BELONGS_TO, 'MlScaleOfPriority', 'final_result_id'),
			'scaleOfPriority' => array(self::BELONGS_TO, 'MlScaleOfPriority', 'scale_of_priority_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_marketing' => 'Id Marketing',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'working_duration' => 'Working Duration',
			'scale_of_priority_id' => 'Scale Of Priority',
			'estimation_of_result' => 'Estimation Of Result',
			'final_result_id' => 'Final Result',
			'note_of_manager' => 'Note Of Manager',
			'created_user' => 'Created User',
			'created_date' => 'Created Date',
			'update_user' => 'Update User',
			'update_date' => 'Update Date',
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
		$criteria->compare('id_marketing',$this->id_marketing);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('working_duration',$this->working_duration);
		$criteria->compare('scale_of_priority_id',$this->scale_of_priority_id);
		$criteria->compare('estimation_of_result',$this->estimation_of_result,true);
		$criteria->compare('final_result_id',$this->final_result_id);
		$criteria->compare('note_of_manager',$this->note_of_manager,true);
		$criteria->compare('created_user',$this->created_user);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('update_user',$this->update_user);
		$criteria->compare('update_date',$this->update_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TActivityPlan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
