@extends('front.layouts.app')
@section('css')
@endsection

@section('content')
@if(str_contains(url()->current(), 'supplier-request'))
    @include('front.layouts.header')
@endif
<section class="requestform-section__wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-5">
                    <form method="POST" action="{{ url('submit-supplier-request') }}" id="myForm">
                        @csrf
                        <h5 class="card-header">New Supplier Information</h5>
                        <div class="card-body">
                            <div class="form-parent">
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword1" class="col-sm-2 col-form-label">* Supplier Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="supplier_name" id="inputPassword1" placeholder="Supplier Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword2" class="col-sm-2 col-form-label">Phone Number:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="supplier_phone" id="inputPassword2" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Address 1:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="supplier_address1" id="inputPassword3" placeholder="Address 1">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword4" class="col-sm-2 col-form-label">Address 3:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="supplier_address2" id="inputPassword4" placeholder="Address 3">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword5" class="col-sm-2 col-form-label">State:</label>
                                        <div class="col-sm-10">
                                            <select name="supplier_state" class="form-select">
                                                <option selected="selected" value=""></option>
                                                <optgroup label="-- United States --">
                                                </optgroup><option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                                <optgroup label="-- U.S. Territories --">
                                                </optgroup><option value="AS">American Samoa</option>
                                                <option value="GU">Guam</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="FM">Micronesia</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="PW">Palau</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="VI">Virgin Islands</option>
                                                <optgroup label="-- U.S. Armed Forces --">
                                                </optgroup><option value="AA">Armed Forces Americas</option>
                                                <option value="AE">Armed Forces Europe</option>
                                                <option value="AP">Armed Forces Pacific</option>
                                                <optgroup label="-- Canada --">
                                                </optgroup><option value="AB">Alberta</option>
                                                <option value="BC">British Columbia</option>
                                                <option value="MB">Manitoba</option>
                                                <option value="NB">New Brunswick</option>
                                                <option value="NL">Newfoundland and Labrador</option>
                                                <option value="NT">Northwest Territories</option>
                                                <option value="NS">Nova Scotia</option>
                                                <option value="NU">Nunavut</option>
                                                <option value="ON">Ontario</option>
                                                <option value="PE">Prince Edward Island</option>
                                                <option value="QC">Québec</option>
                                                <option value="SK">Saskatchewan</option>
                                                <option value="YT">Yukon</option>
                                                <optgroup label="-- England --">
                                                </optgroup><option value="BNE">Barnet</option>
                                                <option value="BNS">Barnsley</option>
                                                <option value="BAS">Bath and NE Somerset</option>
                                                <option value="BDF">Bedfordshire</option>
                                                <option value="BRK">Berkshire</option>
                                                <option value="BEX">Bexley</option>
                                                <option value="BIR">Birmingham</option>
                                                <option value="BBD">Blackburn with Darwen</option>
                                                <option value="BPL">Blackpool</option>
                                                <option value="BOL">Bolton</option>
                                                <option value="BMH">Bournemouth</option>
                                                <option value="BRC">Bracknell Forest</option>
                                                <option value="BRD">Bradford</option>
                                                <option value="BEN">Brent</option>
                                                <option value="BNH">Brighton and Hove</option>
                                                <option value="BST">Bristol, City of</option>
                                                <option value="BRY">Bromley</option>
                                                <option value="BKM">Buckinghamshire</option>
                                                <option value="BUR">Bury</option>
                                                <option value="CLD">Calderdale</option>
                                                <option value="CAM">Cambridgeshire</option>
                                                <option value="CMD">Camden</option>
                                                <option value="CHI">Channel Isles</option>
                                                <option value="CHS">Cheshire</option>
                                                <option value="CON">Cornwall</option>
                                                <option value="COV">Coventry</option>
                                                <option value="CRY">Croydon</option>
                                                <option value="CMA">Cumbria</option>
                                                <option value="DAL">Darlington</option>
                                                <option value="DER">Derby</option>
                                                <option value="DBY">Derbyshire</option>
                                                <option value="DEV">Devon</option>
                                                <option value="DNC">Doncaster</option>
                                                <option value="DOR">Dorset</option>
                                                <option value="DUD">Dudley</option>
                                                <option value="DUR">Durham</option>
                                                <option value="EAL">Ealing</option>
                                                <option value="ERY">East Riding of Yorkshire</option>
                                                <option value="ESX">East Sussex</option>
                                                <option value="ENF">Enfield</option>
                                                <option value="ESS">Essex</option>
                                                <option value="GAT">Gateshead</option>
                                                <option value="GLS">Gloucestershire</option>
                                                <option value="GLN">Greater London</option>
                                                <option value="GTM">Greater Manchester</option>
                                                <option value="GRE">Greenwich</option>
                                                <option value="HCK">Hackney</option>
                                                <option value="HAL">Halton</option>
                                                <option value="HMF">Hammersmith and Fulham</option>
                                                <option value="HAM">Hampshire</option>
                                                <option value="HRY">Haringey</option>
                                                <option value="HRW">Harrow</option>
                                                <option value="HPL">Hartlepool</option>
                                                <option value="HAV">Havering</option>
                                                <option value="HEF">Herefordshire,County of</option>
                                                <option value="HRT">Hertfordshire</option>
                                                <option value="HIL">Hillingdon</option>
                                                <option value="HNS">Hounslow</option>
                                                <option value="IOM">Isle of Man</option>
                                                <option value="IOW">Isle of Wight</option>
                                                <option value="IOS">Isles of Scilly</option>
                                                <option value="ISL">Islington</option>
                                                <option value="KEC">Kensington and Chelsea</option>
                                                <option value="KEN">Kent</option>
                                                <option value="KHL">Kingston upon Hull,City of</option>
                                                <option value="KTT">Kingston upon Thames</option>
                                                <option value="KIR">Kirklees</option>
                                                <option value="KWL">Knowsley</option>
                                                <option value="LBH">Lambeth</option>
                                                <option value="LAN">Lancashire</option>
                                                <option value="LDS">Leeds</option>
                                                <option value="LCE">Leicester</option>
                                                <option value="LEC">Leicestershire</option>
                                                <option value="LEW">Lewisham</option>
                                                <option value="LIN">Lincolnshire</option>
                                                <option value="LIV">Liverpool</option>
                                                <option value="LND">London,City of</option>
                                                <option value="LUT">Luton</option>
                                                <option value="MAN">Manchester</option>
                                                <option value="MDW">Medway</option>
                                                <option value="MSY">Merseyside</option>
                                                <option value="MRT">Merton</option>
                                                <option value="MDB">Middlesbrough</option>
                                                <option value="MDS">Middlesex</option>
                                                <option value="MIK">Milton Keynes</option>
                                                <option value="GB-">ND Sunderland</option>
                                                <option value="NET">Newcastle upon Tyne</option>
                                                <option value="NWM">Newham</option>
                                                <option value="NFK">Norfolk</option>
                                                <option value="NEL">North East Lincolnshire</option>
                                                <option value="NLN">North Lincolnshire</option>
                                                <option value="NRY">North Riding of Yorkshire</option>
                                                <option value="NSM">North Somerset</option>
                                                <option value="NTY">North Tyneside</option>
                                                <option value="NYK">North Yorkshire</option>
                                                <option value="NTH">Northamptonshire</option>
                                                <option value="NBL">Northumberland</option>
                                                <option value="NGM">Nottingham</option>
                                                <option value="NTT">Nottinghamshire</option>
                                                <option value="OLD">Oldham</option>
                                                <option value="OXF">Oxfordshire</option>
                                                <option value="PTE">Peterborough</option>
                                                <option value="PLY">Plymouth, England</option>
                                                <option value="POL">Poole</option>
                                                <option value="POR">Portsmouth</option>
                                                <option value="RDG">Reading</option>
                                                <option value="RDB">Redbridge</option>
                                                <option value="RCC">Redcar and Cleveland</option>
                                                <option value="RIC">Richmond upon Thames</option>
                                                <option value="RCH">Rochdale</option>
                                                <option value="ROT">Rotherham</option>
                                                <option value="RUT">Rutland</option>
                                                <option value="SLF">Salford</option>
                                                <option value="SAW">Sandwell</option>
                                                <option value="SFT">Sefton</option>
                                                <option value="SHF">Sheffield</option>
                                                <option value="SHR">Shropshire</option>
                                                <option value="SLG">Slough</option>
                                                <option value="SOL">Solihull</option>
                                                <option value="SOM">Somerset</option>
                                                <option value="SGC">South Gloucestershire</option>
                                                <option value="STY">South Tyneside</option>
                                                <option value="SYK">South Yorkshire</option>
                                                <option value="STH">Southampton</option>
                                                <option value="SOS">Southend-on-Sea</option>
                                                <option value="SWK">Southwark</option>
                                                <option value="SHN">St Helens</option>
                                                <option value="STS">Staffordshire</option>
                                                <option value="SKP">Stockport</option>
                                                <option value="STT">Stockton-on-Tees</option>
                                                <option value="STE">Stoke-on-Trent</option>
                                                <option value="SFK">Suffolk</option>
                                                <option value="SRY">Surrey</option>
                                                <option value="STN">Sutton</option>
                                                <option value="SWD">Swindon</option>
                                                <option value="TAM">Tameside</option>
                                                <option value="TFW">Telford and wrekin</option>
                                                <option value="THR">Thurrock</option>
                                                <option value="TOB">Torbay</option>
                                                <option value="TWH">Tower Hamlets</option>
                                                <option value="TRF">Trafford</option>
                                                <option value="TWR">Tyne and Wear</option>
                                                <option value="WKF">Wakefield</option>
                                                <option value="WLL">Walsall</option>
                                                <option value="WFT">Waltham Forest</option>
                                                <option value="WND">Wandsworth</option>
                                                <option value="WRT">Warrington</option>
                                                <option value="WAR">Warwickshire</option>
                                                <option value="WBK">West Berkshire</option>
                                                <option value="WMD">West Midlands</option>
                                                <option value="WSX">West Sussex</option>
                                                <option value="WYK">West Yorkshire</option>
                                                <option value="WSM">Westminster</option>
                                                <option value="WGN">Wigan</option>
                                                <option value="WIL">Wiltshire</option>
                                                <option value="WNM">Windsor and Maidenhead</option>
                                                <option value="WRL">Wirral</option>
                                                <option value="WOK">Wokingham</option>
                                                <option value="WLV">Wolverhampton</option>
                                                <option value="WOR">Worcestershire</option>
                                                <option value="YOR">York</option>
                                                <optgroup label="-- Scotland --">
                                                </optgroup><option value="ABE">Aberdeen</option>
                                                <option value="ABD">Aberdeenshire</option>
                                                <option value="ANS">Angus</option>
                                                <option value="AGB">Argyll and Bute</option>
                                                <option value="BAN">Banffshire</option>
                                                <option value="CLK">Clackmannanshire</option>
                                                <option value="DGY">Dumfries and Galloway</option>
                                                <option value="DND">Dundee City</option>
                                                <option value="EAY">East Ayrshire</option>
                                                <option value="EDU">East Dunbartonshire</option>
                                                <option value="ELN">East Lothian</option>
                                                <option value="ERW">East Renfrewshire</option>
                                                <option value="EDH">Edinburgh</option>
                                                <option value="ELS">Eilean Siar</option>
                                                <option value="FAL">Falkirk</option>
                                                <option value="FIF">Fife</option>
                                                <option value="GLG">Glasgow</option>
                                                <option value="HLD">Highland</option>
                                                <option value="IVK">Inverclyde</option>
                                                <option value="IOA">Isle of Arran</option>
                                                <option value="IOI">Isle of Islay</option>
                                                <option value="IOL">Isle of Lewis</option>
                                                <option value="IOY">Isle of Skye</option>
                                                <option value="MLN">Midlothian</option>
                                                <option value="MRY">Moray</option>
                                                <option value="NAY">North Ayrshire</option>
                                                <option value="NLK">North Lanarkshire</option>
                                                <option value="ORK">Orkney Islands</option>
                                                <option value="PKN">Perth and Kinross</option>
                                                <option value="RFW">Renfrewshire</option>
                                                <option value="SCB">Scottish Borders, The</option>
                                                <option value="ZET">Shetland Islands</option>
                                                <option value="SAY">South Ayrshire</option>
                                                <option value="SLK">South Lanarkshire</option>
                                                <option value="STG">Stirling</option>
                                                <option value="WDU">West Dunbartonshire</option>
                                                <option value="WLN">West Lothian</option>
                                                <option value="WIS">Western Isles</option>
                                                <optgroup label="-- Northern Ireland --">
                                                </optgroup><option value="ANT">Antrim</option>
                                                <option value="ARD">Ards</option>
                                                <option value="ARM">Armagh</option>
                                                <option value="BLA">Ballymena</option>
                                                <option value="BLY">Ballymoney</option>
                                                <option value="BNB">Banbridge</option>
                                                <option value="BFS">Belfast</option>
                                                <option value="CKF">Carrickfergus</option>
                                                <option value="CSR">Castlereagh</option>
                                                <option value="CLR">Coleraine</option>
                                                <option value="CKT">Cookstown</option>
                                                <option value="CGV">Craigavon</option>
                                                <option value="DRY">Derry</option>
                                                <option value="DOW">Down</option>
                                                <option value="DGN">Dungannon</option>
                                                <option value="FER">Fermanagh</option>
                                                <option value="LRN">Larne</option>
                                                <option value="LMV">Limavady</option>
                                                <option value="LSB">Lisburn</option>
                                                <option value="MFT">Magherafelt</option>
                                                <option value="MYL">Moyle</option>
                                                <option value="NYM">Newry and Mourne</option>
                                                <option value="NTA">Newtownabbey</option>
                                                <option value="NDN">North Down NIR</option>
                                                <option value="OMH">Omagh</option>
                                                <option value="STB">Strabane</option>
                                                <option value="TYR">Tyrone</option>
                                                <optgroup label="-- Wales --">
                                                </optgroup><option value="AGY">Anglesey</option>
                                                <option value="BGW">Blaenau Gwent</option>
                                                <option value="BGE">Bridgend</option>
                                                <option value="CAY">Caerphilly</option>
                                                <option value="CRF">Cardiff</option>
                                                <option value="CMN">Carmarthenshire</option>
                                                <option value="CGN">Ceredigion</option>
                                                <option value="CWD">Clwyd</option>
                                                <option value="CWY">Conwy</option>
                                                <option value="DEN">Denbighshire</option>
                                                <option value="FLN">Flintshire</option>
                                                <option value="GWN">Gwynedd</option>
                                                <option value="MTY">Merthyr Tydfil</option>
                                                <option value="MGM">Mid Glamorgan</option>
                                                <option value="MON">Monmouthshire</option>
                                                <option value="NTL">Neath Port Talbot</option>
                                                <option value="NWP">Newport</option>
                                                <option value="PEM">Pembrokeshire</option>
                                                <option value="POW">Powys</option>
                                                <option value="RCT">Rhondda Cynon Taf</option>
                                                <option value="SGM">South Glamorgan</option>
                                                <option value="SWA">Swansea</option>
                                                <option value="TOF">Torfaen</option>
                                                <option value="VGL">Vale of Glamorgan</option>
                                                <option value="WGM">West Glamorgan</option>
                                                <option value="WRX">Wrexham</option>
                                                <optgroup label="-- Australia --">
                                                </optgroup><option value="ACT(AUS)">Australian Capital Territory</option>
                                                <option value="NSW(AUS)">New South Wales</option>
                                                <option value="NT(AUS)">Northern Territory</option>
                                                <option value="QLD(AUS)">Queensland</option>
                                                <option value="SA(AUS)">South Australia</option>
                                                <option value="TAS(AUS)">Tasmania</option>
                                                <option value="VIC(AUS)">Victoria</option>
                                                <option value="WA(AUS)">Western Australia</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword6" class="col-sm-2 col-form-label">* City:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword6" placeholder="City" name="supplier_city" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword7" class="col-sm-2 col-form-label">ZIP/Postal Code:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword7" placeholder="ZIP/Postal Code" name="supplier_zip">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword8" class="col-sm-2 col-form-label">* Country:</label>
                                        <div class="col-sm-10">
                                            <select name="supplier_country" id="ddlSupplierCountryCode" class="form-select" required>
                                                <option value=""></option>
                                                <option value="US">USA</option>
                                                <option value="CA">Canada</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Aland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Terr.</option>
                                                <option value="VG">British Virgin Islands</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CD">Congo (Democratic Republic)</option>
                                                <option value="CG">Congo (Republic)</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Cote d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GB1">England</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard &amp; McDonald Islands</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong (SAR China)</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="XK">Kosovo</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao (SAR China)</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia</option>
                                                <option value="MD">Moldova</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="KP">North Korea</option>
                                                <option value="MK">North Macedonia</option>
                                                <option value="GB4">Northern Ireland</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestine, State of</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="KR">Republic of Korea</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="KN">Saint Kitts And Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="GB2">Scotland</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten(Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard And Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syria</option>
                                                <option value="TW">Taiwan (Province of China)</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="VI">U.S. Virgin Islands</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vatican City State (Holy See)</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="GB3">Wales</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword9" class="col-sm-2 col-form-label">Additional Information:</label>
                                        <div class="col-sm-10">
                                            <textarea name="supplier_info" cols="20" rows="5" class="form-control" placeholder="Additional Information"></textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <h5 class="card-header">Requester Information</h5>
                        <div class="card-body">
                            <div class="form-parent">
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword11" class="col-sm-2 col-form-label">First Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword11" placeholder="First Name" name="requestor_fname">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword112" class="col-sm-2 col-form-label">Last Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword112" placeholder="Last Name" name="requestor_lname">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword113" class="col-sm-2 col-form-label">Organization:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword113" placeholder="Organization" name="requestor_organization">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword114" class="col-sm-2 col-form-label">Email Address:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword114" placeholder="Email Address" name="requestor_email">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword115" class="col-sm-2 col-form-label">Phone Number:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPassword115" placeholder="Phone Number" name="requestor_phone">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword115" class="col-sm-2 col-form-label">Additional Information:</label>
                                        <div class="col-sm-10">
                                            <textarea name="requestor_info" id="" cols="30" rows="5" class="form-control" placeholder="Additional Information"></textarea>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row mb-3">
                                        <label for="inputPassword115" class="col-sm-2 col-form-label">* Sharing:</label>
                                        <div class="col-sm-10">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required> 
                                            <label class="form-check-label mx-2" for="defaultCheck1">
                                                By checking this box, I agree to BestMeetingVenues's <a href="javascript:;">Privacy Policy</a> and <a href="javascript:;">Terms of Use</a>.
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row mb-3">
                                        <label for="inputPassword115" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <input type="submit" class="btn btn-primary mx-2">
                                            <button class="btn btn-warning" id="resetBtn">Reset</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

 
@endsection

@section('js')
 <script>
    $(document).on('click', '#resetBtn', function() {
        document.getElementById("myForm").reset();
    });
 </script>
    
@endsection