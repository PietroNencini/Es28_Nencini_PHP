<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 28</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        // recupero dati prenotazione ristorante
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $table = $_POST['table_num'];
        $time = $_POST['time'];
        $notes = $_POST['notes'];
        $parking = $_POST['parking_type'];
        if(isset($_POST['courses[]'])) {
            $courses = $_POST['courses[]'];
            
        } else {
            echo "Non puoi fare un'ordinazione vuota!";
        }
    ?> 

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>