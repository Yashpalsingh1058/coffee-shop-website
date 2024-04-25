<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <title>Order Placement</title>
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
       
        .container {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
       
        .order-summary {
            flex-basis: 40%;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
       
        .order-summary h2 {
            margin-top: 0;
        }
       
        .payment-info {
            flex-basis: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
       
        .payment-info h2 {
            margin-top: 0;
        }
       
        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }
       
        label {
            font-weight: bold;
        }
       
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
       
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
       
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style> -->
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
    }

    .order-summary {
        flex-basis: 40%;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .text-center {
        text-align: center !important;
        background: antiquewhite;
        display: flex;
        justify-content: center;
        /* height: 90vh; */
        height: 77rem;
        align-items: center;
        margin-top: -9rem;
    }

    .row {
        width: 100%;
    }

    .row>* {
        flex-shrink: 0;
        width: 100%;
        max-width: 100%;
        padding-right: calc(let(--bs-gutter-x)* .1);
        padding-left: calc(let(--bs-gutter-x)* .5);
        margin-top: let(--bs-gutter-y);
    }

    .form-floating>.form-control,
    .form-floating>.form-control-plaintext,
    .form-floating>.form-select {
        /* height: calc(3.5rem + calc(let(--bs-border-width)* 2)); */
        min-height: calc(2.5vh + calc(let(--bs-border-width)* 1));
    }

    .form-control {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: let(--bs-body-color);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: let(--bs-body-bg);
        background-clip: padding-box;
        border: let(--bs-border-width) solid let(--bs-border-color);
        border-radius: let(--bs-border-radius);
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .form-floating>label {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
        height: 100%;
        padding: 2vh 2.75vh;
        overflow: hidden;
        text-align: start;
        text-overflow: ellipsis;
        white-space: nowrap;
        pointer-events: none;
        border: let(--bs-border-width) solid transparent;
        transform-origin: 0 0;
        transition: opacity .1s ease-in-out, transform .1s ease-in-out;
    }

    /* product-styles */
    /* ul{
        margin-top: 0;
    margin-bottom: 1rem;
    display: flex;
    flex-direction: column;
    background: aquamarine;
    justify-content: center;
    align-items: center;
    width: 100%;


    }

    li{
        border: 1px solid black;
    padding: 0.2rem;
    word-spacing: 5px;
    background: #deafaf;
    font-size: 18px;
    /* width: 100%; */
    /* height: 45%;
    width: 32rem;
    } */

    #cartItems li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    width: 100%;
    text-align: center;
    justify-content: center;
    padding: 8px;
    border: 3px solid lavender;
    font-size: 17px;
    word-spacing: 3px;
    border-radius: 16px;
    font-weight: 400;
}

.order-summary {
    display: flex;
    flex-direction: column;
    height: 100%;
    align-items: center;
}

#cartItems {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    list-style: none;
    padding: 8px;
    background: #9f5c441f;
    width: 40rem;
    height: 100%;
    height: 33rem;
    box-shadow: 4px 6px 13px #9f5c44;
}

#cartItems li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    width: 100%;
    text-align: center;
    justify-content: flex-start;
    padding: 8px;
    border: 3px solid lavender;
    font-size: 17px;
    word-spacing: 3px;
    border-radius: 16px;
    font-weight: 400;
}

#cartItems li img {
    margin-right: 10px; /* Adjust spacing between image and text */
}

    </style>
</head>

