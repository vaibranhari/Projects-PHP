<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

</style>
</head>
<body>
  <form action="<?php base_url() ?>PaymentController/buy" method="post">
  <h1 style="text-align: center;">DEPOSIT</h1>
<div style="text-align: center;">
<p style="display: inline-block;">Select the Country</p>
<select name="currency" id="cur">
        <option value="INR"     name="INR"        >🇮🇳&emsp;&emsp;₹&emsp;&emsp; IND</option>
        <option value="USD"     name="USD"        >🇺🇸&emsp;&emsp;$&emsp;&emsp; USD</option>
        <option value="EUR"     name="EUR"        >🇪🇺&emsp;&emsp;€&emsp;&emsp; EUR</option>
        <option value="JPY"     name="JPY"        >🇯🇵&emsp;&emsp;¥&emsp;&emsp; JPY</option>
        <option value="AUD"     name="AUD"        >🇬🇧&emsp;&emsp;£&emsp;&emsp; GBP</option>
        <option value="CAD"     name="CAD"        >🇨🇦&emsp;C$&emsp; &emsp; CAD</option>
        <option value="SEK"     name="SEK"        >🇨🇭&emsp;CHf&emsp;&emsp;CHF</option>
        <option value="HKD"     name="HKD"        >🇭🇰&emsp;HK$&emsp;&emsp;HKD</option>
      </select>

      <div style="text-align: center;">
       <p style="display: inline-block;">AMOUNT:</p> <input type="text" name="price">
      </div>
      <div>
        <input type="submit" value="Let's go">
      </div>

  </form>


</div>
</body>
</html>