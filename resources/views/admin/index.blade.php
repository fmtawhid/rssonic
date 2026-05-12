@extends('admin.layout.layout')

@section('content')
    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto p-4 md:p-6">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6">
            <!-- Products Card -->
            <a href="{{ route('admin.products.index') }}" class="bg-white rounded-xl shadow-sm p-4 md:p-5 border-l-4 border-green-500 cursor-pointer hover:shadow-lg hover:scale-105 transition-all duration-300">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-500">Total Products</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-800">{{ $totalProducts }}</p>
                    </div>
                    <div class="bg-green-100 p-2 md:p-3 rounded-full">
                        <i class="fas fa-box text-green-600"></i>
                    </div>
                </div>
                <p class="text-xs text-green-600 mt-2"><i class="fas fa-click mr-1"></i> Click to view all</p>
            </a>

            <!-- Blogs Card -->
            <a href="{{ route('admin.blogs.index') }}" class="bg-white rounded-xl shadow-sm p-4 md:p-5 border-l-4 border-blue-500 cursor-pointer hover:shadow-lg hover:scale-105 transition-all duration-300">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-500">Total Articles</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-800">{{ $totalBlogs }}</p>
                    </div>
                    <div class="bg-blue-100 p-2 md:p-3 rounded-full">
                        <i class="fas fa-newspaper text-blue-600"></i>
                    </div>
                </div>
                <p class="text-xs text-blue-600 mt-2"><i class="fas fa-click mr-1"></i> Click to view all</p>
            </a>

            <!-- Contacts Card -->
            <a href="{{ route('admin.contact.list') }}" class="bg-white rounded-xl shadow-sm p-4 md:p-5 border-l-4 border-purple-500 cursor-pointer hover:shadow-lg hover:scale-105 transition-all duration-300">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-500">Contact List</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-800">{{ $totalContacts }}</p>
                    </div>
                    <div class="bg-purple-100 p-2 md:p-3 rounded-full">
                        <i class="fas fa-envelope text-purple-600"></i>
                    </div>
                </div>
                <p class="text-xs text-purple-600 mt-2"><i class="fas fa-click mr-1"></i> Click to view all</p>
            </a>

    
        </div>


    </main>
@endsection
     
   