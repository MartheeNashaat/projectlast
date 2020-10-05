<!doctype html>
    <div class="products text-center">
        @foreach ($products as $product)
            <div class="products">
            @foreach($product->images as $productimage)
            <a href="{{route('product.show',$product->id)}}">
            <img src={{asset("images/$productimage->image")}} width="200" height="200" alt="product"/></a>
            <!-- <a href="#"><img src="{{url('images/'.$productimage->image)}}" alt="product"></a> -->
             @endforeach  
             <a href="{{route('product.show',$product->id)}}"><div class="product-name">{{ $product->name}}</div></a>
            <div class="product-price">{{$product->price}}</div>
            <div class="product-saleprice">{{$product->sale_price}}</div>
            
            </div>
        @endforeach
    </div>