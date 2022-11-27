<div class="">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg bg-secondary sticky-top shadow">
                <div class="container-fluid">
                    <a class="navbar-brand  text-uppercase" href="#">hotel madam</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0  text-uppercase nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link m-3" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link m-3" href="/room">Room</a>
                            </li class="nav-item">
                            @if(Auth::check())
                            <a class="nav-link m-3" href="">
                                Review
                            </a>
                            <a class="nav-link m-3" href="">
                                saran
                            </a>
                            @else
                            <a class="nav-link m-3" href="">
                                Review
                            </a>
                            @endif
                            <li class="nav-item">
                                @if(Auth::check())
                                <a class=" m-3 btn btn-primary" href="/logout">
                                    logout
                                </a>
                                @else
                                <a class=" m-3 btn btn-primary" href="/login">
                                    Login
                                </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>