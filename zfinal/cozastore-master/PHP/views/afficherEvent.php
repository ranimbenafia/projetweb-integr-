<?PHP
include "../core/Event.php";
$event1C=new EventC();
$listeevent=$event1C->afficherEvent();
 
 
//var_dump($listehotels->fetchAll());
?>
 
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Manage <b>Hotels</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new" onclick="submitForm('ajouter.html')" value="Ajouter"><i class="fa fa-plus"></i> Ajouter</button>
                        <input input class="btn btn-info add-new" type="button" onclick="submitForm('modifier.html')" value="Modifier"/>
                        <input class="btn btn-info add-new" type="button" onclick="submitForm('supprimer.html')" value="Supprimer"/>
                    </div>
                </div>
            </div>
            <form id="form1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Event</th>
                        <th>Nom Event</th>
                        <th>Debut de event</th>
                        <th>fin de event</th>
                        <th>pourcentage de remise</th>
                        <th>prix apres</th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP foreach($listeevent as $row){?>
                    <tr>
                        <td><?PHP echo $row['ID_Event']; ?></td>
                        <td><?PHP echo $row['NomEvent']; ?></td>
                        <td><?PHP echo $row['DebEvent']; ?></td>
                        <td><?PHP echo $row['FinEvent']; ?></td>
                        <td><?PHP echo $row['PourProd']; ?></td>
                        <td><?PHP echo $row['PrixApres']; ?></td>
                        <?PHP } ?>
                    </tr>
 
                    </tr>      
                </tbody>
            </table>
        </form>
        </div>
    </div>    
</body>
</html>