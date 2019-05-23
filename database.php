<!doctype html>
<html lang="en">
<head>
    <?php include "public/parts/head.php"; ?>
</head>
<body>
    <div class="wrapper">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dbi390006";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM categorie";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row['naam'];
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
        ?>
    </div>
</body>
</html>