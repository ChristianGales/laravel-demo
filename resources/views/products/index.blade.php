@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="mb-6 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">Products</h2>
            <p class="mt-1 text-sm text-slate-500">
                View and manage the products in your inventory.
            </p>
        </div>

        <button type="button" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-blue-700">
            Add Product
        </button>
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
                            <button class="text-blue-600 hover:underline">Edit</button>
                            <button class="text-red-600 hover:underline">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection