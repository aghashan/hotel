@extends('index')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://pix10.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768" class="rounded-circle" loading="lazy" alt="your profile" style="width:200px;">
                    </div>
                    <table class="text-center mt-2">
                        <tr style="height:50px;">
                            <td width="28%">Name</td>
                            <td width="2%">:</td>
                            <td width="70%">{{Auth::user()->username}} </td>
                        </tr>
                        <tr style="height:50px;">
                            <td width="28%">Email</td>
                            <td width="2%">:</td>
                            <td width="70%">{{Auth::user()->email}}</td>
                        </tr>
                        <tr style="height:50px;">
                            <td width="28%">Telepon</td>
                            <td width="2%">:</td>
                            <td width="70%">{{Auth::user()->no_tlp}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://pix10.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768" class="rounded-circle" loading="lazy" alt="your profile" style="width:200px;">
                    </div>
                    <table class="text-center mt-2">
                        <tr style="height:50px;">
                            <td width="28%">Name</td>
                            <td width="2%">:</td>
                            <td width="70%">{{Auth::user()->username}} </td>
                        </tr>
                        <tr style="height:50px;">
                            <td width="28%">Email</td>
                            <td width="2%">:</td>
                            <td width="70%">{{Auth::user()->email}}</td>
                        </tr>
                        <tr style="height:50px;">
                            <td width="28%">Telepon</td>
                            <td width="2%">:</td>
                            <td width="70%">{{Auth::user()->no_tlp}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection