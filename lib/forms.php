<?php



class FormBuild extends Connection {


  function showForm(){
    echo '
    <h1>Submit Your Wutang Art or Tattoos</h1>
    <p>The WuTang Clan is working on a new documentary and is asking their fans to submit fan art or Tattoos for possible inclusion in the documentary. If you want to be a part of history, fill out the form below and show us what you got! Remember that you need to legally own the artwork or tatoo and be able to prove it</p>
    <hr/>
    <!-- <button onclick="getLocation()">Find Me</button> -->
    <form method="post" enctype="multipart/form-data" id="summary" class="">
    <!-- <input type="hidden" value="" name="latitude" id="latitude">
        <input type="hidden" value="" name="longitude" id="longitude"> -->
        <div class="form-group">
          <label for="full_name">Full Name</label>
          <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" data-validation="required" data-validation-error-msg="Please enter your name.">
        </div>
        <div class="form-group">
          <label for="email_address">Email address</label>
          <input type="email" class="form-control" name="email_address" id="email_address" placeholder="Email Address" data-validation="email">
        </div>

        <div class="form-group">
          <label for="full_name">Phone Number</label>
          <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="XXX-XXX-XXXX" data-validation="required" data-validation-error-msg="Please enter your phone number.">
        </div>

        <div class="form-group"> <!-- Street 1 -->
          <label for="address_1" class="control-label">Street Address 1</label>
          <input type="text" class="form-control" id="address_1" name="address_1" placeholder="Street address" data-validation="required" data-validation-error-msg="Please enter your Address.">
        </div>					
                    
        <div class="form-group"> <!-- Street 2 -->
          <label for="address_2" class="control-label">Street Address 2</label>
          <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Apartment, suite, unit, building, floor, etc.">
        </div>	

        <div class="form-group"> <!-- Country Button -->
          <label for="country_id" class="control-label">Country</label>
          <select class="form-control" id="country_id" name="country_id"  data-validation="required" data-validation-error-msg="Please select a country">
          <option value="" selected="selected">(please select a country)</option>
          <option value="AF">Afghanistan</option>
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
          <option value="BA">Bosnia and Herzegowina</option>
          <option value="BW">Botswana</option>
          <option value="BV">Bouvet Island</option>
          <option value="BR">Brazil</option>
          <option value="IO">British Indian Ocean Territory</option>
          <option value="BN">Brunei Darussalam</option>
          <option value="BG">Bulgaria</option>
          <option value="BF">Burkina Faso</option>
          <option value="BI">Burundi</option>
          <option value="KH">Cambodia</option>
          <option value="CM">Cameroon</option>
          <option value="CA">Canada</option>
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
          <option value="CG">Congo</option>
          <option value="CD">Congo, the Democratic Republic of the</option>
          <option value="CK">Cook Islands</option>
          <option value="CR">Costa Rica</option>
          <option value="CI">Cote d\'Ivoire</option>
          <option value="HR">Croatia (Hrvatska)</option>
          <option value="CU">Cuba</option>
          <option value="CY">Cyprus</option>
          <option value="CZ">Czech Republic</option>
          <option value="DK">Denmark</option>
          <option value="DJ">Djibouti</option>
          <option value="DM">Dominica</option>
          <option value="DO">Dominican Republic</option>
          <option value="TP">East Timor</option>
          <option value="EC">Ecuador</option>
          <option value="EG">Egypt</option>
          <option value="SV">El Salvador</option>
          <option value="GQ">Equatorial Guinea</option>
          <option value="ER">Eritrea</option>
          <option value="EE">Estonia</option>
          <option value="ET">Ethiopia</option>
          <option value="FK">Falkland Islands (Malvinas)</option>
          <option value="FO">Faroe Islands</option>
          <option value="FJ">Fiji</option>
          <option value="FI">Finland</option>
          <option value="FR">France</option>
          <option value="FX">France, Metropolitan</option>
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
          <option value="GN">Guinea</option>
          <option value="GW">Guinea-Bissau</option>
          <option value="GY">Guyana</option>
          <option value="HT">Haiti</option>
          <option value="HM">Heard and Mc Donald Islands</option>
          <option value="VA">Holy See (Vatican City State)</option>
          <option value="HN">Honduras</option>
          <option value="HK">Hong Kong</option>
          <option value="HU">Hungary</option>
          <option value="IS">Iceland</option>
          <option value="IN">India</option>
          <option value="ID">Indonesia</option>
          <option value="IR">Iran (Islamic Republic of)</option>
          <option value="IQ">Iraq</option>
          <option value="IE">Ireland</option>
          <option value="IL">Israel</option>
          <option value="IT">Italy</option>
          <option value="JM">Jamaica</option>
          <option value="JP">Japan</option>
          <option value="JO">Jordan</option>
          <option value="KZ">Kazakhstan</option>
          <option value="KE">Kenya</option>
          <option value="KI">Kiribati</option>
          <option value="KP">Korea, Democratic People\'s Republic of</option>
          <option value="KR">Korea, Republic of</option>
          <option value="KW">Kuwait</option>
          <option value="KG">Kyrgyzstan</option>
          <option value="LA">Lao People\'s Democratic Republic</option>
          <option value="LV">Latvia</option>
          <option value="LB">Lebanon</option>
          <option value="LS">Lesotho</option>
          <option value="LR">Liberia</option>
          <option value="LY">Libyan Arab Jamahiriya</option>
          <option value="LI">Liechtenstein</option>
          <option value="LT">Lithuania</option>
          <option value="LU">Luxembourg</option>
          <option value="MO">Macau</option>
          <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
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
          <option value="FM">Micronesia, Federated States of</option>
          <option value="MD">Moldova, Republic of</option>
          <option value="MC">Monaco</option>
          <option value="MN">Mongolia</option>
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
          <option value="MP">Northern Mariana Islands</option>
          <option value="NO">Norway</option>
          <option value="OM">Oman</option>
          <option value="PK">Pakistan</option>
          <option value="PW">Palau</option>
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
          <option value="RE">Reunion</option>
          <option value="RO">Romania</option>
          <option value="RU">Russian Federation</option>
          <option value="RW">Rwanda</option>
          <option value="KN">Saint Kitts and Nevis</option>
          <option value="LC">Saint LUCIA</option>
          <option value="VC">Saint Vincent and the Grenadines</option>
          <option value="WS">Samoa</option>
          <option value="SM">San Marino</option>
          <option value="ST">Sao Tome and Principe</option>
          <option value="SA">Saudi Arabia</option>
          <option value="SN">Senegal</option>
          <option value="SC">Seychelles</option>
          <option value="SL">Sierra Leone</option>
          <option value="SG">Singapore</option>
          <option value="SK">Slovakia (Slovak Republic)</option>
          <option value="SI">Slovenia</option>
          <option value="SB">Solomon Islands</option>
          <option value="SO">Somalia</option>
          <option value="ZA">South Africa</option>
          <option value="GS">South Georgia and the South Sandwich Islands</option>
          <option value="ES">Spain</option>
          <option value="LK">Sri Lanka</option>
          <option value="SH">St. Helena</option>
          <option value="PM">St. Pierre and Miquelon</option>
          <option value="SD">Sudan</option>
          <option value="SR">Suriname</option>
          <option value="SJ">Svalbard and Jan Mayen Islands</option>
          <option value="SZ">Swaziland</option>
          <option value="SE">Sweden</option>
          <option value="CH">Switzerland</option>
          <option value="SY">Syrian Arab Republic</option>
          <option value="TW">Taiwan, Province of China</option>
          <option value="TJ">Tajikistan</option>
          <option value="TZ">Tanzania, United Republic of</option>
          <option value="TH">Thailand</option>
          <option value="TG">Togo</option>
          <option value="TK">Tokelau</option>
          <option value="TO">Tonga</option>
          <option value="TT">Trinidad and Tobago</option>
          <option value="TN">Tunisia</option>
          <option value="TR">Turkey</option>
          <option value="TM">Turkmenistan</option>
          <option value="TC">Turks and Caicos Islands</option>
          <option value="TV">Tuvalu</option>
          <option value="UG">Uganda</option>
          <option value="UA">Ukraine</option>
          <option value="AE">United Arab Emirates</option>
          <option value="GB">United Kingdom</option>
          <option value="US">United States</option>
          <option value="UM">United States Minor Outlying Islands</option>
          <option value="UY">Uruguay</option>
          <option value="UZ">Uzbekistan</option>
          <option value="VU">Vanuatu</option>
          <option value="VE">Venezuela</option>
          <option value="VN">Viet Nam</option>
          <option value="VG">Virgin Islands (British)</option>
          <option value="VI">Virgin Islands (U.S.)</option>
          <option value="WF">Wallis and Futuna Islands</option>
          <option value="EH">Western Sahara</option>
          <option value="YE">Yemen</option>
          <option value="YU">Yugoslavia</option>
          <option value="ZM">Zambia</option>
          <option value="ZW">Zimbabwe</option>
          </select>					
        </div>

        <div class="form-group"> <!-- City-->
          <label for="city_name" class="control-label">City</label>
          <input type="text" class="form-control" id="city_name" name="city_name" placeholder="City" data-validation="required" data-validation-error-msg="Please enter your city.">
        </div>									
                    
        <div class="form-group"> <!-- State Button -->
          <label for="state_abbreviation" class="control-label">State</label>
          <select class="form-control" id="state_abbreviation" name="state_abbreviation">
            <option value="" selected="selected">(please select a state)</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
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
          </select>					
        </div>
        
        <div class="form-group"> <!-- Zip Code-->
          <label for="zipcode" class="control-label">Zip Code</label>
          <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="#####"  data-validation="required" data-validation-error-msg="Please enter your zipcode">
        </div>

        <div class="form-group">
          <label for="media_type" class="control-label">Media Type</label>
          <select class="form-control" id="media_type" name="media_type"  data-validation="required" data-validation-error-msg="Please select a Art or Tattoo.">
            <option value="">Select Media Type</option>
            <option value="1">Original Wu Art</option>
            <option value="2">Personal Tattoo</option>
          </select>					
        </div>



        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="art_file" name="art_file" class="form-control"  data-validation="required" data-validation="mime size" data-validation-allowing="jpg, png, gif" data-validation-max-size="10M" data-validation-error-msg-required="No image selected">
        </div>

        

        <div class="form-group">
          <input type="submit" name=submit class="btn btn-default btn-lg btn-success btn-block" value="Submit">
        </div>
        
      </form>
    ';

  }









