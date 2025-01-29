<nav class="navbar navbar-expand-lg navbar-light  w-100 shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('pages.home')}}">YourBrand</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <form class="d-flex mx-auto w-50">
                    <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user"></i> Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


