<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>轮播图</title>
</head>
<body>
<!--                                主页轮播图-->
<div class="banner" id="b04">
    <ul class="banner">
<!--        有的地址需要加public或者/-->
        <li><img src="/pd-bd819bc0-abb4-11e4-8889-00163e001348/unslider-150203225543/01.jpg" alt="1" width="1100" height="450"></li>
        <li><img src="/pd-bd819bc0-abb4-11e4-8889-00163e001348/unslider-150203225543/02.jpg" alt="1" width="1100" height="450" ></li>
        <li><img src="/pd-bd819bc0-abb4-11e4-8889-00163e001348/unslider-150203225543/03.jpg" alt="" width="1100" height="450"> </li>
        <li><img src="/pd-bd819bc0-abb4-11e4-8889-00163e001348/unslider-150203225543/04.jpg" alt="" width="1100" height="450" ></li>
        <li><img src="/pd-bd819bc0-abb4-11e4-8889-00163e001348/unslider-150203225543/05.jpg" alt="" width="1100" height="450" ></li>
        <li><img src="/pd-bd819bc0-abb4-11e4-8889-00163e001348/unslider-150203225543/06.jpg" alt="" width="1100" height="450" ></li>
        <li><img src="/pd-bd819bc0-abb4-11e4-8889-00163e001348/unslider-150203225543/07.jpg" alt="" width="1100" height="450" ></li>
        <li><img src="/pd-bd819bc0-abb4-11e4-8889-00163e001348/unslider-150203225543/08.jpg" alt="" width="1100" height="450" ></li>
    </ul>
    <a href="javascript:void(0);" class="unslider-arrow04 prev"><img class="arrow" id="al" src="arrowl.png" alt="prev" width="20" height="35"></a>
    <a href="javascript:void(0);" class="unslider-arrow04 next"><img class="arrow" id="ar" src="arrowr.png" alt="next" width="20" height="37"></a>
</div>
<!--                                主页轮播图-->
<!--        轮播图-->
<script src="/pd-bd819bc0-abb4-11e4-8889-00163e001348/unslider-150203225543/jquery-1.11.1.min.js"></script>
<script src="/pd-bd819bc0-abb4-11e4-8889-00163e001348/unslider-150203225543/unslider.min.js"></script>
<style>
    ul, ol { padding: 0;}
    .banner { position: relative; overflow: auto; text-align: center;}
    .banner li { list-style: none; }
    .banner ul li { float: left; }
    #b04 { width: 640px;}
    #b04 .dots { position: absolute; left: 0; right: 0; bottom: 20px;}
    #b04 .dots li
    {
        display: inline-block;
        width: 15px;
        height: 10px;
        margin: 0 4px;
        text-indent: -999em;
        border: 2px solid #fff;
        border-radius: 9px;
        cursor: pointer;
        opacity: .9;
        -webkit-transition: background .5s, opacity .5s;
        -moz-transition: background .5s, opacity .5s;
        transition: background .5s, opacity .5s;
    }
    #b04 .dots li.active
    {
        background: #fff;
        opacity: 1;
    }
    #b04 .arrow { position: absolute; top: 200px;}
    #b04 #al { left: 15px;}
    #b04 #ar { right: 15px;}
</style>
<script>
    $(document).ready(function(e) {
        var unslider04 = $('#b04').unslider({
                dots: true
            }),
            data04 = unslider04.data('unslider');
        $('.unslider-arrow04').click(function() {
            var fn = this.className.split('')[1];
            data04[fn]();
        });
    });
</script>
<!--        轮播图-->
</body>
</html>
