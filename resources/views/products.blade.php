@extends('layouts.frontend')
@section('content')
    <style>
        .product-wish{
            position: absolute;
            top:27%;
            z-index:99;
            padding-left: 300px;
            padding-top: 0;
        }
        .product-wish .fa{
            color: #cbcbcb;
                ont-size:32px;
        }
        .product-wish .fa:hover{
            color: #ff7007;
        }
    </style>

    <div class="container px-6 mx-auto">
        <h3 class="text-2xl font-medium text-gray-700">Product List</h3>
        
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @if ($products->count() > 0)
        
    @foreach ($products as $product)
    
        <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
            <!-- <div class="product-wish">
                    <a href="#" class="fa fa-heart"></a>
                </div> -->
            <img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">
            <div class="flex items-end justify-end w-full bg-cover">
            
                
            </div>
            </style>
            <div class="px-5 py-3"> 
                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                <span class="mt-2 text-gray-500">${{ $product->price }}</span>
                <form class="mt-2 text-gray-500" action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->name }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->image }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
                    <div class="product-wish">
                    <a href="#" class="fa fa-heart"></a>
                 </div>
                    
                </form>
                <!-- <form class="mt-2 text-gray-500" action="{{ route('wish.list') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->name }}" name="name">
                    <input type="hidden" value="{{ $product->price }}" name="price">
                    <input type="hidden" value="{{ $product->image }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Wish</button>                    
                    </form>
                 -->
            </div>
            
        </div>
    @endforeach
@else
    <p>No products found.</p>
@endif

        </div>
    </div>
@endsection
