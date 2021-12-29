<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <?php require "../header/index.php" ?>

    <main class='container min-h-full grid grid-cols-5 min-w-full main__test'>
        <div class='col-span-4 min-h-full container__test'>
            <?php require "../../config.php"; 
            $maBKT=$_GET['maBKT'];
            $sql="SELECT * FROM cau_hoi where maBKT like '$maBKT'";
            $result= mysqli_query($conn, $sql);
            for($i=1;$i<=$result->num_rows;$i++) {
                $row=mysqli_fetch_array($result);
                $maCauHoi=$row['maCauHoi'];
                echo "<div class='test__item mt-6' id='test$i'>";
                echo "<p><b>Câu $i: </b>".$row['noiDung']."</p>";
                echo '<form action="#">';
                $sql1="SELECT * FROM dap_an WHERE maCauHoi like '$maCauHoi'";
                $result1=mysqli_query($conn,$sql1);
                for($j=0;$j<$result1->num_rows;$j++){  
                    $res='A';
                    switch($j){
                        case 0: $res='A'; break;
                        case 1: $res='B'; break;
                        case 2: $res='C'; break;
                        case 3: $res='D'; break;
                        default: $res='A';
                    } 
                    $row1=mysqli_fetch_array($result1);
                    echo "<p>
                            <input type='radio' id='".$row1['maDA']."' name='radio-group'>
                            <label for='".$row1['maDA']."'>$res. ".$row1['noiDung']."</label>
                        </p>";
                }
            echo "</form></div>";   
        }
        $conn->close();
    ?>
        </div>
        <div class='col-span-1 border rounded-2xl border-green-700 p-2 container__list bg-white'>
            <p class='text-lg inline-block border-b border-green-700'>Mã đề: 2291 </p>
            <a href='#' class='border p-2 border-red-600 hover:bg-red-500 hover:text-white float-right rounded-xl'>Nộp
                bài</a>
            <?php require '../../config.php';
                $maBKT=$_GET['maBKT'];
                $sql="SELECT * FROM bai_kiem_tra where maBKT like '$maBKT'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                echo " <p class='mt-4'>Thời gian làm bài <span id='time__test'>".$row['thoiGian']."</span> phút</p>";
                $conn->close();
           ?>

            <div class='grid grid-cols-6 gap-3 mt-4'>
                <?php require'../../config.php';
                    $maBKT=$_GET['maBKT'];
                    $sql="SELECT * FROM cau_hoi where maBKT like '$maBKT'";
                    $result= mysqli_query($conn, $sql);
                    for($i=1;$i<=$result->num_rows;$i++){
                        echo "<a href='#test$i' class='border p-1 text-center rounded-full'>$i</a>";
                    }
                    $conn->close();
                ?>
            </div>
            <?php require '../../config.php';
            $maBKT=$_GET['maBKT'];
            $sql="SELECT * FROM bai_kiem_tra where maBKT like '$maBKT'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result);
            echo "<div class='list__time mt-2'>Thời gian còn lại: <span id='time__count'>".$row['thoiGian']." phút</span></div>";
            $conn->close();
           ?>
        </div>
    </main>
    <?php require "../footer/index.php" ?>
</body>
<script type='text/javascript' src='../js/TagetAnswer.js'></script>
<script type='text/javascript' src='../js/CountTimeTest.js'></script>

</html>