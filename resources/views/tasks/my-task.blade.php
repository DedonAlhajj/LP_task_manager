@extends('layouts.master')
@section('title', 'My Projects')
@section('content')

@include('partials.header')
    <div class="app-content">
        <div class="tf-container">
            @if($tasks->isEmpty())
            <div class="box-empty-inbox">
                <img src="images/background/empty-task2.jpg" alt="empty-notification">
                <div class="mt-40">
                    <h5 class="text-black-2 text-center">You haven’t any Tasks yet.</h5>
                    <p class="mt-12 text-black-5 text-center px-4 body-2">Let us notify you and show the tasks here for better communication.</p>
                </div>
            </div>
            @else
            <div class="mt-24">
                <div class="tab-slide wrapper-tab-task">
                    <ul class="nav nav-tabs task-tab" role="tablist" >
                        <li class="item-slide-effect"></li>
                        <li class="nav-item active" role="presentation">   
                            <button class="nav-link active"  data-bs-toggle="tab" data-bs-target="#allTask">All Tasks</button>
                        </li>
                        <li class="nav-item" role="presentation">
							<button class="nav-link" data-bs-toggle="tab" data-bs-target="#progress">In Progress</button>
						</li>
                        <li class="nav-item" role="presentation">
							<button class="nav-link" data-bs-toggle="tab" data-bs-target="#completed">Completed</button>
						</li>
                        
                    </ul>
                </div>
                <div class="tab-content">
					<div class="tab-pane fade active show" id="allTask" role="tabpanel">
						<div class="accordion wrap-task-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item mt-28">
                                <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Today Tasks</h6>
                                        <span class="num-task type-1">3</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                    
                                </div>
                              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <ul>
                                    @foreach ($tasks as $task)
                                    <a href="{{route('tasks.show', $task->id)}}" > <li class="list-task-item mb-5">
                                        <input type="checkbox" id="task1" class="radio-check success" checked disabled>
                                        <label for="task1" class="content-task">
                                            <div class="font-title-btn text-black-2">{{$task->name}}</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">{{$task->created_at->diffForHumans()}}</p>
                                        </label>
                                    </li></a>
                                    @endforeach
                                  
                                   
                                </ul>
                              </div>
                            </div>
                          
                           
                        </div>
					</div>
				
				</div>
            </div>
            @endif
        </div>
    </div>
@include('partials.footer')
@endsection