<?php
$menu_actual = 'jobs_menu';
include 'header.php'
?>

<div id="jobs" class="sixteen columns">
  <h2>We are hiring!</h2>
  <p>We are looking for enthusiastic people to work with us in the following areas:</p>
  <ul>
    <li>Testing High Voltage Apparatus up to 500 kV</li>
    <li>Testing of protection relays, scada and substation integration systems.</li>
    <li>Gas Insulated Substations expertise</li>
    <li>Electrical Studies software technical expertise</li>
  </ul>

  <label for="resume">Submit your resume:</label>
  <input type="file" id="resume" name="resume" />
  <input type="button" value="Send" />
</div>

<?php include 'footer.php' ?>