  function do_form(){
    $full_name            = mysqli_real_escape_string($this->dbc,$_POST['full_name']);
    $email_address        = mysqli_real_escape_string($this->dbc,$_POST['email_address']);
    $phone_number         = mysqli_real_escape_string($this->dbc,$_POST['phone_number']);
    $address_1            = mysqli_real_escape_string($this->dbc,$_POST['address_1']);
    $address_2            = mysqli_real_escape_string($this->dbc,$_POST['address_2']);
    $country_id           = mysqli_real_escape_string($this->dbc,$_POST['country_id']);
    $city_name            = mysqli_real_escape_string($this->dbc,$_POST['city_name']);
    $state_abbreviation   = mysqli_real_escape_string($this->dbc,$_POST['state_abbreviation']);
    $zipcode              = mysqli_real_escape_string($this->dbc,$_POST['zipcode']);
    $media_type           = $_POST['media_type']; //mysqli_real_escape_string($this->dbc,);
    //$art_file             = mysqli_real_escape_string($this->dbc,$_POST['art_file']);


    #echo $_POST['longitude'];
    #echo '<br/>'.$_POST['latitude'];

    

        if(!empty($_FILES['art_file']))
        {
          $path = $_SERVER['DOCUMENT_ROOT']."/wu-art/files/";
          $path = $path . $this->clean_seo_strings( basename( $_FILES['art_file']['name']) );

          if(move_uploaded_file($_FILES['art_file']['tmp_name'], $path)) {

            $art_file_new = $this->clean_seo_strings( basename( $_FILES['art_file']['name']) );


          } else{
            $art_file_new = time().'.jpg';
          }
        }



        // $photo_old_1 = time();
        // if($_FILES['art_file']['size'] != 0)
        // {
        //         $targetfolder = $_SERVER['DOCUMENT_ROOT']."/wu-art/files/";
        //         $targetfolder = $targetfolder . $this->clean_seo_strings( basename( $_FILES['art_file']['name']) );
        //         $ok=1;
        //         $file_type=$_FILES['art_file']['type'];

        //         if ($file_type=="application/x-png" ||  $file_type=="application/png" || $file_type=="image/gif" || $file_type=="image/jpeg") 
        //         {
        //             if(move_uploaded_file($_FILES['art_file']['tmp_name'], $targetfolder))
        //             {
        //                 $art_file_new = $this->clean_seo_strings( basename( $_FILES['art_file']['name']) );
        //             }
        //             else {
        //                 $art_file_new = $photo_old_1;
        //             }
        //         }
        //         else {
        //             //echo "You may only upload PDFs, JPEGs or GIF files.<br>";
        //         }
        // }
        // else
        // {
        //   $art_file_new = $photo_old_1;
        // }
    

    //     echo '<br/>'.$full_name;
    // echo '<br/>'.$email_address;
    // echo '<br/>'.$phone_number;
    // echo '<br/>'.$address_1;
    // echo '<br/>'.$address_2;
    // echo '<br/>'.$country_id;
    // echo '<br/>'.$city_name;
    // echo '<br/>'.$state_abbreviation;
    // echo '<br/>'.$zipcode;
    // echo '<br/>'.$media_type;
    // echo '<br/>'.$art_file_new;

    //SELECT id,  FROM wutatart WHERE 1
        $sql = "INSERT INTO wutatart (full_name, email_address, phone_number, address_1, address_2, country_id, city_name, state_abbreviation, zipcode, media_type, art_file) VALUES ('$full_name', '$email_address', '$phone_number', '$address_1', '$address_2', '$country_id', '$city_name', '$state_abbreviation', '$zipcode', '$media_type', '$art_file_new')";

        $result = $this->dbc->query($sql);	

        if($result) {
            echo '
            <div class="panel panel-success" style="border-color: #333;">
                <div class="panel-heading" style="color: #fecc2f;background-color: #000;border-color: #191919;">
                    <h1>Completed</h1>
                </div>
                <div class="panel-body">
                    Your Art/Tattoo has been uploaded and saved!
                </div>
            </div>
            <script>
            setTimeout(function() {
              window.location.href = "http://wutangclan.net/";
            }, 2000);
            </script>
            ';
        }
        else {
            echo '
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h1>ERROR</h1>
                </div>
                <div class="panel-body">
                        There was a problem uploading your Art/Tattoo please try again.
                </div>
            </div>
            <script>
            setTimeout(function() {
              window.location.href = "http://wutangclan.net/wu-art/";
            }, 2000);
            </script>
            ';
        }
    

  }


