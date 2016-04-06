<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use app\models\Friendlist;
use common\widgets\Alert;
use app\models\Kefu;
$session = Yii::$app->session;
$session->open();
AppAsset::register($this);
$this->beginPage(); 
/**
 *友情链接
 */
$model = new Friendlist();
$friendlists = $model->alllist();
/**
 *qq客服
 */
 $qq = new Kefu();
 $qqlist = $qq->allkefu();
?>
<!DOCTYPE html>
<html>
<head>
<title>爱游旅行，我们一起走吧。we'll always be together.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Architect Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.0.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
    </script>
<!--start-smoth-scrolling-->
<!--在线客服-->
<style type="text/css">
ul{list-style:none;}
/* slides */
.slides{position:fixed;right:0;top:45%;}
.slides .slideul>li{position:relative;display:block;width:56px;height:56px;margin-bottom:10px;overflow:visible;}
.slides .slideul>li.kefu{width:66px;padding-left:10px;margin-left:-10px;}
.slides .slideul>li ul.kefulist{position:absolute;left:-86px;top:-30px;padding-right:10px;display:none;}
.slides .slideul>li ul.kefulist li{margin-bottom:10px;}
.slides .slideul>li ul.kefulist li a{display:block;width:90px;height:30px;line-height:30px;background:#a8defe;color:#fff;text-align:center;text-decoration:none;}
.slides .slideul>li ul.kefulist li a:hover{text-decoration:none;}
</style>
</head>
<body>
  <!--header-->
  <div class="header-top" id="home">
    <div class="container">
      <div class="header-logo">
        <a href="index.php?r=data/index"><img src="images/logo.png" alt=""/></a>
      </div>
      <div class="top-nav" style="text-align:center">
        <span class="menu"><img src="images/menu-icon.png" alt=""/></span>
        <ul class="nav1">
          <li><a href="index.php?r=data/index">首页 </a></li>
        <li><a href="index.php?r=viewspots/index">景点</a></li>
          <li><a href="index.php?r=travelaround/index">周边游</a></li>
          <!-- <li><a href="404.html">网站公告</a></li> -->
          <li><a href="index.php?r=travel/travel">驴友游记</a></li>
          <li><a href="index.php?r=hotel/hotel">酒店</a></li>
		  <?php if($session['m_name']){?>
          <li><a href="index.php?r=data/user">个人中心</a></li>
		  <?php }?> 
          <!-- <li><a href="news.html">投诉</a></li> -->
        </ul>
        <!-- script-for-menu -->
         <script>
           $( "span.menu" ).click(function() {
           $( "ul.nav1" ).slideToggle( 300, function() {
           // Animation complete.
            });
           });
        </script>
        <!-- /script-for-menu -->
      </div>
      <div class="social-icons">
		<?php if($session['m_name']){?>
			<span style="margin-left:50px;color:white;">Hi,<a href="index.php?r=data/user" style="color:white;"><?php echo mb_strlen($session['m_name'],'utf-8')>4?mb_substr($session['m_name'],0,4,'utf-8').'…':$session['m_name'];?></a></span>
		<?php }?>
      </div>
    </div>
      <div id="sb-search" class="sb-search">
       <?php if($session['m_name']){?>
          <a href="javascript:void(0)" class="out">
            <h5 style="padding:25px"><font color='white'>退出</font><h5>
          </a>
          <?php }else{ ?>
			  <h5 style="padding:25px"><font color='white'><a href="index.php?r=login/login" style="color:white;">登陆</a><a href="index.php?r=register/register" style="color:white;">注册</a></font><h5>
		  <?php } ?>
      </div>
      <script>
            
               $('.out').click(function(){
                 if(confirm('你确定要退出？')){
                   location.href="index.php?r=login/sign_out";
                 }
               })
          
      </script>
    <div class="header-info-right">
        <div class="header cbp-spmenu-push">
          <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
              <a href="index.php?r=data/index">首页</a>
              <a href="index.php?r=data/scenic">景点</a>
              <a href="index.php?r=data/rim">周边游</a>
              <!-- <a href="404.html">网站公告</a> -->
              <a href="index.php?r=data/travel">驴友游记</a>
              <a href="index.php?r=data/hotel">酒店</a>
              <a href="news.html">个人中心</a>
          </nav>
          <!--script-nav -->  
          <script>
            $("span.menu").click(function(){
              $("ul.navigatoin").slideToggle("300" , function(){
              });
            });
          </script>
          <script type="text/javascript">
                jQuery(document).ready(function($) {
                  $(".scroll").click(function(event){   
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                  });
                });
          </script>
          <div class="clearfix"> </div>
            <!-- /script-nav -->
                  <div class="main">
                    <section class="buttonset">
                      <button id="showLeftPush"><img src="images/menu.png" /><span>菜单</span></button>
                    </section>
                  </div>
                  <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                  <script src="js/classie.js"></script>
                  <script>
                    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                      showLeftPush = document.getElementById( 'showLeftPush' ),
                      body = document.body;
              
                    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
                  </script>
        </div>
      </div>
  </div>
  <!--//header-->
  <!--search-scripts-->
          <script src="js/classie.js"></script>
          <script src="js/uisearch.js"></script>
            <script>
              new UISearch( document.getElementById( 'sb-search' ) );
            </script>
  <!--//search-scripts-->
  <!--banner-->
<?= $content ?>

 <!-- 公共尾部代码 -->
  <div class="read">
    <div class="container">
      <div class="read-main">
        <!--<div class="col-md-5 read-left">
          <h3>友情链接</h3>
          <div class="read-btm">
		  <?php foreach($friendlists as $k=>$v){?>
			<div class="col-md-4 rd-left">
			<ul>
                <li><a href="http://<?php echo $v['f_url']?>" target="target"><?php echo $v['f_name']?></a>
				</li>
		    </ul>
			</div>  
		  <?php }?>
		  
            <div class="clearfix"></div>
          </div>-->
        </div>
        <!--<div class="col-md-5 read-left">
          <h3>不能错过</h3>
          <div class="read-btm">
            <div class="read-one">
              <div class="col-md-3 read-bottom-left">
                <img src="images/read-1.jpg" alt="" />
              </div>
              <div class="col-md-9 read-bottom-right">
                <h4>信息展示信息展示</h4>
                <p>介绍介绍介绍</p>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="read-one">
              <div class="col-md-3 read-bottom-left">
                <img src="images/read-1.jpg" alt="" />
              </div>
              <div class="col-md-9 read-bottom-right">
                <h4>信息展示信息展示</h4>
                <p>介绍介绍介绍</p>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>-->
        <!--<div class="col-md-2 read-left">
          <h3>客服中心</h3>
          <div class="read-btm follow">
            <ul>
              <li><a target="blank" href="tencent://message/?uin=1609711185&Site=qq&Menu=yes" class="twit" title="经理">QQ</a></li>
              <li><a target="blank" href="tencent://message/?uin=1253289610&Site=qq&Menu=yes" class="fb">QQ</a></li>
              <li><a target="blank" href="tencent://message/?uin=746479404&Site=qq&Menu=yes" class="d">QQ</a></li>
              <li><a href="#" class="p">QQ</a></li>
            </ul>
          </div>
        </div>-->
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--read-->
  <!--在线客服-->
	<div class="slides">
	<ul class="slideul">
    	<!--<li><a href=""><img src="images/slide-01.jpg" alt=""></a></li>-->
        <li class="kefu">
        	<img src="images/slide-02.jpg" alt="">
        	<ul class="kefulist">
			<?php foreach($qqlist as $k=>$v){?>
				<li><a target="target" href="tencent://message/?uin=<?= $v['q_qq']?>&Site=qq&Menu=yes"><?= $v['q_name']?></a></li>
			<?php }?>
            </ul>
        </li>
    </ul>
</div>
<script type="text/javascript">
$(function(){
	//Sldie
	$(".slides .kefu").mouseenter(function(){
		$(this).find(".kefulist").fadeIn();
	});
	$(".slides .kefu").mouseleave(function(){
		$(this).find(".kefulist").fadeOut();
	});
});
</script>
  <!--在线客服结束-->
  <!--footer-->
  <div class="footer">
    <div class="container">
      <div class="footer-top">
          <h5 style="color:white;">友情链接</h5>
		  <style>
			ol li{
				list-style:none;
				float:left;
			}
			ol li a{
				color:white;
				font-size:10px;
			}
		  </style>
		  <ol style="list-style:none;">
		  <?php foreach($friendlists as $k=>$v){?>
                <li><a href="http://<?php echo $v['f_url']?>" target="target"><?php echo $v['f_name']?>&nbsp;&nbsp;&nbsp;</a>
				</li>	     
		  <?php }?>
		  </ol>
        <div class="clearfix"></div>
		<a href="index.php?r=data/index"><img src="images/logo.png" alt=""/></a>©<span style="color:white;font-size:10px">2016 happycainiu.com <a href="http://www.miibeian.gov.cn/" target="target" style="color:white;font-size:10px">京ICP备16014946号-1</a> 新出网证(京)字iyou号</span>
    </div>
    <script type="text/javascript">
                  $(document).ready(function() {
                    /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                      containerHoverID: 'toTopHover', // fading element hover id
                      scrollSpeed: 1200,
                      easingType: 'linear' 
                    };
                    */
                    
                    $().UItoTop({ easingType: 'easeOutQuart' });
                    
                  });
                </script>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  </div>
  <!--footer-->
  
</body>
</html>