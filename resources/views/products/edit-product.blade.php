@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Edit Product</h2>
        <p class="mt-1 text-sm text-slate-500">
            Update the details for {{ $product->product_name }}.
        </p>
    </div>

    <div class="w-full rounded-lg border border-slate-200 bg-white p-6">
        <form method="POST" action="{{ route('products.update', $product) }}" class="space-y-5">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="mb-1 block text-sm font-medium text-slate-700">Product Name</label>
                <input
                type="text"
                id="name"
                name="product_name"
                value="{{ old('product_name', $product->product_name) }}"
                class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500">
                @error('product_name')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                <div>
                    @php
                        $currentCategory = old('product_category', $product->product_category);
                    @endphp

                    <label for="category" class="mb-1 block text-sm font-medium text-slate-700">
                        Category
                    </label>

                    <select
                        id="category"
                        name="product_category"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500">

                        <option value="Electronics" @selected($currentCategory === 'Electronics')>
                            Electronics
                        </option>

                        <option value="Clothing" @selected($currentCategory === 'Clothing')>
                            Clothing
                        </option>

                        <option value="Books" @selected($currentCategory === 'Books')>
                            Books
                        </option>

                        <option value="Home & Kitchen" @selected($currentCategory === 'Home & Kitchen')>
                            Home &amp; Kitchen
                        </option>
                    </select>

                    @error('product_category')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label for="price" class="mb-1 block text-sm font-medium text-slate-700">Price (₱)</label>
                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        id="price"
                        name="product_price"
                        value="{{ old('product_price', $product->product_price) }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500">
                        @error('product_price')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                <div>
                    <label for="stock" class="mb-1 block text-sm font-medium text-slate-700">Stock Quantity</label>
                    <input
                        type="number"
                        min="0"
                        id="stock"
                        name="product_stock"
                        value="{{ old('product_stock', $product->product_stock) }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500">
                    @error('product_stock')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="description" class="mb-1 block text-sm font-medium text-slate-700">Description</label>
               <textarea
                    id="description"
                    name="product_description"
                    rows="4"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500">{{ old('product_description', $product->product_description) }}</textarea>
                    @error('product_description')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
            </div>

            <div class="flex justify-end gap-3 pt-2">
                <a href="{{ url('/products') }}"
                   class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                    Cancel
                </a>
                <button type="submit"
                        class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-blue-700">
                    Update Product
                </button>
            </div>
        </form>
    </div>
@endsection