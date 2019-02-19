<br />

<?php 
if (isset($this->session->userdata['logged_in'])) {
  redirect('/Home/','refresh');
}
?>

<div class="w3-container">
  <?php
    if (isset($logout_message)) {
      echo "<div class='message'>";
      echo $logout_message;
      echo "</div>";
    }
  ?>
  <?php
    if (isset($message_display)) {
      echo "<div class='message'>";
      echo $message_display;
      echo "</div>";
    }
  ?>
  <div id="main">
<div id="login" class="w3-container w3-center">
<h2>Sign In</h2>
<hr/>
<?php echo form_open('Login/user_login_process'); ?>
<?php
  echo "<div class='error_msg'>";
  if (isset($error_message)) {
    echo $error_message;
  }
  echo validation_errors();
  echo "</div>";
?>
  <label>Userame </label><br>
  <input type="text" name="username" id="username" placeholder="enter username"/><br /><br />
  <label>Password </label><br>
  <input type="password" name="password" id="password" placeholder="enter password"/><br/><br />
  <input type="submit" class="w3-btn w3-blue"  value=" Sign In " name="submit"/>
  <br />
  <!--a href="< ? php echo base_url() ?>index.php/Registration/">To SignUp Click Here</a-->
  <?php echo form_close(); ?>
</div>
</div>
</div>