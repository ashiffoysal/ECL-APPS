@extends('layouts.frontend')
@section('title', 'Events')
@section('content')
        <!-- Start Page Banner -->
        <div class="page-banner-area ">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Event</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Event</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Event Area -->
        <section class="event-area event-item-two pt-100 pb-70">
            <div class="container-fluid">
                <div class="row">
                    @foreach($allevents as $event)
                    <div class="col-lg-6">
                        <div class="event-box-item">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="event-image">
                                        <a href="{{ url('event/details/'.$event->id) }}"><img src="{{ asset('uploads/'.$event->image) }}" alt="image"></a>
                                    </div>
                                </div>
        
                                <div class="col-md-6">
                                    <div class="event-content">
                                        <h3>
                                            <a href="{{ url('event/details/'.$event->id) }}">Maths Olympiad</a>
                                        </h3>
                                        <p>{{ $event->title }}</p>
                                        <span>3-8 Months 8:00 AM - 11:00 PM</span>
                                    </div>
                                </div>
        
                                <div class="col-md-3">
                                    <div class="event-date">
                                        <h4>20</h4>
                                        <span>October</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                  
                </div>
            </div>
        </section>
        <!-- End Event Area -->
@endsection