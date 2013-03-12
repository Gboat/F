<?php get_header(); ?>
<div id="content">
   <div id="map">
      <div class="browse">现在位置 ＞<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞404</div>
   </div>
   <!-- end: menu -->
   <div class="entry_box_s">
       <div class="entry">
         <div class="error">
             <h2>对不起！这个真没有哦</h2>
          </div>
         </div>
          <div id="expand_collapse">展开收缩</div>
         <div id="archives">
            <?php archives_list_SHe(); ?>
         </div>      
      <div class="clear"></div>
      <!-- end: entry -->
      <i class="lt"></i>
      <i class="rt"></i>
   </div>
   <div class="entry_sb">
      <i class="lb"></i>
      <i class="rb"></i>
   </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<script type="text/javascript">
jQuery(function($){
   $('#expand_collapse,.archives-yearmonth').css({cursor:"pointer"});
   $('#archives ul li ul.archives-monthlisting').hide();
   $('#archives ul li ul.archives-monthlisting:first').show();
   $('#archives ul li span.archives-yearmonth').click(function(){$(this).next().slideToggle('fast');return false;});
   //以下是全局的操作
   $('#expand_collapse').toggle(
   function(){
   $('#archives ul li ul.archives-monthlisting').slideDown('fast');
   },
   function(){
   $('#archives ul li ul.archives-monthlisting').slideUp('fast');
   });
   });
</script>