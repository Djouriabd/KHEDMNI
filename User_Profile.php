<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];

    $sql = "INSERT INTO client (name, phone_number, email, address)
            VALUES ('$name', '$phone', '$email', '$location')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error while inserting data: " . $conn->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Profile</title>
  <link rel="stylesheet" href="project.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="card sidebar">
      <div class="user-info">
        <img src="profile.jpg" alt="User" class="profile-pic"/>
        <div>
          <p class="username">Your name</p> 
          <p class="email">yourname@gmail.com</p>
        </div>
      </div>
      <div><span><span class="material-icons">person</span> My Profile</span><span class="material-icons">chevron_right</span></div>
      <div><span><span class="material-icons">settings</span> Settings</span><span class="material-icons">chevron_right</span></div>
      <div class="dropdown notification-toggle">
        <span><span class="material-icons">notifications</span> Notification</span>
        <div>
          <button onclick="toggleDropdown()">Allow</button>
          <div class="dropdown-menu" id="dropdownMenu">
            <div>Allow</div>
            <div>Mute</div>
          </div>
        </div>
      </div>
      <div><span><span class="material-icons">logout</span> Log Out</span></div>
    </div>


    <div class="card settings-box">
      <h3>Settings</h3>
      <div><label>Theme</label><span>Light</span></div>
      <div><label>Language</label><span>English</span></div>
    </div>

    <div class="card profile-details">
      <span class="close-btn">&times;</span>
      <div class="user-info large">
        <img src="profile.jpg" alt="User" class="profile-pic large"/>
        <div>
          <p class="username big">Your name</p>
          <p class="email">yourname@gmail.com</p>
        </div>
      </div>
      <div class="info-form">
        <div><label>Name</label><input type="text" value="Your name"></div>
        <div><label>Email</label><input type="email" value="yourname@gmail.com"></div>
        <div><label>Phone</label><input type="tel" placeholder="Add number"></div>
        <div><label>Location</label><input type="text" list="countries" placeholder="Enter country code"></div>
