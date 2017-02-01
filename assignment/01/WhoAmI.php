<?php require "head.php" ?>
		<h1>
			Story Idea Generator
		</h1>
		<form accept-charset="utf-8" action="index.php" autocomplete="on" enctype="text/plain" method="post">
			<table>
				<tbody>
					<tr>
						<td>
							Name
						</td>
						<td>
							<input name="name" type="text" maxlength="25" />
						</td>
					</tr>
					<tr>
						<td>
							Age
						</td>
						<td>
							<input max="112" min="13" name="age" type="number" />
						</td>
					</tr>
					<tr>
						<td>
							Address Line 1<br />
							Address Line 2<br />
							
						</td>
						<td>
							<input name="address1" type="text" maxlength="100" />
							<input name="address2" type="text" maxlength="100" />
						</td>
					</tr>
					<tr>
						<td>
							State
						</td>
						<td>
							<select name="state">
								<option label="Alabama" value="AL"></option>
								<option label="Alaska" value="AK"></option>
								<option label="Arizona" value="AZ"></option>
								<option label="Arkansas" value="AR"></option>
								<option label="California" value="CA"></option>
								<option label="Colorado" value="CO"></option>
								<option label="Connecticut" value="CT"></option>
								<option label="District of Columbia" value="DC"></option>
								<option label="Delaware" value="DE"></option>
								<option label="Florida" value="FL"></option>
								<option label="Georgia" value="GA"></option>
								<option label="Hawaii" value="HI"></option>
								<option label="Idaho" value="ID"></option>
								<option label="Illinois" value="IL"></option>
								<option label="Indiana" value="IN"></option>
								<option label="Iowa" value="IA"></option>
								<option label="Kansas" value="KS"></option>
								<option label="Kentucky" value="KY"></option>
								<option label="Louisiana" value="LA"></option>
								<option label="Maine" value="ME"></option>
								<option label="Maryland" value="MD"></option>
								<option label="Massachusetts" value="MA"></option>
								<option label="Michigan" value="MI"></option>
								<option label="Minnesota" value="MN"></option>
								<option label="Mississippi" value="MS"></option>
								<option label="Missouri" value="MO"></option>
								<option label="Montana" value="MT"></option>
								<option label="Nebraska" value="NE"></option>
								<option label="Nevada" value="NV"></option>
								<option label="New Hampshire" value="NH"></option>
								<option label="New Jersey" value="NJ"></option>
								<option label="New Mexico" value="NM"></option>
								<option label="New York" value="NY"></option>
								<option label="North Carolina" value="NC"></option>
								<option label="North Dakota" value="ND"></option>
								<option label="Ohio" value="OH"></option>
								<option label="Oklahoma" value="OK"></option>
								<option label="Oregon" value="OR"></option>
								<option label="Pennsylvania" value="PA"></option>
								<option label="Puerto Rico" value="PR"></option>
								<option label="Rhode Island" value="RI"></option>
								<option label="South Carolina" value="SC"></option>
								<option label="South Dakota" value="SD"></option>
								<option label="Tennessee" value="TN"></option>
								<option label="Texas" value="TX"></option>
								<option label="Utah" value="UT"></option>
								<option label="Vermont" value="VT"></option>
								<option label="Virginia" value="VA"></option>
								<option label="Washington" value="WA"></option>
								<option label="West Virginia" value="WV"></option>
								<option label="Wisconsin" value="WI"></option>
								<option label="Wyoming" value="WY"></option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Gender
						</td>
						<td>
							<select name="gender">
								<option label="(Select)"></option>
								<option label="Female" value="F"></option>
								<option label="Male" value="M"></option>
								<option label="Other" value="O"></option>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
			<input type="submit" value="Submit Forms" />
		</form>
<?php require "body.php" ?>