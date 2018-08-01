function chackEmail(e):
{
	var element = e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value))
	{
		alert("Email is Invalid!! only characters a-z A-Z 0-9 @ . _ are allowed." );
		element.value="";
		return false;
	}
	if(!/[a-zA-Z]/.test(element.value))
	{
		alert("Email is Invalid!! characters a-z A-Z are must." );
		element.value="";
		return false;
	}
	if(!/[@]/.test(element.value))
	{
		alert("Email is Invalid!! @ is missing." );
		element.value="";
		return false;
	}
	if(!/[.]/.test(element.value))
	{
		alert("Email is Invalid!! .domain is missing." );
		element.value="";
		return false;
	}
	return true;
}

function checkSubject(e):
{
	var element = e.target;
	if(/[a-zA-Z ]/.test(element.value))
	{
		alert("Invalid" );
		element.value="";
		return false;
	}
	return true;
}

function submitForm:
{

}

var email = document.getElementById('user-email');
email.addEventListener('blur',checkEmail,false);

var subject = document.getElementById('subject');
subject.addEventListener('blur',checkSubject,false);

var submit = document.getElementById('submit-btn');
email.addEventListener('click',submitForm,false);