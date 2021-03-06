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
        <form action='./confirm.php' method='POST' class='form'>
            <input type='text' class='border form__pass__key' style='display:none' name='maBKT'
                value='<?php echo$_GET['maBKT']; ?>' />
            <label class='text-center block'>Nhập mật khẩu</label>
            <input type='password' name='passwordTest' class='border-2'
                value="<?php if(isset($_POST['passwordTest'])) echo $_POST['passwordTest']; else echo ''; ?>" />
            <?php if(isset($_GET['notify'])) echo "<p class='notify' class='notify'>Mật khẩu không chính xác</p>";?>
            <div>
                <button type='button' class='border btn_back'>
                    Quay lại
                </button>
                <button name='submit' type='submit' class='border'>Tiếp tục</button>
            </div>
        </form>
    </section>

    <script type='text/javascript' src='../js/confirmPassTest.js'></script>
    <script type="text/javascript" src='../js/clock.js'> </script>
</body>

</html>