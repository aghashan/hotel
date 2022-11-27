@extends('Index')
@section('content')
<div class="container mt-5">
    <div class="row">


        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                    <form action="/userlog" method="POST">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
                            <label for="floatingInput">username</label>
                
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                            <label class="form-check-label" for="rememberPasswordCheck">
                                Remember password
                            </label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                                in</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div class="d-grid">
                        <a href="/regis" class="btn btn-secondary btn-login text-uppercase fw-bold">regis</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
    }

    .btn-google {
        color: white !important;
        background-color: #ea4335;
    }

    .btn-facebook {
        color: white !important;
        background-color: #3b5998;
    }
</style>
@endsection