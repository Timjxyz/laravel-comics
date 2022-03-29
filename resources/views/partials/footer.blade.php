<footer>
    <!-- Parte superiore del footer -->
    <div class="footer-top clearfloat">
        <div class="container">
            <div class="nav-footer">
                <div class="left-nav">
                    <div>
                        <h3>DC COMICS</h3>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Characters</a>
                                </li>
                                <li>
                                    <a href="#">Comics</a>
                                </li>
                                <li>
                                    <a href="#">Movies</a>
                                </li>
                                <li>
                                    <a href="#">TV</a>
                                </li>
                                <li>
                                    <a href="#">Games</a>
                                </li>
                                <li>
                                    <a href="#">Video</a>
                                </li>
                                <li>
                                    <a href="#">News</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div>
                        <h3>SHOP</h3>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Shop DC</a>
                                </li>
                                <li>
                                    <a href="#">Shop DC Collectibles</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>         
                <div>
                    <h3>DC</h3>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Terms Of Use</a>
                            </li>
                            <li>
                                <a href="#">Privacy policy (New)</a>
                            </li>
                            <li>
                                <a href="#">Ad Choices</a>
                            </li>
                            <li>
                                <a href="#">Advertising</a>
                            </li>
                            <li>
                                <a href="#">Jobs</a>
                            </li>
                            <li>
                                <a href="#">Subscription</a>
                            </li>
                            <li>
                                <a href="#">Talent Worckshops</a>
                            </li>
                            <li>
                                <a href="#">CPSC Certificates</a>
                            </li>
                            <li>
                                <a href="#">Ratings</a>
                            </li>
                            <li>
                                <a href="#">Shop Help</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
                <div>
                    <h3>SITES</h3>
                    <nav>
                        <ul>
                            <li>
                                <a href="#">DC</a>
                            </li>
                            <li>
                                <a href="#">MAD Magazine</a>
                            </li>
                            <li>
                                <a href="#">DC Kids</a>
                            </li>
                            <li>
                                <a href="#">DC Universe</a>
                            </li>
                            <li>
                                <a href="#">DC Power Visa</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div> 
            </div>
            <div class="bg-footer">
                <img src="{{asset('img/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
        <p class="credits">All Site TM and rrr 2020 DC Entertaiment, unless otherwise <a href="#">noted here.</a> All rights reserved. <a href="#">Cookies Settings</a></p>
    </div>

    <!-- Parte inferiore del footer -->
    <div class="footer-bottom clearfloat">
        <div class="container">

            <div class="button-footer">
               <button>SIGN-UP NOW</button>
            </div>
            
            <div class="social-footer">
                <a href="#"> FOLLOW US</a>
                <div class="img-social-footer"  v-for="(link, index) in links" :key="index">
                    <img src="{{asset('img/footer-facebook.png')}}" alt="">
                    <img src="{{asset('img/footer-twitter.png')}}" alt="">
                    <img src="{{asset('img/footer-youtube.png')}}" alt="">
                    <img src="{{asset('img/footer-pinterest.png')}}" alt="">
                    <img src="{{asset('img/footer-periscope.png')}}" alt="">
                </div>
                
                
            </div>
        </div>
    </div>

  </footer>