function $(id){
	var element = document.getElementById(id);
	if(id == null){
		alert("ERROR");
    }return element;
	}
	
function testName(id){
	var txt = /^[A-Za-z0-9]{4,10}$/i;
	var name = $(id).value;
	var result = txt.test(name);
return result;}

function InvalidName(){
	if(!testName("textUserup"))
	$("error1").style.display="block";
if(!testName("textUserup"))
    clearField('textUserup');}

function InvalidPw(){
if(!testName("passw"))
$("error2").style.display="block";
if(!testName("passw"))
clearField('passw');}

function back(id){
$(id).style.display = "none";}

function clearField(input) {
    $(input).value = "";
};
