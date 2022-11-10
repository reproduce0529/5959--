<!DOCTYPE html>
<?php 

include '../php/login_session.php';

?>
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
        <a href="../php/main.php">
            <div class="logoimg">
                <img src="../img/image-removebg-preview (3).png" class="img">
            </div>
        </a>
        
    </header>
    <h2>글쓰기</h2>
    <?php 
    if($jb_login){
      
        
        ?>
<section class="section">
        <div class="container">
            
        <form method="post" action="../php/FileWrite_action.php" enctype='multipart/form-data'>
           
            <div class="form-floating">
                <input type="text" id="floatingInput" name="title" class="form-control" placeholder="." autocomplete="off">
                <label for="floatingInput" >제목을 입력하세요</label>
            </div>
            <br />
            
            <div class="mb-3">
                <label for="formFile" class="form-label">음성 파일을 업로드하세요(mp3, wav, m4a)</label>
                <input class="form-control" type="file" id="formFile" accept=".mp3, .wav, .m4a" name="InputFile" enctype='multipart/form-data'>
              </div>

            <button type="submit" class="btn" id="loginbnt">글쓰기</button>
            <br />
            <br />
           
        </form>
        </div>
    </section>


<?php    
}else{


    ?>

    <p>로그인 후 사용해주세요!</p>
    <a href="../php/login.php">로그인하러 가기</a>

    <?php 
}

?>
    
    

</body>
</html>