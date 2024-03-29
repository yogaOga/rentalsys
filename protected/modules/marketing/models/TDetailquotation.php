<?php

/**
 * This is the model class for table "t_detailquotation".
 *
 * The followings are the available columns in table 't_detailquotation':
 * @property integer $id
 * @property integer $quotation_id
 * @property integer $vehicle_id
 * @property integer $model_id
 * @property integer $type_id
 * @property integer $transmisi
 * @property string $rate
 * @property string $periode
 */
class TDetailquotation extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 't_detailquotation';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('quotation_id, vehicle_id, model_id, type_id, transmisi', 'numerical', 'integerOnly'=>true),
            array('rate', 'length', 'max'=>100),
            array('periode', 'length', 'max'=>50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, quotation_id, vehicle_id, model_id, type_id, transmisi, rate, periode', 'safe', 'on'=>'search'),
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
            'quotation_id' => 'Quotation',
            'vehicle_id' => 'Vehicle',
            'model_id' => 'Model',
            'type_id' => 'Type',
            'transmisi' => 'Transmisi',
            'rate' => 'Rate',
            'periode' => 'Periode',
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
        $criteria->compare('quotation_id',$this->quotation_id);
        $criteria->compare('vehicle_id',$this->vehicle_id);
        $criteria->compare('model_id',$this->model_id);
        $criteria->compare('type_id',$this->type_id);
        $criteria->compare('transmisi',$this->transmisi);
        $criteria->compare('rate',$this->rate,true);
        $criteria->compare('periode',$this->periode,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TDetailquotation the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
} 