<?php

$form_text = $_GET['form-text'];

$censored_word =$_GET['censored-word'];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Results</title>
</head>

<body class="bg-dark text-white">
    
    <div class="container text-center mt-5">

        <div class="mb-5">
            
            <h2>
                Testo non censurato:
            </h2>
    
            <p>
                <?php echo $form_text ?>
            </p>
    
            <h5>
                Lunghezza testo: <?php echo strlen($form_text) ?> caratteri
            </h5>

        </div>

        <hr>

        <div>

            <h2>
                Testo censurato:
            </h2>
    
            <p>
                <?php echo $censored_text = str_replace($censored_word, "***", $form_text, $i) ?>
            </p>
    
            <h5>
                Lunghezza testo dopo la censura: <?php echo strlen($censored_text) ?> caratteri
            </h5>
    
            <h5>
                La parola "<?php echo $censored_word ?>" è stata censurata <?php echo $i; if($i == 1) {echo " volta";} else {echo " volte";} ?>
            </h5>

        </div>

    </div>




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>