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
        const APPET_PRICE = 5;
        const FIRST_PRICE = 6;
        const SECOND_PRICE = 7;
        const DISCOUNT_ALL = 0.15;
        const DISCOUNT_FS = 0.1;
        $available_waiters = ['Mario', 'Giuseppe', 'Luca', 'Andrea', 'Marco'];
        
        $total = 0; 
        $act_discount = 0;
        //! recupero dati prenotazione ristorante
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $table = $_POST['table_num'];
        $time = $_POST['time'];
        $notes = $_POST['notes'];
        $parking = $_POST['parking_type'];
        if(isset($_POST['courses[]'])) {
            $courses = $_POST['courses[]'];
            
        } else {
            echo "<p> Non puoi fare un'ordinazione vuota! </p> <br> <p> ora prenotazione: $time </p> <br>";
            echo "<a href='index.html' target='_self> torna alla prenotazione</a>";
            exit();
        } 

        if(in_array("antipasto" , $courses) && !in_array("primo", $courses) && !in_array("secondo" , $courses)) {
            echo "Non puoi ordinare solo un antipasto!";
            echo "<a href='index.html' target='_self> torna alla prenotazione</a>";
            exit();
        }  elseif(in_array("antipasto" , $courses) && in_array("primo", $courses) &&  in_array("secondo" , $courses)) 
            $act_discount = DISCOUNT_ALL;
        elseif(!in_array("antipasto" , $courses) && in_array("primo", $courses) &&  in_array("secondo" , $courses)) 
            $act_discount = DISCOUNT_FS;

        $total = floatval(APPET_PRICE + FIRST_PRICE + SECOND_PRICE) * (1 - $act_discount);      //* Primo calcolo del totale

        if($parking != "Niente parcheggio") {
            $total += ($parking == "Parcheggio custodito") ? 5.0 : 3.0;                                //* Eventuale aggiunta causa uso del parcheggio a pagamento 
        }

        $waiter = $available_waiters[array_rand($available_waiters)];                           //* Scelta di un cameriere casuale
    ?> 
    
    <h1 class="my-2">Prenotazione ristorante</h1>
    <div class="table_container w-50 mx-auto">
        <table>
            <tr>
                <th>Cliente</th>
                <th>Tavolo N°</th>
                <th>Ora</th>
                <th>Uso del parcheggio</th>
                <th>Portate</th>
                <th>Cameriere assegnato</th>
                <th>sconto applicato</th>
                <th>Note aggiuntive</th>
                <th>Totale preventivo</th>

            </tr>
            <tr>
                <td><?php echo "$name $surname" ?></td>           <!--nome e cognome sulla stessa cella della tabella-->
                <td><?php echo $table  ?>           </td>
                <td><?php echo $time  ?>            </td>
                <td><?php echo $parking  ?>         </td>
                <td><?php echo $courses  ?>         </td>
                <td><?php echo $waiter  ?>          </td>
                <td><?php echo "$act_discount%" ?>  </td>
                <td><?php echo $notes ?>            </td>
                <td><?php echo "$total €" ?>        </td>
            </tr>
        </table>
    </div>
    <p class="text-center"> TI ASPETTIAMO!   </p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>