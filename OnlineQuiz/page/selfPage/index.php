<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="../../build/tailwind.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./style.css" />
    <!-- import css của header -->
    <link rel="stylesheet" href="../header/style.css" />
    <!-- import css của footer -->
    <link rel="stylesheet" href="../footer/style.css" />
    <title>Document</title>
</head>

<body>
    <?php require '../header/index.php' ?>
    <section class="container min-w-full self__page">
        <div class="grid grid-cols-8 gap-1">
            <div class="col-span-6 content__left">
                <div class="left__first p-2">
                    <p>Bài kiểm tra đã tham gia</p>
                    <div class='swiper mySwiper'>
                        <div class='swiper-wrapper'>
                            <?php 
                             require '../../config.php';
                             $email= $_SESSION['email'];
                             $sql="SELECT * FROM user where email like '$email'";
                             $result=mysqli_query($conn,$sql);
                             $row=mysqli_fetch_array($result);
                             $maUser = $row['maUser'];
                             //lấy ra kết quả
                             $sql2= "SELECT * FROM ket_qua WHERE maUser like '$maUser'";
                             
                             if ($result2 = $conn->query($sql2)) {
                                 if($result2->num_rows <=0) {
                                    echo "<h1 class='mt-12 text-center text-red-600 text-5xl'>Chưa có bài kiểm tra</h1>"; 
                                }
                                 while($row2 = $result2->fetch_assoc()) {
                                    
                                     $maBKT=$row2['maBKT'];
                                     //lấy ra tên bài kiểm tra
                                     $sql3= "SELECT * FROM bai_kiem_tra WHERE maBKT like '%$maBKT'";
                                     $result3=mysqli_query($conn,$sql3);
                                     $row3=mysqli_fetch_array($result3);
                                     $tenBKT=$row3['tenBKT'];
                                     //lấy ra tên của người đăng bài
                                     $maTacGia=$row3['maUser'];
                                     $sql4="SELECT * FROM user where maUser like '%$maTacGia%'";
                                     $result4=mysqli_query($conn,$sql4);
                                     $row4=mysqli_fetch_array($result4);
                                     $tacGia=$row4['tenUser'];
                                     echo " <div class='border swiper-slide'>
                                                 <p>$tenBKT</p>
                                                 <p>Tác giả: $tacGia</p>
                                                 <p>Thời gian: ".$row2['thoiGianHoanThanh']."</p>
                                                 <p>Điểm: ".$row2['diem']."</p>
                                            </div>";
                                 }
                                
                             }   
                            $conn->close();
                            ?>
                        </div>
                        <div class='swiper-pagination'></div>
                    </div>
                </div>
                <!-- Phần 2 -->
                <div class="left__second p-2">
                    <p>Bài kiểm tra đã tạo</p>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php 
                                require '../../config.php';
                                $email= $_SESSION['email'];
                                //lấy ra mã user
                                $sql="SELECT * FROM user where email like '$email'";
                                $result=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_array($result);
                                $maUser=$row['maUser'];
                                //lấy ra bài kiểm tra của đã đăng
                                $sql2="SELECT * FROM bai_kiem_tra where maUser like '$maUser'";
                                if ($result2 = $conn->query($sql2)) {
                                    if($result2->num_rows <=0) {
                                       echo "<h1 class='mt-12 text-center text-red-600 text-5xl'>Chưa có bài kiểm tra</h1>"; 
                                   }
                                    while($row2 = $result2->fetch_assoc()) {
                                        $maBKT=$row2['maBKT'];
                                        $sql3="SELECT * FROM ket_qua WHERE maBKT like '$maBKT' ORDER BY diem DESC";
                                        $result3=mysqli_query($conn,$sql3);
                                        $numRows=$result3->num_rows;
                                        $diem=0;
                                        if($numRows >0){
                                            $row3=mysqli_fetch_array($result3);
                                            $diem=$row3['diem'];
                                        }
                                        
                                        echo "<a class='border swiper-slide content__test__item'   href='../detailCreateTest?maBKT=".$maBKT."'>
                                                
                                                    <p>".$row2['tenBKT']."</p>
                                                    <p class='status'></p>
                                                    <p>Điểm cao nhất: ".$diem."</p>
                                                    <p>Số người tham gia: $numRows</p>
                                                    <p class='startTime'>Thời gian bắt đầu: ".$row2['thoiGianBatDau']."</p>
                                                    <p class='endTime'>Thời gian kết thúc: ".$row2['thoiGianKetThuc']."</p>
                                                    
                                                </a>";
                                    }
                                }
                                $conn->close();
                                ?>


                        </div>
                        <div class="swiper-pagination text-green-500"></div>
                    </div>
                </div>
            </div>

            <div class="col-span-2 border content__right">
                <p>Thông tin cá nhân</p>

                <div>
                    <?php
                        require '../../config.php';
                        if(isset($_POST['submit'])){
                            $email = $_SESSION['email'];
                            $oldEmail=$email;
                            $sql="SELECT * FROM user where email like '$email'";
                            $result=mysqli_query($conn,$sql);
                            $row=mysqli_fetch_array($result);
                            $maUser = $row['maUser'];
                            $userName=$_POST["nameUser"];
                            $userEmail=$_POST["emailUser"];
                            $userPassword=$_POST["passwordUser"];

                            $sql2="SELECT * FROM user";
                            $result2=mysqli_query($conn,$sql2);
                            $res=0;
                            $err='';
                            $success='';
                           if(strcmp($oldEmail,$userEmail)!=0){
                                for($i=0;$i<$result2->num_rows;$i++){
                                    $row2=mysqli_fetch_array($result2);
                                    if(strcmp($userEmail,$row2['email'])==0){
                                        $res++;
                                    }
                                }
                                if($res==0){
                                    $sql2="UPDATE user SET email = '$userEmail', matKhau = '$userPassword',tenUser='$userName' WHERE maUser like '$maUser'";
                                    $result2=mysqli_query($conn,$sql2);
                                    $_SESSION['email']=$userEmail;
                                    $success='Cập nhật thành công!';
                                }
                                else{
                                    $err = 'Email đã tồn tại';
                                }
                           }
                            else {
                               
                                    $sql2="UPDATE user SET email = '$userEmail', matKhau = '$userPassword',tenUser='$userName' WHERE maUser like '$maUser'";
                                    $result2=mysqli_query($conn,$sql2);
                                    $_SESSION['email']=$userEmail;
                                    $success='Cập nhật thành công!';
                                
                            }
                           
                           
                        }
                    ?>
                    <form action="" method="post" id='form__user' name='form__user'>
                        <?php 
                            require '../../config.php';
                            $email = $_SESSION['email'];
                        
                            $sql="SELECT * FROM user where email like '$email'";
                            $result=mysqli_query($conn,$sql);
                            $row=mysqli_fetch_array($result);
                            $userName=$row['tenUser'];
                            $userPassword=$row['matKhau'];
                            if(isset($success)){
                                echo "<span class='text-blue-700 text-lg text-right block'>$success</span>";
                            }
                            echo "<label>Email đăng nhập</label>";
                            echo " <input type='email' name='emailUser' value='$email' readonly/>";
                            if(isset($err)){
                                echo "<span class='text-red-600 text-sm text-left block'>$err</span>";
                            }
                            echo "<label>Tên người dùng</label>";
                            echo "<input type='text' name='nameUser' value='$userName' require readonly>";
                            echo "<label>Mật khẩu</label>";
                            echo " <input type='password' name='passwordUser' require value='$userPassword' readonly>";
                            $conn->close();
                        ?>
                        <button type="button">Chỉnh sửa thông tin</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php require '../footer/index.php' ?>
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript" src="../js/slider.js"></script>
<script type="text/javascript" src="../js/settingUserPage.js"></script>
<script type="text/javascript" src="../js/setStatusSelfTest.js"></script>
<script type="text/javascript" src='../js/clock.js'> </script>

</html>