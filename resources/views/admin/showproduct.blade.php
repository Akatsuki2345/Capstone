{{--  --}}

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')

   <style type="text/css">
    .title{
        color: #ffffff;
        padding-top: 25px;
        font-size: 25px;
    }
    label{
        display: inline-block;
        width: 200px;
        text-align: center;
    }
    input{
        color: black;
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
                <p class="mb-0 font-weight-medium me-3 buy-now-text Ttext-center">ECOMMERCE LARAVEL APP</p>
                <a href="" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
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
      



      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       
        <!-- partial -->
        <div class="main-panel" style="align-items: center;">
          <div class="content-wrapper container" >

            @if (session()->has('message'))
           
            <div class="alert alert-danger" >
             <button type="button" style="padding-right: 10px" class="close" data-dismess="alert"> X </button>
 
             {{session()->get('message')}}
 
            </div>
             @endif

            <h1 class="text-center title font-weight-bold text-lg" >Show Products</h1>
            
            <br><br>
           <table style="align-items: center;">

            <tr style="background: grey;">
                <td style="padding: 20px;">Id</td>
                <td style="padding: 20px;">Title</td>
                <td style="padding: 20px;">Description</td>
                <td style="padding: 20px;">Quantity</td>
                <td style="padding: 20px;">Price ( in $)</td>
                <td style="padding: 20px;">SKU</td>
                <td style="padding: 20px;">Image</td>
                <td style="padding: 20px;">Update</td>
                <td style="padding: 20px;">Delete</td>
            </tr>

            @foreach ($data as $product)

            <tr style="background: black; align-items: center;">
                <td style="padding: 20px;">{{$product->id}}</td>
                <td style="padding: 20px;">{{$product->title}}</td>
                <td style="padding: 20px;">{{$product->description}}</td>
                <td style="padding: 20px;">{{$product->quantity}}</td>
                <td style="padding: 20px;">{{$product->price}}</td>
                <td style="padding: 20px;">{{$product->sku}}</td>
                <td style="padding: 20px;"><img src="/productimage/{{$product->image}}" height="150" width="150" alt=""></td>
                <td style="padding: 20px;"><a href=" {{url('updateview', $product->id)}} " class="btn btn-primary">Update</a></td>
                <td style="padding: 20px;"><a href="{{url('deleteproduct', $product->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
                
            @endforeach

           
           </table>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>


      <!-- page-body-wrapper ends -->
    </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
   
    @include('admin.script')


  </body>
</html>