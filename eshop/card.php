<?php
       require ('components/header/index.php');
       require_once ($_SERVER['DOCUMENT_ROOT'].'/litvinovajann/eshop/system/classes/autoload.php');
       ?>

<?php $good = New Good(); ?>
<div class="wrapper">
   <div class=""> 
                <?php $line = $good->getInfo();
                            
                            ?>
                            
                              
                                        <div class="big-good">
                                                      <div class="grey-back"><a href="card.php?id=<<?= $line['id'] ?>" target="_blank">
                                                          <div class="big-pic">
                                                                <img src="<?=$line['picture']?>" alt="" title="<?php echo $line['title'] ; ?>"  />
                                                          </div>
                                                       </a></div>
                                                    <div class="good" style="padding:4%">
                                                        <div class="good-title big-title"> 
                                                                 <?= $line['title'] ?>
                                                        </div> 
                                                        <div class="good-code big-code"> 
                                                           Aрт. <?= $line['code'] ?>
                                                        </div>
                                                        <div class="good-price big-price">
                                                                <?= $line['price'] ?> руб
                                                        </div>
                                                        <div class="good-description big-description">
                                                                <?= $line['description'] ?>        
                                                        </div>
                                                    </div>

                                                    <div class="sizes">
                                                            <div class="size-p">РАЗМЕРЫ</div>
                                                            <div class="size-flex">
                                                                <div class="size-piece">38</div>
                                                                <div class="size-piece">39</div>
                                                                <div class="size-piece">40</div>
                                                                <div class="size-piece">41</div>
                                                                <div class="size-piece">42</div>
                                                                <div class="size-piece">43</div>
                                                                <div class="size-piece">44</div>
                                                            </div>
                                                            <a href="http://localhost:8080/litvinovajann/eshop/system/controllers/cart/to_cart.php?id=<?= $line['id'] ?>"><div class="add-button">ДОБАВИТЬ В КОРЗИНУ</div></a>
                                                    </div>
                                                    
                                        </div>
    </div>


</div>


<?php require ('components/footer/index.php'); ?>