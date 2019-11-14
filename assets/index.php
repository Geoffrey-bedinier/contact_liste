<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="styles.css" />
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/d815566b00.js" crossorigin="anonymous"></script>

</head>

<body>

    <header class="bg-white p-3">
        <h1 class="text-center text-uppercase">Liste des contacts</h1>
    </header>

    <div class="container">

        <div class="text-right my-3">
            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Créer un utilisateur</button>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="text-center">
                            <img src="img/user.png" class="rounded avatar" alt="...">
                        </div>
                    </div>
                    <div class="col-md-7 my-auto">
                        <strong>NOM Prénom</strong> / <span>Description..</span>
                    </div>
                    <div class="col-md-3 my-auto text-center">
                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        <button type="button" class="btn btn-warning text-white"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-close"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white fixed-bottom p-3">
        Footer
    </footer>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>