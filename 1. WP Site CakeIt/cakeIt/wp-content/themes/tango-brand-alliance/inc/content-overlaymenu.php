<!-- The Div for the overlay menu -->
<div id="wbn-ovrly-menu">
	<span class="wbn-ovrly-closeButton">
		<img src="/wp-content/themes/tango-brand-alliance/img/tango_close_button.svg">
	</span>
	
	<div class="wbn-tango-white-logo">
		<img src="/wp-content/themes/tango-brand-alliance/img/tango_logo_white.svg">
	</div>
	
	<nav id="wbn-ovrly-nav" role="navigation">
		<?php wp_nav_menu( array( 'menu' => 'testUber' ) ); ?>
	</nav>
</div>

<!-- The Span for the hamburger button -->
<span class="wbn-ovrly-hamburger">
	<img src="/wp-content/themes/tango-brand-alliance/img/tango_heart_hamburger.svg">
</span>

<script>
	
jQuery(".wbn-ovrly-hamburger").click(function(){
    jQuery("#wbn-ovrly-menu").fadeIn(500);
});
	
jQuery(".wbn-ovrly-closeButton").click(function(){
    jQuery("#wbn-ovrly-menu").fadeOut(500);
});
	
</script>

<style>
	
	#wbn-ovrly-nav {
  list-style-type: none;
  margin: 50px 0 0 0;
  padding: 0 0 0 0;
  width: 100%;
		text-align:center;
		position:relative;
		left:0px;
		display:block;
}
	
	#wbn-ovrly-nav ul {
		margin: 0 0 0 0;
		padding: 0 0 0;
	}
#wbn-ovrly-nav li {
  font-family: 'Teko';
	font-size:48px;
  margin: 0;
  padding: 0;
  list-style: none;
}
#wbn-ovrly-nav a {
  color: #fff;
  display: block;
  margin: 0;
  padding: 0;
  text-decoration: none;
  font-weight: normal;
-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease;
-o-transition: all 0.3s ease;
-ms-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
#wbn-ovrly-nav a:hover {
	color:#CDCDCD;
	
}
	
	#wbn-ovrly-nav ul ul {
		display:none;
	}
	
	
	
	
	
	
	.wbn-tango-white-logo {
		margin: auto;
		padding: 100px 0 0 0;
    	width: 50%;
	}
	
#wbn-ovrly-menu {
	display:none;
	position:fixed;
	top:0px;
	left:0px;
	z-index:10000;
	width: 100%;
	height: 100%;
	color:#fff;
	border:20px #fff solid;
	background-color:rgba(0, 0, 0, 1);
	padding: 0 0 0 0;
	margin: 0 0 0 0;
}

.wbn-ovrly-hamburger {
	position:fixed;
	top:30px;
	right:30px;
	color:#000;
	display:block;
	z-index:9999;
	cursor:pointer;
	
}

.wbn-ovrly-hamburger img {
	width:40px;
	height:auto;
	-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease;
-o-transition: all 0.3s ease;
-ms-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
	
	.wbn-ovrly-hamburger img:hover {
	width:45px;
	height:auto;
}
	
	.wbn-ovrly-closeButton {
	position:fixed;
	top:50px;
	right:50px;
	color:#000;
	display:block;
	cursor:pointer;
}

.wbn-ovrly-closeButton img {
	width:40px;
	height:auto;		
}
	
@media (min-width: 992px) {
	
	.wbn-ovrly-hamburger {
		display:none;
	}
	
	.wbn-ovrly-menu {
		display:none;
	}
	
}
</style>