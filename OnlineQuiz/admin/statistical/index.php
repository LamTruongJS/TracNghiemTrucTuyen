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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
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

            <nav class="m-0">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active itemBar text-muted" id="nav-bar-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-bar" type="button" role="tab" aria-controls="nav-bar"
                        aria-selected="true">Bar</button>
                    <button class="nav-link itemLine text-muted" id="nav-line-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-line" type="button" role="tab" aria-controls="nav-line"
                        aria-selected="false">Line</button>
                    <button class="nav-link itemHorizontalBar text-muted" id="nav-horizontalBar-tab"
                        data-bs-toggle="tab" data-bs-target="#nav-horizontalBar" type="button" role="tab"
                        aria-controls="nav-horizontalBar" aria-selected="false">HorizontalBar</button>
                </div>
            </nav>
            <div class="tab-content p-0" id="nav-tabContent">
                <div class="tab-pane show active w-100" id="nav-bar" role="tabpanel" aria-labelledby="nav-bar-tab">
                    <canvas id="myChartBar" class="w-100" style="width: 100rem; height: 30rem"></canvas>
                </div>
                <div class="container tab-pane w-100 m-0 p-0" id="nav-line" role="tabpanel"
                    aria-labelledby="nav-line-tab">
                    <canvas id="myChartLine" class="w-100 m-0" style="width: 100rem; height: 30rem"></canvas>
                </div>
                <div class="container tab-pane w-100 m-0 p-0" id="nav-horizontalBar" role="tabpanel"
                    aria-labelledby="nav-horizontalBar-tab">
                    <canvas id="myChartHorizontalBar" class="w-100" style="width: 100rem; height: 30rem"></canvas>
                </div>
            </div>
        </nav>
        <nav class='d-none'>
            <?php 
                require '../../config.php';
                $sql="SELECT * FROM user ORDER BY thoiGian ASC";
                $result=mysqli_query($conn,$sql);   
                for($i=1;$i<$result->num_rows;$i++){
                    $row=mysqli_fetch_array($result);
                   
                        $ngayThang=$row['thoiGian'];
                        $res=substr($ngayThang,5,2);   
                        echo "<div class='month'>Tháng $i</div>";
                        echo "<div class='date'>$res</div>";
                
                }       
            ?>
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
<script type="text/javascript" src='../js/chartUser.js'></script>

</html>