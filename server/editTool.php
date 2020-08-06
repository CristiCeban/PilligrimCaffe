<?php

include_once '../client/config/init.php';
$manager = new Product();

?>

<?php

if(isset($_GET['idProdus'])) {
    $user = $manager->getUser($_GET['uid']);

    ?>

    <!----------------------------------------USER---------------------------------------->

    <div class="container justify-content-center padding-top">
        <form action="editToDb.php?<?php echo 'uid='.$_GET['uid']; ?>" class="padding-top" method="post">
            <!---------------------1 row---------------->
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <p>Login</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="login" type="text" class="form-control" value="<?php echo $user->login?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Mdp</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="mdp" type="text" class="form-control" value="<?php echo $user->mdp?>">
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <p>Role</p>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="form-group">
                        <input name="role" type="text" class="form-control" value="<?php echo $user->role?>">
                    </div>
                </div>
            </div>
            <!----------Button------------->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="col text-center padding-bottom">
                        <button name="btn_edit_user" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
}
