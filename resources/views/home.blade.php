@extends('layout.app')
@section('content')
    <section class="main-hero mt-15 w-full h-[87vh] bg-cover px-30 flex flex-col items-start justify-center"
        style="background-image: url('../images/main_banner.png')">
        <h4 class="text-5xl font-medium mb-2">Trade-In-Offer</h4>
        <h2 class="text-6xl font-bold">Super Value Deals</h2>
        <h1 class="text-6xl font-bold mb-2 text-login">On All Products</h1>
        <p>Save more with cuppons & up to 70% off!</p>
        <form action="{{ route('products') }}">
            <button
                class="border-0 text-md cursor-pointer bg-transparent text-login py-3 pl-19 pr-17 my-3 font-bold hover:text-white"
                style="background-image: url('../images/button.png')">Shop now</button>
        </form>
    </section>
    <section class="features container mx-auto shadow-md my-5 rounded-md p-5">
        <h2 id="section-p" class="text-center font-medium text-4xl py-5">Categories</h2>
        <div class="index-feature grid grid-cols-6 gap-2 items-center justify-center my-5">
            @forelse ($categories as $category)
                <a href="{{ route('products', ['search' => $category->name]) }}">
                    <div
                        class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                        <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/' . $category->image) }}"
                            alt="">
                        <h6 class="my-2 py-2 px-1 rounded-lg bg-login text-white font-medium">{{ $category->name }}</h6>
                    </div>
                </a>
            @empty
                Categories Not Found
            @endforelse
            
        </div>
    </section>
    <section class="top-item px-2 mx-auto container shadow-lg py-8 rounded-md">
        <section class="index-product1" id="section-p">
            <div class="product-tittle flex items-center justify-between w-full mx-auto px-5">
                <h2 class="font-medium">Top Item </h2>
                <a href="{{ route('products', ['sort' => 'top']) }}" class="text-login underline">See More -></a>
            </div>
            <div class="products p-5 grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 xl:grid-cols-5 items-center gap-5">
                @forelse ($topProducts as $product)
                    <div class="pro-container">
                        <div class="pro border border-login inset-shadow-sm rounded-lg shadow-lg">
                            <a href="{{ route('products.show', $product->id) }}">
                                <img src="{{ asset('images/product/' . $product->image) }}"
                                    class="rounded-md xl:h-[35vh] h-[42vh] w-full object-cover object-top" alt="{{ $product->name }}">
                                <div class="des py-2 px-3">
                                    <span class="text-brand text-lg">{{ $product->brand }}</span>
                                    <h5 class="text-product-name text-md truncate w-full">{{ $product->name }}</h5>
                                    <h4 class="my-2 font-medium text-xl text-login">Rp.{{ number_format($product->price) }}</h4>
                                    <div class="product-info flex items-center justify-between">
                                        <div class="star flex items-center my-2">
                                            <i class="fas fa-star text-lg text-star"></i>
                                            <p class="mx-3 text-md">{{ $product->rating }}</p>
                                        </div>
                                        <p>{{ $product->sold_count }} terjual</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <h3 class=>No Product Found</h3>
                @endforelse
            </div>
        </section>
    </section>
    <section class="index-banner flex flex-col justify-center items-center w-full h-[40vh] bg-login" id="section-m1">
        <h4 class="text-white text-2xl font-medium">Repair Service</h4>
        <h2 class="text-white text-4xl font-medium">Up To <span class="text-star">70% Off</span> - All Anime Figures & Accessories</h2>
        <a href="{{ route('products') }}" class="normal my-5 cursor-pointer bg-star rounded-lg px-3 py-2" id="explore-button">Explore More</a>
    </section>
    <section class="index-product1 px-2 mx-auto container shadow-lg py-8 rounded-md" id="section-p">
        <div class="product-tittle flex justify-between px-5">
            <h2 class="font-medium">Newest Item </h2>
            <a href="{{ route('products', ['sort' => 'latest']) }}" class="text-login underline">See More -></a>
        </div>
        <div class="products p-5 grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 xl:grid-cols-5 items-center gap-5">
            @forelse ($featuredProducts as $product)
                    <div class="pro-container">
                        <div class="pro border border-login inset-shadow-sm rounded-lg shadow-lg">
                            <a href="{{ route('products.show', $product->id) }}">
                                <img src="{{ asset('images/product/' . $product->image) }}"
                                    class="rounded-md xl:h-[35vh] h-[42vh] w-full object-cover object-top" alt="{{ $product->name }}">
                                <div class="des py-2 px-3">
                                    <span class="text-brand text-lg">{{ $product->brand }}</span>
                                    <h5 class="text-product-name text-md truncate w-full">{{ $product->name }}</h5>
                                    <h4 class="my-2 font-medium text-xl text-login">Rp.{{ number_format($product->price) }}</h4>
                                    <div class="product-info flex items-center justify-between">
                                        <div class="star flex items-center my-2">
                                            <i class="fas fa-star text-lg text-star"></i>
                                            <p class="mx-3 text-md">{{ $product->rating }}</p>
                                        </div>
                                        <p>{{ $product->sold_count }} terjual</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <h3 class=>No Product Found</h3>
                @endforelse
        </div>
    </section>
    <section id="newsletter" class=" bg-newsletter flex justify-between flex-wrap items-center mx-auto" style="background-image: url('../images/banner/b14.png')">
        <div class="newstext p-10">
            <h4 class="text-white font-medium text-2xl">Sign Up For newsletter</h4>
            <p class="text-xl font-medium text-apa">Get Email Updates about our latest shop and <span class="text-star">special offers.</span></p>
        </div>
        <div class="newsform flex">
            <input class="p-5 w-full text-xl rounded-md w-full  border border-transparent outline-none" type="text" name="username" placeholder="your username">
            <button class="normal bg-newsletter-btn text-white" name="submit">sign up</button>
        </div>
    </section>
@endsection
