<?php 
        include '../../config.php';
           if(isset($_POST['submit'])){
            $maBKT=$_POST['maBKT'];
            $password=$_POST['passwordTest'];
            $notify='pass';
            
            
            $sql="SELECT * FROM bai_kiem_tra where maBKT like '%$maBKT%'";
           
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result);
            
            if(strcmp($row['matKhauBKT'], $password)==0){
                header("Location: /onlineQuiz/page/test?maBKT=$maBKT");
            }
            else {
                header("Location: /onlineQuiz/page/confirmPassTest?maBKT=$maBKT&notify=$notify");
            }
           }
        ?>