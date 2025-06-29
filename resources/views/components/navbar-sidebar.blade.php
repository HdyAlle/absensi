<!-- Navbar -->
<nav class="bg-white shadow-lg border-b border-gray-200 fixed w-full z-50 top-0">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <!-- Mobile menu button -->
                <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded transition-all duration-200">
                    <svg class="w-5 h-5 transition-transform duration-300" id="hamburger-icon" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Logo -->
                <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5 transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('img/logo.png') }}" class="h-8 mr-3 transition-transform duration-200 hover:rotate-12" alt="Logo">
                    <span class="self-center whitespace-nowrap text-gray-800">Dashboard</span>
                </a>
            </div>
            
            <!-- User dropdown -->
            <div class="flex items-center">
                <div class="relative">
                    <!-- User Button -->
                    <button type="button" class="navbar-user-btn flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 transition-all duration-200 hover:scale-105 focus:outline-none">
                        <span class="sr-only">Open user menu</span>
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-semibold transition-all duration-200">
                            <svg class="w-4 h-4 transition-transform duration-200" id="user-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </button>
                    
                    <!-- Dropdown menu dengan animasi -->
                    <div class="navbar-dropdown fixed right-4 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 transform transition-all duration-300 ease-in-out opacity-0 scale-95 translate-y-2 pointer-events-none" style="z-index: 9999;">
                        <div class="px-4 py-3 bg-gradient-to-r from-blue-50 to-purple-50 rounded-t-lg">
                            <span class="block text-sm text-gray-900 font-semibold">{{ Auth::user()->name ?? 'HdyAlle' }}</span>
                            <span class="block text-sm text-gray-500 truncate">{{ Auth::user()->email ?? 'hdyalle@example.com' }}</span>
                        </div>
                        <ul class="py-2">
                            <li>
                                <a href="#" class="menu-item block px-4 py-2 text-sm text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 transition-all duration-200 flex items-center transform hover:translate-x-1">
                                    <svg class="w-4 h-4 mr-2 text-blue-500 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="transition-colors duration-200">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-item block px-4 py-2 text-sm text-gray-700 hover:bg-gradient-to-r hover:from-gray-50 hover:to-gray-100 transition-all duration-200 flex items-center transform hover:translate-x-1">
                                    <svg class="w-4 h-4 mr-2 text-gray-500 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="transition-colors duration-200">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="menu-item block px-4 py-2 text-sm text-gray-700 hover:bg-gradient-to-r hover:from-red-50 hover:to-red-100 transition-all duration-200 flex items-center border-t border-gray-100 transform hover:translate-x-1">
                                    <svg class="w-4 h-4 mr-2 text-red-500 transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="transition-colors duration-200">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Sidebar dengan animasi yang diperbaiki -->
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform duration-300 ease-in-out -translate-x-full bg-white border-r border-gray-200 lg:translate-x-0 shadow-lg" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <!-- Home -->
            <li class="sidebar-item transform transition-all duration-200 hover:translate-x-1">
                <a href="#" class="sidebar-link active group flex items-center w-full p-3 text-gray-900 rounded-lg transition-all duration-300 hover:bg-gradient-to-r hover:from-blue-50 hover:to-blue-100 hover:scale-105 hover:shadow-md relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-lg"></div>
                    <div class="flex items-center justify-center w-8 h-8 bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg group-hover:scale-110 transition-all duration-300 relative z-10 group-hover:rotate-3">
                        <svg class="w-4 h-4 text-white transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                    </div>
                    <span class="ml-3 group-hover:text-blue-700 transition-all duration-300 relative z-10 group-hover:font-semibold">Home</span>
                    <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </a>
            </li>
            
                        <!-- Attendance -->
            <li class="sidebar-item transform transition-all duration-200 hover:translate-x-1">
                <a href="#" class="sidebar-link group flex items-center w-full p-3 text-gray-900 rounded-lg transition-all duration-300 hover:bg-gradient-to-r hover:from-teal-50 hover:to-teal-100 hover:scale-105 hover:shadow-md relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-teal-500 to-teal-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-lg"></div>
                    <div class="flex items-center justify-center w-8 h-8 bg-gradient-to-r from-teal-500 to-teal-600 rounded-lg group-hover:scale-110 transition-all duration-300 relative z-10 group-hover:rotate-3">
                        <svg class="w-4 h-4 text-white transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="ml-3 group-hover:text-teal-700 transition-all duration-300 relative z-10 group-hover:font-semibold">Attendance</span>
                    <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-4 h-4 text-teal-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </a>
            </li>

            <!-- Company -->
            <li class="sidebar-item transform transition-all duration-200 hover:translate-x-1">
                <a href="#" class="sidebar-link group flex items-center w-full p-3 text-gray-900 rounded-lg transition-all duration-300 hover:bg-gradient-to-r hover:from-green-50 hover:to-green-100 hover:scale-105 hover:shadow-md relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-green-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-lg"></div>
                    <div class="flex items-center justify-center w-8 h-8 bg-gradient-to-r from-green-500 to-green-600 rounded-lg group-hover:scale-110 transition-all duration-300 relative z-10 group-hover:rotate-3">
                        <svg class="w-4 h-4 text-white transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="ml-3 group-hover:text-green-700 transition-all duration-300 relative z-10 group-hover:font-semibold">Company</span>
                    <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </a>
            </li>
            
            <!-- Department -->
            <li class="sidebar-item transform transition-all duration-200 hover:translate-x-1">
                <a href="#" class="sidebar-link group flex items-center w-full p-3 text-gray-900 rounded-lg transition-all duration-300 hover:bg-gradient-to-r hover:from-purple-50 hover:to-purple-100 hover:scale-105 hover:shadow-md relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-purple-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-lg"></div>
                    <div class="flex items-center justify-center w-8 h-8 bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg group-hover:scale-110 transition-all duration-300 relative z-10 group-hover:rotate-3">
                        <svg class="w-4 h-4 text-white transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="ml-3 group-hover:text-purple-700 transition-all duration-300 relative z-10 group-hover:font-semibold">Department</span>
                    <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-4 h-4 text-purple-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </a>
            </li>
            
            <!-- Area -->
            <li class="sidebar-item transform transition-all duration-200 hover:translate-x-1">
                <a href="#" class="sidebar-link group flex items-center w-full p-3 text-gray-900 rounded-lg transition-all duration-300 hover:bg-gradient-to-r hover:from-red-50 hover:to-red-100 hover:scale-105 hover:shadow-md relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-red-500 to-red-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-lg"></div>
                    <div class="flex items-center justify-center w-8 h-8 bg-gradient-to-r from-red-500 to-red-600 rounded-lg group-hover:scale-110 transition-all duration-300 relative z-10 group-hover:rotate-3">
                        <svg class="w-4 h-4 text-white transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="ml-3 group-hover:text-red-700 transition-all duration-300 relative z-10 group-hover:font-semibold">Area</span>
                    <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </a>
            </li>
            
            <!-- Employee -->
            <li class="sidebar-item transform transition-all duration-200 hover:translate-x-1">
                <a href="#" class="sidebar-link group flex items-center w-full p-3 text-gray-900 rounded-lg transition-all duration-300 hover:bg-gradient-to-r hover:from-indigo-50 hover:to-indigo-100 hover:scale-105 hover:shadow-md relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-indigo-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-lg"></div>
                    <div class="flex items-center justify-center w-8 h-8 bg-gradient-to-r from-indigo-500 to-indigo-600 rounded-lg group-hover:scale-110 transition-all duration-300 relative z-10 group-hover:rotate-3">
                        <svg class="w-4 h-4 text-white transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </div>
                    <span class="ml-3 group-hover:text-indigo-700 transition-all duration-300 relative z-10 group-hover:font-semibold">Employee</span>
                    <div class="ml-auto opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</aside>

