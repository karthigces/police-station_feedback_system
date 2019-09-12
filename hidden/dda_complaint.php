<!doctype html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script>
	function validate(evt) {
	  var theEvent = evt || window.event;

	  // Handle paste
	  if (theEvent.type === 'paste') {
		  key = event.clipboardData.getData('text/plain');
	  } else {
	  // Handle key press
		  var key = theEvent.keyCode || theEvent.which;
		  key = String.fromCharCode(key);
	  }
	  var regex = /[0-9]|\./;
	  if( !regex.test(key) ) {
		theEvent.returnValue = false;
		if(theEvent.preventDefault) theEvent.preventDefault();
	  }
	}
	</script>
</head>
<body>
</body>
</html>
<?php
  include_once('header.php');
  include_once('../includes/psl-config.php');
          try {
            $db = DB();
            $query = $db->prepare("SELECT MAX(st_num) FROM salem_1c2af6696c4c67949752fa8006c4e63d WHERE st_code='$st_code'");
            $query->bindParam("st_code", $st_code, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                while ($row = $query->fetch(PDO::FETCH_NUM)) {
				$st_num=$row[0];
				$st_num=$st_num+1;
				}
}
		else {
				echo "<div align='center' class='alert alert-danger'><strong>Error: </strong> Station Code / Password Error</div>";
					}
				} catch (PDOException $e) {
					echo "<div align='center' class='alert alert-danger'><strong>Error: </strong></div>";
				}
  ?>
  <div class="col-sm-9">
	<div>
	<?php date_default_timezone_set("Asia/Calcutta"); ?>
		<p style="text-align:left;">
		<font color="red"><b>Date : </font><?php echo date('d-m-Y');?></b>
		<span style="float:right;">
		<font color="red"><b>Time : </font><?php echo date('h:i:s A');?></span></b>
		</p>
	</div>
	<table class="table table-bordered">
    <thead>
	<tr>
	<td align="center" colspan="2" class="alert alert-info">ADD NEW PETITIONER DATA</td>
	</tr>
    </thead>
    <tbody>
	<form method="POST" action="" enctype="multipart/form-data">
	<tr>
	<td align="right">Petitioner ID *</td>
	<td><input type="text" readonly name="st_num" value="<?php echo htmlspecialchars($st_num); ?>" placeholder="ID"/></td>
	</tr>
	<tr class="alert alert-info">-
	<td align="right">Petitioner Name P1(மனுதாரர் பெயர்) *</td>
	<td><input type="text"  autocomplete="off" required name="v_name" placeholder="Petitioner Name"/></td>
	</tr>
	<tr class="">
	<td align="right">Petitioner Mobile Number P1 (மனுதாரர் அலைபேசி எண்) *</td>
	<td><input type="text"  autocomplete="off" maxlength="12" onkeypress='validate(event)' name="v_mobile" required maxlength="10" placeholder="Mobile Number"/></td>
	</tr>
	<tr class="alert alert-info">
	<td align="right">Petitioner Age (மனுதாரர் வயது) *</td>
	<td><input type="text"  autocomplete="off" maxlength="3" onkeypress='validate(event)' name="v_age" required placeholder="Petitioner Age"/></td>
	</tr>
	<tr class="">
	<td align="right">Petitioner Address (மனுதாரர் முகவரி) *</td>
	<td><textarea required  autocomplete="off" name="v_address" placeholder="Petitioner Address"></textarea></td>
	</tr>
	<tr class="">
	<td align="right">Petitioner Aadhar Number (மனுதாரர் ஆதார் எண் ) </td>
	<td><input type="text"  autocomplete="off" name="v_aadhar" minlength="12" maxlength="12" placeholder="Petitioner Aadhar Number"/></td>
	</tr>
	<!--
	<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#v_photo').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
	<tr class="alert alert-info">
	<td align="right">Petitioner Photo (மனுதாரர் புகைப்படம்)  </td>
	<td>
	<div class="row">
        <div class="col-xs-4">
            <input type="file" disabled name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" onchange="readURL(this);" />
        </div>
        <div class="col-xs-4">
			<img id="v_photo" src="#" width="100" height="100" />
		</div>
	</div>
	</td>
	</tr>
	-->
	<tr class="">
	<td align="right">Petitioner Name P2 (உடன் வருபவர் பெயர்)</td>
	<td><input type="text" autocomplete="off" name="v_name2" placeholder="Other Petitioner Name"/></td>
	</tr>
	<tr class="alert alert-info">
	<td align="right">Petitioner Mobile Number P2 (மனுதாரர் அலைபேசி எண்) </td>
	<td><input type="text" autocomplete="off" maxlength="12" onkeypress='validate(event)' name="v_mobile2" maxlength="10" placeholder="Other Mobile Number"/></td>
	</tr>
	<tr class="">
	<td align="right">Subject of Visit (புகார் தலைப்பு)*</td>
	<td>
	<select name="c_subject" id="station_code" required onChange="return setStation()">
		<option>Choose from The list</option>
		<option value="FAMILY QUARRAEL/DISPUTE (குடும்ப தகராறு)">FAMILY QUARRAEL/DISPUTE (குடும்ப தகராறு)</option>
		<option value="MONEY DISPUTE (பணம் கொடுக்கல் வாங்கல்)">MONEY DISPUTE (பணம் கொடுக்கல் வாங்கல்)</option>
		<option value="LAND DISPUTE (நிலம்/சொத்து தகராறு)">LAND DISPUTE (நிலம்/சொத்து தகராறு)</option>
		<option value="ROAD ACCIDENT(FATAL/NON FATAL) (சாலை விபத்து)">ROAD ACCIDENT(FATAL/NON FATAL) (சாலை விபத்து)</option>
		<option value="ACCIDENTAL FALL (கவனகுறைவால் தவறி விழுதல்)">ACCIDENTAL FALL (கவனகுறைவால் தவறி விழுதல்)</option>
		<option value="FIRE ACCIDENT (தீ விபத்து)">FIRE ACCIDENT (தீ விபத்து)</option>
		<option value="CATAL THEFT (கால்நடை திருட்டு)">CATAL THEFT (கால்நடை திருட்டு)</option>
		<option value="LOVE MARRIAGE (காதல் திருமணம்)">LOVE MARRIAGE (காதல் திருமணம்)</option>
		<option value="CRIME AGAINST CHILDREN (குழந்தைகளுக்கு எதிரான குற்றம்)">CRIME AGAINST CHILDREN (குழந்தைகளுக்கு எதிரான குற்றம்)</option>
		<option value="CRIMINAL TRESPASS (அத்துமீறி நுழைதல்)">CRIMINAL TRESPASS (அத்துமீறி நுழைதல்)</option>
		<option value="CYBER CRIMES (இணையதள குற்றங்கள்)">CYBER CRIMES (இணையதள குற்றங்கள்)</option>
		<option value="DOCUMENT MISSING (காணாமல் போன ஆவணம்)">DOCUMENT MISSING (காணாமல் போன ஆவணம்)</option>
		<option value="CHEATING (மோசடி)">CHEATING (மோசடி)</option>
		<option value="EXTORTION (அச்சுறுத்திப் பறித்தல்)">EXTORTION (அச்சுறுத்திப் பறித்தல்)</option>
		<option value="HURT CASE/WORDY QWANT (காய வழக்கு/வாய் தகராறு )">HURT CASE/WORDY QWANT (காய வழக்கு/வாய் தகராறு )</option>
		<option value="KIDNAPPING (ஆட்கடத்தல்)">KIDNAPPING (ஆட்கடத்தல்)</option>
		<option value="MISSING PERSONS (காணாமல் போன ஆட்கள்)">MISSING PERSONS (காணாமல் போன ஆட்கள்)</option>
		<option value="MOBILE MISSING (காணாமல் போன கைபேசி)">MOBILE MISSING (காணாமல் போன கைபேசி)</option>
		<option value="NUISANCE (தொல்லை">NUISANCE (தொல்லை)</option>
		<option value="OFFENCES AGAINST RELIGION &amp; PUBLIC WORSHIP (மத  வழிபாட்டுதலங்களுக்கெதிரான குற்றங்கள்)">OFFENCES AGAINST RELIGION &amp; PUBLIC WORSHIP (மத  வழிபாட்டுதலங்களுக்கெதிரான குற்றங்கள்)</option>
		<option value="OFFENCES AGAINST STATE (அரசுக்கு எதிரான குற்றங்கள்)">OFFENCES AGAINST STATE (அரசுக்கு எதிரான குற்றங்கள்)</option>
		<option value="ROBBERY (கொள்ளை)">ROBBERY (கொள்ளை)</option>
		<option value="THEFT (திருட்டு)">THEFT (திருட்டு)</option>
		<option value="PUBLIC FUNCTION (பொது நிகழ்ச்சி)">PUBLIC FUNCTION (பொது நிகழ்ச்சி)</option>
		<option value="PUBLIC MEETING (பொதுக்கூட்டம்)">PUBLIC MEETING (பொதுக்கூட்டம்)</option>
		<option value="DEMONSTRATION (ஆர்ப்பாட்டம்)">DEMONSTRATION (ஆர்ப்பாட்டம்)</option>
	<option value="VEHICLE MISSING (காணாமல் போன வாகனம்)">VEHICLE MISSING (காணாமல் போன வாகனம்)</option>
		<option value="WOMEN HARASSMENT (பெண் வதைப்படுத்துதல்)">WOMEN HARASSMENT (பெண் வதைப்படுத்துதல்)</option>
		<option value="OTHERS (பிற குற்றங்கள்)">OTHERS (பிற குற்றங்கள்)</option>
		</select>
		</td>
	</tr>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>

