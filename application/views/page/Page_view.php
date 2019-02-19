<div class="w3-container">
<?php 
    $blog_pk =  $_GET['blog_id'];
    $result_array = $this->Page_model->getPagContents($blog_pk);
    echo "<h3>".$result_array['title']."</h3>";
    echo "<hr>";
    echo "<h6>".$result_array['author']."</h6>";
    //echo "<br>";
    echo "<div><p>".$result_array['content']."</p></div><hr>";
    echo "<div>".$result_array['category']."</div><hr>";
?>
</div>