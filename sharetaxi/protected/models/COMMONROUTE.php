<?php

/**
 * This is the model class for table "COMMONROUTE".
 *
 * The followings are the available columns in table 'COMMONROUTE':
 * @property string $cid
 * @property string $usr1
 * @property string $usr2
 * @property string $usr3
 * @property string $usr4
 * @property string $route1
 * @property string $route2
 * @property string $route3
 * @property string $route4
 * @property integer $numPeople
 */
class COMMONROUTE extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return COMMONROUTE the static model class
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
		return 'COMMONROUTE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cid, usr1, usr2, usr3, usr4, route1, route2, route3, route4, numPeople', 'required'),
			array('numPeople', 'numerical', 'integerOnly'=>true),
			array('cid', 'length', 'max'=>40),
			array('usr1, usr2, usr3, usr4', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cid, usr1, usr2, usr3, usr4, route1, route2, route3, route4, numPeople', 'safe', 'on'=>'search'),
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
			'cid' => 'Cid',
			'usr1' => 'Usr1',
			'usr2' => 'Usr2',
			'usr3' => 'Usr3',
			'usr4' => 'Usr4',
			'route1' => 'Route1',
			'route2' => 'Route2',
			'route3' => 'Route3',
			'route4' => 'Route4',
			'numPeople' => 'Num People',
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

		$criteria->compare('cid',$this->cid,true);
		$criteria->compare('usr1',$this->usr1,true);
		$criteria->compare('usr2',$this->usr2,true);
		$criteria->compare('usr3',$this->usr3,true);
		$criteria->compare('usr4',$this->usr4,true);
		$criteria->compare('route1',$this->route1,true);
		$criteria->compare('route2',$this->route2,true);
		$criteria->compare('route3',$this->route3,true);
		$criteria->compare('route4',$this->route4,true);
		$criteria->compare('numPeople',$this->numPeople);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}