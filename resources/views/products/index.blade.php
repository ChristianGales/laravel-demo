@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div x-data="{ showDeleteModal: false, productToDelete: null }">

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
                    <tr class="hover:bg-slate-50">
                        <td class="px-5 py-4 font-medium">Wireless Mouse</td>
                        <td class="px-5 py-4">Accessories</td>
                        <td class="px-5 py-4">₱650.00</td>
                        <td class="px-5 py-4">25</td>
                        <td class="px-5 py-4">
                            <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                In Stock
                            </span>
                        </td>
                        <td class="px-5 py-4">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('products.edit') }}" class="text-blue-600 hover:underline">Edit</a>
                                <button
                                    type="button"
                                    @click="showDeleteModal = true; productToDelete = 'Wireless Mouse'"
                                    class="text-red-600 hover:underline">
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Delete Confirmation Modal --}}
        <div
            x-show="showDeleteModal"
            x-cloak
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 px-4"
            style="display: none;">

            <div
                x-show="showDeleteModal"
                @click.away="showDeleteModal = false"
                x-transition
                class="w-full max-w-sm rounded-lg bg-white p-6 shadow-xl">

                <h3 class="text-lg font-semibold text-slate-800">Delete Product</h3>
                <p class="mt-2 text-sm text-slate-500">
                    Are you sure you want to delete
                    <span class="font-medium text-slate-700" x-text="productToDelete"></span>?
                    This action cannot be undone.
                </p>

                <div class="mt-6 flex justify-end gap-3">
                    <button
                        type="button"
                        @click="showDeleteModal = false"
                        class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                        Cancel
                    </button>
                    <button
                        type="button"
                        @click="showDeleteModal = false"
                        class="rounded-lg bg-red-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-red-700">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection