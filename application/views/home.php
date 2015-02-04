  <div class="slider">
    <ul class="slides">
      <li>
        <img src="<?php echo base_url() . APPPATH ?>views/images/slider1.jpg">
        <div class="black-text bold caption right-align">
          <h3>Grote tekst</h3>
          <h5 class="black-text">Kleine tekst</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url() . APPPATH ?>views/images/slider1.jpg">
        <div class="black-text caption left-align">
          <h3>Grote tekst</h3>
          <h5 class="light black-text">Kleine tekst</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url() . APPPATH ?>views/images/slider1.jpg">
        <div class="black-text caption right-align">
          <h3>Grote tekst</h3>
          <h5 class="light black-text">Kleine tekst</h5>
        </div>
      </li>
    </ul>
  </div>
  <main>
    <div class="row">
      <div class="col s12 m8">
        <h1>Kantoor Yvan Raymaekers</h1>
        <?php 
        foreach($teksten as $tekst){
          echo "<p class='";
          if($tekst->vet == 1){echo "bold ";}
          if($tekst->groter == 1){echo "flow-text ";}
          echo "' >" . $tekst->tekst . "</p>";
        }
        ?>
      </div>
      <div class="col s12 m4">
        <table class="striped bordered">
        <?php
        foreach ($openingsuren as $openingsuur) {
          echo "<tr id='" . $openingsuur->id ."'> <td>" . $openingsuur->dag . "</td>";
          echo "<td>" . $openingsuur->uur . "</td></tr>";
        }
        ?>
        </table>
      </div>        
    </div>
  </main>