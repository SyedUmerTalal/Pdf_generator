<!DOCTYPE html>
<html>
<head>
	<title>Generate PDF</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="text-align: center;">
	<h4>PDF Brander</h4><hr>
	<form action="" method="GET">
		<div>
			<table border = 1>
				<tr>
					<th><button type="submit" name="target" class="button1" value="header">Header Branding</button></th>
					<th><button type="submit" name="target" class="button1" value="footer">Footer Branding</button></th>
					<th><button type="submit" name="target" class="button1" value="watermark">Watermark</button></th>
				</tr>
			</table>
		</div>
	</form>
	
	<form action="watermark_image.php" method="POST" enctype="multipart/form-data" >
	<?php
	 $start_file = $_GET['target'];
	if($start_file == 'header'){
	?>
		<label name="upload_logo">Logo :</label>
		<input type="file" name="upload_logo" required><br><br>
		<input type="hidden" name="first_button" id="first_button" value="<?= $_GET['target']?>">
		<label name="position">Position :</label>
		<select name="position_header" required>
			<option value="">Select Position</option>
			<option value="left">Left</option>
			<option value="center">Center</option>
			<option value="right">Right</option>
		</select><br><br>

		<label name="front_color">Front Color :</label>
		<input type="text" name="front_color_header" required><br><br>

		<!-- <label name="padding_top_botom">Padding (Top/Bottom) :</label>
		<input type="number" min='0' name="padding_top_botom"><br><br> -->


		<label name="text">Text :</label>
		<input type="text" name="text_header" required><br><br>


		<!-- <label name="pages">Pages :</label>
		<select name="pages_header" required>
			<option value="All">All</option>
			<option value="first">First</option>
			<option value="last">Last</option>
			<option value="even">Even</option>
			<option value="odd">Odd</option>
		</select><br><br> -->

		<!-- <label name="outline_color">Outline Color :</label>
		<input type="text" name="outline_color"><br><br> -->

		<!-- <label name="padding_left_right">Padding (Left/Right) :</label>
		<input type="number" min='0' name="padding_left_right"><br><br> -->

		<label name="url">URL :</label>
		<input type="url" name="url_header" required><br><br> 

		<!-- <label name="rotation">Rotation :</label>
		<input type="rang" name="rotation"><br><br> -->

		<!-- <label name="opacity">Opacity :</label>
		<input type="rang" name="opacity"><br><br> -->

		<label name="font">Font :</label>
		<select name="font_header" required>
			<option value="">Select font</option>
			<option value="Arial">Arial</option>
			<option value="center">Center</option>
			<option value="right">Right</option>
		</select><br><br>

		<label name="font_size_header">Font Size :</label>
		<input type="number" min="0" name="font_size_header" required><br><br>

		<!-- <label name="upload_logo">Logo :</label>
			 <input type="file" name="upload_logo"><br><br> -->
			 <input type="hidden" name="first_button" id="first_button" value="<?= $_GET['target']?>">
			<!-- <label name="position">Position :</label>
			<select name="position">
				<option value="">Select Position</option>
				<option value="left">Left</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select><br><br> -->

			<!-- <label name="front_color">Front Color :</label>
			<input type="text" name="front_color"><br><br> -->

			<label name="padding_top_botom">Padding (Top/Bottom) :</label>
			<input type="number" name="padding_top_botom" required><br><br>


			<!-- <label name="text_style">Text :</label>
			<select name="text_style">
				<option value="">Select style</option>
				<option value="left">Left</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select><br><br> -->


			<label name="pages">Pages :</label>
			<select name="pages" required>
				<option value="All">All</option>
				<option value="first">First</option>
				<option value="last">Last</option>
				<option value="even">Even</option>
				<option value="odd">Odd</option>
			</select><br><br>

			<!-- <label name="outline_color">Outline Color :</label>
			<input type="text" name="outline_color"><br><br> -->

			<label name="padding_left_right">Padding (Left/Right) :</label>
			<input type="number" name="padding_left_right" required><br><br>

			<!-- <label name="url">URL :</label>
			<input type="url" name="url"><br><br>

			<label name="rotation">Rotation :</label>
			<input type="rang" name="rotation"><br><br> -->

			<label name="opacity_watermark">Opacity :</label>
			<input type="rang" name="opacity_watermark" required><br><br>

			<!-- <label name="font">Font :</label>
			<select name="font">
				<option value="">Select font</option>
				<option value="Arial">Arial</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select><br><br>

			<label name="font_size">Font Size :</label>
			<input type="number" min="0" name="font_size"><br><br> -->

			<!-- <label name="upload_logo">Logo :</label>
			<input type="file" name="upload_logo"><br><br> -->
			<input type="hidden" name="first_button" id="first_button" value="<?= $_GET['target']?>">
			<label name="position_footer">Position :</label>
			<select name="position_footer" required>
				<option value="">Select Position</option>
				<option value="left">Left</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select><br><br>

			<label name="front_color_footer">Front Color :</label>
			<input type="text" name="front_color_footer" required><br><br>

			<!-- <label name="padding_top_botom">Padding (Top/Bottom) :</label>
			<input type="number" min='0' name="padding_top_botom"><br><br> -->


			<label name="text_style">Text :</label>
			<input type="text" name="text_footer" required><br><br>


			<!-- <label name="pages_footer">Pages :</label>
			<select name="pages_footer" required>
				<option value="All">All</option>
				<option value="first">First</option>
				<option value="last">Last</option>
				<option value="even">Even</option>
				<option value="odd">Odd</option>
			</select><br><br> -->

			 <label name="outline_color_footer">Outline Color :</label>
			<input type="text" name="outline_color_footer" required><br><br>

			<!-- <label name="padding_left_right">Padding (Left/Right) :</label>
			<input type="number" min='0' name="padding_left_right"><br><br> -->

			 <label name="url">URL :</label>
			<input type="url" name="url_footer" required><br><br> 

			<!-- <label name="rotation">Rotation :</label>
			<input type="rang" name="rotation"><br><br> -->

			<label name="opacity_footer">Opacity :</label>
			<input type="rang" name="opacity_footer" required><br><br>

			<label name="font_footer">Font :</label>
			<select name="font_footer" required> 
				<option value="">Select font</option>
				<option value="Arial">Arial</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select><br><br>

			<label name="font_size_footer">Font Size :</label>
			<input type="number" min="0" name="font_size_footer" required><br><br>

		
	<?php }elseif($start_file == 'footer'){?>
		
			<!-- <label name="upload_logo">Logo :</label>
			<input type="file" name="upload_logo"><br><br> -->
			<input type="hidden" name="first_button" id="first_button" value="<?= $_GET['target']?>">
			<label name="position_footer">Position :</label>
			<select name="position_footer" required>
				<option value="">Select Position</option>
				<option value="left">Left</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select><br><br>

			<label name="front_color_footer">Front Color :</label>
			<input type="text" name="front_color_footer" required><br><br>

			<!-- <label name="padding_top_botom">Padding (Top/Bottom) :</label>
			<input type="number" min='0' name="padding_top_botom"><br><br> -->


			<label name="text_style">Text :</label>
			<input type="text" name="text_footer" required><br><br>


			<label name="pages_footer">Pages :</label>
			<select name="pages_footer" required>
				<option value="All">All</option>
				<option value="first">First</option>
				<option value="last">Last</option>
				<option value="even">Even</option>
				<option value="odd">Odd</option>
			</select><br><br>

			 <label name="outline_color_footer">Outline Color :</label>
			<input type="text" name="outline_color_footer" required><br><br>

			<!-- <label name="padding_left_right">Padding (Left/Right) :</label>
			<input type="number" min='0' name="padding_left_right"><br><br> -->

			 <label name="url">URL :</label>
			<input type="url" name="url_footer" required><br><br> 

			<!-- <label name="rotation">Rotation :</label>
			<input type="rang" name="rotation"><br><br> -->

			<label name="opacity_footer">Opacity :</label>
			<input type="rang" name="opacity_footer" required><br><br>

			<label name="font_footer">Font :</label>
			<select name="font_footer" required> 
				<option value="">Select font</option>
				<option value="Arial">Arial</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select><br><br>

			<label name="font_size_footer">Font Size :</label>
			<input type="number" min="0" name="font_size_footer" required><br><br>

	<?php }elseif($start_file == 'watermark'){ ?>
			<!-- <label name="upload_logo">Logo :</label>
			 <input type="file" name="upload_logo"><br><br> -->
			<input type="hidden" name="first_button" id="first_button" value="<?= $_GET['target']?>">
			<!-- <label name="position">Position :</label>
			<select name="position">
				<option value="">Select Position</option>
				<option value="left">Left</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select><br><br> -->

			<!-- <label name="front_color">Front Color :</label>
			<input type="text" name="front_color"><br><br> -->

			<label name="padding_top_botom">Padding (Top/Bottom) :</label>
			<input type="number" name="padding_top_botom" required><br><br>


			<!-- <label name="text_style">Text :</label>
			<select name="text_style">
				<option value="">Select style</option>
				<option value="left">Left</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select><br><br> -->


			<label name="pages">Pages :</label>
			<select name="pages" required>
				<option value="All">All</option>
				<option value="first">First</option>
				<option value="last">Last</option>
				<option value="even">Even</option>
				<option value="odd">Odd</option>
			</select><br><br>

			<!-- <label name="outline_color">Outline Color :</label>
			<input type="text" name="outline_color"><br><br> -->

			<label name="padding_left_right">Padding (Left/Right) :</label>
			<input type="number" name="padding_left_right" required><br><br>

			<!-- <label name="url">URL :</label>
			<input type="url" name="url"><br><br>

			<label name="rotation">Rotation :</label>
			<input type="rang" name="rotation"><br><br> -->

			<label name="opacity_watermark">Opacity :</label>
			<input type="rang" name="opacity_watermark" required><br><br>

			<!-- <label name="font">Font :</label>
			<select name="font">
				<option value="">Select font</option>
				<option value="Arial">Arial</option>
				<option value="center">Center</option>
				<option value="right">Right</option>
			</select><br><br>

			<label name="font_size">Font Size :</label>
			<input type="number" min="0" name="font_size"><br><br> -->

			
	<?php }else{
		echo "Kindly Select One Option";
	} ?>
	<label name="upload_file">Select File...</label>
		<input type="file" name="upload_file[]" multiple="" required><br><br>

		<button type="submit" name="submit">Download All</button>
	</form>

</body>
</html>




