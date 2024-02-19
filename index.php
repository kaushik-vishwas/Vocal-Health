<?php
require('myHeader.php');
?>

<div class="video-container" style="position: relative; z-index: 1">
    <video id="background-video" autoplay loop muted playsinline preload="auto" loading="lazy">
        <source src="https://vocal.org.in/assets/img/bg-video.mp4" type="video/mp4">
    </video>

    <div id="text-overlay">
        Welcome to VHRA
        <h6 id="mainLine">Amidst the quiet fields, let's amplify the voice of rural child health. Together, we create
            echoes
            of hope and vitality.</h6>
    </div>

    <div id="button-container">
        <!-- <a href="vol.php" class="cta-btn1">Be Volunteer</a> -->
<a class="cta-btn1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Be Volunteer</a>

        <a href="#" class="cta-btn1">Donate Now</a>
    </div>
</div>






<!-- model -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- <div class="modal-content">
      <div class="modal-header"> -->
        <div class="modal-content">
      <div class="">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Be Volunteer</h5> -->
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="">
        <form action="">
            <div class="modelBody">
                <div class="modelContainer">
                    <!-- <div class="modelBrand-logo"></div> -->
                    <div class="modelBrand-title">Be Volunteer</div>
                    <div class="modelInputs">
                        <!-- <label class="modelLab">EMAIL</label> -->
                        <input class="modelInp" type="text" placeholder="Type You Full Name*" />
                        <div class="modelInp" style="display: inline-block; width: 37%;">
                    <!-- country codes (ISO 3166) and Dial codes. -->
