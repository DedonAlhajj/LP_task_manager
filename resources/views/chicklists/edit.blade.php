@extends('layouts.master')
@section('title', 'create New Subtask'  )
@section('content')

{{-- @dd(in_array(34, $task->users->pluck('id')->toArray())) --}}
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
            <form action="{{ route('checklists.update', ['task' => $task->id, 'checklist' => $checklist->id]) }}" method="POST">
                @csrf
                @method('PUT')
            <div class="mt-24">
                <h6 class="text-black-2">Sub Task Title</h6>
                <input type="text" name="name" id="name" value="{{ $checklist->title }}" class="input-text" placeholder="Enter Task Name">
            </div>
            <div class="mt-20 list-desc-project-style2">
                <h6 class="left text-black-2">Task Status </h6>
                <div class="right h9 text-black-5">
                    <select name="status" class="right h9 text-black-5" id="status">
                        <option value="0" class="task-status style-2 type-1"> @selected($checklist->status =='0')>New</option>
                        </option>
                        <option value="1" class="task-status style-2 type-2">@selected($checklist->status =='1')>Completed</a></option>
                    </select>
                </div>
            </div>


            <div class="footer-fixed button">
                <button class="tf-btn primary" id="submit-btn" type="submit">Done</button>
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
    <script type="text/javascript" src="{{asset('assets/js/calendar-custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>

    <script>
        new MultiSelectTag('countries')  // id
      </script>
         @endpush

@endsection

