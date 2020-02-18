<!doctype html>
<html>
<head>
<title> 회원가입 페이지 </title>
</head>

<body>
<?php
print <<<_FORM
<form name="signup_form" method="post" action="signup_check.php">
아이디 : <input type="text" name="id" /><br />
비밀번호 : <input type="password" name="password" /><br />
비밀번호 확인 : <input type="password" name="password2" /><br />
이메일주소 : <input type="text" name="email" /><br />
<input type="submit" value="회원가입" />
</form>
_FORM;
?>
</body>
</html>
