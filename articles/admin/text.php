<?php
require_once('../connect.php');

var_dump($_GET);

$sql1 = "SELECT id,nom FROM categorie";
$res = mysqli_query($conn, $sql1);


    $id = (int)htmlspecialchars(addslashes($_GET['id']));
    $sql="SELECT * FROM article a 
    INNER JOIN  categorie c 
    ON a.id_categorie= c.id
    where id_art=".$id;

    $result = mysqli_query($conn, $sql);
    $line = mysqli_fetch_assoc($result);
        
        
    



// $error="";
if(isset($_POST['soumis'])){

    // if(isset($_POST['titre']) && isset($_POST['auteur']) && isset($_POST['date_created']) ){
    
        $id = trim(htmlspecialchars(addslashes($_POST['id_art'])));
        $titre = trim(htmlspecialchars(addslashes($_POST['titre'])));
        $auteur = trim(htmlspecialchars(addslashes($_POST['auteur'])));
        $description = trim(htmlspecialchars(addslashes($_POST['description'])));
        $date_created = trim(htmlspecialchars(addslashes($_POST['date_created'])));
        $id_categorie = trim(htmlspecialchars(addslashes($_POST['categorie'])));

      

        $image= $_FILES['image']['name'];
        // $destination= "../assets/images/";

        // move_uploaded_file($_FILES['image']['tmp_name'],$destination.$image);

        $sql = "UPDATE article 
        SET titre='$titre',
        auteur='$auteur',
        description='$description',
        id_categorie='$id_categorie',
        date_created = '$date_created', 
        image='$image'
        WHERE id_art=".$id;

        $resultat = mysqli_query($conn,$sql);

        var_dump($resultat);
    // }


}


require_once('../partials/header.inc'); 

?>


<!-- <div>
<div class="offset-2 col-8 p-5">
<h1 class="bg-dark text-center text-white">EDITION</h1>
<h2>Formulaire d'ajout</h2>
    <?php //$error; ?>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <div class="row">
        <div class="col-6">

            <input type="hidden" value="<?php echo $line['id_art'] ?>"name="id_art" id="id_art">

            <label for="titre">Titre</label>
            <input type="text" class="form-control " value="<?php echo $line['titre']  ?>" id="titre" name="titre" placeholder="Entrez votre titre svp" >
        </div>
        <div class="col-6">
            <label for="auteur">auteur*</label>
            <input type="text" class="form-control" id="auteur" value="<?php echo $line['auteur']  ?>" name="auteur" placeholder="Entrez votre auteur svp" >
        </div>
    </div>

    <div class="row">
    <div class="col">
        <label for="date">Date</label>
        <input type="text" class="form-control" id="date_created" value="<?php echo $line['date_created']  ?>" name="date_created">
    </div>
    <div class="col">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="col">
        <label for="categorie">Categorie</label>
        <select class="form-select" id="categorie" name="categorie" >
        <option >Choisir</option>

        <?php while($rows = mysqli_fetch_assoc($res)){ ?>

            <option value="<?php echo  $rows['id']; ?>"><?php echo $rows['nom']; ?></option>
            
        <?php } ?>

        </select>
    </div>
    </div>
    <div class="row">
    <div class="col mb-2">
        <label for="article">Article</label>
        <textarea  class="form-control" id="description" name="description"  rows="5" placeholder="Entrez l'article' svp"><?php echo $line['description']  ?></textarea>
    </div>

    </div>
    <button type="submit" class="btn btn-success col-12" name="soumis" >Soumettre</button>
    </form>
</div>
</div>


 -->

<?php 

//  }


require_once('../partials/footer.inc');?>