<select name="countryCode" id="">
	<option data-countryCode="GB" value="44" Selected>In (+91)</option>
	<option data-countryCode="US" value="1">USA (+1)</option>
	<optgroup label="Other countries">
		<option data-countryCode="DZ" value="213">Algeria (+213)</option>
		<option data-countryCode="AD" value="376">Andorra (+376)</option>
		<option data-countryCode="AO" value="244">Angola (+244)</option>
		<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
		<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
		<option data-countryCode="AR" value="54">Argentina (+54)</option>
		<option data-countryCode="AM" value="374">Armenia (+374)</option>
		<option data-countryCode="AW" value="297">Aruba (+297)</option>
		<option data-countryCode="AU" value="61">Australia (+61)</option>
		<option data-countryCode="AT" value="43">Austria (+43)</option>
		<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
		<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
		<option data-countryCode="BH" value="973">Bahrain (+973)</option>
		<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
		<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
		<option data-countryCode="BY" value="375">Belarus (+375)</option>
		<option data-countryCode="BE" value="32">Belgium (+32)</option>
		<option data-countryCode="BZ" value="501">Belize (+501)</option>
		<option data-countryCode="BJ" value="229">Benin (+229)</option>
		<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
		<option data-countryCode="BT" value="975">Bhutan (+975)</option>
		<option data-countryCode="BO" value="591">Bolivia (+591)</option>
		<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
		<option data-countryCode="BW" value="267">Botswana (+267)</option>
		<option data-countryCode="BR" value="55">Brazil (+55)</option>
		<option data-countryCode="BN" value="673">Brunei (+673)</option>
		<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
		<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
		<option data-countryCode="BI" value="257">Burundi (+257)</option>
		<option data-countryCode="KH" value="855">Cambodia (+855)</option>
		<option data-countryCode="CM" value="237">Cameroon (+237)</option>
		<option data-countryCode="CA" value="1">Canada (+1)</option>
		<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
		<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
		<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
		<option data-countryCode="CL" value="56">Chile (+56)</option>
		<option data-countryCode="CN" value="86">China (+86)</option>
		<option data-countryCode="CO" value="57">Colombia (+57)</option>
		<option data-countryCode="KM" value="269">Comoros (+269)</option>
		<option data-countryCode="CG" value="242">Congo (+242)</option>
		<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
		<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
		<option data-countryCode="HR" value="385">Croatia (+385)</option>
		<option data-countryCode="CU" value="53">Cuba (+53)</option>
		<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
		<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
		<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
		<option data-countryCode="DK" value="45">Denmark (+45)</option>
		<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
		<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
		<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
		<option data-countryCode="EC" value="593">Ecuador (+593)</option>
		<option data-countryCode="EG" value="20">Egypt (+20)</option>
		<option data-countryCode="SV" value="503">El Salvador (+503)</option>
		<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
		<option data-countryCode="ER" value="291">Eritrea (+291)</option>
		<option data-countryCode="EE" value="372">Estonia (+372)</option>
		<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
		<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
		<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
		<option data-countryCode="FJ" value="679">Fiji (+679)</option>
		<option data-countryCode="FI" value="358">Finland (+358)</option>
		<option data-countryCode="FR" value="33">France (+33)</option>
		<option data-countryCode="GF" value="594">French Guiana (+594)</option>
		<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
		<option data-countryCode="GA" value="241">Gabon (+241)</option>
		<option data-countryCode="GM" value="220">Gambia (+220)</option>
		<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
		<option data-countryCode="DE" value="49">Germany (+49)</option>
		<option data-countryCode="GH" value="233">Ghana (+233)</option>
		<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
		<option data-countryCode="GR" value="30">Greece (+30)</option>
		<option data-countryCode="GL" value="299">Greenland (+299)</option>
		<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
		<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
		<option data-countryCode="GU" value="671">Guam (+671)</option>
		<option data-countryCode="GT" value="502">Guatemala (+502)</option>
		<option data-countryCode="GN" value="224">Guinea (+224)</option>
		<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
		<option data-countryCode="GY" value="592">Guyana (+592)</option>
		<option data-countryCode="HT" value="509">Haiti (+509)</option>
		<option data-countryCode="HN" value="504">Honduras (+504)</option>
		<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
		<option data-countryCode="HU" value="36">Hungary (+36)</option>
		<option data-countryCode="IS" value="354">Iceland (+354)</option>
		<option data-countryCode="IN" value="91">India (+91)</option>
		<option data-countryCode="ID" value="62">Indonesia (+62)</option>
		<option data-countryCode="IR" value="98">Iran (+98)</option>
		<option data-countryCode="IQ" value="964">Iraq (+964)</option>
		<option data-countryCode="IE" value="353">Ireland (+353)</option>
		<option data-countryCode="IL" value="972">Israel (+972)</option>
		<option data-countryCode="IT" value="39">Italy (+39)</option>
		<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
		<option data-countryCode="JP" value="81">Japan (+81)</option>
		<option data-countryCode="JO" value="962">Jordan (+962)</option>
		<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
		<option data-countryCode="KE" value="254">Kenya (+254)</option>
		<option data-countryCode="KI" value="686">Kiribati (+686)</option>
		<option data-countryCode="KP" value="850">Korea North (+850)</option>
		<option data-countryCode="KR" value="82">Korea South (+82)</option>
		<option data-countryCode="KW" value="965">Kuwait (+965)</option>
		<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
		<option data-countryCode="LA" value="856">Laos (+856)</option>
		<option data-countryCode="LV" value="371">Latvia (+371)</option>
		<option data-countryCode="LB" value="961">Lebanon (+961)</option>
		<option data-countryCode="LS" value="266">Lesotho (+266)</option>
		<option data-countryCode="LR" value="231">Liberia (+231)</option>
		<option data-countryCode="LY" value="218">Libya (+218)</option>
		<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
		<option data-countryCode="LT" value="370">Lithuania (+370)</option>
		<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
		<option data-countryCode="MO" value="853">Macao (+853)</option>
		<option data-countryCode="MK" value="389">Macedonia (+389)</option>
		<option data-countryCode="MG" value="261">Madagascar (+261)</option>
		<option data-countryCode="MW" value="265">Malawi (+265)</option>
		<option data-countryCode="MY" value="60">Malaysia (+60)</option>
		<option data-countryCode="MV" value="960">Maldives (+960)</option>
		<option data-countryCode="ML" value="223">Mali (+223)</option>
		<option data-countryCode="MT" value="356">Malta (+356)</option>
		<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
		<option data-countryCode="MQ" value="596">Martinique (+596)</option>
		<option data-countryCode="MR" value="222">Mauritania (+222)</option>
		<option data-countryCode="YT" value="269">Mayotte (+269)</option>
		<option data-countryCode="MX" value="52">Mexico (+52)</option>
		<option data-countryCode="FM" value="691">Micronesia (+691)</option>
		<option data-countryCode="MD" value="373">Moldova (+373)</option>
		<option data-countryCode="MC" value="377">Monaco (+377)</option>
		<option data-countryCode="MN" value="976">Mongolia (+976)</option>
		<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
		<option data-countryCode="MA" value="212">Morocco (+212)</option>
		<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
		<option data-countryCode="MN" value="95">Myanmar (+95)</option>
		<option data-countryCode="NA" value="264">Namibia (+264)</option>
		<option data-countryCode="NR" value="674">Nauru (+674)</option>
		<option data-countryCode="NP" value="977">Nepal (+977)</option>
		<option data-countryCode="NL" value="31">Netherlands (+31)</option>
		<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
		<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
		<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
		<option data-countryCode="NE" value="227">Niger (+227)</option>
		<option data-countryCode="NG" value="234">Nigeria (+234)</option>
		<option data-countryCode="NU" value="683">Niue (+683)</option>
		<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
		<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
		<option data-countryCode="NO" value="47">Norway (+47)</option>
		<option data-countryCode="OM" value="968">Oman (+968)</option>
		<option data-countryCode="PW" value="680">Palau (+680)</option>
		<option data-countryCode="PA" value="507">Panama (+507)</option>
		<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
		<option data-countryCode="PY" value="595">Paraguay (+595)</option>
		<option data-countryCode="PE" value="51">Peru (+51)</option>
		<option data-countryCode="PH" value="63">Philippines (+63)</option>
		<option data-countryCode="PL" value="48">Poland (+48)</option>
		<option data-countryCode="PT" value="351">Portugal (+351)</option>
		<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
		<option data-countryCode="QA" value="974">Qatar (+974)</option>
		<option data-countryCode="RE" value="262">Reunion (+262)</option>
		<option data-countryCode="RO" value="40">Romania (+40)</option>
		<option data-countryCode="RU" value="7">Russia (+7)</option>
		<option data-countryCode="RW" value="250">Rwanda (+250)</option>
		<option data-countryCode="SM" value="378">San Marino (+378)</option>
		<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
		<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
		<option data-countryCode="SN" value="221">Senegal (+221)</option>
		<option data-countryCode="CS" value="381">Serbia (+381)</option>
		<option data-countryCode="SC" value="248">Seychelles (+248)</option>
		<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
		<option data-countryCode="SG" value="65">Singapore (+65)</option>
		<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
		<option data-countryCode="SI" value="386">Slovenia (+386)</option>
		<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
		<option data-countryCode="SO" value="252">Somalia (+252)</option>
		<option data-countryCode="ZA" value="27">South Africa (+27)</option>
		<option data-countryCode="ES" value="34">Spain (+34)</option>
		<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
		<option data-countryCode="SH" value="290">St. Helena (+290)</option>
		<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
		<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
		<option data-countryCode="SD" value="249">Sudan (+249)</option>
		<option data-countryCode="SR" value="597">Suriname (+597)</option>
		<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
		<option data-countryCode="SE" value="46">Sweden (+46)</option>
		<option data-countryCode="CH" value="41">Switzerland (+41)</option>
		<option data-countryCode="SI" value="963">Syria (+963)</option>
		<option data-countryCode="TW" value="886">Taiwan (+886)</option>
		<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
		<option data-countryCode="TH" value="66">Thailand (+66)</option>
		<option data-countryCode="TG" value="228">Togo (+228)</option>
		<option data-countryCode="TO" value="676">Tonga (+676)</option>
		<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
		<option data-countryCode="TN" value="216">Tunisia (+216)</option>
		<option data-countryCode="TR" value="90">Turkey (+90)</option>
		<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
		<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
		<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
		<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
		<option data-countryCode="UG" value="256">Uganda (+256)</option>
		<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
		<option data-countryCode="UA" value="380">Ukraine (+380)</option>
		<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
		<option data-countryCode="UY" value="598">Uruguay (+598)</option>
		<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
		<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
		<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
		<option data-countryCode="VA" value="379">Vatican City (+379)</option>
		<option data-countryCode="VE" value="58">Venezuela (+58)</option>
		<option data-countryCode="VN" value="84">Vietnam (+84)</option>
		<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
		<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
		<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
		<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
		<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
		<option data-countryCode="ZM" value="260">Zambia (+260)</option>
		<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
	</optgroup>
