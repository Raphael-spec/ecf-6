<?php 

require_once 'security.php';

require_once('../connect.php');

$sql = "SELECT id, nom 
        FROM categorie";

$res = mysqli_query($conn, $sql);
$error = "";

if(isset($_POST['soumis'])){

    if(isset($_POST['titre']) && isset($_POST['auteur']) && strlen($_POST['nom'])<=50 && isset($_POST['date']) ){

        $titre = trim(htmlspecialchars(addslashes($_POST['titre'])));
        $auteur = trim(htmlspecialchars(addslashes($_POST['auteur'])));
        $description = trim(htmlspecialchars(addslashes($_POST['desc'])));
        $date_created = trim(htmlspecialchars(addslashes($_POST['date'])));
        $id_categorie = trim(htmlspecialchars(addslashes($_POST['categorie'])));
        $image= $_FILES['image']['name'];
        
        $destination= "../assets/images/";
        move_uploaded_file($_FILES['image']['tmp_name'],$destination.$image);

        $sql2= "INSERT INTO article(titre,auteur,description,date_created,id_categorie,image)
                VALUES('$titre','$auteur','$description','$date_created','$id_categorie','$image')";


        $result = mysqli_query($conn, $sql2);

        if(mysqli_insert_id($conn) > 0){

            header('location:list.php');

        }else{
            
            $error = '<div class="alert alert-danger">Erreur d\'insertion</div>';
            //var_dump($_POST);
        }
        
    }
}

require_once('../partials/header.inc'); 
?>

<div>
<div style="height:100px"></div>
<div class="offset-2 col-8 p-5">
<h1 class="bg-secondary text-center text-success">Administration</h1>
<h2 class="text-center text-success display-5 mt-4 mb-3">Formulaire d'ajout</h2>
    <?php $error; ?>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="col-6">
            <label for="titre"><strong>Titre*</strong></label>
            <input type="text" class="form-control " id="titre" name="titre" placeholder="Entrez votre titre svp" >
        </div>
        <div class="col-6">
            <label for="auteur"><strong>Auteur*</strong></label>
            <input type="text" class="form-control" id="auteur" name="auteur" placeholder="Entrez votre auteur svp" >
        </div>
    </div>

    <div class="row">
    <div class="col">
        <label for="date"><strong>Date*</strong></label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="col">
        <label for="image"><strong>Image*</strong></label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <div class="col">
        <label for="categorie"><strong>Categorie</strong></label>
        <select class="form-select" id="categorie" name="categorie" >
        <option >Choisir</option>

        <?php while($rows = mysqli_fetch_assoc($res)){ ?>

            <option value="<?php echo  $rows['id']; ?>"><?php echo ucfirst($rows['nom']); ?></option>
            
        <?php } ?>

        </select>
    </div>
    </div>
    <div class="row">
    <div class="col mb-2">
        <label for="article"><strong>Article</strong></label>
        <textarea  class="form-control" id="desc" name="desc" rows="5" placeholder="Entrez votre article svp"></textarea>
    </div>

    </div>
    <button type="submit" class="btn btn-success col-4 offset-4 mt-3" name="soumis" >AJOUTER</button>
    </form>
</div>
</div>
<div style="height:100px"></div>
<?php require_once('../partials/footer.inc');?>
