<!DOCTYPE html>
<?php 
    include '../php/login_session.php';
    $idx = $_GET['num'];
    $conn = mysqli_connect('localhost', 'root', '1029', 'oh5959') or die('fail');
    $query ="select * from board where board_idx =".$idx.";";
    $result = $conn->query($query);
    $rows = mysqli_fetch_assoc($result);
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
        
      <div class="container">
        <h3><?php echo strip_tags($rows['board_titlte']); ?></h3>
        
        <p>작성자 : <?php echo strip_tags($rows['writer_id']); ?></p>
        
        <audio src="../file/<?php echo strip_tags($rows['file_name']) ?>.mp3" width='400' controls class="audio">
    해당 브라우저는 audio 태그를 지원하지 않습니다.
</audio>


      </div>


      <section class="comment-box">
        <form action="../php/comment_action.php?num=<?php echo $idx ?>" method="post">
            <div class="input-group mb-3">
                
                <div class="form-floating" id="inputbox">
                    <input type="text" class="form-control" placeholder="." id="floatingInput" autocomplete="off" name="comment">
                    <label for="floatingInput">댓글을 입력하세요</label>
                </div>
                <button type="submit" class="btn btn-outline-secondary">작성</button>

            </div>
        </form>

        <?php 
        $query2 ="select * from comment where board_idx = '".$idx."' order by comment_idx ASC";
        $res = $conn->query($query2);
        $total = mysqli_num_rows($res);
        ?>

        <div class="line">
            <p class="count">댓글 수 : <?php echo $total ?></p>
        </div>

       


        </section>

        <section class="comment_box">
        <?php
        while($row = mysqli_fetch_assoc($res)){ //DB에 저장된 데이터 수 (열 기준)
            ?>

    <div class="comm_box">
        <div class="nametime">
            
        <b class="nickname"><?php echo strip_tags($row['username']); ?></b>    
        <p class="time"><?php echo strip_tags($row['write_time']); ?></p>
        
        </div>
        <p class="content"><?php echo strip_tags($row['content']); ?></p>
            </div>
    <?php
        $total--;
            }
    ?>
        </section>
        

        
</body>
</html>