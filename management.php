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
        const DISCOUNT = 0.2;

        // Recupero dati
        $name = $_POST['name'];
        $price = floatval($_POST['price']);
        $quantity = intval($_POST['quantity']);
        $second_hand = isset($_POST['second_hand']);
        $pay_method = $_POST['pay_method'];

        $total = $price * $quantity;
        if($second_hand)
            $total *= 1 - DISCOUNT;
        if($pay_method == "card")
            $total += 2;
    ?> 

    <ul>
        <li> Oggetto:     <?php echo $name ?> </li>
        <li> Prezzo (€):  <?php echo $price ?> </li>
        <li> Quantità:    <?php echo $quantity ?> </li>
        <li> Condizioni: <?php echo $second_hand ? "Usato" : "Nuovo" ?> </li>
        <li> Metodo di pagamento: <?php echo $pay_method ?> </li>
    </ul>

    <p class="fw-bolder"> TOTALE: <?php echo $total  ?> </p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>