<div class="offcanvas offcanvas-bottom" tabindex="-1" id="createProject" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header style-1">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create Project</h5>
    <span class="icon-close2 icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
  </div>
  <div class="offcanvas-body pb-32 card">
    <x-dashboard.alert />
    <form action="{{ route('projects.store') }}" method="POST">
      @csrf
      <div class="card-body">
        <form>
            <fieldset class="mt-20 input-stroke">
                <label>Project name</label>
                <input type="text" placeholder="Enter your name" name="name" class="form-control">
            </fieldset>
            <fieldset class="mt-20 input-stroke">
                <label>Detials</label>
                <textarea type="text" placeholder="Enter your email address" name="details" rows="2"  class="form-control"></textarea>
            </fieldset>

            <fieldset class="mt-20 input-stroke">
                <label>Start date</label>
                <input type="date" class="form-control" name="start_date">
            </fieldset>
            <fieldset class="mt-20 input-stroke">
                <label>End date</label>
                <input type="date" class="form-control" name="end_date">
            </fieldset>
            <fieldset class="mt-20 input-upload">
                <label>Project Image</label>

                <span class="icon icon-upload2"></span>
                <input type="file" name="image" class="upload-file">
            </fieldset>
        
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