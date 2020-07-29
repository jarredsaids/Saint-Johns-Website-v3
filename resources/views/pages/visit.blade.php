@extends('layouts.app')
@section('content')
    @include('includes.navbar')

    <a id="visit-css"></a>
    <!--Video Slides-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/visit.jpg" alt="First slide">
            </div>
        </div>
    </div>
    <hr>
    <div id="content-inner" class="has-sidebar">
        <div class="row">
            <div class="col-8">
                <h2 class="p-4" style="font-family: 'Shadows Into Light Two';">Our Core Values</h2>
                <img class="p-2" src="images/stjohnsoutside.jpg" align="left" alt="St John's Lutheran Church">
                <h5><strong>Christ-Centered</strong></h5>
                <p>We confess the apostolic faith in Jesus Christ according to the Holy Scriptures.
                    We affirm the authority of the Scriptures as the authoritative source and norm, “according to which
                    all doctrines should and must be judged” (Formula of Concord). We accept the ecumenical creeds and
                    the Lutheran Confessions as true witnesses to the Word of God.<br>
                <p></p>
                <h5><strong>Mission-Driven</strong></h5>
                <p>We believe that the mission of the Church is to preach the Gospel and to make
                    disciples for Christ. We believe that making disciples — in our congregations, in our communities
                    and nations, and around the world — must be a priority of the Church in the present age.
                <p></p>
                <img class="p-2" src="images/faithfamily.jpg" align="left" alt="family">
                <h5><strong>Traditionally-Grounded</strong></h5>
                <p>We affirm the ecumenical creeds and the faithful witness of the Church across
                    time and space. We endorse the form and practices of the universal Church that are consistent with
                    Scripture, particularly the office of the ministry and the tradition of worship under Word and
                    Sacrament. We seek dialogue and fellowship with other Lutheran churches and with faithful Christians
                    of other confessions.
                <p></p>
                <h5><strong>Congregationally-Focused</strong></h5>
                <p>We strive to be a church that is organized to facilitate the ministries of local
                    congregations in a posture of servant-hood and a spirit of partnership, through the provision of
                    resources, connections and information.
                </p><br><br>
                <h5><strong class="p-2">We are a member of the North American Lutheran Church</strong></h5><br>
                <a class="p-2" align="left" href="http://www.thenalc.org" target="blank"><img
                        src="images/NALC-logo1.png"
                        alt="North American Lutheran Church"></a>

            </div>
            <div class="col-md" id="Top">
                <h1  class="sidebar-widget-title">Before You Visit...</h1>
                <a class="btn btn-block" href="#situated" role="button">Getting Situated</a>
                <a class="btn btn-block" href="#glad">We are glad you chose us.</a>
                <a class="btn btn-block" href="#wear">What should I wear?</a>
                <a class="btn btn-block" href="#children">What about the children?</a>
                <a class="btn btn-block" href="#offering">What about the offering?</a>
                <a class="btn btn-block" href="#service">Worship: following along...</a>
                <a class="btn btn-block" href="#communion">Taking Communion</a>
<hr>

                <div align="left"><strong><a name="situated" id="situated"></a>Getting Situated</strong><br></div>
                You can check out our <a href="/location#getDirections" target="blank">MAP</a> for directions before you
                head out Sunday morning. Once you get here you'll find plenty of parking, including spaces for the
                handicapped. Ushers will welcome you, give you a bulletin, and answer most questions and help you if you
                need assistance.
                <div align="right"><a href="#Top">Back to top</a></div>
                <hr>
                <p>
                <div align="justify"><strong><a name="glad" id="glad"></a>We are glad you chose to worship our Lord with
                        us.</strong></a><br>
                    We will greet you with smiles and handshakes. We ask everyone, members and guests alike, to fill out
                    our “Welcome Cards” that come in your bulletin. Just fill out the information you feel comfortable
                    sharing. Our desire is that your worship with us is uplifting, fulfilling and meaningful.
                </div>
                <div align="right"><a href="#Top">Back to top</a></div>
                <hr>
                <p>
                <div align="justify"><strong><a name="wear" id="wear"></a>What should I wear?</strong><br>
                    God loves us as we are - no matter who we are, what we do, or how we dress. We wear anything from
                    jeans and tee shirts, to slacks and golf shirts, to suits and ties when we gather to worship Our
                    Lord.
                </div>
                <div align="right"><a href="#Top">Back to top</a></div>
                <hr>
                <p>
                <div align="justify"><strong><a name="children" id="children"></a>What about our children?</strong><br>
                    Children are welcome in our worship. A nursery, with attendant, is available for those attending to
                    the needs of infants and small children.
                </div>
                <div align="right"><a href="#Top">Back to top</a></div>
                <hr>
                <p>
                <div align="justify"><strong><a name="offering" id="offering"></a>What about the offering?</strong><br>
                    After the prayers of the people offering plates are passed. This is an opportunity to respond to all
                    God has done for us through Jesus Christ our Lord by returning a portion of what he has given us to
                    support his church.
                </div>
                <div align="right"><a href="#Top">Back to top</a></div>
                <hr>
                <p>
                <div align="left"><strong><a name="service" id="service"></a>Will I be able to follow our
                        worship?</strong><br>
                    Everything you need to participate in worship is printed in the bulletin or in the green and blue
                    hymnals located in racks on the back of each pew.
                </div>
                <div align="right"><a href="#Top">Back to top</a></div>
                <hr>
                <p>
                <div align="justify"><strong><a name="communion" id="communion"></a>Can I take Communion?</strong><br>
                    We receive Holy Communion weekly at the invitation of the Lord, receiving the body and blood of
                    Christ for the forgiveness of our sins. Baptized Christians who share this faith and wish to join us
                    in the sacrament are welcome. Please bring young children forward for a blessing.
                </div>
                <div align="right"><a href="#Top">Back to top</a></div>

                <article class="staff-widget-item">

                </article>

            </div>

        </div>
    </div>
    @include('includes.footer')
@endsection
