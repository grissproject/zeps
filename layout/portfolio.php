<?php
$menu_actual = 'portfolio_menu';
include 'header.php'
?>

<script type="text/javascript">
  function show_image(id) {
    TINY.box.show({ image: id, fixed: false, width: 960 });
  }

  $(window).load(function () {
    load_project('inesco_ge');
  });

  function load_project(id) {
    $("#project-content").hide();
    $.ajax({
            url : 'projects/' + id + '.php',
            success: function(datos){
                $("#project-content").html(datos);
                $("#project-content").fadeIn();
            }
        });
    // Update menu
    $('.project-menu').removeClass('active');
    $('#project-menu-' + id).addClass('active');
  }
</script>

<div class="four columns">
  <div id="projects-list">
    <ul>
      <li id="project-menu-inesco_ge" class="project-menu" onclick="load_project('inesco_ge')">INESCO/GE</li>
      <li id="project-menu-apr_energy" class="project-menu" onclick="load_project('apr_energy')">APR Energy</li>
      <li id="project-menu-drummond" class="project-menu" onclick="load_project('drummond')">Drummond</li>
      <li id="project-menu-nextera" class="project-menu" onclick="load_project('nextera')">NEXTERA</li>
      <li id="project-menu-waller_marine" class="project-menu" onclick="load_project('waller_marine')">Waller Marine</li>
    </ul>
  </div>
</div>

<div class="twelve columns">
  <div id="project-content"></div>
</div>

<div class="clear"></div>

<?php include 'footer.php' ?>