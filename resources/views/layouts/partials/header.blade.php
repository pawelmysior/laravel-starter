<header class="flex items-center justify-between flex-wrap bg-gray-600 text-gray-100 xl:px-8">
    <a href="/" class="hover:underline block my-6 mr-2 xl:mr-8 pl-4 xl:pl-0">
        {{ config('app.name', 'Starter') }}
    </a>

    <button class="flex xl:hidden items-center px-4 py-4 appearance-none focus:outline-none" @click="showMenu = !showMenu">
        <svg class="fill-current h-3 w-3" :class="{ hidden: showMenu }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" v-cloak>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
        </svg>
        <svg class="fill-current h-3 w-3" :class="{ hidden: !showMenu }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" v-cloak>
            <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/>
        </svg>
    </button>

    <div class="xl:block w-full xl:w-auto flex-grow px-4 xl:px-0" :class="{ hidden: !showMenu }" v-cloak>
        <div class="flex flex-col xl:flex-row">
            <a href="#" class="hover:underline my-2 xl:my-6 xl:mr-8">
                About
            </a>

            <a href="#" class="hover:underline my-2 xl:my-6">
                Contact
            </a>
        </div>
    </div>
</header>
