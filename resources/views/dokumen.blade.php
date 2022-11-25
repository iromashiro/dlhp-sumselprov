@extends('layouts.admin')
@section('content')
<div class="content-wrap">
    <div class="container clearfix">

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        SOP
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        @foreach ($dokumen_1 as $ga)
                        @foreach ($ga->children as $gb)
                        <div class="row">
                            <div class="col-md-10">
                                {{ $gb->nama_menu }}
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-success" href="{{ Storage::url($gb->path) }}" target="_blank"
                                    class="button-primary" download>Download
                                </a>
                            </div>
                        </div><br>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Lakip
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        @foreach ($dokumen_2 as $ga)
                        @foreach ($ga->children as $gb)
                        <div class="row">
                            <div class="col-md-10">
                                {{ $gb->nama_menu }}
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-success" href="{{ Storage::url($gb->path) }}" target="_blank"
                                    class="button-primary" download>Download
                                </a>
                            </div>
                        </div><br>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Renstra
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        @foreach ($dokumen_3 as $ga)
                        @foreach ($ga->children as $gb)
                        <div class="row">
                            <div class="col-md-10">
                                {{ $gb->nama_menu }}
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-success" href="{{ Storage::url($gb->path) }}" target="_blank"
                                    class="button-primary" download>Download
                                </a>
                            </div>
                        </div><br>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                        DPA
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        @foreach ($dokumen_4 as $ga)
                        @foreach ($ga->children as $gb)
                        <div class="row">
                            <div class="col-md-10">
                                {{ $gb->nama_menu }}
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-success" href="{{ Storage::url($gb->path) }}" target="_blank"
                                    class="button-primary" download>Download
                                </a>
                            </div>
                        </div><br>
                        @endforeach
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
