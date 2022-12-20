<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 50px;

        }
        .font_size
        {
            font-size: 50px;
            padding-bottom: 50px;
        }
        .color
        {
            color: blue;
            padding-bottom: 20px;
        }
        label
        {
            display: inline-block class="div_design";
            width: 200px;
        }
        .div_design
        {
            padding-bottom: 20px;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
       @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="div_center">
            <h1 class="font_size">Add Product</h1>
          <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
          @csrf 

          <div> 
            <label class="div_design">Product Title</label>
            <input class="color" type="text" name="title" placeholder="Write a title" required="">
          </div>

          <div class="div_design"> 
            <label>Product Description :</label>
            <input class="color" type="text" name="description" placeholder="Write a Description" required="">
          </div>

          <div class="div_design"> 
            <label>Product price :</label>
            <input class="color" type="number" min="0" name="price" placeholder="Write price" required="">
          </div>

          <div class="div_design"> 
            <label>Discount price</label>
            <input class="color" type="number" name="dis_price" placeholder="Write a discount">
          </div>

          <div class="div_design"> 
            <label>Product Quantity</label>
            <input class="color" type="number" min="0" name="quantity" placeholder="Write quantity" required="">
          </div>

          <div class="div_design"> 
            <label>Product category :</label>
            <select class="color" required="">
                @foreach($category as $category)
                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                @endforeach
            </select>
            
          </div>

          <div class="div_design"> 
            <label>Product Image :</label>
            <input  type="file" name="image" required="">
          </div>

          <div class="div_design"> 

            <input  type="submit" value="Add Product" class="btn btn-outline-success" >
          </div>
          </div>

          </div>
        </div>
        </form>  
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>