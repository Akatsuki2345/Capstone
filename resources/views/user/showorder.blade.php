{{--  --}}
           <div class="container">

            <h2 align="center">Your orders</h2>
            
           <div class="row">
               <div class="col-md-6">

                {{-- <h3> Total Amount is : $ </h5> --}}
                    <button class="btn bt-outline-succ"><a href="{{url('/redirect')}}"> Home</a></button>ess

                <table style="align-items: center; " align="center">
                    <tr style="background: grey; text-transform: uppercase; font-weight: bold;">
                        
                        <td style="padding: 25px;">Product</td>
                        <td style="padding: 25px;">Price</td>
                        <td style="padding: 25px;">Quantity</td>
                        
                    </tr>
    
                    @foreach ($order as $orders)
                        
                    <tr align="center">
                        
                        <td style="padding: 20px;">{{$orders->product_name}}</td>
                        <td style="padding: 20px;">{{$orders->price}}</td>
                        <td style="padding: 20px;">{{$orders->quantity}}</td>
                       
                    </tr>
                    @endforeach
                    
                </table>
               </div>
               
           </div>

           </div>