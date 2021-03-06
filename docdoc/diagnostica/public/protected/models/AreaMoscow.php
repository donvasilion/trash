<?php

/**
 * This is the model class for table "area_moscow".
 *
 * The followings are the available columns in table 'area_moscow':
 * @property integer $id
 * @property string $rerwite_name
 * @property string $name
 * @property string $full_name
 */
class AreaMoscow extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AreaMoscow the static model class
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
		return 'area_moscow';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rewrite_name, name', 'required'),
			array('rewrite_name, name, full_name', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rewrite_name, name, full_name', 'safe', 'on'=>'search'),
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
			'rewrite_name' => 'Rewrite Name',
			'name' => 'Name',
			'full_name' => 'Full Name',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('rewrite_name',$this->rewrite_name,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('full_name',$this->full_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	protected function replaceEnding($word, $endings) {
		foreach ($endings as $endingFrom => $endingTo) {
			if (preg_match('/'.$endingFrom.'$/u', $word)) {
				return preg_replace('/'.$endingFrom.'$/u', $endingTo, $word);
			}
		}
	}
	
	protected function parseWords($words, $many, $callback) {
		return preg_replace_callback(
			'/([a-zа-яё]+)/u',
			function ($matches) use ($callback, $many) {
				return $this->{$callback}($matches[1], $many);
			},
			$words
		);
	}
	
	protected function wordPrepositional($word, $many) {
		
		return $this->replaceEnding($word, array(
			"уг" => "уге",
			"ый" => "ом",
			"о" => "о",
		));
	}
	
	public function nameInPrepositional($many = false) {
		return $this->parseWords($this->full_name, $many, 'wordPrepositional');
	}
}