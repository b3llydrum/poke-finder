<div id='form-div' class='section-div'>

<div class='form-wrapper' id='name-wrapper'>

        <form action='' method='POST' id='name_form'>

                <div id='choices-container'>
                        <input type='text' name='name' class='input-bar' autocomplete='on' placeholder="Search for a Pokemon here">
                </div>

                <div id='submit-container'>
                        <div class='form-submit-div'>
                                <input type='submit' class='submit' value='Search!'>
                        </div>

                </div>

        </form>

</div>


<div class='form-wrapper' id='criteria-wrapper'>

	<form action='' method='POST' id='pokedex_form'>

		<div id='choices-container'>

			<div class='form-dropdown-div'>
				<!-- show caught or uncaught pokemon -->
				<!-- $_POST['caughtStatus'] -->
				<?php require('pokedex_form/caughtDropdown.php'); ?>
			</div>


			<div class='form-dropdown-div'>
				<!-- show pokemon of a certain type -->
				<!-- $_POST['type'] -->
				<?php require('pokedex_form/typeDropdown.php'); ?>
			</div>

			<div class='form-dropdown-div'>
				<!-- specify further the type of pokemon to show -->
				<!-- $_POST['type2'] -->
				<?php require('pokedex_form/type2Dropdown.php'); ?>
			</div>


			<div class='form-dropdown-div'>
				<!-- show pokemon of a certain generation -->
				<!-- $_POST['generation'] -->
				<?php require('pokedex_form/generationDropdown.php'); ?>
			</div>


			<!--div class='form-dropdown-div'>
				<?php // require('pokedex_form/regionDropdown.php'); ?>
			</div -->

		</div>


		<!-- submit button -->
		<div id='submit-container'>

			<div class='form-submit-div'>
				<!-- submit back to index.php -->
				<input type='submit'class='submit' value='Search!'>
			</div>

		</div>

	</form>


</div>


</div>
