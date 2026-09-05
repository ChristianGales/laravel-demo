@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Add Category</h2>
        <p class="mt-1 text-sm text-slate-500">
            Create a new category to group your products.
        </p>
    </div>

    <div class="w-full rounded-lg border border-slate-200 bg-white p-6">
        <form class="space-y-5">
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                <div>
                    <label for="name" class="mb-1 block text-sm font-medium text-slate-700">Category Name</label>
                    <input
                        type="text"
                        id="name"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500"
                        placeholder="e.g. Electronics">
                </div>

                <div>
                    <label for="icon" class="mb-1 block text-sm font-medium text-slate-700">Icon</label>
                    <select
                        id="icon"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500">
                        <option value="fa-laptop">Laptop</option>
                        <option value="fa-box">Box</option>
                        <option value="fa-shirt">Apparel</option>
                        <option value="fa-utensils">Food &amp; Beverage</option>
                        <option value="fa-pen">Office Supplies</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="description" class="mb-1 block text-sm font-medium text-slate-700">Description</label>
                <textarea
                    id="description"
                    rows="4"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2 outline-none focus:border-blue-500"
                    placeholder="Briefly describe this category"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-2">
                <a href="{{ url('/categories') }}"
                   class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-50">
                    Cancel
                </a>
                <button type="button"
                        class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-blue-700">
                    Save Category
                </button>
            </div>
        </form>
    </div>
@endsection