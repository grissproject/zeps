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
    create_menu_effect();
  });

  function load_project(id) {
    $("#project-content").hide();
    $.ajax({
            url : 'portfolio/' + id + '.php',
            success: function(datos){
                $("#loading-project").hide();
                $("#project-content").html(datos);
                $("#project-content").fadeIn();
            }
        });

    // Update menu
    customer = id.split('__')[0];
    $('#' + customer).addClass('active');
  }

  function create_menu_effect() {
    $('.sublist a').each(function() {
      $(this).mouseover(function() {
        customer = $(this)[0].id.split('__');
        $('#' + customer).addClass('mouseover');
        // If it is an active menu then change the class name so it does not override the styles
        if ($('#' + customer).hasClass('active')) {
          $('#' + customer).removeClass('active');
          $('#' + customer).addClass('active_backup');
        }
      });
      $(this).mouseout(function() {
        customer = $(this)[0].id.split('__');
        $('#' + customer).removeClass('mouseover');
        // Restore the active class if it was active
        if ($('#' + customer).hasClass('active_backup')) {
          $('#' + customer).removeClass('active_backup');
          $('#' + customer).addClass('active');
        }
      });
    });
  }
</script>

<div class="four columns">
  <div id="projects-list">
    <div class="title">Customer:</div>
    <ul>
      <li>
        <a href="portfolio.php?project=apr_energy" id="apr_energy">APR Energy</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=apr_energy__temporary_power_rentals" id="apr_energy__temporary_power_rentals">Temporary Power Rentals</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=control_infotech" id="control_infotech">Control Infotech</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=control_infotech__tyasa_project" id="control_infotech__tyasa_project">TYASA Project</a></li>
          <li><a href="portfolio.php?project=control_infotech__metro_riel_system" id="control_infotech__metro_riel_system">Metro Riel System</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=crompton_greaves" id="crompton_greaves">Crompton Greaves</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=crompton_greaves__230_kv_substation" id="crompton_greaves__230_kv_substation">230 kV Substation</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=drummond" id="drummond">Drummond</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=drummond__autotransformer_bank" id="drummond__autotransformer_bank">500/110 kV, 300 MVA Autotransformer Bank</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=equisales_associates" id="equisales_associates">Equisales Associates</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=equisales_associates__balance_of_plant" id="equisales_associates__balance_of_plant">Balance Of Plant</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=ende" id="ende">Empresa Nacional De Electricidad (ENDE)</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=ende__yucumo_san_borja_san_ignacio" id="ende__yucumo_san_borja_san_ignacio">Yucumo, San Borja and San Ignacio de Moxos Substations</a></li>
          <li><a href="portfolio.php?project=ende__trinidad_moxos_substations" id="ende__trinidad_moxos_substations">Trinidad and Moxos Substations</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=inelap_arteche" id="inelap_arteche">Inelap/Arteche</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=inelap_arteche__pattern_gulfwind_farm" id="inelap_arteche__pattern_gulfwind_farm">Pattern Gulfwind Farm</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=inesco" id="inesco">INESCO</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=inesco__carrasco_power_plant" id="inesco__carrasco_power_plant">Carrasco Power Plant</a></li>
          <li><a href="portfolio.php?project=inesco__kenko_power_plant" id="inesco__kenko_power_plant">Kenko Power Plant</a></li>
          <li><a href="portfolio.php?project=inesco__carrasco_substation" id="inesco__carrasco_substation">Carrasco Substation</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=nextera_energy" id="nextera_energy">NextEra Energy</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=nextera_energy__perrin_ranch_wind" id="nextera_energy__perrin_ranch_wind">Perrin Ranch Wind</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=rainmaker_of_texas" id="rainmaker_of_texas">Rainmaker of Texas</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=rainmaker_of_texas__colony_power_station" id="rainmaker_of_texas__colony_power_station">Colony Power Station</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=setar" id="setar">Servicios Electricos Tarija (SETAR)</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=setar__independent_power_producer" id="setar__independent_power_producer">Independent Power Producer</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=tecnicas_reunidas" id="tecnicas_reunidas">Tecnicas Reunidas</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=tecnicas_reunidas__campo_margarita_phase_ii" id="tecnicas_reunidas__campo_margarita_phase_ii">Campo Margarita Phase II</a></li>
          <li><a href="portfolio.php?project=tecnicas_reunidas__cpf_phase_ii_project" id="tecnicas_reunidas__cpf_phase_ii_project">CPF Phase II Project</a></li>
          <!--<li><a href="portfolio.php?project=tecnicas_reunidas__cpf_phase_ii_project_2" id="tecnicas_reunidas__cpf_phase_ii_project_2">CPF Phase II Project</a></li>-->
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=transportadora_de_electricidad" id="transportadora_de_electricidad">Transportadora de Electricidad</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=transportadora_de_electricidad__tarija_substation" id="transportadora_de_electricidad__yaguacua_substation">Tarija Substation</a></li>
          <li><a href="portfolio.php?project=transportadora_de_electricidad__tarija_substation_expansion" id="transportadora_de_electricidad__yaguacua_substation_expansion">Tarija Substation Expansion</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=urs" id="urs">URS</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=urs__station_95" id="urs__station_95">Station 95</a></li>
          <li><a href="portfolio.php?project=urs__transit_substation" id="urs__transit_substation">Transit Substation</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=waller_marine" id="waller_marine">Waller Marine</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=waller_marine__tacoa_power_barge" id="waller_marine__tacoa_power_barge">Tacoa Power Barge</a></li>
        </ul>
      </li>

      <li>
        <a href="portfolio.php?project=wanzek_construction" id="wanzek_construction">Wanzek Construction</a>
        <ul class="sublist">
          <li><a href="portfolio.php?project=wanzek_construction__santa_isabel_wind_farm" id="wanzek_construction__santa_isabel_wind_farm">Santa Isabel Wind Farm</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<div class="twelve columns">
  <div id="loading-project">
    <img src="images/ajax-loader.gif" /><br />
    Loading Project...
  </div>
  <div id="project-content"></div>
</div>

<div class="clear"></div>

<?php include 'footer.php' ?>