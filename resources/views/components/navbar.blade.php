<nav class="w-full bg-white shadow fixed top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center justify-between h-16">
        <!-- Logo & Brand -->
        <div class="flex items-center gap-3">
          <img src="{{ asset('img/logo.png') }}" alt="Logo" class="h-8 w-auto" style="max-width:40px"/>
          <span class="text-2xl font-extrabold text-gray-900 tracking-tight">MNC Energy</span>
        </div>
        <!-- MENU: Desktop -->
        <div class="hidden md:flex flex-1 items-center justify-center">
          <div class="flex gap-10 text-gray-700 font-medium text-lg">
            <a href="#" class="hover:text-blue-600 transition">Products</a>
            <a href="#" class="hover:text-blue-600 transition">Solutions</a>
            <a href="#" class="hover:text-blue-600 transition">Developers</a>
            <a href="#" class="hover:text-blue-600 transition">Partners</a>
            <a href="#" class="hover:text-blue-600 transition">Pricing</a>
          </div>
        </div>
        <!-- Auth Links -->
        <div class="flex items-center gap-4">
          <a href="#" class="text-gray-600 hover:text-blue-600 font-medium transition">Log in</a>
          <a href="#" class="bg-blue-600 text-white font-semibold px-6 py-2 rounded-full shadow hover:bg-blue-700 transition">Sign up</a>
        </div>
        <!-- Hamburger: Mobile -->
        <div class="md:hidden flex items-center">
          <button id="mobile-nav-btn" class="text-gray-600 hover:text-gray-900 focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- Mobile Menu, hidden by default -->
    <div id="mobile-nav-menu" class="md:hidden hidden px-6 pb-4 pt-2 bg-white border-t border-gray-100 shadow">
      <div class="flex flex-col gap-4 text-gray-700 font-medium text-lg">
        <a href="#" class="hover:text-blue-600 transition">Products</a>
        <a href="#" class="hover:text-blue-600 transition">Solutions</a>
        <a href="#" class="hover:text-blue-600 transition">Developers</a>
        <a href="#" class="hover:text-blue-600 transition">Partners</a>
        <a href="#" class="hover:text-blue-600 transition">Pricing</a>
        <a href="#" class="text-gray-600 hover:text-blue-600 font-medium mt-2">Log in</a>
        <a href="#" class="bg-blue-600 text-white font-semibold px-6 py-2 rounded-full shadow hover:bg-blue-700 transition mt-2 text-center">Sign up</a>
      </div>
    </div>
    <script>
      // Simple mobile nav toggle
      document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('mobile-nav-btn');
        const menu = document.getElementById('mobile-nav-menu');
        btn && btn.addEventListener('click', function () {
          menu.classList.toggle('hidden');
        });
      });
    </script>
  </nav>