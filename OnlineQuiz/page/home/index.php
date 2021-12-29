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
    <?php require "../header/index.php"; ?>


    <nav class='container min-w-full -mt-2 overflow-hidden p-0'>
        <div class='container min-w-full overflow-hidden content__one'>
            <img src='../../image/hero-shape.png' class='one__shape' />
            <div class='one__img'></div>
            <div class='one__desc container'>
                <div class='one__desc__first text-4xl text-gray-700'>
                    Phần mềm thi</br>
                    trắc nghiệm trực tuyến cho
                </div>
                <div class='one__desc__two text-xl mt-6 text-gray-700'>
                    Công cụ đánh giá nhân viên cho doanh nghiệp</br>
                    Nền tảng tạo đề thi online trong giáo dục
                </div>
                <div class='mt-10 ml-6'>
                    <button type='button' class='rounded-3xl border p-2 px-4 bg-green-600 text-white ring-2 text-2xl'>
                        Đăng ký ngay </button>
                </div>
            </div>
        </div>
        <!-- content__two -->
        <div class='container min-w-full overflow-hidden content__two mt-6 '>
            <div class='flex flex-col items-center'>
                <div class='two__title text-3xl uppercase text-center'>Tính Năng Nổi Bật</div>
                <div class='border-b-4 border-green-700 w-24 mt-2'></div>
            </div>
            <div class='grid grid-cols-4 gap-4 mx-28 mt-6'>
                <div class='border rounded-lg two__item'>
                    <img src='../../image/nhom-de.png'>
                    <div>Tạo đề thi theo nhóm và chủ đề không giới hạn</div>
                </div>
                <div class='border rounded-lg two__item'>
                    <img src='../../image/5d26bcff04f96.png'>
                    <div>Đa dạng về tài liệu và đề kiểm tra, tha hồ tìm kiếm</div>
                </div>
                <div class='border rounded-lg two__item'>
                    <img src='../../image/dem-gio.png'>
                    <div>Câu hình thang điểm, thời gian làm bài phù hợp với bài kiểm tra</div>
                </div>
                <div class='border rounded-lg two__item'>
                    <img src='../../image/614.12-members-icon-iconbunny.jpg'>
                    <div>Một số trò chơi giải trí, nâng cao tư duy và giảm căng thẳng</div>
                </div>
            </div>
            <!-- content__three -->
            <div class='container min-w-full overflow-hidden content__three mt-6 '>
                <div class='flex flex-col items-center'>
                    <div class='three__title text-3xl uppercase text-center'>Những con số biết nói</div>
                    <div class='border-b-4 border-green-700 w-24 mt-2'></div>
                </div>
                <div class='grid grid-cols-3 gap-3 mx-36 mt-2'>
                    <div class=' three__item'>
                        <img src='../../image/member-1.png'>
                        <div>10.000<br>Tài khoản</div>
                    </div>
                    <div class=' three__item'>
                        <img src='../../image/exam-1.png'>
                        <div>10.000<br>Đề thi</div>
                    </div>
                    <div class=' three__item'>
                        <img src='../../image/website-1.png'>
                        <div>10.000<br>Tài liệu</div>
                    </div>
                </div>
            </div>
            <!-- Content__four -->
            <div class='container min-w-full overflow-hidden content__four mt-6 '>
                <div class='flex flex-col items-center'>
                    <div class='four__title text-3xl uppercase text-center'>Top 10 Tài Liệu tham khảo</div>
                    <div class='border-b-4 border-green-700 w-24 mt-2'></div>
                </div>
                <div class='grid grid-cols-5 gap-3 mx-24 mt-2'>
                    <a class='four__item'>
                        <div class='four__item__img'><img src=' ../../image/imgSach.gif'></div>
                        <div class='four__item__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha
                            Trang</div>
                    </a>
                    <a class='four__item'>
                        <div class='four__item__img'><img src=' ../../image/imgSach.gif'></div>
                        <div class='four__item__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha
                            Trang</div>
                    </a>
                    <a class='four__item'>
                        <div class='four__item__img'><img src=' ../../image/imgSach.gif'></div>
                        <div class='four__item__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha
                            Trang</div>
                    </a>
                    <a class='four__item'>
                        <div class='four__item__img'><img src=' ../../image/imgSach.gif'></div>
                        <div class='four__item__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha
                            Trang</div>
                    </a>
                    <a class='four__item'>
                        <div class='four__item__img'><img src=' ../../image/imgSach.gif'></div>
                        <div class='four__item__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha
                            Trang</div>
                    </a>
                    <a class='four__item'>
                        <div class='four__item__img'><img src=' ../../image/imgSach.gif'></div>
                        <div class='four__item__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha
                            Trang</div>
                    </a>
                    <a class='four__item'>
                        <div class='four__item__img'><img src=' ../../image/imgSach.gif'></div>
                        <div class='four__item__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha
                            Trang</div>
                    </a>
                    <a class='four__item'>
                        <div class='four__item__img'><img src=' ../../image/imgSach.gif'></div>
                        <div class='four__item__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha
                            Trang</div>
                    </a>
                    <a class='four__item'>
                        <div class='four__item__img'><img src=' ../../image/imgSach.gif'></div>
                        <div class='four__item__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha
                            Trang</div>
                    </a>
                    <a class='four__item'>
                        <div class='four__item__img'><img src=' ../../image/imgSach.gif'></div>
                        <div class='four__item__desc'>Sách toán 100 câu hỏi hay và sáng tạo của sinh viên Đại học Nha
                            Trang</div>
                    </a>
                </div>
            </div>
    </nav>
    <?php require '../footer/index.php'?>
</body>
<script type="text/javascript" src='../js/clock.js'> </script>

</html>