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
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-btn1 text-btn-text font-medium">Nendroid</h6>
                </div>
            </a>
            <a href="search.php?search=figure mx-2">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/scale_figures.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-btn2 text-btn-text font-medium">Scale Figures</h6>
                </div>
            </a>
            <a href="search.php?search=figma">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/figma.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-btn3 text-btn-text font-medium">Figma</h6>
                </div>
            </a>
            <a href="search.php?search=merchandise">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/merchandise.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-btn4 text-btn2 font-medium">Mercandise</h6>
                </div>
            </a>
            <a href="search.php?search=model kit">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/model_kit.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-btn5 text-btn-text font-medium">Model Kit</h6>
                </div>
            </a>
            <a href="search.php?search=plush">
                <div class="fe-box text-center p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg p-3 rounded-xl border border-login shadow-lg">
                    <img class="rounded-lg h-[30vh] w-full" src="{{ asset('images/features/plush.png') }}" alt="">
                    <h6 class="my-2 py-2 px-1 rounded-lg bg-btn6 text-btn-text font-medium">Plush</h6>
                </div>
            </a>
        </div>
    </section>
    {{-- <div class="container flex flex-wrap mx-4 my-auto w-full items-center justify-evenly">
        @for ($i = 0; $i < 6; $i++)
        <div class="card flex flex-col items-center px-8 py-10 m-3 bg-hijau rounded-xl shadow-lg">
            <img src="{{ asset('images/kesava.png') }}" alt="" class="w-50 h-40 rounded-lg">
            <p class="font-medium text-3xl m-3 text-putih">Wow</p>
            <a href="" class="text-white px-8 py-4 rounded-lg bg-ijau">Button</a>
        </div>
        @endfor
    </div> --}}
@endsection
