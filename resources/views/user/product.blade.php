
         @foreach ($data as $product)
         <div class="col-md-4">
       <div class="product-item">
         <a href="#"><img src="/productimage/{{$product->image}}" height="200" width="200" alt=""></a>
         <div class="down-content">
           <a href=" {{url('productdetails', $product->id)}} "><h4> {{$product->title}} </h4></a>
           <h6>${{$product->price}}</h6>
           <p>{{$product->description}}</p>
           <ul class="stars">
             <li><i class="fa fa-star"></i></li>
             <li><i class="fa fa-star"></i></li>
             <li><i class="fa fa-star"></i></li>
             <li><i class="fa fa-star"></i></li>
             <li><i class="fa fa-star"></i></li>
           </ul>

           <form action=" {{url('addcart', $product->id )}}  " method="POST">
             @csrf

             <input type="number" value="1" min="1" style="width: 100px;" name="quantity" class="form-control">
            <br>
             <input class="btn btn-outline-primary" type="submit" value="Add Cart" >
           </form>
         </div>
       </div>
     </div>
      @endforeach