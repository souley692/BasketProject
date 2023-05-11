<!DOCTYPE html>
<html>
<head>
    <title>Résultats de la compétition de basket-ball</title>
    <link rel="stylesheet" href="Competition.css">
</head>
<body>
<h1>Création Competition</h1>

<form action="CreeCompetition.php" method="post">

    <div>
        <label for="peas">Date de debut</label>
        <input type="date" name="datedebut" id="datedebut">
    </div>
    <div>
        <label for="peas">Date de fin</label>
        <input type="date" name="datefin" id="datefin">
    </div>
    <div>
        <label for="peas">Nombre max</label>
        <input type="text"  name="max" id="max">
    </div>
    </br>

    <input type="submit" value="Cree la competition">

</form>


</body>
</html>
