@extends('front.layouts.app')
@section('css')
@endsection

@section('content')
    @if(str_contains(url()->current(), 'checkout'))
        @include('front.layouts.header4')
    @endif
    <section class="checkout-form-section">
        <div class="container">
            <div class="card-header">
                <nav class="nav nav-pills nav-fill">
                    <a class="nav-link tab-pills active" id="tab-pillsFREW1" href="#"> <span>1</span> Personal
                        Details</a>
                    <a class="nav-link tab-pills" id="tab-pillsFREW2" href="#"> <span>2</span> Address Details</a>
                    <a class="nav-link tab-pills" id="tab-pillsFREW3" href="#"> <span>3</span> Company Details</a>
                    <a class="nav-link tab-pills" id="tab-pillsFREW4" href="#"> <span>4</span> Finish</a>
                </nav>
            </div>
            <form class="card">
                <div class="card-body">

                    <div class="tab" id="tab1FFREWR">
                        <h2>Tell us about your event! These details will help your request receive fast and accurate
                            quotes. </h2>
                        <hr>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">EVENT
                                    TYPE</label>
                            </div>
                            <div class="col-md-8">
                                <label for="">EVENT TYPE</label>
                                <select class="form-select form-select-sm " id="type" name="type">
                                    <option value=""></option>
                                    <option value="Anniversary or birthday">Anniversary or birthday</option>
                                    <option value="Bachelor or bachelorette party">Bachelor or bachelorette party
                                    </option>
                                    <option value="Bar or bat mitzvah">Bar or bat mitzvah</option>
                                    <option value="Business meeting">Business meeting</option>
                                    <option value="Conference or convention">Conference or convention</option>
                                    <option value="Corporate event">Corporate event</option>
                                    <option value="Customer event">Customer event</option>
                                    <option value="Education or seminar">Education or seminar</option>
                                    <option value="Fraternity or sorority group">Fraternity or sorority group</option>
                                    <option value="Fundraiser or charity event">Fundraiser or charity event</option>
                                    <option value="Incentive travel">Incentive travel</option>
                                    <option value="Reception or holiday party">Reception or holiday party</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Shareholders meeting">Shareholders meeting</option>
                                    <option value="Special event">Special event</option>
                                    <option value="Sports event">Sports event</option>
                                    <option value="Team building event">Team building event</option>
                                    <option value="Tour group or vacation">Tour group or vacation</option>
                                    <option value="Trade or consumer show">Trade or consumer show</option>
                                    <option value="Training">Training</option>
                                    <option value="Wedding">Wedding</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <hr>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">EVENT DATE</label>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Arriving on</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Departing on</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="radio-btn-wrapper">
                                            <label for="">Are your event dates flexible?</label>
                                            <br>
                                            <label class="radio-inline">
                                                <input type="radio" name="flexibledates" value="Yes" checked>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="flexibledates" value="no">No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">GUEST
                                    ROOMS</label>
                            </div>
                            <div class="col-md-8">
                                <div class="radio-btn-wrapper">
                                    <label for="">Does your event needs guest rooms?</label>
                                    <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="guestrooms" value="Yes" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="guestrooms" value="No">No
                                    </label>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">MEETING
                                    SPACE</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="radio-btn-wrapper">
                                        <div class="col-md-12">
                                            <label for="">Does your event need meeting rooms?</label>
                                            <br>
                                            <label class="radio-inline">
                                                <input type="radio" name="meetingrooms" value="Yes" checked>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="meetingrooms" value="No">No
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label>Attendees per day</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <div class="radio-btn-wrapper">
                                            <label>Build your event's agenda by adding agenda items.</label>
                                            <br>
                                            <a href="javascript:;" class="btn greybtn" id="agendascreenfixedID">Agenda
                                                Items</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">TELL US MORE ABOUT
                                    YOUR EVENT</label>
                            </div>
                            <div class="col-md-8">
                                <textarea name="moreaboutevents" cols="20" rows="10" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <button type="button" id="gotoslide2" class="btn greenbtn ms-auto">Next</button>
                            </div>
                        </div>

                    </div>

                    <div class="tab d-none" id="tab2FFREWR">
                        <h2>
                            Great! Now let us know your contact information so venues can respond to your request.
                        </h2>
                        <hr>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">PLANNER
                                    INFORMATION</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="radio-btn-wrapper">
                                        <div class="col-md-12">
                                            <label for="">Does your event need meeting rooms?</label>
                                            <br>
                                            <label class="radio-inline">
                                                <input type="radio" name="meetingrooms" value="Yes" checked>Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="meetingrooms" value="No">No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">First name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">Last name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-label-wrapper">
                                            <label for="">Country/Region</label>
                                            <select class="form-select" id="country" name="country">
                                                <option data-cvent-id="option-0" value="0"></option>
                                                <option data-cvent-id="option-1" value="1">USA</option>
                                                <option data-cvent-id="option-2" value="2">Canada</option>
                                                <option data-cvent-id="option-3" value="3">Afghanistan</option>
                                                <option data-cvent-id="option-4" value="4">Åland Islands</option>
                                                <option data-cvent-id="option-5" value="5">Albania</option>
                                                <option data-cvent-id="option-6" value="6">Algeria</option>
                                                <option data-cvent-id="option-7" value="7">American Samoa</option>
                                                <option data-cvent-id="option-8" value="8">Andorra</option>
                                                <option data-cvent-id="option-9" value="9">Angola</option>
                                                <option data-cvent-id="option-10" value="10">Anguilla</option>
                                                <option data-cvent-id="option-11" value="11">Antarctica</option>
                                                <option data-cvent-id="option-12" value="12">Antigua and Barbuda
                                                </option>
                                                <option data-cvent-id="option-13" value="13">Argentina</option>
                                                <option data-cvent-id="option-14" value="14">Armenia</option>
                                                <option data-cvent-id="option-15" value="15">Aruba</option>
                                                <option data-cvent-id="option-16" value="16">Australia</option>
                                                <option data-cvent-id="option-17" value="17">Austria</option>
                                                <option data-cvent-id="option-18" value="18">Azerbaijan</option>
                                                <option data-cvent-id="option-19" value="19">Bahamas</option>
                                                <option data-cvent-id="option-20" value="20">Bahrain</option>
                                                <option data-cvent-id="option-21" value="21">Bangladesh</option>
                                                <option data-cvent-id="option-22" value="22">Barbados</option>
                                                <option data-cvent-id="option-23" value="23">Belarus</option>
                                                <option data-cvent-id="option-24" value="24">Belgium</option>
                                                <option data-cvent-id="option-25" value="25">Belize</option>
                                                <option data-cvent-id="option-26" value="26">Benin</option>
                                                <option data-cvent-id="option-27" value="27">Bermuda</option>
                                                <option data-cvent-id="option-28" value="28">Bhutan</option>
                                                <option data-cvent-id="option-29" value="29">Bolivia</option>
                                                <option data-cvent-id="option-30" value="30">Bonaire, Saint Eustatius
                                                    and Saba</option>
                                                <option data-cvent-id="option-31" value="31">Bosnia and Herzegovina
                                                </option>
                                                <option data-cvent-id="option-32" value="32">Botswana</option>
                                                <option data-cvent-id="option-33" value="33">Bouvet Island</option>
                                                <option data-cvent-id="option-34" value="34">Brazil</option>
                                                <option data-cvent-id="option-35" value="35">British Indian Ocean Terr.
                                                </option>
                                                <option data-cvent-id="option-36" value="36">British Virgin Islands
                                                </option>
                                                <option data-cvent-id="option-37" value="37">Brunei Darussalam</option>
                                                <option data-cvent-id="option-38" value="38">Bulgaria</option>
                                                <option data-cvent-id="option-39" value="39">Burkina Faso</option>
                                                <option data-cvent-id="option-40" value="40">Burundi</option>
                                                <option data-cvent-id="option-41" value="41">Cambodia</option>
                                                <option data-cvent-id="option-42" value="42">Cameroon</option>
                                                <option data-cvent-id="option-43" value="43">Cape Verde</option>
                                                <option data-cvent-id="option-44" value="44">Cayman Islands</option>
                                                <option data-cvent-id="option-45" value="45">Central African Republic
                                                </option>
                                                <option data-cvent-id="option-46" value="46">Chad</option>
                                                <option data-cvent-id="option-47" value="47">Chile</option>
                                                <option data-cvent-id="option-48" value="48">China</option>
                                                <option data-cvent-id="option-49" value="49">Christmas Island</option>
                                                <option data-cvent-id="option-50" value="50">Cocos (Keeling) Islands
                                                </option>
                                                <option data-cvent-id="option-51" value="51">Colombia</option>
                                                <option data-cvent-id="option-52" value="52">Comoros</option>
                                                <option data-cvent-id="option-53" value="53">Congo (Democratic Republic)
                                                </option>
                                                <option data-cvent-id="option-54" value="54">Congo (Republic)</option>
                                                <option data-cvent-id="option-55" value="55">Cook Islands</option>
                                                <option data-cvent-id="option-56" value="56">Costa Rica</option>
                                                <option data-cvent-id="option-57" value="57">Cote d'Ivoire</option>
                                                <option data-cvent-id="option-58" value="58">Croatia</option>
                                                <option data-cvent-id="option-59" value="59">Cuba</option>
                                                <option data-cvent-id="option-60" value="60">Curaçao</option>
                                                <option data-cvent-id="option-61" value="61">Cyprus</option>
                                                <option data-cvent-id="option-62" value="62">Czech Republic</option>
                                                <option data-cvent-id="option-63" value="63">Denmark</option>
                                                <option data-cvent-id="option-64" value="64">Djibouti</option>
                                                <option data-cvent-id="option-65" value="65">Dominica</option>
                                                <option data-cvent-id="option-66" value="66">Dominican Republic</option>
                                                <option data-cvent-id="option-67" value="67">Ecuador</option>
                                                <option data-cvent-id="option-68" value="68">Egypt</option>
                                                <option data-cvent-id="option-69" value="69">El Salvador</option>
                                                <option data-cvent-id="option-70" value="70">England</option>
                                                <option data-cvent-id="option-71" value="71">Equatorial Guinea</option>
                                                <option data-cvent-id="option-72" value="72">Eritrea</option>
                                                <option data-cvent-id="option-73" value="73">Estonia</option>
                                                <option data-cvent-id="option-74" value="74">Ethiopia</option>
                                                <option data-cvent-id="option-75" value="75">Falkland Islands (Malvinas)
                                                </option>
                                                <option data-cvent-id="option-76" value="76">Faroe Islands</option>
                                                <option data-cvent-id="option-77" value="77">Fiji</option>
                                                <option data-cvent-id="option-78" value="78">Finland</option>
                                                <option data-cvent-id="option-79" value="79">France</option>
                                                <option data-cvent-id="option-80" value="80">French Guiana</option>
                                                <option data-cvent-id="option-81" value="81">French Polynesia</option>
                                                <option data-cvent-id="option-82" value="82">French Southern Territories
                                                </option>
                                                <option data-cvent-id="option-83" value="83">Gabon</option>
                                                <option data-cvent-id="option-84" value="84">Gambia</option>
                                                <option data-cvent-id="option-85" value="85">Georgia</option>
                                                <option data-cvent-id="option-86" value="86">Germany</option>
                                                <option data-cvent-id="option-87" value="87">Ghana</option>
                                                <option data-cvent-id="option-88" value="88">Gibraltar</option>
                                                <option data-cvent-id="option-89" value="89">Greece</option>
                                                <option data-cvent-id="option-90" value="90">Greenland</option>
                                                <option data-cvent-id="option-91" value="91">Grenada</option>
                                                <option data-cvent-id="option-92" value="92">Guadeloupe</option>
                                                <option data-cvent-id="option-93" value="93">Guam</option>
                                                <option data-cvent-id="option-94" value="94">Guatemala</option>
                                                <option data-cvent-id="option-95" value="95">Guernsey</option>
                                                <option data-cvent-id="option-96" value="96">Guinea</option>
                                                <option data-cvent-id="option-97" value="97">Guinea-Bissau</option>
                                                <option data-cvent-id="option-98" value="98">Guyana</option>
                                                <option data-cvent-id="option-99" value="99">Haiti</option>
                                                <option data-cvent-id="option-100" value="100">Heard &amp; McDonald
                                                    Islands </option>
                                                <option data-cvent-id="option-101" value="101">Honduras</option>
                                                <option data-cvent-id="option-102" value="102">Hong Kong (SAR China)
                                                </option>
                                                <option data-cvent-id="option-103" value="103">Hungary</option>
                                                <option data-cvent-id="option-104" value="104">Iceland</option>
                                                <option data-cvent-id="option-105" value="105">India</option>
                                                <option data-cvent-id="option-106" value="106">Indonesia</option>
                                                <option data-cvent-id="option-107" value="107">Iran</option>
                                                <option data-cvent-id="option-108" value="108">Iraq</option>
                                                <option data-cvent-id="option-109" value="109">Ireland</option>
                                                <option data-cvent-id="option-110" value="110">Isle of Man</option>
                                                <option data-cvent-id="option-111" value="111">Israel</option>
                                                <option data-cvent-id="option-112" value="112">Italy</option>
                                                <option data-cvent-id="option-113" value="113">Jamaica</option>
                                                <option data-cvent-id="option-114" value="114">Japan</option>
                                                <option data-cvent-id="option-115" value="115">Jersey</option>
                                                <option data-cvent-id="option-116" value="116">Jordan</option>
                                                <option data-cvent-id="option-117" value="117">Kazakhstan</option>
                                                <option data-cvent-id="option-118" value="118">Kenya</option>
                                                <option data-cvent-id="option-119" value="119">Kiribati</option>
                                                <option data-cvent-id="option-120" value="120">Kosovo</option>
                                                <option data-cvent-id="option-121" value="121">Kuwait</option>
                                                <option data-cvent-id="option-122" value="122">Kyrgyzstan</option>
                                                <option data-cvent-id="option-123" value="123">Laos</option>
                                                <option data-cvent-id="option-124" value="124">Latvia</option>
                                                <option data-cvent-id="option-125" value="125">Lebanon</option>
                                                <option data-cvent-id="option-126" value="126">Lesotho</option>
                                                <option data-cvent-id="option-127" value="127">Liberia</option>
                                                <option data-cvent-id="option-128" value="128">Libya</option>
                                                <option data-cvent-id="option-129" value="129">Liechtenstein</option>
                                                <option data-cvent-id="option-130" value="130">Lithuania</option>
                                                <option data-cvent-id="option-131" value="131">Luxembourg</option>
                                                <option data-cvent-id="option-132" value="132">Macao (SAR China)
                                                </option>
                                                <option data-cvent-id="option-133" value="133">Madagascar</option>
                                                <option data-cvent-id="option-134" value="134">Malawi</option>
                                                <option data-cvent-id="option-135" value="135">Malaysia</option>
                                                <option data-cvent-id="option-136" value="136">Maldives</option>
                                                <option data-cvent-id="option-137" value="137">Mali</option>
                                                <option data-cvent-id="option-138" value="138">Malta</option>
                                                <option data-cvent-id="option-139" value="139">Marshall Islands</option>
                                                <option data-cvent-id="option-140" value="140">Martinique</option>
                                                <option data-cvent-id="option-141" value="141">Mauritania</option>
                                                <option data-cvent-id="option-142" value="142">Mauritius</option>
                                                <option data-cvent-id="option-143" value="143">Mayotte</option>
                                                <option data-cvent-id="option-144" value="144">Mexico</option>
                                                <option data-cvent-id="option-145" value="145">Micronesia</option>
                                                <option data-cvent-id="option-146" value="146">Moldova</option>
                                                <option data-cvent-id="option-147" value="147">Monaco</option>
                                                <option data-cvent-id="option-148" value="148">Mongolia</option>
                                                <option data-cvent-id="option-149" value="149">Montenegro</option>
                                                <option data-cvent-id="option-150" value="150">Montserrat</option>
                                                <option data-cvent-id="option-151" value="151">Morocco</option>
                                                <option data-cvent-id="option-152" value="152">Mozambique</option>
                                                <option data-cvent-id="option-153" value="153">Myanmar</option>
                                                <option data-cvent-id="option-154" value="154">Namibia</option>
                                                <option data-cvent-id="option-155" value="155">Nauru</option>
                                                <option data-cvent-id="option-156" value="156">Nepal</option>
                                                <option data-cvent-id="option-157" value="157">Netherlands</option>
                                                <option data-cvent-id="option-158" value="158">Netherlands Antilles
                                                </option>
                                                <option data-cvent-id="option-159" value="159">New Caledonia</option>
                                                <option data-cvent-id="option-160" value="160">New Zealand</option>
                                                <option data-cvent-id="option-161" value="161">Nicaragua</option>
                                                <option data-cvent-id="option-162" value="162">Niger</option>
                                                <option data-cvent-id="option-163" value="163">Nigeria</option>
                                                <option data-cvent-id="option-164" value="164">Niue</option>
                                                <option data-cvent-id="option-165" value="165">Norfolk Island</option>
                                                <option data-cvent-id="option-166" value="166">Northern Ireland</option>
                                                <option data-cvent-id="option-167" value="167">Northern Mariana Islands
                                                </option>
                                                <option data-cvent-id="option-168" value="168">North Korea</option>
                                                <option data-cvent-id="option-169" value="169">North Macedonia</option>
                                                <option data-cvent-id="option-170" value="170">Norway</option>
                                                <option data-cvent-id="option-171" value="171">Oman</option>
                                                <option data-cvent-id="option-172" value="172">Pakistan</option>
                                                <option data-cvent-id="option-173" value="173">Palau</option>
                                                <option data-cvent-id="option-174" value="174">Palestine, State of
                                                </option>
                                                <option data-cvent-id="option-175" value="175">Panama</option>
                                                <option data-cvent-id="option-176" value="176">Papua New Guinea</option>
                                                <option data-cvent-id="option-177" value="177">Paraguay</option>
                                                <option data-cvent-id="option-178" value="178">Peru</option>
                                                <option data-cvent-id="option-179" value="179">Philippines</option>
                                                <option data-cvent-id="option-180" value="180">Pitcairn</option>
                                                <option data-cvent-id="option-181" value="181">Poland</option>
                                                <option data-cvent-id="option-182" value="182">Portugal</option>
                                                <option data-cvent-id="option-183" value="183">Puerto Rico</option>
                                                <option data-cvent-id="option-184" value="184">Qatar</option>
                                                <option data-cvent-id="option-185" value="185">Republic of Korea
                                                </option>
                                                <option data-cvent-id="option-186" value="186">Reunion</option>
                                                <option data-cvent-id="option-187" value="187">Romania</option>
                                                <option data-cvent-id="option-188" value="188">Russian Federation
                                                </option>
                                                <option data-cvent-id="option-189" value="189">Rwanda</option>
                                                <option data-cvent-id="option-190" value="190">Saint Barthélemy</option>
                                                <option data-cvent-id="option-191" value="191">Saint Helena</option>
                                                <option data-cvent-id="option-192" value="192">Saint Kitts And Nevis
                                                </option>
                                                <option data-cvent-id="option-193" value="193">Saint Lucia</option>
                                                <option data-cvent-id="option-194" value="194">Saint Martin</option>
                                                <option data-cvent-id="option-195" value="195">Saint Pierre and Miquelon
                                                </option>
                                                <option data-cvent-id="option-196" value="196">Saint Vincent</option>
                                                <option data-cvent-id="option-197" value="197">Samoa</option>
                                                <option data-cvent-id="option-198" value="198">San Marino</option>
                                                <option data-cvent-id="option-199" value="199">Sao Tome and Principe
                                                </option>
                                                <option data-cvent-id="option-200" value="200">Saudi Arabia</option>
                                                <option data-cvent-id="option-201" value="201">Scotland</option>
                                                <option data-cvent-id="option-202" value="202">Senegal</option>
                                                <option data-cvent-id="option-203" value="203">Serbia</option>
                                                <option data-cvent-id="option-204" value="204">Seychelles</option>
                                                <option data-cvent-id="option-205" value="205">Sierra Leone</option>
                                                <option data-cvent-id="option-206" value="206">Singapore</option>
                                                <option data-cvent-id="option-207" value="207">Sint Maarten (Dutch part)
                                                </option>
                                                <option data-cvent-id="option-208" value="208">Slovakia</option>
                                                <option data-cvent-id="option-209" value="209">Slovenia</option>
                                                <option data-cvent-id="option-210" value="210">Solomon Islands</option>
                                                <option data-cvent-id="option-211" value="211">Somalia</option>
                                                <option data-cvent-id="option-212" value="212">South Africa</option>
                                                <option data-cvent-id="option-213" value="213">South Georgia and the
                                                    South Sandwich Islands</option>
                                                <option data-cvent-id="option-214" value="214">South Sudan</option>
                                                <option data-cvent-id="option-215" value="215">Spain</option>
                                                <option data-cvent-id="option-216" value="216">Sri Lanka</option>
                                                <option data-cvent-id="option-217" value="217">Sudan</option>
                                                <option data-cvent-id="option-218" value="218">Suriname</option>
                                                <option data-cvent-id="option-219" value="219">Svalbard And Jan Mayen
                                                </option>
                                                <option data-cvent-id="option-220" value="220">Swaziland</option>
                                                <option data-cvent-id="option-221" value="221">Sweden</option>
                                                <option data-cvent-id="option-222" value="222">Switzerland</option>
                                                <option data-cvent-id="option-223" value="223">Syria</option>
                                                <option data-cvent-id="option-224" value="224">Taiwan (Province of
                                                    China) </option>
                                                <option data-cvent-id="option-225" value="225">Tajikistan</option>
                                                <option data-cvent-id="option-226" value="226">Tanzania</option>
                                                <option data-cvent-id="option-227" value="227">Thailand</option>
                                                <option data-cvent-id="option-228" value="228">Timor-Leste</option>
                                                <option data-cvent-id="option-229" value="229">Togo</option>
                                                <option data-cvent-id="option-230" value="230">Tokelau</option>
                                                <option data-cvent-id="option-231" value="231">Tonga</option>
                                                <option data-cvent-id="option-232" value="232">Trinidad and Tobago
                                                </option>
                                                <option data-cvent-id="option-233" value="233">Tunisia</option>
                                                <option data-cvent-id="option-234" value="234">Turkey</option>
                                                <option data-cvent-id="option-235" value="235">Turkmenistan</option>
                                                <option data-cvent-id="option-236" value="236">Turks and Caicos Islands
                                                </option>
                                                <option data-cvent-id="option-237" value="237">Tuvalu</option>
                                                <option data-cvent-id="option-238" value="238">U.S. Virgin Islands
                                                </option>
                                                <option data-cvent-id="option-239" value="239">Uganda</option>
                                                <option data-cvent-id="option-240" value="240">Ukraine</option>
                                                <option data-cvent-id="option-241" value="241">United Arab Emirates
                                                </option>
                                                <option data-cvent-id="option-242" value="242">United Kingdom</option>
                                                <option data-cvent-id="option-243" value="243">United States Minor
                                                    Outlying Islands</option>
                                                <option data-cvent-id="option-244" value="244">Uruguay</option>
                                                <option data-cvent-id="option-245" value="245">Uzbekistan</option>
                                                <option data-cvent-id="option-246" value="246">Vanuatu</option>
                                                <option data-cvent-id="option-247" value="247">Vatican City State (Holy
                                                    See) </option>
                                                <option data-cvent-id="option-248" value="248">Venezuela</option>
                                                <option data-cvent-id="option-249" value="249">Vietnam</option>
                                                <option data-cvent-id="option-250" value="250">Wales</option>
                                                <option data-cvent-id="option-251" value="251">Wallis and Futuna
                                                </option>
                                                <option data-cvent-id="option-252" value="252">Western Sahara</option>
                                                <option data-cvent-id="option-253" value="253">Yemen</option>
                                                <option data-cvent-id="option-254" value="254">Zambia</option>
                                                <option data-cvent-id="option-255" value="255">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="check1" name="option1"
                                                value="something" checked>
                                            <label class="form-check-label">Create my free Cvent account using these
                                                details</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">RESPONSES</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">When do you need to hear from venues by?</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="radio-btn-wrapper">
                                            <label for="">How do you prefer to be contacted?</label>
                                            <select class="form-select" id="preferredContactMethods"
                                                name="preferredContactMethods">
                                                <option data-cvent-id="option-0" value="0">Phone</option>
                                                <option data-cvent-id="option-1" value="1">Email</option>
                                                <option data-cvent-id="option-2" value="2">Phone or email</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">SHARING</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                By checking this box, I agree to share the personal information provided
                                                on this RFP to the selected hotels. To learn more, read Cvent's
                                                <a href="javascript::">Privacy Policy</a> and <a
                                                    href="javascript:;">Terms of Use.</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <button type="button" id="gotoslide1prev" class="btn greybtn">Back</button>
                                <button type="button" id="gotoslide3" class="btn greenbtn ms-auto">Next</button>
                            </div>
                        </div>

                    </div>

                    <div class="tab d-none" id="tab3FFREWR">
                        <h2>
                            You're almost finished! Review the following details and then submit when you're ready to
                            send your request.
                        </h2>
                        <hr>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">SHARING</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="confirmation_content_wrapper">
                                            <p class="content_one____CSTELMS1">Bar or bat mitzvah</p>
                                            <p class="content_one____CSTELMS2">12/20/2023 — 12/20/2023</p>
                                            <p class="content_one____CSTELMS3">Event dates are flexible.</p>
                                            <p class="content_one____CSTELMS4">2 attendees per day</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" id="gotoslide1edit" class="btn greybtn">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-4">
                                <label for="inputPassword6" class="col-form-label left-label-cstelms">CONTACT
                                    DETAILS</label>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="confirmation_content_wrapper">
                                            <p class="content_one____CSTELMS_name">Lorem Ipsum</p>
                                            <p class="content_one____CSTELMS_email">testmail@gmail.com</p>
                                            <p class="content_one____CSTELMS_phone">+923 123 456 789</p>
                                            <p class="content_one____CSTELMS_location">Karachi, Pakistan</p>
                                            <p class="content_one____CSTELMS_message">Contact by email before Friday,
                                                December 15, 2023</p>
                                            <p class="content_one____CSTELMS_message">Creating Cvent account using
                                                contact details.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" id="gotoslide2edit" class="btn greybtn">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <ul class="details___privacypolicy__list">
                                    <li>
                                        <a href="javascript:;">Privacy Policy</a>
                                    </li>
                                    <li> | </li>
                                    <li>
                                        <a href="javascript:;">Your Privacy Choices</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <button type="button" id="gotoslide2prev" class="btn greybtn">Back</button>
                                <button type="button" id="gotoslide4" class="btn greenbtn ms-auto">Next</button>
                            </div>
                        </div>

                    </div>

                    <div class="tab d-none" id="tab4FFREWR">
                        <h2>
                            Congratulations! You sent your request to 2 venues. Don’t forget to check your email for
                            responses.
                        </h2>
                        <hr>
                        <div class="venue_card__cst___elms">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="assets/img/ven1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-9">
                                    <a href="javascript:;">Regent Plaza Hotel & Convention Centre Karachi</a>
                                    <p><i class="fa fa-map-pin"></i> Karachi, PK</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="venue_card__cst___elms">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="assets/img/ven1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-9">
                                    <a href="javascript:;">Regent Plaza Hotel & Convention Centre Karachi</a>
                                    <p><i class="fa fa-map-pin"></i> Karachi, PK</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="congratulations-message">
                            <h3>Want to make your next request even easier?</h3>
                            <p>Your account has been created. Please check your email to activate your Cvent account.
                            </p>
                            <ul>
                                <li><i class="fa fa-check"></i> View all your requests in one location</li>
                                <li><i class="fa fa-check"></i> Run reports to compare proposals side-by-side</li>
                                <li><i class="fa fa-check"></i> Add more venues to your request</li>
                                <li><i class="fa fa-check"></i> Track requests for multiple events</li>
                            </ul>
                        </div>


                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <button type="button" id="gotoslide3prev" class="btn greybtn">Back</button>
                                <button type="button" class="btn greenbtn ms-auto">Submit</button>
                            </div>
                        </div>

                    </div>

                </div>

            </form>
        </div>
    </section>


    <div class="agendascreenfixed_wrapper" id="agendascreenwarpperid">
        <div class="agendascreenheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Event Agenda Details</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="javascript:;" id="closeagendawrapper">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="accordion agendaaccordionsClass_wapper_pax" id="agendaaccordions">
                <h5>Build your event's agenda by adding agenda items.</h5>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="agendaheading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#agendaaccordparent1" aria-expanded="true"
                            aria-controls="agendaaccordparent1">
                            THURSDAY, DECEMBER 28
                            <br>
                            0 agenda items
                        </button>
                    </h2>
                    <div id="agendaaccordparent1" class="accordion-collapse collapse show"
                        aria-labelledby="agendaheading1" data-bs-parent="#agendaaccordions">
                        <div class="accordion-body">
                            <p>Try adding agenda items to get started!</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#agendaitemmodal1"> Add agenda item </button>
                            <!-- Modal -->
                            <div class="modal fade" id="agendaitemmodal1" tabindex="-1" aria-labelledby="agendaitemmodal1Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="agendaitemmodal1Label">Add agenda item</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label for="">Agenda item</label>
                                                        <select class="form-select">
                                                            <option data-cvent-id="option-0" value="0"></option>
                                                            <option value="1">Break</option>
                                                            <option value="2">Breakfast</option>
                                                            <option value="3">Breakout session</option>
                                                            <option value="4">Dinner</option>
                                                            <option value="5">Exhibit</option>
                                                            <option value="6">General session</option>
                                                            <option value="7">Hospitality desk</option>
                                                            <option value="8">Hospitality suite</option>
                                                            <option value="9">Lunch</option>
                                                            <option value="10">Meeting</option>
                                                            <option value="11">Office</option>
                                                            <option value="12">Reception</option>
                                                            <option value="13">Registration</option>
                                                            <option value="14">Setup</option>
                                                            <option value="15">Snack</option>
                                                            <option value="16">Speaker room</option>
                                                            <option value="17">Storage room</option>
                                                            <option value="18">Teardown</option>
                                                            <option value="19">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="">Start time</label>
                                                        <select class="form-select" id="startTime" name="startTime">
                                                            <option value="0"></option>
                                                            <option value="1">12:00 am</option>
                                                            <option value="2">12:15 am</option>
                                                            <option value="3">12:30 am</option>
                                                            <option value="4">12:45 am</option>
                                                            <option value="5">1:00 am</option>
                                                            <option value="6">1:15 am</option>
                                                            <option value="7">1:30 am</option>
                                                            <option value="8">1:45 am</option>
                                                            <option value="9">2:00 am</option>
                                                            <option value="10">2:15 am</option>
                                                            <option value="11">2:30 am</option>
                                                            <option value="12">2:45 am</option>
                                                            <option value="13">3:00 am</option>
                                                            <option value="14">3:15 am</option>
                                                            <option value="15">3:30 am</option>
                                                            <option value="16">3:45 am</option>
                                                            <option value="17">4:00 am</option>
                                                            <option value="18">4:15 am</option>
                                                            <option value="19">4:30 am</option>
                                                            <option value="20">4:45 am</option>
                                                            <option value="21">5:00 am</option>
                                                            <option value="22">5:15 am</option>
                                                            <option value="23">5:30 am</option>
                                                            <option value="24">5:45 am</option>
                                                            <option value="25">6:00 am</option>
                                                            <option value="26">6:15 am</option>
                                                            <option value="27">6:30 am</option>
                                                            <option value="28">6:45 am</option>
                                                            <option value="29">7:00 am</option>
                                                            <option value="30">7:15 am</option>
                                                            <option value="31">7:30 am</option>
                                                            <option value="32">7:45 am</option>
                                                            <option value="33">8:00 am</option>
                                                            <option value="34">8:15 am</option>
                                                            <option value="35">8:30 am</option>
                                                            <option value="36">8:45 am</option>
                                                            <option value="37">9:00 am</option>
                                                            <option value="38">9:15 am</option>
                                                            <option value="39">9:30 am</option>
                                                            <option value="40">9:45 am</option>
                                                            <option value="41">10:00 am</option>
                                                            <option value="42">10:15 am</option>
                                                            <option value="43">10:30 am</option>
                                                            <option value="44">10:45 am</option>
                                                            <option value="45">11:00 am</option>
                                                            <option value="46">11:15 am</option>
                                                            <option value="47">11:30 am</option>
                                                            <option value="48">11:45 am</option>
                                                            <option value="49">12:00 pm</option>
                                                            <option value="50">12:15 pm</option>
                                                            <option value="51">12:30 pm</option>
                                                            <option value="52">12:45 pm</option>
                                                            <option value="53">1:00 pm</option>
                                                            <option value="54">1:15 pm</option>
                                                            <option value="55">1:30 pm</option>
                                                            <option value="56">1:45 pm</option>
                                                            <option value="57">2:00 pm</option>
                                                            <option value="58">2:15 pm</option>
                                                            <option value="59">2:30 pm</option>
                                                            <option value="60">2:45 pm</option>
                                                            <option value="61">3:00 pm</option>
                                                            <option value="62">3:15 pm</option>
                                                            <option value="63">3:30 pm</option>
                                                            <option value="64">3:45 pm</option>
                                                            <option value="65">4:00 pm</option>
                                                            <option value="66">4:15 pm</option>
                                                            <option value="67">4:30 pm</option>
                                                            <option value="68">4:45 pm</option>
                                                            <option value="69">5:00 pm</option>
                                                            <option value="70">5:15 pm</option>
                                                            <option value="71">5:30 pm</option>
                                                            <option value="72">5:45 pm</option>
                                                            <option value="73">6:00 pm</option>
                                                            <option value="74">6:15 pm</option>
                                                            <option value="75">6:30 pm</option>
                                                            <option value="76">6:45 pm</option>
                                                            <option value="77">7:00 pm</option>
                                                            <option value="78">7:15 pm</option>
                                                            <option value="79">7:30 pm</option>
                                                            <option value="80">7:45 pm</option>
                                                            <option value="81">8:00 pm</option>
                                                            <option value="82">8:15 pm</option>
                                                            <option value="83">8:30 pm</option>
                                                            <option value="84">8:45 pm</option>
                                                            <option value="85">9:00 pm</option>
                                                            <option value="86">9:15 pm</option>
                                                            <option value="87">9:30 pm</option>
                                                            <option value="88">9:45 pm</option>
                                                            <option value="89">10:00 pm</option>
                                                            <option value="90">10:15 pm</option>
                                                            <option value="91">10:30 pm</option>
                                                            <option value="92">10:45 pm</option>
                                                            <option value="93">11:00 pm</option>
                                                            <option value="94">11:15 pm</option>
                                                            <option value="95">11:30 pm</option>
                                                            <option value="96">11:45 pm</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="">End time</label>
                                                        <select class="form-select" id="startTime" name="startTime">
                                                            <option value="0"></option>
                                                            <option value="1">12:00 am</option>
                                                            <option value="2">12:15 am</option>
                                                            <option value="3">12:30 am</option>
                                                            <option value="4">12:45 am</option>
                                                            <option value="5">1:00 am</option>
                                                            <option value="6">1:15 am</option>
                                                            <option value="7">1:30 am</option>
                                                            <option value="8">1:45 am</option>
                                                            <option value="9">2:00 am</option>
                                                            <option value="10">2:15 am</option>
                                                            <option value="11">2:30 am</option>
                                                            <option value="12">2:45 am</option>
                                                            <option value="13">3:00 am</option>
                                                            <option value="14">3:15 am</option>
                                                            <option value="15">3:30 am</option>
                                                            <option value="16">3:45 am</option>
                                                            <option value="17">4:00 am</option>
                                                            <option value="18">4:15 am</option>
                                                            <option value="19">4:30 am</option>
                                                            <option value="20">4:45 am</option>
                                                            <option value="21">5:00 am</option>
                                                            <option value="22">5:15 am</option>
                                                            <option value="23">5:30 am</option>
                                                            <option value="24">5:45 am</option>
                                                            <option value="25">6:00 am</option>
                                                            <option value="26">6:15 am</option>
                                                            <option value="27">6:30 am</option>
                                                            <option value="28">6:45 am</option>
                                                            <option value="29">7:00 am</option>
                                                            <option value="30">7:15 am</option>
                                                            <option value="31">7:30 am</option>
                                                            <option value="32">7:45 am</option>
                                                            <option value="33">8:00 am</option>
                                                            <option value="34">8:15 am</option>
                                                            <option value="35">8:30 am</option>
                                                            <option value="36">8:45 am</option>
                                                            <option value="37">9:00 am</option>
                                                            <option value="38">9:15 am</option>
                                                            <option value="39">9:30 am</option>
                                                            <option value="40">9:45 am</option>
                                                            <option value="41">10:00 am</option>
                                                            <option value="42">10:15 am</option>
                                                            <option value="43">10:30 am</option>
                                                            <option value="44">10:45 am</option>
                                                            <option value="45">11:00 am</option>
                                                            <option value="46">11:15 am</option>
                                                            <option value="47">11:30 am</option>
                                                            <option value="48">11:45 am</option>
                                                            <option value="49">12:00 pm</option>
                                                            <option value="50">12:15 pm</option>
                                                            <option value="51">12:30 pm</option>
                                                            <option value="52">12:45 pm</option>
                                                            <option value="53">1:00 pm</option>
                                                            <option value="54">1:15 pm</option>
                                                            <option value="55">1:30 pm</option>
                                                            <option value="56">1:45 pm</option>
                                                            <option value="57">2:00 pm</option>
                                                            <option value="58">2:15 pm</option>
                                                            <option value="59">2:30 pm</option>
                                                            <option value="60">2:45 pm</option>
                                                            <option value="61">3:00 pm</option>
                                                            <option value="62">3:15 pm</option>
                                                            <option value="63">3:30 pm</option>
                                                            <option value="64">3:45 pm</option>
                                                            <option value="65">4:00 pm</option>
                                                            <option value="66">4:15 pm</option>
                                                            <option value="67">4:30 pm</option>
                                                            <option value="68">4:45 pm</option>
                                                            <option value="69">5:00 pm</option>
                                                            <option value="70">5:15 pm</option>
                                                            <option value="71">5:30 pm</option>
                                                            <option value="72">5:45 pm</option>
                                                            <option value="73">6:00 pm</option>
                                                            <option value="74">6:15 pm</option>
                                                            <option value="75">6:30 pm</option>
                                                            <option value="76">6:45 pm</option>
                                                            <option value="77">7:00 pm</option>
                                                            <option value="78">7:15 pm</option>
                                                            <option value="79">7:30 pm</option>
                                                            <option value="80">7:45 pm</option>
                                                            <option value="81">8:00 pm</option>
                                                            <option value="82">8:15 pm</option>
                                                            <option value="83">8:30 pm</option>
                                                            <option value="84">8:45 pm</option>
                                                            <option value="85">9:00 pm</option>
                                                            <option value="86">9:15 pm</option>
                                                            <option value="87">9:30 pm</option>
                                                            <option value="88">9:45 pm</option>
                                                            <option value="89">10:00 pm</option>
                                                            <option value="90">10:15 pm</option>
                                                            <option value="91">10:30 pm</option>
                                                            <option value="92">10:45 pm</option>
                                                            <option value="93">11:00 pm</option>
                                                            <option value="94">11:15 pm</option>
                                                            <option value="95">11:30 pm</option>
                                                            <option value="96">11:45 pm</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="">Meeting room layouts</label>
                                                        <select class="form-select" id="setupType" name="setupType">
                                                            <option value="0"></option>
                                                            <option value="1">8' x 10' exhibit booth</option>
                                                            <option value="2">10' x 10' exhibit booth</option>
                                                            <option value="3">Buffet</option>
                                                            <option value="4">Cabaret</option>
                                                            <option value="5">Chevron</option>
                                                            <option value="6">Classroom </option>
                                                            <option value="7">Conference </option>
                                                            <option value="8">Crescent rounds (Cabaret)</option>
                                                            <option value="9">Flow</option>
                                                            <option value="10">Herringbone </option>
                                                            <option value="11">Hollow square </option>
                                                            <option value="12">Island</option>
                                                            <option value="13">Peninsula </option>
                                                            <option value="14">Plated</option>
                                                            <option value="15">Reception </option>
                                                            <option value="16">Rounds</option>
                                                            <option value="17">Rounds for 6 </option>
                                                            <option value="18">Rounds for 8 </option>
                                                            <option value="19">Rounds for 10 </option>
                                                            <option value="20">School room </option>
                                                            <option value="21">T-Shape </option>
                                                            <option value="22">Tabletop exhibit</option>
                                                            <option value="23">Theater </option>
                                                            <option value="24">U-Shape </option>
                                                            <option value="25">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="">Attendees</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="">Food and beverage</label>
                                                        <select class="form-select" id="foodAndBeverageSelection" name="foodAndBeverageSelection">
                                                            <option value="0">No meal specified </option>
                                                            <option value="1">Do you want to be contacted about food and beverage requirements?</option>
                                                            <option value="2">Buffet breakfast </option>
                                                            <option value="3">Continental breakfast</option>
                                                            <option value="4">Plated breakfast </option>
                                                            <option value="5">Break (Drinks only)</option>
                                                            <option value="6">Break (Snacks and drinks)</option>
                                                            <option value="7">Boxed lunch </option>
                                                            <option value="8">Buffet lunch </option>
                                                            <option value="9">Plated lunch </option>
                                                            <option value="10">Light appetizers</option>
                                                            <option value="11">Heavy appetizers</option>
                                                            <option value="12">Buffet dinner </option>
                                                            <option value="13">Plated dinner </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Default checkbox
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="button" class="btn greenbtn">Apply</button>
                                                        <button type="button" class="btn greybtn">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="agendaheading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#agendaaccordparent2" aria-expanded="false"
                            aria-controls="agendaaccordparent2">
                            THURSDAY, DECEMBER 28
                            <br>
                            0 agenda items
                        </button>
                    </h2>
                    <div id="agendaaccordparent2" class="accordion-collapse collapse" aria-labelledby="agendaheading1"
                        data-bs-parent="#agendaaccordions">
                        <div class="accordion-body">
                            <p>Try adding agenda items to get started!</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#agendaitemmodal2"> Add agenda item </button>
                            <!-- Modal -->
                            <div class="modal fade" id="agendaitemmodal2" tabindex="-1" aria-labelledby="agendaitemmodal2Label"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="agendaitemmodal2Label">Add agenda item</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <label for="">Agenda item</label>
                                                        <select class="form-select">
                                                            <option data-cvent-id="option-0" value="0"></option>
                                                            <option value="1">Break</option>
                                                            <option value="2">Breakfast</option>
                                                            <option value="3">Breakout session</option>
                                                            <option value="4">Dinner</option>
                                                            <option value="5">Exhibit</option>
                                                            <option value="6">General session</option>
                                                            <option value="7">Hospitality desk</option>
                                                            <option value="8">Hospitality suite</option>
                                                            <option value="9">Lunch</option>
                                                            <option value="10">Meeting</option>
                                                            <option value="11">Office</option>
                                                            <option value="12">Reception</option>
                                                            <option value="13">Registration</option>
                                                            <option value="14">Setup</option>
                                                            <option value="15">Snack</option>
                                                            <option value="16">Speaker room</option>
                                                            <option value="17">Storage room</option>
                                                            <option value="18">Teardown</option>
                                                            <option value="19">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="">Start time</label>
                                                        <select class="form-select" id="startTime" name="startTime">
                                                            <option value="0"></option>
                                                            <option value="1">12:00 am</option>
                                                            <option value="2">12:15 am</option>
                                                            <option value="3">12:30 am</option>
                                                            <option value="4">12:45 am</option>
                                                            <option value="5">1:00 am</option>
                                                            <option value="6">1:15 am</option>
                                                            <option value="7">1:30 am</option>
                                                            <option value="8">1:45 am</option>
                                                            <option value="9">2:00 am</option>
                                                            <option value="10">2:15 am</option>
                                                            <option value="11">2:30 am</option>
                                                            <option value="12">2:45 am</option>
                                                            <option value="13">3:00 am</option>
                                                            <option value="14">3:15 am</option>
                                                            <option value="15">3:30 am</option>
                                                            <option value="16">3:45 am</option>
                                                            <option value="17">4:00 am</option>
                                                            <option value="18">4:15 am</option>
                                                            <option value="19">4:30 am</option>
                                                            <option value="20">4:45 am</option>
                                                            <option value="21">5:00 am</option>
                                                            <option value="22">5:15 am</option>
                                                            <option value="23">5:30 am</option>
                                                            <option value="24">5:45 am</option>
                                                            <option value="25">6:00 am</option>
                                                            <option value="26">6:15 am</option>
                                                            <option value="27">6:30 am</option>
                                                            <option value="28">6:45 am</option>
                                                            <option value="29">7:00 am</option>
                                                            <option value="30">7:15 am</option>
                                                            <option value="31">7:30 am</option>
                                                            <option value="32">7:45 am</option>
                                                            <option value="33">8:00 am</option>
                                                            <option value="34">8:15 am</option>
                                                            <option value="35">8:30 am</option>
                                                            <option value="36">8:45 am</option>
                                                            <option value="37">9:00 am</option>
                                                            <option value="38">9:15 am</option>
                                                            <option value="39">9:30 am</option>
                                                            <option value="40">9:45 am</option>
                                                            <option value="41">10:00 am</option>
                                                            <option value="42">10:15 am</option>
                                                            <option value="43">10:30 am</option>
                                                            <option value="44">10:45 am</option>
                                                            <option value="45">11:00 am</option>
                                                            <option value="46">11:15 am</option>
                                                            <option value="47">11:30 am</option>
                                                            <option value="48">11:45 am</option>
                                                            <option value="49">12:00 pm</option>
                                                            <option value="50">12:15 pm</option>
                                                            <option value="51">12:30 pm</option>
                                                            <option value="52">12:45 pm</option>
                                                            <option value="53">1:00 pm</option>
                                                            <option value="54">1:15 pm</option>
                                                            <option value="55">1:30 pm</option>
                                                            <option value="56">1:45 pm</option>
                                                            <option value="57">2:00 pm</option>
                                                            <option value="58">2:15 pm</option>
                                                            <option value="59">2:30 pm</option>
                                                            <option value="60">2:45 pm</option>
                                                            <option value="61">3:00 pm</option>
                                                            <option value="62">3:15 pm</option>
                                                            <option value="63">3:30 pm</option>
                                                            <option value="64">3:45 pm</option>
                                                            <option value="65">4:00 pm</option>
                                                            <option value="66">4:15 pm</option>
                                                            <option value="67">4:30 pm</option>
                                                            <option value="68">4:45 pm</option>
                                                            <option value="69">5:00 pm</option>
                                                            <option value="70">5:15 pm</option>
                                                            <option value="71">5:30 pm</option>
                                                            <option value="72">5:45 pm</option>
                                                            <option value="73">6:00 pm</option>
                                                            <option value="74">6:15 pm</option>
                                                            <option value="75">6:30 pm</option>
                                                            <option value="76">6:45 pm</option>
                                                            <option value="77">7:00 pm</option>
                                                            <option value="78">7:15 pm</option>
                                                            <option value="79">7:30 pm</option>
                                                            <option value="80">7:45 pm</option>
                                                            <option value="81">8:00 pm</option>
                                                            <option value="82">8:15 pm</option>
                                                            <option value="83">8:30 pm</option>
                                                            <option value="84">8:45 pm</option>
                                                            <option value="85">9:00 pm</option>
                                                            <option value="86">9:15 pm</option>
                                                            <option value="87">9:30 pm</option>
                                                            <option value="88">9:45 pm</option>
                                                            <option value="89">10:00 pm</option>
                                                            <option value="90">10:15 pm</option>
                                                            <option value="91">10:30 pm</option>
                                                            <option value="92">10:45 pm</option>
                                                            <option value="93">11:00 pm</option>
                                                            <option value="94">11:15 pm</option>
                                                            <option value="95">11:30 pm</option>
                                                            <option value="96">11:45 pm</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <label for="">End time</label>
                                                        <select class="form-select" id="startTime" name="startTime">
                                                            <option value="0"></option>
                                                            <option value="1">12:00 am</option>
                                                            <option value="2">12:15 am</option>
                                                            <option value="3">12:30 am</option>
                                                            <option value="4">12:45 am</option>
                                                            <option value="5">1:00 am</option>
                                                            <option value="6">1:15 am</option>
                                                            <option value="7">1:30 am</option>
                                                            <option value="8">1:45 am</option>
                                                            <option value="9">2:00 am</option>
                                                            <option value="10">2:15 am</option>
                                                            <option value="11">2:30 am</option>
                                                            <option value="12">2:45 am</option>
                                                            <option value="13">3:00 am</option>
                                                            <option value="14">3:15 am</option>
                                                            <option value="15">3:30 am</option>
                                                            <option value="16">3:45 am</option>
                                                            <option value="17">4:00 am</option>
                                                            <option value="18">4:15 am</option>
                                                            <option value="19">4:30 am</option>
                                                            <option value="20">4:45 am</option>
                                                            <option value="21">5:00 am</option>
                                                            <option value="22">5:15 am</option>
                                                            <option value="23">5:30 am</option>
                                                            <option value="24">5:45 am</option>
                                                            <option value="25">6:00 am</option>
                                                            <option value="26">6:15 am</option>
                                                            <option value="27">6:30 am</option>
                                                            <option value="28">6:45 am</option>
                                                            <option value="29">7:00 am</option>
                                                            <option value="30">7:15 am</option>
                                                            <option value="31">7:30 am</option>
                                                            <option value="32">7:45 am</option>
                                                            <option value="33">8:00 am</option>
                                                            <option value="34">8:15 am</option>
                                                            <option value="35">8:30 am</option>
                                                            <option value="36">8:45 am</option>
                                                            <option value="37">9:00 am</option>
                                                            <option value="38">9:15 am</option>
                                                            <option value="39">9:30 am</option>
                                                            <option value="40">9:45 am</option>
                                                            <option value="41">10:00 am</option>
                                                            <option value="42">10:15 am</option>
                                                            <option value="43">10:30 am</option>
                                                            <option value="44">10:45 am</option>
                                                            <option value="45">11:00 am</option>
                                                            <option value="46">11:15 am</option>
                                                            <option value="47">11:30 am</option>
                                                            <option value="48">11:45 am</option>
                                                            <option value="49">12:00 pm</option>
                                                            <option value="50">12:15 pm</option>
                                                            <option value="51">12:30 pm</option>
                                                            <option value="52">12:45 pm</option>
                                                            <option value="53">1:00 pm</option>
                                                            <option value="54">1:15 pm</option>
                                                            <option value="55">1:30 pm</option>
                                                            <option value="56">1:45 pm</option>
                                                            <option value="57">2:00 pm</option>
                                                            <option value="58">2:15 pm</option>
                                                            <option value="59">2:30 pm</option>
                                                            <option value="60">2:45 pm</option>
                                                            <option value="61">3:00 pm</option>
                                                            <option value="62">3:15 pm</option>
                                                            <option value="63">3:30 pm</option>
                                                            <option value="64">3:45 pm</option>
                                                            <option value="65">4:00 pm</option>
                                                            <option value="66">4:15 pm</option>
                                                            <option value="67">4:30 pm</option>
                                                            <option value="68">4:45 pm</option>
                                                            <option value="69">5:00 pm</option>
                                                            <option value="70">5:15 pm</option>
                                                            <option value="71">5:30 pm</option>
                                                            <option value="72">5:45 pm</option>
                                                            <option value="73">6:00 pm</option>
                                                            <option value="74">6:15 pm</option>
                                                            <option value="75">6:30 pm</option>
                                                            <option value="76">6:45 pm</option>
                                                            <option value="77">7:00 pm</option>
                                                            <option value="78">7:15 pm</option>
                                                            <option value="79">7:30 pm</option>
                                                            <option value="80">7:45 pm</option>
                                                            <option value="81">8:00 pm</option>
                                                            <option value="82">8:15 pm</option>
                                                            <option value="83">8:30 pm</option>
                                                            <option value="84">8:45 pm</option>
                                                            <option value="85">9:00 pm</option>
                                                            <option value="86">9:15 pm</option>
                                                            <option value="87">9:30 pm</option>
                                                            <option value="88">9:45 pm</option>
                                                            <option value="89">10:00 pm</option>
                                                            <option value="90">10:15 pm</option>
                                                            <option value="91">10:30 pm</option>
                                                            <option value="92">10:45 pm</option>
                                                            <option value="93">11:00 pm</option>
                                                            <option value="94">11:15 pm</option>
                                                            <option value="95">11:30 pm</option>
                                                            <option value="96">11:45 pm</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="">Meeting room layouts</label>
                                                        <select class="form-select" id="setupType" name="setupType">
                                                            <option value="0"></option>
                                                            <option value="1">8' x 10' exhibit booth</option>
                                                            <option value="2">10' x 10' exhibit booth</option>
                                                            <option value="3">Buffet</option>
                                                            <option value="4">Cabaret</option>
                                                            <option value="5">Chevron</option>
                                                            <option value="6">Classroom </option>
                                                            <option value="7">Conference </option>
                                                            <option value="8">Crescent rounds (Cabaret)</option>
                                                            <option value="9">Flow</option>
                                                            <option value="10">Herringbone </option>
                                                            <option value="11">Hollow square </option>
                                                            <option value="12">Island</option>
                                                            <option value="13">Peninsula </option>
                                                            <option value="14">Plated</option>
                                                            <option value="15">Reception </option>
                                                            <option value="16">Rounds</option>
                                                            <option value="17">Rounds for 6 </option>
                                                            <option value="18">Rounds for 8 </option>
                                                            <option value="19">Rounds for 10 </option>
                                                            <option value="20">School room </option>
                                                            <option value="21">T-Shape </option>
                                                            <option value="22">Tabletop exhibit</option>
                                                            <option value="23">Theater </option>
                                                            <option value="24">U-Shape </option>
                                                            <option value="25">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="">Attendees</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <label for="">Food and beverage</label>
                                                        <select class="form-select" id="foodAndBeverageSelection" name="foodAndBeverageSelection">
                                                            <option value="0">No meal specified </option>
                                                            <option value="1">Do you want to be contacted about food and beverage requirements?</option>
                                                            <option value="2">Buffet breakfast </option>
                                                            <option value="3">Continental breakfast</option>
                                                            <option value="4">Plated breakfast </option>
                                                            <option value="5">Break (Drinks only)</option>
                                                            <option value="6">Break (Snacks and drinks)</option>
                                                            <option value="7">Boxed lunch </option>
                                                            <option value="8">Buffet lunch </option>
                                                            <option value="9">Plated lunch </option>
                                                            <option value="10">Light appetizers</option>
                                                            <option value="11">Heavy appetizers</option>
                                                            <option value="12">Buffet dinner </option>
                                                            <option value="13">Plated dinner </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                Default checkbox
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="button" class="btn greenbtn">Apply</button>
                                                        <button type="button" class="btn greybtn">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

