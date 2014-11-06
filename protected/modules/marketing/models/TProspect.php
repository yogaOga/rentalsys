<?php

/**
 * This is the model class for table "t_prospect".
 *
 * The followings are the available columns in table 't_prospect':
 * @property integer $id
 * @property string $prospect_id
 * @property integer $marketing_id
 * @property string $company_name
 * @property string $company_title
 * @property string $company_address
 * @property string $phone
 * @property string $fax
 * @property integer $l_business_type
 * @property integer $l_ownership
 * @property string $pic
 * @property string $occuption
 * @property string $email
 * @property integer $mobile_phone
 * @property integer $create_user
 * @property string $create_at
 * @property string $update_at
 * @property integer $update_user
 */
class TProspect extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public $mo_name;
    
    public function tableName() {
        return 't_prospect';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('prospect_id, marketing_id, company_name, phone, fax, email, create_user', 'required'),
            array('marketing_id, l_business_type, l_ownership, create_user, update_user', 'numerical', 'integerOnly' => true),
            array('prospect_id', 'length', 'max' => 45),
            array('company_name', 'length', 'max' => 255),
            array('company_title,pic_title', 'length', 'max' => 10),
            array('phone, fax', 'length', 'max' => 25),
            array('pic, occuption', 'length', 'max' => 50),
            array('email', 'length', 'max' => 100),
            array('email', 'email'),
            array('email', 'email'),
            array('company_address, update_at, mobile_phone', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, prospect_id, pic_title,marketing_id, mo_name, company_name, company_title, company_address, phone, fax, l_business_type, l_ownership, pic, occuption, email, mobile_phone, create_user, create_at, update_at, update_user', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'bt' => array(self::BELONGS_TO, 'LBusinessType', 'l_business_type'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'prospect_id' => 'Prospect ID',
            'marketing_id' => 'Marketing Officer',
            'mo_name' => 'Marketing Officer',
            'company_name' => 'Company Name',
            'company_title' => 'Company Title',
            'company_address' => 'Company Address',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'l_business_type' => 'Business Type',
            'l_ownership' => 'Ownership',
            'pic' => 'PIC',
            'pic_title' => 'Pic Title',
            'occuption' => 'Occupation',
            'email' => 'Email',
            'mobile_phone' => 'Mobile Phone',
            'create_user' => 'Create User',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'update_user' => 'Update User',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('prospect_id', $this->prospect_id, true);
        $criteria->compare('marketing_id', $this->marketing_id);
        $criteria->compare('company_name', $this->company_name, true);
        $criteria->compare('company_title', $this->company_title, true);
        $criteria->compare('company_address', $this->company_address, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('fax', $this->fax, true);
        $criteria->compare('l_business_type', $this->l_business_type);
        $criteria->compare('l_ownership', $this->l_ownership);
        $criteria->compare('pic', $this->pic, true);
        $criteria->compare('occuption', $this->occuption, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('mobile_phone', $this->mobile_phone);
        $criteria->compare('create_user', $this->create_user);
        $criteria->compare('create_at', $this->create_at, true);
        $criteria->compare('update_at', $this->update_at, true);
        $criteria->compare('update_user', $this->update_user);
        $criteria->condition = 'create_at >= DATE_SUB(CURRENT_DATE(), INTERVAL 60 DAY)';

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    // Search Lookup
    public function searchLookup() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        
        $criteria->compare('marketing_id', $this->marketing_id);
        $criteria->compare('company_name', $this->company_name, true);
       
        $criteria->compare('company_address', $this->company_address, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('fax', $this->fax, true);
        $criteria->compare('l_business_type', $this->l_business_type);
        $criteria->compare('l_ownership', $this->l_ownership);
        $criteria->compare('pic', $this->pic, true);       
        $criteria->compare('email', $this->email, true);
        $criteria->compare('mobile_phone', $this->mobile_phone);
        $criteria->condition = 'create_at <= DATE_SUB(CURRENT_DATE(), INTERVAL 60 DAY)';
        
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TProspect the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
