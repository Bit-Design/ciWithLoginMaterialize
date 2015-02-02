  <main>
    <div class="row">
      <div class="col s12 m8">
        <?php 
        foreach($teksten as $tekst){
          echo "<p class='";
          if($tekst->vet == 1){echo "bold ";}
          if($tekst->groter == 1){echo "flow-text ";}
          echo "' >" . $tekst->tekst . "</p>";
        }
        ?>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ut nesciunt quo delectus officia totam aliquid dolorem rerum, qui tenetur?</p>
        <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis similique odit placeat odio officiis blanditiis doloribus unde accusamus non iure esse accusantium sed est impedit et, dicta a velit vel dignissimos. Voluptatum harum saepe id ex est, inventore ut fugit!</p>
      </div>
      <div class="col s12 m4">
        <table class="striped bordered">
          <tr>
            <td>Maandag</td>
            <td></td>
          </tr>
          <tr>
            <td>Dinsdag</td>
            <td></td>
          </tr>
          <tr>
            <td>Woensdag</td>
            <td></td>
          </tr>
          <tr>
            <td>Donderdag</td>
            <td></td>
          </tr>
          <tr>
            <td>Vrijdag</td>
            <td></td>
          </tr>
          <tr>
            <td>Zaterdag</td>
            <td></td>
          </tr>
          <tr>
            <td>Zondag</td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
  </main>