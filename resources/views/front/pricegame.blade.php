<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('front/css/style.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #c1f5ee;
        height: auto;
        font-family: 'Montserrat', sans-serif;
    }

    section {
        width: 100%;
    }

    ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #000;
        opacity: 1;
        /* Firefox */
    }

    :-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: #000;
    }

    ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: #000;
    }

    div.container {
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    h1 {
        color: #000;
    }

    /* form design */

    form {
        text-align: center;
    }

    article {
        display: none;
        letter-spacing: 4px;
        padding-top: 30px;
        text-align: center;
    }

    article.is-visible {
        display: block;
        position: relative;
    }

    article.is-visible img {
        width: 200px;
    }

    label.label-heading p {
        font-size: 14px;
        color: #000;
        letter-spacing: normal;
    }

    /* animation for the text to float up */

    article .label-text {
        color: #000;
        cursor: text;
        font-size: 15px;
        line-height: 20px;
        text-transform: uppercase;
        -moz-transform: translateY(-34px);
        -ms-transform: translateY(-34px);
        -webkit-transform: translateY(-34px);
        transform: translateY(-34px);
        transition: all 0.3s;
    }

    /* remove the input box styling */
    label input {
        background-color: transparent;
        border: 0;
        border-bottom: 2px solid #000;
        color: #000;
        font-size: 20px;
        letter-spacing: 1px;
        outline: 0;
        padding: 5px 20px;
        text-align: center;
        transition: all 0.3s;
        width: 200px;
    }

    /* once you click in the input the input width box animates */

    label input:focus {
        max-width: 100%;
        width: 400px;
    }

    /* the text floats up and turns white */

    label input:focus+.label-text {
        color: #000;
        font-size: 13px;
        margin-top: 10px;
        -moz-transform: translateY(-74px);
        -ms-transform: translateY(-74px);
        -webkit-transform: translateY(-74px);
        transform: translateY(-74px);
    }

    /* the text floats up during form validation */

    label input:valid+.label-text {
        font-size: 13px;
        -moz-transform: translateY(-74px);
        -ms-transform: translateY(-74px);
        -webkit-transform: translateY(-74px);
        transform: translateY(-74px);
    }

    input:-internal-autofill-selected {
        background-color: transparent;
    }

    /* button styling */

    button {
        background: transparent;
        color: #000;
        border: 2px solid #000;
        font-size: 15px;
        letter-spacing: 2px;
        padding: 20px 75px;
        text-transform: uppercase;
        cursor: pointer;
        display: inline-block;
        margin: 15px 30px;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    button:hover,
    button:focus {
        background-color: #000;
        color: #333333;
    }

    select {
        width: 240px;
        font-size: 18px;
        min-height: 40px;
        padding: 5px 20px;
        background-color: transparent;
        color: #ffffff;
    }

    button:hover,
    button:focus {
        background-color: #86c9c0;
        color: #fff;
        outline: none;
    }

    select.multiple {
        min-height: 220px;
    }

    select.multiple option {
        margin-top: 4%;
    }

    #validate {
        color: #333333;
        font-weight: 700;
    }

    i {
        color: #000;
        cursor: pointer;
    }

    .fa-arrow-up:before {
        position: absolute;
        bottom: 22%;
        right: 10%;
    }

    .fa-arrow-down:before {
        position: absolute;
        bottom: 22%;
        right: 7%;
    }

    select[name='availability-days'] {
        min-height: 100px;
    }

    label.label-heading {
        display: block;
        padding: 5px 20px;
        font-size: 20px;
        margin: 3%;
        color: #000;
        text-align: center;
        letter-spacing: normal;
    }

    .nav-btn-div {
        margin-top: 2rem;
        color: #000;
    }

    .nav-button {
        background: transparent;
        color: #000;
        border: 2px solid #000;
        font-size: 15px;
        letter-spacing: 2px;
        padding: 5px 25px;
        text-transform: uppercase;
        cursor: pointer;
        display: inline-block;
        margin: 5px 10px;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    @media (max-width: 1024px) {
        label.label-heading {
            font-size: 20px;
            letter-spacing: normal;
        }
    }

    @media (max-width: 767px) {
        .fa-arrow-up:before {
            position: absolute;
            bottom: 22%;
            right: 15%;
        }
    }

    @media (max-width: 670px) {
        section {
            width: 100%;
            position: absolute;
            top: 4%;
        }

        label.label-heading {
            font-size: 18px;
            margin-bottom: 11%;
            letter-spacing: normal;
        }

        h1 {
            padding: 30px;
            text-align: center;
            position: absolute;
            top: 15%;
        }

        label input:focus {
            width: 250px;
        }

        .fa-arrow-up:before {
            bottom: 16%;
            right: 16%;
        }

        .fa-arrow-down:before {
            position: absolute;
            bottom: 16%;
            right: 7%;
        }

        .select.multiple {
            min-height: 180px;
        }

        .fa-arrow-up:before {
            position: absolute;
            bottom: 22%;
            right: 15%;
        }
    }

    @supports (-webkit-touch-callout: none) {
        /*  */
    }

    img.gameintroimage.img-fluid {
        width: 200px;
        margin-bottom: 50px;
    }

    section.pricegameintro-content-section {
        padding: 10px;
    }

    section.pricegame-section {
        padding: 50px;
        display: none;
    }

    a.btn.gameintrostartbtn {
        background: #a6c13e;
        color: #fff;
        padding: 15px;
        font-size: 20px;
    }


    .form-check.questiontwo-btn-wrapper .form-check-input[type=radio] {
        width: auto !important;
        padding: 10px;
        margin: 0;
        float: none;
    }

    .form-check.questiontwo-btn-wrapper label.form-check-label {
        display: block;
        text-align: left;
        padding: 0px 0px 0 20px;
        letter-spacing: normal;
    }

    .form-check.questiontwo-btn-wrapper {
        min-height: auto;
        line-height: 35px;
        background: #004a77a6;
        text-align: left;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        padding: 10px;
        color: #fff;
        width: auto;
        border: 1px solid #004a77;
        margin-bottom: 20px;
    }

    .nav-btn-div.customnextprevbtnwrapper {
        position: absolute;
        right: 0;
        bottom: -5%;
        width: 100%;
    }

    .nav-btn-div.customnextprevbtnwrapper2 .fa-arrow-up {
        position: absolute;
        right: 0;
        bottom: 0;
    }

    .pricegameformsubmithankyousection {
        display: none;
    }

    section.pricegameformsubmithankyousection .content_sec {
        height: 100vh;
        display: flex;
        align-items: center;
    }

</style>

<body>
    <section class="pricegameintro-content-section">
        <div class="container">
            <img src="{{ asset('front/img/c4.jpeg')}}" class="gameintroimage img-fluid" alt="">
            <div class="content_sec">
                <h4>Play our fun game and get the best package option for your event!</h4>
                <ul>
                    <li>No 30 question phone call.</li>
                    <li>No wish washy sales talk.</li>
                    <li>No hidden fees & trying to up sale.</li>
                    <li>Best transparent price packages that will give you most for your money and serve you the best.
                        (less 60 seconds to play)</li>
                </ul>
                <p><b><i class="fa fa-clock"></i> Takes 45 sec</b></p>
                <a href="javascript:;" class="btn gameintrostartbtn" id="gamestart">Let's play & explore!</a>
            </div>
        </div>
    </section>

    <section class="pricegame-section" id="pricegamesectioncstID">
        <div class="container">
            <section>
                <form method="POST" action="{{ url('contact-submit') }}" id="myForm">
                    @csrf
                    <article id="parent1" class="is-visible">
                        <img src="{{ asset('front/img/g1.jpeg')}}" class="img-fluid" alt="">
                        <label class="label-heading" for="name">
                            What is the date of your event? This question is required.*
                            <p>if you are unsure, no problem just say "not sure". Jan, Feb, Oct and Dec are peak
                                requests months</p>
                        </label>
                        <input name="event_date" id="nametextfield" type="text" placeholder="Type your answer here..." required />

                        <div class="nav-btn-div">
                            <button type="button" class="nav-button" value="next" onclick="moveslide2()">OK <i class="fa fa-check" aria-hidden="true"></i></button>
                        </div>

                        <div class="nav-btn-div customnextprevbtnwrapper">
                            <a href="javascript:;" type="button">
                                <i class="fa fa-arrow-down" onclick="moveslide2()"></i>
                            </a>
                        </div>

                        <div class="alert alert-danger errormessageclasscstm" role="alert"></div>

                    </article>

                    <article id="parent2">
                        <img src="{{ asset('front/img/g2.jpeg')}}" class="img-fluid" alt="">
                        <label class="label-heading" for="email">Best guess as to the number of people at your event? This question is required.*</label>

                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="no_of_guests">
                                <input class="form-check-input" type="radio" name="no_of_guests" id="flexRadioDefault1" value="0-100" checked>
                                0-100
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault2">
                                <input class="form-check-input" type="radio" name="no_of_guests" id="flexRadioDefault2" value="101-200">
                                101-200
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault3">
                                <input class="form-check-input" type="radio" name="no_of_guests" id="flexRadioDefault3" value="201-350">
                                201-350
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault4">
                                <input class="form-check-input" type="radio" name="no_of_guests"  id="flexRadioDefault4" value="350-500">
                                350-500
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault5">
                                <input class="form-check-input" type="radio" name="no_of_guests" id="flexRadioDefault5" value="500-800">
                                500-800
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault6">
                                <input class="form-check-input" type="radio" name="no_of_guests" id="flexRadioDefault6" value="800 plus">
                                800 plus
                            </label>
                        </div>

                        <br>
                        <div class="nav-btn-div">
                            <button type="button" class="nav-button" value="next" onclick="moveslide3()">OK</button>

                        </div>
                        <div class="nav-btn-div customnextprevbtnwrapper">
                            <a href="javascript:;" type="button">
                                <i class="fa fa-arrow-up" onclick="movebacktoslide1()"></i>
                            </a>

                            <a href="javascript:;" type="button">
                                <i class="fa fa-arrow-down" onclick="moveslide3()"></i>
                            </a>

                        </div>

                        <div class="alert alert-danger errormessageclasscstm" role="alert"></div>

                    </article>

                    <article id="parent3">
                        <img src="{{ asset('front/img/g3.jpeg')}}" class="img-fluid" alt="">
                        <label class="label-heading" for="phone">What type of event?This question is required.*</label>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault7">
                                <input class="form-check-input" type="radio" name="eventType" id="flexRadioDefault7" value="Conference/Convention" checked />
                                Conference/Convention
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault8">
                                <input class="form-check-input" type="radio" name="eventType" id="flexRadioDefault8" value="Corporate event">
                                Corporate event
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault9">
                                <input class="form-check-input" type="radio" name="eventType" id="flexRadioDefault9" value="Church Event">
                                Church Event
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault10">
                                <input class="form-check-input" type="radio" name="eventType" id="flexRadioDefault10" value="College">
                                College
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault11">
                                <input class="form-check-input" type="radio" name="eventType" id="flexRadioDefault11" value="School">
                                School
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault12">
                                <input class="form-check-input" type="radio" name="eventType" id="flexRadioDefault12" value="Community Event">
                                Community Event
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault12">
                                <input class="form-check-input" type="radio" name="eventType" id="flexRadioDefault12" value="Country Club">
                                Country Club
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <label class="form-check-label" for="flexRadioDefault12">
                                <input class="form-check-input" type="radio" name="eventType" id="flexRadioDefault12" value="Life Milestone">
                                Life Milestone
                            </label>
                        </div>
                        <br>
                        <div class="nav-btn-div">
                            <button type="button" class="nav-button" value="next" onclick="moveslide4()">OK <i class="fa fa-check" aria-hidden="true"></i></button>
                        </div>
                        <div class="nav-btn-div customnextprevbtnwrapper">
                            <a href="javascript:;" type="button">
                                <i class="fa fa-arrow-up" onclick="movebacktoslide2()"></i>
                            </a>
                            <a href="javascript:;" type="button">
                                <i class="fa fa-arrow-down" onclick="moveslide4()"></i>
                            </a>
                        </div>
                    </article>

                    <article id="parent4">
                        <img src="{{ asset('front/img/g4.jpeg') }}" class="img-fluid" alt="">
                        <label class="label-heading" for="age">How would you like to handle lodging, IF lodging is
                            needed? This is an ask and can be discussed later.This question is required.*</label>
                        <div class="form-check questiontwo-btn-wrapper">
                            <input class="form-check-input" type="radio" name="lodging_handled" id="flexRadioDefault71" checked value="Yes, We are open to taking care of lodging">
                            <label class="form-check-label" for="flexRadioDefault71">
                                Yes, We are open to taking care of lodging
                            </label>
                        </div>
                        <div class="form-check questiontwo-btn-wrapper">
                            <input class="form-check-input" type="radio" name="lodging_handled" id="flexRadioDefault81" value=" We would rather Dewayne/assistant handle any lodging and add to the overall total price">
                            <label class="form-check-label" for="flexRadioDefault81">
                                We would rather Dewayne/assistant handle any lodging and add to the overall total price
                            </label>
                        </div>
                        <br>
                        <div class="nav-btn-div">
                            <button type="button" class="nav-button" value="next" onclick="moveslide5()">OK <i class="fa fa-check" aria-hidden="true"></i></button>
                        </div>
                        <div class="nav-btn-div customnextprevbtnwrapper">
                            <i class="fa fa-arrow-up" onclick="movebacktoslide3()"></i>
                            <i class="fa fa-arrow-down" onclick="moveslide5()"></i>
                        </div>
                    </article>

                    <article id="parent5">
                        <img src="{{ asset('front/img/g5.jpeg') }}" class="img-fluid" alt="">
                        <label class="label-heading" for="address">City and State of the event?This question is required.*</label>
                        <input name="address" id="addresstextfield" type="text" placeholder="Type your answer here..." />
                        <br>
                        <div class="nav-btn-div">
                            <button type="button" class="nav-button" value="next" onclick="moveslide6()">OK <i class="fa fa-check" aria-hidden="true"></i></button>
                        </div>
                        <div class="nav-btn-div customnextprevbtnwrapper">
                            <i class="fa fa-arrow-up" onclick="movebacktoslide4()"></i>
                            <i class="fa fa-arrow-down" onclick="moveslide6()"></i>
                        </div>

                        <div class="alert alert-danger errormessageclasscstm" role="alert"></div>
                    </article>

                    <article id="parent6">
                        <img src="{{ asset('front/img/g5.jpeg') }}" class="img-fluid" alt="">
                        <label class="label-heading" for="address">How did you hear about Dewayne?This question is required.*</label>

                        <div class="form-check questiontwo-btn-wrapper">
                            <input class="form-check-input" type="radio" name="hear_about_us" id="flexRadioDefaultv1" checked value='Googled "Magician"'>
                            <label class="form-check-label" for="flexRadioDefaultv1"> Googled "Magician"
                            </label>
                        </div>

                        <div class="form-check questiontwo-btn-wrapper">
                            <input class="form-check-input" type="radio" name="hear_about_us" id="flexRadioDefaultv2" value='Googled "Comedian"'>
                            <label class="form-check-label" for="flexRadioDefaultv2">
                                Googled "Comedian"
                            </label>
                        </div>

                        <div class="form-check questiontwo-btn-wrapper">
                            <input class="form-check-input" type="radio" name="hear_about_us" id="flexRadioDefaultv3" value='Googled "Christian entertainer/comedian"'>
                            <label class="form-check-label" for="flexRadioDefaultv3">
                                Googled "Christian entertainer/comedian"
                            </label>
                        </div>

                        <div class="form-check questiontwo-btn-wrapper">
                            <input class="form-check-input" type="radio" name="hear_about_us" id="flexRadioDefaultv4" value="Facebook">
                            <label class="form-check-label" for="flexRadioDefaultv4">
                                Facebook
                            </label>
                        </div>

                        <div class="form-check questiontwo-btn-wrapper">
                            <input class="form-check-input" type="radio" name="hear_about_us" id="flexRadioDefaultv5" value="Youtube">
                            <label class="form-check-label" for="flexRadioDefaultv5">
                                Youtube
                            </label>
                        </div>

                        <div class="form-check questiontwo-btn-wrapper">
                            <input class="form-check-input" type="radio" name="hear_about_us" id="flexRadioDefaultv6" value="Flyer">
                            <label class="form-check-label" for="flexRadioDefaultv6">
                                Flyer
                            </label>
                        </div>

                        <div class="form-check questiontwo-btn-wrapper">
                            <input class="form-check-input" type="radio" name="hear_about_us" id="flexRadioDefaultv7" value="Direct Email">
                            <label class="form-check-label" for="flexRadioDefaultv7">
                                Direct Email
                            </label>
                        </div>

                        <div class="form-check questiontwo-btn-wrapper">
                            <input class="form-check-input" type="radio" name="hear_about_us" id="flexRadioDefaultv8" value="Referred by someone">
                            <label class="form-check-label" for="flexRadioDefaultv8">
                                Referred by someone
                            </label>
                        </div>

                        <br>
                        <div class="nav-btn-div">
                            <button type="button" class="nav-button" value="next" onclick="moveslide7()">OK <i
                                    class="fa fa-check" aria-hidden="true"></i></button>

                        </div>
                        <div class="nav-btn-div customnextprevbtnwrapper">
                            <i class="fa fa-arrow-up" onclick="movebacktoslide5()"></i>
                            <i class="fa fa-arrow-down" onclick="moveslide7()"></i>
                        </div>
                    </article>

                    <article id="parent7">
                        <img src="{{ asset('front/img/g5.jpeg') }}" class="img-fluid" alt="">
                        <label class="label-heading" for="address">
                            Got it! Enter your email address and we will send your personalized options for your event?This question is required.*
                            <small>(within 7 to 8 minutes)</small>
                        </label>
                        <input name="email" type="email" placeholder="name@example.com" />
                        <br>
                        <div class="nav-btn-div customnextprevbtnwrapper2">
                            <i class="fa fa-arrow-up" onclick="movebacktoslide6()"></i>
                            <button type="submit" class="nav-button" id="submitpricegameform" value="submit">Submit</button>
                        </div>
                    </article>

                    <p id="validate"></p>
                </form>
            </section>
        </div>
    </section>

    <section class="pricegameformsubmithankyousection">
        <div class="container">
            <div class="content_sec">
                <h3>All done! Thanks for your time.</h3>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('front/js/custom.js')}}"></script>

    <script>
        function moveslide2() {
            var nametextfield = $('#nametextfield').val();
            if (nametextfield === '') {
                $('.errormessageclasscstm').css('display', 'block');
                $('.errormessageclasscstm').text('fields cannot be empty');
            } else {
                $('.errormessageclasscstm').css('display', 'none');
                $('#parent1').removeClass('is-visible');
                $('#parent2').addClass('is-visible');
            }
        }

        function movebacktoslide1() {
            $('#parent1').addClass('is-visible');
            $('#parent2').removeClass('is-visible');
        }

        function moveslide3() {
            $('#parent2').removeClass('is-visible');
            $('#parent3').addClass('is-visible');
        }

        function movebacktoslide2() {
            $('#parent2').addClass('is-visible');
            $('#parent3').removeClass('is-visible');
        }

        function moveslide4() {
            $('#parent3').removeClass('is-visible');
            $('#parent4').addClass('is-visible');
        }

        function movebacktoslide3() {
            $('#parent3').addClass('is-visible');
            $('#parent4').removeClass('is-visible');
        }

        function moveslide5() {

            $('#parent4').removeClass('is-visible');
            $('#parent5').addClass('is-visible');

        }

        function movebacktoslide4() {
            $('#parent4').addClass('is-visible');
            $('#parent5').removeClass('is-visible');
        }

        function moveslide6() {

            var addresstextfield = $('#addresstextfield').val();
            if (addresstextfield === '') {
                $('.errormessageclasscstm').css('display', 'block');
                $('.errormessageclasscstm').text('fields cannot be empty');
            } else {
                $('.errormessageclasscstm').css('display', 'none');
                $('#parent5').removeClass('is-visible');
                $('#parent6').addClass('is-visible');
            }

        }

        function movebacktoslide5() {
            $('#parent5').addClass('is-visible');
            $('#parent6').removeClass('is-visible');
        }

        function moveslide7() {
            $('#parent6').removeClass('is-visible');
            $('#parent7').addClass('is-visible');
        }

        function movebacktoslide6() {
            $('#parent6').addClass('is-visible');
            $('#parent7').removeClass('is-visible');
        }

        $(document).keypress(
            function (event) {
                if (event.which == '13') {
                    event.preventDefault();
                }
            });


        $('#gamestart').on('click', function () {
            $('.pricegameintro-content-section').css('display', 'none');
            $('.pricegame-section').css('display', 'block');
        })
        $('#submitpricegameform').on('click', function (e) {
            e.preventDefault();
            $('.pricegame-section').css('display', 'none');
            $('.pricegameformsubmithankyousection').css('display', 'block');
            
            $('#myForm').submit();
            // location.reload(true);
        });

    </script>

</body>

</html>
