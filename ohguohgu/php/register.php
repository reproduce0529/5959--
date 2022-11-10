<!DOCTYPE html>
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
    <h2>회원가입</h2>
    <section class="section">

        <div class="container">

            <form method="post" action="../php/write_action.php">
                <div class="input-group">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="create_id" name="create_id" autocomplete="off" placeholder="아이디를 입력하세요" required>
                        <label for="create_id">아이디를 입력하세요.</label>
                    </div>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1" onclick="checkid()">중복확인</button>
                    
                </div>
                <br />

               

                <div class="form-floating">
                    <input type="password" class="form-control" id="crpw" name="create_pw" autocomplete="off" placeholder="비밀번호를 입력하세요"required>
                    <label for="floatingPassword">비밀번호를 입력하세요</label>
                </div>

                <br />

              

                <div class="form-floating">
                    <input type="password" class="form-control" autocomplete="off" placeholder="비밀번호를 다시 입력하세요" oninput="check(this)"required>
                    <label for="floatingPassword">비밀번호를 다시 입력하세요</label>
                </div>
                
                <div class="alrim" style="color: red;"></div>

                <div class="form-floating">
                    <input type="text" class="form-control" id="name"  name="create_name" autocomplete="off" placeholder="이름를 입력하세요"required>
                    <label >이름을 입력하세요</label>
                </div>
                
                <br />


                <button type="submit" class="btn" id="loginbnt">회원가입</button>
            </form>
        </div>
    </section>

</body>
<script>
    function check(repw) {
        console.log("dd");
        let pw1 = repw.value;
        let pw2 = document.querySelector("#crpw").value;
        let textbox = document.querySelector(".alrim");

        if (pw1 != pw2) {
            textbox.innerHTML = "비밀번호가 다릅니다.";
        } else {
            textbox.innerHTML = "";
        }
    }



   function checkid(){
    let id = document.querySelector('#create_id').value;
    if(id){
        let url = "../php/idcheck.php?id=" + id;
        window.open(url, 'a', 'width=400px, height=300px');    
    }else{
        alert("아이디를 입력하세요.");
    }
   }
</script>

</html>