  public function clean_seo_strings($str){
    $cleanedstr = preg_replace(
      "/(\t|\n|\v|\f|\r| |\xC2\x85|\xc2\xa0|\xe1\xa0\x8e|\xe2\x80[\x80-\x8D]|\xe2\x80\xa8|\xe2\x80\xa9|\xe2\x80\xaF|\xe2\x81\x9f|\xe2\x81\xa0|\xe3\x80\x80|\xef\xbb\xbf)+/","-",$str);
    return time().'-'.$cleanedstr;    
  }



  public function get_location($latitude='', $longitude='')
  {
      $geolocation = $latitude.','.$longitude;
      $request = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$geolocation.'&sensor=false'; 
      $file_contents = file_get_contents($request);
      $json_decode = json_decode($file_contents);
      if(isset($json_decode->results[0])) {
          $response = array();
          foreach($json_decode->results[0]->address_components as $addressComponet) {
              if(in_array('political', $addressComponet->types)) {
                      $response[] = $addressComponet->long_name; 
              }
          }

          if(isset($response[0])){ $first  =  $response[0];  } else { $first  = 'null'; }
          if(isset($response[1])){ $second =  $response[1];  } else { $second = 'null'; } 
          if(isset($response[2])){ $third  =  $response[2];  } else { $third  = 'null'; }
          if(isset($response[3])){ $fourth =  $response[3];  } else { $fourth = 'null'; }
          if(isset($response[4])){ $fifth  =  $response[4];  } else { $fifth  = 'null'; }


          $loc['address']=''; $loc['city']=''; $loc['state']=''; $loc['country']='';
          if( $first != 'null' && $second != 'null' && $third != 'null' && $fourth != 'null' && $fifth != 'null' ) {
              $loc['address'] = $first;
              $loc['city'] = $second;
              $loc['state'] = $fourth;
              $loc['country'] = $fifth;
          }
          else if ( $first != 'null' && $second != 'null' && $third != 'null' && $fourth != 'null' && $fifth == 'null'  ) {
              $loc['address'] = $first;
              $loc['city'] = $second;
              $loc['state'] = $third;
              $loc['country'] = $fourth;
          }
          else if ( $first != 'null' && $second != 'null' && $third != 'null' && $fourth == 'null' && $fifth == 'null' ) {
              $loc['city'] = $first;
              $loc['state'] = $second;
              $loc['country'] = $third;
          }
          else if ( $first != 'null' && $second != 'null' && $third == 'null' && $fourth == 'null' && $fifth == 'null'  ) {
              $loc['state'] = $first;
              $loc['country'] = $second;
          }
          else if ( $first != 'null' && $second == 'null' && $third == 'null' && $fourth == 'null' && $fifth == 'null'  ) {
              $loc['country'] = $first;
          }
        }
        return $loc;
  }






