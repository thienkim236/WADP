<?php
    
    //Kiểm tra xem form điều chỉnh trang [admin.php]
    if (isset($_GET["btnOK"]) == FALSE) {
        header("location:admin.php");
        exit();
    }
    
    //Lấy connection
    include_once 'connectDB.php';
    
    //Lấy hết dữ liệu của form điều chỉnh để lưu lên databse
        $id = $_GET["txtID"];
        $name = $_GET["txtName"];
        $mail = $_GET["txtMail"];
        $role = $_GET["txtRole"];
        $salary = $_GET["txtSal"];
        
    
    //Viết lệnh update
    $sql ="UPDATE tbemployee SET fullname='$name',email='$mail',role=$role,Salary=$salary WHERE empID='$id' ;";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE){
        echo "<h3 style='color:blue'>Lỗi sai Điều Chỉnh thông tin Employee</h3>";
        exit();
    }
    else{
    //quay ve lai trang danh sach lop
    header("location:admin.php");
    }
?>