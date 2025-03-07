<div class="relative flex justify-center items-center w-full min-h-screen bg-gradient-to-r from-zinc-800  to-zinc-600 pb-8 p-4">
    <!-- Full-screen Container for the Cards -->
    <div class="relative flex flex-col md:flex-row w-full max-w-7xl gap-4">
        <!-- Picture Card (Left Side) -->
        <div class="relative flex items-center justify-center  rounded-md  p-6 w-full md:w-1/2  ">
            <!-- Fading Effect -->
            <div class="absolute w-72 h-72 rounded-full bg-gradient-to-r from-transparent via-zinc-800/40 to-transparent animate-pulse"></div>

        <!-- Circular Frame -->
        <div class="relative  rounded-full border-1 overflow-hidden flex items-center justify-center">
            <img class="w-full h-full object-cover" src="{{ asset('images/June-removebg-preview.png') }}" alt="June Rey Orias">
        </div>
        
            
        </div>

        <!-- Info Card (Right Side) -->
        <div class="relative flex flex-col justify-center items-center p-6 w-full md:w-1/2">
            <h5 class="mb-4 text-3xl font-bold tracking-tight text-center text-white opacity-90">
                Hi! I'm June Rey Orias
            </h5>

            <p class="mb-6 text-lg font-medium text-center text-white opacity-90">
                I'm June Rey Orias, a web developer turning ideas into interactive, user-friendly websites. Let's create something exceptional!
            </p>

            <!-- Button Section -->
            <div class="mt-4 flex flex-wrap justify-center gap-4">
              

                <!-- GitHub Button -->
                <a href="https://github.com/JuneReyOrias" target="_blank" class="inline-flex items-center justify-center px-6 py-3 text-lg font-semibold text-white bg-gray-800 rounded-lg hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C5.372 0 0 5.372 0 12c0 5.302 3.438 9.8 8.207 11.387.6.11.793-.261.793-.581 0-.287-.011-1.244-.017-2.253-3.338.726-4.042-1.607-4.042-1.607-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.73.083-.73 1.205.084 1.838 1.236 1.838 1.236 1.071 1.835 2.809 1.305 3.492.997.108-.776.419-1.305.762-1.605-2.665-.305-5.466-1.335-5.466-5.93 0-1.31.469-2.382 1.236-3.221-.124-.304-.536-1.524.117-3.176 0 0 1.008-.322 3.3 1.23.957-.266 1.984-.399 3.003-.404 1.019.005 2.046.138 3.003.404 2.291-1.552 3.3-1.23 3.3-1.23.653 1.653.241 2.873.118 3.176.769.839 1.236 1.911 1.236 3.221 0 4.61-2.804 5.623-5.474 5.921.43.371.814 1.1.814 2.219 0 1.604-.014 2.898-.014 3.292 0 .322.192.696.801.578C20.565 21.795 24 17.297 24 12 24 5.372 18.627 0 12 0z" />
                    </svg>
                </a>

                <!-- LinkedIn Button -->
                <a href="https://www.linkedin.com/in/your-linkedin-profile" target="_blank" class="inline-flex items-center justify-center px-6 py-3 text-lg font-semibold text-white bg-blue-800 rounded-lg hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.451h-3.481v-5.498c0-1.312-.023-3.003-1.832-3.003-1.834 0-2.116 1.435-2.116 2.914v5.587h-3.48v-11.62h3.34v1.579h.048c.466-.88 1.596-1.796 3.28-1.796 3.51 0 4.154 2.312 4.154 5.312v6.525zM3.446 7.453c-1.113 0-2.01-.88-2.01-1.98 0-1.1.896-1.98 2.01-1.98 1.116 0 2.01.88 2.01 1.98 0 1.1-.896 1.98-2.01 1.98zm1.743 13.002h-3.487v-11.62h3.487v11.62zM5.189 5.415c-.924 0-1.668-.744-1.668-1.66 0-.918.744-1.662 1.668-1.662.918 0 1.662.744 1.662 1.662 0 .916-.744 1.66-1.662 1.66z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

{{-- @include('components.projectcat') --}}


