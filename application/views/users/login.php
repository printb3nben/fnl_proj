<?php echo form_open('users/login'); ?>

	<div class="row">
		<div class="col-md-4">
			<h1 class="text-center" ><?php echo $title;  ?></h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>


		</div>
	</div>

<?php echo form_close(); ?>

<div class="reg-head">
<?php if(!$this->session->userdata('logged_in')) : ?>
<button  <li><a href="<?php echo base_url(); ?>users/register">Register</a></li></button>
			  <?php endif; ?>
			</div>
<style>
.reg-head button {
  float: center;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}


</style>