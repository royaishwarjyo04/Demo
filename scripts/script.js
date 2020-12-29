function goToProfile()
{
    location.href = "profile.php";
    //console.log("Going to profile");
    return location.href;
}

function goToCourseList()
{
    location.href = "courselist.php";
    return location.href;
}

function goToResults()
{
    location.href = "result.php";
    return location.href;
}

function goToLogOut()
{
    location.href = "../session/logoutsession.php";
    return location.href;
}

function goToHome()
{
    location.href = "homepage.php";
    return location.href;
}

function goToChangePassword()
{
    location.href = "changepassword.php";
    return location.href;
}

function getCurrentPassword()
{
    console.log(myPassword);
}

$('form#password').on('submit', function(){
    
    var currentPassword = document.getElementById('currentPassword').value;
    var newPassword = document.getElementById('newPassword').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if(currentPassword == ''||newPassword==''||confirmPassword=='')
    {
        console.log('One or more of the fields is empty!');
        return false;
    }
    else if(currentPassword == myPassword)
    {
        //console.log('Password verified');
        if(newPassword == confirmPassword)
        {
            console.log(newPassword);
            if(newPassword.length < 8)
            {
                console.log("Password must be atleast 8 characters");
                return false;
            }
            re = /[0-9]/;
            numeric = re.test(newPassword);
            if(numeric == false)
            {
                console.log("Password must contain numeric value");
                return false;
            }
            re = /[a-z]/;
            small = re.test(newPassword);
            if(small == false)
            {
                console.log("Password must contain atleast 1 small letter");
                return false;
            }
            re = /[A-Z]/;
            capital = re.test(newPassword);
            if(capital == false)
            {
                console.log("Password must contain atleast 1 capital letter");
                return false;
            }
            if(newPassword.length >=8 && numeric == true && small == true && capital == true)
            {
                console.log("Updated successfully!");
            }            
        }
        else
        {
            console.log("Passwords do not match!");
        }
    }
    else
    {
        console.log("Incorrect Password!");
    }
    

    return false;
});