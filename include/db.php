<?php
$host	 = "localhost";
$user	 = "daarulul_absen";
$pass	 = "hjve6uly";
$dabname = "daarulul_absen";


//$host	 = "daarululuumlido.jux.in";
//$user	 = "daarulu1_absen";
//$pass	 = "Hjve6uly";
//$dabname = "daarulu1_absen";

//$user	 = "root";
//$pass	 = "";
//$dabname = "absenkampusdb";
define('sekolah','SMP Daarul Uluum Lido');
define('baseurl','http://absen.daarululuumlido.com/');
define('CSS',baseurl.'common/berkas/css/');
define('JS',baseurl.'common/berkas/js/');
define('IMG',baseurl.'common/berkas/images/');
define('home',baseurl.'pages/home.php');

$conn = mysql_connect( $host, $user, $pass) or die('Could not connect to mysql server.' );
mysql_select_db($dabname, $conn) or die('Could not select database.');

$tahunsemster=mysql_query("SELECT
	*
FROM
	semester,
	tahun_ajaran
WHERE
	semester.isAktif = '1'
AND tahun_ajaran.isAktif = '1'");
if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

	while($tahunsemster_row = mysql_fetch_array($tahunsemster))
{
}

?>
