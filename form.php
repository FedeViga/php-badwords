<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Form</title>
</head>

<body class="bg-dark text-white">

    <div class="container text-center mt-5">

        <h1 class="mb-3">BadWords</h1>

        <form action="results.php">
            <div class="mb-3">
                <label for="form-text" class="form-label">Inserisci un testo</label>
                <textarea name="form-text" class="form-control" id="form-text" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="censored-word" class="form-label">Parola da censurare:</label>
                <input name="censored-word" type="text" class="form-control w-25 mx-auto text-center" id="censored-word" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-outline-light">Submit</button>
        </form>

    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>