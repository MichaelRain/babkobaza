<?php

namespace app\models;
use Yii;
use yii\base\Model;

class addForm extends \yii\base\Model
{
	public $text;
	public $img;

	public function rules()
	{
		return [

		[['text','img'],'required'],
		

		];
	}
}