  function get_info(){ 
    $sql = "SELECT id, full_name, email_address, phone_number, address_1, address_2, country_id, city_name, state_abbreviation, zipcode, media_type, art_file, submit_date FROM wutatart ORDER BY submit_date DESC"; 
		
		$result_count = $this->dbc->query($sql);
		$numrows 			= $result_count->num_rows;
		$rowsperpage 	= 20;
		$totalpages 	= ceil($numrows / $rowsperpage);


		if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) { $currentpage = (int) $_GET['currentpage']; }
		else{ $currentpage = 1; }
		if ($currentpage > $totalpages)	{ $currentpage = $totalpages; }
		if ($currentpage < 1){ $currentpage = 1; }
		$offset = ($currentpage - 1) * $rowsperpage;
		
		
		$sql2 = $sql." LIMIT $offset, $rowsperpage";


		$result = $this->dbc->query($sql2); # Create the query for the function 
		$num = $result->num_rows; # see if we get any results back 



    if ( !isset($_GET['currentpage']) ) {  
      //$pagination_link = $_SERVER['REQUEST_URI'];
      $pagination_link = '/wu-art/peep.php';
    }
		else {
      $pagination_link = '/wu-art/peep.php';
      //$pagination_link = str_replace("/".basename($_SERVER['REQUEST_URI']),'',$_SERVER['REQUEST_URI']);
    }


