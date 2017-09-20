<?$this->title = $user->login." | ".$user->description?>
<div class="row">
	<div class="col-md-3"><h1><?echo $user->login?></h1>
	<img src="<?echo $user->avatar?>">
	<div><?echo $user->description?></div></div>
<div class="col-md-9">
	<table style="width: 100%">
		<tr>
			<th>Чозапроджект?</th>
			<th>чокаданад?</th>
			<th>Статус</th>
			<th>Всего бабла</th>
			<th>Отвалили бабла</th>
			<th>Осталось отвалить</th>
		</tr>
		<?foreach($tasks as $task){?>
		<tr>
			<th><?echo $task->project_name?></th>
			<th><?echo $task->date?></th>
			<th><?echo $task->status?></th>
			<th><?echo $task->full_pay?></th>
			<th><?echo $task->payed?></th>
			<th><?echo $task->pay?></th>
		</tr>
		<?}?>
	</table>
</div>
</div><!-- row -->