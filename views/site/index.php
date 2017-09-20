<?php

/* @var $this yii\web\View */

$this->title = "Let's try this shit!";
?>
<style>
	.userList{
		width: 100%;
	}

	.userList tr td {
		margin: 10px;
		border: 1px solid black;
		padding: 10px;
		background-color: #111;
		color: #ccc;
	}

	a{
		color: #ccc;
	}

</style>

<h1> База бандитов:</h1>
<table class="userList">

<tr>
	<th>Авка</th>
	<th>Кликуха</th>
	<th>Имя</th>
	<th>Фамилия</th>
	<th>Класс</th>
</tr>
<?

foreach ($users as $user) {?>

<tr style="">

	
		<td><img style="height:50px;width:50px" src="<?echo $user['avatar']?>"></td>
		<td><span><a href="/user?id=<?echo  $user['id'];?>"><?echo $user['login'];?></a></span></td>
		<td><span><?echo $user['firstname'];?></span></td>
		<td><span><?echo $user['secondname'];?></span></td>
		<td><span><?echo $user['role'];?></span></td>

</tr>

<?}
?>
</table>