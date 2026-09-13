@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Add Product</h2>
        <p class="mt-1 text-sm text-slate-500">
            Fill in the details below to add a new product to your inventory.
        </p>
    </div>

    <div class="w-full rounded-lg border border-slate-200 bg-white p-6">
        <form action="{{ route('products.store') }}" method="POST" class="space-y-5">

            @csrf

            <div>
                <label for="product_name" class="mb-1 block text-sm font-medium text-slate-700">
                    Product Name
                </label>

                <input
                    type="text"
                    id="product_name"
                    name="product_name"
                    value="{{ old('product_name') }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500"
                    placeholder="e.g. Wireless Mouse">

                @error('product_name')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

           <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                {{-- Category --}}
                <div>
                    <label for="product_category"
                        class="mb-1 block text-sm font-medium text-slate-700">
                        Category
                    </label>

                    <select
                        id="product_category"
                        name="product_category"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500">

                        <option value="">Select category</option>

                        <option value="Electronics"
                            {{ old('product_category') == 'Electronics' ? 'selected' : '' }}>
                            Electronics
                        </option>

                        <option value="Clothing"
                            {{ old('product_category') == 'Clothing' ? 'selected' : '' }}>
                            Clothing
                        </option>

                        <option value="Books"
                            {{ old('product_category') == 'Books' ? 'selected' : '' }}>
                            Books
                        </option>

                        <option value="Home & Kitchen"
                            {{ old('product_category') == 'Home & Kitchen' ? 'selected' : '' }}>
                            Home & Kitchen
                        </option>

                    </select>

                    @error('product_category')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Price --}}
                <div>
                    <label for="product_price"
                        class="mb-1 block text-sm font-medium text-slate-700">
                        Price (₱)
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        id="product_price"
                        name="product_price"
                        value="{{ old('product_price') }}"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500"
                        placeholder="0.00">

                    @error('product_price')
                        <p class="mt-1 text-sm text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>

            <div>
                <label for="product_stock" class="mb-1 block text-sm font-medium text-slate-700">
                    Stock Quantity
                </label>

                <input
                    type="number"
                    min="0"
                    id="product_stock"
                    name="product_stock"
                    value="{{ old('product_stock') }}"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500"
                    placeholder="0">

                @error('product_stock')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="product_description" class="mb-1 block text-sm font-medium text-slate-700">
                    Description
                </label>

                <textarea
                    id="product_description"
                    name="product_description"
                    rows="4"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500"
                    placeholder="Optional product description">{{ old('product_description') }}</textarea>

                @error('product_description')
                    <p class="mt-1 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex justify-end gap-3 pt-2">

                <a href="{{ route('products.index') }}"
                    class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-blue-700">
                    Save Product
                </button>

            </div>

        </form>
    </div>
@endsection