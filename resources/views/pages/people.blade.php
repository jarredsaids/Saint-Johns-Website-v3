@extends('layouts.app')
@section('content')
    @include('includes.navbar')

    <a id="people-css"></a>

    <div id="content-inner" class="has-sidebar">
        <h1 class ="p-4" style="font-family: 'Shadows Into Light Two';">Meet Our Staff</h1>
        <div class="d-flex">

            <div class="sm-4">
                <div class="">

                    <div class="p-4 align-content-center">
                        <img width="180" height="180" src="images/pastor-180x180.jpg"
                             class="shadow" alt="Assistant"
                             title=""></div>
                </div>
            </div>

            <div class="p-4 mr-4">

                <div class = "d-fex row ml-2">
                <h2 id="pastor" style="font-family: 'Shadows Into Light Two';">Rev. Ernest B. Sheldon</h2>

                    <h5><span class="badge badge-secondary ml-4 mt-2">Pastor</span></h5>
                </div>
                <p>Pastor Rev Ernest B. Sheldon is from Fortville, Indiana. Upon graduating from high school, Pastor
                    Ernie served the next twenty years in Army Special Operations (Green Berets). While in the Army, he
                    earned a Bachelor of Science degree from Campbell University. He retired from the Army in 1997 to
                    attend Lutheran Theological Southern Seminary, Columbia, SC, graduating with a Master’s in Divinity
                    in 2001. Since then he has served a number of congregations in North and South Carolina.</p>


            </div>

        </div>



    @include('includes.footer')
@endsection