</select>
                </div>
                <input class="modelInp" type="number" placeholder="Type Your Phone No.*" style="display: inline-block; width: 60%;" />
                        <input class="modelInp" type="email" placeholder="Type Your Email Address*" />
                        <input class="modelInp" type="text" placeholder="What is Your Occupation?* " />
                        
                        <button class="modelBtn" type="submit">Submit</button>
                    </div>
                    <!-- <a href="https://twitter.com/prathkum">MADE BY PRATHAM</a> -->
                </div>
            </div>
        </form>
      </div>
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <div class="modal-footer">
       
        <!-- <button type="button" class="btn btn-primary">Send message</button> -->
      </div>
    </div>
  </div>
</div>

<!-- end model -->








<section id="hero" class="hero" style="margin-top: -300px">
    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-4 col-md-6">
                    <div class="icon-box">
                        <!-- <div class="icon"><i class="bi bi-easel"></i></div> -->
                        <h4 class="title"><a class="stretched-link">What We Do</a></h4>
                        <p style="color: #fff">VHRA is dedicated to <span style="font-style: italic;color: cyan">Ensuring Essential Rural Health and also promoting Education</span> and its
                            importance towards rural development. Our team is highly professional and that has been
                            helping people in achieving good health to improve quality of life.</p>
                    </div>
                </div>
                <!--End Icon Box -->
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-4 col-md-4">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-gem"></i></div>
                                <h4 class="title"><a class="stretched-link">Primary Healthcare Expansion</a></h4>
                            </div>
                        </div>
                        <!--End Icon Box -->

                        <div class="col-xl-4 col-md-4">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                                <h4 class="title"><a class="stretched-link">Community Engagement and Education Programs</a></h4>
                            </div>
                        </div>
                        <!--End Icon Box -->

                        <div class="col-xl-4 col-md-4">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-command"></i></div>
                                <h4 class="title"><a class="stretched-link">Advocacy for Rural Health Policies</a></h4>
                            </div>
                        </div>
                        <!--End Icon Box -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<marquee width="100%" direction="left" height="100px"style="text-align: center;">
Certainly, it's important to highlight that the
Vocal Health and Research Association is not
involved in any financial transactions or vendor
dealings related to job offers. Verify all
information through our official website and
contact our head office in Delhi for accurate
details.
</marquee>



