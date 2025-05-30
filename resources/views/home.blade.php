<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Skatcher Home Page</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased text-gray-800">
<body class="font-sans antialiased text-gray-800 bg-white">
  <!-- Top Bar Info -->
<div class="bg-[#252525] text-white text-sm w-full py-2 flex justify-between items-center px-6 md:px-36">
  <div class="flex flex-wrap items-center gap-6">
    <span class="flex items-center gap-2">📞 +(1600) 456 7890</span>
    <span class="flex items-center gap-2">✉ yourid@example.com</span>
    <span class="flex items-center gap-2">📍 123 Fifth Avenue, New York - 1060, USA.</span>
  </div>
  <div class="hidden sm:flex gap-4 text-white text-lg">
    <a href="#">G</a>
    <a href="#">F</a>
    <a href="#">T</a>
    <a href="#">L</a>
  </div>
</div>

<!-- Navbar -->
  <header class="bg-[#424242] text-white flex items-center justify-between py-4 w-full px-6 md:px-36">
    <div class="text-2xl font-bold flex items-center gap-2 text-white">
  <svg xmlns='http://www.w3.org/2000/svg' class='w-6 h-6 text-primary' fill='none' viewBox='0 0 24 24' stroke='currentColor'>
    <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 11c0-2.21 1.79-4 4-4s4 1.79 4 4a4 4 0 01-8 0z'/>
  </svg>
  <span>Skatcher</span>
</div>
    <nav class="hidden md:flex items-center gap-6">
      <a href="#" class="hover:text-primary">About</a>
      <a href="#" class="hover:text-primary">Services</a>
      <a href="#" class="hover:text-primary">Contact</a>
      <div class="flex items-center border border-gray-300 rounded-full px-4 py-1 bg-white">
        <input type="text" placeholder="Search Here" class="bg-transparent outline-none text-sm text-gray-600 placeholder-gray-400 w-32">
        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
      </div>
    </nav>
    <div class="md:hidden text-2xl cursor-pointer">&#9776;</div>
  </header>


<!-- Hero Section -->
<section class="bg-[#494949] pt-16">
  <div class="px-[40px] md:px-[140px] max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-2 items-center gap-10">
    <div class="space-y-6">
      <h1 class="text-white text-4xl md:text-5xl font-bold leading-tight">Discover Modern <br> Single Property</h1>
      <p class="text-white text-base md:text-lg max-w-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
      <div class="flex flex-col sm:flex-row gap-4">
        <button class="bg-[#A85C01] text-white px-8 py-3 rounded-md font-semibold shadow-md">Overview</button>
        <button class="border border-white text-white px-8 py-3 rounded-md font-semibold">Learn More</button>
      </div>
    </div>
    <div class="relative mt-10 md:mt-0">
      <img src="image1.jpg" alt="Hero Image" class="absolute inset-0 right-[-40px] md:right-[-80px] h-[550px] md:h-[620px] w-[calc(100%+80px)] object-cover rounded-xl z-0" />
      <div class="relative w-full h-[450px] md:h-[500px] z-10"></div>
      <button class="absolute top-1/2 right-0 -translate-y-1/2 w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center shadow-lg hover:scale-105 transition-transform">&gt;</button>
    </div>
  </div>
  <div class="bg-white text-black py-12 mt-[-1px]">
    <div class="px-[40px] md:px-[140px] max-w-[1440px] mx-auto grid grid-cols-2 md:grid-cols-4 text-center gap-8">
      <div class="flex flex-col items-center">
        <span class="text-3xl">📍</span>
        <p class="text-3xl font-bold text-primary">4.500</p>
        <p class="text-[#9ca3af]">Our Square Feets</p>
      </div>
      <div class="flex flex-col items-center">
        <span class="text-3xl">⭐</span>
        <p class="text-3xl font-bold text-primary">5.00</p>
        <p class="text-[#9ca3af]">Rates by 1.100</p>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="py-16">
  <div class="px-[40px] md:px-[140px] w-full max-w-[1440px] mx-auto flex flex-col md:flex-row items-center gap-10">
      <div class="md:w-1/2 order-1 md:order-1">
      <img src="image2.jpg" alt="About Image" class="w-full h-64 object-cover rounded" />
    </div>
    <div class="md:w-1/2 order-2 md:order-2">
        <p class="text-primary font-bold mb-2 text-[#A85C01]">About Us</p>
        <h2 class="text-2xl font-bold mb-4">Discover an Extraordinary Property With Us</h2>
        <p class="text-grayText mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
        <blockquote class="border-l-4 pl-4 italic text-sm text-gray-500">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</blockquote>
    </div>
  </div>
