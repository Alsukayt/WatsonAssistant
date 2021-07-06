<?php


$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'basecontrol';

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
endif;

$Forward = $_POST["Forward"];
$Stop = $_POST["Stop"];
$Right1 = $_POST["Right1"];
$Left1 = $_POST["Left1"];
$Backward = $_POST["Backward"];

if(isset($_POST['Forward'])) {

    echo "<br>";

    $my_query = "";

    $my_query = "select * from basevalues WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO basevalues (Forward) VALUES ('$Forward')";
    $result = mysqli_query($connection, $my_query);
    if ($result) {
        echo "Item successfuly Added!";
    } else {
        echo "ERROR: Unable to past <br>";
    }
}
    else if(isset($_POST['Stop'])) {
        echo "<br>";

        $my_query = "";

        $my_query = "select * from basevalues WHERE 1 ";
        $result = mysqli_query($connection, $my_query);

        $my_query = "INSERT INTO basevalues (Stop) VALUES ('$Stop')";
        $result = mysqli_query($connection, $my_query);
        if ($result) {
            echo "Item successfuly Added!";
        } else {
            echo "ERROR: Unable to past <br>";
        }
    }
    else if(isset($_POST['Right1'])) {
        echo "<br>";

        $my_query = "";

        $my_query = "select * from basevalues WHERE 1 ";
        $result = mysqli_query($connection, $my_query);

        $my_query = "INSERT INTO basevalues (Right1) VALUES ('$Right1')";
        $result = mysqli_query($connection, $my_query);
        if ($result) {
            echo "Item successfuly Added!";
        } else {
            echo "ERROR: Unable to past <br>";
        }
    }
        else if(isset($_POST['Left1'])) {
            echo "<br>";

            $my_query = "";

            $my_query = "select * from basevalues WHERE 1 ";
            $result = mysqli_query($connection, $my_query);

            $my_query = "INSERT INTO basevalues (Left1) VALUES ('$Left1')";
            $result = mysqli_query($connection, $my_query);
            if ($result) {
                echo "Item successfuly Added!";
            } else {
                echo "ERROR: Unable to past <br>";
            }
        }
            else if(isset($_POST['Backward'])) {
                echo "<br>";

                $my_query = "";

                $my_query = "select * from basevalues WHERE 1 ";
                $result = mysqli_query($connection, $my_query);

                $my_query = "INSERT INTO basevalues (Backward) VALUES ('$Backward')";
                $result = mysqli_query($connection, $my_query);
                if ($result) {
                    echo "Item successfuly Added!";
                } else {
                    echo "ERROR: Unable to past <br>";
                }
            }
            ?>