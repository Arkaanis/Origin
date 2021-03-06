<?php

/**
 * This is the model class for table "proiect".
 *
 * The followings are the available columns in table 'proiect':
 * @property integer $id
 * @property string $coperta
 * @proprety string $format
 * @property string $titlu_ro
 * @property string $titlu_en
 * @property string $subtitlu_ro
 * @property string $subtitlu_en
 * @property string $descriere_ro
 * @property string $descriere_en
 * @property string $categorie_ro
 * @property string $categorie_en
 */
class Proiect extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proiect';
	}
        
        public $image;
        
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titlu_ro, subtitlu_ro, descriere_ro, categorie_ro, descriere_en, categorie_en, format', 'required'),
			array('titlu_ro, titlu_en, subtitlu_ro, subtitlu_en', 'length', 'max'=>256),
			array('categorie_ro, categorie_en', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, coperta, titlu_ro, titlu_en, subtitlu_ro, subtitlu_en, descriere_ro, descriere_en, categorie_ro, categorie_en', 'safe', 'on'=>'search'),
                        array('coperta', 'file', 'types'=>'jpg, gif, png', 'safe'=>true, 'allowEmpty' => true),
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
			'coperta' => 'Coperta',
                        'format' => 'Format',
			'titlu_ro' => 'Titlu Ro',
			'titlu_en' => 'Titlu En',
			'subtitlu_ro' => 'Subtitlu Ro',
			'subtitlu_en' => 'Subtitlu En',
			'descriere_ro' => 'Descriere Ro',
			'descriere_en' => 'Descriere En',
			'categorie_ro' => 'Categorie Ro',
			'categorie_en' => 'Categorie En',
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
		$criteria->compare('coperta',$this->coperta,true);
                $criteria->compare('format',$this->format,true);
		$criteria->compare('titlu_ro',$this->titlu_ro,true);
		$criteria->compare('titlu_en',$this->titlu_en,true);
		$criteria->compare('subtitlu_ro',$this->subtitlu_ro,true);
		$criteria->compare('subtitlu_en',$this->subtitlu_en,true);
		$criteria->compare('descriere_ro',$this->descriere_ro,true);
		$criteria->compare('descriere_en',$this->descriere_en,true);
		$criteria->compare('categorie_ro',$this->categorie_ro,true);
		$criteria->compare('categorie_en',$this->categorie_en,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proiect the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
