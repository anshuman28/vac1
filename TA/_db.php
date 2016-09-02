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
                    array('name' => 'Kapil Yadav',
                        'id' => 1,
                        'capacity' => 1,
						'password' => 'anshuman@',
                        'status' => ''),
                    array('name' => 'Anand Shekhar',
                        'id' => 2,
                        'capacity' => 1,
                        'status' => ""),
                    array('name' => 'Harshith Alva',
                        'id' => 3,
                        'capacity' => 1,
                        'status' => "Ready"),
                    array('name' => 'Deepika Ramasamy',
                        'id' => 4,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Akula Srinivasa Rao',
                        'id' => 5,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Anoop Puttur',
                        'id' => 6,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Palak Thakur',
                        'id' => 7,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Tejas Kumar Krishnegowda',
                        'id' => 8,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Rajalakshmi Hoskote Madegowda',
                        'id' => 9,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Deepak Paswan',
                        'id' => 10,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Mahesh P Payyan',
                        'id' => 11,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Divya Kiranrao Chiwane',
                        'id' => 12,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Tanu Jain',
                        'id' => 13,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Devi Prasanna Satta',
                        'id' => 14,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Tanushri Rai',
                        'id' => 15,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Ashishkumar Patel',
                        'id' => 16,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Anand Sonnikallu',
                        'id' => 17,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Aruna Chimpireddigari',
                        'id' => 18,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Rashmi Shekhar',
                        'id' => 19,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Tirthankar Bardhan',
                        'id' => 20,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Uday Chandra Kumar',
                        'id' => 21,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Balakrishna Vadlamudi',
                        'id' => 22,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Bhaskar Sutradhar',
                        'id' => 23,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Pooja Verma',
                        'id' => 24,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Narasimha Reddy Mekala',
                        'id' => 25,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Anita V Hosurkar',
                        'id' => 26,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Subramanian Pl',
                        'id' => 27,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Satish Dekonda',
                        'id' => 28,
                        'capacity' => 1,
                        'status' => "Ready"),
						array('name' => 'Shivani Jain',
                        'id' => 29,
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