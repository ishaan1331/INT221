<!DOCTYPE html>
<html lang="en">

<head>
    <title>Categories</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('categorystyle.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top nav-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ishaan Travels </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse text-right" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Main page.html">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="Login.html">Login / Signup</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link active" href="Categories.html">Categories</a>
                    </li>

                    <li  class="nav-item">
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                               <li  class="nav-item">

                                <x-app-layout>

                                </x-app-layout>

                                </li>
                            @else
                                <li  class="nav-item">
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline nav-link">Log in</a>
                                </li>

                                @if (Route::has('register'))
                            <li  class="nav-item">
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline nav-link">Register</a>
                            </li>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="main-para">
        <nav>
            <div class="nav nav-tabs " id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-solo-tab" data-bs-toggle="tab" data-bs-target="#nav-solo" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Solo Trip</button>
                <button class="nav-link" id="nav-honeymoon-tab" data-bs-toggle="tab" data-bs-target="#nav-honeymoon" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Honeymoon</button>
                <button class="nav-link" id="nav-group-tab" data-bs-toggle="tab" data-bs-target="#nav-group" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Group Trips</button>
                <button class="nav-link" id="nav-adventure-tab" data-bs-toggle="tab" data-bs-target="#nav-adventure" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Adventure Travel</button>



            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-solo" role="tabpanel" aria-labelledby="nav-solo-tab">

                <div class="row row-cols-1 row-cols-md-3 g-4 card-padding " style="margin: 0px;">
                    <div class="col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/polonnaruwa') }}">
                                {{-- <img src="Assets/Solo page/polonnaruwal.jpg" class="card-img-top " alt="... "> --}}
                                {{-- {{ HTML::image('images/logo.png', 'logo') }} --}}

                                <img src="<?= asset('Assets/Solo page/polonnaruwal.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font">
                                <h5 class="card-title ">Polonnaruwa , Sri Lanka</h5>
                                <p class="card-text card-content-font ">If you are looking for a new experience and want to go solo , try visiting the beautiful city of polonnarua in Sri Lanka , comprising of some of the best monumental architectures . </p>
                            </div>
                        </div>
                    </div>

                    <div class="col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/goa') }}">
                                <img src="<?= asset('Assets/Solo page/goa.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font">
                                <h5 class="card-title ">Goa , India</h5>
                                <p class="card-text card-content-font ">Aside of being a party capital , Goa also includes may other beaches , spas and colonies to re-energize yourself . You can also experienceleech therapy and exotic drinks !</p>
                            </div>
                        </div>
                    </div>

                    <div class="col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/kasol') }}">
                                <img src="<?= asset('Assets/Solo page/kasol.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font">
                                <h5 class="card-title ">Kasol , Himachal Pradesh</h5>
                                <p class="card-text card-content-font "> Kasol is a small village on Parvati Valley . It is famous for its breath-taking views from the hills and fishing trouts . </p>
                            </div>
                        </div>
                    </div>


                    <div class="col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/varkala') }}">
                                <img src="<?= asset('Assets/Solo page/varkala.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font">
                                <h5 class="card-title ">Varkala , Kerela</h5>
                                <p class="card-text card-content-font ">Varkala is a beach town in the south , famous for its temples and Varkala Beaches . You can also go for Kayaking in Mangrove forests and watersports like snorkelling and rafting . </p>
                            </div>
                        </div>
                    </div>

                    <div class="col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/bali') }}">
                                <img src="<?= asset('Assets/Solo page/bali.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font">
                                <h5 class="card-title ">Bali , Indonesia</h5>
                                <p class="card-text card-content-font ">Bali is one of the best destinations for solo travel in the world as you can find everything here ranging from beautiful beaches , temples , to sunset points , bars and clubs </p>
                            </div>
                        </div>
                    </div>

                    <div class="col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/bangkok') }}">
                                <img src="<?= asset('Assets/Solo page/bangkok.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font">
                                <h5 class="card-title ">Bangkok , Thailand</h5>
                                <p class="card-text card-content-font ">This capital city of Thailand is famous for its boat markets , temples , beaches and sky bars . Also , you can o shopping in chinatown , go to airplane museum , explore beaches , cocktails and many more !!</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="tab-pane fade " id="nav-honeymoon" role="tabpanel " aria-labelledby="nav-honeymoon-tab">


                <div class="row row-cols-1 row-cols-md-3 g-4 card-padding " style="margin: 0px;">

                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/santorini') }}">
                                <img src="<?= asset('Assets/Honeymoon/santorini.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Santorini , Greece</h5>
                                <p class="card-text card-content-font">Santorini is one of the most beautiful and currently trending destinations for honeymoon . With exotic drinks , seafood , cool breeze and luxurious hotels , create one of the finest moments of your life .
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/maldives') }}">
                                <img src="<?= asset('Assets/Honeymoon/maldives.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Maldives , South Asia</h5>
                                <p class="card-text card-content-font">Maldives is one of the most currently popular destinatons for Honeymoon due to the beach culture and exotic and affordable hotels .You can do a lot of fun activities like sipping martini ona luxury cruise to parties at
                                    night!
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/mauritius') }}">
                                <img src="<?= asset('Assets/Honeymoon/mauritius.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Mauritius , East Africa</h5>
                                <p class="card-text card-content-font">Mauritius is famous for its tropical weather and beaches . You cando a lot of romantic things here like going to a private cruise to stepping on the giant water lilies .
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/paris') }}">
                                <img src="<?= asset('Assets/Honeymoon/paris.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Paris , France</h5>
                                <p class="card-text card-content-font">The romance capital of the world . Go hand in hand to the Louvre Museum , and have the finest evening of life in the Eiffel Tower.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/venice') }}">
                                <img src="<?= asset('Assets/Honeymoon/venice.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Venice , Italy</h5>
                                <p class="card-text card-content-font">Venice is a beautiful city built on approximately 100 islands . There are no roads in the city, just canals ,and what else could be more beautiful ?
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="tab-pane fade " id="nav-group" role="tabpanel " aria-labelledby="nav-group-tab">


                <div class="row row-cols-1 row-cols-md-3 g-4 card-padding " style="margin: 0px;">

                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/ladakh') }}">
                                <img src="<?= asset('Assets/Group/ladakh.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Ladakh , India</h5>
                                <p class="card-text card-content-font">Ladakh is the best and the most affordable places for group trips with friends who are adventurists .You can do the great bullet ride with camping in spots , making new memories along the way .
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/dubai') }}">
                                <img src="<?= asset('Assets/Group/dubai.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Dubai , UAE</h5>
                                <p class="card-text card-content-font">
                                    Dubai is known for its rich and vibrant lifestyle .You get to experience the great city life with adventures like diving from skyscrapersanda very delicious cuisine .
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/vegas') }}">
                                <img src="<?= asset('Assets/Group/vegas.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Las Vegas , Nevada</h5>
                                <p class="card-text card-content-font"> Las Vegas is a sincity known for gambling ,raves ,shopping , entertainment and nightlife . You'll get the best barbecue foods and drinks of the world here .
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="tab-pane fade " id="nav-adventure" role="tabpanel " aria-labelledby="nav-adventure-tab">


                <div class="row row-cols-1 row-cols-md-3 g-4 card-padding " style="margin: 0px;">

                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/rishikesh') }}">
                                <img src="<?= asset('Assets\Adventure\rishikesh.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Rishikesh , Uttarakhand</h5>
                                <p class="card-text card-content-font">Rishikesh is the hub of many adventurous and religious activities . No matter what itinerary an adventurer chooses, Rishikesh offers an unforgettable and awe-inspiring rafting experience in the midst of hued mountains and
                                    silvery rapids
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/iceland') }}">
                                <img src="<?= asset('Assets\Adventure\iceland.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Iceland</h5>
                                <p class="card-text card-content-font">
                                    The country is known for its massive lava fields , mountains and Viking’s history alongwith adventure sports ranging from hiking in icy mountains to getting inside a volcano .</p>
                            </div>
                        </div>
                    </div>


                    <div class=" col ">
                        <div class="card h-100 ">
                            <a href="{{ url('categories/brazil') }}">
                                <img src="<?= asset('Assets\Adventure\brazil.jpg') ?>" class="card-img-top " alt="... ">
                            </a>
                            <div class="card-body card-font ">
                                <h5 class="card-title ">Brazil</h5>
                                <p class="card-text card-content-font"> Brazil ranks in one of the top 5 countries for adventure tourism due to its exposure qualities and vibrant culture
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
</body>

</html>
