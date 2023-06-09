<!-- menu items -->
<li class="nav-item">
    <a href="{{ route('universities.index') }}" class="nav-link {{ Request::is('universities') ? 'active' : '' }}">
        <i class="nav-icon fa fa-building" aria-hidden="true"></i>
        <p>Universities</p>
    </a>
</li>
 <li class="nav-item">
    <a href="{{ route('graduates.index') }}" class="nav-link {{ Request::is('graduates') ? 'active' : '' }}">
        <i class="nav-icon fa fa-graduation-cap"></i>
        <p>Graduates</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('resumes.index') }}" class="nav-link {{ Request::is('resumes') ? 'active' : '' }}">
        <i class="nav-icon fa fa-file"></i>
        <p>Resumes</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('employers.index') }}" class="nav-link {{ Request::is('employers') ? 'active' : '' }}">
        <i class="nav-icon fa fa-users"></i>
        <p>Employers</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('vacancies.index') }}" class="nav-link {{ Request::is('vacancies') ? 'active' : '' }}">
        <i class="nav-icon fa fa-newspaper"></i>
        <p>Vacancies</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('responses.index') }}" class="nav-link {{ Request::is('responses') ? 'active' : '' }}">
        <i class="nav-icon fa fa-handshake"></i>
        <p>Responses</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('faculties.index') }}" class="nav-link {{ Request::is('faculties') ? 'active' : '' }}">
        <i class="nav-icon fa fa-certificate"></i>
        <p>Faculties</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('specialities.index') }}" class="nav-link {{ Request::is('specialities') ? 'active' : '' }}">
        <i class="nav-icon fa fa-user-tie"></i>
        <p>Specialities</p>
    </a>
</li>
