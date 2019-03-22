function saveform(){
	var regno = document.getElementById('roll').value;
	var name  =  document.getElementById('name').value;
	var fname = document.getElementById('fname').value;
	var standard = document.getElementById('class').value;
	var gender = $("input[name='gender']:checked").val();
	var profilepic = document.querySelector('input[name=pic]').files[0];
	var imagedat = new FormData();
	imagedat.append("image",profilepic);
	var worddoc = document.querySelector('input[name=docx]').files[0];
	var filer = new FormData();
	filer.append("application",worddoc);
	if(regno != "" && name != "" && fname != ""){
		$.ajax({
			url: 'registeruser.php',
			type: 'POST',
			data: {
				id: regno,
				nam: name,
				fatname:fname,
				std: standard,
				gend: gender,
				pic: imagedat,
				description: filer,
				processData: false,
				contentType: false
			},
			success: function(html) {
				document.getElementById('roll').value = "";
				document.getElementById('name').value = "";
				document.getElementById('fname').value = "";
				alert("You are successfully registered ! ");
			}               
		});

	}
}