<?php include("header.php"); ?>
<nav>
    <ul class="ul-menu">
        <li class="list-menu"><a href="#">Trang Chủ</a></li>
        <li class="list-menu"><a href="#">Luyện Tập</a>
            <ul class="ul-menu-child">
                <li class="list-menu-child">100 số</li>
                <li class="list-menu-child">Chữ cái</li>
                <li class="list-menu-child">Ngày</li>
            </ul>
        </li>
        <li class="list-menu"><a href="#">Kiểm Tra</a></li>
        <li class="list-menu"><a href="#">Kết Quả</a></li>
    </ul>
</nav>
<article>
    <div class="random-number">
        <div class="result-random"></div>
        <button class="btn-random" onclick="myFunctionRandom()">Random</button>
    </div>

    <div class="time-speed">
        <input type="text" id="h_val" placeholder="Giờ" value=""/> <br/>
        <input type="text" id="m_val" placeholder="Phút" value=""/> <br/>
        <input type="text" id="s_val" placeholder="Giây" value=""/>
        <input type="button" value="Start" onclick="start()"/>
        <input type="button" value="Stop" onclick="stop()"/>  <br/> <br/>
    </div>

    <div>
        <span id="h">Giờ</span> :
        <span id="m">Phút</span> :
        <span id="s">Giây</span>
    </div>
    <div class="img-cut">
        <span class='img_facebook logo icon'></span>
    </div>
</article>
<?php include("footer.php"); ?>