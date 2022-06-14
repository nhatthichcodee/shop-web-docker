
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/SubMenu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <title>Document</title>
</head>

<body>  
    <div id="wrapper_SubMenu">
        <ul id="main_menu_SubMenu">
            <div id="Title_Submenu">
                <li><h4 id="AffterName"><?php if(isset($_GET['page'])) echo $_GET['page']; ?> <span style="Color:Gray; padding-right: 3px;">/</span></h4></li>
                <li><h4><?php if(isset( $_GET['TheLoai'])) echo $_GET['TheLoai']; ?></h4></li>
            </div>

            <div>
                <li><a href="">Lọc Màu</a>
                    <ul id="Classify" class="sub_menu" style="display:flex; flex-wrap:wrap; justify-content: center">
                            <li><a style="background-color: white; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: aliceblue; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: black; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: bisque ; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: burlywood; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: lightblue; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: cadetblue; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: cornflowerblue; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: darkturquoise; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: aqua; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: blue; width:25px; height:25px; border: 1px solid #eaeaea; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: darkcyan; width:25px; height:25px; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: green; width:25px; height:25px; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: darkslateblue; width:25px; height:25px; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: blueviolet; width:25px; height:25px; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: hotpink; width:25px; height:25px; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: darkorange; width:25px; height:25px; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: coral; width:25px; height:25px; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: gold; width:25px; height:25px; margin: 5px 5px" href=""></a>
                            <li><a style="background-color: red; width:25px; height:25px; margin: 5px 5px" href=""></a>
                    </ul>
                </li>
                <li><a href="">Lọc Giá</a>
                    <ul id="Classify" class="sub_menu">
                        <li><a href="">Dưới 150.000VNĐ</a></li>
                        <li><a href="">150.000đ - 250.000đ</a></li>
                        <li><a href="">250.000đ - 350.000đ</a></li>
                        <li><a href="">350.000đ - 500.000đ</a></li>
                        <li><a href="">Trên 500.000đ</a></li>
                    </ul>
                </li>

                <li><a href="MacDinh.php?page=Sản phẩm&TheLoai=Mặc Định">Xắp xếp</a>
                    <ul class="sub_menu" style="right: 0;">
                        <li><a href="MacDinh.php?page=Sản phẩm&TheLoai=Mặc Định">Mặc định</a></li>
                        <li><a href="TangDan.php?page=Sản phẩm&TheLoai=Tăng Dần">Giá thấp đến cao</a></li>
                        <li><a href="GiamDan.php?page=Sản phẩm&TheLoai=Giảm Dần">Giá cao đến thấp</a></li>
                    </ul>
                </li>   
            </div>   
            

        </ul>                    
    </div>
</body>
</html>


