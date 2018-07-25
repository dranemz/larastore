<ul>
@foreach($products as $product)
    <h2>{{ $product->description }} <small>by {{ $product->category()->first()->name }}</small></h2>
@endforeach
</ul>
