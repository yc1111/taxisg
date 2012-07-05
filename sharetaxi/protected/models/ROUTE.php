<?php

/**
 * This is the model class for table "ROUTE".
 *
 * The followings are the available columns in table 'ROUTE':
 * @property integer $rid
 * @property string $start
 * @property string $end
 * @property double $startlat
 * @property double $startlng
 * @property double $endlat
 * @property double $endlng
 * @property string $time
 * @property string $message
 * @property integer $flexible
 */
class ROUTE extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ROUTE the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ROUTE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rid, start, end, startlat, startlng, endlat, endlng, time, message, flexible', 'required'),
			array('rid, flexible', 'numerical', 'integerOnly'=>true),
			array('startlat, startlng, endlat, endlng', 'numerical'),
			array('start, end', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rid, start, end, startlat, startlng, endlat, endlng, time, message, flexible', 'safe', 'on'=>'search'),
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
			'rid' => 'Rid',
			'start' => 'Start',
			'end' => 'End',
			'startlat' => 'Startlat',
			'startlng' => 'Startlng',
			'endlat' => 'Endlat',
			'endlng' => 'Endlng',
			'time' => 'Time',
			'message' => 'Message',
			'flexible' => 'Flexible',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('rid',$this->rid);
		$criteria->compare('start',$this->start,true);
		$criteria->compare('end',$this->end,true);
		$criteria->compare('startlat',$this->startlat);
		$criteria->compare('startlng',$this->startlng);
		$criteria->compare('endlat',$this->endlat);
		$criteria->compare('endlng',$this->endlng);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('flexible',$this->flexible);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}