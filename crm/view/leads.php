<div class="contanier p-5">
    <form action="" method="post">
        <!-- Booking Details 7 -->
        <div class="p-1" style="border-bottom: 5px solid #ccc; border-color: royalblue;">
            <h2>Booking Details</h2>
            <div class="row">
                <div class="col-sm-3">
                    Confirmation <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_confirmation_no" required>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4">
                    Service <span class="text-danger font-weight-bold">*</span>
                    <select name="l_service" id="" class="form-control" required>
                        <option value="">None</option>
                        <option>New Booking</option>
                        <option>Changes</option>
                        <option>Cancellation with Credit</option>
                        <option>Cancellation with Refund</option>
                        <option>Miscellaneous</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    Booking Type <span class="text-danger font-weight-bold">*</span>
                    <select name="l_booking_type" id="" class="form-control" required>
                        <option value="">None</option>
                        <option>Air</option>
                        <option>Car Rental</option>
                        <option>Hotels</option>
                        <option>Vacation Packages</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    Booking Status <span class="text-danger font-weight-bold">*</span>
                    <select name="l_booking_status" id="" class="form-control" required>
                        <option value="">None</option>
                        <option>Confirmed</option>
                        <option>Pending</option>
                        <option>Hold</option>
                    </select>

                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4">
                    Fare Type <span class="text-danger font-weight-bold">*</span>
                    <select name="l_fare_type" id="" class="form-control" required>
                        <option value="">None</option>
                        <option>GN</option>
                        <option>FXL</option>
                        <option>FXR</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    Class <span class="text-danger font-weight-bold">*</span>
                    <select name="l_class" id="" class="form-control" required>
                        <option value="">None</option>
                        <option>Basic Economy</option>
                        <option>Main Cabin</option>
                        <option>Premium</option>
                        <option>Business</option>
                        <option>First</option>
                    </select>
                </div>
                <div class="col-sm-4 mb-2">
                    Airline <span class="text-danger font-weight-bold">*</span>
                    <input type="text" name="l_airline" id="" class="form-control" required>
                </div>
            </div>
        </div>








        <!-- Passengers Details 5 -->
        <div class="p-1" style="border-bottom: 5px solid #ccc; border-color: royalblue;">
            <h2>Passengers Details</h2>
            <div class="container1">
                <div>
                    <div class="row">
                        <div class="col-sm-4">
                            Type <span class="text-danger font-weight-bold">*</span>
                            <select name="l_p_type[]" id="" class="form-control" required>
                                <option value="">None</option>
                                <option>Adult</option>
                                <option>Child</option>
                                <option>Infant</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            First Name <span class="text-danger font-weight-bold">*</span>
                            <input type="text" name="l_p_first_name[]" id="" class="form-control" required>
                        </div>
                        <div class="col-sm-4">
                            Middle Name
                            <input type="text" name="l_p_middle_name[]" id="" class="form-control">

                        </div>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-4">
                            Last Name <span class="text-danger font-weight-bold">*</span>
                            <input type="text" name="l_p_last_name[]" id="" class="form-control" required>
                        </div>
                        <div class="col-sm-4 mb-2">
                            Date Of Birth <span class="text-danger font-weight-bold">*</span> (MM/DD/YYYY)
                            <input type="date" name="l_p_dob[]" id="" class="form-control" required>
                        </div>
                        <div class="col-sm-4 mb-2">
                            Add More Passengers
                            <button class="add_form_field btn btn-success form-control">Add</button>

                        </div>
                    </div>
                </div>
                <hr style="border-bottom: 5px solid #ccc; border-color: red;">
            </div>
        </div>








        <!-- Contact Details 7 -->
        <div class="p-1" style="border-bottom: 5px solid #ccc; border-color: royalblue;">
            <h2>Contact Details</h2>
            <div class="row">
                <div class="col-sm-3">
                    Contact Name <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_contact_name" required>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-3">
                    Phone Type <span class="text-danger font-weight-bold">*</span>
                    <select name="l_phone_type" id="" class="form-control" required>
                        <option value="">None</option>
                        <option>Home</option>
                        <option>Cell Phone</option>
                        <option>Work</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    Extension
                    <select name="countryCode" id="" class="form-control" name="countryCode" required>
                        <option value="">None</option>
                        
                        
                        <option data-countryCode="US" value="1">USA (+1)</option>
                        <option data-countryCode="CA" value="1">Canada (+1)</option>
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
                            <option data-countryCode="GB" value="44">UK (+44)</option>
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
                <div class="col-sm-3">
                    Phone No. <span class="text-danger font-weight-bold">*</span>
                    <input type="text" name="l_phone_no" id="" class="form-control" maxlength="10" required>
                </div>
                <div class="col-sm-3">
                    Alt Phone No.
                    <input type="text" name="l_alt_phone_no" id="" class="form-control" maxlength="10">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4">
                    Email-ID <span class="text-danger font-weight-bold">*</span>
                    <input type="email" name="l_email" id="" class="form-control">
                </div>
                <div class="col-sm-4">
                    Alt Email-ID
                    <input type="email" name="l_alt_email" id="" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-12">
                    Address <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_address" required></input>
                </div>
            </div> <br>
        </div>




        <!-- Price Details 5 -->
        <div class="p-1" style="border-bottom: 5px solid #ccc; border-color: royalblue;">
            <h2>Price Details</h2>
            <div class="row">
                <div class="col-sm-2">
                    Passenger <span class="text-danger font-weight-bold">*</span>
                    <select name="l_passenger_type" id="" class="form-control" required>
                        <option value="">None</option>
                        <option>Adult</option>
                        <option>Child</option>
                        <option>Infant</option>
                        <option>Pet</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    No Of Passenger <span class="text-danger font-weight-bold">*</span>
                    <input type="number" class="form-control" name="l_passenger_no_of" required>
                </div>
                <div class="col-sm-2">
                    Net Amt <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_passenger_net_amount" required>
                </div>
                <div class="col-sm-2">
                    MCO <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_mco" required>
                </div>
                <div class="col-sm-2">
                    Gross <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_gross" required>
                </div>
            </div> <br>
        </div>






        <!-- Ancillaries Details 4 -->
        <div class="p-1" style="border-bottom: 5px solid #ccc; border-color: royalblue;">
            <h2>Ancillaries</h2>
            <div class="row">
                <div class="col-sm-2">
                    Miscellaneous
                    <input type="text" class="form-control" name="l_a_micellaneous">
                </div>
                <div class="col-sm-2">
                    Net. Amount
                    <input type="text" class="form-control" name="l_a_net_amount">
                </div>
                <div class="col-sm-2">
                    MCO
                    <input type="text" class="form-control" name="l_a_mco">
                </div>
                <div class="col-sm-2">
                    Gross
                    <input type="text" class="form-control" name="l_a_gross">
                </div>
            </div> <br>
        </div>




        <!-- Payment Details  13 -->
        <div class="p-1" style="border-bottom: 5px solid #ccc; border-color: royalblue;">
            <h2>Payment Details</h2>
            <div class="row">
                <div class="col-sm-3">
                    Authorization <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_p_authorization" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    Payment Methods<span class="text-danger font-weight-bold">*</span>
                    <select name="l_p_payment_method" id="" class="form-control" required>
                        <option value="">None</option>
                        <option>Visa</option>
                        <option>Mastercard</option>
                        <option>Discover</option>
                        <option>AMEX</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    Card Holder Name <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_p_card_holder_name" required>
                </div>
                <div class="col-sm-3">
                    Extension
                    <select name="countryCode" id="" class="form-control" name="countryCode" required>
                        <option value="">None</option>
                        
                        
                        <option data-countryCode="US" value="1">USA (+1)</option>
                        <option data-countryCode="CA" value="1">Canada (+1)</option>
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
                            <option data-countryCode="GB" value="44">UK (+44)</option>
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
                <div class="col-sm-3">
                    Phone No. <span class="text-danger font-weight-bold">*</span>
                    <input type="tel" class="form-control" name="l_p_card_holder_phone_no" maxlength="10" required>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-3">
                    Transaction Type
                    <select name="l_p_transaction_type" id="" class="form-control">
                        <option value="">None</option>
                        <option>Credit Card</option>
                        <option>Debit Card</option>
                        <option>Prepaid Card</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    Card Number<span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_p_card_no" maxlength="16" required id="">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-3">
                    Month<span class="text-danger font-weight-bold">*</span>

                    <select name="l_p_card_mm" id="" class="form-control" required>
                        <option value="">None</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    Year<span class="text-danger font-weight-bold">*</span>

                    <select name="l_p_card_yy" id="" class="form-control" required>
                        <option value="">None</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2030">2031</option>
                        <option value="2030">2032</option>
                        <option value="2030">2033</option>
                        <option value="2030">2034</option>
                        <option value="2030">2035</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    CVV <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_p_card_cvv" maxlength="4" required>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-4">
                    Street Address<span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_p_street_address" required>
                </div>
                <div class="col-sm-3">
                    City<span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_p_city" required>
                </div>
                <div class="col-sm-3">
                    State <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_p_state" required>
                </div>
                <div class="col-sm-2">
                    Zip Code <span class="text-danger font-weight-bold">*</span>
                    <input type="text" class="form-control" name="l_p_zip_code" required>
                </div>
            </div> <br>
        </div>




        <!-- Comment Details 1 -->
        <div class="p-1" style="border-bottom: 5px solid #ccc; border-color: royalblue;">
            <h2>Itinerary</h2>
            <div class="row">
                <div class="col-sm-12">
                   
                    <textarea name="l_comments" style="width: 100%; height: 300px;"></textarea>
                </div>
            </div> <br>
        </div>


        <div class="p-1" style="border-bottom: 5px solid #ccc; border-color: royalblue;">
            <h2>Comment</h2>
            <div class="row">
                <div class="col-sm-12">
                    <textarea name="c_text" style="width: 100%; height: 300px;"></textarea>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-12">
                    <input type="submit" name="insetdata" value="Submit Me" class="btn btn-success">
                </div>
            </div> <br>
        </div>
    </form>
