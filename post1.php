<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        $bloodgroup = $_POST["bloodgroup"]; 
        if(empty($name) || empty($bloodgroup))
            {
                if (empty($bloodgroup))
                echo "Name is " . $name . ". Your bloodgroup is empty";

                elseif (empty($name))
                echo "Name is empty and bloodgroup is " . $bloodgroup;

                else
                echo "Name and Bloodgroup are empty";

            }
        else
            {
                echo "Hello ". $name . ". Your blood group is" . $bloodgroup; 
            }
    }
    ?>