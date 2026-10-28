@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div x-data="{ showDeleteModal: false, productName: '', deleteUrl: '' }">

        <div class="mb-6 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
            <div>
                <h2 class="text-2xl font-bold text-slate-800">Products</h2>
                <p class="mt-1 text-sm text-slate-500">
                    View and manage the products in your inventory.
                </p>
            </div>

            <a href="{{ route('products.create') }}"
                class="rounded-lg bg-blue-600 px-4 py-2 text-center text-sm font-medium text-white transition hover:bg-blue-700">
                Add Product
            </a>
        </div>

        {{-- Search --}}
        <div class="mb-6">
            <input
                type="search"
                placeholder="Search products..."
                class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500 sm:max-w-sm">
        </div>

        {{-- Add Resource --}}
        <!-- Success | Error Message -->
        @if (session('success'))
            <div
                x-data="{ show: true }"
                x-show="show"
                x-transition
                class="mb-6 flex items-center justify-between rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">

                <span class="text-sm font-medium">
                    {{ session('success') }}
                </span>

                <button
                    type="button"
                    @click="show = false"
                    class="ml-4 text-lg font-semibold text-green-700 hover:text-green-900">
                    &times;
                </button>

            </div>
        @endif

        {{-- Fetch Resource --}}
        {{-- Product Table --}}
        <div class="overflow-x-auto rounded-lg border border-slate-200">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-100 text-slate-700">
                    <tr>
                        <th class="px-5 py-3">Product</th>
                        <th class="px-5 py-3">Category</th>
                        <th class="px-5 py-3">Price</th>
                        <th class="px-5 py-3">Stock</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3 text-center">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-200">
                    @forelse ($products as $product)
                        <tr class="hover:bg-slate-50">
                            <td class="px-5 py-4 font-medium">
                                {{ $product->product_name }}
                            </td>

                            <td class="px-5 py-4">
                                {{ $product->product_category }}
                            </td>

                            <td class="px-5 py-4">
                                ₱{{ number_format($product->product_price, 2) }}
                            </td>

                            <td class="px-5 py-4">
                                {{ $product->product_stock }}
                            </td>
                            <td class="px-5 py-4">
                                @if ($product->product_stock == 0)
                                    <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700">
                                        Out of Stock
                                    </span>

                                @elseif ($product->product_stock < 10)
                                    <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-700">
                                        Low Stock
                                    </span>

                                @else
                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                        In Stock
                                    </span>
                                @endif
                            </td>

                            <td class="px-5 py-4">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('products.edit', $product) }}" class="text-blue-600 hover:underline">
                                        Edit
                                    </a>

                                    <button
                                        type="button"
                                        @click="
                                            showDeleteModal = true;
                                            productName = @js($product->product_name);
                                            deleteUrl = @js(route('products.destroy', $product));
                                        "
                                        class="text-red-600 hover:underline">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-5 py-8 text-center text-slate-500">
                                No products found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Delete Confirmation Modal --}}
        
        <div
            x-show="showDeleteModal"
            x-cloak
            @keydown.escape.window="showDeleteModal = false"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/50"
        >
            <div
                @click.outside="showDeleteModal = false"
                class="w-full max-w-md rounded-xl bg-white p-6 shadow-lg"
            >
                <h2 class="text-lg font-semibold text-gray-900">
                    Confirm Deletion
                </h2>

                <p class="mt-2 text-sm text-gray-600">
                    Are you sure you want to delete
                    <strong x-text="productName"></strong>?
                </p>

                <div class="mt-6 flex justify-end gap-3">
                    <button
                        type="button"
                        @click="showDeleteModal = false"
                        class="rounded-lg border border-gray-300 px-4 py-2 text-gray-700 hover:bg-gray-100">
                        Cancel
                    </button>

                    <form :action="deleteUrl" method="POST">
                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="rounded-lg bg-red-600 px-4 py-2 text-white hover:bg-red-700">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>


        
@endsection