</div>




<?php
if (isset($_POST['insetdata'])) {

    $l_p_type = implode(", ", $_POST["l_p_type"]);
    $l_p_first_name = implode(", ", $_POST["l_p_first_name"]);
    $l_p_middle_name = implode(", ", $_POST["l_p_middle_name"]);
    $l_p_last_name = implode(", ", $_POST["l_p_last_name"]);
    $l_p_dob = implode(", ", $_POST["l_p_dob"]);

    date_default_timezone_set("Asia/Kolkata");
    $mytime = date(time());
    $commentData = $_POST['c_text'];
    $allData = [
        'l_confirmation_no' => $_POST['l_confirmation_no'],
        'l_service' => $_POST['l_service'],
        'l_booking_type' => $_POST['l_booking_type'],
        'l_booking_status' => $_POST['l_booking_status'],
        'l_fare_type' => $_POST['l_fare_type'],
        'l_class' => $_POST['l_class'],
        'l_airline' => $_POST['l_airline'],
        'l_p_type' => $l_p_type,
        'l_p_first_name' => $l_p_first_name,
        'l_p_middle_name' => $l_p_middle_name,
        'l_p_last_name' => $l_p_last_name,
        'l_p_dob' => $l_p_dob,
        'l_contact_name' => $_POST['l_contact_name'],
        'l_phone_type' => $_POST['l_phone_type'],
        'l_phone_no' => $_POST['l_phone_no'],
        'l_alt_phone_no' => $_POST['l_alt_phone_no'],
        'l_email' => $_POST['l_email'],
        'l_alt_email' => $_POST['l_alt_email'],
        'l_address' => $_POST['l_address'],
        'l_passenger_type' => $_POST['l_passenger_type'],
        'l_passenger_no_of' => $_POST['l_passenger_no_of'],
        'l_passenger_net_amount' => $_POST['l_passenger_net_amount'],
        'l_mco' => $_POST['l_mco'],
        'l_gross' => $_POST['l_gross'],
        'l_a_micellaneous' => $_POST['l_a_micellaneous'],
        'l_a_net_amount' => $_POST['l_a_net_amount'],
        'l_a_mco' => $_POST['l_a_mco'],
        'l_a_gross' => $_POST['l_a_gross'],
        'l_p_authorization' => $_POST['l_p_authorization'],
        'l_p_payment_method' => $_POST['l_p_payment_method'],
        'l_p_card_holder_name' => $_POST['l_p_card_holder_name'],
        'l_p_card_holder_phone_no' => $_POST['countryCode'] . ' ' . $_POST['l_p_card_holder_phone_no'],
        'l_p_transaction_type' => $_POST['l_p_transaction_type'],
        'l_p_card_no' => $_POST['l_p_card_no'],
        'l_p_card_mm' => $_POST['l_p_card_mm'],
        'l_p_card_yy' => $_POST['l_p_card_yy'],
        'l_p_card_cvv' => $_POST['l_p_card_cvv'],
        'l_p_street_address' => $_POST['l_p_street_address'],
        'l_p_city' => $_POST['l_p_city'],
        'l_p_state' => $_POST['l_p_state'],
        'l_p_zip_code' => $_POST['l_p_zip_code'],
        'l_comments' => $_POST['l_comments'],
        'l_submitted_by' => $_SESSION['u_username'],
        'l_submitted_from' => $_SERVER['REMOTE_ADDR'],
        'l_add_on' => $mytime,
    ];

    if ($this->obj->insertData($allData, $commentData)) {
        echo '
        <script>
            window.location.href = "http://oaqus.com/english/crm/index.php?controller=user&function=home";
        </script>';
    }
    
}

