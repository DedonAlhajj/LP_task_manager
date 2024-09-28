
@extends('layouts.master')
@section('title', 'My Projects')
@section('content')

<div class="header-style2 fixed-top line-bt">
 
    <div class="left">
      <a href="javascript:void(0);" class="icon back-btn"><i class="icon-back"></i></a>
        <h5>Home</h5>
    </div>
    <h4> </h4>
    <div class="right">
        <a href="{{route('index')}}" class="icon">
            <svg width="19" height="20" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5961 6.2307L8.34609 0.333828C8.34304 0.331162 8.34017 0.328291 8.3375 0.325234C8.10739 0.115963 7.80752 0 7.49648 0C7.18545 0 6.88558 0.115963 6.65547 0.325234L6.64688 0.333828L0.403906 6.2307C0.276561 6.3478 0.174909 6.49006 0.105384 6.64848C0.0358588 6.80689 -2.62835e-05 6.97801 1.44436e-08 7.15102V14.3737C1.44436e-08 14.7052 0.131696 15.0231 0.366116 15.2576C0.600537 15.492 0.918479 15.6237 1.25 15.6237H5C5.33152 15.6237 5.64946 15.492 5.88388 15.2576C6.1183 15.0231 6.25 14.7052 6.25 14.3737V10.6237H8.75V14.3737C8.75 14.7052 8.8817 15.0231 9.11612 15.2576C9.35054 15.492 9.66848 15.6237 10 15.6237H13.75C14.0815 15.6237 14.3995 15.492 14.6339 15.2576C14.8683 15.0231 15 14.7052 15 14.3737V7.15102C15 6.97801 14.9641 6.80689 14.8946 6.64848C14.8251 6.49006 14.7234 6.3478 14.5961 6.2307ZM13.75 14.3737H10V10.6237C10 10.2922 9.8683 9.97421 9.63388 9.73979C9.39946 9.50537 9.08152 9.37367 8.75 9.37367H6.25C5.91848 9.37367 5.60054 9.50537 5.36612 9.73979C5.1317 9.97421 5 10.2922 5 10.6237V14.3737H1.25V7.15102L1.25859 7.1432L7.5 1.24867L13.7422 7.14164L13.7508 7.14945L13.75 14.3737Z" fill="#787982"/>
            </svg>     
        </a>
        <a href="share-task.html" class="icon">
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="1">
                <path d="M3.5 10V16.6667C3.5 17.1087 3.68437 17.5326 4.01256 17.8452C4.34075 18.1577 4.78587 18.3333 5.25 18.3333H15.75C16.2141 18.3333 16.6592 18.1577 16.9874 17.8452C17.3156 17.5326 17.5 17.1087 17.5 16.6667V10" stroke="#7980FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14 5.00008L10.5 1.66675L7 5.00008" stroke="#7980FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.5 1.66675V12.5001" stroke="#7980FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
            </svg>
                
        </a>
        <div class="dropdown">
            <span class="icon dropdown-toggle dropdown-backdrop" data-bs-toggle="dropdown" aria-haspopup="true">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.5">
                    <path d="M9.16683 10.0001C9.16683 10.4603 9.53993 10.8334 10.0002 10.8334C10.4604 10.8334 10.8335 10.4603 10.8335 10.0001C10.8335 9.53984 10.4604 9.16675 10.0002 9.16675C9.53993 9.16675 9.16683 9.53984 9.16683 10.0001Z" stroke="#31394F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M14.9998 10.0001C14.9998 10.4603 15.3729 10.8334 15.8332 10.8334C16.2934 10.8334 16.6665 10.4603 16.6665 10.0001C16.6665 9.53984 16.2934 9.16675 15.8332 9.16675C15.3729 9.16675 14.9998 9.53984 14.9998 10.0001Z" stroke="#31394F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.33333 10.0001C3.33333 10.4603 3.70643 10.8334 4.16667 10.8334C4.6269 10.8334 5 10.4603 5 10.0001C5 9.53984 4.6269 9.16675 4.16667 9.16675C3.70643 9.16675 3.33333 9.53984 3.33333 10.0001Z" stroke="#31394F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
                    
            </span>
            <div class="dropdown-menu dropdown-setting-task">
                <a class="dropdown-item" href="javascript:void(0);">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.50016 4.83325H3.00016C2.55814 4.83325 2.13421 5.00885 1.82165 5.32141C1.50909 5.63397 1.3335 6.05789 1.3335 6.49992V13.9999C1.3335 14.4419 1.50909 14.8659 1.82165 15.1784C2.13421 15.491 2.55814 15.6666 3.00016 15.6666H10.5002C10.9422 15.6666 11.3661 15.491 11.6787 15.1784C11.9912 14.8659 12.1668 14.4419 12.1668 13.9999V11.4999" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.5 11.5H8L15.0833 4.41669C15.4149 4.08517 15.6011 3.63553 15.6011 3.16669C15.6011 2.69785 15.4149 2.24821 15.0833 1.91669C14.7518 1.58517 14.3022 1.39893 13.8333 1.39893C13.3645 1.39893 12.9149 1.58517 12.5833 1.91669L5.5 9.00003V11.5Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.3335 3.16675L13.8335 5.66675" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Edit Task 
                </a>
                <a class="dropdown-item" href="javascript:void(0);">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                        <path d="M15.0003 6.66675H8.33366C7.41318 6.66675 6.66699 7.41294 6.66699 8.33341V15.0001C6.66699 15.9206 7.41318 16.6667 8.33366 16.6667H15.0003C15.9208 16.6667 16.667 15.9206 16.667 15.0001V8.33341C16.667 7.41294 15.9208 6.66675 15.0003 6.66675Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.3335 6.66659V4.99992C13.3335 4.55789 13.1579 4.13397 12.8453 3.82141C12.5328 3.50885 12.1089 3.33325 11.6668 3.33325H5.00016C4.55814 3.33325 4.13421 3.50885 3.82165 3.82141C3.50909 4.13397 3.3335 4.55789 3.3335 4.99992V11.6666C3.3335 12.1086 3.50909 12.5325 3.82165 12.8451C4.13421 13.1577 4.55814 13.3333 5.00016 13.3333H6.66683" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    Duplicate task  
                </a>
                <a class="dropdown-item" href="javascript:void(0);">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                        <path d="M8.3335 10.8332C8.69137 11.3117 9.14796 11.7075 9.67229 11.994C10.1966 12.2805 10.7764 12.4508 11.3724 12.4935C11.9683 12.5362 12.5665 12.4502 13.1263 12.2414C13.6861 12.0326 14.1944 11.7058 14.6168 11.2832L17.1168 8.78322C17.8758 7.99738 18.2958 6.94487 18.2863 5.85238C18.2768 4.7599 17.8386 3.71485 17.0661 2.94231C16.2935 2.16978 15.2485 1.73157 14.156 1.72208C13.0635 1.71259 12.011 2.13256 11.2252 2.89156L9.79183 4.31656" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.6668 9.16653C11.309 8.68809 10.8524 8.29221 10.328 8.00575C9.80371 7.71928 9.22391 7.54893 8.62796 7.50625C8.032 7.46357 7.43384 7.54956 6.87404 7.75838C6.31425 7.9672 5.8059 8.29397 5.3835 8.71653L2.8835 11.2165C2.12451 12.0024 1.70453 13.0549 1.71402 14.1474C1.72352 15.2399 2.16172 16.2849 2.93426 17.0574C3.70679 17.83 4.75184 18.2682 5.84433 18.2777C6.93681 18.2872 7.98932 17.8672 8.77517 17.1082L10.2002 15.6832" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                     Copy link to task
                </a>
                <a class="dropdown-item" href="javascript:void(0);">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                        <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.5 9.99992L9.16667 11.6666L12.5 8.33325" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    Complete subtask
                </a>
                <form action="{{route('projects.destroy' ,  $project->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="dropdown-item text-danger" href="javascript:void(0);">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 5H4.16667H17.5" stroke="#F05A5A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.6665 5.00008V3.33341C6.6665 2.89139 6.8421 2.46746 7.15466 2.1549C7.46722 1.84234 7.89114 1.66675 8.33317 1.66675H11.6665C12.1085 1.66675 12.5325 1.84234 12.845 2.1549C13.1576 2.46746 13.3332 2.89139 13.3332 3.33341V5.00008M15.8332 5.00008V16.6667C15.8332 17.1088 15.6576 17.5327 15.345 17.8453C15.0325 18.1578 14.6085 18.3334 14.1665 18.3334H5.83317C5.39114 18.3334 4.96722 18.1578 4.65466 17.8453C4.3421 17.5327 4.1665 17.1088 4.1665 16.6667V5.00008H15.8332Z" stroke="#F05A5A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Delete Project
                    </button>
                </form>
 
            </div>
        </div>
    </div>
  </div>
    @if(!isset($projects))
    
    
    <x-dashboard.empty-project />
    
    @else
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
                        <option>Board</option>
                        <option>List</option>
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
            <div class="box-recent-project style-1 mt-32">
                <div class="top">
                    <div class="d-flex justify-content-between align-items-center gap-10">
                        <div class="box-icon w-34">
                            <i class="icon-game fs-18"></i>
                        </div>
                        <a href="project-details.html" class="h8 fw-bold flex-grow-1">Gaming Platform Website & Mobile Application</a>
                        <a href="javascript:void(0);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2C19.723 2 22 4.378 22 7.916V16.084C22 19.622 19.723 22 16.333 22H7.665C4.276 22 2 19.622 2 16.084V7.916C2 4.378 4.276 2 7.665 2H16.334ZM16.334 3.5H7.665C5.135 3.5 3.5 5.233 3.5 7.916V16.084C3.5 18.767 5.135 20.5 7.665 20.5H16.333C18.864 20.5 20.5 18.767 20.5 16.084V7.916C20.5 5.233 18.864 3.5 16.334 3.5ZM15.9482 11.0137C16.5012 11.0137 16.9482 11.4607 16.9482 12.0137C16.9482 12.5667 16.5012 13.0137 15.9482 13.0137C15.3952 13.0137 14.9432 12.5667 14.9432 12.0137C14.9432 11.4607 15.3862 11.0137 15.9382 11.0137H15.9482ZM11.9385 11.0137C12.4915 11.0137 12.9385 11.4607 12.9385 12.0137C12.9385 12.5667 12.4915 13.0137 11.9385 13.0137C11.3855 13.0137 10.9345 12.5667 10.9345 12.0137C10.9345 11.4607 11.3765 11.0137 11.9295 11.0137H11.9385ZM7.9297 11.0137C8.4827 11.0137 8.9297 11.4607 8.9297 12.0137C8.9297 12.5667 8.4827 13.0137 7.9297 13.0137C7.3767 13.0137 6.9247 12.5667 6.9247 12.0137C6.9247 11.4607 7.3677 11.0137 7.9207 11.0137H7.9297Z" fill="#31394F"/>
                                </g>
                            </svg>                                        
                        </a>
                    </div>
                    <div class="mt-14 d-flex gap-8 meta-list">
                        <span class="meta-item"><i class="icon-calendar fs-12"></i> June 18, 2022</span>
                        <span class="meta-item"><i class="icon-chat2 fs-12"></i> 16</span>
                        <span class="meta-item"><i class="icon-link fs-12"></i> 09</span>
                        <ul class="list-stacked">
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt3.jpg" alt="img">
                                </div>
                            </li>
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt4.jpg" alt="img">
                                </div>
                            </li>
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt5.jpg" alt="img">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="project-details.html" class="d-block mt-14 box-image">
                    <img src="images/project/img1.jpg" alt="img">
                </a>
                <div class="bottom mt-8">  
                    <div class="box-progress">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-caption-2 text-black-5">Progress</span>
                            <span class="fw-6 text-caption-2">78%</span>
                        </div>
                        <div class="progress h-5">
                            <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="box-recent-project style-1 mt-16">
                <div class="top">
                    <div class="d-flex justify-content-between align-items-center gap-10">
                        <div class="box-icon type-1 w-34">
                            <i class="icon-game2 fs-18"></i>
                        </div>
                        <a href="project-details.html" class="h8 fw-bold flex-grow-1">Furniture Shop Website & Mobile Application</a>
                        <a href="javascript:void(0);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2C19.723 2 22 4.378 22 7.916V16.084C22 19.622 19.723 22 16.333 22H7.665C4.276 22 2 19.622 2 16.084V7.916C2 4.378 4.276 2 7.665 2H16.334ZM16.334 3.5H7.665C5.135 3.5 3.5 5.233 3.5 7.916V16.084C3.5 18.767 5.135 20.5 7.665 20.5H16.333C18.864 20.5 20.5 18.767 20.5 16.084V7.916C20.5 5.233 18.864 3.5 16.334 3.5ZM15.9482 11.0137C16.5012 11.0137 16.9482 11.4607 16.9482 12.0137C16.9482 12.5667 16.5012 13.0137 15.9482 13.0137C15.3952 13.0137 14.9432 12.5667 14.9432 12.0137C14.9432 11.4607 15.3862 11.0137 15.9382 11.0137H15.9482ZM11.9385 11.0137C12.4915 11.0137 12.9385 11.4607 12.9385 12.0137C12.9385 12.5667 12.4915 13.0137 11.9385 13.0137C11.3855 13.0137 10.9345 12.5667 10.9345 12.0137C10.9345 11.4607 11.3765 11.0137 11.9295 11.0137H11.9385ZM7.9297 11.0137C8.4827 11.0137 8.9297 11.4607 8.9297 12.0137C8.9297 12.5667 8.4827 13.0137 7.9297 13.0137C7.3767 13.0137 6.9247 12.5667 6.9247 12.0137C6.9247 11.4607 7.3677 11.0137 7.9207 11.0137H7.9297Z" fill="#31394F"/>
                                </g>
                            </svg>                                        
                        </a>
                    </div>
                    <div class="mt-14 d-flex gap-8 meta-list">
                        <span class="meta-item"><i class="icon-calendar fs-12"></i> June 18, 2022</span>
                        <span class="meta-item"><i class="icon-chat2 fs-12"></i> 12</span>
                        <span class="meta-item"><i class="icon-link fs-12"></i> 07</span>
                        <ul class="list-stacked">
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt8.jpg" alt="img">
                                </div>
                            </li>
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt9.jpg" alt="img">
                                </div>
                            </li>
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt10.jpg" alt="img">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="project-details.html" class="mt-14 box-image d-block">
                    <img src="images/project/img2.jpg" alt="img">
                </a>
                <div class="bottom mt-8">  
                    <div class="box-progress">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-caption-2 text-black-5">Progress</span>
                            <span class="fw-6 text-caption-2">78%</span>
                        </div>
                        <div class="progress h-5">
                            <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="menubar-footer footer-fixed">
        <ul class="inner-bar">
            <li>
                <a href="index.html">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.75 3C1.75 2.30964 2.30964 1.75 3 1.75H9C9.69036 1.75 10.25 2.30964 10.25 3V11C10.25 11.6904 9.69036 12.25 9 12.25H3C2.30964 12.25 1.75 11.6904 1.75 11V3Z" fill="white" stroke="#31394F" stroke-width="1.5"/>
                        <path d="M13.75 3C13.75 2.30964 14.3096 1.75 15 1.75H21C21.6904 1.75 22.25 2.30964 22.25 3V7C22.25 7.69036 21.6904 8.25 21 8.25H15C14.3096 8.25 13.75 7.69036 13.75 7V3Z" fill="white" stroke="#31394F" stroke-width="1.5"/>
                        <path d="M1.75 17C1.75 16.3096 2.30964 15.75 3 15.75H9C9.69036 15.75 10.25 16.3096 10.25 17V21C10.25 21.6904 9.69036 22.25 9 22.25H3C2.30964 22.25 1.75 21.6904 1.75 21V17Z" fill="white" stroke="#31394F" stroke-width="1.5"/>
                        <path d="M13.75 13C13.75 12.3096 14.3096 11.75 15 11.75H21C21.6904 11.75 22.25 12.3096 22.25 13V21C22.25 21.6904 21.6904 22.25 21 22.25H15C14.3096 22.25 13.75 21.6904 13.75 21V13Z" fill="white" stroke="#31394F" stroke-width="1.5"/>
                    </svg>                        
                </a>
            </li>
            <li class="active"><a href="my-project-list-view.html">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 6.22222V3.05556C19 2.7756 18.8784 2.50712 18.662 2.30917C18.4457 2.11121 18.1522 2 17.8462 2H5.15385C4.84783 2 4.55434 2.11121 4.33795 2.30917C4.12156 2.50712 4 2.7756 4 3.05556V19.9444C4 20.2244 4.12156 20.4929 4.33795 20.6908C4.55434 20.8888 4.84783 21 5.15385 21H14.3846H17.4167C18.2911 21 19 20.2911 19 19.4167V19.4167V17.8333" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 8H5M3 12H5M3 16H5" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.0918 9.006L12.7983 13.5624L12.1729 16.4843L15.144 16.8024L21.4375 12.246C21.676 12.0734 21.8429 11.8225 21.9015 11.5485C21.9601 11.2745 21.9057 10.9999 21.7502 10.7851L20.5773 9.16509C20.4218 8.95026 20.1779 8.81281 19.8993 8.78298C19.6207 8.75314 19.3303 8.83337 19.0918 9.006Z" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
                </a>
            </li>
            <li class="action-add-task"><a href="#createProject" data-bs-toggle="offcanvas" aria-controls="offcanvasBottom"><i class="icon-add"></i></a></li>
            <li><a href="inbox.html">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 13.4876 3.36093 14.891 4 16.1272L3 21L7.8728 20C9.10904 20.6391 10.5124 21 12 21Z" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <rect x="7.5" y="12" width="0.01" height="0.01" stroke="#464D61" stroke-opacity="0.7" stroke-width="2" stroke-linejoin="round"/>
                    <rect x="12" y="12" width="0.01" height="0.01" stroke="#464D61" stroke-opacity="0.7" stroke-width="2" stroke-linejoin="round"/>
                    <rect x="16.5" y="12" width="0.01" height="0.01" stroke="#464D61" stroke-opacity="0.7" stroke-width="2" stroke-linejoin="round"/>
                    <circle cx="19.1592" cy="6.10767" r="4.5" fill="#F05A5A" stroke="white"/>
                </svg>                    
                </a>
            </li>
            <li><a href="profile.html">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 8C17 8.98891 16.7068 9.95561 16.1573 10.7779C15.6079 11.6001 14.827 12.241 13.9134 12.6194C12.9998 12.9978 11.9945 13.0969 11.0245 12.9039C10.0546 12.711 9.16373 12.2348 8.46447 11.5355C7.7652 10.8363 7.289 9.94536 7.09607 8.97545C6.90315 8.00555 7.00216 7.00021 7.3806 6.08658C7.75904 5.17295 8.3999 4.39206 9.22215 3.84265C10.0444 3.29324 11.0111 3 12 3C13.3261 3 14.5979 3.52678 15.5355 4.46447C16.4732 5.40215 17 6.67392 17 8ZM13 13H11C9.14348 13 7.36301 13.7375 6.05025 15.0503C4.7375 16.363 4 18.1435 4 20V20C4 20.2652 4.10536 20.5196 4.29289 20.7071C4.48043 20.8946 4.73478 21 5 21H19C19.2652 21 19.5196 20.8946 19.7071 20.7071C19.8946 20.5196 20 20.2652 20 20C20 18.1435 19.2625 16.363 17.9497 15.0503C16.637 13.7375 14.8565 13 13 13V13Z" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
                </a>
            </li>
        </ul>
         
    </div>
     
    <!-- create project -->
    <x-dashboard.create-project />

@endsection
