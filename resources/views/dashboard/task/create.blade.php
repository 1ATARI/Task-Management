@extends('includes.dashboard')



@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Task</h4>
                @if ($errors->any())
                    {{--                        <div class="alert alert-danger">--}}
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="ti-alert btn-icon-prepend"></i> Warning!</h5>

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="forms-sample" action="{{route('task.store')}}" method="post">
                    {{csrf_field()}}
                    {{method_field('post')}}

                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Body</label>
                        <textarea class="form-control ckeditor" name="body" placeholder="Body"></textarea>
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
