@extends('layouts.header_footer')
@section('content')

<div class="container">
<section class="padding-y-150">
  <div class="container">
   <div class="row">
    
     <div class="col-12">
       <div class="table-responsive">
        <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
          
            <th scope="col">Subtotal</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>
 
        @if(session('cart'))

		
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['price'] * $details['quantity'] ?>



          <tr>
            <td class="p-4">
            <span class="d-inline-block width-7rem border p-3 mr-3">
             <img src="{{ $details['photo'] }}" alt="">
            </span>
              <a href="#">{{ $details['name'] }}</a>
            </td>
            <td># {{ $details['price'] }}</td>
            
            <td>#{{$total}}</td>
            <td class="text-center">
              <a href="#" class="remove-from-cart" data-id="{{ $id }}"><i  class="ti-close"></i></a>
            </td>
          </tr>

        

        
            @endforeach

            @elseif(count(session('cart'))<1)

            <span class="alert alert-danger">No item in cart</span>
          
        @endif


        <tr>
      
        <td colspan="3">
          Total: <span class="font-weight-semiBold font-size-18"># {{$total}}</span>
        </td>
        </tr>
        </tbody>
      </table>
      </div>
     </div> <!-- END col-12 -->
     
     <div class="col-md-6 mt-4">
       <a href="#" class="btn btn-outline-light btn-icon"> <i class="ti-angle-double-left mr-2"></i> Back to shopping</a>
     </div> <!-- END col-md-6 -->
     <div class="col-md-6 mt-4 text-right">
     <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="row" style="margin-bottom:40px;">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    Danisot Solutons <br/>
                    Ground Floor, left Wing,
                     Reinsurance Building, Beside Unity Bank, Central Business District, Abuja.
                    ₦ {{$total}}
                </div>
            </p>
            <input type="hidden" name="email" value="Auth::user()->email"> {{-- required --}}
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="{{$total}}"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="3">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

          @if(count(session('cart'))>0)
            <p>
                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                </button>
            </p>
            @endif
        </div>
    </div>
</form>
     </div> <!-- END col-md-6 -->
   </div> <!-- END row-->  
  </div> <!-- END container-->
</section>

</div>

@endsection()