<div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-zinc-800  to-zinc-600" id="about">
    <div class="w-full max-w-lg   bg-transparent backdrop-blur-md bg-opacity-30 border border-gray-200 rounded-lg ">
        <div class="flex justify-end px-4 pt-4">


        </div>
        <div class="flex justify-center flex-col items-center pb-10 pl-10 pr-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/June-removebg-preview.png') }}"
                alt="Bonnie image" />
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">About Me</h5>
            <blockquote class="mb-6 text-xl italic text-justify text-white dark:text-white">
                <p>" Hello! I'm <span class="font-bold text-gray-900 dark:text-gray-900">June Rey Orias</span>, a
                    passionate and
                    innovative developer who thrives on turning ideas into elegant, functional solutions. With a deep
                    love
                    for technology and creativity, I strive to craft meaningful experiences through my work.."</p>
            </blockquote>


            <div class="flex mt-4 md:mt-6">

                <button data-modal-target="crypto-modal" data-modal-toggle="crypto-modal"
                class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                type="button">
            I am interested in
            </button>
                <button data-modal-target="timeline-modal" data-modal-toggle="timeline-modal"
                    class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                    type="button">
                    Explore more
                </button>

            </div>
        </div>
    </div>
</div>

<!-- Interested in  modal -->
<div id="crypto-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    I am interested in
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crypto-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="grid grid-cols-2 sm:grid-cols-2">
            <div class="p-4 md:p-5">
                {{-- <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Connect with one of our available wallet providers or create a new one.</p> --}}
                <ul class="my-4 space-y-3">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            {{-- <svg aria-hidden="true" class="h-4" viewBox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M39.0728 0L21.9092 12.6999L25.1009 5.21543L39.0728 0Z" fill="#E17726"/><path d="M0.966797 0.0151367L14.9013 5.21656L17.932 12.7992L0.966797 0.0151367Z" fill="#E27625"/><path d="M32.1656 27.0093L39.7516 27.1537L37.1004 36.1603L27.8438 33.6116L32.1656 27.0093Z" fill="#E27625"/><path d="M7.83409 27.0093L12.1399 33.6116L2.89876 36.1604L0.263672 27.1537L7.83409 27.0093Z" fill="#E27625"/><path d="M17.5203 10.8677L17.8304 20.8807L8.55371 20.4587L11.1924 16.4778L11.2258 16.4394L17.5203 10.8677Z" fill="#E27625"/><path d="M22.3831 10.7559L28.7737 16.4397L28.8067 16.4778L31.4455 20.4586L22.1709 20.8806L22.3831 10.7559Z" fill="#E27625"/><path d="M12.4115 27.0381L17.4768 30.9848L11.5928 33.8257L12.4115 27.0381Z" fill="#E27625"/><path d="M27.5893 27.0376L28.391 33.8258L22.5234 30.9847L27.5893 27.0376Z" fill="#E27625"/><path d="M22.6523 30.6128L28.6066 33.4959L23.0679 36.1282L23.1255 34.3884L22.6523 30.6128Z" fill="#D5BFB2"/><path d="M17.3458 30.6143L16.8913 34.3601L16.9286 36.1263L11.377 33.4961L17.3458 30.6143Z" fill="#D5BFB2"/><path d="M15.6263 22.1875L17.1822 25.4575L11.8848 23.9057L15.6263 22.1875Z" fill="#233447"/><path d="M24.3739 22.1875L28.133 23.9053L22.8184 25.4567L24.3739 22.1875Z" fill="#233447"/><path d="M12.8169 27.0049L11.9606 34.0423L7.37109 27.1587L12.8169 27.0049Z" fill="#CC6228"/><path d="M27.1836 27.0049L32.6296 27.1587L28.0228 34.0425L27.1836 27.0049Z" fill="#CC6228"/><path d="M31.5799 20.0605L27.6165 24.0998L24.5608 22.7034L23.0978 25.779L22.1387 20.4901L31.5799 20.0605Z" fill="#CC6228"/><path d="M8.41797 20.0605L17.8608 20.4902L16.9017 25.779L15.4384 22.7038L12.3988 24.0999L8.41797 20.0605Z" fill="#CC6228"/><path d="M8.15039 19.2314L12.6345 23.7816L12.7899 28.2736L8.15039 19.2314Z" fill="#E27525"/><path d="M31.8538 19.2236L27.2061 28.2819L27.381 23.7819L31.8538 19.2236Z" fill="#E27525"/><path d="M17.6412 19.5088L17.8217 20.6447L18.2676 23.4745L17.9809 32.166L16.6254 25.1841L16.625 25.1119L17.6412 19.5088Z" fill="#E27525"/><path d="M22.3562 19.4932L23.3751 25.1119L23.3747 25.1841L22.0158 32.1835L21.962 30.4328L21.75 23.4231L22.3562 19.4932Z" fill="#E27525"/><path d="M27.7797 23.6011L27.628 27.5039L22.8977 31.1894L21.9414 30.5138L23.0133 24.9926L27.7797 23.6011Z" fill="#F5841F"/><path d="M12.2373 23.6011L16.9873 24.9926L18.0591 30.5137L17.1029 31.1893L12.3723 27.5035L12.2373 23.6011Z" fill="#F5841F"/><path d="M10.4717 32.6338L16.5236 35.5013L16.4979 34.2768L17.0043 33.8323H22.994L23.5187 34.2753L23.48 35.4989L29.4935 32.641L26.5673 35.0591L23.0289 37.4894H16.9558L13.4197 35.0492L10.4717 32.6338Z" fill="#C0AC9D"/><path d="M22.2191 30.231L23.0748 30.8354L23.5763 34.8361L22.8506 34.2234H17.1513L16.4395 34.8485L16.9244 30.8357L17.7804 30.231H22.2191Z" fill="#161616"/><path d="M37.9395 0.351562L39.9998 6.53242L38.7131 12.7819L39.6293 13.4887L38.3895 14.4346L39.3213 15.1542L38.0875 16.2779L38.8449 16.8264L36.8347 19.1742L28.5894 16.7735L28.5179 16.7352L22.5762 11.723L37.9395 0.351562Z" fill="#763E1A"/><path d="M2.06031 0.351562L17.4237 11.723L11.4819 16.7352L11.4105 16.7735L3.16512 19.1742L1.15488 16.8264L1.91176 16.2783L0.678517 15.1542L1.60852 14.4354L0.350209 13.4868L1.30098 12.7795L0 6.53265L2.06031 0.351562Z" fill="#763E1A"/><path d="M28.1861 16.2485L36.9226 18.7921L39.7609 27.5398L32.2728 27.5398L27.1133 27.6049L30.8655 20.2912L28.1861 16.2485Z" fill="#F5841F"/><path d="M11.8139 16.2485L9.13399 20.2912L12.8867 27.6049L7.72971 27.5398H0.254883L3.07728 18.7922L11.8139 16.2485Z" fill="#F5841F"/><path d="M25.5283 5.17383L23.0847 11.7736L22.5661 20.6894L22.3677 23.4839L22.352 30.6225H17.6471L17.6318 23.4973L17.4327 20.6869L16.9139 11.7736L14.4707 5.17383H25.5283Z" fill="#F5841F"/></svg> --}}
                            <span class="flex-1 ms-3 whitespace-nowrap">Front End Developer</span>
                            {{-- <span class="inline-flex items-center justify-center px-2 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-gray-200 rounded-sm dark:bg-gray-700 dark:text-gray-400">Popular</span> --}}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            
                            <span class="flex-1 ms-3 whitespace-nowrap">Back End Developer</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                           
                            <span class="flex-1 ms-3 whitespace-nowrap">Web Designer</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <span class="flex-1 ms-3 whitespace-nowrap">WordPress Developer</span>
                        </a>
                    </li>
                 
                </ul>
                <div>
                    {{-- <a href="#" class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        Why do I need to connect with my wallet?</a> --}}
                </div>
            </div>
            <div class="p-4 md:p-5">
                {{-- <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Connect with one of our available wallet providers or create a new one.</p> --}}
                <ul class="my-4 space-y-3">
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <span class="flex-1 ms-3 whitespace-nowrap">Digital Marketing</span>
                            {{-- <span class="inline-flex items-center justify-center px-2 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-gray-200 rounded-sm dark:bg-gray-700 dark:text-gray-400">Popular</span> --}}
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <span class="flex-1 ms-3 whitespace-nowrap">Quality Assurance</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <svg aria-hidden="true" svg class="h-5"viewBox="0 0 75.591 75.591" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientTransform="matrix(0 -54.944 -54.944 0 23.62 79.474)" gradientUnits="userSpaceOnUse" x2="1"><stop offset="0" stop-color="#ff1b2d"/><stop offset=".3" stop-color="#ff1b2d"/><stop offset=".614" stop-color="#ff1b2d"/><stop offset="1" stop-color="#a70014"/></linearGradient><linearGradient id="b" gradientTransform="matrix(0 -48.595 -48.595 0 37.854 76.235)" gradientUnits="userSpaceOnUse" x2="1"><stop offset="0" stop-color="#9c0000"/><stop offset=".7" stop-color="#ff4b4b"/><stop offset="1" stop-color="#ff4b4b"/></linearGradient><g transform="matrix(1.3333 0 0 -1.3333 0 107.2)"><path d="m28.346 80.398c-15.655 0-28.346-12.691-28.346-28.346 0-15.202 11.968-27.609 26.996-28.313.44848-.02115.89766-.03314 1.3504-.03314 7.2574 0 13.876 2.7289 18.891 7.2137-3.3227-2.2036-7.2074-3.4715-11.359-3.4715-6.7504 0-12.796 3.3488-16.862 8.6297-3.1344 3.6999-5.1645 9.1691-5.3028 15.307v1.3349c.13821 6.1377 2.1683 11.608 5.302 15.307 4.0666 5.2809 10.112 8.6297 16.862 8.6297 4.1526 0 8.038-1.2679 11.361-3.4729-4.9904 4.4643-11.569 7.1876-18.786 7.2144-.03596 0-.07122.0014-.10718.0014z" fill="url(#a)"/><path d="m19.016 68.025c2.6013 3.0709 5.9607 4.9227 9.631 4.9227 8.2524 0 14.941-9.356 14.941-20.897s-6.6891-20.897-14.941-20.897c-3.6703 0-7.0297 1.851-9.6303 4.922 4.0659-5.2809 10.111-8.6297 16.862-8.6297 4.1519 0 8.0366 1.2679 11.359 3.4715 5.802 5.1906 9.4554 12.735 9.4554 21.133 0 8.397-3.6527 15.941-9.4533 21.131-3.3234 2.205-7.2088 3.4729-11.361 3.4729-6.7504 0-12.796-3.3488-16.862-8.6297" fill="url(#b)"/></g></svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Video Edit</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                            <svg aria-hidden="true" class="h-5" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><radialGradient cx="0%" cy="50%" fx="0%" fy="50%" r="100%" id="radialGradient-1"><stop stop-color="#5D9DF6" offset="0%"></stop><stop stop-color="#006FFF" offset="100%"></stop></radialGradient></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="logo"><rect id="base" fill="url(#radialGradient-1)" x="0" y="0" width="512" height="512" rx="256"></rect><path d="M169.209772,184.531136 C217.142772,137.600733 294.857519,137.600733 342.790517,184.531136 L348.559331,190.179285 C350.955981,192.525805 350.955981,196.330266 348.559331,198.676787 L328.82537,217.99798 C327.627045,219.171241 325.684176,219.171241 324.485851,217.99798 L316.547278,210.225455 C283.10802,177.485633 228.89227,177.485633 195.453011,210.225455 L186.951456,218.549188 C185.75313,219.722448 183.810261,219.722448 182.611937,218.549188 L162.877976,199.227995 C160.481326,196.881474 160.481326,193.077013 162.877976,190.730493 L169.209772,184.531136 Z M383.602212,224.489406 L401.165475,241.685365 C403.562113,244.031874 403.562127,247.836312 401.165506,250.182837 L321.971538,327.721548 C319.574905,330.068086 315.689168,330.068112 313.292501,327.721609 C313.292491,327.721599 313.29248,327.721588 313.29247,327.721578 L257.08541,272.690097 C256.486248,272.103467 255.514813,272.103467 254.915651,272.690097 C254.915647,272.690101 254.915644,272.690105 254.91564,272.690108 L198.709777,327.721548 C196.313151,330.068092 192.427413,330.068131 190.030739,327.721634 C190.030725,327.72162 190.03071,327.721606 190.030695,327.721591 L110.834524,250.181849 C108.437875,247.835329 108.437875,244.030868 110.834524,241.684348 L128.397819,224.488418 C130.794468,222.141898 134.680206,222.141898 137.076856,224.488418 L193.284734,279.520668 C193.883897,280.107298 194.85533,280.107298 195.454493,279.520668 C195.454502,279.520659 195.45451,279.520651 195.454519,279.520644 L251.65958,224.488418 C254.056175,222.141844 257.941913,222.141756 260.338618,224.488222 C260.338651,224.488255 260.338684,224.488288 260.338717,224.488321 L316.546521,279.520644 C317.145683,280.107273 318.117118,280.107273 318.71628,279.520644 L374.923175,224.489406 C377.319825,222.142885 381.205562,222.142885 383.602212,224.489406 Z" id="WalletConnect" fill="#FFFFFF" fill-rule="nonzero"></path></g></g></svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">WordPress Developer</span>
                        </a>
                    </li> --}}
                 
                </ul>
                <div>
                    {{-- <a href="#" class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        Why do I need to connect with my wallet?</a> --}}
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Explore more modal -->
<div id="timeline-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Discover More About me
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="timeline-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <ol class="relative border-s border-gray-200 dark:border-gray-600 ms-3.5 mb-4 md:mb-5">
                    <li class="mb-10 ms-8">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white dark:ring-gray-700 dark:bg-gray-600">
                            <svg class="w-2.5 h-2.5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z" />
                            </svg>
                        </span>
                        <h3 class="flex items-start mb-1 text-lg font-semibold text-gray-900 dark:text-white">Years of
                            Experience<span
                                class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ms-3">2+</span>
                        </h3>
                        <time class="block mb-3 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">2
                            years of professional experience in web and software development, specializing in building
                            scalable solutions.</time>

                    </li>
                    <li class="mb-10 ms-8">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white dark:ring-gray-700 dark:bg-gray-600">
                            <svg class="w-2.5 h-2.5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z" />
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Lifelong Learner</h3>
                        <time
                            class="block mb-3 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Constantly
                            exploring new technologies, frameworks, and methodologies to stay ahead in the tech
                            world.</time>

                    </li>
                    <li class="ms-8">
                        <span
                            class="absolute flex items-center justify-center w-6 h-6 bg-gray-100 rounded-full -start-3.5 ring-8 ring-white dark:ring-gray-700 dark:bg-gray-600">
                            <svg class="w-2.5 h-2.5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z" />
                            </svg>
                        </span>
                        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Creative Problem Solver
                        </h3>
                        <time
                            class="block mb-3 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Adapt
                            at overcoming challenges and crafting innovative solutions that drive success.</time>
                    </li>

                </ol>


                </ol>
            </div>

        </div>
    </div>
