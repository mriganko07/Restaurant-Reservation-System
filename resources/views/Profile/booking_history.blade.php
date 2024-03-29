<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{url('css/history_style.css')}}">
        
        <!-- 
        - favicon
        -->
            <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">
        
        <!-- 
        google font link
        -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
        
        <title>FoodHub</title>
    </head>
        <body>

            
            <!-- 
                - #PRELOADER
            -->

            <div class="preload" data-preaload>
                <div class="circle"></div>
                <p class="text">Foodhub</p>
            </div>


            
            <div class="container">
                <div class="logo">
                    <a href="#"><img src="images/FoodHub.png" alt=""></a>
                </div>
                <div class="menu">
                    <div class="sec-center"> 	
                        <input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
                        <label class="for-dropdown" for="dropdown"> <i class="fa-solid fa-bars"></i> </label> 
                        <div class="section-dropdown"> 
                            <a href="#">Booking History <i class="uil uil-arrow-right"></i></a>
                            <input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub"/>
                            <div class="section-dropdown-sub"></div>
                            <a href="{{url('profile')}}">Profile <i class="uil uil-arrow-right"></i></a>
                            <a href="#">Logout <i class="uil uil-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                <div class="glow-item">
                    <div class="card shadow-animate" data-tilt>
                        <h2>Booking History</h2> <br> <br>

                        <table style="width:100%">
                                <div> <hr> <br>
                                    <tr>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </div>
                                <tr>
                                <td>Adhip Halder</td>
                                <td>944541321384</td>
                                <td>12/03/2024</td>
                                <td>11:30</td>
                                </tr>
                                <tr>
                                <td>Sanket Adhikary</td>
                                <td>944541321384</td>
                                <td>13/03/2024</td>
                                <td>12:30</td>
                                </tr>
                          </table>

                        <div class="pagination">
                            <ul>
                                <li class="previous"><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                                <li class="page"><a href="#">1</a></li>
                                <li class="page"><a href="#">2</a></li>
                                <li class="page"><a href="#">3</a></li>
                                <li class="page"><a href="#">4</a></li>
                                <li class="page"><a href="#">5</a></li>
                                <li class="next"><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            


            <script src="{{url('js/history_script.js')}}"></script>
            <script src="{{url('js/history_vanilla-tilt.js')}}"></script>
        </body>
</html>