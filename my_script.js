function validateform(){  
    var name= document.getElementById("fname").value;  
    var last_name= document.getElementById("lname").value;  
    var fathers_name=document.getElementById("fathers_fname").value; 
    var fathers_Lastname=document.getElementById("fathers_lname").value; 
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var firstpassword= document.getElementById("password").value;  
    var secondpassword= document.getElementById("confirmPassword").value;  
    var email = document.getElementById("email").value;

    var pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var matching = pattern.test(email);
    
    
    if (name==null || name==""||last_name==null || last_name==""){  
      alert("Name can't be blank");  
      return false;  
    }
    if (fathers_name==null || fathers_name==""|| fathers_Lastname==null || fathers_Lastname==""){  
        alert("Fathers Name can't be blank");  
        return false;  
      }
    if (address== null || address== ""|| city==null || city ==""){
        alert("address and city cant be blank");
    }
    if(firstpassword.length<6){  
      alert("Password must be at least 6 characters long.");  
      return false;  
      }  
    if (firstpassword != secondpassword) {  
        alert("password must be same!");  
        return false;  
        }   
    if (!matching)
    {
      alert("Email adress is incorrect");
    }
    alert("Your form is submitted");
  }