</div>

@include('components.projectcat')


{{-- <div class="grid gap-6 sm:grid-cols-2">
    <!-- Left Column -->
    <div class="space-y-4">
        <div class="flex items-start">
            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zm0 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z" />
                <path d="M11 6h2v6h-2zM11 14h2v2h-2z" />
            </svg>
            <p class="ml-4 text-gray-600 dark:text-gray-400">
                <span class="font-bold text-gray-900 dark:text-white">Experienced Developer:</span>
                Over 5 years of professional experience in web and software development, specializing in building
                scalable solutions.
            </p>
        </div>
        <div class="flex items-start">
            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zm0 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z" />
                <path d="M7 7h10v2H7zM7 11h10v2H7zM7 15h10v2H7z" />
            </svg>
            <p class="ml-4 text-gray-600 dark:text-gray-400">
                <span class="font-bold text-gray-900 dark:text-white">Lifelong Learner:</span>
                Constantly exploring new technologies, frameworks, and methodologies to stay ahead in the tech
                world.
            </p>
        </div>
    </div>
    <!-- Right Column -->
    <div class="space-y-4">
        <div class="flex items-start">
            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zm0 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z" />
                <path d="M10 6h4v6h-4zM10 14h4v2h-4z" />
            </svg>
            <p class="ml-4 text-gray-600 dark:text-gray-400">
                <span class="font-bold text-gray-900 dark:text-white">Creative Problem Solver:</span>
                Adept at overcoming challenges and crafting innovative solutions that drive success.
            </p>
        </div>
        <div class="flex items-start">
            <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zm0 22C6.486 22 2 17.514 2 12S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z" />
                <path d="M7 10h10v4H7z" />
            </svg>
            <p class="ml-4 text-gray-600 dark:text-gray-400">
                <span class="font-bold text-gray-900 dark:text-white">Collaborative Leader:</span>
                Proven track record of working closely with teams to deliver impactful projects on time.
            </p>
        </div>
    </div>
</div> --}}
{{-- <div class="mt-8 text-center">
    <a href="#portfolio"
        class="px-6 py-3 text-lg font-medium text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
        Explore My Work
    </a>
</div> --}}
{{-- </div> --}}
<hr>
{{-- Services Module --}}
<div class=" bg-gradient-to-r from-zinc-800  to-zinc-600 p-6 min-h-[60vh] flex flex-col justify-center" id="Services">
    <h1 class="text-3xl font-bold text-center text-white mb-6">Offer Services</h1>
  
    <!-- Responsive Card Grid -->
    


    {{-- 1nd Columns --}}
    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 ">
      

