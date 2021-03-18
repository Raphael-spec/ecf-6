<?php

require_once 'connect.php';
require_once 'partials/header2.inc';

$sql="SELECT * FROM article a
    INNER JOIN  categorie c 
    ON a.id_categorie = c.id";

$result = mysqli_query($conn,$sql);

// function transDate($date){
//     $dateArray = (explode("-",substr(($date),0,10)));
//     $dateINS = $dateArray[2]."/".$dateArray[1]."/".$dateArray[0];
//     return $dateINS;
// }

function trDate($date){
    $dateArray = (explode("-", substr(($date), 0, 10)));
    $dateIns = $dateArray[2]."/".$dateArray[1]."/".$dateArray[0];
    return $dateIns;
}


?>
<div>
    <div class="container p-5">
        <div class="bg-light text-center p-5 m-5" style="background-image: url('assets/images/nerd.png'); background-repeat: no-repeat ;
    background-size: cover; background-position: top 40% left 5%; height:250px">
           
            
        </div>
        <div class="container  text-center ">
        
            <p class="text-center h1 "><img src="assets/images/cof.png" width="50" alt=""> Billboard<img src="assets/images/cof.png" width="50" alt=""></p>
        </div>
        <div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <?php while($rows = mysqli_fetch_assoc($result)){ 
                  
                   ?>

                <div class="col ">
                    <div class="card border-dark">
                        <img src="assets/images/<?php echo $rows['image'] ?>" class="card-img-top" alt="..." width="300px" height="260px">
                        <div class="card-body">
                            <h3 class="card-title text-center"><?php echo $rows['titre'] ?></h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="overflow-y:scroll; width:100%; height:400px;">
                                    <p class="card-text"><?php echo $rows['description'] ?></p>
                                </li>
                                <li class="list-group-item"><h6 class="card-title">ecrit par : <?php echo $rows['auteur'] ?></h6></li>
                                <li class="list-group-item"><p class="card-text">paru le : <?php echo trDate($rows['date_created']);?></p></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>   

<?php require_once 'partials/footer2.inc';?>





