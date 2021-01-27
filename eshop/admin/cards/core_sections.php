            <form action="http://localhost/litvinovajann/eshop/system/controllers/create.php"  method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">ItemTitle</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="exampleInputEmail1" name="class_name" value="Section">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Icon</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="icon">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ItemCoverPhoto</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="cover_photo">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">ItemBackground</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="background">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">ItemDescription</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>