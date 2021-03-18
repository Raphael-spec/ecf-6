<?php
require_once '../connect.php';
$error ="";

if(isset($_POST['submit'])){
    if(!empty($_POST['login']) && !empty($_POST['pass']) ){

        $login = trim(htmlspecialchars( $_POST['login']));
        $pass = md5(trim(htmlspecialchars( $_POST['pass'])));

        if(isset($_POST['role'])){
        
            $role = trim(htmlspecialchars( $_POST['role']));
            
            }else{
                
                $role = 2;
        
        }
                $sql = "INSERT INTO utilisateurs (login,pass,role) 
                        VALUES ('$login','$pass','$role')";
                
                $res = mysqli_query($conn,$sql);

        if($res){
            
            header('location:list.php');
        
        }else{
            
            $error="<div class='alert alert-danger text-center'>login ou mot de pass pas valide</div>";

        }

    }
}



require_once '../partials/header.inc';
?>
<div class="container " >
<div style="height:150px"></div>
    <div class="card col-4 offset-4 mt-5" style="margin-bottom:400px" >
    <?php echo $error; ?>
    <div class=" card-header text-center">
    <h3>Formulaire d'inscription</h3>
    </div>
        <div class="card-body">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

                <div class="mb-3">
                    <label for="login" class="form-label">Login*</label>
                        <input type="text" class="form-control" name="login" id="login" placeholder="entrer votre login" required>
                </div>

                <div class="mb-3">
                    <label for="pass" class="form-label">Mot De Passe*</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="entrer votre Mot De Pass" required> 
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" value="1" id="role" name="role">
                    <label class="form-check-label" for="role"  >Administrateur</label>
                </div>

                <button type="submit" class="btn btn-primary col-4 offset-4" name="submit">INSCRIRE</button>
            </form>
        </div>
    </div>
</div>

<?php 


require_once '../partials/footer.inc'; ?>