<style>
#rcorners {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip{
    position: absolute;
    z-index: 1070;
    display: block;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-style: normal;
    font-weight: 400;
    line-height: 1.42857143;
    line-break: auto;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    white-space: normal;
    font-size: 12px;
    filter: alpha(opacity=0);
    opacity: 0;
    }
    .tooltip.top {
      padding: 5px 0;
    margin-top: -95px;
    margin-left: 30px;

}
.tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-top-color: white;
}
.tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
}
.tooltip-inner {
      margin-top: -18px;
      max-width: 200px;
      padding: 4px 15px;
      color: black;
      text-align: center;
      background-color: white;
      border-radius: 5px;
      font-size: 15px;
      font-weight: bold;
}
.tooltipwrap:hover .tooltip{
opacity: .9;
}
</style>
<div id="dockmaincontainer">
<div id="dock-container">
 <div id="dock">
   <ul>
      <li  id="openMenuBtn"  class="tooltipwrap">

      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Menu</div></div>
        <a href="#"  ><img src="icons/menu.svg"></a>
      </li>
      <li id="galarySlide"   class="tooltipwrap">

      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Photos</div></div>
      <!--  <span id="rcorners">Photos</span>-->
        <a href="photos.php"><img src="icons/photos.svg"></a>
      </li>
     <li  class="tooltipwrap">

      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Message</div></div>

        <a href="contact.php"><img src="icons/message.jpg"/></a>
     </li>
      <li  class="tooltipwrap">

      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Blog</div></div>
      <a href="blog.php"><img src="icons/Blog.svg"/></a>
      </li>
      <li  class="tooltipwrap">

      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Resume</div></div>
        <a href="Resume.php"><img src="icons/Resume.svg"/></a>
      </li>
       <li  class="tooltipwrap">
       <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Mail</div></div>

        <a href="#"><img src="icons/github.svg"/></a>
      </li>
        <li  class="tooltipwrap">
        <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">iTunes</div></div>

        <a href="https://musi.sh/browse" target="_blank"><img src="icons/iTunes.svg"/></a>
      </li>
      <li  class="tooltipwrap">
      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Spotify</div></div>

        <a href="#" target="_blank"><img src="icons/Spotify.svg"/></a>
      </li>
      <li  class="tooltipwrap">
      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Snapchat</div></div>

        <a href="images/snapcode.jpeg" target="_blank"><img src="icons/Snapchat.svg"></a>
      </li>
      <li  class="tooltipwrap">
      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Instagram</div></div>

         <a href="https://www.instagram.com/ram_katneni" target="_blank"><img src="icons/instagram.svg"/></a>
      </li>
      <li  class="tooltipwrap">
      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Trash</div></div>

         <a href="#"><img src="icons/trashempty.ico"/></a>
      </li>
   </ul>
 </div>
</div>
</div>

<script>
//menu-button

$(document).ready(function(){
  $("#openMenuBtn").click(function(){
	  console.log("goto menu");
	  $(".menu-button").click();
  });
});
</script>
