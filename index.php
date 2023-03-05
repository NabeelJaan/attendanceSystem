<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1>Attendance System</h1>

    <div class="container">





        <?php
            include 'db.php';


            // Perform query

            $sql = "SELECT * FROM `users`";


            $result = mysqli_query( $mysqli, $sql ) or die( "Query has error" );

            if( mysqli_num_rows( $result ) > 0 ) {


        ?>
        
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Gmail</th>
                </tr>

                <?php

                    while( $usersData = mysqli_fetch_assoc( $result ) ) {
                ?>
                    <tr>
                        <td><?php $usersData['id'] ?></td>
                        <td><?php $usersData['username'] ?></td>
                        <td><?php $usersData['email'] ?></td>
                    </tr>

                <?php } ?>    
            </table>

        <?php } ?>

    </div>
    

</body>
</html>