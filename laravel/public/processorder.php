<?php
// create short variable names
$document_root = $_SERVER['DOCUMENT_ROOT'];
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$address = $_POST['address'];
$date = date('H:i, jS F Y');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Parts - Order Results</title>
    </head>

    <body>
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2> 

        <?php
        echo '<p>Order processed at '.date('H:i, jS F Y').'</p>';
        echo '<p>your order is as follows: </p>';
        echo htmlspecialchars($tireqty) . ' tires<br /><br />';
        echo htmlspecialchars($oilqty) . ' bottles of oil<br /><br />';
        echo htmlspecialchars($sparkqty) . ' spark plugs<br /><br />';
        echo htmlspecialchars($address) . '<br />';

        $fp = fopen('$document_root/../orders/orders.txt', 'w');
        ?>    
    </body>
</html>