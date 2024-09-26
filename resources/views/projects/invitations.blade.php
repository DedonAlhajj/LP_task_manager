@extends('layouts.master')

@section('title', 'Project Details')
@section('content')
    @include('partials.header')



      <div class="overflow-auto app-content">
          <div class="tf-container">
              
              @if(count($projects) > 0)
              <div class="mt-24">
                  <div class="d-flex align-items-center justify-content-between">
                      <h6 class="text-black-2">My Invitations</h6>
                      <a href="javascript:void(0);" class="icon-more fs-20 text-black-5"></a>
                  </div>
                  <ul class="mt-20">
                    {{-- @dd($projects) --}}
                    @foreach ($projects as $project )
                      @if($project->pivot->status  == 'disapproved')
                        <li>
                            <div class="box-noti-task">
                                <div class="avatar avt-36">
                                    <img src="images/avt/avt8.jpg" alt="avt">
                                </div>
                                <div class="content">
                                    <div class="title">{{$project->user->name}}<span> invite you </span> to become a member of the project <span class="text-primary-2">“{{$project->name}}”</span></div>
                                    {{-- <p class="mt-6">{{$$project->pivot->created_at->diffForHumans()}} <span class="dot"> --}}
                                </div>
                                {{-- <div class="btn-group " style="left: 0; right:10px"> --}}
                                <button id="accept-invitation" data-invitation-id={{ $project->id}}  >Accept</button>
                                {{-- </div> --}}
                            </div>
                        </li>
                       
                           

                        @endif
                    @endforeach
                   
                  </ul>
              </div>
              @else
              <div class="box-empty-inbox">
                <img src="images/background/empty-task2.jpg" alt="empty-notification">
                <div class="mt-40">
                    <h5 class="text-black-2 text-center">You haven’t any invitations yet.</h5>
                    <p class="mt-12 text-black-5 text-center px-4 body-2">Let us notify you and show the invitations here for better communication.</p>
                </div>
            </div>
            @endif
            
          </div>
      </div>       
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
          $(document).ready(function() {
              $('#accept-invitation').click(function() {
                  let project_Id = $(this).data('invitation-id');
                  $.ajax({
                      url: '{{ route('projects.updateStatus') }}', // Route to handle the accept action
                      type: 'patch',
                      data: 
                      {
                          _token: '{{ csrf_token() }}', // CSRF token for Laravel
                          projectId: project_Id
                      },
                      success: function(response) {
                          // Handle success - for example, show a success message
                          alert(response.message);
                      },
                      error: function(xhr, status, error) {
                          // Handle error
                          console.error(xhr.responseText);
                          alert('An error occurred while accepting the invitation.');
                      }
                  });
              });
          });
      </script>



@endsection
