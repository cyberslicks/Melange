function passwordStrength(password,passwordStrength,errorField)
{
var desc = new Array();
desc[0] = "Very Weak";
desc[1] = "Weak";
desc[2] = "Better";
desc[3] = "Medium";
desc[4] = "Strong";
desc[5] = "Strongest";

var score   = 0;

if (password.length > 6) score++;

if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

if (password.match(/\d+/)) score++;

if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

if (password.length > 12) score++;

if (password.length==0) score=0;
//passwordStrength.innerHTML = desc[score];
passwordStrength.className = "strength" + score;
}

