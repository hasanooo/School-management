<!DOCTYPE html>
<html>

<head>
    <title>Happy kids </title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .story_image {
        width: 150px;
        height: 150px;
    }
    </style>
</head>

<body>
    <div>
        <div class="div1">
            <div class="navbar">
                <div class="social">
                    <a href="#" class="fa fa-search"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google"></a>
                </div>
                <div class="full">
                    <img class="im" src="http://html.cwsthemes.com/happykids/images/logo.png">
                    <div class="box">
                        <div class="nav">
                            <button class="drop">Home</button>
                        </div>
                        <div class="nav">
                            <button class="drop">Features</button>
                            <div class="dropdown">
                                <a href="#">Template Features</a>
                                <a href="#">Content Elements</a>
                                <a href="#">Pricing Table</a>
                            </div>
                        </div>

                        <div class="nav">
                            <a href="{{route('notice')}}"><button class="drop">Notice</button></a>
                        </div>

                        <div class="nav">
                            <button class="drop">Blog</button>
                            <div class="dropdown">
                                <a href="#">Blog-1</a>
                                <a href="#">Blog-2</a>
                                <a href="#">Blog-3</a>
                            </div>
                        </div>

                        <div class="nav">
                            <button class="drop">Shop</buttton>
                                <div class="dropdown">
                                    <a href="#">shop-1</a>
                                    <a href="#">Shop-2</a>
                                    <a href="#">Shop-3</a>
                                </div>
                        </div>

                        <div class="nav">
                            <button class="drop">Contact</button>
                        </div>
                        <div class="nav">
                            <a href="{{route('login')}}"><button class="drop">Log In</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="http://html.cwsthemes.com/happykids/pic/slide-27.jpg"
                        style="width:100%; -webkit-box-shadow: 0 0 20px #084aad;0 0 20px #084aad;">
                    <div class="text">Happy kids is for kid to learn new things</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="http://html.cwsthemes.com/happykids/pic/slide-17.jpg"
                        style="width:100%; -webkit-box-shadow: 0 0 20px #084aad;0 0 20px #084aad;">
                    <div class="text">Learn new thing with happy kid</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="http://html.cwsthemes.com/happykids/pic/slide-5.jpg"
                        style="width:100%; -webkit-box-shadow: 0 0 20px #084aad;0 0 20px #084aad;">
                    <div class="text">Watch videos and play games</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>


            <div class="div2">
                <div class="sub">
                    <div>
                        <img src="http://html.cwsthemes.com/happykids/images/icon-2.png"
                            style="margin-top:40%;margin-left:20%;">
                    </div>
                    <div>
                        <h5>Playground</h5>
                        <p>As I have seen, I will come to a minimum <br> who does not support the exercise of <br> the
                            body of the players as aliqup. </p>
                        <button type="button" class="btn btn-primary"
                            style=" margin-top: 4%;margin-left:75%; background-color:#388af5;border:0; box-shadow:  10px 10px 8px skyblue; color:white; height:7%; font-size:18px; height:9%;">more</button>
                    </div>
                </div>
                <div class="sub">
                    <div>
                        <img src="http://html.cwsthemes.com/happykids/images/icon-1.png"
                            style="margin-top:40%;margin-left:20%;">
                    </div>
                    <div>
                        <h5>Entertainment</h5>
                        <p>The customer should be able to follow <br> the customer's customer service. <br>But the
                            poisonous soft milk we need</p>
                        <button type="button" class="btn btn-primary"
                            style="margin-left:75%; background-color:#388af5;border:0; box-shadow:  10px 10px 8px skyblue; color:white; height:7%; font-size:18px; height:9%;">more</button>
                    </div>
                </div>
                <div class="sub">
                    <div>
                        <img src="http://html.cwsthemes.com/happykids/images/icon-3.png"
                            style="margin-top:40%;margin-left:20%;">
                    </div>
                    <div>
                        <h5>Entertainment</h5>
                        <p>As I have seen, I will come to a <br>minimum, who takes up the body of our sport.</p>
                        <button type="button" class="btn btn-primary"
                            style=" margin-top: 8%;margin-left:75%; background-color:#388af5;border:0; box-shadow:  10px 10px 8px skyblue; color:white; height:7%; font-size:18px; height:9%;">more</button>
                    </div>

                </div>


            </div>
            <div class="divv1">
                <h6>Books</h6>
            </div>
            <div class="div4">

                @foreach($book as $item)
                <a style="text-decoration:none;" href="Books/{{$item->pdf}}">
                    <div
                        style="margin:10px; width:300px; height:400px; text-align:center; box-shadow:5px 5px 10px gray;">
                        <img style="width:100%;" src="Image/unnamed.png">
                        <div>
                            <h5>{{$item->title}}</h5>
                            <p>{{substr($item->desc,0,200)}}...</p>
                        </div>
                    </div>
                </a>
                @endforeach

            </div>
            <div class="divv">
                <h6>Stories</h6>
            </div>
            <div class="div3">
                @foreach ($story as $item)
                <div style="margin:10px; width:300px; height:400px; text-align:center; box-shadow:5px 5px 10px gray;"">

                    <img style=" width:100%;" src="Story/{{$item->image}}">
                    <!-- <video width="320" height="240" controls>
  <source src="Story/{{$item->image}}" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  
