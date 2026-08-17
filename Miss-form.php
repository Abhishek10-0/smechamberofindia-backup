<!DOCTYPE>
<html>
<head>
<title>Registration for Maharashtra Industry and SME Summit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
<style>
label, table{
padding-top:0px !important;
font-size:12px !important;
}
input[type='text'], input[type='email']{

}
.checkbox-inline{
height:20px !important;
}
</style>
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="jquery.validate.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
	/*$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});*/

	$().ready(function() {
		// validate the comment form when it is submitted
		$(".register").validate({
  rules:{
txt_tel:{
     
  number: true
  },
  txt_mobile:{
      required:true,
  minlength:9,
  maxlength:10,
  number: true
  }
  },
  messages:{
      txt_tel:"Enter valid telephone number",
      txt_mobile:"Enter valid mobile number"
  }
  });
		
	});
	</script>
<style>
.checkbox-inline+.checkbox-inline, .radio-inline+.radio-inline {
  margin-top: 0;
  margin-left: 0px; 
}
.form-horizontal .control-label{
text-align:left;
    margin-top: 5px;
}
</style>
<style>.register label.error{color:red;}</style>
</head>
<body style="background-color:#F2F2F2; ">
<div class="col-md-2"></div>
<div class="col-md-8" style=" box-shadow:1px 1px 1px #000; background-color: #fff; margin: 20px auto 20px auto; border-radius:20px; ">
<div class="row" style="border-bottom:1px dashed #000; border-radius:20px 20px 0 0; padding:10px;">
<div style="text-align:center;">
    <img src="MISS-3.jpg" style="width: 820px" />

</div>

</div>
    <div class="align-left">
<span><b>Seminar Registration Form (* Fields are Mandatory)</b></span>
</div>
<form action="miss-em.php" class="register form-horizontal" method="POST">
<div class="row" style="background-color:#FFF; color:#000; padding:10px;">
<div class="form-group">
</div>
<div class="form-group">
<input type="hidden" name="cause" value="visiting" />
<label for="Name" class="col-sm-2 control-label">Name:(Mr/Mrs/Ms)*</label>
<div class="col-sm-3">
<input type="text" name='name' id="name" class="form-control input-sm" required>
</div>
<label for="Company Name" class="col-sm-2 control-label">Name of Company:*</label>
<div class="col-sm-3">
<input type="text" name='companyname' id="companyname" class="form-control input-sm" required>
</div>
</div>
<div class="form-group">
<label for="Designation" class="col-sm-2 control-label">Designation:*</label>
<div class="col-sm-3">
<input type="text" name='designation' id="designation" class="form-control input-sm" required>
</div>
<label for="Address" class="col-sm-2 control-label">Address:</label>
<div class="col-sm-3">
<input type="text" name='address' id="address" class="form-control input-sm">
</div>
</div>
<div class="form-group">
<label for="City" class="col-sm-2 control-label">City:*</label>
<div class="col-sm-3">
<input type="text" name='city' id="city" class="form-control input-sm" required>
</div>
<label for="Zip/Pin Code" class="col-sm-2 control-label">Zip/Pin Code:</label>
<div class="col-sm-3">
<input type="text" name='zip' id="zip" class="form-control input-sm">
</div>
</div>
<div class="form-group">
<label for="State" class="col-sm-2 control-label">State:</label>
<div class="col-sm-3">
<input type="state" name='state' id="state" class="form-control input-sm">
</div>
<label for="Country" class="col-sm-2 control-label">Country:*</label>
<div class="col-sm-3">
<input type="text" name='country' id="country" class="form-control input-sm" required>
</div>
</div>
<div class="form-group">
<label for="Tel" class="col-sm-2 control-label">Tel:</label>
<div class="col-sm-3">
<input type="text" name='tel' id="tel" class="form-control input-sm">
</div>
<label for="Mobile" class="col-sm-2 control-label">Mobile:*</label>
<div class="col-sm-3">
<input type="text" name='mobile' id="mobile" class="form-control input-sm">
</div>
</div>
<div class="form-group">
   
