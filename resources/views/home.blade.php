@extends('layout.app')
@section('content')
    <section class="main-hero w-full h-[87vh] bg-cover px-30 flex flex-col items-start justify-center"
        style="background-image: url('../images/main_banner.png')">
        <h4 class="text-5xl font-medium mb-2">Trade-In-Offer</h4>
        <h2 class="text-6xl font-bold">Super Value Deals</h2>
        <h1 class="text-6xl font-bold mb-2 text-login">On All Products</h1>
        <p>Save more with cuppons & up to 70% off!</p>
        <form action="shop.php">
            <button
                class="border-0 text-md cursor-pointer bg-transparent text-login py-3 pl-19 pr-17 my-3 font-bold hover:text-white"
                style="background-image: url('../images/button.png')">Shop now</button>
        </form>
    </section>
    <section class="features container mx-auto shadow-md my-5 rounded-md p-5">
        <h2 id="section-p" class="text-center font-medium text-4xl py-5">Categories</h2>
        <div class="index-feature grid grid-cols-6 gap-2 items-center justify-center my-5">
            <a href="search.php?search=nendroid">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/nendroid.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-login text-btn2 font-medium">Nendroid</h6>
                </div>
            </a>
            <a href="search.php?search=figure mx-2">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/scale_figures.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-login text-btn2 font-medium">Scale Figures</h6>
                </div>
            </a>
            <a href="search.php?search=figma">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/figma.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-login text-btn2 font-medium">Figma</h6>
                </div>
            </a>
            <a href="search.php?search=merchandise">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/merchandise.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-login text-btn2 font-medium">Mercandise</h6>
                </div>
            </a>
            <a href="search.php?search=model kit">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/model_kit.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-login text-btn2 font-medium">Model Kit</h6>
                </div>
            </a>
            <a href="search.php?search=plush">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/plush.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-login text-btn2 font-medium">Plush</h6>
                </div>
            </a>
        </div>
    </section>
    <section class="top-item px-2 mx-auto container shadow-lg py-8 rounded-md">
        <section class="index-product1" id="section-p">
            <div class="product-tittle flex items-center justify-between w-full mx-auto px-5">
                <h2>Top Item </h2>
                <a href="category.php?category=Top" class="text-login">See More -></a>
            </div>
            <div class="products p-5 grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 xl:grid-cols-5 items-center gap-5">
                @for($i = 0; $i < 10; $i++)
                <div class="pro-container">
                    <div class="pro border border-login rounded-lg shadow-lg">
                        <a href="product.php?id=">
                            <img src="images/product/sazabi.png" class="rounded-md xl:h-[35vh] h-[42vh] w-full object-cover object-top" alt="">
                            <div class="des py-2 px-3">
                                <span class="text-brand text-lg">Bandai</span>
                                <h5 class="text-product-name text-lg text-clip overflow-hidden">RG 1/144 MSN-04 Sazabi</h5>
                                <h4 class="my-2 font-medium text-xl">Rp.170.000</h4>
                                <div class="product-info flex items-center justify-between">
                                    <div class="star flex items-center my-2">
                                        <i class="fas fa-star text-lg text-star"></i>
                                        <p class="mx-3 text-md">5</p>
                                    </div>
                                    <p>500+ terjual</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endfor
            </div>
        </section>
    </section>
@endsection
