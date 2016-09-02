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
                    array('name' => 'Ansuman Nayak',
                        'id' => 1,
                        'capacity' => 1,
						'password' => 'anshuman@',
                        'status' => ''),
                    array('name' => 'Akanksha Verma',
                        'id' => 2,
                        'capacity' => 1,
                        'status' => ""),
                    array('name' => 'Harshith Bheemaiah',
                        'id' => 3,
                        'capacity' => 1,
                        'status' => "Ready"),
                    array('name' => 'Arun Subramanian',
                        'id' => 4,
                        'capacity' => 1,
                        'status' => "Ready")
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
                    array('name' => 'Mohanapriya Murugan',
                        'id' => 5,
                        'capacity' => 1,
                        'status' => ''),
                    array('name' => 'Kshitij Shrivastava',
                        'id' => 6,
                        'capacity' => 1,
                        'status' => ""),
                    array('name' => 'Ansuya U Halasagi',
                        'id' => 7,
                        'capacity' => 1,
                        'status' => "Ready"),
                    array('name' => 'Gudhiti Maheswari',
                        'id' => 8,
                        'capacity' => 1,
                        'status' => "Ready"),
                    array('name' => 'Kristipati Sriharikrishna',
                        'id' => 9,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Rakesh Parla',
                        'id' => 10,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Gursharan Singh',
                        'id' => 11,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Praveen Kumar',
                        'id' => 12,
                        'capacity' => 1,
                        'status' => "Ready"),
					
					array('name' => 'Thenmalar Nakkiran',
                        'id' => 13,
                        'capacity' => 1,
                        'status' => "Ready"),
											
						array('name' => 'Radha Ganesan',
                        'id' => 14,
                        'capacity' => 1,
                        'status' => "Ready"),
											
						array('name' => 'Arpita Bhandari',
                        'id' => 15,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Chidvilas Vayalpati',
                        'id' => 16,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Indulatha Vijayakumar',
                        'id' => 17,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Vinothkumar Periasamy',
                        'id' => 18,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Anupama K',
                        'id' => 19,
                        'capacity' => 1,
                        'status' => "Ready"),
						
							array('name' => 'Preethi Swetha',
                        'id' => 20,
                        'capacity' => 1,
                        'status' => "Ready"),
						
							array('name' => 'Priyanka Bagga',
                        'id' => 21,
                        'capacity' => 1,
                        'status' => "Ready"),
						
							array('name' => 'Varun Prakash Patil',
                        'id' => 22,
                        'capacity' => 1,
                        'status' => "Ready"),
						
							array('name' => 'Anindya Sundar Roy',
                        'id' => 23,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Rizo Prince Xavier',
                        'id' => 24,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Swetalina Senapati',
                        'id' => 25,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Vaishali Sunilkumar',
                        'id' => 26,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Sunil Hubballi',
                        'id' => 27,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						
						array('name' => 'Pawan Kumar',
                        'id' => 28,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Pranav Manjunatha Raghavachar',
                        'id' => 29,
                        'capacity' => 1,
                        'status' => "Ready"),
						
						array('name' => 'Mamatha Shanmugam',
                        'id' => 30,
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
?>