<div class="max-w-sm bg-gray-600 border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg w-full h-60 object-cover" src="{{ asset('OfferServices/WebDev.jpg') }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Web Development</h5>
        </a>
        <p class="mb-3 font-normal text-white dark:text-gray-400">My goal is to build high-performing, reliable websites that are easy to manage using modern technologies. I focus on writing clean, efficient code to ensure smooth functionality, effortless maintenance, and long-term scalability.

           </p>
           <ul class="mb-3 font-normal text-white dark:text-gray-400 space-y-2">
        
           <li> 🚀 Optimized for speed
           </li>
            <li> 
                🛠 Clean, maintainable code
                </li>
                <li> 
                    🌐 Built with the latest tech</li>
                </ul>
    </div>
</div>

    
        

<div class="max-w-sm bg-gray-600 border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg w-full h-60 object-cover" src="{{ asset('OfferServices/webDesign.jpg') }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Web Designer</h5>
        </a>
        <p class="mb-3 font-normal text-white dark:text-gray-400">I design websites that are sleek, user-friendly, and aligned with your brand. My focus is on creating simple, functional, and visually appealing designs that enhance the user experience.

</p>
<ul class="mb-3 font-normal text-white dark:text-gray-400 space-y-2">
<li> ✔ Responsive design
   </li>
