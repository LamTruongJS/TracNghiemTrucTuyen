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
    <title>Document</title>
</head>

<body>


    <nav class="title container min-w-full h-10 flex justify-between">
        <div class="title__date ml-2  pt-2 inline-block" id='text__clock'>
            Thứ 4 ngày 20 tháng 11, 08:11
        </div>
        <?php 
                // require '../../config.php';
                // $textSearch= $_POST['text']??'';
                // $sql="SELECT * FROM bai_kiem_tra where tenBKT like '%$textSearch%'";
                // $result= mysqli_query($conn,$sql);
                // $row=mysqli_fetch_array($result);
                // if($result){
                //     header('Location: localhost/onlineQuiz/page/');
                // }
        ?>
        <form class="title__search inline-block w-96 h-8 mt-1" action='' method="post">

            <input class="search__input h-8" name='text' type="text" placeholder="Nhập từ bạn cần tìm" />
        </form>
        <div class="inline-block divide-x divide-green-500 mr-14 mt-2">

            <?php
                session_start();
                $email = $_SESSION['email'];
                if (!isset($_SESSION['email'])) {
                    header('Location: /onlineQuiz/page/login');
                }
                require '../../config.php';
                $sql = "SELECT * FROM user where email like '$email'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                echo "<button type='button' class='mr-2 hover:text-green-500'>
                        <a href='../selfPage'>" . $row['tenUser'] . "</a></button>";

            ?>
            <button type="button" class="pl-2 hover:text-green-500">
                <a href="../logout">Đăng xuất</a>
            </button>
        </div>
    </nav>
    <nav class="menu">
        <ol>
            <li class="menu-item">
                <img src="../../image/logo.png" class="h-14" />
            </li>
            <li class="menu-item"><a href="../home/">Trang Chủ</a></li>
            <li class="menu-item">
                <a href="../createQuiz">Tạo bài</a>
                <!-- <ol class="sub-menu">
                    <li class="menu-item"><a href="#0">Game 1</a></li>
                    <li class="menu-item"><a href="#0">Game 2</a></li>
                </ol> -->
            </li>
            <li class="menu-item">
                <a href="#0">Tài Liệu</a>
                <!-- <ol class="sub-menu">
                    <li class="menu-item"><a href="#0">Tài Liệu 1</a></li>
                    <li class="menu-item"><a href="#0">Tài Liệu 2</a></li>
                    <li class="menu-item"><a href="#0">Tài Liệu 3</a></li>
                </ol> -->
            </li>
            <li class="menu-item">
                <a href="../listTest">Bài kiểm tra</a>
                <!-- <ol class="sub-menu">
                    <li class="menu-item"><a href="#0">Lớp 10</a></li>
                    <li class="menu-item"><a href="#0">Lớp 11</a></li>
                    <li class="menu-item"><a href="#0">Lớp 12</a></li>
                </ol> -->
            </li>
            <li class="menu-item"><a href="../selfPage/">Cá nhân</a></li>
        </ol>
    </nav>
</body>


</html>