<!DOCTYPE html>

    <head>
        <title>Progress meter</title>
       
       <script>
	   function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	//alert(file.name +" - " + Math.round(file.size/1048576) + " MB " +" of data file - "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "file_upload_parser.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded " + Math.round(event.loaded/1048576) +" MB of "+ Math.round(event.total/1048576) + "MB ";
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
	   
	   </script>
    </head>
    <body>
	<h2> File Upload </h2>
	<form id="upload_form" enctype="multipart/form-data" method="POST">
	<input type="file" name="file1" id="file1"><br>
	<progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
	<h3 id="status"></h3>
	<p id="loaded_n_total"></p><br>
	<input type="button" value="Upload File" onclick="uploadFile()"><br>
	
	
	</form>
       
        
    </body>
</html>