<li>            
    ✔ Strong brand presence
    </li>
<li>
  
    ✔ User-focused approach
   
</li>
<li>        
    ✔ Modern and clean aesthetics</li>
</ul>
    </div>
</div>

    
     

<div class="max-w-sm bg-gray-600 border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg w-full h-60 object-cover" src="{{ asset('OfferServices/Database.jpg') }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Database Management</h5>
        </a>
        <p class="mb-3 font-normal text-white dark:text-gray-400">My goal is to design efficient, secure, and
             scalable databases that optimize data flow and performance. I focus on structured design, query optimization, 
             and reliability to ensure seamless data management and easy maintenance.</p>
<ul class="mb-3 font-normal text-white dark:text-gray-400 space-y-2">
             <li>🔹 Optimized for performance
                </li>
             <li>
                🔹 Secure and scalable architecture
                </li>
             <li> 🔹 Efficient data management</li>
</ul>
    </div>
</div>

        
      </div>

          {{-- 2nd Columns --}}
    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 ">
      

        <div class="max-w-sm bg-gray-600 border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-60 object-cover" src="{{ asset('OfferServices/GraphicDesgn.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Graphic Design & Branding</h5>
                </a>
                <p class="mb-3 font-normal text-white dark:text-gray-400">My goal is to create interactive and eye-catching designs that make products and brands stand out.
                     I focus on crafting engaging ads, compelling logos, and impactful social media graphics to attract customers and boost brand presence.
                   </p>
                   <ul class="mb-3 font-normal text-white dark:text-gray-400 space-y-2">
                    <li> 🎨 Creative & Engaging Designs</li>
                    <li> 📢 Attention-Grabbing Ads</li>
                    <li> 🌟 Strong Brand Identity</li>
                   </ul>
                 </div>
        </div>
        
            
                
        
        <div class="max-w-sm bg-gray-600 border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-60 object-cover" src="{{ asset('OfferServices/Office.jpg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Office Productivity</h5>
                </a>
                <p class="mb-3 font-normal text-white dark:text-gray-400">My goal is to organize and structure data efficiently for clear insights and better decision-making. 
                    I focus on arranging information systematically to enhance accuracy, streamline reports, and improve overall productivity.
        </p>
        <p class="mb-3 font-normal text-white dark:text-gray-400">
