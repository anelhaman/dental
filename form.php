

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>FORM</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">

</head>
<body>
<div class="container">
		<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>DENTAL</legend>


<div class="main">
			<!-- Text input-->
			<div class="form-group">
			  <label class=" control-label" for="hn"></label>
			  <div class="">
			  <input id="hn" name="hn" type="text" placeholder="HN" class="form-control input-md">

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class=" control-label" for="date">เลขที่คิว</label>
			  <div class="">
			  <input id="date" name="date" type="text" placeholder="" class="form-control input-md">

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class=" control-label" for="pres"></label>
			  <div class="">
			  <input id="pres" name="pres" type="text" placeholder="" class="form-control input-md">

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class=" control-label" for="name">ชื่อ-สกุล</label>
			  <div class="">
			  <input id="name" name="name" type="text" placeholder="" class="form-control input-md">

			  </div>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class=" control-label" for="sex">เพศ</label>
			  <div class="">
			    <select id="sex" name="sex" class="form-control">
			      <option value="M">ชาย</option>
			      <option value="F">หญิง</option>
			    </select>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class=" control-label" for="age">อายุ</label>
			  <div class="">
			  <input id="age" name="age" type="text" placeholder="" class="form-control input-md">

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class=" control-label" for="privilege">สิทธิ์</label>
			  <div class="">
			  <input id="privilege" name="privilege" type="text" placeholder="" class="form-control input-md">

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class=" control-label" for="allergic">แพ้ยา</label>
			  <div class="">
			  <input id="allergic" name="allergic" type="text" placeholder="" class="form-control input-md">

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class=" control-label" for="watchout">ยาที่ต้องเฝ้าระวังการใช้</label>
			  <div class="">
			  <input id="watchout" name="watchout" type="text" placeholder="" class="form-control input-md">

			  </div>
			</div>

</div>


