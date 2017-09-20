<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $f= ActiveForm::begin(['layout' => 'horizontal']); ?>
	<?=$f->field($form, 'username');?>
	<?=$f->field($form, 'task');?>
	<?=$f->field($form, 'count');?>
	<?=$f->field($form, 'deadline');?>
	<?= Html::submitButton('Отправить');?>
<?php ActiveForm::end();?> 