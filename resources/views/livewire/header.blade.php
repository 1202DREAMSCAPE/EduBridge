<div class="relative p-4">
    <div class="fixed inset-0 bg-cover bg-center z-[-1]" style="background-image: url('{{ asset('img/edubridgebg.png') }}');"></div>
    
    <div x-data="{ isOpen: false, currentPage: window.location.pathname }" class="relative flex items-center justify-between px-8 z-50 py-4">
        <div class="flex items-center space-x-2 relative">
            <button 
                @click="isOpen = !isOpen" 
                class="focus:outline-none relative w-10 h-14 flex items-center justify-center rounded-md"
                :class="{ 'bg-maincolor': isOpen }"
            >
            <!-- Hamburger icon -->
                <template x-if="!isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-maincolor" fill="none" viewBox="0 0 24 24" stroke="CurrentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </template>

            <!-- Chevron icon -->
                <template x-if="isOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="-mt-3 h-8 w-8 text-hover" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6-6-6z" />
                        <path d="M7.41 12.58L12 17.17l4.59-4.59L18 14l-6 6-6-6z" />
                        <path d="M7.41 16.58L12 21.17l4.59-4.59L18 18l-6 6-6-6z" />
                    </svg>
                </template>
            </button>
            <span class="text-2xl font-extrabold text-maincolor">EduBridge</span>
        </div>

        <a href="{{ url('/login') }}">
            <button class="text-maincolor px-4 py-2 hover:bg-whitehover hover:border-hover hover:text-hover border-2 text-sm font-bold border-maincolor rounded-lg duration-200 ease-in">L O G I N</button>
        </a>
        
        
        <!-- Dropdown menu -->
        <div 
            x-show="isOpen" 
            @click.away="isOpen = false"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            class="absolute top-20 left-8 w-40 text-center text-l bg-maincolor text-black rounded-lg mt-2"
            style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);"
        >
            <ul class="p-2 space-y-2">
                <li>
                    <a href="{{ url('/') }}">
                        <button class="text-black w-full pt-2 bg-maincolor hover:font-bold rounded" :class="{ 'font-bold': currentPage === '/' }">
                            Home
                        </button>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/about') }}">
                        <button class="text-black w-full py-2 bg-maincolor hover:font-bold rounded" :class="{ 'font-bold': currentPage.includes('about') }">
                            About Us
                        </button>
                    </a>
                </li>
                <li>
                <a href="{{ url('/contactus') }}">
                    <button class="w-full pb-2 bg-maincolor text-black hover:font-bold rounded" :class="{ 'font-bold': currentPage.includes('contact') }">
                        Contact Us
                    </button>
                </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Divider -->
    <div class="border-b-2 mx-4 -mt-4 border-maincolor"></div>
</div>
