<li class="side-menus{{Request::is('student.index') ? '' : '' }}">

    <a class="nav-link" href="/homestudent">
        <i class=" fas fa-building"></i><span style="padding: 10px">Dashboard</span>
    </a> 
    
    <a class="nav-link" href="homestudent/usuarios/{{\Illuminate\Support\Facades\Auth::user()->id}}">
        <i class=" fas fa-user"></i><span style="padding: 10px">Usuarios</span>
    </a>
    <a class="nav-link" href="homestudent/exams/{{\Illuminate\Support\Facades\Auth::user()->id}}">
        <i class="fa-solid fa-file-lines"></i><span style="padding: 10px">Exams</span>
    
    </a>
    <a class="nav-link" href="homestudent/class">
        <i class="fa-solid fa-building-columns"></i><span style="padding: 10px">Class</span>
    </a>
    <a class="nav-link" href="homestudent/enrollments/{{\Illuminate\Support\Facades\Auth::user()->id}}">
        <i class="fa-solid fa-database"></i><span style="padding: 10px">Enrollments</span>
    </a>  
    <a class="nav-link" href="homestudent/works/{{\Illuminate\Support\Facades\Auth::user()->id}}">
        <i class="fa-solid fa-briefcase"></i><span style="padding: 10px">Works</span>
    </a>
    <a class="nav-link" href="homestudent/percentage">
        <i class="fa-solid fa-flag-checkered"></i><span style="padding: 10px">Percentage</span>
    </a>

</li>
