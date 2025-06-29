@extends('layouts.auth')
@section('title', 'Login - Mnc Energy Investmen Employe Attendance')
@section('content')
<div class="min-h-screen flex items-center justify-center" style="background: #DCDCDC;">
    <div class="w-full max-w-2xl mx-auto bg-white/70 rounded-2xl shadow-xl flex flex-col md:flex-row overflow-hidden" style="min-height: 420px;">
        <!-- Left Side -->
        <div class="md:w-1/2 w-full flex flex-col justify-center items-center p-8 md:p-10 relative text-white"
             style="background: linear-gradient(135deg, #143B8E 0%, #19A87A 100%);">
            <div class="absolute inset-0 z-0 pointer-events-none">
                <svg width="100%" height="100%">
                    <circle cx="70" cy="70" r="60" fill="#fff2" />
                    <circle cx="220" cy="320" r="80" fill="#fff1" />
                    <circle cx="280" cy="120" r="30" fill="#fff2" />
                </svg>
            </div>
            <div class="relative z-10 text-center flex flex-col items-center">
                <img src="{{ asset('img/logo.png') }}" alt="Logo MNC Energy Investments" class="w-32 h-16 mb-4 object-contain" />
                <h2 class="text-3xl font-bold mb-2">Selamat Datang</h2>
                <p class="mb-6 text-base md:text-lg">Absensi Karyawan MNC Energy Investments</p>
            </div>
        </div>
        <!-- Right Side (Login Form) -->
        <div class="md:w-1/2 w-full flex flex-col justify-center p-8 md:p-10 bg-white/80">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Masukan Akun Anda</h2>
            <!-- Tampilkan error jika ada -->
            @if ($errors->any())
                <div class="mb-4 text-red-600">
                    <ul class="text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                    <input type="text" name="username" id="username"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#19A87A]"
                        value="{{ old('username') }}" required autofocus>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" id="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#19A87A]"
                        required>
                </div>
                <button type="submit"
                    class="w-full py-2 text-white font-semibold rounded shadow hover:opacity-90 transition"
                    style="background: linear-gradient(to right, #143B8E, #19A87A);">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>
@endsection