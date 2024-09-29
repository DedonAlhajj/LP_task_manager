@extends('layouts.master')
@section('title', 'create New Subtask'  )
@section('content')

    <div class="header fixed-top line-bt">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn"><i class="icon-back"></i></a>
        </div>
        <h5>Create New Subtask</h5>
        <div class="right">
            <a href="javascript:void(0);" class="icon act-suggest"><i class="icon-check"></i></a>
            <a href="javascript:void(0);" class="icon"><i class="icon-more"></i></a>
        </div>
    </div>
    <div class="app-content style-2">
        <div class="tf-container">
            <x-dashboard.alert />
            <form action="{{ route('checklists.store',$task->id) }}" method="POST">
                @csrf
            <div class="mt-24">
                <h6 class="text-black-2">Sub Task Name</h6>
                <input type="text" name="title" id="name" placeholder="Wireframe for NFT Landing Page" class="mt-16">
            </div>



            <div class="footer-fixed button">
                <button class="tf-btn primary" id="submit-btn"  type="submit">Done</button>
            </div>
            </form>
        </div>
    </div>
    @push('style')
    <link rel="stylesheet"type="text/css" href="{{asset('assets/css/nouislider.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet"type="text/css" href="{{asset('assets/css/styles.css')}}"/>
    @endpush

    @push('js')
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>

    <script type="text/javascript" src="{{asset('assets/js/calendar-custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        new MultiSelectTag('countries')  // id
      </script>



         @endpush

@endsection