		if($num > 0)
		{
			

			echo '
			<div class="row">
                <div class="col-sm-12">
                    <h3 style="margin-top:0;margin-bottom:0;">There are currently '.number_format($numrows).' uploads in the system</h3>
                </div>
			</div>
			';


			echo '
				<div class="row">
					<div class="col-sm-12 col-xs-12">';
					if($totalpages > 1)
					{
						$range = 3;
						echo '<div role="toolbar" class="btn-toolbar" style="margin-top: 20px;margin-bottom: 10px;"><div class="btn-group">';
						if ($currentpage > 1)
						{
							echo '<a class="btn btn-default" href="'.$pagination_link.'?currentpage=1">First</a>';
							$prevpage = $currentpage - 1;
							echo '<a class="btn btn-default" href="'.$pagination_link.'?currentpage='.$prevpage.'">Prev</a>';
						}	
						if ($currentpage <= 1){
							echo '<a class="btn btn-default disabled" href="'.$pagination_link.'?currentpage=1">First</a>';
							$prevpage = $currentpage - 1;
							echo '<a class="btn btn-default disabled" href="'.$pagination_link.'?currentpage='.$prevpage.'">Prev</a>';
						}
						// loop to show links to range of pages around current page
						for ($x = (($currentpage - $range) - 1); $x < (($currentpage + $range) + 1); $x++)
						{
							if (($x > 0) && ($x <= $totalpages))
							{
								if ($x == $currentpage) { echo '<a class="btn btn-default active disabled" href="'.$pagination_link.'?currentpage=1">'.$x.'</a>'; }
								else { echo '<a class="btn btn-default" href="'.$pagination_link.'?currentpage='.$x.'">'.$x.'</a>'; }
							} 
						}
						if ($currentpage != $totalpages)
						{
							$nextpage = $currentpage + 1;
							echo '<a class="btn btn-default" href="'.$pagination_link.'?currentpage='.$nextpage.'">Next</a>';
							echo '<a class="btn btn-default" href="'.$pagination_link.'?currentpage='.$totalpages.'">Last</a>';
						}
						else
						{
							echo '<a class="btn btn-default disabled" href="'.$pagination_link.'?currentpage='.$totalpages.'">Next</a>';	
							echo '<a class="btn btn-default disabled" href="'.$pagination_link.'?currentpage='.$totalpages.'">Last</a>';
						}					
						echo '</div></div><div class="clear clearfix"></div>';
					}
			echo '		
					</div>		
      ';

      echo '
      <table class="table table-hover" cellspacing="0" cellpadding="0" border="0">
        <thead>
            <tr>
                <th class="col-xs-2">IMG</th>
                <th>DATE</th>
                <th>TYPE</th>
                <th>NAME</th>
                <th>COUNTRY</th>
            </tr>
        </thead>
        <tbody>
      ';
			while ($info = mysqli_fetch_object($result)) 
			{      
        
        //id, full_name, email_address, phone_number, address_1, address_2, country_id, city_name, state_abbreviation, zipcode, media_type, art_file, submit_date
        if($info->art_file){
            $art_file = '<a href="#" class="pop"><img src="/wu-art/files/'.$info->art_file.'" style="width:100%;" /></a>';
        }
        else { $art_file = ''; }

        if($info->media_type == 1){
          $media = 'Art';
        }
        else {
          $media = 'Tattoo';
        }

        // <td>'.date('m/d/Y',$info->summaryDateTime).'</td>
        echo '
        <tr>
          <td class="edit">'.$art_file.'</td>
          <td class="edit">'.$info->submit_date.'</td>
          <td class="delete">'.$media.'</td>
          <td class="edit">'.$info->full_name.'</td>
          <td class="edit">'.$info->country_id.'</td>
        </tr>
        ';
      } // end While
      echo '
        </tbody>
      </table>
      ';
    } // end IF
  }




  function get_info_sony(){ 
    $sql = "SELECT id, full_name, email_address, phone_number, address_1, address_2, country_id, city_name, state_abbreviation, zipcode, media_type, art_file, submit_date FROM wutatart ORDER BY submit_date DESC"; 
		
		$result_count = $this->dbc->query($sql);
		$numrows 			= $result_count->num_rows;
		$rowsperpage 	= 20;
		$totalpages 	= ceil($numrows / $rowsperpage);


		if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) { $currentpage = (int) $_GET['currentpage']; }
		else{ $currentpage = 1; }
		if ($currentpage > $totalpages)	{ $currentpage = $totalpages; }
		if ($currentpage < 1){ $currentpage = 1; }
		$offset = ($currentpage - 1) * $rowsperpage;
		
		
		$sql2 = $sql." LIMIT $offset, $rowsperpage";


		$result = $this->dbc->query($sql2); # Create the query for the function 
		$num = $result->num_rows; # see if we get any results back 



    if ( !isset($_GET['currentpage']) ) {  
      //$pagination_link = $_SERVER['REQUEST_URI'];
      $pagination_link = '/wu-art/sony.php';
    }
		else {
      $pagination_link = '/wu-art/sony.php';
      //$pagination_link = str_replace("/".basename($_SERVER['REQUEST_URI']),'',$_SERVER['REQUEST_URI']);
    }


		if($num > 0)
		{
			

			echo '
			<div class="row">
                <div class="col-sm-12">
                    <h3 style="margin-top:0;margin-bottom:0;">There are currently '.number_format($numrows).' uploads in the system</h3>
                </div>
			</div>
			';


			echo '
				<div class="row">
					<div class="col-sm-12 col-xs-12">';
					if($totalpages > 1)
					{
						$range = 3;
						echo '<div role="toolbar" class="btn-toolbar" style="margin-top: 20px;margin-bottom: 10px;"><div class="btn-group">';
						if ($currentpage > 1)
						{
							echo '<a class="btn btn-default" href="'.$pagination_link.'?currentpage=1">First</a>';
							$prevpage = $currentpage - 1;
							echo '<a class="btn btn-default" href="'.$pagination_link.'?currentpage='.$prevpage.'">Prev</a>';
						}	
						if ($currentpage <= 1){
							echo '<a class="btn btn-default disabled" href="'.$pagination_link.'?currentpage=1">First</a>';
							$prevpage = $currentpage - 1;
							echo '<a class="btn btn-default disabled" href="'.$pagination_link.'?currentpage='.$prevpage.'">Prev</a>';
						}
						// loop to show links to range of pages around current page
						for ($x = (($currentpage - $range) - 1); $x < (($currentpage + $range) + 1); $x++)
						{
							if (($x > 0) && ($x <= $totalpages))
							{
								if ($x == $currentpage) { echo '<a class="btn btn-default active disabled" href="'.$pagination_link.'?currentpage=1">'.$x.'</a>'; }
								else { echo '<a class="btn btn-default" href="'.$pagination_link.'?currentpage='.$x.'">'.$x.'</a>'; }
							} 
						}
						if ($currentpage != $totalpages)
						{
							$nextpage = $currentpage + 1;
							echo '<a class="btn btn-default" href="'.$pagination_link.'?currentpage='.$nextpage.'">Next</a>';
							echo '<a class="btn btn-default" href="'.$pagination_link.'?currentpage='.$totalpages.'">Last</a>';
						}
						else
						{
							echo '<a class="btn btn-default disabled" href="'.$pagination_link.'?currentpage='.$totalpages.'">Next</a>';	
							echo '<a class="btn btn-default disabled" href="'.$pagination_link.'?currentpage='.$totalpages.'">Last</a>';
						}					
						echo '</div></div><div class="clear clearfix"></div>';
					}
			echo '		
					</div>		
      ';

      echo '
      <table class="table table-hover" cellspacing="0" cellpadding="0" border="0">
        <thead>
            <tr>
                <th class="col-xs-2">ID</th>
                <th>IMG</th>
                <th>TYPE</th>
                <th>COUNTRY</th>
            </tr>
        </thead>
        <tbody>
      ';
			while ($info = mysqli_fetch_object($result)) 
			{      
        
        //id, full_name, email_address, phone_number, address_1, address_2, country_id, city_name, state_abbreviation, zipcode, media_type, art_file, submit_date
        if($info->art_file){
            $art_file = '<a href="#" class="pop"><img src="/wu-art/files/'.$info->art_file.'" style="width:100%;" /></a>';
        }
        else { $art_file = ''; }

        if($info->media_type == 1){
          $media = 'Art';
        }
        else {
          $media = 'Tattoo';
        }

        // <td>'.date('m/d/Y',$info->summaryDateTime).'</td>
        echo '
        <tr>
          <td class="edit">'.$info->id.'</td>
          <td class="edit">'.$art_file.'</td>
          <td class="delete">'.$media.'</td>
          <td class="edit">'.$info->country_id.'</td>
        </tr>
        ';
      } // end While
      echo '
        </tbody>
      </table>
      ';
    } // end IF
  }


} // end class