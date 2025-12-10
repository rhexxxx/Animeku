<section id="header" class="z-50 flex items-center justify-between w-full py-5 px-10 shadow-md sticky">
    <a href=""><img src="{{ asset('images/logo.png') }}" class="logo" alt=""></a>
    <div class="search flex">
        <div class="input  rounded-full border-1 border-black border-solid">
            <form action="" method="get" class="flex items-center">
                    <input class="py-2 px-3 w-lg" type="text" name="search" id="src" placeholder="search" autocomplete="off">
                    <button type="submit" name="kirim" dir="ltr" class="btn py-2 px-3"><i class="fa-solid fa-magnifying-glass bg-transparent"></i></button>
            </form>
        </div>
    </div>
    <div class="nav">
        <ul id="navbar" class="flex items-center justify-center text-lg font-semibold">
            <li><a class="active mx-2" href="/">Home</a></li>
            <li><a class="mx-2" href="/shop">Shop</a></li>
            <li><a class="mx-2" href="/about">About</a></li>
            <li><a class="mx-2 text-lg" href="/cart" id="lg-bag" class="bag"><i class="fa-solid fa-bag-shopping"></i></a></li>
            {{-- <a href="" id="close"><i class="fa-solid fa-x"></i></a> --}}
        </ul>
    </div>
    {{-- <div class="mobile">
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div> --}}
</section>