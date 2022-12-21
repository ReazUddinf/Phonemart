<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/phonemart-logo.png" type="">
      <title>Phonemart</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
        .center
        {
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 30px;

        }
        table,th,td
        {
            border: 5px solid red;
            
        }
        .th_deg
        {
            font-size: 30px;
            padding: 5px;
            background-color: pink;
        }
        .img_deg
        {
            height: 200px;
            width: 200px;
        }
        .total_deg
        {
            font-size: 30px;
            padding: 40px;
        }






      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
        
         <!-- end slider section -->

      <div class="center">
        <table>
            <tr>
                <th class="th_deg">Product title</th>
                <th class="th_deg">Product Quantity</th>
                <th class="th_deg">price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>


            </tr>
            <?php $totalprice=0; ?>
            @foreach($cart as $cart)
            <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>{{$cart->price}} Taka</td>
                <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
                <td><a class="btn btn-outline-warning" href="{{url('remove_cart',$cart->id)}}">Remove</a></td>
            </tr>
            <?php $totalprice=$totalprice + $cart->price; ?>

            @endforeach


        </table>
        <div>
            <h1 class="total_deg">Total Price: {{$totalprice}} Taka</h1>
        </div>
        <div>
            <h1 style="font-size: 25px; padding-bottom: 15px;">Proceed to order</h1>
            <a href="{{url('cash_order')}}" class="btn btn-outline-danger" >Cash On Delivery</a>


        </div>



      </div>
     
      <!-- footer start -->
      
      <!-- footer end -->
      <div class="cpy_">
         <!-- <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p> -->
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>