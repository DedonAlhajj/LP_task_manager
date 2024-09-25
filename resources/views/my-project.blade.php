
@extends('layouts.master')
@section('title', 'My Projects')
@section('content')

@include('partials.header')

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
