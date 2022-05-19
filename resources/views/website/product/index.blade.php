@extends('layouts.website.master')
@section('content')
    <!-- BANNER SEC -->
    <section class="rentals-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iner-baner-head">
                        <h1>Rentals / Recreational vehicle (RV)</h1>
                        <p class="extra-text">Home > Rentals / Recreational vehicle(RV)</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alion.</p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SEC -->
    <!-- RENTAL TYPE SEC -->
    <section class="rental-types">
        <div class="container">
            <div class="row gallery-expand-buttons">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#rental" role="tab">RENTALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#property" role="tab">PROPERTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#r-v" role="tab">Recreational vehicle (RV)</a>
                    </li>
                </ul>
            </div>
            <div class="row gallery-expands">
                <div class="col-md-12">
                    <div class="tab-content for-new-gallery">
                        <div class="tab-pane active row" id="rental" role="tabpanel">
                            <div class="row rental-deals">
                                @foreach($rentals as $rental)
                                    <div class="col-md-4">
                                        <div class="dealz-box">
                                            <div class="dealz-box-img">
                                                <img src="{{ asset('public/admin/assets/products/thumbnails') }}/{{$rental->thumbnail}}" alt="">
                                            </div>
                                            <div class="dealz-box-content">
                                                <div class="dealz-box-heading">
                                                    <h3>{{ $rental->name }}</h3>
                                                    <img src="{{ asset('public/assets/website/images/new-starz.png') }}" alt="">
                                                </div>
                                                <div class="dealz-box-description">
                                                    <p>{!! $rental->description !!}</p>
                                                </div>
                                                <div class="dealz-box-price">
                                                    <div class="pricess">
                                                        <span>${{ number_format($rental->rent_per_day, 1) }}</span>
                                                    </div>
                                                    <div class="other-info-deals">
                                                        <div class="pro-detailz">
                                                            <img src="{{ asset('public/assets/website/images/car-seats.png') }}" alt="">
                                                            <span>{{ $rental->hasProductDetails->seats }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dealz-box-button">
                                                <a href="{{ route('rentals.single', $rental->slug) }}" class="dealz-box-a">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane  row" id="property" role="tabpanel">
                            <div class="row property-deal">
                                @foreach($models as $model)
                                    <div class="col-md-4">
                                        <div class="dealz-box">
                                            <div class="dealz-box-img">
                                                <img src="{{ asset('public/admin/assets/products/thumbnails') }}/{{$model->thumbnail}}" alt="">
                                            </div>
                                            <div class="dealz-box-content">
                                                <div class="dealz-box-heading">
                                                    <h3>{{ $model->name }}</h3>
                                                    <img src="{{ asset('public/assets/website/images/new-starz.png') }}" alt="">
                                                </div>
                                                <div class="dealz-box-description">
                                                    <p>{!! $model->description !!}</p>
                                                </div>
                                                <div class="dealz-box-price">
                                                    <div class="pricess">
                                                        <span>${{ number_format($model->rent_per_day, 1) }}</span>
                                                    </div>
                                                    <div class="other-info-deals">
                                                        <div class="pro-detailz">
                                                            <img src="{{ asset('public/assets/website/images/washrooms-img.png') }}" title="Bathroom" alt="">
                                                            <span>{{ $model->hasProductDetails->bathrooms }}</span>
                                                        </div>
                                                        <div class="pro-detailz">
                                                            <img src="{{ asset('public/assets/website/images/beds.png') }}" title="Bed" alt="">
                                                            <span>{{ $model->hasProductDetails->beds }}</span>
                                                        </div>
                                                        <div class="pro-detailz">
                                                            <img src="{{ asset('public/assets/website/images/beds.png') }}" title="Room" alt="">
                                                            <span>{{ $model->hasProductDetails->rooms }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dealz-box-button">
                                                <a href="" class="dealz-box-a">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane row" id="r-v" role="tabpanel">
                            <div class="row rental-deals">
                                @foreach($rvs as $rv)
                                    <div class="col-md-4">
                                        <div class="dealz-box">
                                            <div class="dealz-box-img">
                                                <img src="{{ asset('public/admin/assets/products/thumbnails') }}/{{$rv->thumbnail}}" alt="">
                                            </div>
                                            <div class="dealz-box-content">
                                                <div class="dealz-box-heading">
                                                    <h3>{{ $rv->name }}</h3>
                                                    <img src="{{ asset('public/assets/website/images/new-starz.png') }}" alt="">
                                                </div>
                                                <div class="dealz-box-description">
                                                    <p>{!! $rv->description !!}</p>
                                                </div>
                                                <div class="dealz-box-price">
                                                    <div class="pricess">
                                                        <span>${{ number_format($rv->rent_per_day) }}</span>
                                                    </div>
                                                    <div class="other-info-deals">
                                                        <div class="pro-detailz">
                                                            <img src="{{ asset('public/assets/website/images/car-seats.png') }}" alt="">
                                                            <span>{{ $rv->hasProductDetails->seats }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dealz-box-button">
                                                <a href="" class="dealz-box-a">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row justify-content-center row-load-more for-deal-margin">
                            <a href="" class="load-more">Load more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RENTAL TYPE SEC -->
    @endsection

    @push('js')
     <script>
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var pageurl = $('#page_url_rental').val();
            var page = $(this).attr('href').split('page=')[1];
            fetchAll(pageurl, page);
        });
        function fetchAll(pageurl, page){
            $.ajax({
                url:pageurl+'?page='+page,
                type: 'get',
                success: function(response){
                    $('#body').html(response);
                }
            });
        }
    </script>
    @endpush
