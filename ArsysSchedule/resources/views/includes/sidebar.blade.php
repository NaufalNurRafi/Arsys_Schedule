<div class="sidebar" data-color="blue" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="http://arsys.my.id/" class="simple-text logo-normal">
            Arsys_Schedule
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            <!-- </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('student.index') }}">
                    <i class="material-icons">person</i>
                    <p>Student</p>
                </a>
            </li> -->
           
            <li class="nav-item ">
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('course.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Schedule</p>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Input Data
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <a class="dropdown-item" href="{{ route('departmental_instructor.index') }}">Instructor</a>
             -->
                   
                    <!-- <a class="dropdown-item" href="{{ route('fakultas.index') }}">Fakultas</a> -->
                    <a class="dropdown-item" href="{{ route('building.index') }}">Building</a>
                    <a class="dropdown-item" href="{{ route('department.index') }}">Department</a>
                    <a class="dropdown-item" href="{{ route('room.index') }}">Room</a>
                    <a class="dropdown-item" href="{{ route('departmental_instructor.index') }}">Instructor</a>
                    <a class="dropdown-item" href="{{ route('subject_area.index') }}">Courses</a>
                    <a class="dropdown-item" href="{{ route('course_offering.index') }}">Course Request</a>
                  
                                    
                </div>
            </li>
        </ul>
    </div>
</div>
