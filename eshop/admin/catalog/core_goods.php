               <thead>
                    <tr>
                    <th>#id</th>
                    <th>title</th>
                    <th>code</th>
                    <th>price</th>
                    <th>category</th>
                    <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                                    require_once($_SERVER['DOCUMENT_ROOT'].'/litvinovajann/eshop/system/classes/autoload.php');
                                    //    $goods = new Good();
                                    $results = Good::getAllLines();
                            ?>
                                            <?php while ($line = mysqli_fetch_assoc($results)) 
                                    { ?>
                    <tr>
                    <td><a href="?template=card&table=<?=$table?>&class_name=Good&id=<?=$line['id']?>"><?=$line['id']?></a></td>
                    <td><?=$line['title']?></td>
                    <td><?=$line['code']?></td>
                    <td><?=$line['price']?></td>
                    <td><?=$line['category']?></td>
                    <td><a href="http://localhost/litvinovajann/eshop/system/controllers/delete.php?id=<?=$line['id']?>&class_name=Good">X</a></td>
                    </tr>
                                    <?php } ?>
                </tbody>