@extends('includes.dashboard')

@section('css')


@endsection

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tasks </h4>
            <p class="card-description">
                Total task {{$tasks->total()}}
            </p>
            <a class="btn btn-inverse-success btn-fw" href="{{route('task.create')}}">Create new task</a>
            <div class="table-responsive">



                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><input type="checkbox" name="" id=""></th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <form id="test" action="{{route('updatevalue')}}" method="post">
                        {{csrf_field()}}
                        {{method_field('put')}}
                        @foreach($tasks as $task)

                            <tr>
                                <div class="form-check form-check-flat">

                                    <td >

                                        <input type="hidden" name="check[{{$task->id }}]" value=0>

                                        <input class="checkbox" type="checkbox"
                                               {{$task->check ==0 ? '' : 'checked'}} value=1
                                               name="check[{{$task->id}}]">
                                    </td>


                                </div>
                                <td >{{ Str::limit($task->title, 19) }}</td>


                                <td  > {!! Str::limit($task->body, 40) !!}</td>


                                <td class=""> {{$task->created_at->format('d M Y')}} <small class="text-success">({{now()->diffInDays($task->created_at)}}D)</small> </td>

                                <td>
                                    <a href="{{route('task.show' , $task->id)}}" class="btn btn-warning btn-rounded btn-fw btn-sm">Show</a>

                                    <a class="btn btn-info btn-rounded btn-fw btn-sm"
                                       href="{{route('task.edit' , $task->id)}}">Edit</a>


                                    <a href="#"
                                       data-id="{{$task->id}}"
                                       class="btn btn-danger delete btn-sm"
                                       data-toggle="modal"
                                       data-target="#deleteModal{{$task->id}}">Delete </a>

                                </td>

                            </tr>
                        @endforeach
                    </form>

                    </tbody>


                </table>
                <br>
                {!!  $tasks->links() !!}

                @foreach($tasks as $task)
                <!-- Delete Warning Modal -->
                <div class="modal modal-danger fade" id="deleteModal{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Task</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="{{ route('task.destroy' , $task->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <h5 class="text-center">Are you sure you want to delete this Task?</h5>
                                    <p class="text-center"> "{{ Str::limit($task->title, 20) }}"</p>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-inverse-secondary btn-fw" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-inverse-danger btn-fw">Yes, Delete Task</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Delete Modal -->
                @endforeach
            </div>
            <br>
            <button class="btn btn-primary btn-rounded btn-fw" type="submit" form="test"> Update</button>

            <a href="#"
               data-id=""
               class="btn btn-danger"
               data-toggle="modal"
               data-target="#deleteallModal">Delete Selected</a>

            <!-- Delete Selected  Warning Modal -->
            <div class="modal modal-danger fade" id="deleteallModal" tabindex="-1" role="dialog"
                 aria-labelledby="Delete" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Selected</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <h5 class="text-center">Are you sure you want to delete all selected?</h5><br>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel
                                </button>
                                <button class="btn btn-danger" type="submit" form="test" name="delete" value="delete">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Delete Modal -->

        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>
        $(document).on('click','.delete',function(){
            let id = $(this).attr('data-id');
            $('#id').val(id);

        });
    </script>



{{--  <script>--}}
{{--      $('.checkbox').click(function () {--}}
{{--          var backgroundColor = $(this).is(":checked")  ? "lightgrey;" : "";--}}
{{--          $(this).closest('tr').attr('style', 'background-color: '+ backgroundColor +'');--}}
{{--      });--}}




{{--  </script>--}}

@endsection
