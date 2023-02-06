@extends('includes.dashboard')



@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Task</h4>

                <form class="forms-sample" action="{{route('task.update' , $task->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('put')}}

                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title" value="{{$task->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Body</label>
                        <textarea id="editor" class="form-control ckeditor" name="body" placeholder="Body">{{$task->body}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
