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
    <?php require '../header/index.php' ?>
    <main class='container min-w-full -mt-2 pr-12'>
        <div class='content__test grid grid-cols-6 gap-2'>
            <!-- Search -->
            <div class='min-w-full border-r border-green-600'>
                <div class='min-w-full flex flex-col justify-start items-start content__test__left'>
                    <?php 
                   
                    $email= $_SESSION['email'];
                    if (!isset($_SESSION['email'])) {
                        header('Location: /onlineQuiz/page/login');
                    }
                    require '../../config.php';
                    $sql="SELECT * FROM user where email like '$email'";
                    $result= mysqli_query($conn,$sql);
                    $row=mysqli_fetch_array($result);
                    echo "<span class='left__name'>Xin chào, ".$row['tenUser']." </span>";
                            
                    
                ?>

                    <div class='left__search'>
                        <input type='text' placeholder='Bạn cần tìm gì ?' />
                    </div>
                    <div class='border-b-2 min-w-full border-green-600 mt-6 -ml-1'></div>
                    <div class='left__rank__test mt-2 text-[#cccc]'>
                        <ul>Top 10 sách view cao
                            <div class='border-b-2 w-14 border-green-600 mr-2'></div>
                            <li>
                                <a>Sách 1 nâng cao toán và tiếng việt 12</a>
                            </li>
                            <li>
                                <a>Sách 2</a>
                            </li>
                            <li>
                                <a>Sách 3</a>
                            </li>
                            <li>
                                <a>Sách 4</a>
                            </li>
                            <li>
                                <a>Sách 5</a>
                            </li>
                            <li>
                                <a>Sách 6</a>
                            </li>
                            <li>
                                <a>Sách 7</a>
                            </li>
                            <li>
                                <a>Sách 18</a>
                            </li>
                            <li>
                                <a>Sách 9</a>
                            </li>
                            <li>
                                <a>Sách 10</a>
                            </li>
                        </ul>
                    </div>
                    <div class='border-b-2 min-w-full border-green-600 mt-6 -ml-1'></div>
                    <div class='left__rank__mark mt-2 text-[#cccc]'>
                        <ul>Top 5 sinh viên điểm cao
                            <div class='border-b-2 w-14 border-green-600 mr-2'></div>
                            <li>
                                <a>Sách 1 nâng cao toán và tiếng việt 12</a>
                            </li>
                            <li>
                                <a>Sách 2</a>
                            </li>
                            <li>
                                <a>Sách 3</a>
                            </li>
                            <li>
                                <a>Sách 4</a>
                            </li>
                            <li>
                                <a>Sách 5</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- end search -->
            <div class='col-span-5 container min-w-full mt-6 ml-6'>
                <p class='text-center text-xl text-green-600 mb-4'>Danh sách bài kiểm tra </p>
                <div class='grid grid-cols-3 gap-4 '>
                    <?php require '../../config.php';
                        $sql="SELECT * FROM bai_kiem_tra";
                        $result= mysqli_query($conn,$sql);

                        //lấy ra mã bài kiểm tra đã làm
                        $email= $_SESSION['email'];
                        $sql2="SELECT * FROM user WHERE email like '$email'";
                        $result2=mysqli_query($conn,$sql2);
                        $row2=mysqli_fetch_array($result2);
                        $maUser = $row2['maUser'];

                        $sql3="SELECT maBKT FROM ket_qua WHERE maUser like '$maUser'";
                        $result3=mysqli_query($conn,$sql3);
                        $arrayBKT=array();
                        for($j=0;$j<$result3->num_rows;$j++){
                            $row3=mysqli_fetch_array($result3);
                            array_push($arrayBKT,$row3['maBKT']);
                        }
                        for($i=0;$i<$result->num_rows;$i++){
                            $row=mysqli_fetch_array($result);
                            $maUser = $row['maUser'];
                            $sql4= "SELECT * FROM user where maUser like '$maUser'";
                            $result4=mysqli_query($conn,$sql4);
                            $row4=mysqli_fetch_array($result4);
                            $userName = $row4['tenUser'];
                            if(in_array($row['maBKT'],$arrayBKT)==false){
                                echo " <a class='content__test__item border' href='../confirmPassTest?maBKT=". $row['maBKT']."'>     
                                <p class='item__key' style='display:none'>".$row['maBKT']."</p>
                                <p class='item-name text-red-600 text-center'>Tên Đề: ".$row['tenBKT']."</p>
                                <p class='mb-1'><span class='border-b-2 border-green-500'>Tác giả:</span>&ensp;$userName</p>
                                <p><span class='border-b-2 border-green-500'>Mô tả:</span>&ensp;".$row['moTa']."</p>
                                <p class='startTime' style='display:none'>".$row['thoiGianBatDau']."</p>
                                <p class='endTime' style='display:none'>".$row['thoiGianKetThuc']."</p>
                                <p class='status'></p>
                                </a>";
                                
                            }
                        }
                        $conn->close();
                    ?>
                </div>
            </div>
        </div>

    </main>
    <?php require '../footer/index.php' ?>
    <script type="text/javascript" src='../js/setStatusListTest.js'></script>
    <script type="text/javascript" src='../js/clock.js'> </script>
    <script type="text/javascript" src='../js/SearchOfListTest.js'></script>
</body>

</html>