<?php
       require ('components/header/index.php'); 
       require_once ($_SERVER['DOCUMENT_ROOT'].'/litvinovajann/eshop/system/classes/autoload.php');
       ?>



  <?php if (isset($_GET['category']) && $_GET['category']==1) { ?>
             <div class="category">   <?php echo "WOMEN"?> </div> 
  <?php } elseif (isset($_GET['category']) && $_GET['category']==2) { ?>
                <div class="category">   <?="MEN" ?> </div> 
  <?php } elseif (isset($_GET['category']) && $_GET['category']==3) { ?>
                  <div class="category">   <?php echo "CHILDREN"?> </div> 
  <?php } else { ?>
                 <div class="category">   <?php echo "NEW IN"?> </div> 
  <?php } ?>
      <div class="category-bottom">
          Все товары
      </div>
   <?php
  //send query and get result
   $results = Good::getAllLines(); ?>

<div class="wrapper">
   <div class="all-goods"> 
                <?php while ($line = mysqli_fetch_assoc($results)) 
                            
                            { ?>
                              
                                        <div class="one-good">
                                                   
                                                      <a href="card.php?id=<?=$line['id']?>&title=<?= $line['title'] ?>" target="_blank">
                                                          <div class="good-pic">
                                                                <img src="<?php echo  $line['picture']; ?>" alt="" title="<?php echo $line['title'] ; ?>" />
                                                          </div>
                                                       </a>
                                                    <div class="good">
                                                        <div class="good-title"> 
                                                            <?= $line['title'] ?>
                                                        </div> 
                                                        <div class="good-price">
                                                                <?=$line['price'] ?>
                                                        </div>
                                                        <div class="good-description">
                                                                <?=$line['description'] ?>
                                                        </div>
                                                    </div>
                                        </div>
                               </a>

                            <?php } ?>
            
            
    </div>
</div>


<?php require ('components/footer/index.php'); ?>
   