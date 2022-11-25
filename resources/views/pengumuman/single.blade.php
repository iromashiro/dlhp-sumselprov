@extends('layouts.admin')
@section('content')
<div class="content-wrap">
    <div class="container clearfix">
        <div class="row gutter-40 col-mb-80">
            <!-- Post Content============================================= -->
            <div class="postcontent col-lg-12">
                <div class="single-post mb-0">
                    <!-- Single Post============================================= -->
                    <div class="entry clearfix">
                        <!-- Entry Title============================================= -->
                        <div class="entry-title mb-3">
                            <h2>{{ $content->judul }}</h2>
                        </div><!-- .entry-title end -->
                        <!-- Entry Meta============================================= -->
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> {{ $content->created_at }}</li>
                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                            </ul>
                        </div><!-- .entry-meta end -->
                        <!-- Entry Image============================================= -->
                        @if (empty($content->thumbnail))
                        <!-- NOTHING TO SHOW -->
                        @else
                        <div class="entry-image">
                            <a href="#"><img src="{{ URL::asset($content->thumbnail) }}"
                                    style="border-radius: 30px; height: 400px;"></a>
                        </div><!-- .entry-image end -->
                        @endif
                        <!-- Entry Content============================================= -->
                        <div class="entry-content mt-0">
                            {!! $content->isi_pengumuman !!}
                            <div class="clear"></div>
                            <!-- Post Single - Share============================================= -->
                            <div class="si-share border-0 d-flex justify-content-between align-items-center">
                                <span>Share this Post:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                </div>
                            </div><!-- Post Single - Share End -->
                        </div>
                    </div><!-- .entry end -->

                    <h4>Pengumuman Lainnya:</h4>

                    <div class="related-posts row posts-md col-mb-30">

                        @foreach ($berita as $b)
                        <div class="entry col-4 col-md-4">
                            <div class="grid-inner row align-items-center gutter-20">
                                <div class="col-4">
                                    <div class="entry-image">
                                        <a href="#"><img src="{{ URL::asset($b->thumbnail) }}" alt="Blog Single"></a>
                                    </div>
                                </div>
                                <div class="col-8">

                                    <div class="entry-title title-xs">
                                        <h3><a href="#">{{ $b->judul }}</a></h3>
                                    </div>

                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i> {{ $b->created_at }}</li>
                                            <li><a href="#"><i class="icon-user"></i> Admin</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="line"></div>
                </div>
            </div><!-- .postcontent end -->
        </div>
    </div>
</div>
@endsection
