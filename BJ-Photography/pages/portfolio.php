
<?php

include('../partials/header.php');

?>
<!--Style link-->
<link rel="stylesheet" href="../css/portfolio.css"/>


<!-- Header -->
<Div class="header">
    <h2>Our Portfolio</h2>
    <h3>The Photo Grid</h3>
    <p>Click on the buttons to change the grid view.</p>
    <button class="btn" onclick="one()">1</button>
    <button class="btn active" onclick="two()">2</button>
</div>

<!-- Photo Grid -->
<div class="container_photo">
    <div class="row"> 
        <div class="column">
            <img src="../pictures/studio.jpg" style="width:200px; height:200px;">
            <img src="../pictures/wedding.jpg" style="width:200px; height:200px;">
            <img src="../pictures/party.jpg" style="width:200px; height:200px;">
        </div>
        <div class="column">
            <img src="../pictures/photoshoot.jpg" style="width:200px; height:200px;">
            <img src="../pictures/set.jpg" style="width:200px; height:200px;">
            <img src="../pictures/soccer.jpg" style="width:200px; height:200px;">
        </div>  
        <div class="column">
            <img src="../pictures/view.jpg" style="width:200px; height:200px;">
            <img src="../pictures/baby.jpg" style="width:200px; height:200px;">
            <img src="../pictures/cloud.jpg" style="width:200px; height:200px;">
        </div>
        <div class="column">
            <img src="../pictures/contact.jpg" style="width:200px; height:200px;">
            <img src="../pictures/events.jpg" style="width:200px; height:200px;">
            <img src="../pictures/face.jpg" style="width:200px; height:200px;">
        </div>
    </div>
</div>


     
 <!--Load Javascript-->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="../script/photo.js"></script>

<?php

include('../partials/footer.php');

?>