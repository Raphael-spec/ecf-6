<?php

require_once '../connect.php';
require_once 'security.php';




if(isset($_POST['submit']) && !empty($_POST['search'])){
    
    $motCle = trim(addslashes(htmlentities($_POST['search'])));
    
    $sql = "SELECT * 
            FROM article a
            INNER JOIN  categorie c 
            ON a.id_categorie = c.id
            WHERE titre LIKE '$motCle%' OR auteur LIKE '$motCle%'";

}else{


    $sql = "SELECT * 
            FROM article a
            INNER JOIN  categorie c 
            ON a.id_categorie = c.id";
    
}

    $result = mysqli_query($conn,$sql);

    function trDate($date){
        $dateArray = (explode("-", substr(($date), 0, 10)));
        $dateIns = $dateArray[2]."/".$dateArray[1]."/".$dateArray[0];
        return $dateIns;
    }




 require_once '../partials/header.inc';
 
 
 
 
 ?>


<div class="row">
    <div class="container" style="margin-bottom:400px">
        
        <h1 class="text-center mt-5 mb-4 bg-dark text-white">Liste des Articles</h1>
        
        <p class="text-right">
            <a href="ajouter.php" class="btn btn-success "><i class="fas fa-plus"></i>Ajouter</a>
        </p>
        
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <div class="input-group justify-content-end ">
                <input type="search" name="search" id="search" class="form-control offset-9 col-3 " placeholder="Rechercher">
                <button type="submit" name="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
        
        <table class="container table table-striped mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Image</th>
                    <th>Categorie</th>
                    <th>Article</th>
                    <th>Date de creation</th>
                    <?php  if(isset($_SESSION['auth']) && $_SESSION['auth']['role']==1){ ?>
                        
                        <th colspan=2 class="text-center">Actions</th>
                        <?php  } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php while($rows = mysqli_fetch_assoc($result)){?>

                <tr>
                    <td><?php echo  $rows['id_art'] ?></td>
                    <td><?php echo  $rows['titre'] ?></td>
                    <td><?php echo $rows['auteur'] ?></td>
                    <td><img src="../assets/images/<?php echo  $rows['image']?>" width="170px" height="120px"></td>
                    <td><?php echo ucfirst($rows['nom']) ?></td>
                    <td><?= substr($rows['description'],0,50)  ?>...</td>
                    <td><?php  echo trDate($rows['date_created']) ?></td>

                        <?php  if(isset($_SESSION['auth']) && $_SESSION['auth']['role']==1){ ?>
                   
                    <td><a href="update.php?pencil=<?php echo  $rows['id_art']?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></td>
                    <td>
                        <a href="supprimer.php?trash=<?php echo $rows['id_art']?>" class="btn btn-danger" onclick="return confirm('Etês-vous sûr de vouloir le supprimer')">
                    <i class="fas fa-trash"></i></a>
                    </td>
                    <?php } ?>
                </tr>
            
            
                <?php   }?>

        </tbody>
    </table>


</div>
</div>
<?php require_once '../partials/footer.inc';




?>