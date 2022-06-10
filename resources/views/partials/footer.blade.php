<?php
$data = config('footer');
?>

<footer>

    <div class="footer-top">
        <div class="container">
            footer top
        </div>
    </div>

    <div class="footer-bottom">
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
        </div>
    </div>

</footer>