<main id="main">
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <!-- <div class="section-header">
                <h2>WHAT WE DO</h2>

                <p class="properAlign">VHRA is dedicated to <span
                        style="font-style: italic; font-weight: 600; color: #0f5d96">Ensuring Essential Rural
                        Health</span> and also
                    promoting education and its importance towards rural development. Our team is highly
                    professional
                    and that has
                    been helping people in achieving good health to improve quality of life.</p>
            </div> -->
            <div class="row gy-4" style="background-image: url('assets/img/swasthya2.png'); background-size: cover;" >
                <h3 class="" style="color: #0f5d96; text-align: center;">Vocal Swasthya Kendra</h3>
                <p style="text-align: Center; margin-top: -10px">The Multi-Speciality Clinic and Online Consultation
                    Center </p>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/100.png" width="60px" alt="Maternal Child Health Icon"
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Maternal/Child Health</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/200.png" width="60px" alt="Maternal Child Health Icon"
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Health Awareness</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/300.png" width="50px" alt="Maternal Child Health Icon"
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Dental care</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/400.png" width="50px" alt="Maternal Child Health Icon"
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Pharmacy</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/500.png" width="50px" alt="Maternal Child Health Icon"
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold"> Elderly Care</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/600.png" width="50px" alt="Maternal Child Health Icon"
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Health Camps</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/1000.png" width="50px" alt="Maternal Child Health Icon"
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Immunization</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/1100.png" width="50px" alt="Maternal Child Health Icon"
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Diagnostic Services</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/1200.png" width="50px" alt="Maternal Child Health Icon"
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Nutrition</h4>
                        </div>
                    </div>
                </div>
            </div>














             <div class="row gy-4" style="margin-top: 90px; background-image: url('assets/img/shiksha.png');" >
                <h3 class="" style="color: #0f5d96; text-align: center;">Vocal Shiksha Sadan</h3>
                <p style="text-align: Center; margin-top: -10px">Promoting Primary Education</p>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/700.png" width="60px" alt=""
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Awareness</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/800.png" width="60px" alt=""
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Basic Education</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <img src="assets/img/900.png" width="50px" alt=""
                                class="icon-img">
                        </div>
                        <div class="col-10">
                            <h4 style="color: black; font-weight: bold">Access To Educational Resources</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4" style="padding-top: 100px">
                <div class="col-lg-6">
                    <div class="content ps-0 ps-lg-5">
                        <!-- <h3 class="" style="color: #0f5d96">Director's Message</h3> -->
                        <div class="section-header">
                            <h2>Director's Message</h2>
                        </div>
                        <p class="properAlign" style="font-style: italic; margin-top: -40px">"Welcome to Vocal
                            Health
                            and Research
                            Association! Our core initiative aims to address
                            healthcare disparities in rural areas, led by a seasoned medical professional. We are
                            committed to
                            providing accessible healthcare services
                            through Multi-specialty Clinics tailored to the unique needs of underserved communities.
                            Our
                            vision is to
                            make comprehensive medical care a
                            fundamental right for everyone, focusing on preventive care, health education, and
                            community
                            engagement.
                            By strategically placing Vocal Swasthya
                            Kendra in rural areas, we aim to create a lasting impact on the health and quality of
                            life
                            of those
                            overlooked in the healthcare system."
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative mt-4">
                        <iframe width="100%" height="350"
                            src="https://www.youtube.com/embed/qC2joPk7inY?si=6kTtdXDBhk__dak2"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Section -->


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">
            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-9.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-10.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-11.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Clients Section -->
    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="73" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Health Centers</strong></p>
                    </div>
                    <!-- End Stats Item -->
                    <div class="stats-item d-flex align-items-center">
                        <span data-purecounter-start="0" data-purecounter-end="20467" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Empowered Lives</strong> </p>
                    </div>
                    <!-- End Stats Item -->
                    <div class="stats-item d-flex align-items-center">
                        <span id="hoursCounter" data-purecounter-start="0" data-purecounter-end="33763"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Visits on Website</strong></p>
                    </div>
                    <!-- End Stats Item -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Stats Counter Section -->
    <!-- ======= Call To Action Section ======= -->
    <!-- <section id="call-to-action" class="call-to-action">
        <div class="container text-center" data-aos="zoom-out" style="background-image: url('assets/img/cta.png');">
            <h3>Certificate Course</h3>
            <p>Unlock a world of possibilities - Take the first step towards VHRA today</p>
            <a class="cta-btn" href="">Certified Crash Course</a>
        </div>
    </section> -->
    <!-- End Call To Action Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials" style="height: 80vh;">
        <div class="container">
            <div class="section-header">
                <h2>Testimonials</h2>
                <p>Step into the stories of impact and empowerment as individuals from rural communities express
                    their
                    gratitude. The
                    testimonials in this section reflect the transformative journey of health and hope facilitated
                    by
                    Vocal
                    Health and
                    Research Association, one testimony at a time
                </p>
            </div>
            <div class="slides-3 swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-1.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Prince Thakur</h3>
                                        <h4>Surat</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Partnering with Vocal Health And Research Association was an incredible
                                    experience.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-4.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Kaushik Vishwas</h3>
                                        <h4>Kolkata</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    VHRA is like a superhero in rural India, helping people get healthcare jobs
                                    through
                                    cool training
                                    programs and
                                    interviews all over the country. They're known for being the best at it, with a
                                    super professional
                                    team that guides
                                    folks to make their healthcare dreams come true.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-2.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Jaspreet Kaur</h3>
                                        <h4>Gurugram</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    We’re proud to have joined hands with VHRA and look forward to making an even
                                    greater impact
                                    together.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-3.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Rudhika Sharma</h3>
                                        <h4>Jammu</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Their dedication to build 1000 hospitals for the better health and medical
                                    services
                                    is incredible.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-7.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Abhi Syal</h3>
                                        <h4>Meerut</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Vocal Health and Research Association's "Vocal Swasthya Kendra" is a rural
                                    healthcare game-changer,
                                    providing
                                    once-dreamt-of access. Their innovative focus on vocal health is truly
                                    inspiring,
                                    making a
                                    commendable impact on
                                    countless lives.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-6.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Sanjay Chaudhary</h3>
                                        <h4>Panipat</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Vocal Health and Research Association's commitment to providing minimal to
                                    no-cost
                                    healthcare in
                                    rural India is
                                    remarkable.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-8.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Dhriti Bhutiyani</h3>
                                        <h4>Banglore</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    By recognizing healthcare as a basic human right and prioritizing vocal health,
                                    they
                                    are not just
                                    providing services;
                                    they're fostering holistic well-being, positively impacting millions in need.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div class="d-flex align-items-center">
                                    <img src="assets/img/testimonials/testimonials-5.jpg"
                                        class="testimonial-img flex-shrink-0" alt="">
                                    <div>
                                        <h3>Luvkush Chauhan</h3>
                                        <h4>Ayodhya</h4>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    VHRA stands out as a premier healthcare service provider in rural India,
                                    renowned
                                    for its pioneering
                                    approach to
                                    training and placement. With a highly professional team and a commitment to
                                    individual potential,
                                    VHRA is a top choice
                                    for those seeking excellence in the healthcare sector.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->
    <!-- ======= Our Project Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <div class="section-header">
                <h2>LATEST PROJECTS</h2>
                <p>Bring essential healthcare to the heart of underserved communities, creating a transformative
                    melody
                    of
                    positive
                    change.
                </p>
            </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="assets/img/project1.jpeg" class="img-fluid" alt="">
                        <h4>Garhmukteshwar, U.P</h4>
                        <span style="font-size: 17px;" class="properAlign">VHRA proudly announces the opening of its
                            transformative
                            healthcare initiative – a hospital in
                            Garhmukteshwar. Committed
                            to vocal health and overall well-being, we are dedicated to providing accessible and
                            compassionate
                            healthcare services
                            to empower the rural local community.</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-4 col-md-6 d-flex">
                    <div class="member">
                        <img src="assets/img/project2.jpeg" class="img-fluid" alt="">
                        <h4>Pandori, J&K</h4>
                        <span style="font-size: 17px;" class="properAlign">VHRA extends its reach with the
                            inauguration
                            of a
                            hospital in Pandori, championing the cause of
                            rural health
                            improvement. Committed to making a positive impact, we strive to bring accessible
                            healthcare
                            to
                            underserved communities,
                            fostering a healthier and more vibrant future for rural people.</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-4 col-md-6 d-flex" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/img/product-3.jpg" class="img-fluid" alt="">
                        <h4>Arnia, J&K</h4>
                        <span style="font-size: 17px;" class="properAlign">VHRA is proud to announce the successful
                            opening and
                            operation of our hospital in Arnia, dedicated
                            to enhancing rural
                            health. With a commitment to accessibility and quality care, we are actively
                            contributing to
                            the
                            betterment of
                            healthcare in underserved communities. Our ongoing efforts in Arnia exemplify our
                            mission to
                            empower and
                            improve the
                            well-being of rural populations, creating a healthier and more resilient future for
                            all.</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-12 col-md-6 d-flex" data-aos-delay="300">
                    <div class="member">
                        <div class="section-header">
                            <h2>VHRA Crash Certification Courses</h2>
                        </div>
                        <span style="font-size: 17px;" class="properAlign">
                            Welcome to VHRA Crash Certification Courses, where we embark on a mission to empower
                            individuals with
                            essential skills
                            and knowledge through our transformative and concise certification programs. Our
                            commitment
                            lies in
                            offering courses
                            that go beyond traditional learning, providing participants with practical insights,
                            hands-on
                            experience, and
                            industry-relevant expertise.
                            In today's fast-paced world, professional development is crucial, and VHRA Crash
                            Certification Courses
                            are tailored to
                            meet the evolving needs of individuals in the healthcare sector. Our courses are not
                            just
                            about
                            acquiring knowledge;
                            they are about gaining practical, real-world skills that can be immediately applied in
                            various
                            healthcare settings.
                        </span>
                        <img src="assets/img/onlineclass.jpg" width="100%" style="padding-top: 20px" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <!-- End Team Member -->
            </div>
        </div>
    </section>
    <!-- End Our Project Section -->
    <!-- ======= Our Upcomming Project Section ======= -->
    <section id="team" class="team">
        <div class="container">
            <div class="section-header">
                <h2>OUR UPCOMMING PROJECTS</h2>
                <p>Join us in creating a healthier, more harmonious world for all."</p>
            </div>
            <div class="row gy-4">
                <div class="col-xl-3 col-md-6 d-flex">
                    <div class="member">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53306.974048385!2d75.72487697746139!3d33.319364836937766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391d0b25ce61e48d%3A0xda622690fce4a68f!2sKishtwar%20182204!5e0!3m2!1sen!2sin!4v1704881026017!5m2!1sen!2sin"
                            width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h4>Kishtwar, J&K</h4>
                        <span style="font-size: 18px;" class="properAlign">Exciting news on the horizon! VHRA is
                            gearing
                            up for a
                            groundbreaking project in Kishtwar, J&K, as
                            we continue our
                            mission to elevate rural healthcare. Stay tuned for the unveiling of our upcoming
                            initiative, poised to
                            make a lasting
                            impact on the well-being of the community and extend our commitment to providing
                            accessible
                            healthcare
                            services</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-3 col-md-6 d-flex">
                    <div class="member">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28238.427932054245!2d76.48871246191382!3d27.785028466436444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3972a64e1df4ddc9%3A0xb5e8f2fc34c38203!2sTatarpur%2C%20Rajasthan%20301404!5e0!3m2!1sen!2sin!4v1704882788560!5m2!1sen!2sin"
                            width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h4>Tatarpur, Alwar</h4>
                        <span style="font-size: 17px;" class="properAlign">Anticipate positive change! VHRA is
                            poised to
                            launch a
                            transformative healthcare initiative in
                            Tatarpur, Alwar, Rajasthan, as we
                            strive to enhance rural well-being. Our upcoming project reflects our unwavering
                            commitment
                            to
                            accessible healthcare,
                            marking another significant step towards fostering healthier communities in the heart of
                            Rajasthan.</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-3 col-md-6 d-flex" data-aos-delay="300">
                    <div class="member">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d189887.76468130894!2d74.77009314384726!3d33.65397092709914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e200a7999a3387%3A0xb11c0ceabba79a0f!2sWari%20Pora%20192233!5e0!3m2!1sen!2sin!4v1704882170446!5m2!1sen!2sin"
                            width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h4>Wari Pora, Anantnag</h4>
                        <span style="font-size: 17px;" class="properAlign">Embracing the spirit of progress, VHRA is
                            on
                            the verge of
                            unveiling a visionary healthcare project
                            in Kund, Anantnag. As
                            we extend our commitment to rural health, this upcoming initiative embodies our
                            dedication
                            to providing
                            accessible and
                            quality healthcare services, nurturing the well-being of the community in the
                            picturesque
                            region of
                            Anantnag.</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-3 col-md-6 d-flex" data-aos-delay="300">
                    <div class="member">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1546850.706411133!2d85.26295452015438!3d25.648917791528106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f1f8fa3591a3eb%3A0x78daeb875018bb86!2sDandari%2C%20Bihar%20851211!5e0!3m2!1sen!2sin!4v1704882240523!5m2!1sen!2sin"
                            width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h4>Dandari, Begusarai</h4>
                        <span style="font-size: 17px;" class="properAlign">Get ready for positive strides in
                            healthcare!
                            VHRA is on
                            the brink of launching an impactful project
                            in Dandari, Begusarai. As we extend our mission to enhance rural well-being, this
                            upcoming
                            initiative
                            signifies our dedication to
                            providing accessible healthcare services, fostering a healthier tomorrow for the vibrant
                            community of
                            Begusarai.</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-3 col-md-6 d-flex" data-aos-delay="300">
                    <div class="member">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14408.145419541255!2d86.07102714403207!3d25.47046148907426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f20f77b6adebf5%3A0x350e4179614d0792!2sNinga%2C%20Bihar%20851131!5e0!3m2!1sen!2sin!4v1704882364180!5m2!1sen!2sin"
                            width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h4>Ninga, Begusarai</h4>
                        <span style="font-size: 17px;" class="properAlign">Anticipate transformative healthcare on
                            the
                            horizon! VHRA
                            is set to unveil a pioneering project in
                            Ninga, Begusarai, as part
                            of our ongoing commitment to elevate rural well-being. Stay tuned for an initiative that
                            reflects our
                            dedication to
                            providing accessible healthcare services and creating positive change in the vibrant
                            community of
                            Ninga</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-3 col-md-6 d-flex" data-aos-delay="300">
                    <div class="member">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13293.943410874195!2d75.15551759912947!3d33.59269627155239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391df7eebe6fc0f7%3A0xa721234a0a611979!2sQazigund%20192221!5e0!3m2!1sen!2sin!4v1704882588776!5m2!1sen!2sin"
                            width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h4>Qazigund, J&K</h4>
                        <span style="font-size: 17px;" class="properAlign">Anticipate transformative healthcare on
                            the
                            horizon! VHRA
                            is set to unveil a pioneering project in
                            Ninga,
                            Begusarai, as part
                            of our ongoing commitment to elevate rural well-being. Stay tuned for an initiative that
                            reflects our
                            dedication
                            to
                            providing accessible healthcare services and creating positive change in the vibrant
                            community of
                            Ninga</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-3 col-md-6 d-flex" data-aos-delay="300">
                    <div class="member">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105713.56981642947!2d74.72418217210007!3d34.10669087455137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e1855686e3c5ef%3A0x66244b7cc1e305c6!2sSrinagar!5e0!3m2!1sen!2sin!4v1704882909222!5m2!1sen!2sin"
                            width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h4>Shrinagar, J&K</h4>
                        <span style="font-size: 17px;" class="properAlign">Prepare for a healthcare revolution! VHRA
                            is
                            on the verge
                            of introducing a transformative project in
                            Srinagar, J&K,
                            aiming to enhance the health and well-being of the local community. Stay tuned as we
                            embark
                            on this
                            journey to provide
                            accessible healthcare services and make a positive impact in the picturesque city of
                            Srinagar</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-3 col-md-6 d-flex" data-aos-delay="300">
                    <div class="member">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26525.868746732016!2d75.07905322764498!3d33.79337713118132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e21b15d655173b%3A0x83ba9d45442fbba8!2sBijbehara%20192124!5e0!3m2!1sen!2sin!4v1704883028554!5m2!1sen!2sin"
                            width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <h4>Bijbehera, J&K</h4>
                        <span style="font-size: 17px;" class="properAlign">Unlocking a new chapter in healthcare
                            excellence! VHRA is
                            thrilled to announce our upcoming project
                            in Bijbehara, J&K,
                            as we expand our mission to elevate rural well-being. Stay tuned for an initiative that
                            embodies our
                            commitment to
                            providing accessible healthcare services, fostering positive change in the vibrant
                            community
                            of
                            Bijbehara.</span>
                    </div>
                </div>
                <!-- End Team Member -->
                <div class="col-xl-12 col-md-6 d-flex" data-aos-delay="300">
                    <div class="member">
                        
                        <h3> VHRA International Medical Conference in Dubai </h3>
                      
                        <img src="assets/img/conference.jpg" class="img-fluid" alt="">
                        
                        <p style="font-size: 17px;" class="properAlign">The VHRA International Medical Conference is an ambitious
                            initiative
                            aimed at
                            making a significant contribution to the healthcare sector. It serves as a dynamic
                            platform
                            for experts,
                            researchers, and professionals to exchange knowledge, share insights, and explore the
                            latest
                            advancements
                            in healthcare. The conference goes beyond being a gathering, offering thought-provoking
                            discussions,
                            in-depth presentations, and interactive workshops on cutting-edge technologies.
                            Attendees
                            can expect not
                            only theoretical knowledge but also practical applications in real-world medical
                            scenarios.
                            The event
                            emphasizes networking and collaboration, fostering connections that extend beyond the
                            conference room. The
                            goal is to facilitate meaningful partnerships, leading to collaborative initiatives and
                            advancements in
                            medical knowledge and practices. The conference invites professionals at all levels to
                            actively contribute
                            to the collective advancement of the medical field, setting new standards in medical
                            discourse.
                        </p>
                    </div>
                </div>
                <!-- End Team Member -->
            </div>
        </div>
    </section>
    <!-- End Our Project Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="content px-xl-5">
                        <h3>Frequently Asked <strong>Questions</strong></h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="accordion accordion-flush" id="faqlist">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <span class="num">1.</span>
                                    What is the mission of the Vocal Health and Research Association (VHRA)?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Our mission is to contribute substantial awareness, experience, foresight,
                                    and ideas to bring the best services to the rurals through many
                                    projects across the country, like providing best healthcare services
                                    along with campaigns to promote health education, treatment,
                                    society development, etc.
                                </div>
                            </div>
                        </div>
                        <!-- # Faq item-->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    <span class="num">2.</span>
                                    How can I contribute to VHRA's efforts in promoting vocal health?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    You can contribute by volunteering and staying informed about vocal health
                                    issues,
                                    participating in
                                    our awareness
                                    campaigns, and
                                    supporting our research initiatives. Additionally, donations and volunteering
                                    opportunities are
                                    available to those
                                    interested in actively contributing to our cause.
                                </div>
                            </div>
                        </div>
                        <!-- # Faq item-->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    <span class="num">3.</span>
                                    What resources does VHRA provide for individuals interested in maintaining good
                                    vocal health?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    VHRA offers a variety of resources, open the hospital in rural area to improve
                                    rural
                                    health including
                                    medical services, educational materials, healthcamps and workshops.
                                    Our goal is to empower individual rurals with the knowledge and tools needed to
                                    maintain and enhance
                                    their
                                    vocal well-being.
                                </div>
                            </div>
                        </div>
                        <!-- # Faq item-->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    <span class="num">4.</span>
                                    How does VHRA support ongoing research in the field of vocal health?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    VHRA actively collaborates with healthcare proffesionals, researchers,
                                    institutions,
                                    and professionals
                                    in the field of vocal
                                    health. We provide
                                    grants, funding, and resources to support groundbreaking research projects aimed
                                    at
                                    advancing our
                                    understanding of vocal
                                    health and its impact on overall well-being.
                                </div>
                            </div>
                        </div>
                        <!-- # Faq item-->
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-5">
                                    <span class="num">5.</span>
                                    Is VHRA exclusively for professionals in the field, or can the general public
                                    benefit from its
                                    resources
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    VHRA is for everyone! While we engage with healthcare professionals,
                                    researchers,
                                    and experts in vocal
                                    health,
                                    our mission is to
                                    make information accessible to the rurals and generals. Whether you're a
                                    performer,
                                    educator, or
                                    simply
                                    someone interested in
                                    maintaining a healthy voice, VHRA provides resources and support for individuals
                                    at
                                    every
                                    level of engagement.
                                </div>
                            </div>
                        </div>
                        <!-- # Faq item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
        <div class="container">
            <div class="section-header">
                <h2>Recent Blog Posts</h2>
                <p>Dive into the vibrant world of vocal wellness! Uncover groundbreaking research and expert
                    insights in
                    our
                    latest blog
                    posts.
                </p>
                <p>Your gateway to a resonant and thriving voice.</p>
            </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <article>
                        <div class="post-img">
                            <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>
                        <h2 class="title">
                            <a href="blog-details2.php">The Road to Holistic Health: A Comprehensive Guide to
                                Nurturing
                                Your
                                Well-being</a>
                        </h2>
                        <p class="post-category" style="font-size: 18px;">In our fast-paced modern world, where
                            demands
                            and
                            stressors seem to multiply by the day, maintaining good health has
                            become a paramount concern. True health goes beyond the absence of illness; it
                            encompasses a
                            holistic
                            approach that
                            addresses physical, mental, and emotional well-being. This comprehensive guide explores
                            key
                            aspects of
                            maintaining a
                            healthy lifestyle and offers practical tips for achieving holistic health.
                        </p>
                        <div class="d-flex align-items-center">
                            <!-- <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                          <p class="post-author">Kavi Singh</p>
                          <p class="post-date">
                            <time datetime="2022-01-01">CEO, VHRA</time>
                          </p>
                        </div> -->
                        </div>
                    </article>
                </div>
                <!-- End post list item -->
                <div class="col-xl-4 col-md-6">
                    <article>
                        <div class="post-img">
                            <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                        </div>
                        <!-- <p class="post-category">Sports</p> -->
                        <h2 class="title">
                            <a href="blog-details.php">Mindful Living: Embracing Balance in the Digital Age</a>
                        </h2>
                        <p class="post-category" style="font-size: 18px;">In an era dominated by technology and
                            constant
                            connectivity, finding balance and cultivating mindfulness has become
                            essential for maintaining mental and emotional well-being. This article delves into the
                            impacts of the
                            digital age on
                            our daily lives and provides practical insights on how to embrace mindful living,
                            fostering
                            a healthier
                            relationship
                            with technology while nurturing a more present and fulfilling life.
                        </p>
                        <!-- <div class="d-flex align-items-center">
                     <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                     <div class="post-meta">
                       <p class="post-author">Imkongmenla Pongen</p>
                       <p class="post-date">
                         <time datetime="2022-01-01">Public Health Professional</time>
                       </p>
                     </div>
                     </div> -->
                    </article>
                </div>
                <!-- End post list item -->
                <div class="col-xl-4 col-md-6">
                    <article>
                        <div class="post-img">
                            <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                        </div>
                        <h2 class="title">
                            <a href="blog-details3.php">The Power of Gratitude: Transforming Perspectives for a
                                Fulfilling Life</a>
                        </h2>
                        <p class="post-category" style="font-size: 18px">In the hustle and bustle of daily life,
                            it's
                            easy to
                            overlook the simple yet profound practice of gratitude. This
                            article explores the transformative power of gratitude, shedding light on its impact on
                            mental well-being,
                            relationships, and overall life satisfaction. Discover how cultivating a grateful
                            mindset
                            can lead to a
                            more fulfilling
                            and positive life.
                        </p>

                    </article>
                </div>
                <!-- End post list item -->
            </div>
            <!-- End recent posts list -->
        </div>
    </section>
    <!-- End Recent Blog Posts Section -->
</main>
<!-- End #main -->
<?php
require('myFooter.php');
?>