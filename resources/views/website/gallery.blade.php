@extends('layouts.website.master')
@section('content')
<!-- BANNER SEC -->
    <section class="New_gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iner-baner-head">
                        <h1>GALLERY</h1>
                        <p class="extra-text">Home > Gallery</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
<!-- BANNER SEC -->
<!-- VICTUAL TOUR  -->
    <section class="new-gallery-images">
        <div class="container">
            <div class="row gallery-expand-buttons">
                <ul class="nav nav-tabs" role="tablist">
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-1" role="tab">PROPERTIES</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-2" role="tab">RENTALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Recreational vehicle (RV)</a>
                    </li>
                </ul>
            </div>
            <div class="row gallery-expands">
                <div class="col-md-12">
                    <!-- Tab panes -->
                    <div class="tab-content for-new-gallery">
                        <div class="tab-pane  row" id="tabs-1" role="tabpanel">
                            @foreach($models1 as $model)
                                <div class="col-md-4"><div class="inner-gallery-folder"><img src="{{ asset('public/admin/assets/images/gallery') }}/{{$model->image}}" style="height: 250px;" alt=""></div></div>
                            @endforeach
                        </div>
                        <div class="tab-pane active row" id="tabs-2" role="tabpanel">
                            @foreach($models2 as $model)
                                <div class="col-md-4"><div class="inner-gallery-folder"><img src="{{ asset('public/admin/assets/images/gallery') }}/{{$model->image}}" style="height: 250px;" alt=""></div></div>
                            @endforeach
                        </div>
                        <div class="tab-pane row" id="tabs-3" role="tabpanel">
                            @foreach($models3 as $model)
                                <div class="col-md-4"><div class="inner-gallery-folder"><img src="{{ asset('public/admin/assets/images/gallery') }}/{{$model->image}}" style="height: 250px;" alt=""></div></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center row-load-more">
                <a href="" class="load-more">Load more</a>
            </div>
        </div>
    </section>
<!-- VICTUAL TOUR  -->
@endsection
