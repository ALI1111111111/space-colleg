@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">


                                <div class="col">
                                    <input id="name" type="text" placeholder="Enter Name*"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Email Address*">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <br>
                            <div class="row">




                                <div class="col">
                                    <input id="password" type="password" placeholder="Enter Password*"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input id="password-confirm" type="password" class="form-control"
                                        placeholder="Confirm-password*" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                            </div><br>

                            <div class="row ">
                                <div class="col">


                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="course">Course</label>
                                        </div>
                                        <select style="margin-left: 1%; width:70%;text-align:center;" class="custom-select"
                                            id="course">
                                            <option selected>Time</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>


                                    </div>

                                </div>
                                {{-- @livewire('show-posts') --}}


                            </div>

                            {{-- <div class="row"  style="width:100%;"> --}}
                            {{-- <div class="col"> --}}
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="time">Timing</label>
                                </div>
                                <select style="margin-left: 1%; width:30%;text-align:center;" class="custom-select"
                                    id="time">
                                    <option selected>Time</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select style="margin-left: 1%; width:30%;text-align:center;" class="custom-select"
                                    id="session">
                                    <option selected>Session</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            {{-- </div> --}}

                            {{-- </div> --}}
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="CNIC">
                                </div>
                                <div class="col">
                                    <input type="date" class="form-control" placeholder="Select Date">
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter Address">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="More Detail">
                                </div>
                            </div><br>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
