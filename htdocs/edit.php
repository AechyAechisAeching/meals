<?php
// eerste de benodigde data ophalen uit de database
require "db/dbconnection.class.php";
$dbconnect = new dbconnection();
// Ik wil alle gegevens met id die in de URL staat oppaken met $_GET
$id = $_GET['id'];
$sql = "SELECT * FROM recipes WHERE id = $id";
$query = $dbconnect -> prepare($sql);
$query -> execute();
$recset = $query -> fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r(value: $recset);
echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recept</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form>
<div class="mb-3">
    <label for="name" class="form-label">Receptnaam</label>
    <input type="recipename" class="form-control" id="name" value="<?php echo $recset[0]['recipe_name'] ?>">
</div>
<div class="mb-3">
    <label for="personen" class="form-label">Hoeveel Personen</label>
    <textarea class="amount" id="personen" value="<?php echo $recset[0]['numberPersons'] ?>" rows="3"></textarea>
    </div>
    </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
</body>
</html>
