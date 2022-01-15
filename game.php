<script>
  //variables needed
  var bl_poulia=0;//value used to generate black
  var wh_poulia=0;//value used to generate white

  //array that holds the white poulia
  var wpoulia = ["./Images/white_piece.png", "./Images/white_piece.png", "./Images/white_piece.png", 
  "./Images/white_piece.png", "./Images/white_piece.png", "./Images/white_piece.png", "./Images/white_piece.png",
  "./Images/white_piece.png", "./Images/white_piece.png", "./Images/white_piece.png", "./Images/white_piece.png",
  "./Images/white_piece.png", "./Images/white_piece.png", "./Images/white_piece.png", "./Images/white_piece.png"];
   //array that holds the black poulia
   var bpoulia = ["./Images/black_piece.png", "./Images/black_piece.png", "./Images/black_piece.png", 
  "./Images/black_piece.png", "./Images/black_piece.png", "./Images/black_piece.png", "./Images/black_piece.png", 
  "./Images/black_piece.png", "./Images/black_piece.png", "./Images/black_piece.png", "./Images/black_piece.png", 
  "./Images/black_piece.png", "./Images/black_piece.png", "./Images/black_piece.png", "./Images/black_piece.png"]
  


  $(document).ready(function(){
    $("#move").attr("disabled", "disabled");
    document.getElementById('move').disabled = true;
    
  });



function move() {


}

function gamestart() {
 

}

</script>

<?php
    if( $stmt = $mysqli->prepare($sql) ) {
      $stmt->bind_param("s", $_SESSION['username']);
      $stmt->execute();
      $result = $stmt->get_result();
      $row = $result->fetch_assoc();
   }

 ?>

<!-- User Interface -->

<!--Board Image -->
<div class="d-flex justify-content-center" >
  <img src="./Images/nmm_board.png" class="img-fluid" width="500"> 
  

</div>

<br> <br>

<div class="d-flex justify-content-center"  >
  <div class="btn-group  btn-block col-md-4 ">
    <button onclick="move()" type="button" id="check" class="btn btn-danger">Μετακίνησε</button>
    <button onclick="gamestart()" type="button" class="btn btn-danger col-xs-4" id="bet_button">Εναρξη</button>
  
  
  </div>
</div>

<br> <br>
<!-- Exit Button -->
<div class="d-flex justify-content-right ">
  <div class="btn-group  btn-block col-md-4" >
    <a href="index.php?ctd=show_main" type="button" id="exit" class="btn btn-danger btn-block col-md-1" >Exit</a>
  </div>
</div>
