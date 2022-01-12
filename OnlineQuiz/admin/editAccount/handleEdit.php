<?php
    require '../../config.php'; 
 if(isset($_POST['submit'])){
     
     $maUser=$_POST['maUser'];
     $tenUser=$_POST['tenUser'];
     $matKhau=$_POST['matKhau'];
     $email=$_POST['email'];
     $quyen=$_POST['quyen'];
     $sql2="UPDATE user SET tenUser = '$tenUser', matKhau = '$matKhau', email = '$email', maQuyen = '$quyen' where  maUser like '$maUser'";  
     $result2=mysqli_query($conn,$sql2);
     if($result2){
         header('Location: /onlineQuiz/admin/account?res=resolveEdit');
     }
     
 }
?>