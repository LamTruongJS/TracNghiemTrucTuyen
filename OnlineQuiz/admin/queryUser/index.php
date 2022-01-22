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
    <nav class="row container m-0 mt-4">
        <nav class="col-md-3">
            <?php 
                require '../menu/index.php';
            ?>

        </nav>
        <nav class="col-md-8 flex-1">
            <form class='w-50 border border-1 rounded bg-light p-2' action='' method='post'>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nhập mã người dùng</label>
                    <input type="text" name='maUser' class="form-control" id="exampleFormControlInput1"
                        value="<?php if(isset($_POST['maUser'])) echo $_POST['maUser']; else echo ''?>"
                        placeholder="ID0001">
                </div>
                <button type="submit" name='submit' class="btn btn-outline-primary">Truy vấn</button>
            </form>
            <div class='mt-2 border border-1 w-min-full'>
                <h1 class='text-red-500 text-2xl text-center mb-2'>Bài kiểm tra đã tạo</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Mã BKT</th>
                            <th scope="col">Tên BKT</th>
                            <th scope="col">Thời gian bắt đầu</th>
                            <th scope="col">Thời gian kết thúc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require '../../config.php'; 
                            if(isset($_POST['submit'])){
                                $maUser= $_POST['maUser'];
                              
                                $sql="SELECT * FROM bai_kiem_tra where maUser like '$maUser'";
                                
                                $result=mysqli_query($conn,$sql);
                                if($result->num_rows >0){
                                    for($i=1;$i<=$result->num_rows;$i++){
                                        $row=mysqli_fetch_array($result);
                                        echo   "<tr>
                                                    <th scope='row'>$i</th>
                                                    <td>".$row['maBKT']."</td>
                                                    <td>".$row['tenBKT']."</td>
                                                    <td>".$row['thoiGianBatDau']."</td>
                                                    <td>".$row['thoiGianKetThuc']."</td>
                                                </tr>";
                                  
                                    }
                                }
                            }
                            $conn -> close();
                        ?>
                    </tbody>
                </table>
            </div>
            <div class='mt-2 border border-1 w-min-full'>
                <h1 class='text-red-500 text-2xl text-center mb-2'>Bài kiểm tra đã tham gia</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Mã BKT</th>
                            <th scope="col">Tên BKT</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col">Điểm số</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require '../../config.php'; 
                            if(isset($_POST['submit'])){
                                $maUser= $_POST['maUser'];
                              
                                $sql="SELECT * FROM ket_qua where maUser like '$maUser'";
                              
                                $result=mysqli_query($conn,$sql);
                                if($result->num_rows >0){
                                    for($i=1;$i<=$result->num_rows;$i++){
                                        $maBKT=$row['maBKT'];
                                        $sql2="SELECT * FROM bai_kiem_tra where maBKT like '$maBKT'";
                                        $result2=mysqli_query($conn,$sql2);
                                        $row2=mysqli_fetch_array($result2);
                                        $tenBKT=$row2['tenBKT'];
                                        $row=mysqli_fetch_array($result);
                                        echo   "<tr>
                                                    <th scope='row'>$i</th>
                                                    <td>".$row['maBKT']."</td>
                                                    <td>$tenBKT</td>
                                                    <td>".$row['thoiGianHoanThanh']."</td>
                                                    <td>".$row['diem']."</td>
                                                </tr>";
                                  
                                    }
                                }
                                
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </nav>
    </nav>
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