<div class="offcanvas offcanvas-bottom" tabindex="-1" id="createProject" aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header style-1">
        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create Project</h5>
        <span class="icon-close2 icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    </div>
    <div class="offcanvas-body pb-32 card">
        <x-dashboard.alert/>
        <div class="card-body">
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                <fieldset class="mt-20 input-stroke">
                    <label>Project name</label>
                    <input type="text" placeholder="Enter your name" name="name" class="form-control">
                </fieldset>
                <fieldset class="mt-20 input-stroke">
                    <label>Detials</label>
                    <textarea type="text" placeholder="Enter your email address" name="details" rows="2"
                              class="form-control"></textarea>
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


                <div class="mt-24">
                    <button class="mt-35 tf-btn primary" type="submit">Create Project</button>
                </div>
            </form>
        </div>
    </div>
</div>
