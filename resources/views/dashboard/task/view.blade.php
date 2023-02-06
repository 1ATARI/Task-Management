@extends('includes.dashboard')



@section('content')


    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Task</h4>

            <div class="table-responsive">
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input disabled type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title" value="{{$task->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Body</label>
                    <textarea class="form-control ckeditor" disabled name="body" placeholder="Body">{!! $task->body !!}</textarea>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection
