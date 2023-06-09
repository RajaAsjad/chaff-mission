@extends('layouts.admin.app')

@section('title', $page_title)
@push('css')
  <style>
    .info-box-text{
      color: #e22727 !important;
    }
    span.info-box-icon i {
        color: #960000 !important;
    }
    span.info-box-icon i:hover {
        color: #e22727 !important;
    }
  </style>
@endpush
@section('content')
  <section class="content-header">
    <h1>Dashboard</h1>
  </section>

  <section class="content">
    <div class="row">
		<a href="{{ route('paragon.index') }}" style="pointer:cursor;">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="info-box">
				  <span class="info-box-icon" style="background-color: #080808 !important"><i class="fa fa-address-book"></i></span>
				  <div class="info-box-content">
					<span class="info-box-text">Total Paragon Logistics Data</span>
					<span class="info-box-number" style="color: #d1ad3f !important">{{$total_paragon}}</span>
				  </div>
				</div>
			</div>
		</a>
		<a href="{{ route('express.index') }}" style="pointer:cursor;">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="info-box">
				  <span class="info-box-icon" style="background-color: #080808 !important"><i class="fa fa-address-book"></i></span>
				  <div class="info-box-content">
					<span class="info-box-text">Total Express Shipping Data</span>
					<span class="info-box-number" style="color: #d1ad3f !important">{{$total_express}}</span>
				  </div>
				</div>
			</div>
		</a>
		<a href="{{ route('skyway.index') }}" style="pointer:cursor;">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="info-box">
				  <span class="info-box-icon" style="background-color: #080808 !important"><i class="fa fa-address-book"></i></span>
				  <div class="info-box-content">
					<span class="info-box-text">Total Skyway Shipping Data</span>
					<span class="info-box-number" style="color: #d1ad3f !important">{{$total_skyway}}</span>
				  </div>
				</div>
			</div>
		</a>
		<a href="{{ route('mass.index') }}" style="pointer:cursor;">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="info-box">
				  <span class="info-box-icon" style="background-color: #080808 !important"><i class="fa fa-address-book"></i></span>
				  <div class="info-box-content">
					<span class="info-box-text">Total Mass Shipping Data</span>
					<span class="info-box-number" style="color: #d1ad3f !important">{{$total_mass}}</span>
				  </div>
				</div>
			</div>
		</a>
		<a href="{{ route('six_star.index') }}" style="pointer:cursor;">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="info-box">
				  <span class="info-box-icon" style="background-color: #080808 !important"><i class="fa fa-address-book"></i></span>
				  <div class="info-box-content">
					<span class="info-box-text">Total Six Star Logistics Data</span>
					<span class="info-box-number" style="color: #d1ad3f !important">{{$total_sixStar}}</span>
				  </div>
				</div>
			</div>
		</a>
    </div>
  </section>
@endsection
