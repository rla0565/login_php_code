<?php
$host= 'localhost';
$user= 'kimsoo';
$pw= '1234';
$dbName = 'users';
$mysqli = new mysqli($host,$user,$pw,$dbName);
$mysqli -> set_charset('utf8');
$id= $_POST['id'];
$password= $_POST['password'];

$sql = "insert into users(id,password)";
$sql .= "Value('$id','$password')";
$result=$mysqli->query($sql);

if($result){
	echo '회원가입 되었습니다.';
	print <<<_FORM
<form name="signup_success" method="POST" action="login.php">
<input type="submit" value="로그인"/>
</form>
_FORM;
}else{
	echo '회원가입이 실패하였습니다.';
print <<<_FORM
<form name="signup_fail" method="POST" action="signup.php">
<input type="submit" value="다시하기"/>
</form>
_FORM;
}
?>