<body>


    <form onsubmit="return validateForm()" method="post ">
        <div class="container text-center p-5">

            <div class="row">
                <div class="col">
                    <div class="order-summary">
                        <h2>Order Summary:</h2>
                        <ul id="cartItems">
                            <!-- Cart items will be dynamically added here -->
                        </ul> 
                        </ul>
                    </div>
                </div>


                <div class="col">
                    <div class="cont">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nameOnCard"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Name on Card: </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="cardNumber"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Card Number: </label>
                                </div>
                            </div>
                        </div>




                        <div class="row mt-3">

                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="expiryDate"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Expiry Date: </label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="cvv" placeholder="name@example.com">
                                    <label for="floatingInput">CVV:</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="billingAddress"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Billing Address: </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="country" placeholder="name@example.com">
                                    <label for="floatingInput">Country: </label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="state" placeholder="name@example.com">
                                    <label for="floatingInput">State: </label>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">

                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="city" placeholder="name@example.com">
                                    <label for="floatingInput">City: </label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="zipCode" placeholder="name@example.com">
                                    <label for="floatingInput">Zip Code: </label>
                                </div>
                            </div>

                        </div>


                        <div class="row mt-3">

                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="capt" readonly>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" id="textinput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Enter Captcha:</label>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <h6><u>Captcha not visible</u> <img src="refresh.jpg" width="40px"
                                        onclick="generateCaptcha()" style="cursor: pointer;"></h6>

                            </div>

                            <div class="col">
                                <input type="submit" class="btn btn-primary mb-3" value="Order Now"
                                    onclick="validcap()">
                            </div>

                        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </form>
    <script>
    function validateForm() {
        let nameOnCard = document.getElementById('nameOnCard').value;
        let cardNumber = document.getElementById('cardNumber').value;
        let expiryDate = document.getElementById('expiryDate').value;
        let cvv = document.getElementById('cvv').value;
        let billingAddress = document.getElementById('billingAddress').value;
        let country = document.getElementById('country').value;
        let state = document.getElementById('state').value;
        let city = document.getElementById('city').value;
        let zipCode = document.getElementById('zipCode').value;

        if (nameOnCard === '' || cardNumber === '' || expiryDate === '' || cvv === '' || billingAddress === '' ||
            country === '' || state === '' || city === '' || zipCode === '') {
            alert('Something Went Wrong');
        }

    }

    function generateCaptcha() {
        let alpha = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V',
            'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g',
            'h', 'i',
            'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '!', '@', '#', '$',
            '%', '^', '&', '*', '+'
        ];
        let a = alpha[Math.floor(Math.random() * 71)];
        let b = alpha[Math.floor(Math.random() * 71)];
        let c = alpha[Math.floor(Math.random() * 71)];
        let d = alpha[Math.floor(Math.random() * 71)];
        let e = alpha[Math.floor(Math.random() * 71)];
        let f = alpha[Math.floor(Math.random() * 71)];

        let final = a + b + c + d + e + f;
        document.getElementById("capt").value = final;
    }

    function validcap() {
        let stg1 = document.getElementById('capt').value;
        let stg2 = document.getElementById('textinput').value;
        if (stg1 === stg2 && stg2 !== '') {
            alert("Order placed Successfully");
            window.location.href = "orderconfirmation.php";
            return true;
        } else {
            alert("Please enter a valid captcha");
            return false;
        }
    }


    function validateForm() {
        let nameOnCard = document.getElementById('nameOnCard').value;
        let cardNumber = document.getElementById('cardNumber').value;
        let expiryDate = document.getElementById('expiryDate').value;
        let cvv = document.getElementById('cvv').value;
        let billingAddress = document.getElementById('billingAddress').value;
        let country = document.getElementById('country').value;
        let state = document.getElementById('state').value;
        let city = document.getElementById('city').value;
        let zipCode = document.getElementById('zipCode').value;

        if (nameOnCard === '' || cardNumber === '' || expiryDate === '' || cvv === '' || billingAddress === '' ||
            country === '' || state === '' || city === '' || zipCode === '') {
            alert('Something Went Wrong');
        }
    }


   document.addEventListener('DOMContentLoaded', function() {
    // Retrieve cart items from local storage
    var cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    // Get the <ul> element to display cart items
    var cartList = document.getElementById('cartItems');

    // Loop through each cart item and create list elements
    cartItems.forEach(function(item, index) {
        var listItem = document.createElement('li');

        // Create an image element for the product image
        var img = document.createElement('img');
        img.src = item.productImg; // Set the src attribute to the productImg property
        img.alt = item.title; // Set the alt attribute to the product title
        img.style.width = '50px'; // Set the width of the image (adjust as needed)
        listItem.appendChild(img); // Append the image to the list item

        // Create a text node for the product title, price, and quantity
        var textNode = document.createTextNode(`${item.title}: Qty: ${item.quantity} - ${item.price}`);
        listItem.appendChild(textNode); // Append the text node to the list item

        cartList.appendChild(listItem); // Append the list item to the cart list
    });
});

    </script>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>