<script>
    $('#agendascreenfixedID').on('click', function () {
        $('#agendascreenwarpperid').css('display', 'block');
        $('body').css('overflow-y','hidden');
    });

    $('#closeagendawrapper').on('click', function () {
        $('#agendascreenwarpperid').css('display', 'none');
        $('body').css('overflow-y','scroll');
    });

    $('#gotoslide2').on('click', function () {
        $('#tab-pillsFREW1').addClass('active');
        $('#tab-pillsFREW2').addClass('active');
        $('#tab-pillsFREW3').removeClass('active');
        $('#tab-pillsFREW4').removeClass('active');

        $('#tab1FFREWR').addClass('d-none');
        $('#tab3FFREWR').addClass('d-none');
        $('#tab4FFREWR').addClass('d-none');
        $('#tab2FFREWR').removeClass('d-none');

    });

    $('#gotoslide1prev').on('click', function () {
        $('#tab-pillsFREW1').addClass('active');
        $('#tab-pillsFREW2').removeClass('active');
        $('#tab-pillsFREW3').removeClass('active');
        $('#tab-pillsFREW4').removeClass('active');

        $('#tab2FFREWR').addClass('d-none');
        $('#tab3FFREWR').addClass('d-none');
        $('#tab4FFREWR').addClass('d-none');
        $('#tab1FFREWR').removeClass('d-none');

    });

    $('#gotoslide1edit').on('click', function () {
        $('#tab-pillsFREW1').addClass('active');
        $('#tab-pillsFREW2').removeClass('active');
        $('#tab-pillsFREW3').removeClass('active');
        $('#tab-pillsFREW4').removeClass('active');

        $('#tab2FFREWR').addClass('d-none');
        $('#tab3FFREWR').addClass('d-none');
        $('#tab4FFREWR').addClass('d-none');
        $('#tab1FFREWR').removeClass('d-none');

    });

    $('#gotoslide3').on('click', function () {
        $('#tab-pillsFREW1').addClass('active');
        $('#tab-pillsFREW2').addClass('active');
        $('#tab-pillsFREW3').addClass('active');
        $('#tab-pillsFREW4').removeClass('active');

        $('#tab2FFREWR').addClass('d-none');
        $('#tab1FFREWR').addClass('d-none');
        $('#tab4FFREWR').addClass('d-none');
        $('#tab3FFREWR').removeClass('d-none');

    });

    $('#gotoslide2prev').on('click', function () {
        $('#tab-pillsFREW1').addClass('active');
        $('#tab-pillsFREW2').addClass('active');
        $('#tab-pillsFREW3').removeClass('active');
        $('#tab-pillsFREW4').removeClass('active');

        $('#tab1FFREWR').addClass('d-none');
        $('#tab3FFREWR').addClass('d-none');
        $('#tab4FFREWR').addClass('d-none');
        $('#tab2FFREWR').removeClass('d-none');

    });

    $('#gotoslide2edit').on('click', function () {
        $('#tab-pillsFREW1').addClass('active');
        $('#tab-pillsFREW2').addClass('active');
        $('#tab-pillsFREW3').removeClass('active');
        $('#tab-pillsFREW4').removeClass('active');

        $('#tab1FFREWR').addClass('d-none');
        $('#tab3FFREWR').addClass('d-none');
        $('#tab4FFREWR').addClass('d-none');
        $('#tab2FFREWR').removeClass('d-none');

    });


    $('#gotoslide4').on('click', function () {
        $('#tab-pillsFREW1').addClass('active');
        $('#tab-pillsFREW2').addClass('active');
        $('#tab-pillsFREW3').addClass('active');
        $('#tab-pillsFREW4').addClass('active');

        $('#tab2FFREWR').addClass('d-none');
        $('#tab1FFREWR').addClass('d-none');
        $('#tab3FFREWR').addClass('d-none');
        $('#tab4FFREWR').removeClass('d-none');

    });

    $('#gotoslide3prev').on('click', function () {
        $('#tab-pillsFREW1').addClass('active');
        $('#tab-pillsFREW2').addClass('active');
        $('#tab-pillsFREW3').addClass('active');
        $('#tab-pillsFREW4').removeClass('active');

        $('#tab1FFREWR').addClass('d-none');
        $('#tab2FFREWR').addClass('d-none');
        $('#tab4FFREWR').addClass('d-none');
        $('#tab3FFREWR').removeClass('d-none');

    });
</script>
@endsection