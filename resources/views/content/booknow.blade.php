@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title">Book Room</h5>
                    <div class="container">
                        <div class="row">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Name</span>
                                            <input class="form-control" type="text" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Email</span>
                                            <input class="form-control" type="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Phone</span>
                                    <input class="form-control" type="tel" placeholder="Enter your phone number">
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Nomor Kamar</span>
                                    <input class="form-control" type="text" placeholder="Enter ZIP/Location">
                                </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Check in</span>
                                    <input class="form-control" type="date" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Check out</span>
                                    <input class="form-control" type="date" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <span class="form-label">Payment</span>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span class="form-label">Harga</span>
                                    <input class="form-control" type="datextte" placeholder="Enter your name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3 mt-3">
                        <a href="" class="btn btn-primary me-md-2" type="button">Lanjut Pembayaran</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection