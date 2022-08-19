
<li class="nav-item dropdown">
    <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
        {{-- {{ Auth::user()->name }} --}}
    Student
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ url('home') }}">
           Students info
        </a>
        <a href="{{ url('/student') }}" class="dropdown-item"> Registration </a>

    </div>
</li>

<li class="nav-item">
    <a href="{{ url('course') }}" class="nav-link"> Courses   </a>
    </li>

    <li class="nav-item">
        @include("student.addfee")
        </li>

