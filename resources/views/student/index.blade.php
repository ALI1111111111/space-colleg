@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header" >
                    <h3 class="fl-left" style="color:rgb(68, 68, 105);">Students</h3>
                    
                      <button type="button" class="btn btn-primary fl-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Add Student

                    </button>

@livewire("student.create")

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <!-- Button trigger modal -->
                    @livewire('student.index')






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
