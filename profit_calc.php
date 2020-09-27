<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Profit Calc</title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/calculator.css">
 
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="myCalculator">
             <center>
                   <input type="radio" name="calc_curreny" id="calc_curreny" value="0" checked> USD
                   <input type="radio" name="calc_curreny" id="calc_curreny" value='1'> PKR
             </center>
               <br> <br>
               <label for="in_packages">Packages* <span id="package_error" class="pull-right" style='color:#f00'></span></label>
                <select name="in_packages" id="in_packages" class='form-control'>
                    <option value="0">Select Packages</option>
                    <option value="0.065">Starter</option>
                </select>
                <br>
                <label for="calc_amount">Amount*<span id="amount_error" class="pull-right" style='color:#f00'></span></label>
                <input type="number" class="form-control" value="0" id="calc_amount" name="calc_amount" placeholder='Enter amount'><br>
                <input type="range" name="calc_amount_slider"  value="0" id="calc_amount_slider" class='calc_slider' min="0" max="100000"><br><br>
                
                <label for="calc_period">Period*<span id="period_error" class="pull-right" style='color:#f00'></span></label>
                <input type="number" class="form-control" value="0"  name="calc_period" id="calc_period" placeholder='Enter period'><br>
                <input type="range" name="calc_period_slider" value="0" id="calc_period_slider" class='calc_slider' min="0" max="100000"><br><br>
                
                <span id="calc_error" style='color:#f00'></span>
                
                <button class="btn btn-success" id="calc_action">Calculate</button><br> 
            
               <div class="result_area">
                   <div class="usd_to_pkr">
                       <label for="result">USD TO PKR:</label>
                       <input type="number" name="calc_result" id="calc_result"  class='form-control' disabled> 
                   </div>
                    <label for="result">Result:</label>
                     <input type="number" name="calc_result" id="calc_result"  class='form-control' disabled> 
                     
                     <label for="result">Investment + Profit:</label>
                     <input type="number" name="calc_profit" id="calc_profit"  class='form-control' disabled> 
               </div>
          </div>
            
        </div>
    </div>
</body>
</html>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/calculator.js"></script>