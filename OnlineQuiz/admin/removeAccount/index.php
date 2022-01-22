<?php 
    $maUser =$_GET['maUser'];
    echo $maUser;
    require '../../config.php';
    $sql="DELETE FROM user where maUser like '$maUser'";
    echo $sql;
    $result= mysqli_query($conn,$sql);
    if($result){
        header("Location: /onlineQuiz/admin/account?res=resolveRemove");
    }
?>