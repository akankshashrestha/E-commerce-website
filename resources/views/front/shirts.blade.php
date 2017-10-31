@extends('layout.main')

@section('content')

@section('title','shirts')

        <!-- products listing -->
         <!-- Latest SHirts -->
        <div class="row">
             @forelse($shirts as $shirt)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                                    <img src="url{{('images')}}"/>
                        </a>
                    </div>
                    <a href="{{route('shirt')}}">
                        <h3>
                            cut-out tunic shirt</h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            @empty
                <h3> No shirts </h3>
                @endforelse
        </div>
@endsection
