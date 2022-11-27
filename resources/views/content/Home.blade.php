@extends('index')
@section('content')
<div style="height:30%;">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($data as $d)
            <div class="carousel-item active ">
                <img src="{{asset('/storage/'.$d->image)}}" class="d-block w-100 foto" alt="...">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="text-center mt-5">
                <h2>PADMA HOTEL BANDUNG</h2>
                <div class="mt-5">
                    <p>Inspired by the beauty of Parahyangan, Padma Hotel Bandung
                        offers spectacular mountain views, indulgent dining, elegant guestrooms
                        and exceptional hospitality personified by its 24-hour Butler Service. Located
                        in the hills of Ciumbuleuit, and yet only minutes from the bustle of Bandung's
                        city centre, the hotel is 10 km from Husein Sastranegara International Airport and 9km
                        from Bandung train station.
                    </p>
                    <p>Padma Hotel Bandung is the perfect place for a rejuvenating, opulent getaway, private
                        gatherings, and well-organised events and meetings.
                    </p>
                </div>
            </div>
            <div class="text-center mt-5">
                <h2>Special Offers</h2>

                <div class="row mt-5">
                    @foreach($special as $s)
                    <div class="col ">
                        <img src="{{asset('/storage/'.$s->image)}}" class="img-thumbnail img-fluid " alt="..." style="width:350px;">
                        <p>{{$s->deskripsi}}</p>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .foto {
        width: 100%;
    }

    .carousel-inner {
        width: 100%;
        max-height: 700px !important;
    }
</style>
@endsection