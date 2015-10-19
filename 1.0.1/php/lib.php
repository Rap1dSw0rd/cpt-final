<?php
// globals
global $servername;
global $username;
global $password;
global $db;
global $conn;

function createNav()
{ // creates a navbar to go between the different php pages
 echo ("
	<div>
		<button onclick=\"javascript:location.href='./create.php'\">Create</button></li>
		<button onclick=\"javascript:location.href='./insert.php'\">Insert</button></li>
		<button onclick=\"javascript:location.href='./show.php'\">Show</button></li>
		<button onclick=\"javascript:location.href='./clear.php'\">Clear</button></li>
		<button onclick=\"javascript:location.href='./drop.php'\">Drop</button></li>
	</div>
 ");
}

function initConnect()
{ // initialize the connection to the database
	$servername = "localhost";
	$username = "pi";
	$password = "pi";
	$db = "test";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if (!$conn) { die("<p>Connection failed: " . mysqli_connect_error() . "</p>"); }

	echo "<p>Connected Successfully!</p>";
	return $conn;

}

function closeConnect($conn) { mysqli_close($conn); } //close the connection to the database

function useTable() { $myTable = "lwb_user"; return $myTable; }

function createTable()
{
	$myTable = useTable();
	$conn = initConnect();	
	$sql = "SELECT * FROM $myTable";
	
	if (mysqli_query($conn, $sql))
	{ echo "<p>User Table <b>$myTable</b> Exists</p>";
	
	// If tables does not exist, create it
	} else {
		echo "<p>User Table Does Not Exist</p><p>Creating <b>$myTable</b> table...";
		$sql = "CREATE TABLE $myTable (
				 	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
					uname VARCHAR(32) NOT NULL,
					pword VARCHAR(64) NOT NULL,
					created TIMESTAMP NOT NULL DEFAULT NOW()
					)";
			echo "<p><b>$myTable</b> created</p>";
			mysqli_query($conn, $sql);
		}
	closeConnect($conn);
}


function insert()
{
	$myTable = useTable(); //the table we will be using
	$conn = initConnect();	//tests if we can connect to the database
	
	// defines our data to be inserted
	$sql = "INSERT INTO $myTable (uname, pword)
			  VALUES ('Mr.Smith', 'noword')";
	if(mysqli_query($conn, $sql)) {
	echo "<p>Data inserted</p>";
	} else { echo "<p>Unable to insert data</p>"; }
	// once finished we close the connection	
	closeConnect($conn);	
}


function showTable()
{
	$myTable = useTable(); //the table we will be using
	$conn = initConnect();
	$sql = "SELECT uname, pword, created FROM $myTable";
	if($result = mysqli_query($conn, $sql))
	{	
		if (mysqli_num_rows($result) > 0) {
    		// output data of each row
    		while($row = mysqli_fetch_assoc($result))
    		{
        		echo "<br> <b>Username:</b> ". $row["uname"]. " - <b>Password:</b> ". $row["pword"]. " - <b>Timestamp:</b> " . $row["created"] . "<br>";
    		}
		} else {	echo "0 results";	}
	}	else { echo "<b>Table not found!</b>"; }
	closeConnect($conn);
}

function clearTable()
{
	$myTable = useTable(); //the table we will be using
	$conn = initConnect();
	$sql = "DELETE FROM $myTable";
	if (mysqli_query($conn, $sql)) {
		echo "All records deleted";	
	} else { echo "Unable to delete records"; }	
	closeConnect($conn);
}

function dropTable()
{
	$myTable = useTable(); //the table we will be using
	$conn = initConnect();
	$sql = "DROP TABLE $myTable";
	if (mysqli_query($conn, $sql)) {
		echo "<b>" . $myTable . "</b> dropped";	
	} else { echo "Unable to drop <b>" . $myTable . "</b>"; }	
	closeConnect($conn);
}

?>