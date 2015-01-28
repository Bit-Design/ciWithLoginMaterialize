<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <div class="col s12">
      <a href="#!" class="brand-logo">Logo</a>
      <ul class="right side-nav">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="components.html">Components</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
      </ul>
    </div>
  </div>
</nav>

        
    	<?php
    	if ($this->session->userdata('user') != null) {
    		?>
    		<div>
    			<div>
    				<?php echo $this->session->userdata('user')->name ?>
    							<?php
    							echo form_open('login/afmelden');
    							echo form_submit('mysubmit', 'Afmelden', 'class="center block"');
    							echo form_close();
    							?>		
    			</div>		
    		</div>
    		<?php
    	}
    ?>
