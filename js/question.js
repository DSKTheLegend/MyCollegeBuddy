function reset() {
	document.getElementById('1yr').style.display='inline-block';
	document.getElementById('2yr').style.display='inline-block';
	document.getElementById('3yr').style.display='inline-block';
	document.getElementById('4yr').style.display='inline-block';
	document.getElementById('first_sem').style.display='none';
	document.getElementById('second_sem').style.display='none';
	document.getElementById('third_sem').style.display='none';
	document.getElementById('fourth_sem').style.display='none';
	document.getElementById('fifth_sem').style.display='none';
	document.getElementById('sixth_sem').style.display='none';
	document.getElementById('seventh_sem').style.display='none';
	document.getElementById('eighth_sem').style.display='none';
	document.getElementById('back').style.display='none';

}

function first_year(){
	reset();
	document.getElementById('first_sem').style.display='inline-block';
	document.getElementById('second_sem').style.display='inline-block';
	document.getElementById('back').style.display='inline-block';
	document.getElementById('2yr').style.display='none';
	document.getElementById('3yr').style.display='none';
	document.getElementById('4yr').style.display='none';
}
function second_year(){
	reset();
	document.getElementById('third_sem').style.display='inline-block';
	document.getElementById('fourth_sem').style.display='inline-block';
	document.getElementById('back').style.display='inline-block';
	document.getElementById('1yr').style.display='none';
	document.getElementById('3yr').style.display='none';
	document.getElementById('4yr').style.display='none';
}
function third_year(){
	reset();
	document.getElementById('fifth_sem').style.display='inline-block';
	document.getElementById('sixth_sem').style.display='inline-block';
	document.getElementById('back').style.display='inline-block';
	document.getElementById('2yr').style.display='none';
	document.getElementById('1yr').style.display='none';
	document.getElementById('4yr').style.display='none';
}
function fourth_year(){
	reset();
	document.getElementById('seventh_sem').style.display='inline-block';
	document.getElementById('eighth_sem').style.display='inline-block';
	document.getElementById('back').style.display='inline-block';
	document.getElementById('2yr').style.display='none';
	document.getElementById('3yr').style.display='none';
	document.getElementById('1yr').style.display='none';
}
var sem_name;
function close_sem(sem_name)
{
	document.getElementById(sem_name).style.display="none"
}


function sem_clicker(sem_name){
		document.getElementById(sem_name).style.display="block";
}
var sub_name;
function get_id(sub_name){
	document.getElementById(sub_name).style.display="block";
}


