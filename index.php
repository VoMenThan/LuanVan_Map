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
<!--    from drag drop file-->
    <form class="box" method="post" action="" enctype="multipart/form-data">
        <div class="box__input">
            <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
            <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
            <button class="box__button" type="submit">Upload</button>
        </div>
        <div class="box__uploading hid">Uploading&hellip;</div>
        <div class="box__success hid">Done!</div>
        <div class="box__error hid">Error! <span></span>.</div>
    </form>
<!--end drag drop file-->
<div class="thanupdate"></div>




</article>
<?php include("footer.php"); ?>