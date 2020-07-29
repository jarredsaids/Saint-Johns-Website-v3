@extends('layouts.app')
@section('content')
    @include('includes.navbar')

    <a id = "events-css"></a>
    <style>
        .event-title {
            font-family: 'Comic Sans MS';
            color: white;
        }
    </style>

    <!--Video Slides-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/events.jpg" alt="First slide">
            </div>
        </div>
    </div>
    <hr>
    <div id="content">

        <div id="content-inner" class="has-sidebar">
            <div class="row">
                <div class="col-sm-8">

            <?PHP
            //Checks to see if there are event files in the appropriate Event folder
            //If so, assigns description to $file1 and if there is a picture, $file2
            $iterator = array(1, 2, 3, 4);

            foreach ($iterator as $i) {
                $directory = "Events/Event" . $i . "/";
                $files = scandir($directory);

                if (sizeof($files) > 2) {
                    $file1 = "no event";
                    $file2 = "no picture";
                    $dirSize = sizeof($files);
                    $finfo = finfo_open(FILEINFO_MIME);
                    $fileInfo = finfo_file($finfo, 'Events/Event' . $i . '/' . $files[2]);

                    //parsing fileInfo to isolate file type to avoid extra charset clutter from affecting "if" statments
                    $parsedInfo = preg_split("/[\s,]+/", $fileInfo);

                     switch ($dirSize) {
                        case 2:
                            break;
                        case 3:
                            if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;") {
                                $file1 = $files[2];
                            }
                            break;
                        default:
                            if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;") {
                                $file1 = $files[2];
                                $file2 = $files[3];
                            } else {
                                $file2 = $files[2];
                                $file1 = $files[3];
                            }
                            break;

                     }
                    $fileLocation1 = $directory . $file1;
                    $fileLocation2 = $directory . $file2;

                     //If there is an event, write to HTML which posts it
                    if ($file1 != "no event") {
                        $file_handle = fopen("$fileLocation1", "rb");
                        $line_of_text = fgets($file_handle);
                        echo '<article id="event' . $i . '" class="shadow">
                            <div class = "event-title p-1 pl-2">
                            <h1>' . $line_of_text . '</h1>
                            <div class="box event-header-meta">
                                    <div class="event-date-location">
                                        <span>';
                                            $line_of_text = fgets($file_handle);
                                            echo '<strong>' . $line_of_text . '</strong></span>
                                        <span>';
                                                $line_of_text = fgets($file_handle);
                                                echo $line_of_text . '</span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                </div>';

                        if ($file2 != "no picture") {
                            echo '<div class="image-frame event-short-image overflow-hidden"><a ><img width = "100%" src="' . $fileLocation2 . '" class="attachment-risen-post size-risen-post wp-post-image" alt="Event Picture"></a></div>';
                        } else {
                            echo '<div class="image-frame event-short-image overflow-hidden"><a ><img width = "100%" src="Events/generic.jpg" class="attachment-risen-post size-risen-post wp-post-image" alt="Event Picture"></a></div>';
                        }

                        echo '<div class="event-short-excerpt"><p>';

                        $line_of_text = fgets($file_handle);
                        echo $line_of_text . '</p>
                            </div>
                            <p>
                            </p>
                            </article>';
                    fclose($file_handle);
                    }
                }
            }
            ?>

                </div>
                <div class="col-sm-4">
                    <div class="event-title">
                        <h3 class="text-center">Event List</h3>
                    </div>
                    <?PHP
                    //Checks to see if there are event files in the appropriate Event folder
                    //If so, assigns description to $file1 and if there is a picture, $file2-

                    $iterator = array(1, 2, 3, 4);

                    foreach ($iterator as $i) {
                        $directory = "Events/Event" . $i . "/";
                        $files = scandir($directory);

                        if (sizeof($files) > 2) {
                            $file1 = "no event";
                            $dirSize = sizeof($files);
                            $finfo = finfo_open(FILEINFO_MIME);
                            $fileInfo = finfo_file($finfo, 'Events/Event' . $i . '/' . $files[2]);

                            //parsing fileInfo to isolate file type to avoid extra charset clutter from affecting "if" statements
                            $parsedInfo = preg_split("/[\s,]+/", $fileInfo);

                            switch ($dirSize) {
                                case 2:
                                    break;
                                case 3:
                                    if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;") {
                                        $file1 = $files[2];
                                    }
                                    break;
                                default:
                                    if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;") {
                                        $file1 = $files[2];
                                        $file2 = $files[3];
                                    } else {
                                        $file2 = $files[2];
                                        $file1 = $files[3];
                                    }
                                    break;

                            }

                            $fileLocation1 = $directory . $file1;

                            //If there is an event, write to HTML which posts it
                            if ($file1 != "no event") {
                                $file_handle = fopen("$fileLocation1", "rb");

                                $line_of_text = fgets($file_handle);
                                echo '
	<h5><a style="text-decoration: none;" href="#event' .$i. '">' . $line_of_text . '</a></h5>
	<div>';
                                $line_of_text = fgets($file_handle);
                                echo '<strong>' .$line_of_text . '	</strong></div>
	<div>';
                                $line_of_text = fgets($file_handle);
                                echo $line_of_text . '</div>
					    <hr>';

                                fclose($file_handle);
                            }
                        }
                    }
                    ?>


                </div>
            </div>
        </div>

    </div>


        {{--            <?PHP--}}
        {{--            //Checks to see if there are event files in the appropriate Event folder--}}
        {{--            //If so, assigns description to $file1 and if there is a picture, $file2--}}
        {{--            $directory = "Events/Event4/";--}}
        {{--            $files1 = scandir($directory);--}}
        {{--            if (sizeof($files1) > 2) {--}}
        {{--                $file1 = "no event";--}}
        {{--                $dirSize = sizeof($files1);--}}
        {{--                $finfo = finfo_open(FILEINFO_MIME);--}}
        {{--                $fileInfo = finfo_file($finfo, "Events/Event4/" . $files1[2]);--}}

        {{--//parsing fileInfo to isolate file type to avoid extra charset clutter from affecting "if" statments--}}
        {{--                $parsedInfo = preg_split("/[\s,]+/", $fileInfo);--}}

        {{--                switch ($dirSize) {--}}
        {{--                    case 2:--}}
        {{--                        break;--}}
        {{--                    case 3:--}}
        {{--                        if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;") {--}}
        {{--                            $file1 = $files1[2];--}}
        {{--                        }--}}
        {{--                        break;--}}
        {{--                    default:--}}
        {{--                        if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;") {--}}
        {{--                            $file1 = $files1[2];--}}
        {{--                            $file2 = $files1[3];--}}
        {{--                        } else {--}}
        {{--                            $file2 = $files1[2];--}}
        {{--                            $file1 = $files1[3];--}}
        {{--                        }--}}
        {{--                        break;--}}

        {{--                }--}}

        {{--                $fileLocation1 = $directory . $file1;--}}

        {{--//If there is an event, write to HTML which posts it--}}
        {{--                if ($file1 != "no event") {--}}
        {{--                    $file_handle = fopen("$fileLocation1", "rb");--}}

        {{--                    $line_of_text = fgets($file_handle);--}}
        {{--                    echo '<article class="events-widget-item events-widget-item-first">--}}
        {{--	<header>--}}
        {{--	<h1 class="events-widget-item-title"><a href="#event4">' . $line_of_text . '</a></h1>--}}
        {{--	<div class="events-widget-item-date">';--}}
        {{--                    $line_of_text = fgets($file_handle);--}}
        {{--                    echo $line_of_text . '	</div>--}}
        {{--	<div class="events-widget-item-time">';--}}
        {{--                    $line_of_text = fgets($file_handle);--}}
        {{--                    echo $line_of_text . '</div>--}}
        {{--				</header>--}}
        {{--				<div class="clear"></div>--}}
        {{--				</article>	';--}}


        {{--                    fclose($file_handle);--}}
        {{--                }--}}
        {{--            }--}}
        {{--            ?>--}}
        {{--        </aside>--}}


    @include('includes.footer');
@endsection
