<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Décharge</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="b/assets/css/bd-coming-soon.css">
</head>

<body class="min-vh-100 d-flex flex-column">
    <main class="my-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6 section-left">
                    <h1 class="page-title">Fiche de décharge </h1>

                    <h2 class="page-title">{{$nom}}</h2>

                    <h2 class="page-title">{{$objet}}</h2>

                    <h2 class="page-title">Courrier déposé le {{$date}}</h2>

                    <h2 class="page-title">Code de vérification {{$code}}</h2>
                </div>

            </div>
        </div>
    </main>

    <footer class="text-center">

        <p class="footer-text mb-0">
            Copyright 2023 ENEAM
        </p>
    </footer>


</body>

</html>
