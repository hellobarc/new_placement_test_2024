<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background: #212529">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-center text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline text-center fs-4">Dashboard</span>
            
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="#" class="nav-link align-middle px-0 text-white fs-5">
                    <i class="fa-solid fa-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white fs-5">
                    <i class="fa-solid fa-gauge"></i> <span class="ms-1 d-none d-sm-inline">All Test <i class="fa-solid fa-angle-down"></i></span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="{{route('admin.manage.test')}}" class="nav-link px-0 fs-6"> <span class="d-none d-sm-inline text-white"><span style="font-size: 10px;"><i class="fa-solid fa-circle"></i></span> Manage Test</span></a>
                    </li>
                    <li class="w-100">
                        <a href="{{route('admin.manage.section.test')}}" class="nav-link px-0 fs-6"> <span class="d-none d-sm-inline text-white"><span style="font-size: 10px;"><i class="fa-solid fa-circle"></i></span> Manage Test Section</span></a>
                    </li>
                    <li class="w-100">
                        <a href="{{route('admin.manage-question.test')}}" class="nav-link px-0 fs-6"> <span class="d-none d-sm-inline text-white"><span style="font-size: 10px;"><i class="fa-solid fa-circle"></i></span> Manage Test Question</span></a>
                    </li>
                    <li class="w-100">
                        <a href="{{route('analytics.students')}}" class="nav-link px-0 fs-6"> <span class="d-none d-sm-inline text-white"><span style="font-size: 10px;"><i class="fa-solid fa-circle"></i></span> Student Analytics </span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="nav-link px-0 align-middle text-white fs-5">
                    <i class="fa-solid fa-cart-shopping"></i> <span class="ms-1 d-none d-sm-inline">Orders</span>
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">loser</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>