<div class="detail">
	<!-- Multiple Radios -->
	<div class="form-group">
		<label class=" control-label" for="DENTTYPE">ประเภทผู้ได้รับบริการตรวจสภาวะทันตสุขภาพ</label>
		<div class="">
		<div class="radio">
			<label for="DENTTYPE-0">
				<input type="radio" name="DENTTYPE" id="DENTTYPE-0" value="1" checked="checked">
				กลุ่มหญิงตั้งครรภ์
			</label>
		</div>
		<div class="radio">
			<label for="DENTTYPE-1">
				<input type="radio" name="DENTTYPE" id="DENTTYPE-1" value="2">
				กลุ่มเด็กก่อนวัยเรียน
			</label>
		</div>
		<div class="radio">
			<label for="DENTTYPE-2">
				<input type="radio" name="DENTTYPE" id="DENTTYPE-2" value="3">
				กลุ่มเด็กวัยเรียน
			</label>
		</div>
		<div class="radio">
			<label for="DENTTYPE-3">
				<input type="radio" name="DENTTYPE" id="DENTTYPE-3" value="4">
				กลุ่มผู้สูงอายุ
			</label>
		</div>
		<div class="radio">
			<label for="DENTTYPE-4">
				<input type="radio" name="DENTTYPE" id="DENTTYPE-4" value="">
				กลุ่มอื่นๆ
			</label>
		</div>
		</div>
	</div>

	<!-- Multiple Radios -->
	<div class="form-group">
		<label class=" control-label" for="SERVPLACE">บริการใน-นอกสถานบริการ</label>
		<div class="">
		<div class="radio">
			<label for="SERVPLACE-0">
				<input type="radio" name="SERVPLACE" id="SERVPLACE-0" value="1" checked="checked">
				ในสถานบริการ
			</label>
		</div>
		<div class="radio">
			<label for="SERVPLACE-1">
				<input type="radio" name="SERVPLACE" id="SERVPLACE-1" value="2">
				นอกสถานบริการ
			</label>
		</div>
		</div>
	</div>

	<br>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="PTEETH">จำนวนฟันแท้ที่มีอยู่ (ซี่)</label>
		<div class="">
		<input id="PTEETH" name="PTEETH" type="text" placeholder=" " class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="PCARIES">จำนวนฟันแท้ผุที่ไม่ได้อุด (ซี่)</label>
		<div class="">
		<input id="PCARIES" name="PCARIES" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="PFILLING">จำนวนฟันแท้ที่ได้รับการอุด (ซี่)</label>
		<div class="">
		<input id="PFILLING" name="PFILLING" type="text" placeholder=" " class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="PEXTRACT">จำนวนฟันแท้ที่ถอดหรือหลุด (ซี่)</label>
		<div class="">
		<input id="PEXTRACT" name="PEXTRACT" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="DTEETH">จำนวนฟันน้ำนมที่มีอยู่ (ซี่)</label>
		<div class="">
		<input id="DTEETH" name="DTEETH" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="DCARIES">จำนวนฟันน้ำนมผุที่ไม่ได้อุด (ซี่)</label>
		<div class="">
		<input id="DCARIES" name="DCARIES" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="DFILLING">จำนวนฟันน้ำนมที่ได้รับการอุด (ซี่)</label>
		<div class="">
		<input id="DFILLING" name="DFILLING" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="DEXTRACT">จำนวนฟันน้ำนมที่ถอนหรือหลุด (ซี่)</label>
		<div class="">
		<input id="DEXTRACT" name="DEXTRACT" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Multiple Radios -->
	<div class="form-group">
		<label class=" control-label" for="NEED_FLUORIDE">จำเป็นต้องทา/เคลือบฟลูออไรด์</label>
		<div class="">
		<div class="radio">
			<label for="NEED_FLUORIDE-0">
				<input type="radio" name="NEED_FLUORIDE" id="NEED_FLUORIDE-0" value="1" checked="checked">
				ต้องทา/เคลือบฟลูออไรด์
			</label>
		</div>
		<div class="radio">
			<label for="NEED_FLUORIDE-1">
				<input type="radio" name="NEED_FLUORIDE" id="NEED_FLUORIDE-1" value="2">
				ไม่ต้องทา/เคลือบฟลูออไรด์
			</label>
		</div>
		</div>
	</div>

	<!-- Multiple Radios -->
	<div class="form-group">
		<label class=" control-label" for="NEED_SCALING">จำเป็นต้องขูดหินน้ำลาย</label>
		<div class="">
		<div class="radio">
			<label for="NEED_SCALING-0">
				<input type="radio" name="NEED_SCALING" id="NEED_SCALING-0" value="1" checked="checked">
				ต้องขูดหินน้ำลาย
			</label>
		</div>
		<div class="radio">
			<label for="NEED_SCALING-1">
				<input type="radio" name="NEED_SCALING" id="NEED_SCALING-1" value="2">
				ไม่ต้องขูดหินน้ำลาย
			</label>
		</div>
		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="NEED_SEALANT">จำนวนฟันที่ต้องเคลือบหลุมร่องฟัน</label>
		<div class="">
		<input id="NEED_SEALANT" name="NEED_SEALANT" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="NEED_PFILLING">จำนวนฟันแท้ที่ต้องอุด</label>
		<div class="">
		<input id="NEED_PFILLING" name="NEED_PFILLING" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="NEED_DFILLING">จำนวนฟันน้ำนมต้องอุด</label>
		<div class="">
		<input id="NEED_DFILLING" name="NEED_DFILLING" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="NEED_PEXTRACT">จำนวนฟันแท้ที่ต้องถอน/รักษาคลองรากฟัน</label>
		<div class="">
		<input id="NEED_PEXTRACT" name="NEED_PEXTRACT" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Multiple Radios -->
	<div class="form-group">
		<label class=" control-label" for="NPROSTHESIS">จำเป็นต้องใส่ฟันเทียม</label>
		<div class="">
		<div class="radio">
			<label for="NPROSTHESIS-0">
				<input type="radio" name="NPROSTHESIS" id="NPROSTHESIS-0" value="1" checked="checked">
				ต้องใส่ฟันเทียมบนและล่าง
			</label>
		</div>
		<div class="radio">
			<label for="NPROSTHESIS-1">
				<input type="radio" name="NPROSTHESIS" id="NPROSTHESIS-1" value="2">
				ต้องใส่ฟันเทียมบน
			</label>
		</div>
		<div class="radio">
			<label for="NPROSTHESIS-2">
				<input type="radio" name="NPROSTHESIS" id="NPROSTHESIS-2" value="3">
				ต้องใส่ฟังเทียมล่าง
			</label>
		</div>
		<div class="radio">
			<label for="NPROSTHESIS-3">
				<input type="radio" name="NPROSTHESIS" id="NPROSTHESIS-3" value="4">
				ไม่ต้องใส่ฟันเทียม
			</label>
		</div>
		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="PERMANENT_PERMANENT">จำนวนคู่สบฟันแท้กับฟันแท้</label>
		<div class="">
		<input id="PERMANENT_PERMANENT" name="PERMANENT_PERMANENT" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="PERMANENT_PROSTHESIS">จำนวนคู่สบฟันแท้กับฟันเทียม</label>
		<div class="">
		<input id="PERMANENT_PROSTHESIS" name="PERMANENT_PROSTHESIS" type="text" placeholder="" class="form-control input-md">

		</div>
	</div>

	<!-- Text input-->
	<div class="form-group">
		<label class=" control-label" for="PROSTHESIS_PROSTHESIS">จำนวนคู่สบฟันเทียมกับฟันเทียม</label>
		<div class="">
		<input id="PROSTHESIS_PROSTHESIS" name="PROSTHESIS_PROSTHESIS" type="text" placeholder="" class="form-control input-md" required="">

		</div>
	</div>


</div>
</div>




</fieldset>
</form>

		<button type='submit' class="btn btn-primary" > GO</button>
	</form>
</div>

</body>
</html>
