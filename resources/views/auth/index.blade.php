@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            <strong>{{$message}}</strong>
                        </div>
                    @endif

                    <a href="{{Route('user.create')}}" class="btn btn-success btn-md m-4">
                        <i class="fa fa-plus"></i> Tambah User
                    </a>
                    <table class="table table-strip table-bordered">
                        <thead>
                        </thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                        <tbody>
                        @foreach($user as $users)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$users->name}}</td>
                                <td>{{$users->nama_lengkap}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{ucfirst($users->hasRole()->value('role'))}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $user->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
