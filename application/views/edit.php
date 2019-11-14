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
                    
                    <?php echo form_open('contact/edit/'. $users->id); ?>

                    <?php if(validation_errors()):?>
                        <div class='alert alert-danger'><?php echo validation_errors(); ?></div>
                    <?php endif;?>

                        <div class="form-group">
                            <label for="firstname">Prénom </label>
                            <input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $users->firstname ?>" placeholder="Entrer un prénom">
                        </div>

                        <div class="form-group">
                            <label for="name">Nom de famille</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $users->name ?>"
                                placeholder="Entrer un nom de famille">
                        </div>

                        <div class="form-group">
                            <label for="biography">Biographie</label>
                            <textarea class="form-control" name="biography" id="biography" rows="3"><?php echo $users->biography ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="mail">Adresse élétronique</label>
                            <input type="email" class="form-control" id="mail" name="mail" value="<?php echo $users->mail ?>" placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label for="tel">Numéro de téléphone</label>
                            <input type="text" class="form-control" name="tel" id="tel" value="<?php echo $users->tel ?>" placeholder="Entrer un numéro de téléphone">
                        </div>

                        <div class="text-center">
                                <input type="submit" name="submit" class="btn btn-primary" value="Modifier l'utilisateur" />
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>