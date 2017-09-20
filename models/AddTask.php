<?php

namespace app\models;
use Yii;
use yii\base\Model;

class AddTask extends \yii\base\Model
{
	public $username;
	public $task;
	public $deadline;
	public $count;
}