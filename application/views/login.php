<div class="row">
	<div class="col s12 m6 l4 center">
		<h1>Aanmelden</h1>
		<?php
		if($this->session->userdata('melding') != null){
			echo '<p class="red">' . $this->session->userdata('melding') . '</p>';	
			$this->session->unset_userdata('melding');			
		}
		?>
		<?php echo form_open('login/aanmelden');?>
		<div class="input-field">
			<?php			
			echo form_label('Email', 'email');
			echo form_input('email', "" ,'id="email"');
			?>
		</div>
		<div class="input-field">
			<?php
			echo form_label('Wachtwoord', 'password');
			echo form_password('password', "" ,'id="password"');
			?>				
		</div>
		<?php
		echo form_submit('mysubmit', 'Aanmelden', 'class="blue lighten-2 section borderradius"');
		echo form_close();
		?>
	</div>
</div>