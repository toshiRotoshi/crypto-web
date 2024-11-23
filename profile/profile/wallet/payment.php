<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="style/payment.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>

<body>
    <div class="container">
        <form action="">
            <h1 class="main-heading">PAYMENT FORM</h1>
            <hr>
            <h2>User Information</h2>
            <div>Name:<input type="text" name="name" placeholder="Full Name" required></div>
            <fieldset>
                <legend>Gender:</legend>
                <div class="Gender">
                    <input type="radio" name="gender" id="male" required>Male
                    <input type="radio" name="gender" id="female" required>Female
                </div>
            </fieldset>
            <div>
                Address: <textarea name="address" id="address" cols="70" rows="10"
                    placeholder="Enter Address"></textarea>
            </div>
            <div>
                Email:<input type="email" name="email" id="email" placeholder="email@gmail.com" required>
            </div>
            <div>
                Pincode: <input type="password" name="pincode" id="pincode" placeholder="123456">
            </div>
            <hr>
            <h2>Payment Information</h2>
            <div>
                Accepted Cards <br>
                <div>
                    <img src="image/Visa.png" alt="Visa" class="cards" id="visa">
                    <img src="image/Mastercard.png" alt="MasterCard" class="cards" id="mastercard">
                </div>
                Card Type:
                <select name="card_type" id="card_type" required>
                    <option value="">--Select a Card Type</option> //when user first visits it will not be stored in server
                    <option value="visa">Visa</option>
                    <option value="mastercard">MasterCard</option>
                </select>
            </div>
            <div>
                Card Number:<input type="number" name="card_number" id="card_number"
                    placeholder="5555-6666-7777-8888" required>
            </div>
            <div>
                Expiration Date:<input type="date" name="exp_date" id="exp_date" required>
            </div>
            <div>
                CVV:<input type="password" name="cvv" id="cvv" placeholder="123">
            </div>
            <input type="submit" value="Pay Now">

            <div class="home-btn">
                <a href="home.php"><i class="ri-home-line"></i>Back To Home</a>
               </div>

        </form>

    </div>

    <script src="https://unpkg.com/scrollreveal"></script>

    <script src="script/view-all-plans.js"></script>

</body>
</html>