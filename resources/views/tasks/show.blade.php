@extends('layouts.master')
@section('title', 'My Projects')
@section('content')

<div class="header-style2 fixed-top line-bt">

    <div class="left">
      <a href="javascript:void(0);" class="icon back-btn"><i class="icon-back"></i></a>
        <h5>Home</h5>
    </div>
    <h4>{{$task->name}} </h4>
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
                @can('edit', $task)
                <a class="dropdown-item" href="{{route('tasks.edit',$task->id)}}">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.50016 4.83325H3.00016C2.55814 4.83325 2.13421 5.00885 1.82165 5.32141C1.50909 5.63397 1.3335 6.05789 1.3335 6.49992V13.9999C1.3335 14.4419 1.50909 14.8659 1.82165 15.1784C2.13421 15.491 2.55814 15.6666 3.00016 15.6666H10.5002C10.9422 15.6666 11.3661 15.491 11.6787 15.1784C11.9912 14.8659 12.1668 14.4419 12.1668 13.9999V11.4999" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.5 11.5H8L15.0833 4.41669C15.4149 4.08517 15.6011 3.63553 15.6011 3.16669C15.6011 2.69785 15.4149 2.24821 15.0833 1.91669C14.7518 1.58517 14.3022 1.39893 13.8333 1.39893C13.3645 1.39893 12.9149 1.58517 12.5833 1.91669L5.5 9.00003V11.5Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.3335 3.16675L13.8335 5.66675" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Edit Task
                </a>
                @endcan
                <a class="dropdown-item" href="{{route('checklists.create',$task->id)}}">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9">
                        <path d="M15.0003 6.66675H8.33366C7.41318 6.66675 6.66699 7.41294 6.66699 8.33341V15.0001C6.66699 15.9206 7.41318 16.6667 8.33366 16.6667H15.0003C15.9208 16.6667 16.667 15.9206 16.667 15.0001V8.33341C16.667 7.41294 15.9208 6.66675 15.0003 6.66675Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.3335 6.66659V4.99992C13.3335 4.55789 13.1579 4.13397 12.8453 3.82141C12.5328 3.50885 12.1089 3.33325 11.6668 3.33325H5.00016C4.55814 3.33325 4.13421 3.50885 3.82165 3.82141C3.50909 4.13397 3.3335 4.55789 3.3335 4.99992V11.6666C3.3335 12.1086 3.50909 12.5325 3.82165 12.8451C4.13421 13.1577 4.55814 13.3333 5.00016 13.3333H6.66683" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    Add CheckList
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
                @can('delete', $task)
                <form action="{{route('tasks.destroy',$task->id)}}" method="Post">
                    @csrf
                    @method('delete')
                <button class="dropdown-item text-danger"  type="submit" >
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.5 5H4.16667H17.5" stroke="#F05A5A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.6665 5.00008V3.33341C6.6665 2.89139 6.8421 2.46746 7.15466 2.1549C7.46722 1.84234 7.89114 1.66675 8.33317 1.66675H11.6665C12.1085 1.66675 12.5325 1.84234 12.845 2.1549C13.1576 2.46746 13.3332 2.89139 13.3332 3.33341V5.00008M15.8332 5.00008V16.6667C15.8332 17.1088 15.6576 17.5327 15.345 17.8453C15.0325 18.1578 14.6085 18.3334 14.1665 18.3334H5.83317C5.39114 18.3334 4.96722 18.1578 4.65466 17.8453C4.3421 17.5327 4.1665 17.1088 4.1665 16.6667V5.00008H15.8332Z" stroke="#F05A5A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Delete Task
                </button>
                </form>
                @endcan
            </div>
        </div>
    </div>
  </div>
    <div class="app-content">
        <div class="tf-container">
            <x-dashboard.alert />
            <div class="mt-24">
                <h5 class="mt-20 text-black-2">Description</h5>
                <div class="box-description-task">
                    <p class="mt-12 body-2 text-black-4">
                        {{$task->description}}</p>
                </div>
                <ul class="mt-24">
                    <li class="list-desc-project">
                        <div class="box-left">
                            <div class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.9">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.90566 12.0116L9.99976 12.0116L10.2102 12.0123C11.8191 12.0229 15.4957 12.1854 15.4957 14.6774C15.4957 17.153 11.9472 17.3145 10.2353 17.325L9.60107 17.325C7.99215 17.3144 4.31483 17.1521 4.31483 14.6632C4.31483 12.1845 7.99215 12.0229 9.60107 12.0123L9.81157 12.0116C9.84422 12.0116 9.87561 12.0116 9.90566 12.0116ZM9.90566 13.2616C7.92566 13.2616 5.56483 13.5049 5.56483 14.6632C5.56483 15.7954 7.78475 16.0601 9.72469 16.0751L9.90566 16.0758C11.8857 16.0758 14.2457 15.8333 14.2457 14.6774C14.2457 13.5074 11.8857 13.2616 9.90566 13.2616ZM16.5337 11.6734C18.5528 11.9759 18.977 12.9243 18.977 13.6667C18.977 14.1201 18.7987 14.9476 17.607 15.4017C17.5337 15.4292 17.4587 15.4426 17.3845 15.4426C17.1328 15.4426 16.8953 15.2892 16.8003 15.0401C16.677 14.7176 16.8395 14.3559 17.162 14.2334C17.727 14.0184 17.727 13.7809 17.727 13.6667C17.727 13.3018 17.2628 13.0468 16.3478 12.9101C16.007 12.8584 15.7712 12.5409 15.822 12.1984C15.8728 11.8568 16.1895 11.6293 16.5337 11.6734ZM3.9885 12.1984C4.03933 12.5409 3.8035 12.8584 3.46266 12.9101C2.54766 13.0468 2.0835 13.3018 2.0835 13.6667C2.0835 13.7809 2.0835 14.0176 2.64933 14.2334C2.97183 14.3559 3.13433 14.7176 3.011 15.0401C2.916 15.2892 2.6785 15.4426 2.42683 15.4426C2.35266 15.4426 2.27766 15.4292 2.20433 15.4017C1.01183 14.9467 0.833496 14.1193 0.833496 13.6667C0.833496 12.9251 1.25766 11.9759 3.27766 11.6734C3.62183 11.6301 3.93683 11.8568 3.9885 12.1984ZM9.90566 3.33325C12.0057 3.33325 13.7132 5.04158 13.7132 7.14075C13.7132 9.23992 12.0057 10.9483 9.90566 10.9483H9.88316C8.8665 10.9449 7.914 10.5466 7.20066 9.82658C6.48566 9.10742 6.09483 8.15242 6.09896 7.13825C6.09896 5.04158 7.8065 3.33325 9.90566 3.33325ZM9.90566 4.58325C8.49566 4.58325 7.34898 5.73075 7.34898 7.14075C7.3465 7.82408 7.60816 8.46325 8.08733 8.94575C8.5665 9.42825 9.20483 9.69575 9.88483 9.69825L9.90566 10.3233V9.69825C11.3157 9.69825 12.4632 8.55158 12.4632 7.14075C12.4632 5.73075 11.3157 4.58325 9.90566 4.58325ZM15.0632 4.1495C16.5282 4.39034 17.5923 5.64367 17.5923 7.1295C17.589 8.62533 16.4715 9.90867 14.9923 10.1162C14.9632 10.1203 14.934 10.122 14.9057 10.122C14.599 10.122 14.3315 9.89617 14.2873 9.58367C14.2398 9.24117 14.4773 8.92533 14.8198 8.87783C15.6865 8.75617 16.3407 8.0045 16.3423 7.12783C16.3423 6.25867 15.719 5.52367 14.8598 5.38283C14.5198 5.327 14.289 5.00533 14.3448 4.6645C14.4015 4.32367 14.7207 4.09534 15.0632 4.1495ZM5.4665 4.6645C5.52233 5.00533 5.2915 5.327 4.9515 5.38283C4.09233 5.52367 3.469 6.25867 3.469 7.1295C3.47066 8.0045 4.12483 8.757 4.99066 8.87783C5.33316 8.92533 5.57066 9.24117 5.52316 9.58367C5.479 9.89617 5.2115 10.122 4.90483 10.122C4.8765 10.122 4.84733 10.1203 4.81816 10.1162C3.339 9.90867 2.22233 8.62533 2.219 7.13117C2.219 5.64367 3.28316 4.39034 4.74816 4.1495C5.099 4.0945 5.40983 4.32534 5.4665 4.6645Z" fill="#31394F"/>
                                    </g>
                                </svg>
                            </div>
                            <span class="h9 text-black-3">Assigned To</span>
                        </div>
                        {{-- @dd($task->users) --}}
                        <div class="box-right">
                            <ul class="list-stacked">
                                @if(count($task->users)>0)
                                <li class="avt-list">
                                    <div class="avatar avt-24 round">
                                        <img src="{{asset('images/avt/avt5.jpg') }}" alt="img">
                                    </div>
                                </li>
                                @else
                                <span>No Team</span>
                                @endif
                                {{-- <li class="add-member">
                                    <a href="{{route('projects.team.add', $project->id)}}" class="icon icon-add2"></a>
                                </li> --}}
                            </ul>
                        </div>

                    </li>

                    <li class="mt-20 list-desc-project">
                        <div class="box-left">
                            <div class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.9">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6115 1.66675C16.4357 1.66675 18.3332 3.64841 18.3332 6.59675V13.4034C18.3332 16.3517 16.4357 18.3334 13.6107 18.3334H6.38734C3.56317 18.3334 1.6665 16.3517 1.6665 13.4034V6.59675C1.6665 3.64841 3.56317 1.66675 6.38734 1.66675H13.6115ZM13.6115 2.91675H6.38734C4.279 2.91675 2.9165 4.36091 2.9165 6.59675V13.4034C2.9165 15.6392 4.279 17.0834 6.38734 17.0834H13.6107C15.7198 17.0834 17.0832 15.6392 17.0832 13.4034V6.59675C17.0832 4.36091 15.7198 2.91675 13.6115 2.91675ZM13.4078 7.58091C13.6519 7.82508 13.6519 8.22008 13.4078 8.46425L9.45275 12.4192C9.33109 12.5417 9.17109 12.6026 9.01109 12.6026C8.85192 12.6026 8.69109 12.5417 8.56942 12.4192L6.59109 10.4417C6.34692 10.1976 6.34692 9.80258 6.59109 9.55841C6.83525 9.31425 7.23025 9.31425 7.47442 9.55841L9.01109 11.0934L12.5244 7.58091C12.7686 7.33675 13.1636 7.33675 13.4078 7.58091Z" fill="#31394F"/>
                                    </g>
                                </svg>
                            </div>
                            <span class="h9 text-black-3">Status</span>
                        </div>
                        <div class="box-right"><a href="#" class="task-status type-1">{{$task->status}}</a></div>

                    </li>
                    <li class="mt-20 list-desc-project">
                        <div class="box-left">
                            <div class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.9">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1611 0.833252C13.5061 0.833252 13.7861 1.11325 13.7861 1.45825L13.7865 2.16476C15.0032 2.24818 16.0138 2.66496 16.729 3.38167C17.5098 4.16584 17.9207 5.29334 17.9165 6.64584V14.2483C17.9165 17.025 16.1532 18.75 13.3157 18.75H6.26734C3.42984 18.75 1.6665 17.0008 1.6665 14.185V6.64417C1.6665 4.02516 3.23905 2.34404 5.80374 2.16505L5.80425 1.45825C5.80425 1.11325 6.08425 0.833252 6.42925 0.833252C6.77425 0.833252 7.05425 1.11325 7.05425 1.45825L7.054 2.14909H12.5357L12.5361 1.45825C12.5361 1.11325 12.8161 0.833252 13.1611 0.833252ZM16.6665 8.25325H2.9165V14.185C2.9165 16.3233 4.1065 17.5 6.26734 17.5H13.3157C15.4765 17.5 16.6665 16.345 16.6665 14.2483L16.6665 8.25325ZM13.5008 13.4968C13.8458 13.4968 14.1258 13.7768 14.1258 14.1218C14.1258 14.4668 13.8458 14.7468 13.5008 14.7468C13.1558 14.7468 12.8725 14.4668 12.8725 14.1218C12.8725 13.7768 13.1483 13.4968 13.4933 13.4968H13.5008ZM9.80292 13.4968C10.1479 13.4968 10.4279 13.7768 10.4279 14.1218C10.4279 14.4668 10.1479 14.7468 9.80292 14.7468C9.45792 14.7468 9.17459 14.4668 9.17459 14.1218C9.17459 13.7768 9.45042 13.4968 9.79542 13.4968H9.80292ZM6.09725 13.4968C6.44225 13.4968 6.72225 13.7768 6.72225 14.1218C6.72225 14.4668 6.44225 14.7468 6.09725 14.7468C5.75225 14.7468 5.46809 14.4668 5.46809 14.1218C5.46809 13.7768 5.74475 13.4968 6.08975 13.4968H6.09725ZM13.5008 10.2579C13.8458 10.2579 14.1258 10.5379 14.1258 10.8829C14.1258 11.2279 13.8458 11.5079 13.5008 11.5079C13.1558 11.5079 12.8725 11.2279 12.8725 10.8829C12.8725 10.5379 13.1483 10.2579 13.4933 10.2579H13.5008ZM9.80292 10.2579C10.1479 10.2579 10.4279 10.5379 10.4279 10.8829C10.4279 11.2279 10.1479 11.5079 9.80292 11.5079C9.45792 11.5079 9.17459 11.2279 9.17459 10.8829C9.17459 10.5379 9.45042 10.2579 9.79542 10.2579H9.80292ZM6.09725 10.2579C6.44225 10.2579 6.72225 10.5379 6.72225 10.8829C6.72225 11.2279 6.44225 11.5079 6.09725 11.5079C5.75225 11.5079 5.46809 11.2279 5.46809 10.8829C5.46809 10.5379 5.74475 10.2579 6.08975 10.2579H6.09725ZM12.5357 3.39909H7.054L7.05425 4.20075C7.05425 4.54575 6.77425 4.82575 6.42925 4.82575C6.08425 4.82575 5.80425 4.54575 5.80425 4.20075L5.80381 3.418C3.93695 3.57483 2.9165 4.70647 2.9165 6.64417V7.00325H16.6665L16.6665 6.64417C16.6698 5.615 16.3932 4.815 15.844 4.265C15.3619 3.78151 14.6572 3.49275 13.7868 3.4184L13.7861 4.20075C13.7861 4.54575 13.5061 4.82575 13.1611 4.82575C12.8161 4.82575 12.5361 4.54575 12.5361 4.20075L12.5357 3.39909Z" fill="#31394F"/>
                                    </g>
                                </svg>

                            </div>
                            <span class="h9 text-black-3">Start Date</span>
                        </div>
                        <div class="box-right dropdown">
                            <div class="dropdown-backdrop dropdown-due-date" data-bs-toggle="dropdown" aria-haspopup="true">
                                <span class="body-4 fw-5 valDate-due">{{$task->start_date}} </span>

                            </div>

                        </div>



                    <li class="mt-20 list-desc-project">
                        <div class="box-left">
                            <div class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.9">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.1611 0.833252C13.5061 0.833252 13.7861 1.11325 13.7861 1.45825L13.7865 2.16476C15.0032 2.24818 16.0138 2.66496 16.729 3.38167C17.5098 4.16584 17.9207 5.29334 17.9165 6.64584V14.2483C17.9165 17.025 16.1532 18.75 13.3157 18.75H6.26734C3.42984 18.75 1.6665 17.0008 1.6665 14.185V6.64417C1.6665 4.02516 3.23905 2.34404 5.80374 2.16505L5.80425 1.45825C5.80425 1.11325 6.08425 0.833252 6.42925 0.833252C6.77425 0.833252 7.05425 1.11325 7.05425 1.45825L7.054 2.14909H12.5357L12.5361 1.45825C12.5361 1.11325 12.8161 0.833252 13.1611 0.833252ZM16.6665 8.25325H2.9165V14.185C2.9165 16.3233 4.1065 17.5 6.26734 17.5H13.3157C15.4765 17.5 16.6665 16.345 16.6665 14.2483L16.6665 8.25325ZM13.5008 13.4968C13.8458 13.4968 14.1258 13.7768 14.1258 14.1218C14.1258 14.4668 13.8458 14.7468 13.5008 14.7468C13.1558 14.7468 12.8725 14.4668 12.8725 14.1218C12.8725 13.7768 13.1483 13.4968 13.4933 13.4968H13.5008ZM9.80292 13.4968C10.1479 13.4968 10.4279 13.7768 10.4279 14.1218C10.4279 14.4668 10.1479 14.7468 9.80292 14.7468C9.45792 14.7468 9.17459 14.4668 9.17459 14.1218C9.17459 13.7768 9.45042 13.4968 9.79542 13.4968H9.80292ZM6.09725 13.4968C6.44225 13.4968 6.72225 13.7768 6.72225 14.1218C6.72225 14.4668 6.44225 14.7468 6.09725 14.7468C5.75225 14.7468 5.46809 14.4668 5.46809 14.1218C5.46809 13.7768 5.74475 13.4968 6.08975 13.4968H6.09725ZM13.5008 10.2579C13.8458 10.2579 14.1258 10.5379 14.1258 10.8829C14.1258 11.2279 13.8458 11.5079 13.5008 11.5079C13.1558 11.5079 12.8725 11.2279 12.8725 10.8829C12.8725 10.5379 13.1483 10.2579 13.4933 10.2579H13.5008ZM9.80292 10.2579C10.1479 10.2579 10.4279 10.5379 10.4279 10.8829C10.4279 11.2279 10.1479 11.5079 9.80292 11.5079C9.45792 11.5079 9.17459 11.2279 9.17459 10.8829C9.17459 10.5379 9.45042 10.2579 9.79542 10.2579H9.80292ZM6.09725 10.2579C6.44225 10.2579 6.72225 10.5379 6.72225 10.8829C6.72225 11.2279 6.44225 11.5079 6.09725 11.5079C5.75225 11.5079 5.46809 11.2279 5.46809 10.8829C5.46809 10.5379 5.74475 10.2579 6.08975 10.2579H6.09725ZM12.5357 3.39909H7.054L7.05425 4.20075C7.05425 4.54575 6.77425 4.82575 6.42925 4.82575C6.08425 4.82575 5.80425 4.54575 5.80425 4.20075L5.80381 3.418C3.93695 3.57483 2.9165 4.70647 2.9165 6.64417V7.00325H16.6665L16.6665 6.64417C16.6698 5.615 16.3932 4.815 15.844 4.265C15.3619 3.78151 14.6572 3.49275 13.7868 3.4184L13.7861 4.20075C13.7861 4.54575 13.5061 4.82575 13.1611 4.82575C12.8161 4.82575 12.5361 4.54575 12.5361 4.20075L12.5357 3.39909Z" fill="#31394F"/>
                                    </g>
                                </svg>

                            </div>
                            <span class="h9 text-black-3">Due Date</span>
                        </div>
                        <div class="box-right dropdown">
                            <div class="dropdown-backdrop dropdown-due-date" data-bs-toggle="dropdown" aria-haspopup="true">
                                <span class="body-4 fw-5 valDate-due">{{$task->end_date}} </span>
                            </div>
                        </div>

                    </li>
                    <li class="mt-20 list-desc-project">
                        <div class="box-left">
                            <div class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.9">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.257 1.66675C15.877 1.66675 17.637 3.46091 17.637 6.13091V13.7942C17.637 16.4876 15.9312 18.2392 13.2912 18.2559L6.88034 18.2584C4.26034 18.2584 2.49951 16.4642 2.49951 13.7942V6.13091C2.49951 3.43675 4.20535 1.68591 6.84535 1.67008L13.2562 1.66675H13.257ZM13.257 2.91675L6.84951 2.92008C4.90951 2.93175 3.74951 4.13175 3.74951 6.13091V13.7942C3.74951 15.8067 4.92035 17.0084 6.87951 17.0084L13.287 17.0059C15.227 16.9942 16.387 15.7926 16.387 13.7942V6.13091C16.387 4.11841 15.217 2.91675 13.257 2.91675ZM13.0963 12.8948C13.4413 12.8948 13.7213 13.1748 13.7213 13.5198C13.7213 13.8648 13.4413 14.1448 13.0963 14.1448H7.0796C6.73459 14.1448 6.45459 13.8648 6.45459 13.5198C6.45459 13.1748 6.73459 12.8948 7.0796 12.8948H13.0963ZM13.0963 9.40608C13.4413 9.40608 13.7213 9.68608 13.7213 10.0311C13.7213 10.3761 13.4413 10.6561 13.0963 10.6561H7.0796C6.73459 10.6561 6.45459 10.3761 6.45459 10.0311C6.45459 9.68608 6.73459 9.40608 7.0796 9.40608H13.0963ZM9.37518 5.92542C9.72018 5.92542 10.0002 6.20542 10.0002 6.55042C10.0002 6.89542 9.72018 7.17542 9.37518 7.17542H7.07934C6.73434 7.17542 6.45434 6.89542 6.45434 6.55042C6.45434 6.20542 6.73434 5.92542 7.07934 5.92542H9.37518Z" fill="#31394F"/>
                                    </g>
                                </svg>
                            </div>
                            <span class="h9 text-black-3">Attachment</span>
                        </div>
                        <div class="box-right uploadfile">
                            @if($task->attachment)
                            @foreach ($task->attach_comments as $attachment)
                            <div class="file-name"><span class="icon-upfile"></span> {{$attachment}}</div>
                            @endforeach
                            @endif
                            <input type="file" class="add-file">
                        </div>

                    </li>

                </ul>



                <div class="mt-28">
                    <h5 class="text-black-2">Sub Task (CheckList)({{$task->checklists->count()}})</h5>

                    <ul class="mt-20">
                        @forelse ($task->checklists as $checklist)
                            <a href="{{route('checklists.show',['task' => $task->id,'checklist' => $checklist->id])}}" class="btn-edit-task">
                                <li class="list-task-item mb-2">
                                    <label for="task_{{$checklist->id}}" class="content-task">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="title h8 fw-7 text-black-2 ">{{$checklist->title}}</div>
                                            </div>
                                            <div class="col-md-2">
                                                <label style="left: 52px;
    position: relative;" class="task-status type-1">@if($checklist->status == 0)New @else Completed @endif</label>
                                            </div>
                                        </div>

                                    </label>
                                </li>
                            </a>
                        @empty
                            <p class="text-center text-black-2 justify-center">No Sub Task Found</p>
                        @endforelse
                    </ul>
                </div>



                <h5 class="mt-20 text-black-2">Comments</h5>

                @if($task->attach_comments->count() > 0)
                <div class="post-comments">
                        <h3 class="comment-title"><span>Post comments</span></h3>
                        <ul class="comments-list m ">
                            @forelse ($task->attach_comments as $comment)
                                <li class="mb-4">
                                        <div class="comment-img">
                                                <img src="@if($comment->user->image) {{asset('storage/uploads/users/images/'. $comment->user->image)}} @else https://via.placeholder.com/150x150" @endif alt="img">
                                        </div>
                                        <div class="comment-desc">
                                                <div class="desc-top">
                                                        <h6>{{$comment->user->name}}</h6>
                                                        <span class="date">{{$comment->created_at->format('d M Y h:m')}}</span>
                                                        <a href="javascript:void(0)" class="reply-link"><i class="lni lni-reply"></i>Reply</a>
                                                </div>
                                                <p>
                                                    {{$comment->body}}
                                                    @if($comment->file_path)
                                                        <div class="attachment mb-2">
                                                            @php
                                                                $file = Storage::disk('public')->url($comment->file_path);
                                                                $extension = pathinfo($file, PATHINFO_EXTENSION);
                                                            @endphp

                                                            @if(in_array(strtolower($extension), ['jpg', 'jpeg', 'png']))
                                                            {{-- @dd($comment->file_path) --}}
                                                            <a href="{{asset('storage/'.$comment->file_path )}}" target="_blank">
                                                                <img src="{{asset('storage/'.$comment->file_path )}}" alt="Attachment" class="img-fluid" style="max-width: 100px;">
                                                                 </a>
                                                            @elseif(in_array(strtolower($extension), ['mp4', 'mov', 'avi']))

                                                                <video width="320" height="240" controls>
                                                                    <source src="{{ $file }}" type="video/{{ strtolower($extension) }}">
                                                                    Your browser does not support the video tag.
                                                                </video>
                                                            @else
                                                                <a href="{{asset('storage/'.$comment->file_path )}}" target="_blank" class="btn btn-primary btn-sm">View Attachment</a>
                                                            @endif
                                                        </div>
                                                    @endif

                                                </p>
                                        </div>
                                </li>
                                @empty
                                No comments yet
                            @endforelse
                    </ul>
                </div>
                @endif
                <div class="mt-40">
                    <div class="enter-task">
                        <ul class="box-left">
                            <li><a href="#attachment">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 8H15.01" stroke="#31394F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17 4H7C5.34315 4 4 5.34315 4 7V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V7C20 5.34315 18.6569 4 17 4Z" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M4 15L8 11C8.45606 10.5611 8.97339 10.3301 9.5 10.3301C10.0266 10.3301 10.5439 10.5611 11 11L16 16" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14 14L15 13C15.4561 12.5611 15.9734 12.3301 16.5 12.3301C17.0266 12.3301 17.5439 12.5611 18 13L20 15" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a></li>
                            <li><a href="#attachment">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.1665 11.9167C9.56017 12.443 10.0624 12.8785 10.6392 13.1936C11.2159 13.5087 11.8537 13.6961 12.5093 13.743C13.1648 13.79 13.8228 13.6954 14.4386 13.4657C15.0543 13.236 15.6135 12.8765 16.0782 12.4117L18.8282 9.66172C19.6631 8.79729 20.125 7.63953 20.1146 6.43779C20.1042 5.23606 19.6221 4.0865 18.7723 3.23671C17.9226 2.38693 16.773 1.9049 15.5713 1.89446C14.3695 1.88402 13.2118 2.34599 12.3473 3.18088L10.7707 4.74838" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.8335 10.0834C12.4399 9.55709 11.9376 9.12163 11.3608 8.80652C10.7841 8.4914 10.1463 8.30402 9.49075 8.25707C8.83521 8.21012 8.17723 8.30471 7.56145 8.53441C6.94567 8.76411 6.3865 9.12356 5.92185 9.58838L3.17185 12.3384C2.33696 13.2028 1.87498 14.3606 1.88543 15.5623C1.89587 16.764 2.37789 17.9136 3.22768 18.7634C4.07747 19.6132 5.22703 20.0952 6.42876 20.1056C7.6305 20.1161 8.78826 19.6541 9.65268 18.8192L11.2202 17.2517" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </a></li>

                            <li><a href="#comment-body">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 20L9 17H7C6.20435 17 5.44129 16.6839 4.87868 16.1213C4.31607 15.5587 4 14.7956 4 14V8C4 7.20435 4.31607 6.44129 4.87868 5.87868C5.44129 5.31607 6.20435 5 7 5H17C17.7956 5 18.5587 5.31607 19.1213 5.87868C19.6839 6.44129 20 7.20435 20 8V14C20 14.7956 19.6839 15.5587 19.1213 16.1213C18.5587 16.6839 17.7956 17 17 17H15L12 20Z" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 9H16" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 13H14" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="box-description-task mt-10">
                    <form action="{{route('comments.store', $task->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                       <input type="hidden" name="comm_attach_able_id" value="{{ $task->id }}">
                       <input type="hidden" name="comm_attach_able_type" value="App\Models\Task">

                        <textarea class="form-control" name="body" id="comment-body"  placeholder="Add a comment" ></textarea>
                        <div class="mt-20">
                            <label for="attachment">Attachment (Optional)</label>
                        <input class="form-control" name="file" id="attachment" placeholder="Add a file"  type="file"></input>
                        <div class="mt-20">
                        <div id="preview" class="mb-3"></div>
                        <button class="tf-btn" type="submit">Add Comment</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
{{-- @include('partials.footer') --}}



@push('js')
<script src="{{asset('assets/js/file.js')}}"></script>

@endpush
@endsection
