@extends('layouts.app')
@section('content')
    @include('includes.navbar')

    <a id="location-css"></a>

    <!--Video Slides-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/map.PNG" alt="First slide">
            </div>
        </div>
    </div>
    <hr>

    <div class="d-flex flex-row justify-content-between">
        <div class="p-2">
            <h1 style="font-family: 'Shadows Into Light Two';">Saint John's</h1>
        </div>
        <div class="p-2">
            <a class="btn"
               id="getDirections"
               href="https://www.google.com/maps/dir//740+North+Center+Street,+Statesville,+NC/@35.7961025,-80.9071791,15z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x8851597d7eef9cc9:0x2cfce536628817f3!2m2!1d-80.8984243!2d35.7960854"
               target="_blank">Get Directions
            </a>
        </div>
    </div>
<div class = "location-back">
        <div class="d-flex flex-row justify-content-between location-bar">
            <div class="p-2">
                <strong>740 North Center Street</strong><br>
                <strong>Statesville, NC 28677</strong>
            </div>
            <div class="p-2">
                (704) 873-0222<br>
                stjohnsluth740@gmail.com
            </div>
        </div>
        <div class="row justify-content-center p-4">
            <div><img src="images/location.png" alt="location image" class = "shadow" style="width: 100%"></div>
        </div>
</div>
<hr>
    <div class="location-description p-4">
        <p><strong>Bible Studies:&nbsp;</strong>Sunday at 9:30 am<br>
            <strong>Worship:&nbsp;</strong>Sunday at 10:30 am</p>
        <p>We confess the apostolic faith in Jesus Christ according to the Holy Scriptures. We affirm the authority of
            the Scriptures as the authoritative source and norm, “according to which all doctrines should and must be
            judged” (Formula of Concord). We accept the ecumenical creeds and the Lutheran Confessions as true witnesses
            to the Word of God.</p>
    </div>

    @include('includes.footer')
@endsection
