<?php
       require ('components/header/index.php');
       require_once ($_SERVER['DOCUMENT_ROOT'].'/litvinovajann/eshop/system/classes/autoload.php');
?>

<?php
$price_goods = 8699;
$price_delivery = 300;
$price_all = $price_delivery + $price_goods;
?>


<div class="category">ВАША КОРЗИНА</div>
<div class="category-bottom">Товары резервируются на ограниченное время</div>
<?php
    //формируем строку айдишников 
    $id_str = trim(implode(',', $_SESSION['cart']),',');  
    $results = mysqli_query(Connect::getConnection(), "select * from core_goods where id IN($id_str)");
    if ($results) {
    ?>
     <div class="wrapper" style="display: flex"> 
     <?php while ($line = mysqli_fetch_assoc($results)) 
                            
                            { ?>
                              
                                        <div style="width:20%; height: 200px; margin:1%">
                                                   
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
                                                        <div> <a style="width:100%; display: block; text-align: center; color:grey" href="http://localhost/litvinovajann/eshop/system/controllers/cart/delete_from_cart.php?id=<?=$line['id']?>">удалить из корзины</a>
                            </div>
                                                    </div>
                                        </div>
                               </a>

                            <?php } }?>
                           




        <form class="form-thick">
        <a style=" display: block; text-align: center; color:grey; "href="http://localhost/litvinovajann/eshop/system/controllers/cart/empty_cart.php">ОЧИСТИТЬ КОРЗИНУ</a>
        <div class="DELIVERY">
                                <div class="delivery-h1">АДРЕС ДОСТАВКИ</div>
                                <div class="delivery-p">Все поля обязательны для заполнения</div>
                                

                                <div class="form-row">
                                <div class="form-group col-md-12">
                                <label for="inputState">Выберите вариант доставки</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Выберите...</option>
                                    <option>Курьером</option>
                                    <option>Забрать в пункте выдачи BoxBerry</option>
                                    <option>Заберу сам</option>
                                </select>
                                </div>
                                </div>

                                <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="inputName">Имя</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputName">Фамилия</label>
                                            <input type="text" class="form-control">
                                        </div>

                                </div>

                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Улица</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="ул.Академика Навашина">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress2">Квартира</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="86">
                                        </div>
                            </div>

                           
                            <div class="form-row">
                
                                <div class="form-group col-md-6">
                                <label for="inputCity">Город</label>
                                <input type="text" class="form-control" id="inputCity"placeholder="Москва">
                                </div>

                                <div class="form-group col-md-6">
                                <label for="inputZip">Индекс</label>
                                <input type="text" class="form-control" id="inputZip"placeholder="86">
                                </div>
                               
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                                </div>

                                <div class="form-group col-md-6">
                                <label for="inputPhine">Телефон</label>
                                <input type="tel"class="form-control" id="inputPhone">
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Я согласен на предоставление данных магазину ESHOP
                                </label>
                                </div>
                            </div>
                            
        </div>


        <div class="PAY">
                                <div class="delivery-h1">ВАРИАНТЫ ОПЛАТЫ</div>

                                            <div class="form-row">
                                            <div class="form-group col-md-12">
                                            <label for="inputState">Выберите способ оплаты</label>
                                            <select id="inputState" class="form-control">
                                                <option selected> Картой на сайте</option>
                                                <option>QUIWI</option>
                                                <option>YandexMoney</option>
                                                <option>PayPal</option>
                                            </select>
                                            </div>
                                            </div>
                            
                                <div class="delivery-p">Все поля обязательны для заполнения</div>
                                <div class="price-all">Стоимость: <?=$price_goods?> </div>
                                <div class="price-all">Доставка:  <?=$price_delivery?> </div>
                                <div class="price-all">Итого:  <?=$price_all?> </div>

        </div>
        <button type="submit" class="btn btn-primary order-button">ЗАКАЗАТЬ</button>
        </form>

<?php require ('components/footer/index.php'); ?>