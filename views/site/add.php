<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $f= ActiveForm::begin(); ?>
	<?=$f->field($form, 'username')->checkboxList(['1' => 'Item A', '2' => 'Item B', '3' => 'Item C']);;?>
	<?=$f->field($form, 'task');?>
	<?=$f->field($form, 'deadline');?>
	<?=$f->field($form, 'count');?>
	<?= Html::submitButton('Отправить');?>
<?php ActiveForm::end();?> 