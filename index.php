<!DOCTYPE html>
<html>

<head>
    <title>Senior Mock Elections</title>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <script src="js/index.js"></script>
</head>

<body>
    <h1>Have fun voting!</h1>
    <?php
    $csvArray = array();

    if (($handle = fopen("outputtedData.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $csvArray[] = $data;
        }
    }

    fclose($handle);

    for($i =0; $i <= $data.count($data(0)); $i++) {
        echo $data(0,$i);
    }

    ?>
</body>

</html>