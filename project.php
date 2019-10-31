<html>
<head>
<script>
function myAjax(method, type, destination, data){
	let xhttp = new XMLHttpRequest();
	method = method.toUpperCase();
	if(data){
		data += "&";
	}
	else{
		data = "";
	}
	data += "type=" + type;
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4&& this.status == 200){
			destination.innerHTML = this.responseText;
		}
	}
	xhttp.open(method, "backend.php", true);
	if(method == "POST"){
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	}
	if(data){
		xhttp.send(data);
	}
	else{
		xhttp.send();
	}
}
function onSubmit(){
	let form = document.forms[0];
	let sv = form.type.value;
	switch(sv){
		case "echo": sampleString();
			break;
		case "add": sampleAdd();
			break;
		case "html": sampleHtml();
			break;
		case "json": sampleJSON();
			break;
		case "db": sampleDB();
			break;
		default:
			break;
	}
}
function sampleDB(){
	let cont = document.getElementById("output");
	myAjax("POST", "db", cont);
}
function sampleString(){
	let cont = document.getElementById("output");
	let data = "message=" + document.forms[0].message.value;
	myAjax("POST", "echo", cont, data);
}
function sampleAdd(){
	let cont = document.getElementById("output");
	let form = document.forms[0];
	let data = "number1=" + form.number1.value + "&number2=" + form.number2.value;
	myAjax("POST", "add", cont, data);
}
function sampleHtml(){
	let cont = document.getElementById("output");
	myAjax("POST", "html", cont);
}
function sampleJSON(){
	let cont = document.getElementById("output");
	myAjax("POST", "json", cont);
}
function handleInputs(){
	let form = document.forms[0];
	let sv = form.type.value;
	switch(sv){
		case "echo":
			form.number1.style.display = "none";
			form.number2.style.display = "none";
			form.message.style.display = "block";
			break;
		case "add":
			form.number1.style.display = "block";
			form.number2.style.display = "block";
			form.message.style.display = "none";
			break;
		case "html":
		case "json":
		default:
			form.number1.style.display = "none";
			form.number2.style.display = "none";
			form.message.style.display = "none";
			break;
	}
}
</script>
<style>
body{background-color: black;}
section{ width:80%; margin-left: auto; margin-right:auto; background-color:white; padding: 2%;margin-top: 2%;}
</style>
</head>
<body onload="handleInputs();">
<header>
	<section>
		<h3>Ajax Samples</h3>
		<p>In this sample we're using a form to help us build some data for a few sample requests.<br>
		This sample shows that we can send a string and get a response, send some data and get a computational result, fetch html, get json, and return results from a table.</p>
	</section>
</head>
<section>
	<h4>Helper Form</h4>
	<p>Pick a dropdown value, enter a value if applicable, and submit the form.<br>
	<small>We return false during onsubmit so we don't submit the form. Instead we use the dropdown value to determine which sample to load and what inputs to show.</small></p>
	<form onsubmit="onSubmit(); return false;" style="display: inline-grid">
		<select name="type" onchange="handleInputs();">
			<option value="echo">Echo</option>
			<option value="add">Add Nums</option>
			<option value="html">Get HTML</option>
			<option value="json">Get JSON</option>
			<option value="db">Get Test Users from DB</option>
		</select>
		<input type="number" name="number1" placeholder="First Number"/>
		<input type="number" name="number2" placeholder="Second Number"/>
		<input type="text" name="message" placeholder="Send something to the server"/>
		<input type="submit" value="Send it out"/>
	</form>
</section>
<section>
	<p><b>Output:</b></p>6t
	<p id="output"></p>
</section>
</body>
</html>