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
    <div style='display:none'>
        <?php require '../header/index.php'; ?>
    </div>
    <section class='border p-2'>
        <?php 
        $email=$_SESSION['email'];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $part = date('A');
        $h=date('h');
        if($part=="PM"){
           $h=date('h')+12; 
        }
        $date= date("Y-m-d $h:i:s A");
        $maBKT=$_POST['maBKT'];
        require '../../config.php';
        $sql= "SELECT * FROM cau_hoi where maBKT like '$maBKT'";
        $result=mysqli_query($conn,$sql);
        $n = mysqli_num_rows($result);
        $currentMark=0;
        $mark = 10/$n; // điểm mỗi câu
        $countTRUE=0;
        //lặp qua số câu hỏi của bài kiểm tra
        for($i=1;$i<=$n;$i++){
            // khai báo lấy ra mã câu hỏi và mã đáp án mà bạn chọn
            $name_cau_hoi='maCauHoi'.$i;
            $ma_cau_hoi=$_POST["$name_cau_hoi"];
            $name_dap_an= 'radio-group'.$i;
            $ma_dap_an=$_POST["$name_dap_an"] ??"";

            //lấy câu hỏi trong dữ liệu ra để so sánh
            $sql2= "SELECT maDA FROM dap_an where maCauHoi like '$ma_cau_hoi' and trangThai like '1'";
            // echo $sql2;
            $result2= mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_array($result2);
            if(strcmp($row2['maDA'],$ma_dap_an)==0){
                $currentMark+=$mark;
                $countTRUE++;
                
            }
            // echo 'đáp án đúng: '.$row2['maDA'].'<br>';
            // echo $ma_dap_an;
            // echo $ma_cau_hoi;
            // echo "MaBKT $maBKT";
            // echo "</br>";
        }
        // echo "Số câu đúng: ".$countTRUE.'</br>';
        // echo 'Điểm hiện tại: '.$currentMark;
        
        $sql3="SELECT * FROM user where email like '$email'";
        $result3=mysqli_query($conn,$sql3);
        $row3=mysqli_fetch_array($result3);
        $maUser = $row3['maUser'];
        //lấy ra bảng kết quả lọc maKQ
        $sql4='SELECT * FROM ket_qua';
        $result4=mysqli_query($conn,$sql4);
        $maKQ='KQ'.rand(0,9).rand(0,9).rand(0,9);
       
            $row=mysqli_fetch_array($result4);
          if($result4->num_rows!=0){
            while(strcmp($maKQ,$row['maKQ'])==0){
                $maKQ='KQ'.rand(0,9).rand(0,9).rand(0,9);
               }
        
          }
        //lưu kết quả vào bảng điểm
        $currentMark = ROUND($currentMark,1);
        $sql5="INSERT INTO ket_qua values('$maKQ','$maBKT','$maUser','$currentMark','$date')";
        $result5=mysqli_query($conn,$sql5);
    ?>
        <form action='' method='POST' class='form'>
            <label class='text-center block'>Chúc mừng bạn đã hoàn thành bài kiểm tra</label>
            <?php 
                echo "<p>Số câu đúng: $countTRUE / $n</p>";
                echo "<p>Điểm của bạn: $currentMark điểm</p>";
            ?>
            <div>
                <button name='submit' type='button' class='border'><a class='min-w-full min-h-full'
                        href='../listTest'>Tiếp tục</a></button>
            </div>
        </form>
    </section>

    <script type="text/javascript" src='../js/clock.js'> </script>
</body>

</html>