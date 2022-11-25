<!DOCTYPE html>
<!-- MADE WITH LOVE FROM EVERLASTING TECHNOLOGY -->
<!-- FOR BUSINESS INQUIRY PLEASE CONTACT US -->
<!-- https://www.everlasting.co.id -->
<html lang="en">

<head>
    <!-- MADE WITH LOVE FROM EVERLASTING TECHNOLOGY -->
    <!-- FOR BUSINESS INQUIRY PLEASE CONTACT US -->
    <!-- https://www.everlasting.co.id -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DLH Provinsi Sumatera Selatan</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('frontend/logo_jalan/sumsel_logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
            'animation': {
            'text':'text 5s ease infinite',
            },
            'keyframes': {
            'text': {
            '0%, 100%': {
            'background-size':'200% 200%',
            'background-position': 'left center'
            },
            '50%': {
            'background-size':'200% 200%',
            'background-position': 'right center'
            }
            },
            }
            },
          }
        }
    </script>
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/index.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/news.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/content.css') }}">
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script>
        ScrollReveal({ duration: 3000 })
    </script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
</head>

<body>

    @include('layouts.menu')

    @yield('content')

    <!-- FOOTER -->
    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <p class="mt-8 text-base leading-6 text-center text-gray-400">
                &copy; 2022 DLH Provinsi Sumatera Selatan All rights reserved.
            </p>
        </div>
    </section>
    <!-- FOOTER -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/4.0.9/scrollreveal.min.js" defer></script>
    <script src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js" defer></script>
    <script>
        ScrollReveal().reveal('.reveal');
        ScrollReveal().reveal('.judul', { delay: 2000 });
    </script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    <script>
        // Grab HTML Elements
    	const btn = document.querySelector(".mobile-menu-button");
    	const menu = document.querySelector(".mobile-menu");

    	// Add Event Listeners
    	btn.addEventListener("click", () => {
    	menu.classList.toggle("hidden");
    	});
    </script>
    @yield('js')
</body>

</html>