</section>

<!-- Provide Features -->
<section class="py-16">
  <div class="px-[40px] md:px-[140px] w-full max-w-[1440px] mx-auto flex flex-col md:flex-row items-center gap-10">
    <div class="md:w-1/2">
        <p class="text-primary font-bold mb-2 text-[#A85C01]">Provide</p>
        <h2 class="text-2xl font-bold mb-4">We Provide Many Features and Property Benefits</h2>
        <ul class="list-disc list-inside text-grayText space-y-2">
          <li>Lorem ipsum dolor sit amet</li>
          <li>Lorem ipsum dolor sit amet</li>
          <li>Lorem ipsum dolor sit amet</li>
        </ul>
    </div>
    <div class="md:w-1/2">
      <img src="image3.jpg" alt="Features Image" class="w-full h-64 object-cover rounded" />
    </div>
  </div>
</section>

<!-- Video Preview Section -->
<section class="bg-[#1E1E1E] text-white py-16">
  <div class="px-[40px] md:px-[140px] max-w-[1440px] mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-start mb-10 gap-6">
      <div class="md:w-1/2">
        <p class="text-sm font-semibold text-white mb-2">Overview</p>
        <h2 class="text-3xl font-bold leading-tight">See Our Property Benefits<br>by Preview Video Below</h2>
      </div>
      <div class="md:w-1/2 text-[#d1d5db] text-sm">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
      </div>
    </div>
    <div class="w-full h-64 bg-[#D1D5DB] rounded-lg flex items-center justify-center">
      <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center shadow-md">
        <span class="text-2xl text-gray-700">▶️</span>
      </div>
    </div>
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-10">
      <div>
        <h4 class="font-bold mb-2">Awesome Features</h4>
        <p class="text-[#d1d5db] text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
      </div>
      <div>
        <h4 class="font-bold mb-2">Luxury Property</h4>
        <p class="text-[#d1d5db] text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
      </div>
    </div>
  </div>
</section>

<!-- Benefit Cards & Feature Description Section -->
<section class="py-16 bg-white">
  <div class="px-[40px] md:px-[140px] max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
    <!-- Left Cards -->
    <div class="grid grid-cols-2 gap-6">
      <div class="bg-white border rounded-xl shadow-md p-6 flex flex-col items-start gap-3">
        <div class="w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center text-2xl">❄️</div>
        <div>
          <h4 class="font-bold text-sm mb-1">Air Conditioned</h4>
          <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <span class="text-primary text-sm">→</span>
      </div>
      <div class="bg-white border rounded-xl p-6 flex flex-col items-start gap-3">
        <div class="w-12 h-12 rounded-full border border-primary text-primary flex items-center justify-center text-2xl">📶</div>
        <div>
          <h4 class="font-bold text-sm mb-1">Free WiFi</h4>
          <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <span class="text-primary text-sm">→</span>
      </div>
      <div class="bg-white border rounded-xl p-6 flex flex-col items-start gap-3">
        <div class="w-12 h-12 rounded-full border border-primary text-primary flex items-center justify-center text-2xl">🏊</div>
        <div>
          <h4 class="font-bold text-sm mb-1">Swimming Pool</h4>
          <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <span class="text-primary text-sm">→</span>
      </div>
      <div class="bg-white border rounded-xl p-6 flex flex-col items-start gap-3">
        <div class="w-12 h-12 rounded-full border border-primary text-primary flex items-center justify-center text-2xl">📺</div>
        <div>
          <h4 class="font-bold text-sm mb-1">Television</h4>
          <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <span class="text-primary text-sm">→</span>
      </div>
    </div>
    <!-- Right Text Content -->
    <div>
      <p class="text-primary font-bold mb-2 text-[#A85C01]">Benefits</p>
      <h2 class="text-2xl md:text-3xl font-bold leading-snug mb-4">Explore More About<br> Our Property & Benefits</h2>
      <p class="text-gray-600 text-sm mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
      <div class="space-y-5">
        <div>
          <h4 class="font-bold">Awesome Features</h4>
          <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet. Cum sociis natoque.</p>
        </div>
        <div>
          <h4 class="font-bold">Luxurious Interior Design</h4>
          <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet. Cum sociis natoque.</p>
        </div>
        <div>
          <h4 class="font-bold">Modern Concept</h4>
          <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet. Cum sociis natoque.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Contact Form -->