</p>
<ul class="mb-3 font-normal text-white dark:text-gray-400 space-y-2">
                    <li> 📊 Structured Data Management</li>
                    <li> 📑 Clear & Insightful Reports</li>
                    <li> ⚡ Efficient Workflow Optimization</li>
</ul>
            </div>
        </div>
        
            
                     
        <div class="max-w-sm bg-gray-600 border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-60 object-cover" src="{{ asset('OfferServices/DataScience.jpg') }}" alt="Office" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data Science Basics</h5>
                </a>
                <p class="mb-3 font-normal text-white dark:text-gray-400">
                    Mastering the fundamentals of data science starts with handling raw data efficiently. I focus on cleaning, preparing, and structuring data to ensure accuracy and usability for analysis and decision-making.
                </p>
                <ul class="mb-3 font-normal text-white dark:text-gray-400 space-y-2">
                    <li>🧹 Data Cleaning & Preprocessing</li>
                    <li>📊 Organizing & Structuring Data</li>
                    <li>🔍 Handling Missing Values</li>
                    <li>📈 Basic Data Visualization</li>
                </ul>
                {{-- <a href="#" class="inline-block px-4 py-2 mt-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                    Learn More
                </a> --}}
            </div>
        </div>
        
      
        
                
              </div>
  </div>
  <hr>
