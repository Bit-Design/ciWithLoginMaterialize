<div class="row">
    <div>header content goes here</div>
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
</div>