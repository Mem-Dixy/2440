<?php require "header.php"; ?>
<?php
$me = new database("2440A02");
$moo = $me->query("SELECT * FROM `memdixyp_2440A02`.`person`");
print_r($moo);
?>
		<form accept-charset="utf-8" action="index.php" autocomplete="on" enctype="text/plain" method="post">
			<div>
				User Name <input maxlength="255" name="userName" type="text" value="" /><br />
				Password <input maxlength="255" name="password" type="password" value="" /><br />
			</div>
			<div>
				Born date
				Bate Of Birth <input name="age" type="date" value="" /><br />
				Gender <input maxlength="255" name="userName" type="text" value="" /><br />
				User Name <input maxlength="255" name="gender" type="text" value="" /><br />
				person Name <input maxlength="255" name="personuserName" type="text" value="" /><br />
				Phone Number <input maxlength="255" name="userName" type="text" value="" /><br />
				Relationship <input maxlength="255" name="relationship" type="text" value="" /><br />
			</div>
			<div>
				Address Line 1 <input maxlength="38" name="address1" type="text" value="" /><br />
				Address Line 2 <input maxlength="38" name="address2" type="text" value="" /><br />
				City <input maxlength="50" name="city" type="text" value="" /><br />
				State <select name="state" data="{'dropHeight' : 200, 'maxChars' : 25, maxVisible : 25, definedWidth: 180}">
					<option value="Select">Select</option>
					<option value="AL">AL - Alabama</option>
					<option value="AK">AK - Alaska</option>
					<option value="AS">AS - American Samoa</option>
					<option value="AZ">AZ - Arizona</option>
					<option value="AR">AR - Arkansas</option>
					<option value="CA">CA - California</option>
					<option value="CO">CO - Colorado</option>
					<option value="CT">CT - Connecticut</option>
					<option value="DE">DE - Delaware</option>
					<option value="DC">DC - District of Columbia</option>
					<option value="FM">FM - Federated States of Micronesia</option>
					<option value="FL">FL - Florida</option>
					<option value="GA">GA - Georgia</option>
					<option value="GU">GU - Guam</option>
					<option value="HI">HI - Hawaii</option>
					<option value="ID">ID - Idaho</option>
					<option value="IL">IL - Illinois</option>
					<option value="IN">IN - Indiana</option>
					<option value="IA">IA - Iowa</option>
					<option value="KS">KS - Kansas</option>
					<option value="KY">KY - Kentucky</option>
					<option value="LA">LA - Louisiana</option>
					<option value="ME">ME - Maine</option>
					<option value="MH">MH - Marshall Islands</option>
					<option value="MD">MD - Maryland</option>
					<option value="MA">MA - Massachusetts</option>
					<option value="MI">MI - Michigan</option>
					<option value="MN">MN - Minnesota</option>
					<option value="MS">MS - Mississippi</option>
					<option value="MO">MO - Missouri</option>
					<option value="MT">MT - Montana</option>
					<option value="NE">NE - Nebraska</option>
					<option value="NV">NV - Nevada</option>
					<option value="NH">NH - New Hampshire</option>
					<option value="NJ">NJ - New Jersey</option>
					<option value="NM">NM - New Mexico</option>
					<option value="NY">NY - New York</option>
					<option value="NC">NC - North Carolina</option>
					<option value="ND">ND - North Dakota</option>
					<option value="MP">MP - Northern Mariana Islands</option>
					<option value="OH">OH - Ohio</option>
					<option value="OK">OK - Oklahoma</option>
					<option value="OR">OR - Oregon</option>
					<option value="PW">PW - Palau</option>
					<option value="PA">PA - Pennsylvania</option>
					<option value="PR">PR - Puerto Rico</option>
					<option value="RI">RI - Rhode Island</option>
					<option value="SC">SC - South Carolina</option>
					<option value="SD">SD - South Dakota</option>
					<option value="TN">TN - Tennessee</option>
					<option value="TX">TX - Texas</option>
					<option value="UT">UT - Utah</option>
					<option value="VT">VT - Vermont</option>
					<option value="VI">VI - Virgin Islands</option>
					<option value="VA">VA - Virginia</option>
					<option value="WA">WA - Washington</option>
					<option value="WV">WV - West Virginia</option>
					<option value="WI">WI - Wisconsin</option>
					<option value="WY">WY - Wyoming</option>
					<option value="AA">AA - Armed Forces Americas</option>
					<option value="AE">AE - Armed Forces Africa</option>
					<option value="AE">AE - Armed Forces Canada</option>
					<option value="AE">AE - Armed Forces Europe</option>
					<option value="AE">AE - Armed Forces Middle East</option>
					<option value="AP">AP - Armed Forces Pacific</option>
				</select><br />
				Zip Code <input maxlength="10" name="zip" type="text" value="" /><br />
			</div>
		</form>
<?php require "footer.php"; ?>