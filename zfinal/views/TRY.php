<?PHP
include "../core/hotelC.php";
$event1C=new eventC();
$listeevent=$event1C->afficherevents();


//var_dump($listehotels->fetchAll());
?>


<html lang="en">

<head>

</head>

<body>

<?PHP foreach($listeevent as $row){?>

    <img src="<?PHP echo $row['Image_eve']; ?>" height="100" width="100">

    <?PHP } ?>

</body>
