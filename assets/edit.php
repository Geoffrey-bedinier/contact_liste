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
            <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Retourner à l'accueil</button>
        </div>

        <div class="row">
            <div class="col-md-2 text-center">
                <img src="img/user.png" class="rounded user" alt="...">

                <button type="button" class="btn btn-warning text-white"><i class="fa fa-edit"></i> Modifier la photo</button>

            </div>
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="name">Prénom</label>
                            <input type="text" class="form-control" id="name" placeholder="Entrer un prénom">
                        </div>

                        <div class="form-group">
                            <label for="firstname">Nom de famille</label>
                            <input type="text" class="form-control" id="firstname"
                                placeholder="Entrer un nom de famille">
                        </div>

                        <div class="form-group">
                            <label for="biograph">Biographie</label>
                            <textarea class="form-control" id="biograph" rows="3"></textarea>
                        </div>

                        <div class="text-center">
                                <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter l'utilisateur</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="bg-white p-3 mt-5">
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