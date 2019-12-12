<?PHP
include "../entities/hotel.php";
include "../core/hotelC.php";
/*foreach($_POST as $key=>$value)
{
    echo $key." : ".$value."<br>";
}*/
if  (isset($_POST['ID_Event']) && (!$_POST['ID_Event'])==0 )
{
    $event1= new eventC;
$eventX=new event((int)$_POST['ID_Event'],$_POST['NomEvent'], $_POST['DebEvent'],  $_POST['FinEvent'],$_POST['PourProd'],$_POST['PrixApres'],$_POST['Image_eve']);

$event1->ajouterevent($eventX);
header('Location: please work.php');

}
else{
    foreach($_POST as $key=>$value)
{
    header('Location: please work 2.html');
    echo $key." LOL ".$value."<br>";
}
}

?>
