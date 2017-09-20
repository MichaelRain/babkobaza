<?php

namespace app\models;
use Yii;
use yii\base\Model;

class AddTask extends \yii\base\Model
{
	public $username;
	public $task;
	public $fullpay;
	public $payed;
	public $pay;
	public $status;
	public $project_name;
}