<section class="py-16">
  <div class="px-[40px] md:px-[140px] w-full max-w-[1440px] mx-auto flex flex-col md:flex-row gap-10">
    <form class="md:w-1/2 space-y-4">
      <p class="text-primary font-bold text-[#A85C01]">Get in Touch</p>
        <h3 class="text-xl font-bold">Let Us Know by Sent Your Message</h3>
        <p class="text-grayText text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.</p>
        <input type="email" placeholder="Insert Your Email Address Here" class="w-full p-3 border rounded" />
        <textarea placeholder="Insert Your Message Here" class="w-full p-3 border rounded"></textarea>
        <button class="bg-[#A85C01] text-white px-6 py-2 rounded">Send Message</button>
    </form>
      <div class="md:w-1/2">
        <img src="image4.jpg" alt="Contact Image" class="w-full h-64 object-cover rounded" />
      </div>
  </div>
</section>

<!-- Newsletter -->
  <section class="bg-[#FAFAFA] py-12">
    <div class="px-[40px] md:px-[140px] max-w-[1440px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-6">
      <h3 class="text-xl font-bold text-gray-800">Subscribe to Our Newsletter</h3>
      <div class="flex w-full sm:w-auto">
        <input type="email" placeholder="E-mail Address" class="w-full sm:w-80 px-4 py-2 border border-gray-300 rounded-l-md outline-none" />
        <button class="bg-[#A85C01] text-white px-6 py-2 rounded-r-md">Subscribe</button>
      </div>
    </div>
  </section>

<!-- Footer -->
<footer class="bg-[#252525] text-white py-12">
  <div class="px-[40px] md:px-[140px] w-full max-w-[1440px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-sm">
    <div>
      <h4 class="font-bold mb-2">Skatcher</h4>
      <p class="text-[#9ca3af]">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div>
      <h4 class="font-bold mb-2">Company</h4>
      <ul class="text-[#9ca3af] space-y-1">
        <li>123 Avenue, New York</li>
        <li>+(1600) 456 7890</li>
        <li>yourid@example.com</li>
        <li>9:00 AM - 7:00 PM</li>
        <li>@officialpage</li>
      </ul>
    </div>
    <div>
      <h4 class="font-bold mb-2">Features</h4>
      <ul class="text-[#9ca3af] space-y-1">
        <li>Home</li>
        <li>About</li>
        <li>Provide</li>
        <li>Benefits</li>
        <li>Contact</li>
      </ul>
    </div>
    <div>
      <h4 class="font-bold mb-2">Help Center</h4>
      <ul class="text-[#9ca3af] space-y-1">
        <li>Call Center</li>
        <li>Official Pages</li>
        <li>Frequently Asked Question</li>
        <li>History Background</li>
        <li>Newsletter Subscription</li>
      </ul>
    </div>
  </div>
</footer>

<div class="bg-[#252525] text-center text-sm text-white py-4">
  © 2025 Skatcher. All Rights Reserved
</div>

</body>
</html>
