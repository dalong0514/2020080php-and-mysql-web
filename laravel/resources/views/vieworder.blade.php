<?php
    // create short variable name
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dalong's Auto Parts</h1>
    <h2>Customer Orders</h2>
    <?php
        @$fp = fopen('$document_root/../orders/orders.txt', 'rb');
        // @$fp = file('$document_root/../orders/orders.txt');
        // var_dump($fp);
        // exit;
        flock($fp, LOCK_SH);    // lock file for reading
        if (!$fp) {
            echo '<p><strong>No orders pending.<br />please try again later.
                    </strong></p>';
            exit;
        }
        while (!feof($fp)) {
            $order = fgets($fp);
            echo htmlspecialchars($order).'<br />';
            var_dump($order);
        }
        flock($fp, LOCK_UN);    // release read lock
        fclose($fp);
    ?>
</body>
</html>