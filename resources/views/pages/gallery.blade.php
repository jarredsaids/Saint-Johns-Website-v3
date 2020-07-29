@extends('layouts.app')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="galleria-1.6.1\src\galleria.js"></script>

@section('content')
    @include('includes.navbar')
<a id="gallery-changes"></a>
    <div id="content-inner">
        <section>
            <div id="gallery-categories ">

                    <h1 class="gallery-categories-title p-4" id="churchtour" style = "font-family: 'Shadows Into Light Two';"><a>Church Tour</a></h1>

                    <div class="d-flex flex-row gallery-tabs">
                        <div class="p-2 gallery-tab"><strong>Church Tour</strong></div>
                        <div class="p-2 gallery-tab gallery-hover"><a href="#worship">Worship</a></div>
                        <div class="p-2 gallery-tab gallery-hover"><a href="#congregation">Congregation</a></div>
                        <div class="p-2 gallery-tab gallery-hover"><a href="#youthgroup">Youth Group</a></div>
                    </div>


                <div class="d-flex flex-row justify-content-sm-center pic-row shadow">
                    <div class="galleria">
                        <img src="images/Gallery/Tour/church.jpg" alt="Church.jpg">
                        <img src="images/Gallery/Tour/sign.jpg" alt="sign.jpg">
                        <img src="images/Gallery/Tour/doors.jpg" alt="doors.jpg">
                        <img src="images/Gallery/Tour/inside.jpg" alt="inside.jpg">
                        <img src="images/Gallery/Tour/inside1.jpg" alt="inside1.jpg">
                        <img src="images/Gallery/Tour/inside3.jpg" alt="inside3.jpg">
                        <img src="images/Gallery/Tour/turnback.jpg" alt="turnback.jpg">

                        <img src="images/Gallery/Tour/WHDoor.jpg" alt="WHDoor.jpg">
                        <img src="images/Gallery/Tour/hall1.jpg" alt="hall1.jpg">
                        <img src="images/Gallery/Tour/hall2.jpg" alt="hall2.jpg">
                        <img src="images/Gallery/Tour/choir.jpg" alt="choir.jpg">
                        <img src="images/Gallery/Tour/study.jpg" alt="study.jpg">
                        <img src="images/Gallery/Tour/nursery.jpg" alt="nursery.jpg">
                        <img src="images/Gallery/Tour/meeting.jpg" alt="meeting.jpg">

                        <img src="images/Gallery/Tour/smallroom.jpg" alt="smallroom.jpg">
                        <img src="images/Gallery/Tour/library.jpg" alt="library.jpg">
                        <img src="images/Gallery/Tour/poffice.jpg" alt="poffice.jpg">
                        <img src="images/Gallery/Tour/office.jpg" alt="office.jpg">
                        <img src="images/Gallery/Tour/visitors.jpg" alt="visitors.jpg">
                        <img src="images/Gallery/Tour/hall3.jpg" alt="hall3.jpg">
                        <img src="images/Gallery/Tour/bulletin.jpg" alt="bulletin.jpg">

                        <img src="images/Gallery/Tour/gathering.jpg" alt="">
                        <img src="images/Gallery/Tour/parking1.jpg" alt="">
                        <img src="images/Gallery/Tour/parking2.jpg" alt="">
                    </div>
                </div>
<hr>
                <h1 class="gallery-categories-title p-4" id="worship" style = "font-family: 'Shadows Into Light Two';"><a>Worship</a></h1>
                <div class="d-flex flex-row gallery-tabs">
                    <div class="p-2 gallery-tab gallery-hover"><a href="#churchtour">Church Tour</a></div>
                    <div class="p-2 gallery-tab"><strong>Worship</strong></div>
                    <div class="p-2 gallery-tab gallery-hover"><a href="#congregation">Congregation</a></div>
                    <div class="p-2 gallery-tab gallery-hover"><a href="#youthgroup">Youth Group</a></div>
                </div>

                <div class="d-flex flex-row justify-content-sm-center pic-row shadow">
                    <div class="galleria">
                        <img src="images/Gallery/Worship/Worship2.jpg" alt="Worship2.jpg">
                        <img src="images/Gallery/Worship/Worship3.jpg" alt="Worship3.jpg">
                        <img src="images/Gallery/Worship/Worship4.jpg" alt="Worship4.jpg">
                        <img src="images/Gallery/Worship/Worship5.jpg" alt="Worship5.jpg">
                        <img src="images/Gallery/Worship/Worship6.jpg" alt="Worship6.jpg">
                        <img src="images/Gallery/Worship/Worship7.jpg" alt="Worship7.jpg">
                        <img src="images/Gallery/Worship/Worship8.jpg" alt="Worship8.jpg">
                    </div>
                </div>
