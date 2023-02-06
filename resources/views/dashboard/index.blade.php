@extends('includes.dashboard')



@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome {{auth()->user()->name}}</h3>

                </div>
                <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                        <div class=" flex-md-grow-1 flex-xl-grow-0">
                            <button class="btn btn-sm btn-light bg-white " type="button"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="true">
                                <i class="mdi mdi-calendar"></i> Today ({{ date('Y-m-d') }})
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card tale-bg">
                <div class="card-people mt-auto">
                    <img src="{{asset('assets/dashboard/images/dashboard/people.svg')}}" alt="people">
                    <div class="weather-info">
                        <div class="d-flex">

                            <div class="ml-2">
                                <h4 class="location font-weight-normal">Task Management</h4>
                                <h6 class="font-weight-normal">{{auth()->user()->name}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Number of Tasks</p>
                            <p class="fs-30 mb-2">{{$task}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Today Task</p>
                            <p class="fs-30 mb-2">{{$Dtask->count()}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                        <div class="card-body">
                            <p class="mb-4">Total Users</p>
                            <p class="fs-30 mb-2">{{$users}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">

                            <p class="mb-4">Online Users</p>
                            @foreach($online as $user)
                                @if(Cache::has('user-is-online-' . $user->id))
                                    @php
                                        $mycount++
                                    @endphp
                                @endif
                            @endforeach
                            <p class="fs-30 mb-2">{{$mycount}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Users</h4>




            <div class="table-responsive">

    <table class="table  data-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Last Seen</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($online as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                </td>
                <td>

                    @if(Cache::has('user-is-online-' . $user->id))
                        <span class="badge badge-success">Online</span>
                    @else
                        <span class="badge badge-secondary ">Offline</span>
                    @endif
                    <br>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
