<?php
ob_start();
$query = $_REQUEST['query'];

$host	 = "localhost";
$user	 = "daarulul_absen";
$pass	 = "hjve6uly";
$dabname = "daarulul_absen";

//$user	 = "root";
//$pass	 = "";
//$dabname = "absenkampusdb";
$conn = mysql_connect( $host, $user, $pass) or die('Could not connect to mysql server.' );
mysql_select_db($dabname, $conn) or die('Could not select database.');


//get matched data from skills table
$query = mysql_query("SELECT * FROM siswa LEFT JOIN kelas ON namakelas = kode_kelas  ORDER BY namakelas ASC");

while ($r=mysql_fetch_array($query)) {

  $results[] = array(
		"NIM" =>        $r['nim'],
		"NAMASISWA" =>  $r['nama_siswa'],
		"KELAS" =>      $r['nama_kelas']
	);
}
//return json data
//echo strtoupper(json_encode($data));3
//echo strtoupper(json_encode($results));
echo json_encode($results);

?>
