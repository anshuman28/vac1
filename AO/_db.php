<?php

date_default_timezone_set("UTC");

$db_exists = file_exists("test.sqlite");
$db = new PDO('sqlite:test.sqlite');

if (!$db_exists) {
    //create the database
    $db->exec("CREATE TABLE IF NOT EXISTS rooms (
                        id INTEGER PRIMARY KEY, 
                        name TEXT, 
						password TEXT,
                        capacity INTEGER,
                        status VARCHAR(30))");

    $db->exec("CREATE TABLE IF NOT EXISTS reservations (
                        id INTEGER PRIMARY KEY, 
                        name TEXT, 
                        start DATETIME, 
                        end DATETIME,
                        room_id INTEGER,
                        status VARCHAR(30),
                        paid INTEGER)");

    $rooms = array(
                    array('name' => 'Sapna Neelakanthana Goud',
                        'id' => 1,
                        'capacity' => 1,
						'password' => 'anshuman@',
                        'status' => ''),
                    array('name' => 'Buddhi Prakash Kothari',
                        'id' => 2,
                        'capacity' => 1,
                        'status' => ""),
                    array('name' => 'Sumanta Kumar Saha',
                        'id' => 3,
                        'capacity' => 1,
                        'status' => "Ready"),
                    array('name' => 'Surabhi  Sharma',
                        'id' => 4,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Bhaskara Vallapu',
                        'id' => 5,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Lakshmaiah V Yannagiri',
                        'id' => 6,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Poovizhi Velumani',
                        'id' => 7,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Aman Sharma',
                        'id' => 8,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Harshavardhan Mokkala',
                        'id' => 9,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Sireesha Katika',
                        'id' => 10,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Neha Suman',
                        'id' => 11,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Venkata Raghu Rambabu Choudam',
                        'id' => 12,
                        'capacity' => 1,
                        'status' => "Ready"),
						
        );

    $insert = "INSERT INTO rooms (id, name, capacity, status) VALUES (:id, :name, :capacity, :status)";
    $stmt = $db->prepare($insert);
 
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':capacity', $capacity);
    $stmt->bindParam(':status', $status);
	
 
    foreach ($rooms as $r) {
      $id = $r['id'];
      $name = $r['name'];
      $capacity = $r['capacity'];
      $status = $r['status'];
      $stmt->execute();
    }
    
}
else
{
$rooms = array(
                    
                   
						
						
						
						
						
        );

    $insert = "INSERT INTO rooms (id, name, capacity, status) VALUES (:id, :name, :capacity, :status)";
    $stmt = $db->prepare($insert);
 
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':capacity', $capacity);
    $stmt->bindParam(':status', $status);
	
 
    foreach ($rooms as $r) {
      $id = $r['id'];
      $name = $r['name'];
      $capacity = $r['capacity'];
      $status = $r['status'];
      $stmt->execute();
    }
}
?>