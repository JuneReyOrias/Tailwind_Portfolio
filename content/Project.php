<!-- #Projects codeflows -->  
<div class="bg-gradient-to-r from-zinc-800 to-zinc-600 p-6 flex flex-col justify-center" id="ProjectWeb" data-animate>
    <h1 class="text-3xl font-bold text-center text-white mb-6">Projects</h1>

    <!-- Responsive Card Grid -->
   <!-- 1st Column  -->
    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4" data-animate>
      
        <!-- Project Card -->
        <div class="relative max-w-sm rounded-lg shadow-lg overflow-hidden group">
            <img class="w-full h-60 object-cover" src="/Webprojects/ZamboAgrimap.png" alt="Agri-Map">
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
            <img class="w-full h-60 object-cover" src="/Webprojects/Upress.png" alt="Upress">
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
        <img class="w-full h-60 object-cover" src="/Webprojects/SimpleBankingSystem.png" alt="Banking System">

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

    <!-- 2nd Column  -->

   <!-- <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      
       
        <div class="relative max-w-sm rounded-lg shadow-lg overflow-hidden group">
            <img class="w-full h-60 object-cover" src="/Webprojects/ZamboAgrimap.png" alt="Agri-Map">
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
        </div> 

    </div> -->
</div>