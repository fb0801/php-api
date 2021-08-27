<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock finder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>



<body>
<form class="form-inline" action="">
  <label for="stock name">Stock name:</label>
  <input type="text" class="form-control" placeholder="Enter stock symbol or name" id="stock_name">
  <label for="Region">Stock Region:</label>
  <input type="text" class="form-control" placeholder="Enter stock symbol or name" id="stock_name">


  <div class="form-group">
        <label id='lbl_5' for="sel1">Position (select one):</label>
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"data-toggle="tooltip" title="Select the stock Region" ></i></span>
        <select class="form-control" id="sel1" name='acc_type'>
          <option value='content creator'>Content creator</option>
          <option value ='admin'>Admin</option>
          <option value='Moderator'>Moderator</option>
          <option  value='Broker'>Broker</option>

        </select>
        <br>


      </div></div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
displayStock();
?>

</body>
</html>
