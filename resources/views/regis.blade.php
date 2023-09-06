@extends('layouts.layRegis')
@section('container')
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <link rel="stylesheet" href="css/regis.css">
    </head>
       
    <body>
    <div class="container12">
        <h1>Registaration Form</h1>
            <div class="row">
                <div class="col-10">
                    <label for="fname">First Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="firstname" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="lname">Last Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="lname" name="lastname" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="email">Email:</label>
                </div>
                <div class="col-90">
                    <input type="email" id="email" name="email" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="mobile">Country:</label>
                </div>
                <div class="col-90">
                    <input type="tel" id="country" name="mobile" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="city">Town/City:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="city" name="city" maxlength="10">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="number">Phone:</label>
                </div>
                <div class="col-90">
                    <input type="number" id="ph" name="ph" maxlength="6">
                </div>
            </div>
            <br><br>
            <div class="row">
                <input type="submit" value="Lakukan Pembayaran">
                <a href = "/tickets"></a>
            </div>  
    </body>
</html>
@endsection