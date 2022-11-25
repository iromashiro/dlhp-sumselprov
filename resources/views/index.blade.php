@extends('layouts.front')
@section('content')
<section id="default-carousel" class="relative h-screen items-center justify-center text-center text-white py-0 px-3"
    data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="absolute video-docker top-0 left-0 w-full h-full overflow-hidden reveal">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <video class="w-full h-full absolute object-cover"
                src="{{ URL::asset('frontend/asset/header/LakefrontCabin.mp4') }}" type="video/mp4" playsinline autoplay
                muted loop></video>
            <span
                class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-white judul">
                DINAS LINGKUNGAN HIDUP <br> PROVINSI SUMATERA SELATAN
            </span>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ URL::asset('frontend/asset/images/banner/banner-1.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ URL::asset('frontend/asset/images/banner/banner-2.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ URL::asset('frontend/asset/images/banner/banner-3.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ URL::asset('frontend/asset/images/banner/banner-4.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 6 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ URL::asset('frontend/asset/images/banner/banner-5.jpg') }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
            data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
            data-carousel-slide-to="4"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 6"
            data-carousel-slide-to="5"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</section>
<!-- HEADER -->

<!-- SAMBUTAN -->
<section class="w-full relative bg-white reveal">
    <svg class="w-64 fill-current text-gray-200 absolute left-0 rotate-45 transform top-1/2 2xl:opacity-50 lg:opacity-20 lg:block hidden -translate-y-1/2 -mt-20 -translate-x-1/2"
        viewBox="0 0 280 364" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M266 84h-91c-7 0-14 0-14-7 0-14 14-21 14-42S161 0 140 0s-35 14-35 35 14 28 14 42c0 7-7 7-14 7H14C0 84 0 84 0 98v91c0 7 0 14 7 14 14 0 21-14 42-14s35 14 35 35-14 35-35 35-28-14-42-14c-7 0-7 7-7 14v91c0 14 0 14 14 14h91c7 0 14 0 14-7 0-14-14-21-14-42s14-35 35-35 35 14 35 35-14 28-14 42c0 7 7 7 14 7h91c14 0 14 0 14-14v-91c0-7 0-14-7-14-14 0-21 14-42 14s-35-14-35-35 14-35 35-35 28 14 42 14c7 0 7-7 7-14V98c0-14 0-14-14-14Z"
            class=""></path>
    </svg>
    <svg class="w-full max-w-sm fill-current text-gray-200 absolute right-0 transform top-1/2 2xl:opacity-50 lg:opacity-20 lg:block hidden -translate-y-1/2 -mt-20 translate-x-1/2"
        viewBox="0 0 420 402" height="402" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M1.94 169.17s61.531-81.707 97.859-63.734c36.348 17.973-7.246 48.914 27.965 65.082 35.191 16.172 88.34-4.008 76.578-50.734s-32.656-13.578-48.965-38.641C139.033 56.083 235.615.819 235.615.819s58.816 116.39 75.531 85.94c20.246-36.835 55.859-74.636 92.836-17.937 0 0 31.727 42.211 4.305 60.094-27.422 17.887-51.047 7.754-61.355 27.176-10.254 19.461 66.219 71.629 66.219 71.629s-52.273 84.191-86.203 62.109c-33.934-22.102 6.195-58.887-45.57-69.824-22.539-4.008-60.164 9.433-66.797 41.195-2.274 47.406 28.07 35.367 48.844 60.883 20.844 25.461-78.363 79.117-78.363 79.117s-27.719-68.723-66.691-81.426c-38.973-12.758-15.629 37.555-51.047 44.152-35.422 6.93-84.281-41.93-60.551-83.754 23.78-41.93 57.328-.805 60.234-34.125 3.007-33.707-65.066-76.879-65.066-76.879l-.001.001Z"
            class=""></path>
    </svg>
    <div class="flex max-w-7xl lg:flex-row flex-col px-10 relative mx-auto py-12 lg:py-32">
        <div class="lg:w-1/2 w-full lg:max-w-none max-w-2xl mx-auto relative flex items-start justify-center flex-col">
            <div class="relative">

            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold mb-6 relative">Sambutan Kepala Dinas<br></h1>
            <div class="relative">
            </div>
            <p class="text-gray-500 text-xl lg:max-w-md text-justify">Assalamualaikum Wr. Wb.br <br>
                Selamat datang di website resmi kami Dinas Lingkungan Hidup Provinsi
                Sumatera Selatan.
                Melalui website ini diharapkan masyarakat mendapatkan informasi mengenai lingkungan hidup
                yang dilakukan oleh DLH Prov. Sumsel.<br></p>

        </div>
        <div class="lg:w-1/2 w-full lg:max-w-none max-w-2xl mx-auto lg:pt-0 pt-16 lg:pl-10 xl:pl-0">
            <img src="{{ URL::asset('frontend/asset/images/kadis.png') }}" class="">
        </div>
    </div>
</section>
<!-- SAMBUTAN -->

<!-- TITLE -->
<section class="h-auto bg-green-400 reveal">
    <div class="px-10 py-24 mx-auto max-w-7xl">
        <div class="w-full mx-auto text-left md:text-center">
            <h1
                class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-900 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight">
                &nbsp; <span class="w-full bg-gradient-to-r bg-clip-text  text-transparent
                from-indigo-200 via-purple-900 to-indigo-500
                animate-text">Lingkungan
                    Yang Bersih adalah Lingkungan Yang Sehat</span> <br></h1>
            <p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24 tails-relative">Dengan tidak membuang
                sampah sembarangan, anda sudah membantu menciptakan lingkungan yang bersih dan terhindar dari
                bencana banjir.<br></p>
        </div>
    </div>
</section>
<!-- TITLE -->

<!-- BERITA -->
<section class="relative w-full bg-white reveal">
    <div class="relative w-full px-5 py-10 mx-auto sm:py-12 md:py-16 md:px-10 max-w-7xl">

        <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900 lg:text-5xl xl:text-6xl sm:mb-3"><a href="#_"
                class="">Berita</a></h1>
        <p class="text-lg font-medium text-gray-500 sm:text-2xl">Kegiatan Terbaru dari kami.<br></p>

        <div class="flex grid h-full grid-cols-12 gap-5 pb-10 mt-8 sm:mt-16">
            @foreach ($berita as $b)
            <div
                class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                <a href="{{ route('berita.single', $b->slug) }}"
                    class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110"
                    style="background-image:url({{URL::asset($b->thumbnail)}})">
                </a>
                <div class="relative z-20 w-full h-auto py-8 text-white bg-green-500 border-t-0 border-yellow-200 px-7">
                    <a href="{{ route('berita.single', $b->slug) }}"
                        class="inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-purple-500 bg-white">Berita</a>
                    <h2 class="mb-5 text-5xl font-bold"><a href="{{ route('berita.single', $b->slug) }}" class="">
                            {{Str::limit($b->judul, 12) }}</a></h2>
                    <p class="mb-2 text-lg font-normal text-white opacity-100">
                        {{ strip_tags(Str::limit($b->isi_berita, 50)) }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- BERITA -->

<!-- LINK TERKAIT -->
<section class="py-20 bg-green-400 reveal">
    <div class="flex flex-col items-start px-10 mx-auto space-y-20 lg:space-y-0 lg:flex-row max-w-7xl">

        <div
            class="flex flex-col justify-center flex-shrink-0 w-full h-full max-w-lg space-y-5 text-gray-800 lg:max-w-none lg:w-5/12 xl:w-6/12">
            <div class="flex items-center space-x-5 text-blue-500" data-primary="blue-500">
                <div class="w-20 h-0.5 bg-blue-500" data-primary="blue-500"></div>
                <p class="text-sm font-bold tracking-wide uppercase">DLH Provinsi Sumatera Selatan<br></p>
            </div>
            <h2 class="text-4xl font-black xl:text-5xl">Link<br>Terkait<br></h2>
            <div
                class="relative flex flex-col items-start w-full space-y-5 sm:items-center sm:flex-row sm:space-y-0 sm:space-x-3">

                <a href="#_" class="flex items-center px-2 py-2 space-x-3 text-base font-bold hover:underline">


                </a>
            </div>
        </div>

        <div class="max-w-lg lg:max-w-none lg:w-7/12 lg:pl-8 xl:w-6/12">
            <div class="grid grid-cols-3 text-gray-400 gap-x-12 gap-y-16">
                <a href="#_" class="flex items-center justify-center hover:text-gray-600">
                    <svg class="w-auto h-10 fill-current sm:h-14" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 2428 880">
                        <defs></defs>
                        <g fill-rule="nonzero">
                            <a href="#"><img src="{{URL::asset('frontend/logo_jalan/sipd.jpg')}}" alt="Clients"></a>
                        </g>
                    </svg>
                </a>
                <a href="#_" class="flex items-center justify-center hover:text-gray-600">
                    <svg class="w-auto fill-current h-7 sm:h-9" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 2500 676">
                        <defs></defs>
                        <a href="#"><img src="{{URL::asset('frontend/logo_jalan/LAPORSP4N.jpeg')}}" alt="Clients"></a>
                    </svg>
                </a>
                <a href="#_" class="flex items-center justify-center hover:text-gray-600">
                    <svg class="w-auto h-5 fill-current sm:h-6" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 2500 563">
                        <defs></defs>
                        <a href="#"><img src="{{URL::asset('frontend/logo_jalan/logo-ppid.png')}}" alt="Clients"></a>
                    </svg>
                </a>
                <a href="#_" class="flex items-center justify-center hover:text-gray-600">
                    <svg class="w-auto h-8 fill-current sm:h-10" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 2158 1259">
                        <defs></defs>
                        <g fill-rule="nonzero">
                            <a href="#"><img src="{{URL::asset('frontend/logo_jalan/logo-simata.png')}}"
                                    alt="Clients"></a>
                        </g>
                    </svg>
                </a>
                <a href="#_" class="flex items-center justify-center hover:text-gray-600">
                    <svg class="w-auto h-4 fill-current sm:h-6" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 2501 351">
                        <defs></defs>
                        <a href="#"><img src="{{URL::asset('frontend/logo_jalan/852e8-sirup.png')}}" alt="Clients"></a>
                    </svg>
                </a>
                <a href="#_" class="flex items-center justify-center hover:text-gray-600">
                    <svg class="w-auto h-6 fill-current sm:h-8" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 2501 1022">
                        <defs></defs>
                        <g fill-rule="nonzero" stroke-width=".5">
                            <a href="#"><img src="{{URL::asset('frontend/logo_jalan/klhk.jpg')}}" height="100px"
                                    alt="Clients"></a>
                        </g>
                    </svg>
                </a>

            </div>
        </div>

    </div>
</section>
<!-- LINK TERKAIT -->
@endsection
