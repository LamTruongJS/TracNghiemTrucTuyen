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
                    <span class='left__name'>Xin Chào, Lê Lâm Trường</span>
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
                <div class=' grid grid-cols-3 gap-4 '>
                    <?php require '../../config.php';
                        $sql="SELECT * FROM bai_kiem_tra";
                        $result= mysqli_query($conn,$sql);
                        for($i=0;$i<$result->num_rows;$i++){
                            $row=mysqli_fetch_array($result);
                            echo " <a class='content__test__item border' href='../test?maBKT=". $row['maBKT']."'>
                            <p class='text-red-600 text-center'>Tên Đề: ".$row['tenBKT']."</p>
                            <p class='mb-1'><span class='border-b-2 border-green-500'>Tác giả:</span> Lê Lâm Trường</p>
                            <p><span class='border-b-2 border-green-500'>Mô tả: </span>".$row['moTa']."</p> </a>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?php require '../footer/index.php' ?>
</body>

</html>