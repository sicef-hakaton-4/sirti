<?php
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, sajt, url, stanje, datum FROM promene";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$xs=file_get_contents($row["url"]);
		$xs=strip_tags($xs);
       if(!strcmp($row["stanje"],$xs)){
		    
		  	
			$sql2 = "UPDATE promene SET opis=".$xs.", promena=1 WHERE id=".$row["id"];

if (mysqli_query($conn, $sql2)) {
    echo "$sql2";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
	   }else {
		   
		    $datetime1 = strtotime($row["datum"]);
		   $datetime2 = strtotime(date("Y-m-d H:i:s"));
		  $secs = $datetime2 - $datetime1;// == <seconds between the two times>
			$days = round($secs / 86400);
			if($days>5){
					$sql3 = "UPDATE promene SET promena=0, datum=now() WHERE id=".$row["id"];

if (mysqli_query($conn, $sql3)) {
    echo "$sql3";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
			}
	   } 

    }
} else {
    echo "0 results";
}

mysqli_close($conn);

	
	?>