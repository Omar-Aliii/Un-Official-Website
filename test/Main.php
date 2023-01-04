<?php

        // Connect to the database
        $db = new mysqli('localhost', 'root', '', 'unofficial3');
        
        // Check for errors
        if ($db->connect_error) {
            die('Connection failed: ' . $db->connect_error);
        }

        
        



?>