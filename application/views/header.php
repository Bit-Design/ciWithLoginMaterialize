  
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav class="blue lighten-2">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">Logo</a>
    <ul id="nav-mobile" class="right side-nav">
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
      <li><a href="sass.html">Sass</a></li>
      <li><a href="components.html">Components</a></li>
      <li><a href="javascript.html">JavaScript</a></li>
  </ul>

  <!-- Include this line below -->
  <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
  <!-- End -->

</div>
</nav>


<?php
if ($this->session->userdata('user') != null) {
  ?>
  <div class="row red lighten-3">
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
