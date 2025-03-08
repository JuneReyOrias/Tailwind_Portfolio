<div class=" mb-8 bg-gradient-to-r from-zinc-800  to-zinc-600 pb-8" data-animate>
  
  <br>  <!-- Title -->
    <p class="mb-4  text-2xl  tracking-tight text-center text-white opacity-90">
        These are the technologies I've worked with and continue to refine on my learning journey
    </p>

    <!-- Category Buttons -->
    <div class="flex items-center justify-center py-4 md:py-8 flex-wrap" id="Project" data-animate>
        <button type="button" data-filter="all"
            class="filter-btn active text-blue-700 hover:text-white border border-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3">
            All Categories
        </button>
        <button type="button" data-filter="webDev"
            class="filter-btn text-white border border-white hover:border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3">
            Web Dev
        </button>
        <button type="button" data-filter="design"
            class="filter-btn text-white border border-white hover:border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3">
            Design
        </button>
        <button type="button" data-filter="API"
            class="filter-btn text-white border border-white hover:border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3">
            API
        </button>
    </div>

    <!-- Project Grid -->
    <div class="grid grid-cols-3 md:grid-cols-3 place-items-center" id="categories" data-animate>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/html-removebg-preview.png" alt="Web Dev">
        </div>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/csss-removebg-preview.png" alt="Web Dev">
        </div>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/js-removebg-preview.png" alt="Web Dev">
        </div>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/tailwind-removebg-preview.png" alt="Web Dev">
        </div>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/python-removebg-preview.png" alt="Web Dev">
        </div>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/django-removebg-preview.png" alt="Web Dev">
        </div>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/react-removebg-preview.png" alt="Web Dev">
        </div>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/bootstrap-removebg-preview.png" alt="Web Dev">
        </div>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/php-removebg-preview.png" alt="Web Dev">
        </div>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/laravel-removebg-preview.png" alt="Web Dev">
        </div>
        <div class="category-item  p-2 flex justify-center items-center webDev">
            <img class="w-40 h-40 object-contain" src="/Webprojects/mysql-removebg-preview.png" alt="Web Dev">
        </div>

   
        <div class="category-item  p-2 flex justify-center items-center design">
            <img class="w-40 h-40 object-contain" src="/Webprojects/figma-removebg-preview.png" alt="Design">
        </div>
        <div class="category-item  p-2 flex justify-center items-center design">
            <img class="w-40 h-40 object-contain" src="/Webprojects/xd-removebg-preview.png" alt="Design">
        </div>
        <div class="category-item  p-2 flex justify-center items-center design">
            <img class="w-40 h-40 object-contain" src="/Webprojects/Canvas-removebg-preview.png" alt="Design">
        </div>
        <div class="category-item  p-2 flex justify-center items-center design">
            <img class="w-40 h-40 object-contain" src="/Webprojects/Adobe-removebg-preview.png" alt="Design">
        </div>
        <div class="category-item  p-2 flex justify-center items-center API">
            <img class="w-40 h-40 object-contain" src="/Webprojects/GoogleAPI.jpg" alt="API">
        </div>
      
    </div>
</div>
<hr>
<!-- JavaScript for Filtering -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".filter-btn");
        const items = document.querySelectorAll(".category-item");

        buttons.forEach(button => {
            button.addEventListener("click", function () {
                // Remove active class from all buttons
                buttons.forEach(btn => btn.classList.remove("active", "bg-blue-700", "text-white"));
                this.classList.add("active", "bg-blue-700", "text-white");

                const filter = this.getAttribute("data-filter");

                items.forEach(item => {
                    if (filter === "all" || item.classList.contains(filter)) {
                        item.style.display = "flex";  // Show items
                    } else {
                        item.style.display = "none";  // Hide items
                    }
                });
            });
        });
    });
</script>