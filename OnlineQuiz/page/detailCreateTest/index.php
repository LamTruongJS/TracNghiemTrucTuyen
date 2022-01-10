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
    <link rel="stylesheet" href="./style.css" />
    <!-- import css của header -->
    <link rel="stylesheet" href="../header/style.css" />
    <!-- import css của footer -->
    <link rel="stylesheet" href="../footer/style.css">
    <title>Document</title>
</head>

<body>
    <?php require '../header/index.php' ?>
    <section class='container min-w-full'>
        <div class='m-5 grid grid-cols-8 gap-1'>

            <div class='col-span-6 content__left'>
                <form class='form__search'>
                    <p>Danh sách sinh viên</p>
                    <input type="text" class='search__input' name="search" placeholder="Search..">
                    <select class="sort__input" name="sort">

                        <option value="nameASC">Tăng dần theo tên</option>
                        <option value="nameDESC">Giảm dần theo tên</option>
                        <option value="markASC">Tăng dần theo điểm</option>
                        <option value="markDESC">Giảm dần theo điểm</option>
                    </select>
                </form>
                <div>
                    <table class="table__students">
                        <tr>
                            <th>STT</th>
                            <th>Tên Sinh viên</th>
                            <th>Email</th>
                            <th>Điểm số</th>
                            <th>Thời gian làm bài</th>
                        </tr>
                        <?php 
                        require '../../config.php';
                        $maBKT=$_GET['maBKT'];
                        // $maBKT='BKT32444';
                        $sql="SELECT * FROM ket_qua where maBKT like '$maBKT'";
                        $result = mysqli_query($conn,$sql);
                        for($i=1;$i<= $result->num_rows;$i++) {
                            $row=mysqli_fetch_array($result);
                            $maUser=$row['maUser'];
                            $diem=$row['diem'];
                            $thoiGian=$row['thoiGianHoanThanh'];
                            $sql2="SELECT * FROM user where maUser like '$maUser'";
                            $result2=mysqli_query($conn,$sql2);
                            $row2=mysqli_fetch_array($result2);
                            $email=$row2['email'];
                            $tenUser=$row2['tenUser'];
                            echo "<tr>
                                    <td>$i</td>
                                    <td>$tenUser</td>
                                    <td>$email</td>
                                    <td>$diem</td>
                                    <td>$thoiGian</td>
                                    </tr>";
                        }
                        $conn->close();
                    ?>

                    </table>
                </div>
            </div>
            <div class='col-span-2 content__right'>
                <?php 
                require '../../config.php';
                if(isset($_POST['submit'])){
                    $maBKT=$_GET['maBKT'];
                    // $maBKT='BKT32444';
                    $tenBKT=$_POST['tenBKT'];
                    $matKhauBKT=$_POST['matKhauBKT'];
                    $time=$_POST['time'];
                    $timeStart=$_POST['timeStart'];
                    $timeEnd=$_POST['timeEnd'];
                    $success='';
                    // echo $timeStart ."<br>";
                    // echo $timeEnd ."<br>";
                    $timeStart2=substr($timeStart,11,5);
                    $timeEnd2=substr($timeEnd,11,5);
                    // echo $timeStart2 ."<br>";
                    // echo $timeEnd2 ."<br>";
                    $newTime=substr($time,0,2);
                    $res=strtotime ( "+$newTime minute" , strtotime ( $timeStart2) ) ;
                    
                   $res= date('H:i', $res);
                   
                    //    echo $res.'<br>';
                    if(strtotime(substr($timeStart,0,10))<strtotime(substr($timeEnd,0,10))){
                        $sql="UPDATE bai_kiem_tra SET tenBKT ='$tenBKT', matKhauBKT='$matKhauBKT', thoiGian='$time', thoiGianBatDau='$timeStart', thoiGianKetThuc='$timeEnd' where maBKT like '$maBKT'";
            
                        $result=mysqli_query($conn,$sql);
                        if($result){
                            $success='Cập nhật thành công!';
                        }
                    }
                    else if(strtotime($res)<=strtotime($timeEnd2)){
                            $sql="UPDATE bai_kiem_tra SET tenBKT ='$tenBKT', matKhauBKT='$matKhauBKT', thoiGian='$time', thoiGianBatDau='$timeStart', thoiGianKetThuc='$timeEnd' where maBKT like '$maBKT'";
            
                            $result=mysqli_query($conn,$sql);
                            if($result){
                                $success='Cập nhật thành công!';
                            }
                     }      
                     else $success= "Thời gian chưa hợp lệ";     
                }
                $conn->close();
            ?>
                <form action="" method="post" id='form__test' name='form__test' class='form__test'>
                    <p>Thông tin bài kiểm tra</p>
                    <?php 
                    require '../../config.php';
                     $maBKT=$_GET['maBKT'];
                   
                    
                    $sql="SELECT * FROM bai_kiem_tra where maBKT like '$maBKT'";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_array($result);
                    $tempStart= substr($row['thoiGianBatDau'],0,10)."T".substr($row['thoiGianBatDau'],11,5);
                    $tempEnd= substr($row['thoiGianKetThuc'],0,10)."T".substr($row['thoiGianKetThuc'],11,5);
                    if(isset($success)){
                        echo "<span class='animate-bounce text-blue-700 text-lg text-right block'>$success</span>";
                    }
                    echo "  <span class='text-blue-700 text-lg text-right block'></span>
                            <input style='display:none' type='text' value='$maBKT' name='maBKT' />
                            <label>Tên bài kiểm tra</label> 
                            <input type='text' name='tenBKT' value='".$row['tenBKT']."' readonly/>
                            <label>Mật khẩu</label>
                            <input type='password' name='matKhauBKT' value='".$row['matKhauBKT']."' require readonly>
                            <label>Thời gian làm bài</label>
                            <input type='text' name='time' require value='".$row['thoiGian']." phút' readonly>
                            <label>Thời gian mở</label>
                            <input type='datetime-local' name='timeStart' require value='".$tempStart."' readonly>
                            <label>Thời gian đóng</label>
                            <input type='datetime-local' name='timeEnd' require value='".$tempEnd."' readonly>
                         "
                ?>
                    <button type="button">Chỉnh sửa thông tin</button>
                </form>
            </div>

        </div>
    </section>
    <?php require '../footer/index.php'?>
</body>
<script type="text/javascript" src='../js/SearchDetailTest.js'></script>
<script type="text/javascript" src='../js/settingTestPage.js'></script>
<script type="text/javascript" src='../js/clock.js'> </script>

</html>