<!-- JavaScript dengan animasi yang diperbaiki -->
<script>
(function() {
    'use strict';
    
    let dropdownInitialized = false;
    
    function initDropdown() {
        if (dropdownInitialized) return;
        
        const userBtn = document.querySelector('.navbar-user-btn');
        const dropdown = document.querySelector('.navbar-dropdown');
        const userIcon = document.getElementById('user-icon');
        
        if (!userBtn || !dropdown) {
            console.log('Dropdown elements not found');
            return;
        }
        
        console.log('Initializing dropdown with animations...');
        
        // Toggle dropdown dengan animasi
        userBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const isVisible = !dropdown.classList.contains('opacity-0');
            
            if (!isVisible) {
                // Show dropdown dengan animasi
                dropdown.classList.remove('opacity-0', 'scale-95', 'translate-y-2', 'pointer-events-none');
                dropdown.classList.add('opacity-100', 'scale-100', 'translate-y-0');
                
                // Animate user icon
                if (userIcon) {
                    userIcon.style.transform = 'rotate(180deg)';
                }
                
                // Animate menu items dengan stagger effect
                const menuItems = dropdown.querySelectorAll('.menu-item');
                menuItems.forEach((item, index) => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateX(-10px)';
                    setTimeout(() => {
                        item.style.transition = 'all 0.3s ease-out';
                        item.style.opacity = '1';
                        item.style.transform = 'translateX(0)';
                    }, index * 50);
                });
                
                console.log('Dropdown shown with animation');
            } else {
                // Hide dropdown dengan animasi
                dropdown.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
                dropdown.classList.add('opacity-0', 'scale-95', 'translate-y-2');
                
                // Animate user icon back
                if (userIcon) {
                    userIcon.style.transform = 'rotate(0deg)';
                }
                
                setTimeout(() => {
                    dropdown.classList.add('pointer-events-none');
                }, 300);
                
                console.log('Dropdown hidden with animation');
            }
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!userBtn.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
                dropdown.classList.add('opacity-0', 'scale-95', 'translate-y-2');
                
                if (userIcon) {
                    userIcon.style.transform = 'rotate(0deg)';
                }
                
                setTimeout(() => {
                    dropdown.classList.add('pointer-events-none');
                }, 300);
            }
        });
        
        // Prevent dropdown from closing when clicking inside
        dropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
        
        dropdownInitialized = true;
        console.log('Dropdown initialized successfully with animations');
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDropdown);
    } else {
        initDropdown();
    }
    
    // Also try to initialize after a short delay (fallback)
    setTimeout(initDropdown, 100);
    
    // Sidebar functionality dengan animasi
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM Content Loaded');
        
        // Toggle sidebar untuk mobile dengan animasi
        const toggleBtn = document.getElementById('toggleSidebarMobile');
        const sidebar = document.getElementById('logo-sidebar');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        
        if (toggleBtn && sidebar) {
            toggleBtn.addEventListener('click', function() {
                const isHidden = sidebar.classList.contains('-translate-x-full');
                
                if (isHidden) {
                    // Show sidebar
                    sidebar.classList.remove('-translate-x-full');
                    if (hamburgerIcon) {
                        hamburgerIcon.style.transform = 'rotate(90deg)';
                    }
                    
                    // Animate sidebar items dengan stagger effect
                    const sidebarItems = sidebar.querySelectorAll('.sidebar-item');
                    sidebarItems.forEach((item, index) => {
                        item.style.opacity = '0';
                        item.style.transform = 'translateX(-20px)';
                        setTimeout(() => {
                            item.style.transition = 'all 0.3s ease-out';
                            item.style.opacity = '1';
                            item.style.transform = 'translateX(0)';
                        }, index * 100);
                    });
                } else {
                    // Hide sidebar
                    sidebar.classList.add('-translate-x-full');
                    if (hamburgerIcon) {
                        hamburgerIcon.style.transform = 'rotate(0deg)';
                    }
                }
            });
        }
        
        // Sidebar active state dengan animasi
        const sidebarLinks = document.querySelectorAll('.sidebar-link');
        sidebarLinks.forEach(function(link, index) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class dari semua links dengan animasi
                sidebarLinks.forEach(function(l) {
                    l.classList.remove('active');
                    l.style.transform = 'scale(1)';
                    // Remove gradient background classes
                    l.classList.remove('bg-gradient-to-r', 'from-blue-100', 'to-blue-200', 'shadow-md');
                });
                
                // Add active class ke link yang diklik dengan animasi
                link.classList.add('active');
                link.style.transform = 'scale(1.02)';
                
                // Add gradient background dengan delay
                setTimeout(() => {
                    link.classList.add('bg-gradient-to-r', 'from-blue-100', 'to-blue-200', 'shadow-md');
                    link.style.transform = 'scale(1)';
                }, 150);
                
                // Pulse effect
                link.style.animation = 'pulse 0.5s ease-in-out';
                setTimeout(() => {
                    link.style.animation = '';
                }, 500);
            });
            
            // Add entrance animation untuk sidebar items
            setTimeout(() => {
                link.parentElement.style.opacity = '1';
                link.parentElement.style.transform = 'translateX(0)';
            }, index * 100);
        });
        
        // Set default active state untuk Home dengan animasi
        const homeLink = document.querySelector('.sidebar-link.active');
        if (homeLink) {
            setTimeout(() => {
                homeLink.classList.add('bg-gradient-to-r', 'from-blue-100', 'to-blue-200', 'shadow-md');
            }, 500);
        }
        
        // Window resize handler
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024 && sidebar) {
                sidebar.classList.remove('-translate-x-full');
                if (hamburgerIcon) {
                    hamburgerIcon.style.transform = 'rotate(0deg)';
                }
            } else if (window.innerWidth < 1024 && sidebar) {
                sidebar.classList.add('-translate-x-full');
                if (hamburgerIcon) {
                    hamburgerIcon.style.transform = 'rotate(0deg)';
                }
            }
        });
    });
    
    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes slideIn {
            from { 
                opacity: 0; 
                transform: translateX(-20px); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0); 
            }
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translate3d(0, -20px, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }
        
        .sidebar-item {
            opacity: 0;
            transform: translateX(-20px);
            transition: all 0.3s ease-out;
        }
        
        .menu-item:hover svg {
            transform: scale(1.1);
        }
        
        .navbar-dropdown.show {
            animation: fadeInDown 0.3s ease-out;
        }
    `;
    document.head.appendChild(style);
})();
</script>