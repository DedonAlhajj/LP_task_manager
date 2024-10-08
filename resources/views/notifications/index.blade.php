<div class="offcanvas offcanvas-end full" id="notification" >
  <div class="header fixed-top line-bt">
      <div class="left" data-bs-dismiss="offcanvas">
          <a href="javascript:void(0);" class="icon"><i class="icon-back"></i></a>
      </div>
      <h5>Notification</h5>
      <div class="right">
          <a href="javascript:void(0);" class="icon text-black-6"><i class="icon-search"></i></a>
      </div>
  </div>
  <div class="overflow-auto app-content">
      <div class="tf-container">
          <div class="mt-24 d-flex justify-content-between align-items-center">
              <div class="box-filter select-wrapper style-2">
                  <select class="tf-select">
                      <option>All</option>
                  </select>
              </div>
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
          <div class="mt-24 d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-center gap-8">
                  <h6 class="text-black-2">Unread</h6>
                  <span class="num-task type-4">2</span>
              </div>
              <a href="javascript:void(0);" class="icon-more fs-20 text-black-5"></a>
          </div>
          <ul class="mt-20">
              @foreach(auth()->user()->unreadNotifications as $notification)
              <li>
                  <a href="{{ $notification->data['url'] }}" class="box-noti-task">
                      <div class="avatar avt-36">
                          <img src="images/avt/avt1.jpg" alt="avt">
                      </div>
                      <div class="content">
                          <div class="title">{{ $notification->data['message'] }} <span>mentoined you on</span></div>
                          <p class="mt-6">Today at 10:04 AM <span class="dot"></span>Redesign Dashboar...</p>
                      </div>
                  </a>
              </li>
              @endforeach
              
              <li class="mt-16">
                  <a href="#" class="box-noti-task">
                      <div class="avatar avt-36">
                          <img src="images/avt/avt4.jpg" alt="avt">
                      </div>
                      <div class="content">
                          <div class="title">Zara Yasmin Tasnim <span>mentoined you on</span> Redesign Dashboard Finance</div>
                          <p class="mt-6">Today at 10:04 AM <span class="dot"></span>Redesign Dashboar...</p>
                      </div>
                  </a>
              </li>
          </ul>
          <div class="mt-24">
              <div class="d-flex align-items-center justify-content-between">
                  <h6 class="text-black-2">Yesterday</h6>
                  <a href="javascript:void(0);" class="icon-more fs-20 text-black-5"></a>
              </div>
              <ul class="mt-20">
                  <li>
                      <a href="#" class="box-noti-task">
                          <div class="avatar avt-36">
                              <img src="images/avt/avt8.jpg" alt="avt">
                          </div>
                          <div class="content">
                              <div class="title">David Malan<span>mentoined you on</span> Real Estate Website Design Project </div>
                              <p class="mt-6">Yesterday at 2:40 PM <span class="dot"></span>Real Estate We...</p>
                          </div>
                      </a>
                  </li>
                  <li class="mt-16">
                      <a href="#" class="box-noti-task">
                          <div class="avatar avt-36">
                              <img src="images/avt/avt5.jpg" alt="avt">
                          </div>
                          <div class="content">
                              <div class="title">Ikram Islam Tamim <span>mentoined you on</span> Architecture Web Design Project</div>
                              <p class="mt-6">Yeasterday at 1:10 PM <span class="dot"></span>Architecture We...</p>
                          </div>
                      </a>
                  </li>
              </ul>
          </div>

      </div>
  </div>
</div>
