@extends('layouts.app')

@section('title', 'Categories')

@section('content')

    {{-- Page Header --}}
    <div class="mb-6 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">
                Categories
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Organize products into different categories.
            </p>
        </div>

        <button
            type="button"
            class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-blue-700"
        >
            Add Category
        </button>
    </div>

    {{-- Categories --}}
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

        <article class="rounded-lg border border-slate-200 p-5">
            <div class="mb-4 flex items-center justify-between">
                <div class="text-3xl">
                    💻
                </div>

                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                    12 Products
                </span>
            </div>

            <h3 class="text-lg font-bold text-slate-800">
                Electronics
            </h3>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Computers, keyboards, monitors, and other electronic devices.
            </p>

            <button class="mt-4 text-sm font-medium text-blue-600 hover:underline">
                View Products
            </button>
        </article>

        <article class="rounded-lg border border-slate-200 p-5">
            <div class="mb-4 flex items-center justify-between">
                <div class="text-3xl">
                    🖱️
                </div>

                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                    18 Products
                </span>
            </div>

            <h3 class="text-lg font-bold text-slate-800">
                Accessories
            </h3>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Mouse devices, flash drives, cables, and other accessories.
            </p>

            <button class="mt-4 text-sm font-medium text-blue-600 hover:underline">
                View Products
            </button>
        </article>

        <article class="rounded-lg border border-slate-200 p-5">
            <div class="mb-4 flex items-center justify-between">
                <div class="text-3xl">
                    📚
                </div>

                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                    24 Products
                </span>
            </div>

            <h3 class="text-lg font-bold text-slate-800">
                Office Supplies
            </h3>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Paper, notebooks, pens, folders, and office materials.
            </p>

            <button class="mt-4 text-sm font-medium text-blue-600 hover:underline">
                View Products
            </button>
        </article>

        <article class="rounded-lg border border-slate-200 p-5">
            <div class="mb-4 flex items-center justify-between">
                <div class="text-3xl">
                    🪑
                </div>

                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                    8 Products
                </span>
            </div>

            <h3 class="text-lg font-bold text-slate-800">
                Furniture
            </h3>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Office chairs, desks, shelves, and storage furniture.
            </p>

            <button class="mt-4 text-sm font-medium text-blue-600 hover:underline">
                View Products
            </button>
        </article>

        <article class="rounded-lg border border-slate-200 p-5">
            <div class="mb-4 flex items-center justify-between">
                <div class="text-3xl">
                    🌐
                </div>

                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                    10 Products
                </span>
            </div>

            <h3 class="text-lg font-bold text-slate-800">
                Networking
            </h3>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Routers, switches, network cables, and related equipment.
            </p>

            <button class="mt-4 text-sm font-medium text-blue-600 hover:underline">
                View Products
            </button>
        </article>

        <article class="rounded-lg border border-slate-200 p-5">
            <div class="mb-4 flex items-center justify-between">
                <div class="text-3xl">
                    📦
                </div>

                <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-700">
                    5 Products
                </span>
            </div>

            <h3 class="text-lg font-bold text-slate-800">
                Other Products
            </h3>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Products that do not belong to the existing categories.
            </p>

            <button class="mt-4 text-sm font-medium text-blue-600 hover:underline">
                View Products
            </button>
        </article>

    </div>

@endsection