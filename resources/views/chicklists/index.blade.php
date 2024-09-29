@extends('layouts.master')
@section('title', 'My Projects')
@section('content')

    <div class="header-style2 fixed-top line-bt">

        <div class="left">
            <a href="javascript:void(0);" class="icon back-btn"><i class="icon-back"></i></a>
            <h5>Home</h5>
        </div>

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

                        <form action="{{route('checklists.destroy',['task' => $task, 'checklist' => $check->id])}}" method="Post">
                            @csrf
                            @method('delete')
                            <button class="dropdown-item text-danger"  type="submit" >
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 5H4.16667H17.5" stroke="#F05A5A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.6665 5.00008V3.33341C6.6665 2.89139 6.8421 2.46746 7.15466 2.1549C7.46722 1.84234 7.89114 1.66675 8.33317 1.66675H11.6665C12.1085 1.66675 12.5325 1.84234 12.845 2.1549C13.1576 2.46746 13.3332 2.89139 13.3332 3.33341V5.00008M15.8332 5.00008V16.6667C15.8332 17.1088 15.6576 17.5327 15.345 17.8453C15.0325 18.1578 14.6085 18.3334 14.1665 18.3334H5.83317C5.39114 18.3334 4.96722 18.1578 4.65466 17.8453C4.3421 17.5327 4.1665 17.1088 4.1665 16.6667V5.00008H15.8332Z" stroke="#F05A5A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Delete Checklist
                            </button>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="tf-container">
            <x-dashboard.alert />
            <div class="mt-24">
                <h5 class="mt-20 text-black-2">Title</h5>
                <div class="box-description-task">
                    <p class="mt-12 body-2 text-black-4">
                        {{$check->title}}</p>
                </div>
                <ul class="mt-24">
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
                        <div class="box-right"><a href="#" class="task-status type-1">@if($check->status==0)New @else Completed @endif</a></div>

                    </li>
                </ul>



                <h5 class="mt-20 text-black-2">Comments</h5>

                @if($check->attach_comments->count() > 0)
                    <div class="post-comments">
                        <h3 class="comment-title"><span>Sub Task comments</span></h3>
                        <ul class="comments-list m ">
                            @forelse ($check->attach_comments as $comment)
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
                    <form action="{{route('comments.store', $check->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="comm_attach_able_id" value="{{ $check->id }}">
                        <input type="hidden" name="comm_attach_able_type" value="App\Models\Checklist">

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
