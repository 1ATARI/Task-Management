@extends('includes.dashboard')



@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About Me </h4>


                <h2 class="lead"><b>Youssef Mohamed</b></h2>
                <p>Youssef mohamed Ragab student at the Faculty of Computer and Information Kafr-Sheikh university (CS Department) </p>


                <p class="text-muted "><b>About: </b> Web Developer /PHP Laravel </p>
                <ul>
                    <li class="small"><span class="fa-li"></span>
                        Address: Egypt,Alexandria

                    </li>

                    <li class="small"><i class="mdi mdi-cellphone"></i>

                        Phone #: + 20 - 10 92 757 979
                    </li>
                </ul>
                <a href="http://wa.me/+01092757979" target="_blank" class="btn btn-sm btn-success">
                    <i class="mdi mdi-whatsapp"></i>
                </a>
                <a href="https://www.linkedin.com/in/youssef-mohamed-8b0718240/"   target="_blank" class="btn btn-sm btn-primary">
                    <i class="mdi mdi-linkedin"></i>
                </a>
                <a href="https://www.github.com/1ATARI"   target="_blank" class="btn btn-sm btn-dark">
                    <i class="mdi mdi-github-circle"></i>
                </a><br><br>
                <br>
                <h4>About project</h4>
                <p>
                    This project about Task Management You can Create,Read(view), Update, Delete Tasks
                </p>
                <h6>The features in this project</h6>
                <ul>
                    <li>Users can see who is online and who is offline in Dashboard</li>
                    <li>In Task Page you can update and delete the selected Task at the same time (when you select tasks if you want to update its value and delete all selected at the same time you can do it by Delete Selected button) </li>
                    <li>Users can see the number of tasks, today's tasks, total users, and count of online users in the Dashboard</li>
                    <li>Users can update the value of the checkbox on the task page without updating it on the edit page </li>
                    <li>Task has Title And Body You can customize the Body with some features </li>
                    <li>Users can see how many days have been created the task</li>
                    <li>Users can update their profile </li>
                </ul>

            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
