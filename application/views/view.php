    <header class="bg-white p-3">
        <h1 class="text-center text-uppercase">Liste des contacts</h1>
    </header>

    <div class="container">

        <div class="text-right my-3">
            <a href="<?php echo base_url(); ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Retourner à
                l'accueil</a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">

                        <h4 class="border-bottom p-2">Informations personnelles</h4>
                        <ul class="list-unstyled">
                            <li><strong>Prénom :</strong> <?php echo $users->firstname ?></li>
                            <li><strong>Nom de famille :</strong> <?php echo $users->name ?></li>
                            <li><strong>Téléphone :</strong> <?php echo $users->tel ?></li>
                            <li><strong>Email :</strong> <a href="mailto:<?php echo $users->mail ?>"><?php echo $users->mail ?></a></li>
                        </ul>

                        <h4 class="border-bottom p-2">Biographie</h4>
                        <p><?php echo $users->biography ?></p>

                    </div>
                </div>
            </div>
        </div>

    </div>