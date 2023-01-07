@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 pb-3">
                <div class="col-md-5 text-end mx-auto">
                    <a class="btn btn-secondary float-end" href="{{ route('user.index') }}">Cancel</a>
                </div>
            </div>
            <div class="col-md-5 shadow rounded mx-auto p-3">
                <form method="POST" action="{{ route('user.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" id="exampleInputPassword1"
                            value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <span class="text-danger">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="is_admin" class="form-check-input" id="is_admin" value="on"
                            {{ old('is_admin') == 'on' ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_admin">Is Admin</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
