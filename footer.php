<footer>FOOTER</footer>
</body>
</html>

<script type="text/javascript">
(function($){
$(window).on("load",function(){
  $("#mob_nav").mCustomScrollbar({
    axis:"x",
    theme:"dark-3",
    advanced:{
      autoExpandHorizontalScroll:2
    },
    callbacks:{
      onCreate:function(){
        $(this).find("p").css("width",$(this).width());
      },
      onBeforeUpdate:function(){
        $(this).find("p").css("width",$(this).width());
      }
    }
  });
});
})(jQuery);
</script>
