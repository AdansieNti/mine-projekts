<?php
  // Function to establish database connection
  function connect() {
   $servername = "localhost"; 
   $username = "root"; 
   $password = ""; 
   $dbname = "login_sample_db"; 
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   // Check connection
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }
   
   return $conn;
  }
  
  // Establish database connection
  $conn = connect();
  
  // Check if search keyword is provided
  if (isset($_GET['search']) && !empty($_GET['search'])) {
   $search = $_GET['search'];
   $sql = "SELECT * FROM logrecs WHERE school LIKE '%$search%' OR circuit LIKE '%$search%'";
  } else {
   $sql = "SELECT * FROM logrecs";
  }
  
  // Execute SQL query
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
   // Loop through records
   while($row = $result->fetch_assoc()) {
    // Create file name based on record ID
    $filename = 'record_' . $row['id'] . '.txt';
    
    // Open file for writing
    $file = fopen($filename, 'w');
    
    // Write record data to file
    fwrite($file, 'Date: ' . $row['date'] . "\n");
    fwrite($file, 'Circuit: ' . $row['circuit'] . "\n");
    fwrite($file, 'School: ' . $row['school'] . "\n");
    fwrite($file, 'Purpose: ' . $row['purpose'] . "\n");
    fwrite($file, 'Observation: ' . $row['observation'] . "\n");
    fwrite($file, 'Action: ' . $row['action'] . "\n");
    fwrite($file, 'Signed: ' . $row['signed'] . "\n");
    fwrite($file, 'Position: ' . $row['position'] . "\n");
    
    // Close file
    fclose($file);
   }
   
   // Display success message
   echo 'Text pages generated successfully.';
  } else {
   echo 'No records found.';
  }
  
  // Close database connection
  $conn->close();
 ?>