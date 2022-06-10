<?php
$data = config('footer');
?>

<footer>

    <div class="footer-top">
        <div class="container">
            footer top
        </div>
    </div>

    <div class="footer-center">
        <div class="container">
            <div class="liste">
                @foreach ($data as $list)
                    <ul>
                        <li class="head">{{$list['name']}}</li>
                        @foreach($list['content'] as $li)
                        <li class="normal">
                            <a href="#">{{$li}}</a>
                        </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
            All Site Content TM and 2020 DC Entertainment, unless otherwise 
            <a href="#">noted here</a>. All rights reserved. <br>
            <a href="#">Cookies settings</a>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <button>sign-up now!</button>
            <div class="icons">
                <span>follow us</span>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-pinterest"></i>
            </div>
        </div>
    </div>
    


</footer>