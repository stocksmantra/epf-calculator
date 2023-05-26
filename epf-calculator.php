<!DOCTYPE html>
<html>
<head>
    <title>EPF Calculator in PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        background-image: url('https://images.livemint.com/img/2019/12/10/1600x900/savingsa-ccount-kI8B--621x414@LiveMint_1575956615664.jpg');	
}
  .text{
    margin-left:14em;
    margin-top:2em;
  }
  .form-signin {
    border-radius:6px;
  max-width: 420px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #00FA9A ;
  border: 1px solid rgba(0,0,0,0.1);}
  .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 7px;
		@include box-sizing(border-box);}
     .font{
        font-size:20px;
     }
     .button{
        background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 26px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:3px ;
     }   
</style>
<body>
    <h1 class="text">EPF Calculator</h1>
    <form action="" method="post" class="form-signin">
        <label for="age" class="font">Employee Age:</label>
        <input type="number" class="form-control" name="age" id="age" required>
        <br>
        <label for="basic_pay" class="font">Basic Pay (BP):</label>
        <input type="number" class="form-control" name="basic_pay" id="basic_pay" required>
        <br>
        <label for="dearness_allowance" class="font">Dearness Allowance (DA):</label>
        <input type="number" class="form-control" name="dearness_allowance" id="dearness_allowance" required>
        <br>
        <label for="increment_percentage" class="font">Increment Percentage:</label>
        <input type="number" class="form-control" name="increment_percentage" id="increment_percentage" required>
        <br>
        <input type="submit" name="submit" class="btn btn-sm btn-primary btn-block" value="Calculate EPF">
        <?php
    if (isset($_POST['submit'])) {
        $age = $_POST['age'];
        $basic_pay = $_POST['basic_pay'];
        $dearness_allowance = $_POST['dearness_allowance'];
        $increment_percentage = $_POST['increment_percentage'];

        // EPF calculation
        $epf = ($basic_pay + $dearness_allowance) * (12 * $age * $increment_percentage / 100);

        echo "<h4>EPF Amount: $epf</h4>";
    }
    ?>
    </form>

</body>
</html>