?>










<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas()
    });
</script>
<style>
    .nicEdit-panel {
        display: none;
    }
</style>


<script>
    $(document).ready(function() {
        var wrapper = $(".container1");
        var add_button = $(".add_form_field");
        $(add_button).click(function(e) {
            e.preventDefault();
            $(wrapper).append(
                '<div class="p-1" style="border-bottom: 5px solid #ccc; border-color: red;"><div class="row"><div class="col-sm-4"> Type <span class="text-danger font-weight-bold">*</span><select name="l_p_type[]" id="" class="form-control" required><option>Adult</option><option>Child</option><option>Infant</option></select></div><div class="col-sm-4">First Name <span class="text-danger font-weight-bold">*</span><input type="text" name="l_p_first_name[]" id="" class="form-control" required></div><div class="col-sm-4">Middle Name <input type="text" name="l_p_middle_name[]" id="" class="form-control"> </div> </div> <br> <div class="row"> <div class="col-sm-4"> Last Name <span class="text-danger font-weight-bold">*</span>  <input type="text" name="l_p_last_name[]" id="" class="form-control" required>  </div>  <div class="col-sm-4 mb-2">  Date Of Birth <span class="text-danger font-weight-bold">*</span> (MM/DD/YYYY) <input type="date" name="l_p_dob[]" id="" class="form-control" required> </div>  </div><a href="#" class="delete btn btn-danger">Delete</a></div></div>'); //add input box  
        });
        $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
        })
    });
</script>