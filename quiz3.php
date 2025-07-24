<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz3</title>
</head>

<body>
    <?php
    // Array1
    $array1 = array(
        array("code" => 101, "name" => "AAA"),
        array("code" => 102, "name" => "BBB"),
        array("code" => 103, "name" => "CCC")
    );

    // Array2
    $array2 = array(
        array("code" => 103, "city" => "Singapore"),
        array("code" => 102, "city" => "Tokyo"),
        array("code" => 101, "city" => "Bangkok")
    );
    $result = array();
    foreach ($array1 as $a1) {
        foreach ($array2 as $a2) {
            if ($array1["code"] == $array2["code"]) {
                $result[] = array(
                    "code" => $a1["code"],
                    "name" => $a1["name"],
                    "city" => $a2["city"],
                );

                break;
            }
        }
    }

    ?>
    <b>Array1</b>

    <table border="1">
        <thead>

            <tr>
                <th>Code</th>
                <th>Name</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($array1 as $item): ?>
                <tr>

                    <td> <?= $item['code']; ?> </td>
                    <td> <?= $item['name']; ?> </td>

                </tr>
            <?php endforeach; ?>


        </tbody>
    </table>

    <br>
    <b>Array2</b>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($array2 as $item): ?>
                <tr>

                    <td> <?= $item['code']; ?> </td>
                    <td> <?= $item['city']; ?> </td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

    <br>
    <hr>
    <br>
    <b>Output</b>
    <table border="1">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $item): ?>
                <tr>

                    <td> <?= $item['code']; ?> </td>
                    <td> <?= $item['name']; ?> </td>
                    <td> <?= $item['city']; ?> </td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</body>

</html>