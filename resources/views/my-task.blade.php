@extends('layouts.master')
@section('title', 'My Projects')
@section('content')

@include('partials.header')
    <div class="app-content">
        <div class="tf-container">
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
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task1" class="radio-check success" checked>
                                        <label for="task1" class="content-task">
                                            <div class="font-title-btn text-black-2">Define Problem with Client</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 12:30 PM - 02:00 PM</p>
                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task2" class="radio-check success">
                                        <label for="task2" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Wireframe and User Flow</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task3" class="radio-check success">
                                        <label for="task3" class="content-task">
                                            <div class="font-title-btn text-black-2">Project set up & Brief</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 04:30 PM - 06:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                            <div class="accordion-item mt-28">
                                <div class="pb-20 accordion-button header-task" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Next Tasks</h6>
                                        <span class="num-task type-2">9</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                                </div>
                              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task4" class="radio-check success">
                                        <label for="task4" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual Low Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Monday, 12:00 PM - 02:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task5" class="radio-check success">
                                        <label for="task5" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual High Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                           
                        </div>
					</div>
					<div class="tab-pane fade" id="progress" role="tabpanel">
						<div class="accordion wrap-task-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item mt-28">
                                <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Today Tasks</h6>
                                        <span class="num-task type-1">3</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                    
                                </div>
                              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThee">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task6" class="radio-check success" checked>
                                        <label for="task6" class="content-task">
                                            <div class="font-title-btn text-black-2">Define Problem with Client</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 12:30 PM - 02:00 PM</p>
                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task7" class="radio-check success">
                                        <label for="task7" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Wireframe and User Flow</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task8" class="radio-check success">
                                        <label for="task8" class="content-task">
                                            <div class="font-title-btn text-black-2">Project set up & Brief</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 04:30 PM - 06:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                            <div class="accordion-item mt-28">
                                <div class="pb-20 accordion-button header-task" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Next Tasks</h6>
                                        <span class="num-task type-2">9</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                                </div>
                              <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingFour">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task9" class="radio-check success">
                                        <label for="task9" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual Low Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Monday, 12:00 PM - 02:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task10" class="radio-check success">
                                        <label for="task10" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual High Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                           
                        </div>
					</div>
                    <div class="tab-pane fade" id="completed" role="tabpanel">
						<div class="accordion wrap-task-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item mt-28">
                                <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="true" aria-controls="panelsStayOpen-collapseFive">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Today Tasks</h6>
                                        <span class="num-task type-1">3</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                    
                                </div>
                              <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingFive">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task11" class="radio-check success" checked>
                                        <label for="task11" class="content-task">
                                            <div class="font-title-btn text-black-2">Define Problem with Client</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 12:30 PM - 02:00 PM</p>
                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task12" class="radio-check success">
                                        <label for="task12" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Wireframe and User Flow</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task13" class="radio-check success">
                                        <label for="task13" class="content-task">
                                            <div class="font-title-btn text-black-2">Project set up & Brief</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 04:30 PM - 06:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                            <div class="accordion-item mt-28">
                                <div class="pb-20 accordion-button header-task" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Next Tasks</h6>
                                        <span class="num-task type-2">9</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                                </div>
                              <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingSix">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task14" class="radio-check success">
                                        <label for="task14" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual Low Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Monday, 12:00 PM - 02:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task15" class="radio-check success">
                                        <label for="task15" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual High Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                           
                        </div>
					</div>
				</div>
            </div>
        </div>
    </div>
@include('partials.footer')

@endsection