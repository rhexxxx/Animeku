@extends('layout.app')
@section('content')
    <div class="mt-20 p-5 mx-7">
        <div class="button">
            <a href="{{ route('products') }}" class="py-2 px-4 rounded-lg bg-login text-white font-medium">Go Back</a>
        </div>
        <section id="product-page" class="p-7 mt-10 mb-7 flex items-center justify-center bg-product rounded-lg shadow-lg">
            <div class="img w-[50%]">
                <img src="{{ asset('images/product/' . $product->image) }}" class="w-[100%]" alt="">
            </div>
            <div class="product-des mt-3 ml-10 text-xl font-medium">
                <h2> {{ $product->name }} - {{ $product->series }}</h2>
                <p>by {{ $product->brand }}</p>
                <div class="line"></div>
                <h3 class="text-login mb-2">IDR {{ number_format($product->price) }} </h3>
                <div class="counting">
                    <span>Quantity</span>
                    <div class="item-counter">
                        <button id="decrement-btn">-</button>
                        <div id="counter-value">1</div>
                        <button id="increment-btn">+</button>
                    </div>
                </div>
                <div class="product-add">
                    <button class="add-button w-[70%] text-lg text-add-button bg-login border-none px-3 mx-4 rounded-lg">Add to Cart</button>
                </div>
                <div class="product-des-info grid grid-cols-2">
                    <div class="font-semibold text-gray-600">Character</div>
                    <div class="col-span-2">
                        <a href="{{ route('products', ['search' => $product->name]) }}" class="hover:text-blue-600 transition">
                            {{ $product->name }}
                        </a>
                    </div>

                    <div class="font-semibold text-gray-600">Series</div>
                    <div class="col-span-2">
                        <a href="{{ route('products', ['search' => $product->series]) }}" class="hover:text-blue-600 transition">
                            {{ $product->series }}
                        </a>
                    </div>

                    <div class="font-semibold text-gray-600">Category</div>
                    <div class="col-span-2">
                        <a href="{{ route('products', ['search' => $product->category->name ?? '']) }}" class="hover:text-blue-600 transition">
                            {{ $product->category->name ?? 'Uncategorized' }}
                        </a>
                    </div>

                    <div class="font-semibold text-gray-600">Manufacturer</div>
                    <div class="col-span-2">
                        <a href="{{ route('products', ['search' => $product->brand]) }}" class="hover:text-blue-600 transition">
                            {{ $product->brand }}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
@endsection
