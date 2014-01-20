<?php
$menu_actual = 'staff_menu';
include 'header.php';
?>

<script type="text/javascript">
  function show_profile(id) {
    TINY.box.show({ url: 'staff/' + id + '.php', fixed: false, width: 800 });
  }
</script>

<div class="one-third column">
  <div class="staff-profile">
    <img src="images/staff/ivan_zalles.jpg" />
      <h2 onclick="show_profile('ivan_zalles');">Ivan Zalles</h2>
      <p>
        Have more than 15 years of experience in Management position and 25 years in Electrical design, installation, commissioning
        and startup of 13.8 to 500 kV major substations for fast track projects not only in United States but worldwide ...
      </p>
      <span class="link" onclick="show_profile('ivan_zalles');">Read more...</span>
      <div class="clear"></div>
  </div>
</div>

<!--
<div class="one-third column">
  <div class="staff-profile">
    <img src="images/staff/marco_navia.jpg" />
      <h2 onclick="show_profile('ivan_zalles');">Marco Navia</h2>
      <p>
        Have more than 15 years of experience in Management position and 25 years in Electrical design, installation, commissioning
        and startup of 13.8 to 500 kV major substations for fast track projects not only in United States but worldwide ...
      </p>
      <span class="link" onclick="show_profile('ivan_zalles');">Read more...</span>
      <div class="clear"></div>
    </div>
</div>

<div class="one-third column">
  <div class="staff-profile">
    <img src="images/staff/roxana_orellana.jpg" />
    <h2 onclick="show_profile('ivan_zalles');">Roxana Orellana</h2>
    <p>
      Have more than 15 years of experience in Management position and 25 years in Electrical design, installation, commissioning
      and startup of 13.8 to 500 kV major substations for fast track projects not only in United States but worldwide ...
    </p>
    <div class="link" onclick="show_profile('ivan_zalles');">Read more...</div>
    <div class="clear"></div>
  </div>
</div>
-->

<div class="clear"></div>

<?php include 'footer.php' ?>