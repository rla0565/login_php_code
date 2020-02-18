<?php
     include './connect.php';
$id=$_POST['id'];
$password=$_POST['password'];
$sql = "SELECT id FROM users WHERE id='{$id}' and password='{$password}'";
$result = $connect->query($sql);
$count=$result->num_rows;
if($count>0){
        $login = 'exist';
	session_start();
	$_SESSION['id']=$id;
}else{
        $login = 'none';
}
echo json_encode(
        array(
                'result'=>$login,
		'id'=>$id,
        )
);
?>
