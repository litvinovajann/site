<?php
       require ('components/header/index.php');
       require_once ($_SERVER['DOCUMENT_ROOT'].'/litvinovajann/eshop/system/classes/autoload.php');
       ?>

<?php
  $results = Section::getAllLines();
   ?>

<div class="wrapper">
   <div class="newIn">
      <h1>Новые поступления весны</h1>
      <p>Мы подготовили для Вас лучшее</p>
      <button class="newInButton">Посмотреть новинки</button>
   </div>
   <div class="all-sections"> 
                <?php while ($line = mysqli_fetch_assoc($results)) 
                            
                            { ?>
                              
                                        <div class="one-section">
                                                   
                                                      <a href="catalogue.php?id=<?=$line['id']?>" target="_blank" style="width:100%;">
                                                          <div class="section-pic" style="background-image: url('<?=$line['cover_photo']; ?>');">


                                                                  <div class="section" style="background: <?php  echo $line['background']?>;" >
                                                                            <div class="section-title"> 
                                                                                <?= $line['title'] ?>
                                                                            </div>  
                                                                            <img class="section-icon" src="<?= $line['icon'] ?>" style="width:40px;height:40px; padding:1%"></img>                                                   
                                                                            <div class="section-description">
                                                                                    <?=$line['description'] ?>
                                                                            </div>
                                                                  </div>
                                                      
                                                          </div>
                                                       </a>

                                        </div>
                               </a>

                            <?php } ?>
            
            
    </div>



    <div class="suggest">
      <h2>Будь всегда в курсе выгодных предложений</h2>
      <p>Подписывайся и следи за новинками и выгодными предложениями</p>
    </div>


    <form>
        <div class="form">
          <input type="email" class="form-control form-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="e-mail">
          <button type="submit" class="btn btn-primary form-button">подписаться</button>
        </div>
       
</form>
    

</div>






<?php require ('components/footer/index.php'); ?>
   