<?php
session_start();

require_once("./file.php");

if(isset($_POST['write'])){
	$id = $_POST['id'];
	$title = $_POST['title'];
	$comment = $_POST['comment'];
	$date = date("Y-m-d");
	$file = NULL;

	if(is_uploaded_file($_FILES['upfile']['tmp_name']))
		$file = file_upload($_FILES['upfile']);

	$con = mysqli_connect('localhost','kimsoo','1234','users');
	$result = mysqli_query($con, "INSERT INTO board (user,title,comment,file,date) VALUES ('$id','$title','$comment','$file','$date')");

	if(!$result)
		echo "<script>alert('fail save comment');</script>";

?>
	<meta http-equiv='refresh' content='0; url=index.php'>
<?php
}
else{
?>
	<form action=""method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td>subject</td>
	<td><input type="text" name="title" required/></td>
	</tr>
	<tr>
	<td>name</td>
<?php
	echo "<td><input type='text' name='id' value=".$_SESSION['id']." readonly /></td>";
?>

</tr>
<tr>
<td>content</td>
<td><textarea cols="30" rows="8" name="comment" wrap="off" required>
	</textarea></td>
</tr>
<tr>
	<td>attachment</td>
	<td><input type="file" name="upfile"></td>
</tr>
</table>
<input type="submit" name="write" value="save"/>
<input type="reset" value="reset"/>
</form>
<?php
}
?>
