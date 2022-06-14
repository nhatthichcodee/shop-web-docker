
<?php
    require('PHP/function.php');
    require('Config.php');
?>
<!DOCTYPE html>
<html id="backGround" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/quenmatkhau.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    </style>
</head>

<body style="background: linear-gradient(to right, #bdc3c7,#2c3e50);">
    <div class="Container_Reget">
        <div>
            <h1>QUÊN MẬT KHẨU</h1>
        </div>
        <form action="" method="POST">
            <div class="Main__Foget" align="center">
                    <div>
                        <h4>Nhập tài khoản </h4>
                        <input type="text" name="taiKhoan" placeholder="Nhập tài khoản">
                    </div>

                    <div>
                        <h4>Nhập Email</h4>
                        <input type="text" name="email" placeholder="Nhập Email của bạn">
                    </div>

                    <div>
                        <h4>Nhập mã xác nhận</h4>
                        <input style="width:240px; height: 40px" name="checkCapcha" type="text" name="Capcha" >
                        <span class="Main__Foget__Capcha">
                            <input type="text" id="codeCapcha" readonly name="capcha" value="A1dT2"></input>
                            <i class="fa-solid fa-arrow-rotate-right" onclick="changedCapcha();"></i></input>
                        </div>
                    </div>

                    <div>
                        <p style="color: red; text-align:center; font-weight:bold;">
                        <?php 
                            if(!empty(showError('capcha')))
                            {        
                                echo showError('capcha');?>
                            <script> changedCapcha();</script>
                                
                        <?php } ?></p>
                    </div>

                    <input class="Main__Foget__subMit" type="Submit" name="submitEmail" value="Xác Nhận">
                    <h5 class="Main__Foget__backLogin">Trở về trang <a href="DangNhap.php">Đăng nhập</a></h5>

            </div>
        </form>

        <script>
            function changedCapcha()
            {
                //các số và từ
                var permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

                var code = "";
                for(var i = 0; i < 5; i++)
                {
                    //tạo random
                    var randomCode = permitted_chars.charAt(Math.floor(Math.random() * permitted_chars.length));
                    
                    //nối chuỗi
                    code = code + randomCode;                  
                }
                console.log(code);
                var capcha = document.getElementById('codeCapcha').value = code;
            }
        </script>
    </div>
</body>
</html>