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
          if ($this->session->userdata('user') != null && $this->session->userdata('user')->type == 'admin') {
            //modal code==============================
            echo "<div id='modal" . $tekst->id ."' class='modal'>";
            echo "<h4>Paragraaf aanpassen</h4>";
            echo "<textarea>" . $tekst->tekst . "</textarea>";
            echo "<div class='action-bar center-align'>";
            echo "<a href='#' class='waves-effect waves-green btn-flat modal-action'><i class='fa fa-save fa-4x'></i> opslaan</a><br>";
            echo "<a href='#' class='waves-effect waves-red btn-flat modal-action'><i class='fa fa-trash fa-4x'></i>tekst verwijderen</a>";
            echo "<a href='#' class='waves-effect waves-gray btn-flat modal-action modal-close'><i class='fa fa-undo fa-4x'></i> annuleren</a>";
            echo "</div>";
            echo "</div>";
            //end of modal code======================
            echo "<p data-delay='50' data-position='top' data-tooltip='Klik op de paragraaf om aan te passen of te verwijderen' href='#modal" . $tekst->id ."' class='modal-trigger tooltipped ";
          }else{
            echo "<p class='";
          }
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