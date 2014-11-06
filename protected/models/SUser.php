<?php

/**
 * This is the model class for table "s_user".
 *
 * The followings are the available columns in table 's_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $salt
 * @property string $default_group
 * @property integer $status_id
 * @property string $created_at
 * @property integer $created_by
 * @property string $last_login
 * @property string $photo_path
 */
class SUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 's_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, created_at, created_by', 'required'),
			array('status_id, created_by', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>50),
			array('password, salt', 'length', 'max'=>100),
			array('default_group', 'length', 'max'=>45),
			array('photo_path', 'length', 'max'=>5255),
			array('last_login', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, salt, default_group, status_id, created_at, created_by, last_login, photo_path', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'password' => 'Password',
			'salt' => 'Salt',
			'default_group' => 'Default Group',
			'status_id' => 'Status',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'last_login' => 'Last Login',
			'photo_path' => 'Photo Path',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('default_group',$this->default_group,true);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('photo_path',$this->photo_path,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
