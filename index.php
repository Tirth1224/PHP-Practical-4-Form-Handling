<!-- <!DOCTYPE html>
<html>
<head>
    <title>Billing Software</title>
    <script>
        function validateForm() {
            var mobileNumber = document.getElementById("mobileno").value;
            var regex = /^[6-9]\d{9}$/; // Regular expression to match Indian mobile numbers

            if (!regex.test(mobileNumber)) {
                alert("Please enter a valid Indian mobile number.");
                return false;
            }
            return true;
        }

        function clearForm() {
            document.getElementById("billingForm").reset();
        }
    </script>
</head>
<body>
    <form id="billingForm" method="post" action="order.php" onsubmit="return validateForm()">
        <center>
            <h2>Welcome to U-Shop</h2>
            <table>
                <tr>
                    <td>Name</td> 
                    <td><input type="text" name="name" id="name" required></td> 
                </tr> 
                <tr>
                    <td>Mobile Number</td>
                    <td><input type="text" name="mobileno" id="mobileno" required></td>
                </tr>
            </table>
            <table name="in">
                <tr>
                    <td><h4>Product Name</h4></td>
                    <td><h4>Price</h4></td>
                    <td><h4>Quantity</h4></td>
                </tr>
                <tr>
                    <td>Wafers</td>
                    <td>10</td>
                    <td><input type="number" value="0" name="f0" min="0"></td>
                </tr>
                <tr>
                    <td>Slice</td>
                    <td>15</td>
                    <td><input type="number" value="0" name="f1" min="0"></td>
                </tr>
                <tr>
                    <td>Cadbury Chocolate</td>
                    <td>85</td>
                    <td><input type="number" value="0" name="f2" min="0"></td>
                </tr>
                <tr>
                    <td>Kitkat Chocolate</td>
                    <td>30</td>
                    <td><input type="number" value="0" name="f3" min="0"></td>
                </tr>
                <tr>
                    <td>Coco</td>
                    <td>60</td>
                    <td><input type="number" value="0" name="f4" min="0"></td>
                </tr>
            </table>
            <h4>Payment Method</h4>
            <input type="radio" name="Payment" value="cash">Cash
            <input type="radio" name="Payment" value="online">Online<br><br>
            <input type="submit" name="submit" value="Submit Order">
            <input type="button" name="Cancel" value="Cancel Order" onclick="clearForm()">
        </center>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Billing Software</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        #billingForm {
            width: 70%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        h4 {
            margin: 10px 0;
            color: #333;
        }
        input[type=text], input[type=number], input[type=submit], input[type=button], input[type=radio] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        input[type=text]:focus, input[type=number]:focus, input[type=submit]:focus, input[type=button]:focus, input[type=radio]:focus {
            outline: none;
            border-color: dodgerblue;
        }
        input[type=submit], input[type=button] {
            background-color: dodgerblue;
            color: #fff;
            cursor: pointer;
        }
        input[type=submit]:hover, input[type=button]:hover {
            background-color: #007bff;
        }
        input[type=radio] {
            margin-right: 5px;
            cursor: pointer;
        }
    </style>
    <script>
        function validateForm() {
            var mobileNumber = document.getElementById("mobileno").value;
            var regex = /^[6-9]\d{9}$/; // Regular expression to match Indian mobile numbers

            if (!regex.test(mobileNumber)) {
                alert("Please enter a valid Indian mobile number.");
                return false;
            }
            return true;
        }

        function clearForm() {
            document.getElementById("billingForm").reset();
        }
    </script>
</head>
<body>
    <form id="billingForm" method="post" action="order.php" onsubmit="return validateForm()">
        <h2>Welcome to U-Shop</h2>
        <table>
            <tr>
                <td><label for="name">Name</label></td> 
                <td><input type="text" name="name" id="name" required></td> 
            </tr> 
            <tr>
                <td><label for="mobileno">Mobile Number</label></td>
                <td><input type="text" name="mobileno" id="mobileno" required></td>
            </tr>
        </table>
        <table name="in">
            <tr>
                <td><h4>Product Name</h4></td>
                <td><h4>Price</h4></td>
                <td><h4>Quantity</h4></td>
            </tr>
            <tr>
                <td>Wafers</td>
                <td>10</td>
                <td><input type="number" value="0" name="f0" min="0"></td>
            </tr>
            <tr>
                <td>Slice</td>
                <td>15</td>
                <td><input type="number" value="0" name="f1" min="0"></td>
            </tr>
            <tr>
                <td>Cadbury Chocolate</td>
                <td>85</td>
                <td><input type="number" value="0" name="f2" min="0"></td>
            </tr>
            <tr>
                <td>Kitkat Chocolate</td>
                <td>30</td>
                <td><input type="number" value="0" name="f3" min="0"></td>
            </tr>
            <tr>
                <td>Coco</td>
                <td>60</td>
                <td><input type="number" value="0" name="f4" min="0"></td>
            </tr>
        </table>
        <h4>Payment Method</h4>
        <input type="radio" name="Payment" value="cash" id="cash"><label for="cash">Cash</label>
        <input type="radio" name="Payment" value="online" id="online"><label for="online">Online</label><br><br>
        <input type="submit" name="submit" value="Submit Order">
        <input type="button" name="Cancel" value="Cancel Order" onclick="clearForm()">
    </form>
</body>
</html>
