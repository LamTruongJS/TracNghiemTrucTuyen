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
            <table class="table table-hover">
                <h2 class='text-2xl text-green-900 mb-2'>Thống kê</h2>
                <form action='' method='post'>
                    <input type="text" class="form-control w-50 float-left outline-style-none text__search">
                </form>

                <?php 
                  if(isset($_GET['res'])){
                    echo "<p class='text-red-500 animate-bounce float-right mr-12 border-2 border-red-600 p-2'>";
                        if($_GET['res']=='resolveRemove'){
                            echo "Đã Xóa";
                        }
                        else echo "Đã Cập Nhật";
                    echo"Thành Công</p>";
                  }
                ?>
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã</th>
                        <th scope="col">Tên</th>
                        <th scope="col" style="min-width:7rem;">Mật khẩu</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Tiện ích</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                      require '../../config.php';
                      $sql="SELECT * FROM bai_kiem_tra";
                      $result=mysqli_query($conn,$sql);
                      
                     for($i=1;$i<=$result->num_rows;$i++){
                       $row=mysqli_fetch_array($result);
                       $maUser =$row['maUser'];
                       $sql2="SELECT * FROM user where maUser like '$maUser'";
                       $result2=mysqli_query($conn,$sql2);
                       $row2=mysqli_fetch_array($result2);
                       echo " <tr style='cursor:pointer;'>
                                    <th scope='row'>$i</th>
                                    <td>".$row['maBKT']."</td>
                                    <td>".$row['tenBKT']."</td>
                                    <td>".$row['matKhauBKT']."</td>
                                    <td>".$row['moTa']."</td>
                                    <td>".$row2['tenUser']."</td> 
                                    <td><a class='btn btn-outline-primary mb-1' href='./markOfTestv1.php?maBKT=".$row['maBKT']."'>Thống kê v1</a>
                                    <a class='btn btn-outline-primary' href='./markOfTestv2.php?maBKT=".$row['maBKT']."'>Thống kê v2</a></td>
                              </tr>";
                     }
                      
                    ?>

                </tbody>
            </table>
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
<script type="text/javascript" src='../js/searchStatistical.js'></script>

</html>