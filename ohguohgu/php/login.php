<?php 
include '../php/login_session.php';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="../css/main.css" rel="stylesheet">   
<title>Document</title>
</head>
<body>
    <header class="header">
        <div class="logoimg">
            <img src="../img/image-removebg-preview (3).png" class="img">
        </div>
    </header>
    <h2>로그인</h2>


    <?php 
        if($jb_login == TRUE) {
            
            ?>
            <p>이미 로그인 되었습니다.</p>

            <?php 
        }else{

        
        ?>
        
    

    <section class="section">
        <div class="container">
            
        <form method="post" action="../php/login_action.php">
           
            <div class="form-floating">
                <input type="text" id="floatingInput" name="login_id" class="form-control" placeholder="아이디를 입력하세요" autocomplete="off">
                <label for="floatingInput" >ID</label>
            </div>
            <br />
            
            <div class="form-floating">
                <input type="password" name="login_pw" class="form-control" id="floatingPassword" placeholder="비밀번호를 입력하세요" autocomplete="off">
                <label for="floatingPassword" >PW</label>
            </div>
            <br />

            <button type="submit" class="btn" id="loginbnt">login</button>
            <br />
            <br />
            <a href="../html/register.html">회원가입</a>
        </form>
        </div>
    </section>

    <?php }
     ?>
</body>
</html>