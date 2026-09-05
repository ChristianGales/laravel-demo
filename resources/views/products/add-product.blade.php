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
        <form class="space-y-5">
            <div>
                <label for="name" class="mb-1 block text-sm font-medium text-slate-700">Product Name</label>
                <input
                    type="text"
                    id="name"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500"
                    placeholder="e.g. Wireless Mouse">
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <div>
                    <label for="category" class="mb-1 block text-sm font-medium text-slate-700">Category</label>
                    <select
                        id="category"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500">
                        <option value="">Select category</option>
                        <option value="accessories">Accessories</option>
                        <option value="electronics">Electronics</option>
                        <option value="office-supplies">Office Supplies</option>
                    </select>
                </div>

                <div>
                    <label for="status" class="mb-1 block text-sm font-medium text-slate-700">Status</label>
                    <select
                        id="status"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500">
                        <option value="in_stock">In Stock</option>
                        <option value="low_stock">Low Stock</option>
                        <option value="out_of_stock">Out of Stock</option>
                    </select>
                </div>

                <div class="sm:col-span-2 lg:col-span-1">
                    <label for="price" class="mb-1 block text-sm font-medium text-slate-700">Price (₱)</label>
                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        id="price"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500"
                        placeholder="0.00">
                </div>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                <div>
                    <label for="stock" class="mb-1 block text-sm font-medium text-slate-700">Stock Quantity</label>
                    <input
                        type="number"
                        min="0"
                        id="stock"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500"
                        placeholder="0">
                </div>
            </div>

            <div>
                <label for="description" class="mb-1 block text-sm font-medium text-slate-700">Description</label>
                <textarea
                    id="description"
                    rows="4"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500"
                    placeholder="Optional product description"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-2">
                <a href="{{ route('products.index') }}"
                    class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                    Cancel
                </a>
                <button type="button"
                        class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-blue-700">
                    Save Product
                </button>
            </div>
        </form>
    </div>
@endsection