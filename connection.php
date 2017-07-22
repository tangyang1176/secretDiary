<?php

    $link = mysqli_connect("yourHost", "yourDatabase", "yourDatabasePassword", "yourDatabase");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>