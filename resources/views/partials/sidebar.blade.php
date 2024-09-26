<div class="modal fade modalLeft" id="sidebar">
  <div class="modal-dialog" role="document">
      <div class="modal-content modal-sidebar">
          <div class="sidebar-header" style="background-image: url('images/background/line-logo.html')">
              <a href="index.html" class="sidebar-logo">
                  <img src="images/logo/168.png" alt="img">
              </a>
              <p>Task Management App</p>
          </div>
          <div class="sidebar-content">
              <div class="d-flex gap-10 align-items-center pb-20 line-bt">
                  <div class="avatar avt-40">
                      <img src="images/avt/avt2.jpg" alt="img">
                  </div>
                  <div class="content-right">
                      <p class="text-1">
                        {{-- @if(date('A', strtotime()) == 'PM')
                            Good Evening,
                        @else
                            Good Morning,
                        @endif</p> --}}
                      <h6 class="fw-7">{{Auth::user()->name}}</h6>
                  </div>
              </div>
              <ul class="pt-20 pb-20">
                  <li class="text-sm-start text-uppercase fw-7 text-2">Main menu</li>
                  <li class="mt-18 sub-menu" id="accordionExample">
                      <a href="javascript:void(0);" class="nav-link-item collapsed" 
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseOne"
                          aria-expanded="true"
                          aria-controls="collapseOne">
                          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M7.62043 17.3185V14.7628C7.62042 14.1152 8.14704 13.589 8.79935 13.5849H11.1945C11.8497 13.5849 12.3809 14.1123 12.3809 14.7628V17.3111C12.3809 17.8728 12.8373 18.3293 13.4031 18.3334H15.0372C15.8003 18.3354 16.5329 18.0357 17.0733 17.5007C17.6136 16.9656 17.9173 16.239 17.9173 15.4813V8.22162C17.9173 7.60957 17.644 7.02901 17.1712 6.63633L11.6198 2.22864C10.6494 1.45768 9.26346 1.48259 8.32181 2.2879L2.88983 6.63633C2.3946 7.01743 2.09861 7.59972 2.08398 8.22162V15.4739C2.08398 17.0532 3.37347 18.3334 4.96413 18.3334H6.56089C6.83329 18.3354 7.09522 18.2293 7.28855 18.0388C7.48187 17.8482 7.59059 17.589 7.59058 17.3185H7.62043Z" fill="#D3D5DA"/>
                          </svg>
                          <span>Home</span>
                      </a>
                     <ul 
                          id="collapseOne"
                          class="accordion-collapse collapse"
                          data-bs-parent="#accordionExample">
                          <li><a href="index.html" class="sub-menu-children">
                              <i class="icon-btn-group"></i>
                               Home 01
                          </a> </li>
                          <li><a href="home-02.html" class="sub-menu-children">
                              <i class="icon-btn-group"></i>
                              
                              Home 02
                          </a> </li>
                          <li><a href="home-03.html" class="sub-menu-children">
                              <i class="icon-btn-group"></i>
                              
                              Home 03
                          </a> 
                          </li>
                           
                      </li>

                     </ul>

                  </li>
      
                  <li class="mt-16">
                      <a href="profile.html" class="nav-link-item not-link">
                          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path d="M9.99815 12.6455C6.40398 12.6455 3.33398 13.2122 3.33398 15.4788C3.33398 17.7463 6.38482 18.333 9.99815 18.333C13.5923 18.333 16.6623 17.7672 16.6623 15.4997C16.6623 13.2322 13.6123 12.6455 9.99815 12.6455Z" fill="#D3D5DA"/>
                              <path opacity="0.4" d="M9.99789 10.4865C12.4462 10.4865 14.4079 8.524 14.4079 6.0765C14.4079 3.629 12.4462 1.6665 9.99789 1.6665C7.55039 1.6665 5.58789 3.629 5.58789 6.0765C5.58789 8.524 7.55039 10.4865 9.99789 10.4865Z" fill="#D3D5DA"/>
                          </svg>
                          <span>Profile</span>
                      </a>
                  </li>


                  <li class="mt-16">
                    <a href="{{route('projects.myProjects')}}" class="nav-link-item not-link">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                           
                            <path opacity="0.4" d="M13.3947 1.66675H16.2164C17.3849 1.66675 18.3318 2.62162 18.3318 3.80005V6.64552C18.3318 7.82395 17.3849 8.77882 16.2164 8.77882H13.3947C12.2262 8.77882 11.2793 7.82395 11.2793 6.64552V3.80005C11.2793 2.62162 12.2262 1.66675 13.3947 1.66675Z" fill="#D3D5DA"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.78145 1.66675H6.60309C7.77165 1.66675 8.71853 2.62162 8.71853 3.80005V6.64552C8.71853 7.82395 7.77165 8.77882 6.60309 8.77882H3.78145C2.6129 8.77882 1.66602 7.82395 1.66602 6.64552V3.80005C1.66602 2.62162 2.6129 1.66675 3.78145 1.66675ZM3.78145 11.2213H6.60309C7.77165 11.2213 8.71853 12.1762 8.71853 13.3546V16.2001C8.71853 17.3777 7.77165 18.3334 6.60309 18.3334H3.78145C2.6129 18.3334 1.66602 17.3777 1.66602 16.2001V13.3546C1.66602 12.1762 2.6129 11.2213 3.78145 11.2213ZM16.2172 11.2213H13.3956C12.227 11.2213 11.2802 12.1762 11.2802 13.3546V16.2001C11.2802 17.3777 12.227 18.3334 13.3956 18.3334H16.2172C17.3858 18.3334 18.3327 17.3777 18.3327 16.2001V13.3546C18.3327 12.1762 17.3858 11.2213 16.2172 11.2213Z" fill="#D3D5DA"></path>
                        
                        </svg>
                        <span>My Invites</span>
                    </a>
                </li>


                  <li class="mt-16">
    
                      <a type="submit" onclick="document.getElementById('logout-form').submit();"  class="nav-link-item not-link">
                          <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                              <path opacity="0.4" d="M1.66602 5.37258C1.66602 3.33008 3.35788 1.66675 5.43646 1.66675H9.57072C11.6451 1.66675 13.3327 3.32508 13.3327 5.36425V14.6276C13.3327 16.6709 11.6408 18.3334 9.56139 18.3334H5.42883C3.35364 18.3334 1.66602 16.6751 1.66602 14.6359V13.8526V5.37258Z" fill="#D3D5DA"/>
                              <path d="M18.149 9.54579L15.7775 7.12162C15.5324 6.87162 15.138 6.87162 14.8937 7.12329C14.6502 7.37495 14.651 7.78079 14.8953 8.03079L16.1947 9.35828H14.9489H7.95696C7.61203 9.35828 7.33203 9.64579 7.33203 9.99995C7.33203 10.355 7.61203 10.6416 7.95696 10.6416H16.1947L14.8953 11.9691C14.651 12.2191 14.6502 12.625 14.8937 12.8766C15.0162 13.0025 15.1761 13.0658 15.3368 13.0658C15.4959 13.0658 15.6558 13.0025 15.7775 12.8783L18.149 10.455C18.2667 10.3341 18.3333 10.1708 18.3333 9.99995C18.3333 9.82995 18.2667 9.66662 18.149 9.54579Z" fill="#D3D5DA"/>
                          </svg>
                          <span>Logout</span>
                        </a>
                        <form action="{{route('logout')}}" method="post"   id="logout-form">
                            @csrf
                        </form>

                  </li>
              </ul>
              
          </div>
          
          
      </div>
  </div>
</div>