<!-- #Projects codeflows -->  
<div class="bg-gradient-to-r from-zinc-800 to-zinc-600 p-6 flex flex-col justify-center" id="ProjectWeb">
    <h1 class="text-3xl font-bold text-center text-white mb-6">Projects</h1>

    <!-- Responsive Card Grid -->
    {{-- 1st Column --}}
    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      
        <!-- Project Card -->
        <div class="relative max-w-sm rounded-lg shadow-lg overflow-hidden group">
            <img class="w-full h-60 object-cover" src="{{ asset('Webprojects/ZamboAgrimap.png') }}" alt="Agri-Map">
            <a href="https://zamboangagrimap.online/" target="_blank">
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-center p-5">
                    <h5 class="text-2xl font-bold text-white">Agri-Map</h5>
                    <p class="text-gray-300 text-sm mt-2">
                        A web-based agricultural and geo-mapping system utilizing <span class="font-semibold text-white">Geographic Information System (GIS)</span> to centralize and manage agricultural data for Zamboanga City. 
                        It enables efficient monitoring, improved decision-making, and strategic measures to boost productivity and sustainability in the rice farming sector.
                    </p>
                    {{-- <ul class="text-gray-300 text-sm mt-3 space-y-1">
                        <li>🚀 <span class="font-semibold text-white">Optimized for speed</span></li>
                        <li>🛠 <span class="font-semibold text-white">Clean, maintainable code</span></li>
                        <li>🌐 <span class="font-semibold text-white">Built with the latest tech</span></li>
                        <li>📊 <span class="font-semibold text-white">Real-time agricultural data analysis</span></li>
                        <li>📍 <span class="font-semibold text-white">GIS-powered mapping for precision farming</span></li>
                    </ul> --}}
                </div>
            </a>
        </div>

        <!-- Project Card -->
        <div class="relative max-w-sm rounded-lg shadow-lg overflow-hidden group">
            <img class="w-full h-60 object-cover" src="{{ asset('Webprojects/Upress.png') }}" alt="Upress">
            <a href="#" target="_blank">
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-center p-5">
                    <h5 class="text-2xl font-bold text-white">Upress Management System</h5>
                    <p class="text-gray-300 text-sm mt-2">Sleek, user-friendly websites aligned with your brand.</p>
                    <ul class="text-gray-300 text-sm mt-2 space-y-1">
                        <li>✔ Responsive design</li>
                        <li>✔ Strong brand presence</li>
                        <li>✔ User-focused approach</li>
                        <li>✔ Modern and clean aesthetics</li>
                    </ul>
                </div>
            </a>
        </div>

        <!-- Project Card -->
        <div class="relative max-w-sm rounded-lg shadow-lg overflow-hidden group">
            <img class="w-full h-60 object-cover" src="{{ asset('Webprojects/SimpleBankingSystem.png') }}" alt="Banking System">
            <a href="#" target="_blank">
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-center p-5">
                    <h5 class="text-2xl font-bold text-white">Simple Banking System</h5>
                    <p class="text-gray-300 text-sm mt-2">A lightweight banking system designed for small projects, enabling users to send and receive transactions efficiently.
                    </p>
                    <ul class="text-gray-300 text-sm mt-2 space-y-1">
                        <li>💰 Send Money: Transfer funds between users securely.</li>
                        <li>📥 Receive Money: Accept payments and update balances.</li>
                        <li> 🔄 Transaction Tracking: Keep a log of all transactions.</li>
                    </ul>
                </div>
            </a>
        </div>

    </div>

    {{-- 2nd Column --}}

    {{-- <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      
       
        <div class="relative max-w-sm rounded-lg shadow-lg overflow-hidden group">
            <img class="w-full h-60 object-cover" src="{{ asset('Webprojects/ZamboAgrimap.png') }}" alt="Agri-Map">
            <a href="https://zamboangagrimap.online/" target="_blank">
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-center p-5">
                    <h5 class="text-2xl font-bold text-white">Agri-Map</h5>
                    <p class="text-gray-300 text-sm mt-2">
                        A web-based agricultural and geo-mapping system utilizing <span class="font-semibold text-white">Geographic Information System (GIS)</span> to centralize and manage agricultural data for Zamboanga City. 
                        It enables efficient monitoring, improved decision-making, and strategic measures to boost productivity and sustainability in the rice farming sector.
                    </p>
                    <ul class="text-gray-300 text-sm mt-3 space-y-1">
                        <li>🚀 <span class="font-semibold text-white">Optimized for speed</span></li>
                        <li>🛠 <span class="font-semibold text-white">Clean, maintainable code</span></li>
                        <li>🌐 <span class="font-semibold text-white">Built with the latest tech</span></li>
                        <li>📊 <span class="font-semibold text-white">Real-time agricultural data analysis</span></li>
                        <li>📍 <span class="font-semibold text-white">GIS-powered mapping for precision farming</span></li>
                    </ul>
                </div>
            </a>
        </div>
        

        <div class="relative max-w-sm rounded-lg shadow-lg overflow-hidden group">
            <img class="w-full h-60 object-cover" src="{{ asset('Webprojects/Upress.png') }}" alt="Upress">
            <a href="https://your-link-to-upress.com" target="_blank">
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-center p-5">
                    <h5 class="text-2xl font-bold text-white">Upress Management System</h5>
                    <p class="text-gray-300 text-sm mt-2">Sleek, user-friendly websites aligned with your brand.</p>
                    <ul class="text-gray-300 text-sm mt-2 space-y-1">
                        <li>✔ Responsive design</li>
                        <li>✔ Strong brand presence</li>
                        <li>✔ User-focused approach</li>
                        <li>✔ Modern and clean aesthetics</li>
                    </ul>
                </div>
            </a>
        </div>

        <
        <div class="relative max-w-sm rounded-lg shadow-lg overflow-hidden group">
            <img class="w-full h-60 object-cover" src="{{ asset('Webprojects/Upress.png') }}" alt="Banking System">
            <a href="https://your-link-to-banking-system.com" target="_blank">
                <div class="absolute inset-0 bg-black bg-opacity-70 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-center p-5">
                    <h5 class="text-2xl font-bold text-white">Simple Banking System</h5>
                    <p class="text-gray-300 text-sm mt-2">Secure, scalable databases optimizing data flow.</p>
                    <ul class="text-gray-300 text-sm mt-2 space-y-1">
                        <li>🔹 Optimized for performance</li>
                        <li>🔹 Secure and scalable architecture</li>
                        <li>🔹 Efficient data management</li>
                    </ul>
                </div>
            </a>
        </div> --}}

    </div>
</div>

 
    



{{-- @include('components.projectcat') --}}
