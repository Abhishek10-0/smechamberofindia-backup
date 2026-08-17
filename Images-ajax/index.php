<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
 <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">  
    <h2 class="text-center">CRUD Operation with Multiple Images in PHP</h2>
    <br/>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct">Add New Product</button>
    <br/><br/>
    <table class="table table-bordered">
    <thead>
      <th>Id</th>
      <th>Title</th>
      <th>Description</th>
      <th>Images</th>
      <th>Action</th>
      </thead>
    <tbody id="result">
    </tbody>
   </table>
  </div>

  
<!--<script type="text/javascript">
  $(document).ready(function(){
    showdata();
    getdata();
   
  });

  function showdata(){
    $.ajax({
      url: 'show-data.php',
      method: 'post',
      success: function(result)
      {
        $("#result").html(result);
      }
    });
  } 
</script> -->


<script type="text/javascript">
  $(document).ready(function(){
    showdata();
    getdata();
   $("#addProductdetail").on("click", function(e){
    e.preventDefault();
    var formData = new FormData($('#uploadimage')[0]);
    $.ajax({
      url: 'insert-data.php',
      method: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data){
        $("#msg").html(data);
        $("form").trigger('reset');
        showdata();
      }
    });
   });
  });

  function showdata(){
    $.ajax({
      url: 'show-data.php',
      method: 'post',
      success: function(result)
      {
        $("#result").html(result);
      }
    });
  }

  
</script>
<!-- Add Product Modal -->
<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="box">
      <form id="uploadimage" enctype="multipart/form-data">
      <div class="form-group">
       <label for="title">Title</label>
       <input type="text" name="title" id="title" placeholder="Enter Title" required class="form-control"/>
      </div>  
       <div class="form-group">
       <label for="description">Description</label>
       <textarea name="description" id="description" placeholder="Enter Description" required class="form-control"></textarea> 
      </div>
      <div class="form-group">
       <label for="image">Select Images</label>
       <input type="file" name="images[]" id="images" class="form-control" multiple/>
      </div>
      <div class="form-group">
       <input type="submit" id="addProductdetail" name="addProduct" value="Submit" class="btn btn-success"/>
      <button type="button" class="btn btn-danger" data-dismiss="modal" id="close_btn">Close</button>
       </div>
       <p class="msg" id="msg"></p>
       </form>
       </div>
       </div>
      </div>
  </div>
</div>

<!--Edit Product Modal -->
<div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="box">
      <form id="editimage" enctype="multipart/form-data">
      <div class="form-group">
       <label for="title">Title</label>
       <input type="text" name="title" id="edit_title" placeholder="Enter Title" required class="form-control"/>
      </div>  
       <div class="form-group">
       <label for="description">Description</label>
       <textarea name="description" id="edit_desc" placeholder="Enter Description" required class="form-control"></textarea> 
      </div>
      <div class="form-group">
      <label for="image">Images</label>
      <div id="edit_image" class="image-gallery"></div>
      </div>
      <div class="form-group">
       <label for="image">Select Images</label>
       <input type="file" name="images[]" id="images" class="form-control" multiple/>
      </div>
      <div class="form-group">
      <input type="hidden" name="productId" id="productId">
       <input type="submit" id="updateProduct" name="updateProduct" value="Update" class="btn btn-success" />
      <button type="button" class="btn btn-danger" data-dismiss="modal" id="close_btn">Close</button>
       </div>
       <p class="editmsg" id="editmsg"></p>
       </form>
       </div>
       </div>
      </div>
  </div>
</div>
</body>
</html>