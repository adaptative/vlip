<div id="mainContent" class="midContent">
  <div id="bannerArea">
    <div id="prev" class="navi"> <a href="#" class="prev"></a></div>
	<div id="next" class="navi"><a href="#" class="next"></a></div>    
<div id="slider1">
  <div><img src="images/banner.jpg" alt="banner" width="921" height="382" /></div>
  <div><img src="images/banner2.jpg" alt="banner" width="921" height="382" /></div>
  <div><img src="images/banner3.jpg" alt="banner" width="921" height="382" /></div>
  <div><img src="images/banner4.jpg" alt="banner" width="921" height="382" /></div>
</div>    
    
    <div class="clr"></div>
  </div>
  <div id="featured">
    <div class="floatLeft"><img src="images/iphone-img.png" alt="iphone" width="143" height="123" /></div>
    <div class="floatLeft mid">
      <h2>Get our mobile App !    </h2>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
    </div>
    <div class="floatRight" id="storeblock">
      <h2>Click or scan to download now: </h2>
      <div>
        <div class="floatLeft">
          <div class="strblock">
            <div class="floatLeft imgicon">
              <img src="images/apple.png" width="22" height="34" />          </div>
            <h4>Availbale on the </h4>
            <h3>            APP store </h3>
          </div>
          <div class="strblock">
            <div class="floatLeft imgicon"> <img src="images/android.png" width="33" height="36" /> </div>
            <h4>Availbale on the </h4>
            <h3> APP store </h3>
          </div>
        </div>
        <div class="floatLeft qmark"><img src="images/mark.png" alt="iphone" width="84" height="85" /></div>
        <div class="clr"></div>
      </div>
    </div>
    <div class="clr"></div>
  </div>
  <div id="featuredMember"><h2>Featured Members</h2>
    <div id="featureMid">
      <div id="prev" class="navi"> <a href="#" class="prev2"></a></div>
      <div id="next" class="navi"><a href="#" class="next2"></a></div>
      
 <ul id="slider2">
  <li>
        <div align="justify" class="block"></div>
        <div align="justify" class="block"></div>
       <div align="justify" class="block"></div>
  </li>
   <li>
        <div align="justify" class="block"></div>
        <div align="justify" class="block"></div>
       <div align="justify" class="block"></div>
  </li>
    <li>
        <div align="justify" class="block"></div>
        <div align="justify" class="block"></div>
       <div align="justify" class="block"></div>
  </li>
    <li>
        <div align="justify" class="block"></div>
        <div align="justify" class="block"></div>
       <div align="justify" class="block"></div>
  </li>
</ul>    
      

 <div class="clr"></div>
    </div>
  </div>
    <div class="clr"></div>
</div>
<div id="footer" align="center">

  <div class="clr"></div>
  <a href="#">F.A.Q.</a>     | <a href="#">Legal Notice</a>     | <a href="#">Terms &amp; Conditions</a>     | <a href="#">Privacy Policy</a> |   <a href="#">RSS</a><br />
  All Copyrights  VlipGo UG haftungsbeschr&auml;nkt</div>
  <script type="text/javascript">
$(function(){
$('#next , #prev').fadeTo(200, 0.4);
//code for first slider
  var slider = $('#bannerArea #slider1').bxSlider({
    controls: false
  });

  $('a.prev').click(function(){
    slider.goToPreviousSlide();
    return false;
  });

  $('a.next').click(function(){
    slider.goToNextSlide();
    return false;
  });
  $('#next , #prev').mouseover(function(){
        $(this).fadeTo(200, 0.9);
  }).mouseout(function(){
     $(this).fadeTo(200, 0.4);
  });
 
 //code for second slider
   var slider2 = $('#featureMid #slider2').bxSlider({
    controls: false
  });

  $('a.prev2').click(function(){
    slider2.goToPreviousSlide();
    return false;
  });

  $('a.next2').click(function(){
    slider2.goToNextSlide();
    return false;
  });
 
  $('#searchForm .form-text').focus(function()
   {
	if($(this).val()=='Who are you looking for?'){
     $(this).val("");
   }
  }).blur(function(){
	if($(this).val()==''){
     $(this).val("Who are you looking for?");
   }
			});
});	
  </script>
