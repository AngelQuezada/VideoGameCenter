<?php
    // connection details
    $conn_string = "host=localhost port=5432 dbname=gamestore user=postgres password=yourpassword options='--client_encoding=UTF8'";
    // connect to PostgreSQL Service.
    $dbconn = pg_connect($conn_string);
    // Check the Connection 
    if(!$dbconn) {
    echo "Error: could not connect to the database\n";
    } else {
    // the connection has been successful
    }
    // Close connection
    pg_close($dbconn);
