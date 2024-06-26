<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>FoodHub</title>
    <link rel="stylesheet" href="{{ url('/css/booking.css') }}">
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/svg+xml">

</head>
<body>

    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Foodhub</p>
    </div>

    <nav>
        <div class="nav">
            <a href="{{ route('home') }}"><img src="/images/payment/logo.png" alt=""></a>

            <div class="menu1">
                <div class="sec-center"> 	
                    <input class="dropdown1" type="checkbox" id="dropdown1" name="dropdown1"/>
                    <label class="for-dropdown1" for="dropdown1"> <i class="fa-solid fa-bars"></i>   </label>
                    <div class="section-dropdown1"> 
                        <a href="{{ route('mybookings') }}">My Bookings <i class="uil uil-arrow-right"></i></a>
                        <a href="{{ route('mypayments') }}">My Payments <i class="uil uil-arrow-right"></i></a>
                        <input class="dropdown1-sub" type="checkbox" id="dropdown1-sub" name="dropdown1-sub"/>
                        <div class="section-dropdown1-sub"></div>
                        <a href="profile">My Profille <i class="uil uil-arrow-right"></i></a>
                        {{-- <a href="logout">Logout <i class="uil uil-arrow-right"></i></a> --}}
                        <form action="{{ route('logout') }}" method="post">
                        @csrf
                            
                        {{-- <a href=""><button type="submit">Logout <i class="uil uil-arrow-right"></i></button></a> --}}
                        <button type="submit" class="logout-btn">Logout <i class="uil uil-arrow-right"></i></button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="main">
        <div class="left">
            <img src="/images/booking/1.jpeg" alt="">
        </div> 
        <div class="right">
            <div class="form">
                <form method="POST" action="{{url('/')}}/booking">
                    @csrf
                    
                    {{-- @if(session('customer'))
                    <h4>Customer ID : {{ session('customer')->customer_id }}</h4> <br>
                    @endif --}}

                    <div class="form_div">
                        <label for="date">Booking Date</label>
                        <input type="date" name="date" id="date" class="input" required>
                    </div>

                    <div class="form_div">
                        <label for="time">Booking Time</label>
                        <select name="time" id="time" required>
                            <option value="none">Select Time Slot</option>
                            <option value="first">10.00 - 12.00</option>
                            <option value="second">11.00 - 13.00</option>
                            <option value="third">12.00 - 14.00</option>
                            <option value="fourth">13.00 - 15.00</option>
                            <option value="fifth">14.00 - 16.00</option>
                            <option value="sixth">15.00 - 17.00</option>
                            <option value="seventh">16.00 - 18.00</option>
                            <option value="eightth">17.00 - 19.00</option>
                            <option value="ninth">18.00 - 20.00</option>
                            <option value="tenth">19.00 - 21.00</option>
                            <option value="eleventh">20.00 - 22.00</option>
                            <option value="twelvelth">21.00 - 23.00</option>
                        </select>
                    </div>

                    <div class="form_div">
                        <label for="guest_no">Guest No.</label>
                        <select name="guest_no"     id="guest_no"  onchange="toggleExtraSeats()" required>
                            <option value="none">Select Guest No.</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>

                    <div class="form_div" id="form_div">
                        <label for="gnum">Seat Options</label>
                        <select name="gnum" id="gnum" required>
                            <option value="null">Select seats</option>
                            <option value="2">2 seater</option>
                            <option value="4">4 seater</option>
                            <option value="6">6 seater</option>
                            <option value="8">8 seater</option>
                        </select>
                    </div>
                    
                    <div class="form_div_sub">
                        <input type="submit" id="submit">
                        {{-- <label for="submit"><button class="submitbtn">Proceed</button></label> --}}
                        <label for="submit"><button class="button">Proceed</button></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ url('/js/booking.js') }}"></script>

    <script src="{{asset('js/preloader.js')}}"></script>
</body>
</html>