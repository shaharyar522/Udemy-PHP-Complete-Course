<?php

$db = new PDO("mysql:host=localhost;dbname=tasks;charset=utf8", "root", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 2. Select all records
$stmt = $db->query("SELECT * FROM task");

// 3. Fetch all as associative array
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 4. Convert to JSON and display
echo json_encode($data);
