<form action="/create_step_three" enctype="multipart/form-data" method="post">
    @csrf
    <!-- form3 -->
    <div class="form-step form-step-active form3">
        <div class="row">
            <div class="col-12 col-md-8 credit-inputs">
                <h1 class="fw-bolder">Stripe</h1>
                <h4>Card Number</h4>
                <label for="cardNumber">Enter the 16 digit card number on the road</label>
                <div class="input-container">
                    <img src="{{asset('images/Mastercard-Logo.png')}}" class="icon1" alt="">
                    <input style="width:100%;" name="cardNumber" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="card-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
                    <img src="{{asset('images/verified.png')}}" class="icon2" alt="">
                </div>

                <div class="col-12 mb-3 d-flex justify-content-between">
                    <label for="cvv">
                        <h5>CVV Number</h5>Enter the 3 or 4 digit number on the card
                    </label>
                    <input name="cardNumber" type="tel" inputmode="numeric" pattern="[0-9\s]{3,4}" autocomplete="card-number" maxlength="4" placeholder="123">
                </div>
                <div class="col-12 mb-3 d-flex justify-content-between">
                    <label for="expireDate">
                        <h5>Expiry Date</h5>Enter the expiration date on the card
                    </label>
                    <input type="date" name="expireDate" id="">
                </div>
                <div class="col-12 mb-3 d-flex justify-content-between">
                    <label for="expireDate">
                        <h5>Password</h5>Enter the Dynamic password
                    </label>
                    <input type="password" name="expireDate" id="">
                </div>
                <button type="submit" class="paybtn">Pay Now</button>
            </div>
            <div class="col-12 col-md-4 mt-3">
                <div class="creditCard">
                    <div class="col-12 space-even">
                        <img src="{{asset('images/sim.png')}}" alt="">
                        <img src="{{asset('images/wifi.png')}}" alt="">
                    </div>
                    <h6 class="mt-5">David John</h6>
                    <p class="fw-bold">3456</p>
                    <div class="col-12 space-even mt-3">
                        <p>09/22</p>
                        <img src="{{asset('images/Mastercard-Logo.png')}}" alt="">
                    </div>
                </div>
                <div class="creditDetail">
                    <div class="col-12 space-even mt-1">
                        <p class="fw-bold">Company</p>
                        <p>XXX</p>
                    </div>
                    <div class="col-12 space-even mt-1">
                        <p class="fw-bold">Order Number</p>
                        <p>126201</p>
                    </div>
                    <div class="col-12 space-even mt-1">
                        <p class="fw-bold">Service</p>
                        <p>Vehicle Import</p>
                    </div>
                    <div class="align-bottom">
                        <p>You have to Pay</p>
                        <p class="fw-bold">$150.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>