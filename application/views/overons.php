  <main>
    <div class="section row">
      <div class="col s12">
        <?php 
        foreach($teksten as $tekst){
          if ($this->session->userdata('user') != null && $this->session->userdata('user')->type == 'admin') {
            //modal code==============================
            //unique id's and names needed for forms, hence add id's everywhere behind the name
            echo "<div id='modal" . $tekst->id . "' class='modal'>";
            echo "<h4>Paragraaf aanpassen</h4>";
            echo form_open('admin/updateTekst/'. $tekst->id . "/" . $_ci_view);
            echo "<textarea name='tekst" . $tekst->id . "'>" . $tekst->tekst . "</textarea>";
            echo "<input type='checkbox' ";
            if($tekst->vet == 1){echo "checked";}
            echo " id='vet" . $tekst->id . "' name='vet" . $tekst->id . "' value='1'/>";
            echo "<label class='first' for='vet" . $tekst->id . "'>Vetgedrukt</label>";
            echo "<input type='checkbox' ";
            if($tekst->groter == 1){echo "checked";}
            echo " id='groter" . $tekst->id . "' name='groter" . $tekst->id . "' value='1'/>";
            echo "<label for='groter" . $tekst->id . "'>Grotere tekst</label>";
            echo "<div class='action-bar center-align'>";
            echo "<button class='btn waves-effect waves-light lighten-3' type='submit' name='action'>opslaan<i class='mdi-content-save right'></i></button><br>";
            echo form_close();
            echo anchor('admin/delete/' . $tekst->id . "/" . $_ci_view, 'verwijderen<i class="mdi-action-delete right"></i>', "class='btn waves-effect waves-light red lighten-2' ") . "<br>";
            echo "<button class='btn waves-effect waves-light grey modal-action modal-close' type='submit' name='action'>annuleren<i class='mdi-content-undo right'></i></button><br>";
            echo "</div>";
            echo "</div>";
            //end of modal code======================
            if($tekst->volgorde <= 2){?>
            <div class="card-panel grey lighten-5 z-depth-1">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="<?php echo base_url() . APPPATH ?>views/images/person.jpg?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                  <?php
                }
                echo "<p data-delay='50' data-position='top' data-tooltip='Klik op de paragraaf om aan te passen of te verwijderen' href='#modal" . $tekst->id ."' class='modal-trigger tooltipped ";
              }else{
                if($tekst->volgorde <= 2){?>
                <div class="card-panel grey lighten-5 z-depth-1">
                  <div class="row valign-wrapper">
                    <div class="col s2">
                      <img src="<?php echo base_url() . APPPATH ?>views/images/person.jpg?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s10">
                      <?php
                    }
                    echo "<p class='";
                  }
                  if($tekst->vet == 1){echo "bold ";}
                  if($tekst->groter == 1){echo "flow-text ";}
                  echo "' >" . $tekst->tekst . "</p>";
              //sluiten 3 extra divs als het personen zijn
                  if($tekst->volgorde <= 2){?>
                </div>
              </div>
            </div>
            <?php
          }
        }
        if ($this->session->userdata('user') != null && $this->session->userdata('user')->type == 'admin') {
        //na alle teksten een toevoeg knop met bijbehorend modal erbij
            //modal code==============================
          echo "<div id='modalplus' class='modal'>";
          echo "<h4>Paragraaf toevoegen</h4>";
          echo form_open('admin/insertTekst/' . $_ci_view);
          echo "<textarea name='tekstplus'></textarea>";
          echo "<input type='checkbox' id='vetplus' name='vetplus' value='1'/>";
          echo "<label class='first' for='vetplus'>Vetgedrukt</label>";
          echo "<input type='checkbox' id='groterplus' name='groterplus' value='1'/>";
          echo "<label for='groterplus'>Grotere tekst</label>";
          echo "<div class='action-bar center-align'>";
          echo "<button class='btn waves-effect waves-light lighten-3' type='submit' name='action'>opslaan<i class='mdi-content-save right'></i></button><br>";
          echo form_close();
          echo "<button class='btn waves-effect waves-light grey modal-action modal-close' type='submit' name='action'>annuleren<i class='mdi-content-undo right'></i></button><br>";
          echo "</div>";
          echo "</div>";
            //end of modal code======================
          echo "<a class='btn tooltipped bigplus modal-trigger' href='#modalplus' data-position='bottom' data-delay='50' data-tooltip='Nieuwe paragraaf'>+</a>";
        }
        ?>
      </div>
    </div>
  </main>