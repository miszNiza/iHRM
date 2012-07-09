<!-- Form -->
        <form action="" class="form">
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6></h6></div>
                    <div class="formRow">
                        <label>Section / Unit / Project</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'section')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Department</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'department')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Division</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'division')); ?></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="<?php echo site_url('assets/images'); ?>/icons/dark/list.png" alt="" class="titleIcon" /><h6></h6></div>
                    <div class="formRow">
                        <label>Staff Name</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'name')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Staff ID</label>
                        <div class="formRight"><?php echo form_input(array('name'=>'staff_id')); ?></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Identity Card No</label>
                        <div class="formRight">
                            <span class="oneThree"><?php echo form_input(array('name'=>'ic_new','placeholder'=>'New I/C')); ?></span>
                            <span class="oneThree"><?php echo form_input(array('name'=>'ic_old','placeholder'=>'Old I/C')); ?></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Identity Card Color</label>
                        <div class="formRight">
                            <?php echo form_input(array('name'=>'ic_color')); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Date of Birth</label>
                        <div class="formRight">
                            <span class="oneThree"><?php echo form_input(array('name'=>'dob_day','placeholder'=>'Day')); ?></span>
                            <span class="oneThree"><?php echo form_input(array('name'=>'dob_month','placeholder'=>'Month')); ?></span>                        </div>
                            <span class="oneThree"><?php echo form_input(array('name'=>'dob_year','placeholder'=>'Year')); ?></span>                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Text input with notice:</label>
                        <div class="formRight"><input type="text" value="" /><span class="formNote">This is a sample note</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Read only input</label>
                        <div class="formRight"><input type="text" readonly="readonly" value="Read only" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Disabled text input</label>
                        <div class="formRight"><input type="text" disabled="disabled" value="Disabled field" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Input with placeholder</label>
                        <div class="formRight"><input type="text" placeholder="Text input placeholder attribute" value="" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Input field with value</label>
                        <div class="formRight"><input type="text" value="This is the value" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Input with tooltip:</label>
                        <div class="formRight"><input type="text" value="" title="Awesome stuff" class="tipN" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Input with max characters:</label>
                        <div class="formRight"><input type="text" value="" maxlength="10" placeholder="Max 10 characters here" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                    	<label><img src="images/icons/dark/stats.png" alt="" class="labelImg tipS" title="Some title..." />With icons:</label>
                        <div class="formRight"><input type="text" value="" /><a href="#" title=""><img src="images/icons/dark/download.png" alt="" class="inputImg tipS" title="Some title..." /></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow dnone">
                    	<label>Inputs grid:</label>
                        <div class="formRight">
                            <span class="oneTwo"><input type="text" value="one two" /></span>
                            <span class="oneTwo"><input type="text" value="one two" /></span>
                        </div>
                        <div class="formRight mt12">
                            <span class="oneThree"><input type="text" value="one three" /></span>
                            <span class="oneThree"><input type="text" value="one three" /></span>
                            <span class="oneThree"><input type="text" value="one three" /></span>
                        </div>
                        <div class="formRight mt12">
                            <span class="oneFour"><input type="text" value="one four" /></span>
                            <span class="oneFour"><input type="text" value="one four" /></span>
                            <span class="oneFour"><input type="text" value="one four" /></span>
                            <span class="oneFour"><input type="text" value="one four" /></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Usual textarea:</label>
                        <div class="formRight"><textarea rows="8" cols="" name="textarea"></textarea></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Autogrowing textarea:</label>
                        <div class="formRight"><textarea rows="8" cols="" name="growingTextarea" class="autoGrow"></textarea></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Input limiter:</label>
                        <div class="formRight"><textarea rows="8" cols="" name="growingTextarea" class="autoGrow lim" placeholder="Type something"></textarea></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label for="tags">Tags:</label>
                        <div class="formRight"><input type="text" id="tags" name="tags" class="tags" value="these,are,sample,tags" /></div>
                        <div class="clear"></div>
                    </div>
                    
                </div>
            </fieldset>
            
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/record.png" alt="" class="titleIcon" /><h6>Selects</h6><div class="num"><a href="#" class="greyNum">+245</a></div></div>
                    <div class="formRow">
                        <label>Select dropdown:</label>
                        <div class="formRight">
                            <select name="select2" >
                                <option value="opt1">Usual select dropdown</option>
                                <option value="opt2">Option 2</option>
                                <option value="opt3">Option 3</option>
                                <option value="opt4">Option 4</option>
                                <option value="opt5">Option 5</option>
                                <option value="opt6">Option 6</option>
                                <option value="opt7">Option 7</option>
                                <option value="opt8">Option 8</option>
                            </select>           
                        </div>             
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>Select with search:</label>
                        <div class="formRight searchDrop">
                        <select data-placeholder="Choose a Country..." class="chzn-select" style="width:350px;" tabindex="2">
                            <option value=""></option> 
                            <option value="Cambodia">Cambodia</option> 
                            <option value="Cameroon">Cameroon</option> 
                            <option value="Canada">Canada</option> 
                            <option value="Cape Verde">Cape Verde</option> 
                            <option value="Cayman Islands">Cayman Islands</option> 
                            <option value="Central African Republic">Central African Republic</option> 
                            <option value="Chad">Chad</option> 
                            <option value="Chile">Chile</option> 
                            <option value="China">China</option> 
                            <option value="Christmas Island">Christmas Island</option> 
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                            <option value="Colombia">Colombia</option> 
                            <option value="Comoros">Comoros</option> 
                            <option value="Congo">Congo</option> 
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                            <option value="Cook Islands">Cook Islands</option> 
                            <option value="Costa Rica">Costa Rica</option> 
                            <option value="Cote D'ivoire">Cote D'ivoire</option> 
                            <option value="Croatia">Croatia</option> 
                            <option value="Cuba">Cuba</option> 
                            <option value="Cyprus">Cyprus</option> 
                            <option value="Czech Republic">Czech Republic</option> 
                            <option value="Denmark">Denmark</option> 
                            <option value="Djibouti">Djibouti</option> 
                            <option value="Dominica">Dominica</option> 
                            <option value="Dominican Republic">Dominican Republic</option> 
                            <option value="Ecuador">Ecuador</option> 
                            <option value="Egypt">Egypt</option> 
                            <option value="El Salvador">El Salvador</option> 
                            <option value="Equatorial Guinea">Equatorial Guinea</option> 
                            <option value="Eritrea">Eritrea</option> 
                            <option value="Estonia">Estonia</option> 
                            <option value="Ethiopia">Ethiopia</option> 
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                            <option value="Faroe Islands">Faroe Islands</option> 
                            <option value="Fiji">Fiji</option> 
                            <option value="Finland">Finland</option> 
                            <option value="France">France</option> 
                            <option value="French Guiana">French Guiana</option> 
                            <option value="French Polynesia">French Polynesia</option> 
                            <option value="French Southern Territories">French Southern Territories</option> 
                            <option value="Gabon">Gabon</option> 
                            <option value="Gambia">Gambia</option> 
                            <option value="Georgia">Georgia</option> 
                            <option value="Germany">Germany</option> 
                            <option value="Ghana">Ghana</option> 
                            <option value="Gibraltar">Gibraltar</option> 
                            <option value="Greece">Greece</option> 
                            <option value="Greenland">Greenland</option> 
                            <option value="Grenada">Grenada</option> 
                            <option value="Guadeloupe">Guadeloupe</option> 
                            <option value="Guam">Guam</option> 
                            <option value="Guatemala">Guatemala</option> 
                            <option value="Guinea">Guinea</option> 
                            <option value="Guinea-bissau">Guinea-bissau</option> 
                            <option value="Guyana">Guyana</option> 
                            <option value="Haiti">Haiti</option> 
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                            <option value="Honduras">Honduras</option> 
                            <option value="Hong Kong">Hong Kong</option> 
                            <option value="Hungary">Hungary</option> 
                            <option value="Iceland">Iceland</option> 
                            <option value="India">India</option> 
                            <option value="Indonesia">Indonesia</option> 
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                            <option value="Iraq">Iraq</option> 
                            <option value="Ireland">Ireland</option> 
                            <option value="Israel">Israel</option> 
                            <option value="Italy">Italy</option> 
                            <option value="Jamaica">Jamaica</option> 
                            <option value="Japan">Japan</option> 
                            <option value="Jordan">Jordan</option> 
                            <option value="Kazakhstan">Kazakhstan</option> 
                            <option value="Kenya">Kenya</option> 
                            <option value="Kiribati">Kiribati</option> 
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                            <option value="Korea, Republic of">Korea, Republic of</option> 
                            <option value="Kuwait">Kuwait</option> 
                            <option value="Kyrgyzstan">Kyrgyzstan</option> 
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                            <option value="Latvia">Latvia</option> 
                            <option value="Lebanon">Lebanon</option> 
                            <option value="Lesotho">Lesotho</option> 
                            <option value="Liberia">Liberia</option> 
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                            <option value="Liechtenstein">Liechtenstein</option> 
                            <option value="Lithuania">Lithuania</option> 
                            <option value="Luxembourg">Luxembourg</option> 
                            <option value="Macao">Macao</option> 
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                            <option value="Madagascar">Madagascar</option> 
                            <option value="Malawi">Malawi</option> 
                            <option value="Malaysia">Malaysia</option> 
                            <option value="Maldives">Maldives</option> 
                            <option value="Mali">Mali</option> 
                            <option value="Malta">Malta</option> 
                            <option value="Marshall Islands">Marshall Islands</option> 
                            <option value="Martinique">Martinique</option> 
                            <option value="Mauritania">Mauritania</option> 
                            <option value="Mauritius">Mauritius</option> 
                            <option value="Mayotte">Mayotte</option> 
                            <option value="Mexico">Mexico</option> 
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                            <option value="Moldova, Republic of">Moldova, Republic of</option> 
                            <option value="Monaco">Monaco</option> 
                            <option value="Mongolia">Mongolia</option> 
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option> 
                            <option value="Morocco">Morocco</option> 
                            <option value="Mozambique">Mozambique</option> 
                            <option value="Myanmar">Myanmar</option> 
                            <option value="Namibia">Namibia</option> 
                            <option value="Nauru">Nauru</option> 
                            <option value="Nepal">Nepal</option> 
                            <option value="Netherlands">Netherlands</option> 
                            <option value="Netherlands Antilles">Netherlands Antilles</option> 
                            <option value="New Caledonia">New Caledonia</option> 
                            <option value="New Zealand">New Zealand</option> 
                            <option value="Nicaragua">Nicaragua</option> 
                            <option value="Niger">Niger</option> 
                            <option value="Nigeria">Nigeria</option> 
                            <option value="Niue">Niue</option> 
                            <option value="Norfolk Island">Norfolk Island</option> 
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                            <option value="Norway">Norway</option> 
                            <option value="Oman">Oman</option> 
                            <option value="Pakistan">Pakistan</option> 
                            <option value="Palau">Palau</option> 
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                            <option value="Panama">Panama</option> 
                            <option value="Papua New Guinea">Papua New Guinea</option> 
                            <option value="Paraguay">Paraguay</option> 
                            <option value="Peru">Peru</option> 
                            <option value="Philippines">Philippines</option> 
                            <option value="Pitcairn">Pitcairn</option> 
                            <option value="Poland">Poland</option> 
                            <option value="Portugal">Portugal</option> 
                            <option value="Puerto Rico">Puerto Rico</option> 
                            <option value="Qatar">Qatar</option> 
                            <option value="Reunion">Reunion</option> 
                            <option value="Romania">Romania</option> 
                            <option value="Russian Federation">Russian Federation</option> 
                            <option value="Rwanda">Rwanda</option> 
                            <option value="Saint Helena">Saint Helena</option> 
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                            <option value="Saint Lucia">Saint Lucia</option> 
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                            <option value="Samoa">Samoa</option> 
                            <option value="San Marino">San Marino</option> 
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                            <option value="Saudi Arabia">Saudi Arabia</option> 
                            <option value="Senegal">Senegal</option> 
                            <option value="Serbia">Serbia</option> 
                            <option value="Seychelles">Seychelles</option> 
                            <option value="Sierra Leone">Sierra Leone</option> 
                            <option value="Singapore">Singapore</option> 
                            <option value="Slovakia">Slovakia</option> 
                            <option value="Slovenia">Slovenia</option> 
                            <option value="Solomon Islands">Solomon Islands</option> 
                            <option value="Somalia">Somalia</option> 
                            <option value="South Africa">South Africa</option> 
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                            <option value="South Sudan">South Sudan</option> 
                            <option value="Spain">Spain</option> 
                            <option value="Sri Lanka">Sri Lanka</option> 
                            <option value="Sudan">Sudan</option> 
                            <option value="Suriname">Suriname</option> 
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                            <option value="Swaziland">Swaziland</option> 
                            <option value="Sweden">Sweden</option> 
                            <option value="Switzerland">Switzerland</option> 
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                            <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
                            <option value="Tajikistan">Tajikistan</option> 
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                            <option value="Thailand">Thailand</option> 
                            <option value="Timor-leste">Timor-leste</option> 
                            <option value="Togo">Togo</option> 
                            <option value="Tokelau">Tokelau</option> 
                            <option value="Tonga">Tonga</option> 
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                            <option value="Tunisia">Tunisia</option> 
                            <option value="Turkey">Turkey</option> 
                            <option value="Turkmenistan">Turkmenistan</option> 
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                            <option value="Tuvalu">Tuvalu</option> 
                            <option value="Uganda">Uganda</option> 
                            <option value="Ukraine">Ukraine</option> 
                            <option value="United Arab Emirates">United Arab Emirates</option> 
                            <option value="United Kingdom">United Kingdom</option> 
                            <option value="United States">United States</option> 
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                            <option value="Uruguay">Uruguay</option> 
                        </select>
                        </div>             
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>Multiple with search:</label>
                        <div class="formRight">
                            <select data-placeholder="Your Favorite Football Team" style="" class="chzn-select" multiple="multiple" tabindex="6">
                                <option value=""></option>
                                <optgroup label="NFC EAST">
                                    <option>Dallas Cowboys</option>
                                    <option selected="selected">New York Giants</option>
                                    <option>Philadelphia Eagles</option>
                                    <option>Washington Redskins</option>
                                </optgroup>
                                <optgroup label="NFC NORTH">
                                    <option selected="selected">Chicago Bears</option>
                                    <option>Detroit Lions</option>
                                    <option>Green Bay Packers</option>
                                    <option>Minnesota Vikings</option>
                                </optgroup>
                                <optgroup label="NFC SOUTH">
                                    <option selected="selected">Atlanta Falcons</option>
                                    <option>Carolina Panthers</option>
                                    <option>New Orleans Saints</option>
                                    <option>Tampa Bay Buccaneers</option>
                                </optgroup>
                                <optgroup label="NFC WEST">
                                    <option>Arizona Cardinals</option>
                                    <option>St. Louis Rams</option>
                                    <option>San Francisco 49ers</option>
                                    <option>Seattle Seahawks</option>
                                </optgroup>
                                <optgroup label="AFC EAST">
                                    <option>Buffalo Bills</option>
                                    <option>Miami Dolphins</option>
                                    <option>New England Patriots</option>
                                    <option>New York Jets</option>
                                </optgroup>
                                <optgroup label="AFC NORTH">
                                    <option>Baltimore Ravens</option>
                                    <option>Cincinnati Bengals</option>
                                    <option>Cleveland Browns</option>
                                    <option>Pittsburgh Steelers</option>
                                </optgroup>
                                <optgroup label="AFC SOUTH">
                                    <option>Houston Texans</option>
                                    <option>Indianapolis Colts</option>
                                    <option>Jacksonville Jaguars</option>
                                    <option>Tennessee Titans</option>
                                </optgroup>
                                <optgroup label="AFC WEST">
                                    <option>Denver Broncos</option>
                                    <option>Kansas City Chiefs</option>
                                    <option>Oakland Raiders</option>
                                    <option>San Diego Chargers</option>
                                </optgroup>
                            </select>  
                        </div>             
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>Multiple select:</label>
                        <div class="formRight">
                            <select multiple="multiple" class="multiple" title="Click to Select a City">
                                <option selected="selected">Amsterdam</option>      
                                <option selected="selected">Atlanta</option>
                                <option>Baltimore</option>
                                <option>Boston</option>
                                <option>Buenos Aires</option>
                                <option>Calgary</option>
                                <option selected="selected">Chicago</option>
                                <option>Denver</option>
                                <option>Dubai</option>
                                <option>Frankfurt</option>
                                <option>Hong Kong</option>
                                <option>Honolulu</option>
                                <option>Houston</option>
                                <option>Kuala Lumpur</option>
                                <option>London</option>
                                <option>Los Angeles</option>
                                <option>Melbourne</option>
                                <option>Mexico City</option>
                                <option>Miami</option>
                                <option>Minneapolis</option>
                                <option>Montreal</option>
                                <option>New York City</option>
                                <option>Paris</option>
                                <option>Philadelphia</option>
                                <option>Rotterdam</option>
                                <option>San Diego</option>
                                <option>San Francisco</option>
                                <option>Sao Paulo</option>
                                <option>Seattle</option>
                                <option>Seoul</option>
                                <option>Shanghai</option>
                                <option>Singapore</option>
                                <option>Sydney</option>
                                <option>Tokyo</option>
                                <option>Toronto</option>
                                <option>Vancouver</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>Usual spinner:</label>
                        <div class="formRight">
                        	<input type="text" id="sDec" value="10" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>With decimals:</label>
                        <div class="formRight">
                        	<input type="text" id="sStep" value="10" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>With currency:</label>
                        <div class="formRight">
                        	<input type="text" id="sCur" value="10" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>With inline data:</label>
                        <div class="formRight">
                            <ul id="sInline">
                                <li>item 1</li>
                                <li>item 2</li>
                                <li>item 3</li>
                                <li>item 4</li>
                                <li>item 5</li>
                                <li>item 6</li>
                                <li>item 7</li>
                                <li>item 8</li>
                                <li>item 9</li>
                                <li>item 10</li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>With inline links:</label>
                        <div class="formRight"><div id="sLink"></div></div><div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>Checkboxes:</label>
                        <div class="formRight">
                        	<input type="checkbox" checked="checked" name="check1" id="check1" /><label for="check1">Checked checkbox</label>
                            <input type="checkbox" name="check2" id="check2" /><label for="check2">Unchecked checkbox</label>
                            <input type="checkbox" name="check3" disabled="disabled" checked="checked" id="check3" /><label for="check3" class="disabled">Disabled checked</label>
                            <input type="checkbox" name="check4" disabled="disabled" id="check4" class="disabled" /><label for="check4" class="disabled">Disabled unchecked</label>
                        </div><div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>Radio buttons:</label>
                        <div class="formRight">
                        	<input type="radio" checked="checked" name="radio1" id="radio1" /><label for="radio1">Radio checked</label>
                            <input type="radio" name="radio1" id="radio2" /><label for="radio2">Radio unchecked</label>
                            <input type="radio" name="radio3" disabled="disabled" checked="checked" id="radio3" /><label for="radio3" class="disabled">Disabled checked</label>
                            <input type="radio" name="radio4" disabled="disabled" id="radio4" class="disabled" /><label for="radio4" class="disabled">Disabled unchecked</label>
                        </div><div class="clear"></div>
                    </div>
                    
                    <div class="formRow">
                        <label>Usual file input:</label>
                        <div class="formRight">
                        	<input type="file" id="file" name="file" />
                        </div><div class="clear"></div>
                    </div>
                </div>
            </fieldset>
            
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/transfer.png" alt="" class="titleIcon" /><h6>Dual selects with filtering</h6></div>
                    <div class="body">
                    <div class="leftPart">
                        <div class="filter"><span>Filter: </span><input type="text" id="box1Filter" class="boxFilter" /><input type="button" id="box1Clear" class="fBtn" value="x" /><div class="clear"></div></div>
                        
                        <select id="box1View" multiple="multiple" class="multiple" style="height:300px;">
                        <option value="501649">2008-2009 "Mini" Baja</option>
                        <option value="501497" selected="selected">AAPA - Asian American Psychological Association</option>
                        <option value="501053">Academy of Film Geeks</option>
                        <option value="500001">Accounting Association</option>
                        <option value="501227" selected="selected">ACLU</option>
                        <option value="501610" selected="selected">Active Minds</option>
                        <option value="501514">Activism with A Reel Edge (A.W.A.R.E.)</option>
                        <option value="501656">Adopt a Grandparent Program</option>
                        <option value="501050">Africa Awareness Student Organization</option>
                        <option value="501075">African Diasporic Cultural RC Interns</option>
                        <option value="501493">Agape</option>
                        <option value="501562" selected="selected">AGE-Alliance for Graduate Excellence</option>
                        <option value="500676">AICHE (American Inst of Chemical Engineers)</option>
                        <option value="501460">AIDS Sensitivity Awareness Project ASAP</option>
                        <option value="500004">Aikido Club</option>
                        <option value="500336">Akanke</option>
                        </select>
                        <br/>
                        <span id="box1Counter" class="countLabel"></span>
                        
                        <div class="dn"><select id="box1Storage" name="box1Storage"></select></div>
                    </div>
                        
                    <div class="dualControl">
                        <button id="to2" type="button" class="basic mr5 mb15">&nbsp;&gt;&nbsp;</button>
                        <button id="allTo2" type="button" class="basic">&nbsp;&gt;&gt;&nbsp;</button><br />
                        <button id="to1" type="button" class="basic mr5">&nbsp;&lt;&nbsp;</button>
                        <button id="allTo1" type="button" class="basic">&nbsp;&lt;&lt;&nbsp;</button>
                    </div>
                        
                    <div class="rightPart">
                        <div class="filter"><span>Filter: </span><input type="text" id="box2Filter" class="boxFilter" /><input type="button" id="box2Clear" class="fBtn" value="x" /><div class="clear"></div></div>
                        <select id="box2View" multiple="multiple" class="multiple" style="height:300px;"></select><br/>
                        <span id="box2Counter" class="countLabel"></span>
                        
                        <div class="dn"><select id="box2Storage"></select></div>
                    </div>
                    <div class="clear"></div>
                    </div>
                </div>
            </fieldset>
            
            <fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Masked input fields</h6></div>
                    <div class="formRow">
                        <label>Date:</label>
                        <div class="formRight"><input type="text" class="maskDate" id="maskDate" value="value" /><span class="formNote">99/99/9999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label for="labelFor">Phone:</label>
                        <div class="formRight"><input type="text" class="maskPhone" value="" /><span class="formNote">(999) 999-9999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Phone + Ext:</label>
                        <div class="formRight"><input type="text" class="maskPhoneExt" value="" /><span class="formNote">(999) 999-9999? x99999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Int'l Phone:</label>
                        <div class="formRight"><input type="text" class="maskIntPhone" value="" /><span class="formNote">+33 999 999 999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Tax ID:</label>
                        <div class="formRight"><input type="text" class="maskTin" value="" /><span class="formNote">99-9999999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>SSN:</label>
                        <div class="formRight"><input type="text" class="maskSsn" /><span class="formNote">999-99-9999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Product Key:</label>
                        <div class="formRight"><input type="text" class="maskProd" /><span class="formNote">a*-999-a999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Eye Script:</label>
                        <div class="formRight"><input type="text" class="maskEye" /><span class="formNote">~9.99 ~9.99 999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Purchase Order:</label>
                        <div class="formRight"><input type="text" class="maskPo" value="" /><span class="formNote">aaa-999-***</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <label>Percent:</label>
                        <div class="formRight"><input type="text" class="maskPct" value="" /><span class="formNote">99%</span></div>
                        <div class="clear"></div>
                    </div>
                    
                </div>
                <div id="unmask"></div>
            </fieldset>
        </form>