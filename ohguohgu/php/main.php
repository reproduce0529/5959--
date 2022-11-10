<!DOCTYPE html>
<?php 
    include '../php/login_session.php';
?>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/main.css">
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
        
        <section class="bntbox">
        <br />
        <?php
            if($jb_login){

            
        ?>
        <a href="../php/logout.php">로그아웃</a>
        <?php 
            }else{

            
        ?>

        <a href="../php/login.php">로그인</a>
        
        <?php } 
        
        $conn = mysqli_connect("localhost", 'root', '1029', 'oh5959') or die('fail');
        $query ="select * from board order by board_idx desc";
        $result = $conn->query($query);
        $total = mysqli_num_rows($result);
        
        
        
        ?>

        

        <a href="../php/register.php">회원가입</a>
        <br />
        <br />
        <a href="../php/form.php">
            <button type="button" class="btn" id="loginbnt">글쓰기</button>

        </a>

        <select class="form-select"  >
            <option>-선택-</option>
            <option value="time">최신</option>
            <option value="reverstime">오래된</option>
           
        </select>
        </section>


        <?php
        while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
            ?>

            <a href="../php/comment.php?num=<?php echo strip_tags($rows['board_idx']) ?>">
            <div class="element">
                <p class="title"><?php echo strip_tags($rows['board_titlte'])?></p>
                
                <p>작성자 : <?php echo strip_tags($rows['writer_id'])?></p>
            </div>
        </a>
<?php
    $total--;
        }
?>
        
</body>
</html>