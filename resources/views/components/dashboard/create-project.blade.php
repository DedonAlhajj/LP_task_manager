<div class="offcanvas show-create offcanvas-bottom" tabindex="-1" id="createProject"
     aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header style-1">
        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create Project</h5>
        <span class="icon-close2 icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    </div>


    <div class="alert alert-success light alert-dismissible fade show mb-10 mt-5 alert-success-create" role="alert"
         style="display:none ">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path
                d="M16.2806 9.21937C16.3504 9.28903 16.4057 9.37175 16.4434 9.46279C16.4812 9.55384 16.5006 9.65144 16.5006 9.75C16.5006 9.84856 16.4812 9.94616 16.4434 10.0372C16.4057 10.1283 16.3504 10.211 16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.289 9.14964 15.3718 9.09432 15.4628 9.05658C15.5538 9.01884 15.6514 8.99941 15.75 8.99941C15.8486 8.99941 15.9462 9.01884 16.0372 9.05658C16.1283 9.09432 16.211 9.14964 16.2806 9.21937ZM21.75 12C21.75 13.9284 21.1782 15.8134 20.1068 17.4168C19.0355 19.0202 17.5127 20.2699 15.7312 21.0078C13.9496 21.7458 11.9892 21.9389 10.0979 21.5627C8.20656 21.1865 6.46928 20.2579 5.10571 18.8943C3.74215 17.5307 2.81355 15.7934 2.43735 13.9021C2.06114 12.0108 2.25422 10.0504 2.99218 8.26884C3.73013 6.48726 4.97982 4.96451 6.58319 3.89317C8.18657 2.82183 10.0716 2.25 12 2.25C14.585 2.25273 17.0634 3.28084 18.8913 5.10872C20.7192 6.93661 21.7473 9.41498 21.75 12ZM20.25 12C20.25 10.3683 19.7661 8.77325 18.8596 7.41655C17.9531 6.05984 16.6646 5.00242 15.1571 4.37799C13.6497 3.75357 11.9909 3.59019 10.3905 3.90852C8.79017 4.22685 7.32016 5.01259 6.16637 6.16637C5.01259 7.32015 4.22685 8.79016 3.90853 10.3905C3.5902 11.9908 3.75358 13.6496 4.378 15.1571C5.00242 16.6646 6.05984 17.9531 7.41655 18.8596C8.77326 19.7661 10.3683 20.25 12 20.25C14.1873 20.2475 16.2843 19.3775 17.8309 17.8309C19.3775 16.2843 20.2475 14.1873 20.25 12Z"
                fill="#54B24C"></path>
        </svg>
        <span id="message_create"> </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert-success" aria-label="Close_success">
            <span class="icon-close icon-close-popup" data-bs-dismiss="alert" aria-label="Close_success"></span>
        </button>
    </div>
    <div class="alert alert-danger light alert-dismissible fade show mb-10 mt-5  alert-danger-create " role="alert"
         style="display:none ">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path
                d="M11.25 12.75V7.50001C11.25 7.3011 11.329 7.11033 11.4697 6.96968C11.6103 6.82903 11.8011 6.75001 12 6.75001C12.1989 6.75001 12.3897 6.82903 12.5303 6.96968C12.671 7.11033 12.75 7.3011 12.75 7.50001V12.75C12.75 12.9489 12.671 13.1397 12.5303 13.2803C12.3897 13.421 12.1989 13.5 12 13.5C11.8011 13.5 11.6103 13.421 11.4697 13.2803C11.329 13.1397 11.25 12.9489 11.25 12.75ZM21.75 8.58282V15.4172C21.7506 15.6143 21.7121 15.8095 21.6366 15.9915C21.5611 16.1735 21.4502 16.3387 21.3103 16.4775L16.4775 21.3103C16.3387 21.4502 16.1735 21.5611 15.9915 21.6366C15.8095 21.7121 15.6143 21.7506 15.4172 21.75H8.58282C8.38577 21.7506 8.19055 21.7121 8.00852 21.6366C7.8265 21.5611 7.66129 21.4502 7.52251 21.3103L2.6897 16.4775C2.5498 16.3387 2.43889 16.1735 2.36341 15.9915C2.28792 15.8095 2.24938 15.6143 2.25001 15.4172V8.58282C2.24938 8.38577 2.28792 8.19055 2.36341 8.00852C2.43889 7.8265 2.5498 7.66129 2.6897 7.52251L7.52251 2.6897C7.66129 2.5498 7.8265 2.43889 8.00852 2.36341C8.19055 2.28792 8.38577 2.24938 8.58282 2.25001H15.4172C15.6143 2.24938 15.8095 2.28792 15.9915 2.36341C16.1735 2.43889 16.3387 2.5498 16.4775 2.6897L21.3103 7.52251C21.4502 7.66129 21.5611 7.8265 21.6366 8.00852C21.7121 8.19055 21.7506 8.38577 21.75 8.58282ZM20.25 8.58282L15.4172 3.75001H8.58282L3.75001 8.58282V15.4172L8.58282 20.25H15.4172L20.25 15.4172V8.58282ZM12 15C11.7775 15 11.56 15.066 11.375 15.1896C11.19 15.3132 11.0458 15.4889 10.9606 15.6945C10.8755 15.9001 10.8532 16.1263 10.8966 16.3445C10.94 16.5627 11.0472 16.7632 11.2045 16.9205C11.3618 17.0778 11.5623 17.185 11.7805 17.2284C11.9988 17.2718 12.225 17.2495 12.4305 17.1644C12.6361 17.0792 12.8118 16.935 12.9354 16.75C13.059 16.565 13.125 16.3475 13.125 16.125C13.125 15.8266 13.0065 15.5405 12.7955 15.3295C12.5845 15.1185 12.2984 15 12 15Z"
                fill="#E10000"/>
        </svg>
        <span>
            <ul id="message_error_create">
            </ul>
            </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close_error">
            <span class="icon-close2 icon-close-popup" data-bs-dismiss="alert" aria-label="Close_error"></span>
        </button>

    </div>


    <div class="offcanvas-body pb-32 card">
        <div class="card-body">
            <form method="POST">
                @csrf
                <fieldset class="mt-20 input-stroke">
                    <label>Project name</label>
                    <input type="text" placeholder="Enter your name" name="name" id="name" class="form-control">
                </fieldset>
                <fieldset class="mt-20 input-stroke">
                    <label>Detials</label>
                    <textarea type="text" placeholder="Enter your email address" name="details" id="details" rows="2"
                              class="form-control"></textarea>
                </fieldset>

                <fieldset class="mt-20 input-stroke">
                    <label>Start date</label>
                    <input type="date" class="form-control" name="start_date" id="start_date">
                </fieldset>
                <fieldset class="mt-20 input-stroke">
                    <label>End date</label>
                    <input type="date" class="form-control" name="end_date" id="end_date">
                </fieldset>
                <fieldset class="mt-20 input-upload">
                    <label>Project Image</label>

                    <span class="icon icon-upload2"></span>
                    <input type="file" name="image" class="upload-file" id="image">
                </fieldset>
                <div class="mt-24">
                    <button class="mt-35 tf-btn primary" id="submit-btn" type="submit">Create Project</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#submit-btn').click(function (e) {
                e.preventDefault();
                $('#message_error_create').html('');
                let url = "{{ route('projects.store') }}";
                // var newurl="{{route('projects.show',':id')}}";
                // newurl=newurl.replace(':id',project_id)
                $.ajax({
                    type: "POST",
                    url: url,
                    data:
                        {
                            "_token": "{{ csrf_token() }}",
                            "name": $('#name').val(),
                            "details": $('#details').val(),
                            "start_date": $('#start_date').val(),
                            "end_date": $('#end_date').val(),
                            "status": $('#status').val(),
                            "image[]": $('#status').val(),

                        },
                    success: function (response) {
                        if (response.success) {

                            $('.alert-success-create').show();
                            $('#message_create').text(response.success)
                            // window.location.href =newurl ;
                        }
                    },
                    error: function (response) {
                        $('.alert-danger-create').show();

                        var errors = response.responseJSON.errors;
                        $.each(errors, function (field, messages) {
                            $('#message_error_create').append(`<li>${messages[0]}</li>`);
                        })
                        $('.alert-danger-create').show();
                    }

                });
            });
        });
    </script>
@endpush