<!--<label for="Fax" class="col-sm-2 control-label">Fax:</label>
<div class="col-sm-3">
<input type="text" name='fax' id="fax" class="form-control input-sm">
</div>-->
<label for="E-mail" class="col-sm-2 control-label">E-mail:*</label>
<div class="col-sm-3">
<input type="email" name='email' id="email" class="form-control input-sm" required>
</div>
 <label for="Website" class="col-sm-2 control-label">Website:</label>
<div class="col-sm-3">
<input type="text" name='website' id="website" class="form-control input-sm">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Nature of Business:* </label>
<div class="col-sm-3">
<select class="form-control input-sm" id="businesstype" name="businesstype" tabindex="19" onchange="changetextbox();" required="" aria-required="true" aria-invalid="false">
<option value="" style="border: 1px solid;">Select Business Type </option>
<option value="Exporter">Exporter</option>
<option value="Export Agent">Export Agent</option>
<option value="Importer">Importer</option>
<option value="Import Agent">Import Agent</option>
<option value="Buying office">Buying office</option>
<option value="Buying Agent">Buying Agent</option>
<option value="Consultant">Consultant</option>
<option value="Distributor">Distributor</option>
<option value="Trading House">Trading House</option>
<option value="Wholesaler">Wholesaler</option>
<option value="Retailer">Retailer</option>
<option value="eTailer">eTailer</option>
<option value="Service Provider">Service Provider</option>
<option value="Government Official">Government Official</option>
<option value="Trade Association Official">Trade Association Official</option>
<option value="others">Others</option>
</select>
       <script type="text/javascript">
           document.getElementById('businesstype').value = "<?php echo $_GET['businesstype'];?>";
    </script>
</div>
<div class="col-sm-5">
<input type="text" name="otherbusiness" id="otherbusiness" placeholder="Please mentioned your other Business Type" class="form-control input-sm" />
</div>
</div>
<div class="form-group">
<label for="Industry / Products Category:" class="col-sm-2 control-label">Industry / Products Category:</label>
<div class="col-sm-3">
<input type="text" name='industrycat' id="industrycat" class="form-control input-sm">
</div>
<label for="Intereste to Participate" class="col-sm-2 control-label">Interest to Participate</label>
<div class="col-sm-3">
<input type="text" name='product' id="product" class="form-control input-sm" />
</div>
</div>
<!--<div class="form-group">
<label for="Website" class="col-sm-2 control-label">Website:</label>
<div class="col-sm-8">
<input type="text" name='website' id="website" class="form-control input-sm">
</div>
</div>-->
<!--<div class="form-group">
<label for="Comment" class="col-sm-2 control-label">Comment:</label>
<div class="col-sm-8">
<textarea name="comment" id="comment" class="form-control input-sm"></textarea>
</div>
</div>-->
<!--<div class="form-group" style="margin-top:40px;">
<div class="col-sm-12">
<label class="checkbox-inline" style="margin-top:-5px;"><input type="checkbox" name='agree' value='agree' required></label>
I agree that the above information may be used by HKTDC & Worldex India Exhibition & Promotion Pvt. Ltd. for incorporation 
in all of their databases for business matching & trade promotional activities and for any other purposes.
</div>
</div>-->
</div>
<div style="text-align:center; width:150px; margin:0 auto; padding-top:10px; padding-bottom:10px;">
<button style="background-color: rgb(254, 89, 0); border-color: rgb(254, 89, 0); color:#ffffff;" class="button btn btn-primary">SUBMIT &raquo;</button>
</div>
</form>
</div>
<div class="col-md-2"></div>
<!--<script>
	$(document).ready(function(){
		$('#company').submit(function(e){
		e.preventDefault();
		console.log(1);
			if($(this).valid()==false) return false;
			$.ajax({
				url:'http://smechamberofindia.com/HKTDC.php',
				type:'POST',
				data:$(this).serialize(),
				success:function(res){
					console.log(res);
					var obj=JSON.parse(res);
					console.log(obj);
					if(obj.status==="Success"){
						swal({title:'Thank You.',text:obj.message,type:'success'},function(){
							location.reload();
						});
						
					}else{
						swal({title:obj.message,type:'warning'},function(){
							location.reload();
						});
					}
				}
			});
		
		});
	});
</script>-->
</body>
</html>