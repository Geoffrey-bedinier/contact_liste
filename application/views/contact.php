

    <header class="bg-white p-3">
        <h1 class="text-center text-uppercase">Liste des contacts</h1>
    </header>

    <div class="container">

        

        <div class="text-right my-3">
            <a href="<?php echo base_url('contact/create'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Créer un utilisateur</a>
        </div>

		<?php foreach($user as $users) { ?>

        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9 my-auto">
                        <strong><?php echo $users->name . ' ' . $users->firstname;?></strong> 
                    </div>
                    <div class="col-md-3 my-auto text-center">
                        <a href="<?php echo base_url('contact/view/'); ?><?php echo $users->id ?>" class="btn btn-primary"><i class="fa fa-search"></i></a>
                        <a href="<?php echo base_url('contact/edit/'); ?><?php echo $users->id ?>" class="btn btn-warning text-white"><i class="fa fa-edit"></i></a>
                        <a href="<?php echo base_url('contact/delete/'); ?><?php echo $users->id ?>" class="btn btn-danger"><i class="fa fa-close"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>

	