<datalist id="countries">
  <option value="AFG">Afghanistan</option>
  <option value="ALB">Albania</option>
  <option value="DZA">Algeria</option>
  <option value="AND">Andorra</option>
  <option value="AGO">Angola</option>
  <option value="ATG">Antigua and Barbuda</option>
  <option value="ARG">Argentina</option>
  <option value="ARM">Armenia</option>
  <option value="AUS">Australia</option>
  <option value="AUT">Austria</option>
  <option value="AZE">Azerbaijan</option>
  <option value="BHS">Bahamas</option>
  <option value="BHR">Bahrain</option>
  <option value="BGD">Bangladesh</option>
  <option value="BRB">Barbados</option>
  <option value="BLR">Belarus</option>
  <option value="BEL">Belgium</option>
  <option value="BLZ">Belize</option>
  <option value="BEN">Benin</option>
  <option value="BTN">Bhutan</option>
  <option value="BOL">Bolivia</option>
  <option value="BIH">Bosnia and Herzegovina</option>
  <option value="BWA">Botswana</option>
  <option value="BRA">Brazil</option>
  <option value="BRN">Brunei</option>
  <option value="BGR">Bulgaria</option>
  <option value="BFA">Burkina Faso</option>
  <option value="BDI">Burundi</option>
  <option value="CPV">Cabo Verde</option>
  <option value="KHM">Cambodia</option>
  <option value="CMR">Cameroon</option>
  <option value="CAN">Canada</option>
  <option value="CAF">Central African Republic</option>
  <option value="TCD">Chad</option>
  <option value="CHL">Chile</option>
  <option value="CHN">China</option>
  <option value="COL">Colombia</option>
  <option value="COM">Comoros</option>
  <option value="COG">Congo</option>
  <option value="CRI">Costa Rica</option>
  <option value="HRV">Croatia</option>
  <option value="CUB">Cuba</option>
  <option value="CYP">Cyprus</option>
  <option value="CZE">Czechia</option>
  <option value="COD">Democratic Republic of the Congo</option>
  <option value="DNK">Denmark</option>
  <option value="DJI">Djibouti</option>
  <option value="DMA">Dominica</option>
  <option value="DOM">Dominican Republic</option>
  <option value="ECU">Ecuador</option>
  <option value="EGY">Egypt</option>
  <option value="SLV">El Salvador</option>
  <option value="GNQ">Equatorial Guinea</option>
  <option value="ERI">Eritrea</option>
  <option value="EST">Estonia</option>
  <option value="SWZ">Eswatini</option>
  <option value="ETH">Ethiopia</option>
  <option value="FJI">Fiji</option>
  <option value="FIN">Finland</option>
  <option value="FRA">France</option>
  <option value="GAB">Gabon</option>
  <option value="GMB">Gambia</option>
  <option value="GEO">Georgia</option>
  <option value="DEU">Germany</option>
  <option value="GHA">Ghana</option>
  <option value="GRC">Greece</option>
  <option value="GRD">Grenada</option>
  <option value="GTM">Guatemala</option>
  <option value="GIN">Guinea</option>
  <option value="GNB">Guinea-Bissau</option>
  <option value="GUY">Guyana</option>
  <option value="HTI">Haiti</option>
  <option value="HND">Honduras</option>
  <option value="HUN">Hungary</option>
  <option value="ISL">Iceland</option>
  <option value="IND">India</option>
  <option value="IDN">Indonesia</option>
  <option value="IRN">Iran</option>
  <option value="IRQ">Iraq</option>
  <option value="IRL">Ireland</option>
  <option value="ISR">Israel</option>
  <option value="ITA">Italy</option>
  <option value="JAM">Jamaica</option>
  <option value="JPN">Japan</option>
  <option value="JOR">Jordan</option>
  <option value="KAZ">Kazakhstan</option>
  <option value="KEN">Kenya</option>
  <option value="KIR">Kiribati</option>
  <option value="KWT">Kuwait</option>
  <option value="KGZ">Kyrgyzstan</option>
  <option value="LAO">Laos</option>
  <option value="LVA">Latvia</option>
  <option value="LBN">Lebanon</option>
  <option value="LSO">Lesotho</option>
  <option value="LBR">Liberia</option>
  <option value="LBY">Libya</option>
  <option value="LIE">Liechtenstein</option>
  <option value="LTU">Lithuania</option>
  <option value="LUX">Luxembourg</option>
  <option value="MDG">Madagascar</option>
  <option value="MWI">Malawi</option>
  <option value="MYS">Malaysia</option>
  <option value="MDV">Maldives</option>
  <option value="MLI">Mali</option>
  <option value="MLT">Malta</option>
  <option value="MHL">Marshall Islands</option>
  <option value="MRT">Mauritania</option>
  <option value="MUS">Mauritius</option>
  <option value="MEX">Mexico</option>
  <option value="FSM">Micronesia</option>
  <option value="MDA">Moldova</option>
  <option value="MCO">Monaco</option>
  <option value="MNG">Mongolia</option>
  <option value="MNE">Montenegro</option>
  <option value="MAR">Morocco</option>
  <option value="MOZ">Mozambique</option>
  <option value="MMR">Myanmar</option>
  <option value="NAM">Namibia</option>
  <option value="NRU">Nauru</option>
  <option value="NPL">Nepal</option>
  <option value="NLD">Netherlands</option>
  <option value="NZL">New Zealand</option>
  <option value="NIC">Nicaragua</option>
  <option value="NER">Niger</option>
  <option value="NGA">Nigeria</option>
  <option value="PRK">North Korea</option>
  <option value="MKD">North Macedonia</option>
  <option value="NOR">Norway</option>
  <option value="OMN">Oman</option>
  <option value="PAK">Pakistan</option>
  <option value="PLW">Palau</option>
  <option value="PAN">Panama</option>
  <option value="PNG">Papua New Guinea</option>
  <option value="PRY">Paraguay</option>
  <option value="PER">Peru</option>
  <option value="PHL">Philippines</option>
  <option value="POL">Poland</option>
  <option value="PRT">Portugal</option>
  <option value="QAT">Qatar</option>
  <option value="ROU">Romania</option>
  <option value="RUS">Russia</option>
  <option value="RWA">Rwanda</option>
  <option value="KNA">Saint Kitts and Nevis</option>
  <option value="LCA">Saint Lucia</option>
  <option value="VCT">Saint Vincent and the Grenadines</option>
  <option value="WSM">Samoa</option>
  <option value="SMR">San Marino</option>
  <option value="STP">Sao Tome and Principe</option>
  <option value="SAU">Saudi Arabia</option>
  <option value="SEN">Senegal</option>
  <option value="SRB">Serbia</option>
  <option value="SYC">Seychelles</option>
  <option value="SLE">Sierra Leone</option>
  <option value="SGP">Singapore</option>
  <option value="SVK">Slovakia</option>
  <option value="SVN">Slovenia</option>
  <option value="SLB">Solomon Islands</option>
  <option value="SOM">Somalia</option>
  <option value="ZAF">South Africa</option>
  <option value="KOR">South Korea</option>
  <option value="SSD">South Sudan</option>
  <option value="ESP">Spain</option>
  <option value="LKA">Sri Lanka</option>
  <option value="SDN">Sudan</option>
  <option value="SUR">Suriname</option>
  <option value="SWE">Sweden</option>
  <option value="CHE">Switzerland</option>
  <option value="SYR">Syria</option>
  <option value="TJK">Tajikistan</option>
  <option value="TZA">Tanzania</option>
  <option value="THA">Thailand</option>
  <option value="TLS">Timor-Leste</option>
  <option value="TGO">Togo</option>
  <option value="TON">Tonga</option>
  <option value="TTO">Trinidad and Tobago</option>
  <option value="TUN">Tunisia</option>
  <option value="TUR">Turkey</option>
  <option value="TKM">Turkmenistan</option>
  <option value="TUV">Tuvalu</option>
  <option value="UGA">Uganda</option>
  <option value="UKR">Ukraine</option>
  <option value="ARE">United Arab Emirates</option>
  <option value="GBR">United Kingdom</option>
  <option value="USA">United States</option>
  <option value="URY">Uruguay</option>
  <option value="UZB">Uzbekistan</option>
  <option value="VUT">Vanuatu</option>
  <option value="VEN">Venezuela</option>
  <option value="VNM">Vietnam</option>
  <option value="YEM">Yemen</option>
  <option value="ZMB">Zambia</option>
  <option value="ZWE">Zimbabwe</option>
</datalist>

        <button class="save-btn">Save Changes</button>
      </div>
    </div>
  </div>

  <script src="project.js"></script>
</body>
</html>
