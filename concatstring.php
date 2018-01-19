<?php
    /**
    * Write a PHP program join letters from strings character by character.
    * e.g. given STAR + POWER = SPTOAWRER
    */

    // function to concate two string by alternate character of each string
    function concatString( $str1, $str2 ) {
        // variable to hold contactinated string
        $concat_str = "";

        // calculating max of number characters between two strings
        $counter = max( trim(strlen( $str1 )), trim(strlen( $str2 )) );

        // Building concatated string by looping through each string
        for( $i = 0; $i < $counter; $i++ ) {
            @$concat_str .= $str1[$i] . $str2[$i];
        }
        return $concat_str;
    }

    // calling concatString function and displaying result
    //echo 'STAR + POWER = ' . concatString("STAR", "POWER");
?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#arrow").click(function(){
        $.ajax({
                url: "https://api.fixer.io/latest?symbols=USD,GBP",
                contentType: "application/json",
                success: function (response){
                console.log(response.rates);
            }
        });
    });
});
</script>
<style>
  
  .all-border {
    border: 1px solid #666;
  }
  .gi-2x{font-size: 1.5em;}
  .gi-3x{font-size: 3em;}
  .gi-4x{font-size: 4em;}
  .gi-5x{font-size: 5em;}
</style>
<div class="modal-header well">
  <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
      <h1>String Concatination</h1>
  <hr>
  <form action="/action_page.php">
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="first_string">&nbsp;First String</label>
        <input type="text" class="form-control" name="first_string" placeholder="Enter First String">
        
      </div>
    </div>
    <div class="col-md-1 text-center">
      <div class="form-group">
        <label for="plus">&nbsp;</label>
        <div class="glyphicon glyphicon-plus form-control" id="plus" style="border:0px !important; background:none"></div>
      </div>  
    </div>  
    
    <div class="col-md-3">
      <div class="form-group">
        <label for="second_string">&nbsp;Second String</label>
        <input type="text" class="form-control" name="second_string" placeholder="Enter Second String">
        
      </div>  
    </div>  
    <div class="col-md-1"> 
      <div class="form-group">
        <label for="sub-btn">&nbsp;</label>
        <a name="sub-btn" id="arrow" class="btn btn-success form-control">
          <span class="glyphicon glyphicon-arrow-right gi-2x"></span>
        </a>
      </div>
      
    </div>
    <div class="col-md-4" >
      <div class="form-group">
        <label for="result">Result</label>
        <input type="text" class="form-control" name="result" id="result" disabled="true">
      </div>
    </div>
  </div>    
</form>
  <?php //echo 'STAR + POWER = ' . concatString("STAR", "POWER");?>
</div>
