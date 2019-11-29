<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <h1>Form registratie</h1>
    <?php
    $request = $_REQUEST;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($request as $veld => $value) {
            echo('<b><p>' . 'Jouw ' . $veld . ' is ' . $value . '</p></b>');
        }
    } else {
        echo('<h1>Ongeldig verzoek</h1>');
    }
    ?>
</body>
</html>