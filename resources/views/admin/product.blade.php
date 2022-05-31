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
        <div class="main-panel">
          <div class="content-wrapper container bg-#191C24">
            <h1 class="text-center title font-weight-bold text-lg" >Add Products</h1>
            
            @if (session()->has('message'))
           
           <div class="alert alert-success" >
            <button type="button" style="padding-right: 10px" class="close" data-dismess="alert"> X </button>

            {{session()->get('message')}}

           </div>
            @endif
            <form action="{{url('uploadproduct')}} " enctype="multipart/form-data" method="post">
                @csrf
                <div class="" style="padding: 15px;">
                    <label for="title">Product title</label>
                    <input style="color: black;" type="text" name="title" placeholder="Product Title" required>
                </div>
                <div class="" style="padding: 15px;">
                    <label for="description">Description</label>
                    <textarea style="color: black;"  name="description" id="textarea" cols="30" rows="10"></textarea>
                    {{-- <input style="color: black;" type="text" name="description" placeholder="description" required> --}}
                </div>
                <div class="" style="padding: 15px;">
                    <label for="quantity">Quantity</label>
                    <input style="color: black;" type="number" name="quantity" placeholder="quantity" required>
                </div>
                <div class="" style="padding: 15px;">
                    <label for="price">Price</label>
                    <input style="color: black;" type="number" name="price" placeholder="price " required>
                </div>
                <div class="" style="padding: 15px;">
                    <label for="sku">SKU</label>
                    <input style="color: black;" type="number" name="sku" placeholder="SKU " required>
                </div>
                <div class="" style="padding: 15px;">
                   
                    <input type="file" name="file" placeholder="image " required>
                </div>
                <br>
                <input  class="btn btn-outline-success" type="submit" value="Submit">
            </form>

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>


      <!-- page-body-wrapper ends -->
    </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
   
    @include('admin.script')

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea', // Replace this CSS selector to match the placeholder element for TinyMCE
        forced_root_block : false,
        statusbar: false
      });
    </script>
   

  </body>
</html>