<script type="text/javascript">
  // Load the Google Transliteration API
  google.load("elements", "1", {
    packages: "transliteration"
  });

  function onLoad() {
    var options = {
      sourceLanguage: 'en',
      destinationLanguage: ['ta'],
      shortcutKey: 'ctrl+m',
      transliterationEnabled: true
    }

    // Create an instance on TransliterationControl with the required options.
    var control = new google.elements.transliteration.TransliterationControl(options);

    // Enable transliteration in the textfields with the given ids.
    var ids = ["language"];
    control.makeTransliteratable(ids);

    // Show the transliteration control which can be used to toggle between English and Hindi and also choose other destination language.
    control.showControl('translControl');
  }

  google.setOnLoadCallback(onLoad);
</script>
<tr class="alert alert-info">
	<td align="right">Detail (புகார் விளக்கம்) *<br>Press Ctrl+M for switch language (Tamil, English)</td>
	<td><textarea autocomplete="off" name="c_detail" required rows="6"  id="language" cols="6" style="width:600px;height:218px" ></textarea></td>
	</tr>
	<tr class="">
	<td align="right">Receptionist Officer Name (வரவேற்பாளர் அதிகாரி பெயர்) *</td>
	<td><input type="text"  autocomplete="off" required name="receipt_off" placeholder="Receptionist Name"/></td>
	</tr>
	<tr class="">
	<td></td>
	<td><input type="submit" class="btn btn-info" name="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;"/></td>
	</tr>
