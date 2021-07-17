<?php
 include('details.php');?>

<!DOCTYPE html>

<html>
  <head>
    <title>Health Professional Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      }
      p.top-info {
      margin: 10px 0;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 25px 0 #1c87c9; 
      }
     .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/02/fb57ab781c34da322c884532bfec751e843e36fc.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.6); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #1c87c9;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #1c87c9;
      color: #1c87c9;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #1c87c9;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: auto;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #1c87c9;
      font-size: 16px;
      font-weight: 700;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #1e6fa0;
      }
      @media (min-width: 568px) {
      .name-item, .contact-item, .position-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input {
      width: calc(50% - 20px);
      }
      .contact-item .item, .position-item .item {
      width: calc(50% - 8px);
      }
      .contact-item input, .position-item input {
      width: calc(100% - 12px);
      }
      .position-item select {
      width: 100%;
      }
      .msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
     }
      }
    </style>
  </head>
<body>
  <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
  <?php endif ?>
    <div class="testbox">
      <form action="details.php" method = "post">
        <div class="banner">
          <h1>Health Professional Registration Form</h1>
        </div>
        <p class="top-info">Kindly use the Form below to submit your Health Proffesional Profile</p>
        <div class="item">
          <p>Name<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="txtfname" placeholder="First Name" required/>
            <input type="text" name="txtlName" placeholder="Last Name" required/>
          </div>
        </div>

        <div class= "identy_numbers">
            <div class="item">
                <p>Identity Numbers<span class="required">*</span></p>
                <div class="name-item">
                  <input type="number" name="txtidNumber" placeholder="ID No" required/>
                  <input type="number" name="txtlemployementNumber" placeholder="Employement No" required/>
                </div>
              </div>
        </div>

        

        <div class="position-item">
          <div class="item" >
            <p>Gender<span class="required">*</span></p>
            <select required name="txtlgender">
              <option value="1">Select your Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Others">Others</option>
            </select>
          </div>
          <div class="item" >
            <p>Date of Birth<span  class="required">*</span></p>
            <input type="date" name="txtldateofBirth" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
        </div>

        <div class="contact-item" >
            <div class="item">
              <p>Home County<span class="required">*</span></p>
              <select required name = "txtlhomeCounty">
                <option value="1">Select Your Home County</option>
                <option value="Siaya">Siaya</option>
                <option value="Homa Bay">Homa Bay</option>
                <option value="Kisumu">Kisumu</option>
                <option value="Busia">Busia</option>
                <option value="West Pokot">West Pokot</option>
                <option value="Trans Nzoia">Trans Nzoia</option>
                <option value="Kajiado">Kajiado</option>
                <option value="Kisii">Kisii</option>
                <option value="Vihiga">Vihiga</option>
                <option value="Nairobi">Nairobi </option>
                <option value="Laikipia">Laikipia</option>
                <option value="Samburu">Samburu</option>
                <option value="Kakamega">Kakamega </option>
                <option value="Narok">Narok</option>
                <option value="Mombasa">Mombasa</option>
                <option value="Makueni">Makueni</option>
                <option value="Nakuru">Nakuru</option>
                <option value="Taita Taveta">Taita Taveta</option>
                <option value="Nyamira">Nyamira</option>
                <option value="Bungoma">Bungoma</option>
                <option value="Kitui">Kitui</option>
                <option value="Machakos">Machakos</option>
                <option value="Murang'a">Murang'a</option>
                <option value="Lamu">Lamu</option>
                <option value="Kirinyaga">Kirinyaga</option>
                <option value="Garissa">Garissa</option>
                <option value="Nyandarua">Nyandarua</option>
                <option value="Tharaka Nithi">Tharaka Nithi</option>
                <option value="Meru">Meru</option>
                <option value="Nyeri">Nyeri</option>
                <option value="Migori">Migori</option>
                <option value="Bomet">Bomet</option>
                <option value="Kiambu">Kiambu</option>
                <option value="Isiolo">Isiolo</option>
                <option value="Embu">Embu</option>
                <option value="Tana River">Tana River</option>
                <option value="Kwale">Kwale</option>
                <option value="Marsabit">Marsabit</option>
                <option value="Kericho">Kericho</option>
                <option value="Turkana">Turkana</option>
                <option value="Wajir">Wajir</option>
                <option value="Kilifi">Kilifi</option>
                <option value="Mandera">Mandera</option>
                <option value="...">...</option>
                <option value="...">...</option>
                <option value="...">...<div class=""></div></option>
                <option value="...">...</option>

              </select>
            </div>
            <div class="item" >
              <p>Phone Number<span class="required">*</span></p>
              <input type="number" name="txtlphoneNumber" required/>
            </div>
          </div>

        <div class="question">
          <p>Employer<span class="required">*</span></p>
          <div class="question-answer">
            <div>
              <input type="radio" value="FBO/NGO" id="radio_1" name="txtlemployer" required/>
              <label for="radio_1" class="radio"><span>FBO/NGO</span></label>
            </div>
            <div>
              <input type="radio" value="GoK/MoH" id="radio_2" name="txtlemployer" required/>
              <label for="radio_2" class="radio"><span>GoK/MoH</span></label>
            </div>
          </div>
        </div>

        <div class="employement">
            <div class="question">
                <p>Terms of Employement<span class="required">*</span></p>
                <div class="question-answer1">
                  <div>
                    <input type="radio" value="Parmanent" id="radio_7" name="txtltermofEmployement" required/>
                    <label for="radio_7" class="radio"><span>Parmanent</span></label>
                  </div>
                  <div>
                    <input type="radio" value="Tempolary" id="radio_8" name="txtltermofEmployement" required/>
                    <label for="radio_8" class="radio"><span>Tempolary</span></label>
                  </div>
                  <div>
                    <input type="radio" value="Contract" id="radio_9" name="txtltermofEmployement" required/>
                    <label for="radio_9" class="radio"><span>Contract</span></label>
                  </div>
                </div>
              </div>
        </div>

        <div class="position-item">
            <div class="item">
              <p>Job Designation<span class="required">*</span></p>
              <select required name ="txtljobDesignation">
                <option value="NONE">Select your Cadre</option>
                <option value="Clerical support workers">Clerical support workers</option>
                <option value="Community health workers">Community health workers</option>
                <option value="Dental assistants and therapists">Dental assistants and therapists</option>
                <option value="Dentists">Dentists</option>
                <option value="Dieticians and nutritionists">Dieticians and nutritionists</option>
                <option value="Elementary occupations">Elementary occupations</option>
                <option value="Environmental and occupational health and hygiene professionals">Environmental and occupational health and hygiene professionals</option>
                <option value="Environmental and occupational health inspectors and associates">Environmental and occupational health inspectors and associates</option>
                <option value="Generalist medical practitioners">Generalist medical practitioners</option>
                <option value="Health management personnel">Health management personnel</option>
                <option value="Health service managers">Health service managers</option>
                <option value="Life science professionals">Life science professionals</option>
                <option value="Medical and dental prosthetic technicians">Medical and dental prosthetic technicians</option>
                <option value="Medical and pathology laboratory technicians">Medical and pathology laboratory technicians</option>
                <option value="Medical imaging and therapeutic equipment operators">Medical imaging and therapeutic equipment operators</option>
                <option value="Medical records and health information technicians">Medical records and health information technicians</option>
                <option value="Nursing and midwifery professional">Nursing and midwifery professional</option>
                <option value="Occupational Therapist">Occupational Therapist</option>
                <option value="Clinical Officer20.Pharmaceutical technicians">Clinical Officer20.Pharmaceutical technicians</option>
                <option value="Pharmacists">Pharmacists</option>
                <option value="Physiotherapists">Physiotherapists</option>
                <option value="Physiotherapy technicians and assistants">Physiotherapy technicians and assistants</option>
                <option value="Plant and machine operators and assemblers">Plant and machine operators and assemblers</option>
                <option value="Specialist medical practitioners">Specialist medical practitioners</option>

              </select>
            </div>
            <div class="item">
              <p>Date of Employement<span class="required">*</span></p>
              <input type="date" name="txtldateofEmployement" required/>
              <i class="fas fa-calendar-alt"></i>
            </div>
          </div>

          <div class="item">
            <p>Facility Name and Code<span class="required">*</span></p>
            <div class="name-item">
              <input type="text"  name="txtlfacilityName" placeholder="Facility Name" required/>
              <input type="number" name="txtlfacilityCode" placeholder="Facility Code" required/>
              <input type="number" name="txtlcadreid" placeholder="Code" required/>
            </div>
          </div>

          <div class="item" >
            <p>Current County of Work<span  class="required">*</span></p>
            <select required name ="txtlcurrentCountyofWork"> 
                <option value="1">Select Your Current County of Work</option>
                <option value="Siaya">Siaya</option>
                <option value="Homa Bay">Homa Bay</option>
                <option value="Kisumu">Kisumu</option>
                <option value="Busia">Busia</option>
                <option value="West Pokot">West Pokot</option>
                <option value="Trans Nzoia">Trans Nzoia</option>
                <option value="Kajiado">Kajiado</option>
                <option value="Kisii">Kisii</option>
                <option value="Vihiga">Vihiga</option>
                <option value="Nairobi">Nairobi </option>
                <option value="Laikipia">Laikipia</option>
                <option value="Samburu">Samburu</option>
                <option value="Kakamega">Kakamega </option>
                <option value="Narok">Narok</option>
                <option value="Mombasa">Mombasa</option>
                <option value="Makueni">Makueni</option>
                <option value="Nakuru">Nakuru</option>
                <option value="Taita Taveta">Taita Taveta</option>
                <option value="Nyamira">Nyamira</option>
                <option value="Bungoma">Bungoma</option>
                <option value="Kitui">Kitui</option>
                <option value="Machakos">Machakos</option>
                <option value="Murang">Murang'a</option>
                <option value="Lamu">Lamu</option>
                <option value="Kirinyaga">Kirinyaga</option>
                <option value="Garissa">Garissa</option>
                <option value="Nyandarua">Nyandarua</option>
                <option value="Tharaka Nithi">Tharaka Nithi</option>
                <option value="Meru">Meru</option>
                <option value="Nyeri">Nyeri</option>
                <option value="Migori">Migori</option>
                <option value="Bomet">Bomet</option>
                <option value="Kiambu">Kiambu</option>
                <option value="Isiolo">Isiolo</option>
                <option value="Embu">Embu</option>
                <option value="Tana River">Tana River</option>
                <option value="Kwale">Kwale</option>
                <option value="Marsabit">Marsabit</option>
                <option value="Kericho">Kericho</option>
                <option value="Turkana">Turkana</option>
                <option value="Wajir">Wajir</option>
                <option value="Kilifi">Kilifi</option>
                <option value="Mandera">Mandera</option>
                <option value="44">...</option>
                <option value="45">...</option>
                <option value="46">...<div class=""></div></option>
                <option value="47">...</option>

              </select>
          </div>
        <div class="btn-block">
          <button class="btn" type="submit" name="submit">Submmit Details</button>
        </div>
      </form>
    </div>
</body>
</html>

