<div class="offcanvas offcanvas-bottom" tabindex="-1" id="createProject" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header style-1">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create Project</h5>
    <span class="icon-close2 icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
  </div>
  <div class="offcanvas-body pb-32">
    <x-dashboard.alert />
    <form action="{{ route('projects.store') }}" method="POST">
      @csrf
      <input type="text" placeholder="Project Name" name="name" required>
      <input type="text" placeholder="Project Name" name="name" required>
      <div class="mt-24">
          <h5 class="text-black-2">Layout</h5>
          <ul class="grid-2 gap-20 mt-16">
              <li class="layout-project act-suggest active">
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.84426 3.04199C7.15926 3.04199 7.41462 3.29735 7.41462 3.61235V6.27403H10.0763C10.3913 6.27403 10.6467 6.5294 10.6467 6.84439C10.6467 7.15938 10.3913 7.41475 10.0763 7.41475H7.41462V10.0764C7.41462 10.3914 7.15926 10.6468 6.84426 10.6468C6.52927 10.6468 6.27391 10.3914 6.27391 10.0764V7.41475H3.61223C3.29723 7.41475 3.04187 7.15938 3.04187 6.84439C3.04187 6.5294 3.29723 6.27403 3.61223 6.27403H6.27391V3.61235C6.27391 3.29735 6.52927 3.04199 6.84426 3.04199Z" fill="#31394F"/>
                      <path d="M0 2.47156C0 1.10655 1.10655 0 2.47156 0H11.2171C12.582 0 13.6886 1.10655 13.6886 2.47156V11.2171C13.6886 12.582 12.582 13.6886 11.2171 13.6886H2.47156C1.10655 13.6886 0 12.582 0 11.2171V2.47156ZM2.47156 1.14072C1.73655 1.14072 1.14072 1.73655 1.14072 2.47156V11.2171C1.14072 11.9521 1.73655 12.5479 2.47156 12.5479H11.2171C11.9521 12.5479 12.5479 11.9521 12.5479 11.2171V2.47156C12.5479 1.73655 11.9521 1.14072 11.2171 1.14072H2.47156Z" fill="#31394F"/>
                      </svg>
                      
                  <span class="h9">List</span>                            
              </li>
              <li class="layout-project act-suggest">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g opacity="0.8">
                      <path d="M3.33337 3.33325H8.33337M11.6667 3.33325H16.6667M5.00004 6.66659H6.66671C7.58718 6.66659 8.33337 7.41278 8.33337 8.33325V14.9999C8.33337 15.9204 7.58718 16.6666 6.66671 16.6666H5.00004C4.07957 16.6666 3.33337 15.9204 3.33337 14.9999V8.33325C3.33337 7.41278 4.07957 6.66659 5.00004 6.66659ZM13.3334 6.66659H15C15.9205 6.66659 16.6667 7.41278 16.6667 8.33325V9.99992C16.6667 10.9204 15.9205 11.6666 15 11.6666H13.3334C12.4129 11.6666 11.6667 10.9204 11.6667 9.99992V8.33325C11.6667 7.41278 12.4129 6.66659 13.3334 6.66659Z" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </g>
                  </svg>
                  <span class="h9">Board</span>  
              </li>
          </ul>
      </div>

      <div class="mt-24">
          <a href="invite-colleagues.html" class="tf-btn outline-btn-primary style-1 gap-8">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.84426 6.04199C10.1593 6.04199 10.4146 6.29735 10.4146 6.61235V9.27403H13.0763C13.3913 9.27403 13.6467 9.5294 13.6467 9.84439C13.6467 10.1594 13.3913 10.4147 13.0763 10.4147H10.4146V13.0764C10.4146 13.3914 10.1593 13.6468 9.84426 13.6468C9.52927 13.6468 9.27391 13.3914 9.27391 13.0764V10.4147H6.61223C6.29723 10.4147 6.04187 10.1594 6.04187 9.84439C6.04187 9.5294 6.29723 9.27403 6.61223 9.27403H9.27391V6.61235C9.27391 6.29735 9.52927 6.04199 9.84426 6.04199Z" fill="#7980FF"/>
                  <path d="M3 5.47156C3 4.10655 4.10655 3 5.47156 3H14.2171C15.582 3 16.6886 4.10655 16.6886 5.47156V14.2171C16.6886 15.582 15.582 16.6886 14.2171 16.6886H5.47156C4.10655 16.6886 3 15.582 3 14.2171V5.47156ZM5.47156 4.14072C4.73655 4.14072 4.14072 4.73655 4.14072 5.47156V14.2171C4.14072 14.9521 4.73655 15.5479 5.47156 15.5479H14.2171C14.9521 15.5479 15.5479 14.9521 15.5479 14.2171V5.47156C15.5479 4.73655 14.9521 4.14072 14.2171 4.14072H5.47156Z" fill="#7980FF"/>
              </svg>
              Add Member
          </a>
          <a href="create-task.html" class="mt-35 tf-btn primary">Create Project</a>
      </div>
    </form>
  </div>
</div>