<footer>
  <div class="mui-container mui--text-center">
    Made by <b><a class="dark-green-tea-txt" href="http://instagram.com/fatihrizqon">Me</a></b> with ♥ for You
  </div>
  <div class="mui-divider"></div>
  <div class="container" align="center">
    <p class="dark-green-tea-txt" style="font-size:11pt;">  Instagram | Google+ | Facebook | Github | YouTube</p>
  </div>
</footer>

<script>
function myFunction() {
  var x = document.getElementById("mobileLink");
  if (x.className === "collapseAppLink") {
      x.className += " active green-tea-bg";
  } else {
      x.className = "collapseAppLink";
  }
}
</script>

<script>
(function($) {
    "use strict";
    var $navbar = $(".nav"),
        y_pos = $navbar.offset().top,
        height = $navbar.height();
    //section sticky
    $(document).scroll(function() {
        var scrollTop = $(this).scrollTop();
        if ($(window).height() > scrollTop) {
          $navbar.removeClass("sticky");
        } else {
          $navbar.addClass("sticky");
        }
    });
})(jQuery, undefined);
$(".menu").click(function(){
  $("#nav").toggleClass("open");
});
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script>
  new WOW().init();
</script>

<script>
$('.main-carousel').flickity({
  cellAlign: 'left',
  contain: true,
  autoPlay: true,
  autoPlay: 4000,
  wrapAround: true
});
</script>

</body>
</html>
