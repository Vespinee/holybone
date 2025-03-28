@extends('layouts.app')

@section('content')
<div class="min-h-screen relative" style="background-image: url('/images/background-mc.png');">
    
    <!-- Wrapper -->
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-md">
        <div class="bg-white shadow-2xl rounded-xl p-8">
            <h2 class="text-3xl font-bold text-center mb-6 text-sky-700">Login</h2>

            <form action="#">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm mb-2">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-sky-500 focus:outline-none">
                </div>

                <button type="submit" 
                    class="w-full bg-sky-500 text-white py-2 rounded-lg font-semibold hover:bg-sky-600 transition duration-300">
                    Login
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
