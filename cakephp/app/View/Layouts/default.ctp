<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
    $this->Html->css("style.css", null, array("inline"=>false)); 
    $this->Html->script("jquery-latest.js", null, array("inline"=>false));
    $this->Html->script("jquery.bxSlider.min.js", null, array("inline"=>false));
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
    

		echo $this->fetch('script');
	?>
</head>
<body>
		<div id="header">
  <div class="midContent">
    <div class="floatLeft" id="logo"><a href="#"><img src="images/logo.png" alt="online gym" border="0" /></a></div>
    <div id="headerRight">
      <div>
        <div class="floatRight" id="topRightlinks"><a href="#">Contact us</a> | <a href="#">Newsletter</a> |  <a href="#">Links</a></div>
        <div class="floatLeft" id="topMenu">
          <ul>
            <li><a href="#" class="active thome">Home</a></li><li><a href="#" class="tmodels"><span>vlip</span>Models</a></li><li><a href="#" class="tjobs"><span>vlip</span>Jobs</a></li><li><a href="#" class="tlunge"><span>vlip</span>Lounge</a></li>
          </ul>
          </div><div class="clr"></div>
      </div>
      <div class="floatRight">
        <div id="vlipBtn"><a href="#">Create vlipCard</a></div>
        <div id="loginBtn"><a href="#">Login</a></div>
      </div><div class="floatRight">
        <div id="vlipBtn"><a href="#"  class="loggedin">Jane Doe Smith</a>
          <ul id="vliplist">
            <li class="myvlip"><a href="#">My vlipCard</a></li>
			<li class="mysetting"><a href="#">My Settings</a></li>
			<li class="myinbox"><a href="#">My Inbox</a></li>
          </ul>
        </div>
        <div id="loginBtn"><a href="#">Login</a></div>
      </div>
    </div>
    <div class="clr"></div>
  </div></div>
<div id="navigation">
  <div class="midContent">
    <ul class="floatLeft" id="mainmenu">
      <li><a href="home.html" class="active">Welcome</a></li>
      <li><a href="about.html">    how to start</a></li>
    </ul>
    <div class="floatRight">
      <form id="searchForm" name="form1" method="post" action="" class="searchForm">
        <input name="Input" type="text" class="form-text" value="Who are you looking for?"/>
        <input name="submit" type="submit" class="form-submit" value="Search"/>
        <div class="clr"></div>
      </form>
    </div>  <div class="clr"></div>
  </div>
  <div class="clr"></div>
</div>
<div class="clr"></div>


			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

</body>
</html>
