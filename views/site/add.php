<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\jui\DatePicker;
?>

<?php $f= ActiveForm::begin(); ?>	
	<?=$f->field($form, 'username');?>
	<?=$f->field($form, 'task');?>
	<?=$f->field($form, 'full_pay');?>
	<?=$f->field($form, 'payed');?>
	<?=$f->field($form, 'pay');?>
	<?=$f->field($form, 'status');?>
	<?=$f->field($form, 'project_name');?>
	<?= Html::submitButton('Отправить');?>
<?php ActiveForm::end();?> 