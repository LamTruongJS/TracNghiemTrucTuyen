<?php 
    $maUser = $_GET['maUser'];
    require '../../config.php';
    $sql="UPDATE user SET trangThai = 0 where maUser like '$maUser'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('Location:  /onlineQuiz/admin/account?res=resolveUnLock');
    }
?>