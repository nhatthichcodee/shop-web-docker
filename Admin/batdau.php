<?php
    require('Config.php');

    mysqli_query(connect(),"set names 'utf8'");

    $now = new DateTime("Asia/Ho_Chi_Minh");
    if (isset($_GET['id'])) {
        $ID = $_GET['id'];
    }

    //Demo

    // $sql = "UPDATE bangluong set batDau = '".$now->format('Y-m-d H:i:s')."' where IDNV = ".$ID;
    // mysqli_query(connect(),$sql);
    // $sql1 = "UPDATE bangluong set ngayLam = '".$now->format('Y-m-d H:i:s')."' where IDNV = ".$ID;
    // mysqli_query(connect(),$sql1);

    //Bản chính
    $sql = "select * from nhanvien where ID = ".$ID;
    $result = mysqli_query(connect(),$sql);
    $row = mysqli_fetch_array($result);
    if($row["chucVu"]=="nhanvien"){
        $sql1 = "INSERT INTO `bangluong`(IDNV, heSoLuong, batDau,ngayLam)
    VALUES ('".$ID."',2,'".$now->format('Y-m-d H:i:s')."','".$now->format('Y-m-d')."')";
    mysqli_query(connect(),$sql1);
    }else{
        $sql1 = "INSERT INTO `bangluong`(IDNV, heSoLuong, batDau,ngayLam)
    VALUES ('".$ID."',3,'".$now->format('Y-m-d H:i:s')."','".$now->format('Y-m-d')."')";
    mysqli_query(connect(),$sql1);
    }

    header("Location: quantri.php?page_layout=danhsachBangLuong");
    mysqli_close(connect());
    
?>