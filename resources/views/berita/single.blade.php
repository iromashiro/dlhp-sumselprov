@extends('layouts.front')
@section('content')
<section class="relative bg-white">
    <div class="pt-20">
        <div class="px-10 md:px-4 mx-auto mb-16">
            <div class="mx-auto text-left md:text-center max-w-3xl">
                <h2 class="mb-6 text-4xl lg:text-5xl font-bold">
                    <a href="#_" class="hover:underline">{{ $content->judul }}</a>
                </h2>
                <div class="flex items-center md:justify-center">
                    <div class="mr-6">
                        <img class="w-12 h-12 object-cover rounded-full"
                            src="https://cdn.devdojo.com/images/february2022/frank.png" alt="">
                    </div>
                    <div class="flex items-start flex-col">
                        <h3 class="text-xl font-bold">
                            <a href="#_" class="hover:underline">Admin</a>
                        </h3>
                        <p class="text-sm text-gray-500">Tanggal : {{ $content->created_at->format('d F Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative reveal" style="height:700px">

            @if (empty($content->thumbnail))
            <!-- NOTHING TO SHOW -->
            @else
            <img class="w-full h-full object-cover object-top tails-relative"
                src="{{ URL::asset($content->thumbnail) }}" alt="">
            @endif
        </div>
    </div>
    <div class="pt-20 reveal">
        <div class="px-10 md:px-4 mx-auto mb-16">
            <div class="mx-auto md:text-left max-w-3xl">

                <p class="text-gray-500 text-xl mb-10">
                    {!! $content->isi_berita !!}
                </p>

            </div>
        </div>
    </div>
</section>

<section class="w-full py-8 bg-white sm:py-12 md:py-16">
    <div class="px-10 mx-auto max-w-7xl">
        <div class="flex items-center justify-between w-full pb-5 mb-8 border-b border-gray-200">
            <h2 class="text-3xl font-bold text-gray-800">Berita Lainnya<br></h2>
            <a href="{{ route('berita.index') }}"
                class="flex items-center text-base font-semibold text-blue-400 hover:text-blue-500 group">
                <span>Selengkapnya</span>
                <svg class="w-4 h-4 mt-0.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-12 gap-6">

            @foreach ($berita as $b)
            <div class="relative col-span-12 mb-10 space-y-4 md:col-span-6 lg:col-span-4 {{ $b->slug }}">
                <a href="{{ route('berita.single', $b->slug) }}"
                    class="relative block w-full h-64 overflow-hidden rounded">
                    <img class="object-cover object-center w-full h-full transition duration-500 ease-out transform scale-100 hover:scale-105"
                        src="{{ URL::asset($b->thumbnail) }}">
                </a>
                <p class="text-xs font-bold text-gray-400 uppercase">Berita</p>
                <a href="#_" class="block text-2xl font-medium leading-tight text-gray-700 hover:text-gray-900">
                    {!! Str::limit($b->judul, 20) !!}</a>
            </div>
            @endforeach

        </div>

    </div>
</section>
@endsection

@section('js')
<script>
    @foreach ($berita as $b)
        ScrollReveal().reveal('.{{ $b->slug }}', { delay: {{ 1 + $loop->index }}000 });
    @endforeach
</script>
@endsection
