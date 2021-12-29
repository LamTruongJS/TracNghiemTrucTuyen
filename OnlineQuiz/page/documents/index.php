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
    <?php require "../header/index.php" ?>
    <main class='container min-w-full -mt-2 pr-12'>
        <div class='content__document grid grid-cols-6 gap-2'>
            <!-- Search -->
            <div class='min-w-full border-r border-green-600'>
                <div class='min-w-full flex flex-col justify-start items-start content__document__left'>
                    <span class='left__name'>Xin Chào, Lê Lâm Trường</span>
                    <div class='left__search'>
                        <input type='text' placeholder='Bạn cần tìm gì ?' />
                    </div>
                    <div class='border-b-2 min-w-full border-green-600 mt-6 -ml-1'></div>
                    <div class='left__rank__document mt-2 text-[#cccc]'>
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
                <div class='grid grid-cols-5 gap-4 content__document__doc'>
                    <div class='doc__item'>
                        <div class='doc__item__img'>
                            <img src='../../image/imgSach.gif' />
                        </div>
                        <div class='doc__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha Trang
                        </div>
                        <span><i class="far fa-eye eyes_password inline-block mr-1"></i>2000 view</span>
                    </div>
                    <div class='doc__item'>
                        <div class='doc__item__img'>
                            <img src='../../image/imgSach.gif' />
                        </div>
                        <div class='doc__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha Trang
                        </div>
                        <span><i class="far fa-eye eyes_password inline-block mr-1"></i>2000 view</span>
                    </div>
                    <div class='doc__item'>
                        <div class='doc__item__img'>
                            <img src='../../image/imgSach.gif' />
                        </div>
                        <div class='doc__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha Trang
                        </div>
                        <span><i class="far fa-eye eyes_password inline-block mr-1"></i>2000 view</span>
                    </div>
                    <div class='doc__item'>
                        <div class='doc__item__img'>
                            <img src='../../image/imgSach.gif' />
                        </div>
                        <div class='doc__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha Trang
                        </div>
                        <span><i class="far fa-eye eyes_password inline-block mr-1"></i>2000 view</span>
                    </div>
                    <div class='doc__item'>
                        <div class='doc__item__img'>
                            <img src='../../image/imgSach.gif' />
                        </div>
                        <div class='doc__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha Trang
                        </div>
                        <span><i class="far fa-eye eyes_password inline-block mr-1"></i>2000 view</span>
                    </div>

                    <div class='doc__item'>
                        <div class='doc__item__img'>
                            <img src='../../image/imgSach.gif' />
                        </div>
                        <div class='doc__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha Trang
                        </div>
                        <span><i class="far fa-eye eyes_password inline-block mr-1"></i>2000 view</span>
                    </div>
                    <div class='doc__item'>
                        <div class='doc__item__img'>
                            <img src='../../image/imgSach.gif' />
                        </div>
                        <div class='doc__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha Trang
                        </div>
                        <span><i class="far fa-eye eyes_password inline-block mr-1"></i>2000 view</span>
                    </div>
                    <div class='doc__item'>
                        <div class='doc__item__img'>
                            <img src='../../image/imgSach.gif' />
                        </div>
                        <div class='doc__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha Trang
                        </div>
                        <span><i class="far fa-eye eyes_password inline-block mr-1"></i>2000 view</span>
                    </div>
                    <div class='doc__item'>
                        <div class='doc__item__img'>
                            <img src='../../image/imgSach.gif' />
                        </div>
                        <div class='doc__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha Trang
                        </div>
                        <span><i class="far fa-eye eyes_password inline-block mr-1"></i>2000 view</span>
                    </div>
                    <div class='doc__item'>
                        <div class='doc__item__img'>
                            <img src='../../image/imgSach.gif' />
                        </div>
                        <div class='doc__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha Trang
                        </div>
                        <span><i class="far fa-eye eyes_password inline-block mr-1"></i>2000 view</span>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <?php require "../footer/index.php" ?>
</body>

</html>