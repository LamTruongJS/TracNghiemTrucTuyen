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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../build/tailwind.css" />


    <link rel="stylesheet" href="../menu/style.css" />
    <title>Document</title>
</head>

<body>
    <section class="row container m-0 mt-4">
        <nav class="col-md-3">
            <?php 
                require '../menu/index.php';
            ?>

        </nav>
        <nav class="col-md-4 offset-md-2 border pr-12 rounded bg-light pb-2">
            <?php 
                require '../../config.php';
                $maUser=$_GET['maUser'];
                $sql="SELECT * FROM user where maUser like '$maUser'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                $tenUser=$row['tenUser'];
                $matKhau=$row['matKhau'];
                $email=$row['email'];
                $maQuyen=$row['maQuyen'];
            ?>
            <form action='./handleEdit.php' method='post'>
                <div class='form-group'>
                    <p class='text-2xl mb-2'>Chỉnh sửa thông tin</p>
                </div>
                <div class="form-group">
                    <label for="inputOne">Mã người dùng</label>
                    <input type="text" id="inputOne" class="form-control mx-sm-3" aria-describedby="textHelpInline"
                        name="maUser"
                        value="<?php if(isset($_POST["maUser"])) echo $_POST["maUser"]; else echo $maUser?>" readonly>

                </div>
                <div class="form-group">
                    <label for="inputThree">Email</label>
                    <input type="email" id="inputThree" class="form-control mx-sm-3"
                        aria-describedby="passwordHelpInline" name="email" readonly
                        value="<?php if(isset($_POST["email"])) echo $_POST["email"]; else echo $email?>" />
                    <small id="passwordHelpInline" class="text-muted">
                        Must be 8-20 characters long.
                    </small>
                </div>
                <div class="form-group">
                    <label for="inputTwo">Tên người dùng</label>
                    <input type="text" id="inputTwo" class="form-control mx-sm-3" aria-describedby="passwordHelpInline"
                        value="<?php if(isset($_POST["tenUser"])) echo $_POST["tenUser"]; else echo $tenUser?>"
                        name="tenUser" required>
                    <small id="passwordHelpInline" class="text-muted">
                        Must be 8-20 characters long.
                    </small>
                </div>

                <div class="form-group">
                    <label for="inputFour">Mật khẩu</label>
                    <input type="password" id="inputFour" class="form-control mx-sm-3"
                        aria-describedby="passwordHelpInline" name="matKhau"
                        value="<?php if(isset($_POST["matKhau"])) echo $_POST["matKhau"]; else echo $matKhau?>"
                        required>
                    <small id="passwordHelpInline" class="text-muted">
                        Must be 8-20 characters long.
                    </small>
                </div>
                <div class="form-group">
                    <label for="inputFive">Quyền hạn</label>
                    <select class="form-control ml-3" name='quyen'>
                        <option selected
                            value="<?php if(isset($_POST["maQuyen"])) echo $_POST["maQuyen"]; else echo $maQuyen?>"
                            require><?php if(isset($_POST["maQuyen"])) echo $_POST["maQuyen"]; else echo $maQuyen?>
                        </option>

                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-success mt-3">Hoàn tất</button>
            </form>
        </nav>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>


</html>