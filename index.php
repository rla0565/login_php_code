<?php
session_start();
echo "안녕하세요".$_SESSION['id']."님";
?>
<input type="button" value="Logout" onclick="location.href='login.php'">
<input type="button" value="Write" onclick="location.href='write.php'">
<?php
if(isset($_POST['write'])){
	session_start();
$_SESSION['id']=$id;
}
?>
<br/><br/>
<table width="580" border="1px" cellpadding="2" style="border-collapse:collapse">
	<thead>
	<tr align="center">
	<th width="30">number</th>
	<th width="300">title</th>
	<th width="50">name</th>
	<th width="60">date</th>
	</tr>
	</thead>
	<tbody>
<?php
	$con = mysqli_connect('localhost','kimsoo','1234','users');
	$result = mysqli_query($con, "SELECT * FROM board ORDER By id DESC");
	while ($row = mysqli_fetch_array($result)) {
?>
	<tr align="center">
	<td><?=$row[id]?></td>
	<td>
	<a href="view.php?id=<?=$row[id]?>">
	<?=$row[title]?>
	</a>
	</td>
	<td><?=$row[user]?></td>
	<td><?=$row[date]?></td>
	</tr>
<?php
	}
?>

