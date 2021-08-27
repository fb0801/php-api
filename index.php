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
        <select class="form-control" id="sel1" name='region_type'> 
          <option value='US'>US</option>
          <option value ='BR'>BR</option>
          <option value='AU'>AU</option>
          <option  value='CA'>CA</option>
          <option  value='FR'>FR</option>
          <option  value='DE'>DE</option>
          <option  value='HK'>HK</option>
          <option  value='IN'>IN</option>
          <option  value='IT'>IT</option>
          <option  value='ES'>ES</option>
          <option  value='GB'>GB</option>
          <option  value='SG'>SG</option>




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
