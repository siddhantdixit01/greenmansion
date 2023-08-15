<?php
	include("conn.php");

	// Create database
	$sql ="CREATE DATABASE IF NOT EXISTS greenmansion";
	if ($conn->query($sql) === TRUE) {
	    echo "Database created successfully <br/>";
	} else {
	    echo "Error creating database: " . $conn->error ."<br/>";
	}

	$conn -> select_db("greenmansion");

	$sql="create table IF NOT EXISTS admin(
		id varchar(10),
		name varchar(50),
		username varchar(50),
		password varchar(50)
	);";
	if($conn->query($sql) === TRUE){
	    echo "Table created successfully <br/>";
	} else {
	    echo "Error creating Table: " . $conn->error."<br/>";
	}

	$sql="create table IF NOT EXISTS contact(
		name varchar(50),
		email varchar(50),
		subject varchar(50),
		message varchar(250)
	);";
	if($conn->query($sql) === TRUE){
	    echo "Table created successfully <br/>";
	} else {
	    echo "Error creating Table: " . $conn->error."<br/>";
	}

	$sql="create table IF NOT EXISTS reservation(
		name varchar(50),
		email varchar(50),
		phone varchar(10),
		date varchar(10),
		quantity varchar(10),
		message varchar(250)
	);";
	if($conn->query($sql) === TRUE){
	    echo "Table created successfully <br/>";
	} else {
	    echo "Error creating Table: " . $conn->error."<br/>";
	}

?>