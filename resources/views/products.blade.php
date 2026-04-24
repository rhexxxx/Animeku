@extends('layout.app')
@section('content')
    <section class="top-item mt-15 px-2 mx-auto container shadow-lg py-8 rounded-md">
        <div class="mb-8 bg-white p-4 rounded-lg shadow-sm flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-700">
                @if(request('search'))
                    Search Results for "{{ request('search') }}"
                @elseif(request('sort'))
                    Search Results for "{{ request('sort') }}"
                @else
                    All Products
                @endif
            </h2>

            <form action="{{ route('products') }}" method="GET" class="flex items-center gap-2">
                
                @if(request('search'))
                    <input type="hidden" name="search" value="{{ request('search') }}">
                @endif

                <label for="rating" class="text-sm font-medium text-gray-600">Min Rating:</label>
                <select name="rating" id="rating" class="border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm" onchange="this.form.submit()">
                    <option value="">All Ratings</option>
                    <option value="5" {{ request('rating') == '5' ? 'selected' : '' }}>5 Stars</option>
                    <option value="4" {{ request('rating') == '4' ? 'selected' : '' }}>4+ Stars</option>
                    <option value="3" {{ request('rating') == '3' ? 'selected' : '' }}>3+ Stars</option>
                </select>
            </form>
        </div>
        <section class="index-product1" id="section-p">
            <div class="products p-5 grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 xl:grid-cols-5 items-center gap-5">
                @forelse ($products as $product)
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
            <div class="mt-8 mb-12 flex justify-center">
                {{ $products->links() }}
            </div>
        </section>
    </section>
@endsection