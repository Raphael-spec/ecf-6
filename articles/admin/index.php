<?php
require_once '../connect.php';

$error="";

if(isset($_POST['submit'])){


    if(!empty($_POST['login']) && !empty($_POST['pass'])){

        $login = trim(htmlspecialchars( $_POST['login']));
        $pass = md5(trim(htmlspecialchars( $_POST['pass'])));

        $sql ="SELECT * 
               FROM utilisateurs 
               WHERE login='$login' AND pass ='$pass'";
        
        
        $result = mysqli_query($conn,$sql);

        
        if(mysqli_num_rows($result) > 0){

            $data = mysqli_fetch_assoc($result);
            session_start();
             
            $_SESSION['auth']=$data;
            
             header('location:list.php');
        
            }else{

                $error = '<div class="alert alert-danger text-center">Le login et/ou le mot de passe ne corespondent pas</div>';
            }
    }else{
        
        $error = '<div class="alert alert-danger text-center">Le login et le mot de passe sont requis</div>';
    }
}
  require_once '../partials/header.inc'; ?>



    <div class="container " >
        <div style="height:150px"></div>
        <div class="card col-4 offset-4 mt-5 " >
            <?php echo $error; ?>
            <div class=" card-header text-center ">
                <h3>Formulaire de Connexion</h3>
            </div>
            <div class="card-body ">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    
                    <div class="mb-3">
                        <label for="login" class="form-label">Login*</label>
                            <input type="text" class="form-control" name="login" id="login" placeholder="entrer votre login" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="pass" class="form-label">Mot de passe*</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="entrer votre mot de passe" required> 
                    </div>
    
                    <button type="submit" class="btn btn-primary col-4 offset-4" name="submit">CONNECTER</button>
                </form>
            </div>
        </div>
    </div>
    <div style="height:300px"></div>

<?php 


require_once '../partials/footer.inc'; ?>
