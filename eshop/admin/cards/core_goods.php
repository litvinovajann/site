           <?php 
                require_once($_SERVER['DOCUMENT_ROOT'].'/litvinovajann/eshop/system/classes/autoload.php');
                if(isset ($_GET['id'])) {
                    $good = new Good;
                    
                }
           ?>
           <form action="http://localhost/qwerty/eshop/system/controllers/create.php" method="POST">
            <div class="form-group">
                <input type="hidden" class="form-control" id="exampleInputEmail1" name="class_name" value="Good">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ItemTitle</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ItemPrice</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="price">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ItemCode</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="code">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">ItemDescription</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>