@extends('admin.layout.layout')

@section('content')
    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto p-4 md:p-6">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6">
            <div class="bg-white rounded-xl shadow-sm p-4 md:p-5 border-l-4 border-green-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-500">Total Product</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-800">৳ 48,750</p>
                    </div>
                    <div class="bg-green-100 p-2 md:p-3 rounded-full">
                        <i class="fas fa-pills text-green-600"></i>
                    </div>
                </div>
                <p class="text-xs text-green-600 mt-2"><i class="fas fa-arrow-up mr-1"></i> 18.3% from last month</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-4 md:p-5 border-l-4 border-blue-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-500">Total Articles</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-800">1,245</p>
                    </div>
                    <div class="bg-blue-100 p-2 md:p-3 rounded-full">
                        <i class="fas fa-prescription text-blue-600"></i>
                    </div>
                </div>
                <p class="text-xs text-blue-600 mt-2"><i class="fas fa-arrow-up mr-1"></i> 9.7% from last month</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-4 md:p-5 border-l-4 border-purple-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-500">Contact List</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-800">28</p>
                    </div>
                    <div class="bg-purple-100 p-2 md:p-3 rounded-full">
                        <i class="fas fa-hospital-user text-purple-600"></i>
                    </div>
                </div>
                <p class="text-xs text-purple-600 mt-2"><i class="fas fa-arrow-up mr-1"></i> 3 new this month</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-4 md:p-5 border-l-4 border-orange-500">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-sm text-gray-500">Demo</p>
                        <p class="text-xl md:text-2xl font-bold text-gray-800">34</p>
                    </div>
                    <div class="bg-orange-100 p-2 md:p-3 rounded-full">
                        <i class="fas fa-clock text-orange-600"></i>
                    </div>
                </div>
                <p class="text-xs text-orange-600 mt-2"><i class="fas fa-alert-circle mr-1"></i> Requires attention</p>
            </div>
        </div>


    </main>
@endsection
     
   