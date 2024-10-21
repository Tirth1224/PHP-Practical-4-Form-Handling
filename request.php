<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= " <?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        NAME: <input type="text" name="name"><br><br>
        <input type="submit">
    </form><br><br>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_REQUEST["name"]; 
        if(empty($name))
            {
                echo "Name is empty";
            }
        else
            {
                echo "Hello ". $name; 
            }
    }
    ?>

</body>
</html>