<?php

// This is the main-model for PHP Motors

include "../library/connections.php";

function getAuthors(){
 // Create a connection object from the phpmotors connection function
 $db = connection(); 
 // The SQL statement to be used with the database 
 $sql = 'SELECT author FROM posts'; 
 // The next line creates the prepared statement using the phpmotors connection      
 $stmt = $db->prepare($sql);
 // The next line runs the prepared statement 
 $stmt->execute(); 
 // The next line gets the data from the database and 
 // stores it as an array in the $classifications variable 
 $authors = $stmt->fetchAll(); 
 // The next line closes the interaction with the database 
 $stmt->closeCursor(); 
 // The next line sends the array of data back to where the function 
 // was called (this should be the controller) 
 return $authors;
}