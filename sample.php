<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        h2, h3 {
            margin-bottom: 5px;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <?php
    $buyer_name = $_POST['name']; 
    $phone = $_POST['mobileno'];
    $payment_method = $_POST['Payment'];
    $totalPrice = 0;

    $Quantity = array($_POST['f0'],$_POST['f1'],$_POST['f2'],$_POST['f3'],$_POST['f4']);
    $Price  = array(3,32,20,25,60);
    $items = array("Twisties", "Milk", "Cadbury Chocolate", "Kitkat Chocolate", "Dairy Milk");

    echo "<h2>Order Details</h2>"; 
    echo "<h3>Your order is placed</h3>"; 
    echo "<h4>Buyer details</h4>"; 
    echo "<p>Buyer's Name: $buyer_name</p>"; 
    echo "<p>Phone Number: $phone</p>"; 

    echo "<table>";
    echo "<tr><th>Item</th><th>Price</th><th>Quantity</th><th>Total</th></tr>";
    for ($i = 0; $i < 5; $i++) {
        $temp = $Quantity[$i] * $Price[$i];
        $totalPrice += $temp;
        echo "<tr><td>$items[$i]</td><td>$Price[$i]</td><td>$Quantity[$i]</td><td>$temp</td></tr>";
    }
    echo "<tr><td colspan='3'><strong>Grand Total</strong></td><td>$totalPrice</td></tr>";
    echo "</table>";

    //Print selected payment method 
    if (!empty($payment_method)) { 
        echo "<p>Payment Method: $payment_method</p>"; 
    } else { 
        echo "<p>No payment method selected.</p>"; 
    } 
    echo "<h2>Thank you!</h2>"; 
    ?>
</body>
</html>
