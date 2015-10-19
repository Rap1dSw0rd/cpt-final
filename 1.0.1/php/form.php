<a href="#formPopup" data-rel="popup" class="ui-btn ui-btn-inline">Survey</a>

<div data-role="popup" id="formPopup" class="ui-content" data-position-to="window" data-dismissible="false" data-overlay-theme="b">
	<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
	<div class="ui-field-contain" id="survey">		
		<h3>Survey Form</h3>
    <form method="post" action="#results" data-ajax="false">
      <label for="fname" class="ui-hidden-accessible">First name:</label>
		<input type="text" name="fname" id="fname" data-clear-btn="true" data-inline="true" placeholder="First Name..." required="required">
	  
	  <label for="lname" class="ui-hidden-accessible">Last name:</label>
		<input type="text" name="lname" id="lname" data-clear-btn="true" data-inline="true" placeholder="Last Name..." required="required">
	  
	  <label for="email" class="ui-hidden-accessible">Email:</label>
		<input type="text" name="email" id="email" data-clear-btn="true" data-inline="true" placeholder="example@email.com.." required="required">
	  
	  <label for="info" class="ui-hidden-accessible">Additional Information:</label>
		<textarea name="comment" id="comment" data-clear-btn="true" placeholder="Additional Information..."></textarea>
	<fieldset class="ui-field-contain">
		<label for="niclvl">Nicotine Level:</label>
			<select name="niclvl" id="niclvl">
				<option value="0">0</option>
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
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
			</select>
	</fieldset>
	<label for="vglvl">%VG:</label>
		<input type="range" name="vglvl" id="vglvl" value="50" min="30" max="90" step="10" data-popup-enabled="true" data-highlight="true">
	<input type="reset" value="Reset" data-inline="true">
	<input type="submit" value="Submit" data-inline="true">
	<script>

	</script>
    </form>
  </div>
 </div>