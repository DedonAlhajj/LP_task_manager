
    @extends('layouts.master')
    @section('title', 'Home')
    @section('content')



    <!-- header profile -->
    <div class="header-profile bg-primary style-1 fixed-top">
            <div class="left">
                <div class="avt">
                    <img src="images/avt/avt2.jpg" alt="avatar">
                    <span class="dot-status"></span>
                </div>
                <div class="content">
                    <h5 class="text-white">{{Auth::user()->name}}</h5>
                    <p class="body-2 text-white">Hi {{Auth::user()->name}}</p>
                </div>
            </div>
            <div class="right">
                <a href="#sidebar" data-bs-toggle="modal">
                    <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="1">
                        <path d="M2.5 10H17.5" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.5 5H17.5" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.5 15H17.5" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a>
            
                <a href="#notification" class="box-noti" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
                    <i class="icon-bell text-white"></i>
                    <span class="dot-danger"></span>
                </a>
            </div>
    </div>
 

    <!-- create project component -->
    <x-dashboard.create-project />
    <!-- notification component -->
    <x-dashboard.notifications />
  


    <!-- sidebar -->
   
    @include('partials.sidebar')


    <!-- main content -->
    <div class="app-content style-5">
        <div class="section-box-search">
            <div class="tf-container">
                <div class="search-box style-1">
                    <a href="javascript:void(0);" class="icon-left icon-search"></a>
                    <input type="text" class="search-field" placeholder="Find your task" value="nft website de">
                </div>
            </div>
        </div>
        <div class="main-section">
            <div class="tf-container">
                <div class="pt-30">
                    <div class="section-title d-flex justify-content-between align-items-center">
                    
                        <h3>Recent Projects</h3>
                        @if (count($projects) > 0)
                        <a href="my-project.html" class="font-title-btn text-black-5">View All</a>
                        @endif
                    </div>
                    @if (count($projects) > 0)
                    <div class="sw-box-shadow mt-20">
                        <div class="swiper tf-swiper" data-space-between="20" data-preview="1.3" data-tablet="1.5" data-desktop="2">
                            <div class="swiper-wrapper">
                                @foreach ($projects as $project)
                                <div class="swiper-slide">
                                    <a href="{{route('projects.show', $project->id)}}" class="box-recent-project">
                                        <div class="top">
                                            <div class="d-flex justify-content-between align-items-center gap-10">
                                                <div class="box-icon w-34">
                                                    <i class="icon-game fs-18"></i>
                                                </div>
                                                <div class="h8 fw-bold flex-grow-1">{{$project->name}}</div>
                                                <span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.6">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2C19.723 2 22 4.378 22 7.916V16.084C22 19.622 19.723 22 16.333 22H7.665C4.276 22 2 19.622 2 16.084V7.916C2 4.378 4.276 2 7.665 2H16.334ZM16.334 3.5H7.665C5.135 3.5 3.5 5.233 3.5 7.916V16.084C3.5 18.767 5.135 20.5 7.665 20.5H16.333C18.864 20.5 20.5 18.767 20.5 16.084V7.916C20.5 5.233 18.864 3.5 16.334 3.5ZM15.9482 11.0137C16.5012 11.0137 16.9482 11.4607 16.9482 12.0137C16.9482 12.5667 16.5012 13.0137 15.9482 13.0137C15.3952 13.0137 14.9432 12.5667 14.9432 12.0137C14.9432 11.4607 15.3862 11.0137 15.9382 11.0137H15.9482ZM11.9385 11.0137C12.4915 11.0137 12.9385 11.4607 12.9385 12.0137C12.9385 12.5667 12.4915 13.0137 11.9385 13.0137C11.3855 13.0137 10.9345 12.5667 10.9345 12.0137C10.9345 11.4607 11.3765 11.0137 11.9295 11.0137H11.9385ZM7.9297 11.0137C8.4827 11.0137 8.9297 11.4607 8.9297 12.0137C8.9297 12.5667 8.4827 13.0137 7.9297 13.0137C7.3767 13.0137 6.9247 12.5667 6.9247 12.0137C6.9247 11.4607 7.3677 11.0137 7.9207 11.0137H7.9297Z" fill="#31394F"/>
                                                        </g>
                                                    </svg>                                        
                                                </span>
                                            </div>
                                            <ul class="mt-14 d-flex gap-8 meta-list">
                                                <li class="meta-item"><i class="icon-calendar fs-12"></i> {{$project->created_at->format('d M Y')}}</li>
                                                <li class="meta-item"><i class="icon-chat2 fs-12"></i> {{count($project->attach_comments)}}</li>
                                                <li class="meta-item"><i class="icon-link fs-12"></i> {{count($project->tasks)}}</li>
                                            </ul>
                                        </div>
                                        <div class="mt-14 box-image">
                                            <img src=" @if($project->image) {{asset('storage/project_images/'. $project->image)}} @else {{asset('images/project/defult-banner.jpg')}} @endif" alt=""> 
                                        </div>
                                        <div class="mt-14 bottom d-flex align-items-center">
                                            @if ($project->user->count()>0)
                                            <ul class="list-stacked">
                                                @foreach ($project->users as $user)
                                                <li class="avt-list">
                                                    <div class="avatar avt-27 round">
                                                        
                                                        <img src="images/avt/avt3.jpg" alt="img">
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @else
                                            <h2 class="text-black-5">No Member</h2>

                                            @endif
                                            <div class="box-progress">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-caption-2 text-black-5">@if($project->status == 'Completed') Completed @elseif ($project->status == 'InProgress') Progress @else New @endif</span>
                                                    <span class="fw-6 text-caption-2">@if($project->status == 'Completed') 100 @else 0 @endif</span>
                                                </div>
                                                <div class="progress h-5">
                                                    <div class="progress-bar" role="progressbar" style="width: @if($project->status == 'Completed') 100% @endif" aria-valuenow="25" aria-valuemin="50" aria-valuemax=" 100%"></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                      
                                     
                                    </a>
                                </div>
                                @endforeach
                               
                               
                            </div>
                        </div>
                    </div>

                    @else
                    <div class="tf-container">
                        <div class="box-empty-task">
                            <img src="images/background/empty-task1.jpg" alt="img">
                            <div class="mt-32">
                                <h5 class="text-black-2 text-center">Planning Your Project <br>
                                   </h5>
                                <p class="body-2 mt-16 text-center text-black-4">Create Projects to manage and tracking your project easily instantly incredibly</p>
                            </div>
                        </div>
                    </div>
                    @endif
                   
                  
                </div>
                {{-- <div class="mt-32">
                    <div class="section-title d-flex justify-content-between align-items-center">
                        <h3>Today Tasks</h3>
                        <a href="my-task.html" class="font-title-btn text-black-5">View All</a>
                    </div>
                    <a href="task-detail-calendar.html" class="mt-20 box-task style-2">
                        <div class="box-icon w-52 radius-8">
                            <i class="icon-wallet"></i>
                        </div>
                        <div class="content">
                            <div class="font-title-btn text-black-2">Fintech Project</div>
                            <div class="mt-10 d-flex align-items-center gap-16">
                                <ul class="list-stacked">
                                    <li class="avt-list">
                                        <div class="avatar avt-24 round">
                                            <img src="images/avt/avt3.jpg" alt="img">
                                        </div>
                                    </li>
                                    <li class="avt-list">
                                        <div class="avatar avt-24 round">
                                            <img src="images/avt/avt4.jpg" alt="img">
                                        </div>
                                    </li>
                                    <li class="avt-list">
                                        <div class="avatar avt-24 round member">
                                            3+
                                        </div> 
                                    </li>
                                </ul>
                                <span class="meta-item"><i class="icon-chat2 fs-12"></i> 16</span>
                            </div>
                        </div>
                        <div class="circle_percent" data-percent="85">
                            <div class="circle_inner">
                                <div class="round_per"></div>
                            </div>
                        </div>
                    </a>
                    
                </div> --}}
            </div>
        </div>


    </div>

    <!--footer -->
    @include('partials.footer')


    
    @endsection



    


