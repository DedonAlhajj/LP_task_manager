@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

    <!-- header profile -->
    <div class="header-profile bg-primary style-1 fixed-top">
        <div class="left">
            <div class="avt">
                <img src="images/avt/avt2.jpg" alt="avatar">
                <span class="dot-status"></span>
            </div>
            <div class="content">
                <h5 class="text-white">{{ Auth::user()->name }}</h5>
                <p class="body-2 text-white">مرحبًا بك، {{ Auth::user()->name }}</p>
            </div>
        </div>
        <div class="right">
            <a href="#sidebar" data-bs-toggle="modal">
                <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="1">
                        <path d="M2.5 10H17.5" stroke="#FFF" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M2.5 5H17.5" stroke="#FFF" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M2.5 15H17.5" stroke="#FFF" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
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

    @include('partials.sidebar')

    <div class="app-content style-5">
        <div class="section-box-search">
            <div class="tf-container">
                <div class="search-box style-1">
                    <a href="javascript:void(0);" class="icon-left icon-search"></a>
                    <input type="text" class="search-field" placeholder="ابحث عن مهمتك">
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="main-section">
            <div class="sw-box-shadow mt-20">
                <div style="    text-align: center;
    font-size: x-large;
    padding: 10px;
    background-color: #5fd788;
    margin-top: 33px;">Your Data If You Admin</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="tf-container">
                            <div class="pt-30">
                                <div class="section-title d-flex justify-content-between align-items-center">
                                    <h3>Recent projects </h3>
                                    @if ($projects->count() > 0)
                                        <a href="my-project.html" class="font-title-btn text-black-5">عرض الكل</a>
                                    @endif
                                </div>
                                @if ($projects->count() > 0)
                                    <div class="sw-box-shadow mt-20">
                                        <div class="task-list">
                                            @foreach ($projects as $project)
                                                <div class="task-item">
                                                    <div class="task-left">
                                                        <h5 class="task-title">{{ $project->name }}</h5>
                                                        <p class="task-meta">
                                                        <ul class="mt-14 d-flex gap-8 meta-list">
                                                            <li class="meta-item"><i
                                                                    class="icon-calendar fs-12"></i> {{ $project->created_at->format('d M Y') }}
                                                            </li>
                                                            <li class="meta-item"><i
                                                                    class="icon-chat2 fs-12"></i>
                                                                {{ $project->comments ? count($project->comments) : 0 }}
                                                            </li>
                                                            <li class="meta-item"><i
                                                                    class="icon-chat2 fs-12"></i>
                                                                {{ $project->tasks ? count($project->tasks) : 0 }}
                                                            </li>
                                                        </ul>
                                                        </p>
                                                    </div>
                                                    <div class="task-right">
                                                        <span class="badge bg-success">{{ $project->status }}</span>
                                                        <a href="{{ route('projects.show', $project->id) }}"
                                                           class="btn btn-primary icon-search"></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="alert alert-light">لا توجد مهام عاجلة.</div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tf-container">
                            <div class="pt-30">
                                <div class="section-title d-flex justify-content-between align-items-center">
                                    <h3>Urgent Tasks</h3>
                                    @if ($urgentTasks->count() > 0)
                                        <a href="{{ route('tasks.index') }}" class="font-title-btn text-black-5">عرض
                                            الكل</a>
                                    @endif
                                </div>

                                @if ($urgentTasks->count() > 0)
                                    <div class="sw-box-shadow mt-20">
                                        <div class="task-list">
                                            @foreach ($urgentTasks as $task)
                                                <div class="task-item">
                                                    <div class="task-left">
                                                        <h5 class="task-title">{{ $task->title }}</h5>
                                                        <p class="task-meta">
                                                            <i class="icon-clock"></i> {{ \Carbon\Carbon::parse($task->end_date)->diffForHumans() }}
                                                            |
                                                            <i class="icon-users"></i> {{ $task->users->count() }}
                                                            المشاركين
                                                        </p>
                                                    </div>
                                                    <div class="task-right">
                                                        <span class="badge bg-danger">{{ $task->status }}</span>
                                                        <a href="{{ route('tasks.show', $task->id) }}"
                                                           class="btn btn-primary">عرض التفاصيل</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="alert alert-light">لا توجد مهام عاجلة.</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div style="    text-align: center;
    font-size: x-large;
    padding: 10px;
    background-color: #5fd788;
    margin-top: 33px;">Your Data If You Manager</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="tf-container">
                            <div class="pt-30">
                                <div class="section-title d-flex justify-content-between align-items-center">
                                    <h3>Your Projects</h3>
                                    @if ($projects1->count() > 0)
                                        <a href="my-project.html" class="font-title-btn text-black-5">عرض الكل</a>
                                    @endif
                                </div>
                                @if ($projects1->count() > 0)
                                    <div class="sw-box-shadow mt-20">
                                        <div class="task-list">
                                            @foreach ($projects1 as $project)
                                                <div class="task-item">
                                                    <div class="task-left">
                                                        <h5 class="task-title">{{ $project->name }}</h5>
                                                        <p class="task-meta">
                                                        <ul class="mt-14 d-flex gap-8 meta-list">
                                                            <li class="meta-item"><i
                                                                    class="icon-calendar fs-12"></i> {{ $project->created_at->format('d M Y') }}
                                                            </li>
                                                            <li class="meta-item"><i
                                                                    class="icon-chat2 fs-12"></i>
                                                                {{ $project->comments ? count($project->comments) : 0 }}
                                                            </li>
                                                            <li class="meta-item"><i
                                                                    class="icon-chat2 fs-12"></i>
                                                                {{ $project->tasks ? count($project->tasks) : 0 }}
                                                            </li>
                                                        </ul>
                                                        </p>
                                                    </div>
                                                    <div class="task-right">
                                                        <span class="badge bg-success">{{ $project->status }}</span>
                                                        <a href="{{ route('projects.show', $project->id) }}"
                                                           class="btn btn-primary icon-search"></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="alert alert-light">لا توجد مهام عاجلة.</div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tf-container">
                            <div class="pt-30">
                                <div class="section-title d-flex justify-content-between align-items-center">
                                    <h3>Urgent Tasks For Your Projects</h3>
                                    @if ($urgentTasks1->count() > 0)
                                        <a href="{{ route('tasks.index') }}" class="font-title-btn text-black-5">عرض
                                            الكل</a>
                                    @endif
                                </div>

                                @if ($urgentTasks1->count() > 0)
                                    <div class="sw-box-shadow mt-20">
                                        <div class="task-list">
                                            @foreach ($urgentTasks1 as $task)
                                                <div class="task-item">
                                                    <div class="task-left">
                                                        <h5 class="task-title">{{ $task->title }}</h5>
                                                        <p class="task-meta">
                                                            <i class="icon-clock"></i> {{ \Carbon\Carbon::parse($task->end_date)->diffForHumans() }}
                                                            |
                                                            <i class="icon-users"></i> {{ $task->users->count() }}
                                                            المشاركين
                                                        </p>
                                                    </div>
                                                    <div class="task-right">
                                                        <span class="badge bg-danger">{{ $task->status }}</span>
                                                        <a href="{{ route('tasks.show', $task->id) }}"
                                                           class="btn btn-primary">عرض التفاصيل</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="alert alert-light">لا توجد مهام عاجلة.</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div style="    text-align: center;
    font-size: x-large;
    padding: 10px;
    background-color: #5fd788;
    margin-top: 33px;">Your Data If You TeemMember</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="tf-container">
                            <div class="pt-30">
                                <div class="section-title d-flex justify-content-between align-items-center">
                                    <h3>Project You Work On</h3>
                                    @if ($projects2->count() > 0)
                                        <a href="my-project.html" class="font-title-btn text-black-5">عرض الكل</a>
                                    @endif
                                </div>
                                @if ($projects2->count() > 0)
                                    <div class="sw-box-shadow mt-20">
                                        <div class="task-list">
                                            @foreach ($projects2 as $project)
                                                <div class="task-item">
                                                    <div class="task-left">
                                                        <h5 class="task-title">{{ $project->name }}</h5>
                                                        <p class="task-meta">
                                                        <ul class="mt-14 d-flex gap-8 meta-list">
                                                            <li class="meta-item"><i
                                                                    class="icon-calendar fs-12"></i> {{ $project->created_at->format('d M Y') }}
                                                            </li>
                                                            <li class="meta-item"><i
                                                                    class="icon-chat2 fs-12"></i>
                                                                {{ $project->comments ? count($project->comments) : 0 }}
                                                            </li>
                                                            <li class="meta-item"><i
                                                                    class="icon-chat2 fs-12"></i>
                                                                {{ $project->tasks ? count($project->tasks) : 0 }}
                                                            </li>
                                                        </ul>
                                                        </p>
                                                    </div>
                                                    <div class="task-right">
                                                        <span class="badge bg-success">{{ $project->status }}</span>
                                                        <a href="{{ route('projects.show', $project->id) }}"
                                                           class="btn btn-primary icon-search"></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="alert alert-light">لا توجد مهام عاجلة.</div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tf-container">
                            <div class="pt-30">
                                <div class="section-title d-flex justify-content-between align-items-center">
                                    <h3>Urgent Tasks You Work On</h3>
                                    @if ($urgentTasks2->count() > 0)
                                        <a href="{{ route('tasks.index') }}" class="font-title-btn text-black-5">عرض
                                            الكل</a>
                                    @endif
                                </div>

                                @if ($urgentTasks2->count() > 0)
                                    <div class="sw-box-shadow mt-20">
                                        <div class="task-list">
                                            @foreach ($urgentTasks2 as $task)
                                                <div class="task-item">
                                                    <div class="task-left">
                                                        <h5 class="task-title">{{ $task->title }}</h5>
                                                        <p class="task-meta">
                                                            <i class="icon-clock"></i> {{ \Carbon\Carbon::parse($task->end_date)->diffForHumans() }}
                                                            |
                                                            <i class="icon-users"></i> {{ $task->users->count() }}
                                                            المشاركين
                                                        </p>
                                                    </div>
                                                    <div class="task-right">
                                                        <span class="badge bg-danger">{{ $task->status }}</span>
                                                        <a href="{{ route('tasks.show', $task->id) }}"
                                                           class="btn btn-primary">عرض التفاصيل</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="alert alert-light">لا توجد مهام عاجلة.</div>
                                @endif
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
