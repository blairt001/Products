<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <br />
    <br />
    <div class="container">
    <div class="d-flex justify-content-center align-items-center container "><h2>Enter Product Details</h2></div
      <form method="post" action="{{url('products')}}>
        <div class="row">
          {{csrf_field()}}
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Description:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Price:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="quantity">Quantity:</label>
              <input type="text" class="form-control" name="price">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="category">Category:</label>
            <select class="form-control" name="category" id="select">
              <option value="Men">Men</option>
              <option value="Women">Women</option>
              <option value="Men and Women">Men and Women</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>