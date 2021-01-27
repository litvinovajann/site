                <thead>
                    <tr>
                    <th>#id</th>
                    <th>title</th>
                    <th>icon</th>
                    <th>description</th>
                    <th>cover_phoho</th>
                    <th>background</th>
                    <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                                    require_once($_SERVER['DOCUMENT_ROOT'].'/litvinovajann/eshop/system/classes/autoload.php');
                                    //    $goods = new Good();
                                    $results = Section::getAllLines();
                            ?>
                                            <?php while ($line = mysqli_fetch_assoc($results)) 
                                    { ?>
                    <tr>
                    <td><?=$line['id']?></td>
                    <td><?=$line['title']?></td>
                    <td><?=$line['icon']?></td>
                    <td><?=$line['description']?></td>
                    <td><?=$line['cover_photo']?></td>
                    <td><?=$line['background']?></td>
                    <td><a href="http://litvinovajann/qwerty/eshop/system/controllers/delete.php?id=<?=$line['id']?>&class_name=Section">X</a></td>
                    </tr>
                                    <?php } ?>
                </tbody>