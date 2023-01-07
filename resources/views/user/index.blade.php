@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 text-end">
                <a class="btn btn-primary" href="{{ route('user.create') }}">Add New User</a>
            </div>
            <div class="col-md-11">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Is Admin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <span style="user-select: all;">
                                        {{ $user->email }}
                                    </span>
                                    @if ($user->email_verified_at !== null)
                                        <span class="badge text-bg-primary">
                                            Verified
                                        </span>
                                    @endif
                                </td>
                                <td>{{ $user->is_admin }}</td>
                                <td>
                                    <div class="d-flex justify-content-start gap-2">
                                        <div class="">
                                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">
                                                Edit
                                            </a>
                                        </div>
                                        <div class="">
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-11">
                {{ $users->onEachSide(2)->links() }}
            </div>
        </div>
    </div>
@endsection
