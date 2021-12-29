<?php require '../../config.php';

if (isset($_POST['submit'])) {

    $count = $_POST['countData'];
    for ($n = 0; $n < $count; $n++) {
        $maBKT = $_GET['maBKT'];

        $a = 'question' . $n;
        $b = 'ansOne' . $n;
        $c = 'ansTwo' . $n;
        $d = 'ansThree' . $n;
        $e = 'ansFour' . $n;
        $f = 'resultTRUE' . $n;

        $question = $_POST["$a"];
        $ansOne = $_POST["$b"];
        $ansTwo = $_POST["$c"];
        $ansThree = $_POST["$d"];
        $ansFour = $_POST["$e"];
        $resultTRUE = $_POST["$f"];

        $sql = 'SELECT * FROM cau_hoi';
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        //câu hỏi
        $maCauHoi = 'CH' . rand(0, 9) . rand(0, 9) . rand(0, 9);
        while (strcmp($maCauHoi, $row['maCauHoi']) == 0) {
            $maCauHoi = 'CH' . rand(0, 9) . rand(0, 9) . rand(0, 9);
        }
        $sql1 = "INSERT INTO cau_hoi values('$maCauHoi','$question','$maBKT')";
        $result1 = mysqli_query($conn, $sql1);
        //đáp án
        $ans = ["A." . $ansOne, "B." . $ansTwo, "C." . $ansThree, "D." . $ansFour];
        for ($i = 0; $i < 4; $i++) {
            $sql2 = 'SELECT * FROM dap_an';
            $result2 = mysqli_query($conn, $sql2);
            $row = mysqli_fetch_array($result2);
            $maDA = 'DA' . rand(0, 9) . rand(0, 9) . rand(0, 9);
            while (strcmp($maDA, $row['maDA']) == 0) {
                $maDA = 'DA' . rand(0, 9) . rand(0, 9) . rand(0, 9);
            }
            ;
            $res = 0;
            switch ($i) {
                case 0: {
                        if ($resultTRUE == "A") {
                            $res = 1;
                        }
                    }
                    break;
                case 1: {
                        if ($resultTRUE == "B") {
                            $res = 1;
                        }
                    }
                case 2: {
                        if ($resultTRUE == "C") {
                            $res = 1;
                        }
                    }
                case 3: {
                        if ($resultTRUE == "D") {
                            $res = 1;
                        }
                    }
                default:
                    $res;
            }
            $sql3 = "INSERT INTO dap_an values('$maDA','$ans[$i]',$res,'$maCauHoi')";
            $result3 = mysqli_query($conn, $sql3);
        }
    }
    header('Location:../listTest');


}

$conn->close();
?>