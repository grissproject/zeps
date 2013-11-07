<?php
$menu_actual = 'portfolio_menu';
include 'header.php';

if (isset($_GET['project'])) {
  $project_name = $_GET['project'];
}
else {
  $project_name = 'map'; 
}
?>

<script type="text/javascript">
  function show_image(id) {
    TINY.box.show({ image: id, fixed: false, width: 960 });
  }

  $(window).load(function () {
    load_project('<?php echo $project_name; ?>');
  });

  function load_project(id) {
    $("#project-content").hide();
    $.ajax({
            url : 'portfolio/' + id + '.php',
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
    <div class="title">Customer:</div>
    <ul>
      <li>
        <a href="portfolio.php?project=apr_energy">APR Energy</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=apr_energy__temporary_power_rentals">Temporary Power Rentals</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Arteche</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=arteche__pattern_gulfwind_farm">Pattern Gulfwind Farm</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Control Infotech</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=control_infotech__tyasa_project">TYASA Project</a></li>
          <li><a href="portfolio.php?project=control_infotech__metro_riel_system">Metro Riel System</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Crompton Greaves</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=crompton_greaves__230_kv_substation">230 kV Substation</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Drummond</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=drummond__autotransformer_bank">500/110 kV, 300 MVA Autotransformer Bank</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Equisales Associates</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=equisales_associates__balance_of_plant">Balance Of Plant</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Empresa Nacional De Electricidad (ENDE)</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=ende__yucumo_san_borja_san_ignacio">Yucumo, San Borja y San Ignacio de Moxos Substations</a></li>
          <li><a href="portfolio.php?project=ende__trinidad_moxos_substations">Trinidad and Moxos Substations</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Iberdrola</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=iberdrola__station_95">Station 95</a></li>
          <li><a href="portfolio.php?project=iberdrola__transit_substation">Transit Substation</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">INESCO</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=inesco__carrasco_power_plant">Carrasco Power Plant</a></li>
          <li><a href="portfolio.php?project=inesco__kenko_power_plant">Kenko Power Plant</a></li>
          <li><a href="portfolio.php?project=inesco__carrasco_substation">Carrasco Substation</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">NextEra Energy</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=nextera_energy__perrin_ranch_wind">Perrin Ranch Wind</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Rainmaker of Texas</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=rainmaker_of_texas__colony_power_station">Colony Power Station</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Servicios Electricos Tarija (SETAR)</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=setar__independent_power_producer">Independent Power Producer</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Tecnicas Reunidas</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=tecnicas_reunidas__campo_margarita_phase_ii">Campo Margarita Phase II</a></li>
          <li><a href="portfolio.php?project=tecnicas_reunidas__cpf_phase_ii_project">CPF Phase II Project</a></li>
          <li><a href="portfolio.php?project=tecnicas_reunidas__cpf_phase_ii_project_2">CPF Phase II Project</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Transportadora de Electricidad</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=transportadora_de_electricidad__yaguacua_substation">Yaguacua Substation</a></li>
          <li><a href="portfolio.php?project=transportadora_de_electricidad__yaguacua_substation_expansion">Yaguacua Substation Expansion</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Waller Marine</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=waller_marine__tacoa_power_barge">Tacoa Power Barge</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=apr_energy">Wanzek Construction</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=wanzek_construction__santa_isabel_wind_farm">Santa Isabel Wind Farm</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<div class="twelve columns">
  <div id="project-content"></div>
</div>

<div class="clear"></div>

<?php include 'footer.php' ?>