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
      



      <div class="container-fluid page-body-wrapper" style="background: transparent;">
        <!-- partial:partials/_navbar.html -->
       
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper container ">
            <h1 class="text-center title font-weight-bold text-lg" >Orders</h1>
            
            @if (session()->has('message'))
           
           <div class="alert alert-success" >
            <button type="button" style="padding-right: 10px" class="close" data-dismess="alert"> X </button>

            {{session()->get('message')}}

           </div>
            @endif
           

            <table style="align-items: center; " align="center">
                <tr style="background: grey; text-transform: uppercase; font-weight: bold;">
                    <td style="padding: 25px;">Customer Name</td>
                    <td style="padding: 25px;">Phone</td>
                    <td style="padding: 25px;">Address</td>
                    <td style="padding: 25px;">Product</td>
                    <td style="padding: 25px;">Price</td>
                    <td style="padding: 25px;">Quantity</td>
                    <td style="padding: 25px;">Status</td>
                    <td style="padding: 25px;">
                    Deliver
                    </td>
                </tr>

                @foreach ($order as $orders)
                    
                <tr align="center">
                    <td style="padding: 20px;"> {{$orders->name}} </td>
                    <td style="padding: 20px;">{{$orders->phone}}</td>
                    <td style="padding: 20px;">{{$orders->address}}</td>
                    <td style="padding: 20px;">{{$orders->product_name}}</td>
                    <td style="padding: 20px;">{{$orders->price}}</td>
                    <td style="padding: 20px;">{{$orders->quantity}}</td>
                    <td style="padding: 20px;">{{$orders->status}}</td>
                    <td style="padding: 20px;">
                    <a href=" {{url('updatestatus', $orders->id)}} " class="btn btn-outline-success">Deliver</a>
                    </td>
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