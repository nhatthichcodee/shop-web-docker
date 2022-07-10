<?php
    require('Config.php');
    mysqli_query(connect(),"set names 'utf8'");

    $now = new DateTime("Asia/Ho_Chi_Minh");
    if (isset($_GET['id'])) {
        $ID = $_GET['id'];
    }
    
    
    $sql = "UPDATE bangluong set ketThuc = '".$now->format('Y-m-d H:i:s')."' where IDNV = '".$ID."' and YEAR(batDau) = '".$now->format('Y')."'
    and MONTH(batDau) = '".$now->format('m')."' and DAY(batDau) = '".$now->format('d')."'";
    mysqli_query(connect(),$sql);
    
    $sql2 = "Select MINUTE(batDau), MINUTE(ketThuc), HOUR(batDau),HOUR(ketThuc), heSoLuong from bangluong where IDNV = '".$ID."' and YEAR(batDau) = '".$now->format('Y')."'
    and MONTH(batDau) = '".$now->format('m')."' and DAY(batDau) = '".$now->format('d')."'";
    $result2=mysqli_query(connect(),$sql2);
    $row2 = mysqli_fetch_array($result2);

    if($row2['HOUR(ketThuc)']>$row2['HOUR(batDau)']){
        $gioLam = ($row2['HOUR(ketThuc)']-$row2['HOUR(batDau)']) + (($row2['MINUTE(ketThuc)']+60-$row2['MINUTE(batDau)'])/60);
    }else{
        $gioLam = ($row2['HOUR(ketThuc)']-$row2['HOUR(batDau)']) + (($row2['MINUTE(ketThuc)']-$row2['MINUTE(batDau)'])/60);
    }

    $sql3 = "UPDATE bangluong set soGioLam = '".$gioLam."' where IDNV = '".$ID."' and YEAR(batDau) = '".$now->format('Y')."'
    and MONTH(batDau) = '".$now->format('m')."' and DAY(batDau) = '".$now->format('d')."'";
    mysqli_query(connect(),$sql3);

    $sql4 = "Select * from nhanvien where ID = ".$ID;
    $result4 = mysqli_query(connect(),$sql4);
    $row4= mysqli_fetch_array($result4);

    
    if($row4['chucVu']=="nhanvien"){
        $sql5 = "UPDATE bangluong set tongLuong = '".$gioLam*20000*$row2['heSoLuong']."' where IDNV = '".$ID."' and YEAR(batDau) = '".$now->format('Y')."'
        and MONTH(batDau) = '".$now->format('m')."' and DAY(batDau) = '".$now->format('d')."'";
        mysqli_query(connect(),$sql5);
    }else{
        $sql5 = "UPDATE bangluong set tongLuong = '".$gioLam*50000*$row2['heSoLuong']."' where IDNV = '".$ID."' and YEAR(batDau) = '".$now->format('Y')."'
        and MONTH(batDau) = '".$now->format('m')."' and DAY(batDau) = '".$now->format('d')."'";
        mysqli_query(connect(),$sql5);
    }
    
    
    header("Location: quantri.php?page_layout=danhsachBangLuong");
    mysqli_close(connect());

?>