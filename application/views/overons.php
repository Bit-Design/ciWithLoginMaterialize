  <main>
    <div class="section row">
      <div class="col s12">
        <?php 
        foreach($teksten as $tekst){
          if($tekst->volgorde <= 2){
            ?>
            <div class="card-panel grey lighten-5 z-depth-1">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="<?php echo base_url() . APPPATH ?>views/images/person.jpg?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                  <?php
                  echo "<span class='";
                  if($tekst->vet == 1){echo "bold ";}
                  if($tekst->groter == 1){echo "flow-text ";}
                  echo "' >" . $tekst->tekst . "</span>";
                  ?>
                </div>
              </div>
            </div>
            <?php
          }
          else{
            echo "<p class='";
            if($tekst->vet == 1){echo "bold ";}
            if($tekst->groter == 1){echo "flow-text ";}
            echo "' >" . $tekst->tekst . "</p>";
          }
        }
        ?>
      </div>
    </div>
  </main>