@extends('layouts.master')
@section('title', 'Invite Colleagues')
@section('content')


    @include('partials.header')


    <div class="app-content style-2">
        <div class="tf-container">
            <x-dashboard.alert/>
            <div class="dropdown mt-24">
                <div class="dropdown-toggle drop-select-visibility" data-bs-toggle="dropdown">
                    <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                            <path
                                d="M2.5 17.5V15.8333C2.5 14.9493 2.85119 14.1014 3.47631 13.4763C4.10143 12.8512 4.94928 12.5 5.83333 12.5H9.16667C10.0507 12.5 10.8986 12.8512 11.5237 13.4763C12.1488 14.1014 12.5 14.9493 12.5 15.8333V17.5M13.3333 2.60834C14.0503 2.79192 14.6859 3.20892 15.1397 3.7936C15.5935 4.37827 15.8399 5.09736 15.8399 5.8375C15.8399 6.57765 15.5935 7.29674 15.1397 7.88141C14.6859 8.46609 14.0503 8.88309 13.3333 9.06667M17.5 17.5V15.8334C17.4958 15.0977 17.2483 14.384 16.7961 13.8037C16.3439 13.2234 15.7124 12.8089 15 12.625M10.8333 5.83333C10.8333 7.67428 9.34095 9.16667 7.5 9.16667C5.65905 9.16667 4.16667 7.67428 4.16667 5.83333C4.16667 3.99238 5.65905 2.5 7.5 2.5C9.34095 2.5 10.8333 3.99238 10.8333 5.83333Z"
                                stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </span>

                    <div class="title-visibility text-val-form">From contacts</div>
                </div>

            </div>
            <div class="mt-24">
                <h6 class="text-black-2">Contacts Info</h6>
                <form action="{{ route('projects.addUser', $projectId) }}" method="POST">
                    @csrf

                    <div class="mt-16 box-ip">
                        <input type="email" placeholder="Add people, emails or group" name="email"
                               value="{{old('email')}}">
                        <a href="#" class="text-right">Tamim Ikram</a>
                    </div>


                    <div class="footer-fixed button">
                        <button type="submit" class="tf-btn primary">Send Invitation</button>
                    </div>
                </form>
            </div>
        </div>

    </div>



@endsection
