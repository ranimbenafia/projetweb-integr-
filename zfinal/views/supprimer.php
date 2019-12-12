<?PHP
include "../entities/hotel.php";
include "../core/hotelC.php";
$eventC=new eventC();
if (isset($_POST["ID_Event"])){
	$eventC->supprimerevent($_POST["ID_Event"]);
	header('Location: please work.php');
}

?>