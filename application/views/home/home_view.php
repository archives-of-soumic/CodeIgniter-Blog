<?php

if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    // $email = ($this->session->userdata['logged_in']['email']);
} else {
    //header("location: login");
}
?>
<div class="w3-container">
    <?php
        $query = $this->Home_model-> getAllBlogs();
        foreach ($query->result() as $row)
        {
            ?>
            <div class="w3-panel w3-pale-green">
            <h3><?php echo anchor('Page/?blog_id='.$row->blog_id, $row->title, 'title="$row->title"');  ?></h3>
            <p><?php echo substr($row->content,0,10); echo "... ..."; /*echo $row->title;*/ ?></p>
          </div>
          <?php 
        }
    ?>
    
</div>