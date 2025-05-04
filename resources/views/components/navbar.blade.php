<nav class="bg-gray-800 text-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-3">
            <div class="flex items-center">
                <a href="#" class="text-xl font-bold">Toko Sembako</a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white hover:text-gray-200 focus:outline-none">
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path id="menu-icon" class="block" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
                        <path id="close-icon" class="hidden" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                    </svg>
                </button>
            </div>

            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}"
                   class="{{ request()->is('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">
                    Dashboard
                </a>
                <a href="{{ route('profile', ['username' => request()->query('username')]) }}"
                   class="{{ request()->is('profile') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">
                    Profile
                </a>
                <a href="{{ route('pengelolaan') }}"
                   class="{{ request()->is('pengelolaan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium">
                    Pengelolaan
                </a>
            </div>
        </div>
    </div>

    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}"
               class="{{ request()->is('dashboard*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">
                Dashboard
            </a>
            <a href="{{ route('profile', ['username' => request()->query('username')]) }}"
               class="{{ request()->is('profile') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">
                Profile
            </a>
            <a href="{{ route('pengelolaan') }}"
               class="{{ request()->is('pengelolaan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">
                Pengelolaan
            </a>
        </div>
    </div>

    <div class="fixed bottom-4 left-4">
        <a href="{{ route('login') }}" class="flex items-center justify-center bg-red-600 hover:bg-red-700 text-white p-3 rounded-full shadow-lg" title="Logout">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
        </a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        });
    </script>
</nav>
