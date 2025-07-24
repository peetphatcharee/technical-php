<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz1</title>
</head>

<body>

    <form action="" method="post">
        Number of Star: <input type="text" name="star" value="<?php echo $_POST["star"]; ?>"> <button>Go</button>
    </form>

    <div>
        data : <?php echo $_POST["star"]; ?>
    </div>

    <?php


    // เลขคู่ 
    // *
    // **
    // ***
    // ****
    // *****
    // ******

    // เลขคี่
    // *******
    // ******
    // *****
    // ****
    // ***
    // **
    // *
    $numStar = $_POST["star"];
    if (($numStar % 2) == 0) { // เลขคู่ หารเอาเศษ = 0 
        // คู่
        for ($row1 = 1; $row1 <= $numStar; $row1++) { //row

            for ($col1 = 1; $col1 <= $row1; $col1++) { //col

                echo "*";
            }
            echo "<br/>";
        }
    } else {
        // คี่
        for ($row2 = $numStar; $row2  >= 1; $row2--) { //row
            for ($col2 = 1; $col2 <= $row2; $col2++) { //col
                echo "*";
            }
            echo "<br/>";
        }
    }


    ?>
</body>

</html>