<tr class="">
	<td></td>
	<td></td>
	</tr>
	</form>
    </tbody>
  </table>

<?php
include_once('../includes/psl-config.php');
if(isset($_POST['submit']))
{
		$st_code=$st_code;
		$st_num=$_POST['st_num'];
		$v_date=date('Y-m-d');
		$v_time=date('H:i:s');
		$ack_id=$st_code."/".$st_num;
		$v_name=$_POST['v_name'];
		$v_mobile=$_POST['v_mobile'];
		$v_age=$_POST['v_age'];
		$v_address=$_POST['v_address'];
		$v_aadhar=$_POST['v_aadhar'];
		$v_name2=$_POST['v_name2'];
		$v_mobile2=$_POST['v_mobile2'];
		$c_subject=$_POST['c_subject'];
		$c_detail=$_POST['c_detail'];
		$receipt_off=$_POST['receipt_off'];
		$file_id=$st_code."-".$st_num;
		$file_name = $_FILES['image']['name'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];
		$imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
		$v_photo=$file_id.".".$imageFileType;
		
		try
		{
		 move_uploaded_file($file_tmp,"petitioner_photos/".$file_id.".".$imageFileType);
         echo "Success";
		 $sql = "INSERT INTO salem_1c2af6696c4c67949752fa8006c4e63d 
		 (st_code,st_num,v_date,v_time,ack_id,v_name,v_mobile,v_age,v_address,v_aadhar,v_name2,v_mobile2,c_subject,c_detail,receipt_off,status)
		 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				$stmt= $db->prepare($sql);
				$file_id = $sr_no;
				$stmt->execute([$st_code, $st_num, $v_date, $v_time, $ack_id, $v_name, $v_mobile, $v_age, $v_address, $v_aadhar, $v_name2, $v_mobile2, $c_subject, $c_detail, $receipt_off,1]);
				echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
				header("Location: wiev_troper.php"); // Redirect user to the profile.php
			}
		catch(PDOException $e)
		{
		echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
		}
}
?>
</div>
</div>
<?php include('../includes/footer.php');?>
</body>
</html>