<hr>
                <h1 class="gallery-categories-title p-4" id="congregation" style = "font-family: 'Shadows Into Light Two';"><a>Congregation</a></h1>

                <div class="d-flex flex-row gallery-tabs">
                    <div class="p-2 gallery-tab gallery-hover"><a href="#churchtour">Church Tour</a></div>
                    <div class="p-2 gallery-tab gallery-hover"><a href="#worship">Worship</a></div>
                    <div class="p-2 gallery-tab"><strong>Congregation</strong></div>
                    <div class="p-2 gallery-tab gallery-hover"><a href="#youthgroup">Youth Group</a></div>
                </div>

                <div class="d-flex flex-row justify-content-sm-center pic-row shadow">
                    <div class="galleria">
                        <img src="images/Gallery/congregation/cong1.jpg" alt="cong1.jpg">
                        <img src="images/Gallery/congregation/cong2.jpg" alt="ong2.jpg">
                        <img src="images/Gallery/congregation/cong3.jpg" alt="cong3.jpg">
                        <img src="images/Gallery/congregation/cong4.jpg" alt="cong4.jpg">
                        <img src="images/Gallery/congregation/cong5.jpg" alt="cong5.jpg">
                        <img src="images/Gallery/congregation/cong6.jpg" alt="cong6.jpg">
                        <img src="images/Gallery/congregation/cong7.jpg" alt="cong7.jpg">
                        <img src="images/Gallery/congregation/cong8.jpg" alt="cong8.jpg">
                        <img src="images/Gallery/congregation/cong9.jpg" alt="cong9">
                    </div>
                </div>
<hr>
                <h1 class="gallery-categories-title p-4" id="youthgroup" style = "font-family: 'Shadows Into Light Two';"><a>Youth Group</a></h1>

                <div class="d-flex flex-row gallery-tabs">
                    <div class="p-2 gallery-tab gallery-hover"><a href="#churchtour">Church Tour</a></div>
                    <div class="p-2 gallery-tab gallery-hover"><a href="#worship">Worship</a></div>
                    <div class="p-2 gallery-tab gallery-hover"><a href="#congregation">Congregation</a></div>
                    <div class="p-2 gallery-tab"><strong>Youth Group</strong></div>
                </div>

                <div class="d-flex flex-row justify-content-sm-center pic-row shadow">
                    <div class="galleria">
                        <img src="images/Gallery/Youth/youth1.jpg" alt="youth1.jpg">
                        <img src="images/Gallery/Youth/youth2.jpg" alt="youth2.jpg">
                        <img src="images/Gallery/Youth/youth3.jpg" alt="youth3.jpg">
                        <img src="images/Gallery/Youth/youth4.jpg" alt="youth4.jpg">
                        <img src="images/Gallery/Youth/youth5.jpg" alt="youth5.jpg">
                        <img src="images/Gallery/Youth/youth6.jpg" alt="youth6.jpg">
                        <img src="images/Gallery/Youth/youth7.jpg" alt="youth7.jpg">
                        <img src="images/Gallery/Youth/youth8.jpg" alt="youth8.jpg">
                        <img src="images/Gallery/Youth/youth9.jpg" alt="youth9.jpg">
                        <img src="images/Gallery/Youth/youth10.jpg" alt="youth10.jpg">
                        <img src="images/Gallery/Youth/youth11.jpg" alt="youth11.jpg">
                    </div>
                </div>

            </div>

        </section>

    </div>


    @include('includes.footer');
    <script>
        (function () {
            Galleria.loadTheme('galleria/themes/twelve/galleria.twelve.min.js');
            Galleria.run('.galleria');
        }());
    </script>
@endsection
