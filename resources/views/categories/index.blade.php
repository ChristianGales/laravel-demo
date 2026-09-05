@extends('layouts.app')

@section('title', 'Categories')

@section('content')

    <div x-data="{ showDeleteModal: false, categoryToDelete: null }">

        {{-- Page Header --}}
        <div class="mb-6 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
            <div>
                <h2 class="text-2xl font-bold text-slate-800">Categories</h2>

                <p class="mt-1 text-sm text-slate-500">
                    Organize products into different categories.
                </p>
            </div>

            <a href="{{ route('categories.create') }}"
                class="rounded-lg bg-blue-600 px-4 py-2 text-center text-sm font-medium text-white transition hover:bg-blue-700">
                Add Category
            </a>
        </div>

        {{-- Categories --}}
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

            <div class="rounded-lg border border-slate-200 p-5">
                <div class="mb-4 flex items-center justify-between">
                    <div class="text-3xl">
                        <i class="fa-solid fa-laptop text-3xl"></i>
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

                <div class="mt-4 flex items-center justify-between">
                    <button class="text-sm font-medium text-blue-600 hover:underline">
                        View Products
                    </button>

                    <div class="flex items-center gap-3">
                        <a href="{{ route('categories.edit') }}"
                           class="text-slate-400 transition hover:text-blue-600"
                           title="Edit category">
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        <button
                            type="button"
                            @click="showDeleteModal = true; categoryToDelete = 'Electronics'"
                            class="text-slate-400 transition hover:text-red-600"
                            title="Delete category">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

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

                <h3 class="text-lg font-semibold text-slate-800">Delete Category</h3>
                <p class="mt-2 text-sm text-slate-500">
                    Are you sure you want to delete
                    <span class="font-medium text-slate-700" x-text="categoryToDelete"></span>?
                    Products in this category will not be deleted, but will become uncategorized.
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