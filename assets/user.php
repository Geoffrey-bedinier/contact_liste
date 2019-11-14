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
            <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Retourner à
                l'accueil</button>
        </div>

        <div class="row">
            <div class="col-md-2 text-center">
                <img src="img/user.png" class="rounded user" alt="...">
            </div>
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-body">

                        <h4 class="border-bottom p-2">Informations personnelles</h4>
                        <ul class="list-unstyled">
                            <li><strong>Prénom :</strong> Name</li>
                            <li><strong>Nom de famille :</strong> Firstname</li>
                        </ul>

                        <h4 class="border-bottom p-2">Biographie</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius et voluptatem non pariatur ea
                            optio dolorem sint, labore, enim quis dolore aut earum, sit soluta quam dolores provident
                            reprehenderit porro.</p>

                        <h4 class="border-bottom p-2">Expériences</h4>
                        
                        <span class="badge badge-primary">HTML5</span>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="bg-white p-3 mt-5 fixed-bottom">
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