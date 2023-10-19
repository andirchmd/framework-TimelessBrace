@extends('layouts.global')
@section('title')
Dashboard
@endsection

@section('content')

<div class="flex h-screen bg-gray-100">
  <!-- Sidebar/Navbar -->
  <div class="flex w-64 flex-col bg-white shadow-md">
    <!-- Sidebar Admin -->
    <div class="flex h-20 items-center justify-center shadow-md">
      <div class="flex items-center">
        <img class="mr-2 h-10 w-10 rounded-full" src="https://placeholder.co/100" alt="Admin Photo" />
        <span class="text-xl font-bold text-gray-700">Admin</span>
      </div>
    </div>

    <!-- Sidebar content -->
    <div class="flex-1 overflow-y-auto">
      <!-- Navigation items -->
      <a href="#" class="active mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-100">Dashboard</a>
      <a href="{{ Route('admin.customer') }}" class="mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-100">Customer</a>
      <a href="{{ Route('admin.keranjang') }}" class="mt-2 block rounded-lg bg-transparent px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-100">Keranjang</a>
      <!-- TBA -->
    </div>
  </div>

    <!-- Main content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex items-center justify-between border-b-4 border-[#B27423] bg-white p-6">
            <div class="flex items-center">
                <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
            </div>
        </header>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 p-6">
            <!-- Cards for statistics -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                <!-- Card 1 -->
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full">
                        <!-- Replace with your icon or image -->
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="..."></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600">
                            Total Customers
                        </p>
                        <p class="text-lg font-semibold text-gray-700" id="totalCustomers">
                            30
                        </p>
                    </div>
                </div>

                <!-- ... TBA ... -->
            </div>
        </main>
    </div>
</div>
    <script src="{{ mix('js/app.js') }}"></script>
@endsection