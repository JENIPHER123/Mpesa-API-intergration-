<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MPESA API</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body >
  <div >
        <!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>MPESA</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Lipa na Mpesa <br>(Buy Goods)</h2>
    <form action="action2.php"method="POST" id="formvalidate">
      <div class="input-group">
        <label class="palceholder" for="userName">Your Phone Number</label>
        <input class="form-control" name="phone_number" id="userName" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userName">Amount</label>
        <input class="form-control" name="amount" id="userName" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
     
      <div class="input-group">
        <label class="palceholder" for="userPassword">Account NO</label>
        <input class="form-control" name="userPassword" id="userPassword" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>

      <input type="submit"type="submit" id="login"
      style="
        cursor: pointer;
          background: #00A885;
          width: 100%;
          border: 0;
          padding: 10px 15px;
          color: #fff;
          font-size: 16px;
          font-weight: bold;
          -webkit-transition: 0.3s linear;
          transition: 0.3s linear;
      "
      value="CHECK OUT"/>
      <div class="clearfix supporter">
        <div class="pull-left remember-me">
          <input id="rememberMe" type="checkbox">
          <label for="rememberMe">Remember Me</label>
        </div>
        <a class="forgot pull-right" href="#">Get Help?</a>
      </div>
    </form>
  </div>
  <div class="signup-wrapper text-center">
    <a href="index.php">Use PayBill instead? <span class="text-primary">Click here</span></a>
  </div>
</div>

<!-- you don't need that :) 
<div class="direction">
  Type something in input and click submit to see the effect
</div>
 partial -->
  </div>

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>

</body>
</html>
