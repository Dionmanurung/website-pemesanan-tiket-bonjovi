@extends('layouts.layUs')
@section('container')
        <div class="container15">
            <form onsubmit="sendEmail(); reset(); return false;">
                <h3>What's Up</h3>
                <input type="text" id="name" placeholder="Your Name" required>
                <input type="email" id="email" placeholder="Email id" required>
                <input type="text" id="phone" placeholder="phone no." required>
                <textarea id="message" rows="4" placeholder="How can we help you?"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail(){
                Email.send({
                    SecureToken: "3f9869b1-6c1a-417b-ad81-0dacea29ceff",
                    To : "marbunjosuakece1@gmail.com", 
                    From : document.getElementById("email").value,
                    Subject : "New Contact From Enquiry",
                    Body : "Name : " + document.getElementById("name").value
                    + "<br> Email: " + document.getElementById("email").value
                    + "<br> Phone no: " + document.getElementById("phone").value
                    + "<br> Message: " + document.getElementById("message").value
                }).then(
                message => alert("message sent succesfully")
                );
            }
        </script>
@endsection