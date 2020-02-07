@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form  method="POST" action="{{ url('students/store')}}">
                @csrf
                <div class="form-group row">
                    <label for="id_number" class="col-md-4 col-form-label text-md-right">{{ __('ID Number') }}</label>
                    <div class="col-md-6">
                        <input  id="id_number" 
                                type="string" 
                                class="form-control @error('id_number') is-invalid @enderror" 
                                name="id_number" 
                                value="{{ old('id_number') }}" 
                                required 
                                autocomplete="id_number" 
                                autofocus>

                        @error('id_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                    <div class="col-md-6">
                        <input  id="last_name" 
                                type="string" 
                                class="form-control @error('last_name') is-invalid @enderror" 
                                name="last_name" 
                                value="{{ old('last_name') }}" 
                                required 
                                autocomplete="last_name">

                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                    <div class="col-md-6">
                        <input  id="first_name" 
                                type="string" 
                                class="form-control @error('first_name') is-invalid @enderror" 
                                name="first_name" 
                                value="{{ old('first_name') }}" 
                                required 
                                autocomplete="first_name">

                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="middle_name" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>
                    <div class="col-md-6">
                        <input  id="middle_name" 
                                type="string" 
                                class="form-control @error('middle_name') is-invalid @enderror" 
                                name="middle_name" 
                                value="{{ old('middle_name') }}" 
                                required 
                                autocomplete="middle_name">

                        @error('middle_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                    <div class="col-md-6">
                        <input  id="email" 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required 
                                autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>
                    <div class="col-md-6">
                        <input  id="course" 
                                type="string" 
                                class="form-control @error('course') is-invalid @enderror" 
                                name="course" 
                                value="{{ old('course') }}" 
                                required 
                                autocomplete="course">

                        @error('course')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <input type="submit" value="Submit" class="btn btn-info"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection