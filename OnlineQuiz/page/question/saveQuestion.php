<?php require '../../config.php';

if (isset($_POST['submit'])) {

    $count = $_POST['countData'];
    for ($n = 0; $n < $count; $n++) {
        $maBKT = $_POST['maBKT'];

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
        //câu hỏi
        $maCauHoi = 'CH' . rand(0, 9) . rand(0, 9) . rand(0, 9). rand(0, 9). rand(0, 9);
            $tempCH=[];
            for($k=0;$k<$result->num_rows;$k++){
                $row = mysqli_fetch_array($result);
                array_push($tempCH,$row['maCauHoi']);
            }
            while (in_array($maCauHoi,$tempCH)) {
                $maCauHoi = 'CH' . rand(0, 9) . rand(0, 9) . rand(0, 9). rand(0, 9). rand(0, 9);
            };
     
        $sql1 = "INSERT INTO cau_hoi values('$maCauHoi','$question','$maBKT')";
        
        $result1 = mysqli_query($conn, $sql1);
        //đáp án
        $ans = [$ansOne, $ansTwo,$ansThree,$ansFour];
        for ($j = 0; $j < 4; $j++) {
            $sql2 = 'SELECT * FROM dap_an';
            $result2 = mysqli_query($conn, $sql2);
            $maDA = 'DA' . rand(0, 9) . rand(0, 9) . rand(0, 9). rand(0, 9). rand(0, 9);
            $tempDA=[];
            for($h=0;$h<$result2->num_rows;$h++){
                $row2 = mysqli_fetch_array($result2);
                array_push($tempDA,$row2['maDA']);
            }
            while (in_array($maDA,$tempDA)) {
                $maDA = 'DA' . rand(0, 9) . rand(0, 9) . rand(0, 9). rand(0, 9). rand(0, 9);
            };
            $res = 0;
            switch ($j) {
                case 0: {
                        if (strcmp($resultTRUE,"A")==0) {
                            $res = 1;
                        }
                        else{
                            $res=0;
                        }
                    }
                    break;
                case 1: {
                        if (strcmp($resultTRUE,"B")==0) {
                            $res = 1;
                        }
                        else{
                            $res=0;
                        }
                    }
                    break;
                case 2: {
                        if (strcmp($resultTRUE,"C")==0) {
                            $res = 1;
                        }
                        else{
                            $res=0;
                        }
                    }
                    break;
                case 3: {
                        if (strcmp($resultTRUE,"D")==0) {
                            $res = 1;
                        }
                        else{
                            $res=0;
                        }
                    }
                    break;
                default:
                    $res;
                    break;
            };
            $sql3 = "INSERT INTO dap_an VALUES('$maDA','$ans[$j]','$res','$maCauHoi')";
            // echo $sql3;
            $result3 = mysqli_query($conn, $sql3);
            // if($result3){
            //     echo "</br>lưu thành công </br>";
            // };
        //    echo "Mã đáp án: $maDA ";
        //    echo "đáp án: $ans[$j] ";
        //    echo "đúng/sai: $res ";
        //    echo "ma câu hỏi: $maCauHoi </br>";
        }
        // echo "đáp án được chọn: $resultTRUE </br>";
        
    }
    header('Location:../listTest');


}

$conn->close();
?>