<ul id="nav-mobile" class="side-nav fixed">
  <li id="logo"></li>
  <li class="bold home"><?php echo anchor('home', 'Home'); ?></li>
  <li class="bold overons"><?php echo anchor('home/overons', 'Over ons'); ?></li>
  <ul class="collapsible collapsible-accordion">
    <li class="bold"><a class="collapsible-header">Sparen &amp; beleggen</a>
      <div class="collapsible-body" style="">
        <ul>
          <li class="sparen"><?php echo anchor('home/sparen', 'Sparen via bank'); ?></li>
          <li class="beleggen"><?php echo anchor('home/beleggen', 'Beleggen via bank'); ?></li>
          <li class="beleggingsverzekeringen"><?php echo anchor('home/beleggingsverzekeringen', 'Beleggingsverzekeringen'); ?></li>
        </ul>
      </div>
    </li>
  </ul>
  <li class="bold"><?php echo anchor('home/vermogensbeheer', 'Vermogensbeheer'); ?></li>
  <ul class="collapsible collapsible-accordion">
    <li class="bold"><a class="collapsible-header ">Verzekeringen</a>
      <div class="collapsible-body" style="">
        <ul>
          <li class="verzekeringenparticulieren"><?php echo anchor('home/verzekeringenparticulieren', 'Particulieren'); ?></li>
          <li class="verzekeringenkmos"><?php echo anchor('home/verzekeringenkmos', "KMO's"); ?></li>
        </ul>
      </div>
    </li>
  </ul>
  <li class="bold leningen"><?php echo anchor('home/leningen', 'Leningen'); ?></li>
  <li class="bold contact"><?php echo anchor('home/contact', 'Contact'); ?></li>
  <li class="bold "><?php echo anchor('home/webbanking', 'Webbanking'); ?></li>
  <li class="bold"><?php echo anchor('home/assurmifid', 'AssurMiFID'); ?></li>
</ul>


<div id="wrapcontainer" class="container"> <!--remove container div if full width is needed -->
  <header class="clearboth blue lighten-2">
    <div class="row nomarginpadding">
      <a class="button-collapse hide-on-large-only white-text floatleft" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
      <?php
      if ($this->session->userdata('user') != null && $this->session->userdata('user')->type == 'admin') {
        ?>
        <h1 class="white-text center-align">ADMIN</h1>
        <?php
      }else{
        ?>
        <h1 class="white-text center-align"><?php echo $title; ?></h1>
        <?php
      }
      ?>
    </div>
  </header>
  <?php
  if ($this->session->userdata('user') != null) {
    ?>
    <div class="row nomargin red lighten-3">
     <div class="col s6 right-align">
      <?php echo $this->session->userdata('user')->name ?>
    </div>
    <div class="col s6">
      <?php
      echo form_open('login/afmelden');
      echo form_submit('mysubmit', 'Afmelden', 'class=""');
      echo form_close();
      ?>      
    </div>
  </div>		
  <?php
}
?>
