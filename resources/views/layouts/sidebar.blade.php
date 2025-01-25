<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 ">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 ">
                {{-- Sidebar Header --}}
                <ul class="pb-2 space-y-2">
                    <li>
                        <x-sidebar-link href="{{ route('dashboard') }}" :active="request()->is('dashboard')">
                            <x-sidebar-icon>
                                <svg class="w-[14px] h-[14px] text-gray-500 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z" />
                                    <path
                                        d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z" />
                                </svg>
                            </x-sidebar-icon>
                            <span class="ml-3" sidebar-toggle-item>Overview</span>
                        </x-sidebar-link>
                    </li>
                    <li>
                        <x-sidebar-link href="{{ route('peminjam.index') }}" :active="request()->is('peminjam')">
                            <x-sidebar-icon>
                                <svg class="w-[14px] h-[14px] text-gray-500 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                    <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                                </svg>
                            </x-sidebar-icon>
                            <span class="ml-3" sidebar-toggle-item>Peminjam</span>
                        </x-sidebar-link>
                    </li>
                    <li>
                        <x-sidebar-dropdown label="Buku" id="Buku" :active="request()->is('buku*')">
                            <x-sidebar-icon>
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                                    clip-rule="evenodd" />
                            </x-sidebar-icon>
                        </x-sidebar-dropdown>
                        <x-sidebar-dropdown-list id="Buku" :active="request()->is('buku*')">
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('jenis_buku.index') }}"  :active="request()->is('dashboard/jenis-buku')">Jenis Buku</x-sidebar-dropdown-list-link>
                    </li>
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('buku.index') }}" :active="request()->is('dashboard/buku')">Buku </x-sidebar-dropdown-list-link>
                    </li>
                </x-sidebar-dropdown-list>
                    <li>
                        <x-sidebar-link href="{{ route('transaksi_peminjaman.index') }}" :active="request()->is('transaksi_peminjaman')">
                            <x-sidebar-icon>
                                <svg class="w-[14px] h-[14px] text-gray-500 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                    <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z" />
                                </svg>
                            </x-sidebar-icon>
                            <span class="ml-3" sidebar-toggle-item>Transaksi Peminjaman</span>
                        </x-sidebar-link>
                    </li>
                </ul>
                    
            </div>
        </div>
    </div>
</aside>