</video> -->

                    <img style=" width:100%;" src="Story/{{$item->image}}">
                    >

                    <div>
                        <h5>{{$item->title}}</h5>
                        <p>{{substr($item->story,0,70)}}</p>
                        <a href="/story/{{$item->id}}"> <button type="button" class="btn btn-primary"
                                style="margin-left:40%; background-color:#173491;;border:0; color:white; height:7%; font-size:18px; height:9%;">View
                                Story</button></a>


                        <div>
                            <h5>{{$item->title}}</h5>
                            <p>{{substr($item->story,0,70)}}</p>
                            <button type="button" class="btn btn-primary"
                                style="margin-left:40%; background-color:#173491;border:0; color:white; height:7%; font-size:18px; height:9%;">View
                                Story</button>


                        </div>
                    </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {!! $story->links() !!}
                    </div>
                </div>













                <footer class="footer">
                    <div class="coll"></div>
                    <div class="midd">

                        <div class="container">

                            <div class="row">

                                <div class="col">
                                    <h4>Gallery</h4>
                                    <div class="boddy">
                                        <div class="slider">
                                            <div class="slides">
                                                <input type="radio" name="radio-btn" id="radio1">
                                                <input type="radio" name="radio-btn" id="radio2">
                                                <input type="radio" name="radio-btn" id="radio3">


                                                <div class="slide first">
                                                    <img src="http://html.cwsthemes.com/happykids/pic/347x347-img-1.jpg"
                                                        style="width:100%">
                                                </div>
                                                <div class="slide">
                                                    <img src="http://html.cwsthemes.com/happykids/pic/300x300-img-4.jpg"
                                                        style="width:100%">

                                                </div>
                                            </div>


                                        </div>

                                        <footer class="footer">
                                            <div class="coll"></div>
                                            <div class="midd">

                                                <div class="container">

                                                    <div class="row">

                                                        <div class="col">
                                                            <h4>Gallery</h4>
                                                            <div class="boddy">
                                                                <div class="slider">
                                                                    <div class="slides">
                                                                        <input type="radio" name="radio-btn"
                                                                            id="radio1">
                                                                        <input type="radio" name="radio-btn"
                                                                            id="radio2">
                                                                        <input type="radio" name="radio-btn"
                                                                            id="radio3">

                                                                        <div class="slide first">
                                                                            <img src="http://html.cwsthemes.com/happykids/pic/347x347-img-1.jpg"
                                                                                style="width:100%">
                                                                        </div>
                                                                        <div class="slide">
                                                                            <img src="http://html.cwsthemes.com/happykids/pic/300x300-img-4.jpg"
                                                                                style="width:100%">
                                                                        </div>
                                                                        <div class="slide">

                                                                            <img src="http://html.cwsthemes.com/happykids/pic/347x347-img-2.jpg"
                                                                                style="width:90%">
                                                                        </div>
                                                                        <div class="navigation-auto">
                                                                            <div class="auto-btn1"></div>
                                                                            <div class="auto-btn2"></div>
                                                                            <div class="auto-btn3"></div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="navigation-manual">
                                                                        <label for="radio1" class="manual-btn"></label>
                                                                        <label for="radio2" class="manual-btn"></label>
                                                                        <label for="radio3" class="manual-btn"></label>

                                                                    </div>

                                                                    <div class="slide first">
                                                                        <img src="http://html.cwsthemes.com/happykids/pic/347x347-img-1.jpg"
                                                                            style="width:100%">

                                                                    </div>
                                                                    <div class="slide">
                                                                        <img src="http://html.cwsthemes.com/happykids/pic/300x300-img-4.jpg"
                                                                            style="width:100%">
                                                                    </div>
                                                                    <div class="slide">

                                                                        <img src="http://html.cwsthemes.com/happykids/pic/347x347-img-2.jpg"
                                                                            style="width:90%">
                                                                    </div>
                                                                    <div class="navigation-auto">
                                                                        <div class="auto-btn1"></div>
                                                                        <div class="auto-btn2"></div>
                                                                        <div class="auto-btn3"></div>

                                                                    </div>

                                                                </div>
                                                                <div class="navigation-manual">
                                                                    <label for="radio1" class="manual-btn"></label>
                                                                    <label for="radio2" class="manual-btn"></label>
                                                                    <label for="radio3" class="manual-btn"></label>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <h4>Latest Post</h4>
                                                        <ul>
                                                            <li>
                                                                <h6>New Book</h6>
                                                                <img src="http://html.cwsthemes.com/happykids/pic/LegoMovie_3rd4.jpg"
                                                                    style="width:40%">
                                                            </li>
                                                            <li>
                                                                <h6>Story Book</h6>
                                                                <img src="http://html.cwsthemes.com/happykids/pic/70x70-img-3.jpg"
                                                                    style="width:40%">
                                                            </li>

                                                        </ul>
                                                    </div>


                                                    <div class="col">
                                                        <h4>Event Activities</h4>
                                                        <ul>
                                                            <li><a href="#">Animated Video</a></li>
                                                            <li><a href="#">Bangla</a></li>
                                                            <li><a href="#">Math</a></li>
                                                            <li><a href="#">English</a></li>
                                                            <li><a href="#">Games</a></li>
                                                            <li><a href="#">Subject Quizes</a></li>
                                                        </ul>
                                                    </div>



                                                    <div class="col">
                                                        <h4>Contact With US</h4>
                                                        <ul>
                                                            <li><a href="#">Address : Bashundhara R/A, Dhaka</a></li>
                                                            <li><a href="#"> Phone No : 12345678</a></li>
                                                            <li><a href="#">Email : kinden@gmail.com</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </footer>
                                    </div>
                                    <script>
                                    let slideIndex = 0;
                                    showSlides();

                                    function showSlides() {
                                        let i;
                                        let slides = document.getElementsByClassName("mySlides");
                                        for (i = 0; i < slides.length; i++) {
                                            slides[i].style.display = "none";
                                        }
                                        slideIndex++;
                                        if (slideIndex > slides.length) {
                                            slideIndex = 1
                                        }
                                        slides[slideIndex - 1].style.display = "block";
                                        setTimeout(showSlides, 3000); // Change image every 2 seconds
                                    }
                                    </script>

</body>

</html>