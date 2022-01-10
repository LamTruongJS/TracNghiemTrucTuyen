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
    <?php require "../header/index.php"?>
    <?php 
        require '../../config.php';
        // date_default_timezone_set("America/New_York");
        // $date = date("Y-m-d h:i a");
        // echo $date;
        $email=$_SESSION['email'];
        $sql0="SELECT * FROM user where email like '$email'";
        $result0=mysqli_query($conn,$sql0);
        $row0=mysqli_fetch_array($result0);
        $userID = $row0['maUser'];
        
        $err='';
        if(isset($_POST['done'])){
            $nameTest=$_POST['nameTest']??'';
            $passTest=$_POST['passTest']??'';
            // $sumTest=$_POST['sumTest']??'';
            $timeTest=$_POST['timeTest']??'';
            $timeStart=$_POST['timeStart']??'';
            $timeEnd=$_POST['timeEnd']??'';
            $description=$_POST['description']??'';
           
            $sqlMBKT='SELECT * FROM bai_kiem_tra';
            $resultMBKT= mysqli_query($conn, $sqlMBKT);
            $maBKT='BKT'.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $tempBKT=[];
            for($k=0;$k<$resultMBKT->num_rows;$k++){
                $row = mysqli_fetch_array($resultMBKT);
                array_push($tempBKT,$row['maBKT']);
            }
            while (in_array($maBKT,$tempBKT)) {
              $maBKT='BKT'.rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            };
          

            if(strtotime($timeStart) < strtotime($timeEnd)){
                $sql1="INSERT INTO bai_kiem_tra values ('$maBKT','$nameTest','$passTest','$description','$timeTest','$timeStart','$timeEnd','$userID')";
                $result1 = mysqli_query($conn, $sql1);
                if($result1){
                    header("Location: /onlineQuiz/page/question?maBKT=$maBKT"); 
                 }  
            } 
            else {
                  $err='Thời gian chưa hợp lệ';      
            }
        }
    ?>
    <main class='container min-w-full flex flex-col items-center'>
        <section class='flex flex-col items-center'>
            <form class='create__quiz' action='index.php' method='POST'>
                <table class=''>
                    <tr>
                        <td>Tên bài kiểm tra</td>
                        <td><input name='nameTest' type='text' value="<?php if(isset($_POST['nameTest'])) echo $_POST['nameTest'];  ?>" require></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu</td>
                        <td><input name='passTest' type='password' value="<?php if(isset($_POST['passTest'])) echo $_POST['passTest'];  ?>" require></td>
                    </tr>
                    <!-- <tr>
                        <td>Tổng số đề</td>
                        <td>
                            <input class='sumTest' name='sumTest' type='number' min='1' require>
                        </td>
                    </tr> -->
                    <tr>
                        <td>Thời gian làm bài</td>
                        <td>
                            <input name='timeTest' type='number' placeholder='phút' min='1' value="<?php if(isset($_POST['timeTest'])) echo $_POST['timeTest'];  ?>" require>
                        </td>
                    </tr>
                    <tr>
                        <td>Thời gian bắt đầu</td>
                        <td>
                            <input name='timeStart' class='timeStart' type="datetime-local" value="<?php if(isset($_POST['timeStart'])) echo $_POST['timeStart']; else echo "2022-01-01T00:00"  ?>"
                                min="2022-01-01T00:00" max="2022-02-01T00:00">
                        </td>
                    </tr>
                    <tr>
                        <td>Thời gian kết thúc</td>
                        <td>
                            <input name='timeEnd' type="datetime-local" value="<?php if(isset($_POST['timeEnd'])) echo $_POST['timeEnd']; else echo "2022-01-01T00:00"  ?>"
                                min="2022-01-01T00:00" max="2022-02-01T00:00">
                        </td>
                    </tr>
                    <?php 
                        if($err!=''){
                            echo "<tr>
                                    <td></td>
                                    <td style='color:red'>
                                    $err
                                    </td>
                                </tr>";
                        }
                    ?>
                    <tr>
                        <td>Tô tả</td>
                        <td>
                            <textarea name='description' class='min-w-full'  require><?php if(isset($_POST['description'])) echo $_POST['description'];  ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button name='done' type='submit'
                                class='hover:bg-green-500 hover:text-white hover:ring-3'>Hoàn
                                Tất</button>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
        <!-- <div class='w-3/4 border-b-2 border-green-500 mt-4'></div>
        <section class='mt-6' id='listTest'>
            <p class='text-center mb-2 text-xl uppercase text-green-600'>Số lượng đề</p>
            <div class='topic__item'>
                <p class='inline'>Tên đề:</p>
                <input type='text' class='border p-1 ml-4' placeholder='Nhập tên đề'></input>
                <a href='#' class='text-red-700 ml-4'><i class="fas fa-angle-right"></i></a>
            </div>
            <div class='topic__item'>
                <p class='inline'>Tên đề:</p>
                <input type='text' class='border p-1 ml-4' placeholder='Nhập tên đề'></input>
                <a href='#' class='text-red-700 ml-4'><i class="fas fa-angle-right"></i></a>
            </div>
            <div class='topic__item'>
                <p class='inline'>Tên đề:</p>
                <input type='text' class='border p-1 ml-4' placeholder='Nhập tên đề'></input>
                <a href='#' class='text-red-700 ml-4'><i class="fas fa-angle-right"></i></a>
            </div>
            <div class='topic__item'>
                <p class='inline'>Tên đề:</p>
                <input type='text' class='border p-1 ml-4' placeholder='Nhập tên đề'></input>
                <a href='#' class='text-red-700 ml-4'><i class="fas fa-angle-right"></i></a>
            </div>
        </section> -->
    </main>
    <?php require "../footer/index.php" ?>
</body>
<script type="text/javascript" src='../js/clock.js'></script>
<script type='text/javascript' src='../js/renderListTest.js'></script>

</html>