@extends('layouts.website.master')
@section('content')
    <!-- BANNER SEC -->
    <section class="rentals-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="iner-baner-head">
                        <h1>Properties / Rentals / Rvs</h1>
                        <p class="extra-text">Home > Properties / Rentals / Rvs</p>
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
                        <a class="nav-link" data-toggle="tab" href="#r-v" role="tab">R.V</a>
                    </li>
                </ul>
            </div>
            <div class="row gallery-expands">
                <div class="col-md-12">
                    <div class="tab-content for-new-gallery">
                        <div class="tab-pane active row" id="rental" role="tabpanel">
                            <div class="row rental-deals">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- RENTAL TYPE SEC -->
    @endsection

    @push('js')
    @endpush
