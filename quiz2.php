<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz2</title>
</head>

<body>
    <?php
    $v100 =  $_POST["v100"] ?? "";
    $v7 =  $_POST["v7"] ?? "";
    $v107 = $_POST["v107"] ?? "";
    $v3 =  $_POST["v3"] ?? "";
    $v104 =  $_POST["v104"] ?? "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input1 =  (float)$v100;
        $input2 =  (float)$v7;
        $input3 =  (float)$v107;
        $input4 =  (float)$v3;
        $input5 =  (float)$v104;
        // ค่าจาก % = (จำนวนที่ต้องการหา * จำนวนทั้งหมด) / 100 
        if ($input1) {
            $v7 = ($input1 * 7) / 100;
            $v107 = ($input1 * 107) / 100;
            $v3 = ($input1 * 3) / 100;
            $v104 = ($input1 * 104) / 100;
        } elseif ($input2) {
            $v100 = ($input2 * 100) / 100;
            $v107 = ($input2 * 107) / 100;
            $v3 = ($input2 * 3) / 100;
            $v104 = ($input2 * 104) / 100;
        } elseif ($input3) {
            $v100 = ($input3 * 100) / 100;
            $v7 = ($input3 * 7) / 100;
            $v3 = ($input3 * 3) / 100;
            $v104 = ($input3 * 104) / 100;
        } elseif ($input4) {
            $v100 = ($input4 * 100) / 100;
            $v7 = ($input4 * 7) / 100;
            $v107 = ($input4 * 107) / 100;
            $v104 = ($input4 * 104) / 100;
        } elseif ($input5) {
            $v100 = ($input5 * 100) / 100;
            $v7 = ($input5 * 7) / 100;
            $v107 = ($input5 * 107) / 100;
            $v3 = ($input5 * 3) / 100;
        }else {
            $v100 = 0;
            $v7 = 0;
            $v107 = 0;
            $v3 = 0;
            $v104 = 0;
        }
    }
    ?>
    <form action="" method="post">
        <div>ผู้ใช้กรอกได้ 1 ช่อง</div>
        <table border="1" style="width:20%; text-align: center;">
            <tbody>
                <tr>
                    <td><b>100</b></td>
                    <td><b>7</b></td>
                    <td><b>107</b></td>
                    <td><b>3</b></td>
                    <td><b>104</b></td>
                </tr>
                <tr>

                    <td><input type="text" name="v100" value="<?php echo $v100; ?>"></td>
                    <td><input type="text" name="v7" value="<?php echo $v7; ?>"></td>
                    <td><input type="text" name="v107" value="<?php echo $v107; ?>"></td>
                    <td><input type="text" name="v3" value="<?php echo $v3; ?>"></td>
                    <td><input type="text" name="v104" value="<?php echo $v104; ?>"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <div style="display: flex; gap: 20px;">
            <button type="submit">GO</button>
            <a href="">Clear</a>
        </div>
    </form>

</body>

</html>