function goToProfile()
{
    location.href = '../view/profile.php';
    return location.href;
}

function goToCourseList()
{
    location.href = "../view/courselist.php";
    return location.href;
}

function goToResults()
{
    location.href = "../view/result.php";
    return location.href;
}

function goToLogOut()
{
    location.href = "../../session/logoutsession.php";
    return location.href;
}

function goToHome()
{
    location.href = "../homepage.php";
    return location.href;
}

function goToChangePassword()
{
    location.href = "../view/changepassword.php";
    return location.href;
}

function getCurrentPassword()
{
    console.log(myPassword);
}

$('form#update').on('submit', function(){
    
    var markToUpdate = document.getElementById('mark').value;
    
    if(markToUpdate == '' )
    {
        $('#updateResult').text('Field is empty!');
        return false;
    }
    else if(markToUpdate<0 || markToUpdate>100)
    {
        $('#updateResult').text('The mark must be between 0 and 100!');
        return false;
    }
    else
    {
        $('#updateResult').text("Updated successfully!");
        var currentForm = $(this),
        url = currentForm.attr('action'),
        type = currentForm.attr('method'),
        data={};

        currentForm.find('[name]').each(function(index, value)
        {
            //console.log(value);
            var currentForm = $(this), 
            name=currentForm.attr('name'),
            value = currentForm.val();
            data[name] = value;
        });

        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(response){
                console.log(response);
                //document.getElementById('passwordResult').value = response;
                $('#updateResult').text("Mark updated successfully!");
            }
        });
        return false;
    }
    
    return false;
});

$('form#password').on('submit', function(){
    
    var currentPassword = document.getElementById('currentPassword').value;
    var newPassword = document.getElementById('newPassword').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    
    //document.getElementById('passwordResult').value = "YES";
    
    if(currentPassword == ''||newPassword==''||confirmPassword=='')
    {
        $('#passwordResult').text('One or more of the fields is empty!');
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
                $('#passwordResult').text("Password must be atleast 8 characters");
                return false;
            }
            re = /[0-9]/;
            numeric = re.test(newPassword);
            if(numeric == false)
            {
                $('#passwordResult').text("Password must contain numeric value");
                return false;
            }
            re = /[a-z]/;
            small = re.test(newPassword);
            if(small == false)
            {
                $('#passwordResult').text("Password must contain atleast 1 small letter");
                return false;
            }
            re = /[A-Z]/;
            capital = re.test(newPassword);
            if(capital == false)
            {
                $('#passwordResult').text("Password must contain atleast 1 capital letter");
                return false;
            }
            if(newPassword.length >=8 && numeric == true && small == true && capital == true)
            {
                //console.log("Updated successfully!");
                var currentForm = $(this),
                url = currentForm.attr('action'),
                type = currentForm.attr('method'),
                data={};

                currentForm.find('[name]').each(function(index,value)
                {
                    //console.log(value);
                    var currentForm = $(this), 
                    name=currentForm.attr('name'),
                    value = currentForm.val();
                    data[name] = value;
                });

                $.ajax({
                    url: url,
                    type: type,
                    data: data,
                    success: function(response){
                        console.log(response);
                        //document.getElementById('passwordResult').value = response;
                        $('#passwordResult').text(response);
                    }
                });
                //$('#passwordResult').text('Updated successfully');
                return false;
            }            
        }
        else
        {
            $('#passwordResult').text("Passwords do not match!");
        }
    }
    else
    {
        $('#passwordResult').text("Incorrect Password!");
    }
    
    return false;
});



function showStudent() {
    var searchID=  document.getElementById("searchID").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
  
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("searchHint").innerHTML = this.responseText;
      }
      else
      {
           document.getElementById("searchHint").innerHTML = this.status;
      }
    };
    xhttp.open("POST", "../control/getStudent.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("searchID="+searchID);
}