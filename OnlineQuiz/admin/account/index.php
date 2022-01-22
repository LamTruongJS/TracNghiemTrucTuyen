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
                <h2 class='text-2xl text-green-900 mb-2'>Quản lí tài khoản</h2>
                <form action='' method='post'>
                    <input type="text" class="form-control w-50 float-left outline-style-none text__search">
                </form>
                <!-- <a href='../addAccount/index.php' class='rounded p-2 ml-4 btn btn-outline-success'>Thêm tài khoản</a> -->
                <?php 
                  if(isset($_GET['res'])){
                    echo "<p class='text-red-500 animate-bounce float-right mr-12 border-2 border-red-600 p-2'>";
                     switch($_GET['res']){
                         case 'resolveEdit':
                            echo "Cập nhật thành công</p>";
                            break;
                         case 'resolveLock':
                            echo "Khóa thành công</p>";
                            break;
                         case 'resolveUnLock':
                            echo "Mở khóa thành công</p>";
                            break;
                        default: echo "";
                     }
                   
                  }
                ?>
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Email</th>
                        <th scope="col">Quyền hạn</th>
                        <th scope='col'>Tiện ích</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                      require '../../config.php';
                      $sql="SELECT * FROM user";
                      $result=mysqli_query($conn,$sql);
                      
                     for($i=1;$i<=$result->num_rows;$i++){
                       $row=mysqli_fetch_array($result);
                     
                       echo " <tr>
                                  <th scope='row'>$i</th>
                                  <td>".$row['maUser']."</td>
                                  <td>".$row['tenUser']."</td>
                                  <td>".$row['matKhau']."</td>
                                  <td>".$row['email']."</td>
                                  <td>".$row['maQuyen']."</td>
                                  <td style='display:none'>".$row['trangThai']."</td>
                                  <td align='center'>
                                    <a href='../editAccount?maUser=".$row['maUser']."' >  <img class='d-inline mr-1' src='../../image/pencil.png' style='width:1.4rem'/></a>";                          
                                   
                                   if($row['trangThai']==0){
                                       echo"<a href='../lock_unlock/lock.php?maUser=".$row['maUser']."' ><img class='d-inline' src='../../image/padlock.png'  style='width:1.4rem'/></a>";
                                   }  
                                   else{
                                       echo"<a href='../lock_unlock/unlock.php?maUser=".$row['maUser']."' ><img class='d-inline' src='../../image/unlock.png'  style='width:1.4rem'/></a>";
                                   }
                                   
                        echo       "</td>
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
<script type="text/javascript" src='../js/searchAccount.js'></script>

</html>