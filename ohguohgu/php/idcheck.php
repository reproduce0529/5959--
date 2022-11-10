<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
    $connection = mysqli_connect("localhost", "root", "1029", "oh5959")or die("fail");

    $id = $_GET['id'];
	$sql = "SELECT * FROM user WHERE user_id ='".$id."';";
    $result = mysqli_query($connection, $sql);
    $sss = $result->num_rows;


    if($sss == 0){
        echo "<b>".$id."</b> 해당 아이디는 사용할 수 있습니다.";
    }else{
        echo "<b>".$id."</b> 해당 아이디는 사용할 수 없습니다.";
    }

?>

    <title>Document</title>
</head>
<body>
    
</body>
</html>