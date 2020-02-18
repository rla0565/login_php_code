<html>
<head>
<title>로그인</title>
<script>
function login(){
        var ajax = new XMLHttpRequest(); 
        ajax.onreadystatechange = function(){ 
                if(this.readyState == 4 && this.status == 200){ 
                        result = JSON.parse(this.responseText).result; 
                        if(result == 'exist'){ 
				alert('로그인되었습니다!!');
				location.href="index.php";
                        }else{ 
				alert('아이디와 비밀번호를 확인해주세요.');
	  			location.href="login.php";			
                        } 
                } 
        }; 
 
        id = document.getElementById('id').value; 
        password = document.getElementById('password').value; 
 
        ajax.open("POST","http://10.0.2.15/server.php",true); 
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
        var data = "id="+id+"&"+"password="+password; 
        ajax.send(data); 
} 
</script> 
</head>
<body>
<pre>id:    <input type="text" id="id" /></pre> <br> 
password :  <input type= "password" id="password" /><br> 
            <input type="button" value="Login" onclick="login()"/> 
	    <p id="status"> </p> 
            <input type="submit" value="회원가입" onclick="location.href='signup.php'" /> 
</body>
</html>
