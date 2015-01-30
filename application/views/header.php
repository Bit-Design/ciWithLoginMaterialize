<ul id="nav-mobile" class="side-nav fixed">
<li id="logo"></li>
        <li class="bold"><a href="about.html">About</a></li>
        <li class="bold"><a href="getting-started.html">Getting Started</a></li>
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header">CSS</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="color.html">Color</a></li>
                  <li><a href="grid.html">Grid</a></li>
                  <li><a href="helpers.html">Helpers</a></li>
                  <li><a href="media-css.html">Media</a></li>
                  <li><a href="sass.html">Sass</a></li>
                  <li><a href="shadow.html">Shadow</a></li>
                  <li><a href="table.html">Table</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header">Components</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="badges.html">Badges</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="cards.html">Cards</a></li>
                  <li><a href="collections.html">Collections</a></li>
                  <li><a href="footer.html">Footer</a></li>
                  <li><a href="forms.html">Forms</a></li>
                  <li><a href="icons.html">Icons</a></li>
                  <li><a href="navbar.html">Navbar</a></li>
                  <li><a href="preloader.html">Preloader</a></li>
                </ul>
              </div>
            </li>
            <li class="bold active"><a class="collapsible-header active">JavaScript</a>
              <div class="collapsible-body" style="display: block;">
                <ul>
                  <li><a href="collapsible.html">Collapsible</a></li>
                  <li><a href="dialogs.html">Dialogs</a></li>
                  <li><a href="dropdown.html">Dropdown</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="modals.html">Modals</a></li>
                  <li><a href="parallax.html">Parallax</a></li>
                  <li><a href="pushpin.html">Pushpin</a></li>
                  <li><a href="scrollspy.html">Scrollspy</a></li>
                  <li class="active"><a href="side-nav.html">SideNav</a></li>
                  <li><a href="tabs.html">Tabs</a></li>
                  <li><a href="waves.html">Waves</a></li>
                </ul>
              </div>
            </li>
          </ul>

        <li class="bold"><a href="http://materializecss.com/mobile.html">Mobile</a></li>
        <li class="bold"><a href="showcase.html">Showcase</a></li>
      </ul>


    <div id="wrapcontainer" class="container"> <!--remove container div if full width is needed -->
<header class="clearboth blue lighten-2">
<div class="row nomarginpadding">
      <a class="button-collapse hide-on-large-only white-text floatleft" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
      <h1 class="white-text center-align nomargin">Welkom</h1>
</div>
</header>

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
