<aside
    class="fixed bg-[#1D2327] top-0 left-0 pt-20 z-40 w-52 h-screen transition-transform -translate-x-full sm:translate-x-0"
>
    <div class="flex items-center justify-between ml-4 mb-8">
{{--        <div class="flex items-center justify-start">--}}
{{--            <button--}}
{{--                type="button"--}}
{{--                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100--}}
{{--                        focus:outline-none focus:ring-2 focus:ring-gray-200"--}}
{{--            >--}}
{{--                <span class="sr-only">Open sidebar</span>--}}
{{--                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                    <path--}}
{{--                        clip-rule="evenodd"--}}
{{--                        fill-rule="evenodd"--}}
{{--                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0--}}
{{--                                01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0--}}
{{--                                01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"--}}
{{--                    />--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--            <a href="#" class="flex ms-2 md:me-24">--}}
{{--                <img src="{{ asset('img/logo.png') }}" class="h-8 me-3" alt="LaraPress Logo"/>--}}
{{--                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">--}}
{{--                        {{ config('app.name') }}--}}
{{--                    </span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="flex items-center">--}}
{{--            <div class="flex items-center ms-3">--}}
{{--                <!-- Theme Toggle Button -->--}}
{{--                --}}{{--                    <div>--}}
{{--                --}}{{--                        <button--}}
{{--                --}}{{--                            id="theme-toggle"--}}
{{--                --}}{{--                            type="button"--}}
{{--                --}}{{--                            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700--}}
{{--                --}}{{--                                                focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg--}}
{{--                --}}{{--                                                text-sm p-2.5"--}}
{{--                --}}{{--                        >--}}
{{--                --}}{{--                            <svg--}}
{{--                --}}{{--                                id="theme-toggle-dark-icon"--}}
{{--                --}}{{--                                class="hidden w-5 h-5"--}}
{{--                --}}{{--                                fill="currentColor"--}}
{{--                --}}{{--                                viewBox="0 0 20 20"--}}
{{--                --}}{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                --}}{{--                            >--}}
{{--                --}}{{--                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>--}}
{{--                --}}{{--                            </svg>--}}
{{--                --}}{{--                            <svg--}}
{{--                --}}{{--                                id="theme-toggle-light-icon"--}}
{{--                --}}{{--                                class="hidden w-5 h-5"--}}
{{--                --}}{{--                                fill="currentColor"--}}
{{--                --}}{{--                                viewBox="0 0 20 20"--}}
{{--                --}}{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                --}}{{--                            >--}}
{{--                --}}{{--                                <path--}}
{{--                --}}{{--                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018--}}
{{--                --}}{{--                                                        0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414--}}
{{--                --}}{{--                                                        1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1--}}
{{--                --}}{{--                                                        0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2--}}
{{--                --}}{{--                                                        0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414--}}
{{--                --}}{{--                                                        1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0--}}
{{--                --}}{{--                                                        011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"--}}
{{--                --}}{{--                                    fill-rule="evenodd"--}}
{{--                --}}{{--                                    clip-rule="evenodd"--}}
{{--                --}}{{--                                />--}}
{{--                --}}{{--                            </svg>--}}
{{--                --}}{{--                        </button>--}}
{{--                --}}{{--                    </div>--}}
{{--                <!-- End Theme Toggle Button -->--}}
{{--                <div>--}}
{{--                    <button--}}
{{--                        type="button"--}}
{{--                        class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"--}}
{{--                    >--}}
{{--                        <span class="sr-only">Open user menu</span>--}}
{{--                        <img--}}
{{--                            class="w-8 h-8 rounded-full"--}}
{{--                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"--}}
{{--                            alt="user photo"--}}
{{--                        >--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow">--}}
{{--                    <div class="px-4 py-3">--}}
{{--                        <p class="text-sm text-gray-900">Neil Sims</p>--}}
{{--                        <p class="text-sm font-medium text-gray-900 truncate">neil.sims@flowbite.com</p>--}}
{{--                    </div>--}}
{{--                    <ul class="py-1" role="none">--}}
{{--                        <li>--}}
{{--                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">--}}
{{--                                Dashboard--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">--}}
{{--                                Settings--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">--}}
{{--                                Earnings--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">--}}
{{--                                Sign out--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div class="h-full px-3 pb-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">
            <x-admin.sidebar-item name="dashboard" href="admin"/>
            <x-admin.sidebar-item name="posts" href="/admin/posts"/>
            <x-admin.sidebar-item name="users" href="/admin/users"/>
            <x-admin.sidebar-item name="categories" href="/admin/categories"/>
            <x-admin.sidebar-item name="tags" href="/admin/tags"/>
            <x-admin.sidebar-item name="trash" href="/admin/trash"/>
            <x-admin.sidebar-item name="products" href="admin"/>
            <x-admin.sidebar-item name="kanban" class="px-2 text-gray-800 bg-gray-100" href="admin">
                Pro
            </x-admin.sidebar-item>

            <x-admin.sidebar-item name="inbox" class="w-3 h-3 p-3 text-blue-800 bg-blue-100" href="admin">
                3
            </x-admin.sidebar-item>

        </ul>
    </div>
</aside>
