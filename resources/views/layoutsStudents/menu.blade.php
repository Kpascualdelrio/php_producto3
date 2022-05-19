<li class="side-menus{{Request::is('student.index') ? '' : '' }}">

    <a class="nav-link" href="/homestudent">
        <i class=" fas fa-building"></i><span style="padding: 10px">Dashboard</span>
    </a> 
    
    <a class="nav-link" href="/homestudent/usuarios/{{\Illuminate\Support\Facades\Auth::user()->id}}">
        <i class=" fas fa-user"></i><span style="padding: 10px">Usuarios</span>
    </a>
    <a class="nav-link" href="homestudent/exams/{{\Illuminate\Support\Facades\Auth::user()->id}}">
        <i class="fa-solid fa-file-lines"></i><span style="padding: 10px">Exams</span>
    
    </a>
    <a class="nav-link" href="homestudent/courses">
        <i class="fa-solid fa-building-columns"></i><span style="padding: 10px">Courses</span>
    </a>
    <a class="nav-link" href="homesenrollments/enrollment">
        <i class="fa-solid fa-building-columns"></i><span style="padding: 10px">Enrollments</span>
        

</li>
