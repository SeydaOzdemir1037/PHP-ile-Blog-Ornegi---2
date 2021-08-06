<?php
include "header.php";

// Belirli Veriyi Seçme İşlemi
$hakkimizdasor=$db->prepare("SELECT*FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
    'id' => 0
));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);



?>
  <div class="container">
  	<div class="row mt-12">
      <div class="col-md-12">
      	 <div class="card mb-4">
          <img class="card-img-top" alt="" src="nedmin/production/img/B.png">
          <div class="card-body">
            <h2 class="card-title"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h2>
            <p class="card-text"><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></p>
            <a href="#" class="buton">Devamını Oku <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              <div class="title-bg">
                   <div class="title">Tanıtım Videosu</div>
              </div>

              <iframe width="560" height="315" src="https://youtube.com/embed/<?php echo $hakkimizdacek['hakkimizda_video']; ?>" frameborder="0" allowfullscreen></iframe>

                   <div class="title-bg">
                      <div class="title">MİSYON</div>
                   </div>
                         <blockquote><?php echo $hakkimizdacek['hakkimizda_misyon']; ?></blockquote>

                    <div class="title-bg">
                        <div class="title">VİZYON</div>
                    </div>
                         <blockquote><?php echo $hakkimizdacek['hakkimizda_vizyon']; ?></blockquote>
        </div>
             </div>
         </div>
      </div>
  </div>

<?php
include "footer.php";

?>