<?php
    
    $mysqli = new mysqli("localhost","u980205732_attendance","Attendance@23","u980205732_attendancesys");
    
    // Check connection
    
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;

    }
    
?>