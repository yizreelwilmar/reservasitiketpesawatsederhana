<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fly With Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "{{ asset('/foto/logo1.png') }}">
    </head>
    <body>
         
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "fas fa-plane site-name">
                    <span>Fly With Us</span>
                </div>
                
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>

            <div class = "head-bottom flex">
                <br><br><br>
                <h2>A great way to fly.</h2>
                <p></p>
                <a href="{{ route('flight.index') }}"><button type = "button" class = "head-btn">Book Now</button></a>
            </div>
        </header>
        

        
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li class="fas fa-home"><a href = "{{ url('/welcome') }}">home</a></li><br><br>
                <li class="fas fa-list"><a href = "{{ route('flight.index') }}">Flight</a></li><br><br>
                <li class="fas fa-user"><a href = "{{ route('booking.index') }}">Booking</a></li><br><br>
                <li class="fas fa-plane"><a href = "{{ url('/flightcrud') }}">Plane</a></li><br><br>
                <li class="fas fa-user"><a href = "#customers">customers</a></li><br><br>
            </ul>
            <p class="mb-1">(1981022) &copy; 2021 FTI UNAI </p>
            <div class="btn ">
                                    <p class=" fas fa-key btn-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> Log Out </p>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
        </div>
        
        <!-- fullscreen modal -->
        <!-- end of fullscreen modal -->

        <!-- body content  -->

        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2>customers</h2>
                </div>
                <div class = "customers-container">
                
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p></p>
                        <img src = "{{ asset('/foto/images/cus1.jpg') }}" alt = "customer image">
                        <span>Smith, USA</span>
                    </div>
              
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Flight</h3>
                        <p></p>
                        <img src = "{{ asset('/foto/images/cus2.jpg') }}" alt = "customer image">
                        <span>Lovely, Indonesia</span>
                    </div>
                   
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Flight</h3>
                        <p></p>
                        <img src = "{{ asset('/foto/images/cus3.jpg') }}" alt = "customer image">
                        <span>Carl, UK</span>
                    </div>

                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Business Class </h3>
                        <p></p>
                        <img src = "{{ asset('/foto/images/southwest__1_.png') }}" alt = "customer image">
                        <span>Namora, UK</span>
                    </div>
               
                </div>
            </div>
        </section>
        
        
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>About Us </h2>
                    <p></p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Links</h2>
                    <a href = "#">Blog</a>
                    <a href = "#">Class</a>
                    <a href = "#">Subscription</a>
                    <a href = "#">Gift Card</a>
                </div>

                <div>
                    <h2>Privacy</h2>
                    <a href = "#">Career</a>
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    <a href = "#">Services</a>
                </div>

                <div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            Blok IV Teratai,Batam,Kepulauan Riau,Indonesia
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +62 821 7996 9442
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            1981022@unai.edu
                        </span>
                    </div>
                    <p class="mb-1">&copy; 2021 FTI UNAI </p>
                </div>
            </div>
        </footer>
        <!-- end of footer -->
        
        <script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
    </body>
</html>