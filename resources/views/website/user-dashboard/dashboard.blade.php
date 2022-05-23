@extends('layouts.user.app')

@section('title', $page_title)
@push('css')
  <style>
    .info-box-text{
      color: #4172a5 !important
    }
  </style>
@endpush
@section('content')
  <section class="content-header">
    <h1 style="color:#000 !important;">Dashboard</h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Team Members</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Categories</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Blogs</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Services</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Testimonials</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa fa-hand-o-right"></i></span>
          <div class="info-box-content" style="background: #ddd1d142 !important;">
            <span class="info-box-text" style="color: #000 !important;">Total Packages</span>
            <span class="info-box-number" style="color: #000 !important;font-weight: 600;">0</span>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
