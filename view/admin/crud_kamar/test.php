<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- File input field -->
<input type="file" id="file" onchange="return fileValidation()"/>

<!-- Image preview -->
<div id="imagePreview"></div>
</body>
</html>

<script type="text/javascript">
	function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
</script>