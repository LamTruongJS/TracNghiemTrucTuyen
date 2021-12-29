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

    <main class='container min-w-full p-8'>
        <?php require '../../config.php';
        $maBKT=$_GET['maBKT'];
        $sql="SELECT * FROM bai_kiem_tra WHERE maBKT like '$maBKT'";
        $result=mysqli_query($conn,$sql);
        $row= mysqli_fetch_array($result);
        echo "<p class='text-center text-green-600 text-2xl'>".$row['tenBKT']."</p>";
        $conn->close();
    ?>

        <form id='main' class="grid grid-cols-3 relative pt-5" method="POST" action='./saveQuestion.php'>

            <div class='absolute top-2'>
                <button id='btnCreate'
                    class=" border border-green-500 p-2 rounded-lg hover:bg-green-500 hover:text-white transition-all"
                    type="button">Thêm câu hỏi</button>

                <button name='submit' id='submit'
                    class="border border-blue-500 p-2 rounded-lg hover:bg-blue-500 hover:text-white transition-all"
                    type="submit">Hoàn tất bộ đề</button>
                <input style="" type='text' id='countData' name='countData' />

            </div>
            <span class='absolute right-12 top-2 text-2xl text-blue-900'>Tổng số câu hỏi: <p class='inline'
                    id='countQuestion'>...</p>
                câu</span>
            <!-- Template -->
            <template id='question__item'>
                <div class="question__item">
                    <table>
                        <p>Câu 1</p>
                        <tr>
                            <td>Câu hỏi:</td>
                            <td>
                                <textarea name='question' class="min-w-full"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Đáp án 1:</td>
                            <td>
                                <textarea name='ansOne' class="min-w-full"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Đáp án 2:</td>
                            <td>
                                <textarea name='ansTwo' class="min-w-full"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Đáp án 3:</td>
                            <td>
                                <textarea name='ansThree' class="min-w-full"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Đáp án 4:</td>
                            <td>
                                <textarea name='ansFour' class="min-w-full"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Đáp án đúng</td>
                            <td>
                                <select name='resultTRUE'>
                                    <option value="A">Đáp án 1</option>
                                    <option value="B">Đáp án 2</option>
                                    <option value="C">Đáp án 3</option>
                                    <option value="D">Đáp án 4</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </template>

        </form>
    </main>
    <?php require "../footer/index.php" ?>
</body>
<script type="text/javascript" src=' ../js/clock.js'></script>
<script type="text/javascript" src='../js/CreateQuestion.js'></script>

</html>