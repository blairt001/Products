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
    <div class="d-flex justify-content-center align-items-center container "><h2>Edit the Product</h2></div>
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
      <form method="post" action="{{url('products/edit', '$id')}}">
        {{csrf_field()}}
         <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="description">Description:</label>
            <input type="text" class="form-control" name="description" value="{{$product->description}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="price">Price:</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="quantity">Quantity:</label>
              <input type="text" class="form-control" name="quantity" value="{{$product->quantity}}">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="category">Category:</label>
            <select class="form-control" name="category" id="select" value="{{$product->category}}">
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