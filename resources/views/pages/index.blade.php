@extends('layouts.app')

@include('includes.bdays')
@section('content')

    <!-- Container Start -->

    <div class="home-column-widgets-both" style="width: 100%;">
    @include('includes.navbar')
    <!--Video Slides-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="/visit">
                        <img class="d-block w-100" src="/images/worship.jpg" alt="First slide">
                    </a>
                    <div class="carousel-caption d-sm-block">
                        <h1><span class="badge badge-secondary">Worship</span></h1>
                        <h3><span class="badge badge-pill badge-light">Sundays at 10:30AM</span></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="/visit">
                        <img class="d-block w-100" src="/images/group.jpg" alt="Second slide">
                    </a>
                    <div class="carousel-caption d-sm-block">
                        <h1><span class="badge badge-secondary">Bible Studies</span></h1>
                        <h3><span class="badge badge-pill badge-light">Sundays at 9:30AM</span></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="https://www.thenalc.org/" target="blank">
                        <img class="d-block w-100" src="/images/NALC.gif" alt="Third slide">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="/gallery">
                        <img class="d-block w-100" src="/images/church.jpg" alt="Fourth slide">
                    </a>
                    <div class="carousel-caption d-sm-block">
                        <h1><span class="badge badge-secondary">Saint John's</span></h1>
                        <h3><span class="badge badge-pill badge-light">Church Tour</span></h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="/gallery#youthgroup">
                        <img class="d-block w-100" src="/images/mission1.png" alt="Fifth slide">
                    </a>
                    <div class="carousel-caption d-sm-block">
                        <h1><span class="badge badge-secondary">Youth Group</span></h1>
                        <h3><span class="badge badge-pill badge-light">Photos</span></h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="row mb-2">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Welcome to St. John's Lutheran Church</h1>
                </div>
                <div class="col-md-6 px-0" style="text-align: center;">
                    <p class="lead my-3">Following Jesus,</p>
                    <p class="lead my-3">Leading Others to Jesus,</p>
                    <p class="lead my-3">Serving in Jesus' Name.</p>
                </div>
            </div>
        </div>
        <div class="card-group">
            <div class="card on-hover border-light">
                <a href="/location">
                    <img class="card-img" src="images/map-pin-600x400.jpg" alt="Location">
                    <div class="badge-secondary  text-center"><strong>Location &amp Times</strong></div>
                </a>
            </div>
            <div class="card on-hover border-light">
                <a href="/visit">
                    <IMG alt="Visit" class="card-img" src="images/cross.jpg">
                    <div class="badge-secondary  text-center"><strong>Visitors</strong></div>
                </a>
            </div>
            <div class="card on-hover border-light">
                <a href="/people">
                    <img alt="People" class="card-img" src="images/staff.jpg">
                    <DIV class="badge-secondary text-center"><strong>Our People</strong></div>
                </a>
            </div>
        </div>
        <hr>

        <div class="card-group">
            <div class="card border-0">
                <h2 class="display-5 text-center" style="font-family: 'Shadows Into Light Two';">Upcoming Events</h2>

                <?PHP
                //Checks to see if there is an event in the appropriate Event folder
                //If so, assigns description to $file1
                $iterator = array(1, 2, 3, 4);


                foreach ($iterator as $i) {
                    $directory = "Events/Event" . $i . "/";
                    $files = scandir($directory);

                    if (sizeof($files) > 2) {
                        $file = "no event";
                        $dirSize = sizeof($files);
                        $finfo = finfo_open(FILEINFO_MIME);
                        $fileInfo = finfo_file($finfo, 'Events/Event' . $i . '/' . $files[2]);

//                          parsing fileInfo to isolate file type to avoid extra charset clutter from affecting if statements
                        $parsedInfo = preg_split("/[\s,]+/", $fileInfo);
                        switch ($dirSize) {
                            case 2:
                                break;
                            case 3:
                                if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;") {
                                    $file = $files[2];
                                }
                                break;
                            default:
                                if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;") {
                                    $file = $files[2];
                                } else {
                                    $file = $files[3];
                                }
                                break;
                        }
                        $fileLocation = $directory . $file;
                        //If there is an event, write to HTML which posts it
                        if ($file != "no event") {
                            $file_handle = fopen("$fileLocation", "rb");
                            echo '<div class = "card d-flex flex-row align-items-center border-0">';
                            echo '<div class = "p-2"><img  width="55" height="55" src="images/logo_55.png" alt="St Johns Logo" class="shadow"></div>';
                            $line_of_text = fgets($file_handle);

                            echo '<div class = "p-2"><a href="/event#event' . $i . '">' . $line_of_text . '</a>';
                            $line_of_text = fgets($file_handle);
                            echo '<p>' . $line_of_text . '</p>';
                            $line_of_text = fgets($file_handle);
                            echo '<small>' . $line_of_text . '</small></div></div>';
                            fclose($file_handle);
                        }
                    }
                }

                ?>
            </div>
            <div class="card border-0">
                <h2 class="display-5 text-center" style="font-family: 'Shadows Into Light Two';">At a Glance</h2>
                <iframe
                        src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=350&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=stjohnsluth740%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York"
                        style="border-width:0" height="325" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
        <div class="card-group">
            <div class="card border-0">

                <h2 id="publications" class="text-center" style="font-family: 'Shadows Into Light Two';">Publications</h2>

                <DIV class="card d-flex flex-row align-items-center border-0">
                    <div class="p-2">
                        <IMG
                                width="55" height="55" title=""
                                class="shadow"
                                src="images/proclaimer_55.png"
                                alt="Stained Glass j"></div>
                    <div class="p-2">
                        <a href="publications/goodnews.pdf" title="The Good News"
                           target="blank">The Good News</a>
                        <p>Weekly Newsletter</p>
                    </div>
                </DIV>

                <!--next publication-->
                <DIV class="card d-flex flex-row align-items-center border-0">
                    <div class="p-2">
                        <IMG
                                width="55" height="55" title=""
                                class="shadow"
                                src="images/nalc-logo.png"
                                alt="NALC Logo">
                    </div>
                    <div class="p-2">
                        <a href="https://www.thenalc.org/newsletter/" title="NALC Newsletter"
                           target="blank">NALC Newsletter</a>
                        <p>Monthly Newsletter</p>
                    </div>
                </DIV>

                <!--next publication-->
                <DIV class="card d-flex flex-row align-items-center border-0">
                    <div class="p-2">
                        <IMG
                                width="55" height="55" title=""
                                class="shadow"
                                src="images/wings55.png"
                                alt="Wings Logo">
                    </div>
                    <div class="p-2">
                        <a href="https://www.thenalc.org/newsletter/" title="Wings Newsletter"
                           target="blank">Wings Newsletter</a>
                        <p>Periodic Newsletter</p>
                    </div>
                </DIV>

                <!--next publicationi-->
                <DIV class="card d-flex flex-row align-items-center border-0">
                    <div class="p-2">
                        <IMG
                                width="55" height="55" title=""
                                class="shadow"
                                src="images/logo_55.png"
                                alt="Wings Logo">
                    </div>
                    <div class="p-2">
                        <a href="publications\bulletin.pdf" title="Sunday Bulletin"
                           target="blank">Sunday Bulletin</a>
                        <p>Weekly Worship Bulletin</p>
                    </div>
                </DIV>
            </div>

            <div class="card border-0">
                <h2 class="text-center" style="font-family: 'Shadows Into Light Two';">Office Hours</h2>

                <p>Office hours are <strong>12 - 3 PM</strong>, Monday through Thursday. Pastor is available in an
                    emergency
                    anytime (828-612-6439), and is usually in the office from 8 am - 4 pm, Monday through Thursday. If
                    you need to meet with him, call to schedule a time.</p>
            </div>
        </div>
    </div>
    <hr>
    @include('includes.footer')
@endsection
