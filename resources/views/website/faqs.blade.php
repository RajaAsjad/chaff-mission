@extends('layouts.website.master')
@section('content')
    <!-- BANNER SEC -->
    <section class="New_gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="iner-baner-head">
                            <h1>{{$banner[10]->name}}</h1>
                            <p class="extra-text">{{$banner[10]->short_description}}</p>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
    <!-- BANNER SEC -->
    <!-- FQA's HTML  -->
        <section class="FQAs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fqa-inner">
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <h1>FREQUENTLY ASKED QUESTIONS</h1>
                            <div id="accordion" class="accordion">
                                <div class="card mb-0">
                                    @foreach($faqs as $faq)
                                        @php $count=1 @endphp
                                            <div class="card-header" data-toggle="collapse" href="#{{$faq->id}}" aria-expanded="@if ($count ==1){{'true'}} @else{{'false'}}  @endif">
                                                <a class="card-title">
                                                    {{$faq->question}}
                                                </a>
                                            </div>
                                            <div id="{{$faq->id}}" class="card-body collapse @if ($count ==1){{'show'}}  @endif" data-parent="#accordion" >
                                                <p>{{$faq->answer}}</p>
                                            </div>
                                            <br>
                                        @php $count++ @endphp
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
     <!-- FQA's HTML  -->
    @endsection
