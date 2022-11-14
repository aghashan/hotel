@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <div class="card mt-5" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Book Room</h5>
                    <div class="row mb-3 m-1">
                        <label for="" class="col-5 col-form-label">Arrival</label>
                        <div class="col">
                            <input type="date" class="" id="">
                        </div>
                    </div>
                    <div class="row mb-3 m-1">
                        <label for="" class="col-5 col-form-label">Depature</label>
                        <div class="col">
                            <input type="date" class="" id="">
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="" class="btn btn-primary"> Order </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection