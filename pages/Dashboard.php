<?php
require '../layout/header.php';
?>
<div class="d-flex justify-content-center form_container">
    <form>
         <h4> User Details</h4>
            <div class="input-group-append">
            </div>
            <H5>Firstname:</H5>


            <div class="input-group-append">
            </div>
            <h5>Lastname:</h5>




            <div class="input-group-append">
            </div>
            <h5>Username:</h5>



            <div class="input-group-append">
            </div>
            <h5>E-mail:</h5>



            <div class="input-group-append">
            </div>
            <h5>Calories Burned:</h5>




             <h4>User Inputs<h4>

            <div class="input-group-append">
            </div>
            <h5> Add Age :<input type="text" name="" class="form-control input_user" value="" placeholder="Age"> </h5>



            <div class="input-group-append">
            </div>
            <h5> Add Height :<input type="text" name="" class="form-control input_user" value="" placeholder="Height"> </h5>



        <div class="input-group mb-3">
            <div class="input-group-append">
            </div>
            <h5> Add Weight :<input type="text" name="" class="form-control input_user" value="" placeholder="Weight"> </h5>
        </div>
        <button type="button" name="button" class="btn login_btn">Add</button>




    </form>
</div>

<img id="myImg" src="../css/images/graph.png" alt="Snow" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span>(x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
