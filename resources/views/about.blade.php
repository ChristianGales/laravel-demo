@extends('layouts.app')

@section('title', 'About')

@section('content')

    {{-- About Introduction --}}
    <section class="mx-auto max-w-3xl text-center">
        <h2 class="text-3xl font-bold text-slate-800">
            About the CRUD Application
        </h2>

        <p class="mt-4 leading-7 text-slate-600">
            This is a simple product management system created using
            Laravel, Blade, and Tailwind CSS. It demonstrates how routes,
            layouts, views, and reusable Blade sections work together.
        </p>
    </section>

    {{-- Features --}}
    <section class="mt-10">
        <h3 class="mb-5 text-center text-xl font-bold text-slate-800">
            Application Features
        </h3>

        <div class="grid gap-4 md:grid-cols-3">

            <article class="rounded-lg border border-slate-200 p-5 text-center">
                <div class="mb-3 text-3xl">
                    📦
                </div>

                <h4 class="font-bold text-slate-800">
                    Manage Products
                </h4>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Add, view, edit, and delete product records.
                </p>
            </article>

            <article class="rounded-lg border border-slate-200 p-5 text-center">
                <div class="mb-3 text-3xl">
                    🗂️
                </div>

                <h4 class="font-bold text-slate-800">
                    Manage Categories
                </h4>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Organize products into their appropriate categories.
                </p>
            </article>

            <article class="rounded-lg border border-slate-200 p-5 text-center">
                <div class="mb-3 text-3xl">
                    📊
                </div>

                <h4 class="font-bold text-slate-800">
                    Monitor Inventory
                </h4>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    View product prices, quantities, and stock status.
                </p>
            </article>

        </div>
    </section>

    {{-- Technologies --}}
    <section class="mt-10 rounded-lg bg-slate-100 p-6">
        <h3 class="text-xl font-bold text-slate-800">
            Technologies Used
        </h3>

        <ul class="mt-4 grid gap-3 text-slate-600 sm:grid-cols-2">
            <li class="rounded-md bg-white p-3">
                Laravel
            </li>

            <li class="rounded-md bg-white p-3">
                PHP
            </li>

            <li class="rounded-md bg-white p-3">
                Blade Templates
            </li>

            <li class="rounded-md bg-white p-3">
                Tailwind CSS
            </li>
        </ul>
    </section>

@endsection