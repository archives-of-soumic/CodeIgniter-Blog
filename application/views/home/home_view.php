<?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    // $email = ($this->session->userdata['logged_in']['email']);
} else {
    //header("location: login");
}
?>
<div class="w3-container">
    home
    <br>
    <b id="logout"><a href="<?php echo base_url() ?>index.php/Login/logout">Sign Out</a></b>
        
</div>