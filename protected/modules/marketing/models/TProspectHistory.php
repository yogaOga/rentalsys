<?php

/**
 * This is the model class for table "t_prospect_history".
 *
 * The followings are the available columns in table 't_prospect_history':
 * @property integer $id
 * @property string $history_id
 * @property string $prospect_id
 * @property string $status_prospect
 * @property string $type_prospect
 * @property string $unit_need
 * @property string $competitor
 * @property string $description_prospect
 * @property string $next_plan
 * @property string $date_prospect
 */
class TProspectHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 't_prospect_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('history_id, prospect_id, status_prospect, type_prospect, unit_need', 'required'),
			array('history_id, prospect_id', 'length', 'max'=>45),
			array('status_prospect', 'length', 'max'=>20),
			array('type_prospect, competitor', 'length', 'max'=>50),
			array('unit_need,description_prospect,next_plan', 'length', 'max'=>255),
                     //   array('create_at,update_at','date','format'=>'yyyy-M-d'),
                        // The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, history_id, prospect_id, status_prospect, type_prospect, unit_need, competitor, description_prospect, next_plan, create_at,update_at', 'safe', 'on'=>'search'),
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
			'history_id' => 'History',
			'prospect_id' => 'Prospect',
			'status_prospect' => 'Status Prospect',
			'type_prospect' => 'Type Prospect',
			'unit_need' => 'Unit Need',
			'competitor' => 'Competitor',
			'description_prospect' => 'Description Prospect',
			'next_plan' => 'Next Plan',
			'create_at' => 'Create date Prospect',
			'update_at' => 'Update Prospect',
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
		$criteria->compare('history_id',$this->history_id,true);
		$criteria->compare('prospect_id',$this->prospect_id,true);
		$criteria->compare('status_prospect',$this->status_prospect,true);
		$criteria->compare('type_prospect',$this->type_prospect,true);
		$criteria->compare('unit_need',$this->unit_need,true);
		$criteria->compare('competitor',$this->competitor,true);
		$criteria->compare('description_prospect',$this->description_prospect,true);
		$criteria->compare('next_plan',$this->next_plan,true);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('update_at',$this->update_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TProspectHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
     
}
