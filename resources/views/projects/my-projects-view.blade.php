@extends('layouts.master')

@section('title', 'All Projects')
@section('content')
    @include('partials.header')
    <!-- /preload -->
    <div class="header fixed-top line-bt">
        <div class="left">
          <a href="javascript:void(0);" class="icon back-btn"><i class="icon-back"></i></a>
        </div>
        <h5>My Projects</h5>
        <div class="right">
            <a href="#" class="icon text-black-6"><i class="icon-search"></i></a>
            <a href="#" class="icon text-black-6"><i class="icon-more"></i></a>
        </div>
    </div>
    <div class="app-content">
        <div class="tf-container">
            <div class="mt-24 d-flex justify-content-between align-items-center">
                <a href="#" class="box-filter select-wrapper">
                    <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.6">
                            <path d="M3.33325 3.33325H8.33325M11.6666 3.33325H16.6666M4.99992 6.66659H6.66659C7.58706 6.66659 8.33325 7.41278 8.33325 8.33325V14.9999C8.33325 15.9204 7.58706 16.6666 6.66659 16.6666H4.99992C4.07944 16.6666 3.33325 15.9204 3.33325 14.9999V8.33325C3.33325 7.41278 4.07944 6.66659 4.99992 6.66659ZM13.3333 6.66659H14.9999C15.9204 6.66659 16.6666 7.41278 16.6666 8.33325V9.99992C16.6666 10.9204 15.9204 11.6666 14.9999 11.6666H13.3333C12.4128 11.6666 11.6666 10.9204 11.6666 9.99992V8.33325C11.6666 7.41278 12.4128 6.66659 13.3333 6.66659Z" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>  
                    </span>
                    <select class="tf-select">
                        <option>List</option>
                        <option>Board</option>

                    </select>
                </a>
                <a href="#" class="box-filter type-1">
                    <span class="icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.6">
                            <path d="M12 8H4" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 4H2" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.26921 12H6.60254" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>                            
                    </span>
                    Filter
                </a>
            </div>

            @foreach ($projects as $project)
            <div class="accordion wrap-task-accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item mt-24">
                    <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne_{{$project->id}}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne__{{$project->id}}">
                        <div class="title-task">
                            <a href="{{route('projects.show', $project->id)}}"><h6 class="text-black-2">{{$project->name}}</h6></a>
                            <span class="num-task type-2">{{$project->tasks->count()}}</span>
                        </div>
                        <span class="icon-more text-black-5"></span>
        
                    </div>
                  <div id="panelsStayOpen-collapseOne_{{$project->id}}" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne_{{$project->id}}">
                        @if($project->tasks->count()>0 )
                        <div class="box-assign list-view-task">
                            <div class="h9 left text-black-5">Task Name</div>
                            <div class="h9 right text-black-5">Assign to</div>
                        </div>
                        @endif
                        <ul class="mt-20 box-view-task">
                            @forelse ($project->tasks as $task)
                            <li>
                                <a href="{{route('tasks.show', $task->id)}}" class="list-view-task line-bt2">
                                    <div class="font-title-btn text-black-2 left">{{$task->name}}</div>
                                    <ul class="list-stacked right">
                                        <?php $number=0?>
                                        @forelse ($task->users as $user)
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="{{asset('images/avt/avt6.jpg')}}" alt="img">
                                            </div>
                                        </li>
                                        <?php $number++?>
                                        @if($number==2)
                                            @break
                                        @endif
                                        @empty
                                            Not Assigned
                                        @endforelse
                                        @if($task->users->count() > 2)
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round member type-1">
                                                {{$task->users->count()-2}}+
                                            </div> 
                                        </li>
                                        @endif
                                    </ul>
                                </a>
                            </li>
                            @empty
                            <li>
                                <a href="#" class="list-view-task line-bt2">
                                    <div class="jekyll-info text-black-2 left">No Task Found</div>
                                </a>
                            </li>
                                
                            @endforelse
                          
                        </ul>
                  </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>

  @endsection
  
