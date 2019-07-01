$(document).on("click", "#delete", function(e){
     e.preventDefault();
     var link = $(this).attr("href");
     bootbox.confirm("Are you want to delete!!", function(confirmed){

        if (confirmed) {
            window.location.href = link;
        };
     });
    });



      function vform()
  {
    var a=document.forms["sform"]["employee_name"].value;
    var a1=document.forms["sform"]["employee_fathersname"].value;
    var a2=document.forms["sform"]["employee_mothersname"].value;
    var a3=document.forms["sform"]["employee_department"].value;
    var a4=document.forms["sform"]["employee_designation"].value;
    var a5=document.forms["sform"]["employee_dob"].value;
    var a6=document.forms["sform"]["employee_age"].value;
    var a7=document.forms["sform"]["employee_email"].value;
    var a8=document.forms["sform"]["gender"].value;
    var a9=document.forms["sform"]["nid"].value;
    var a10=document.forms["sform"]["employee_phone"].value;
    var a11=document.forms["sform"]["employee_address"].value;
    var a12=document.forms["sform"]["employee_password"].value;
    var a13=document.forms["sform"]["basic_salary"].value;
    var a14=document.forms["sform"]["employee_image"].value;
    var a15=document.forms["sform"]["employee_joiningdate"].value;
    
    
    if(a==null ||a=="")
    {
      window.alert(" Employee_ Name must be field out");
      return  false;
    }

    else if(a1==null ||a1=="")
    {
      window.alert("Fathers Name Name must be field out");
      return  false;
    }
    else if(a2==null ||a2=="")
    {
      window.alert(" Mothers Name must be field out");
      return  false;
    }

    else if(a3==null ||a3=="")
    {
      window.alert("Department Name must be field out");
      return  false;
    }
  
    else if(a4==null ||a4=="")
    {
      window.alert("Designation must be field out");
      return  false;
    }
    else if(a5==null ||a5=="")
    {
      window.alert("Birthdate must be field out");
      return  false;
    }
      else if(a6==null ||a6=="")
    {
      window.alert(" age must be field out");
      return  false;
    }
  else if(a7==null ||a7=="")
    {
      window.alert(" gmail  must be field out");
      return  false;
    }  


    else if(a8==null ||a8=="")
    {
      window.alert(" Gender  must be field out");
      return  false;
    }
else if(a9==null ||a9=="")
    {
      window.alert(" NID must be field out");
      return  false;
    } 
    else if(a10==null ||a10=="")
    {
      window.alert(" Phone  must be field out");
      return  false;
    }

    else if(a11==null ||a11=="")
    {
      window.alert("Address  must be field out");
      return  false;
    }

      else if(a12==null ||a12=="")
    {
      window.alert(" Password must be field out");
      return  false;
    }
    else if(a13==null ||a13=="")
    {
      window.alert(" salary must be field out");
      return  false;
    }

    else if(a14==null ||a14=="")
    {
      window.alert(" images  must be field out");
      return  false;
    }
    else if(a15==null ||a15=="")
    {
      window.alert("Joining date  must be field out");
      return  false;
    }







    
    
  }


    function vform2()
  {
    var a=document.forms["forms_sample"]["holiday_date"].value;
    var a1=document.forms["forms_sample"]["holiday_title"].value;
    var a2=document.forms["forms_sample"]["holiday_description"].value;
   
    
    
    if(a==null ||a=="")
    {
      window.alert(" holiday_date must be field out");
      return  false;
    }

    else if(a1==null ||a1=="")
    {
      window.alert("holiday_title must be field out");
      return  false;
    }
    else if(a2==null ||a2=="")
    {
      window.alert(" holiday_description must be field out");
      return  false;
    }

    
    
  }

function vform3()
  {
    var a=document.forms["formsample"]["employee_id"].value;
    var a1=document.forms["formsample"]["leave_reason"].value;
    var a2=document.forms["formsample"]["description"].value;
    var a3=document.forms["formsample"]["leave_start"].value;
    var a4=document.forms["formsample"]["leave_end"].value;
   
    
    
    if(a==null ||a=="")
    {
      window.alert(" employee_id must be field out");
      return  false;
    }

    else if(a1==null ||a1=="")
    {
      window.alert("leave_reason must be field out");
      return  false;
    }
    else if(a2==null ||a2=="")
    {
      window.alert(" description must be field out");
      return  false;
    }
       else if(a3==null ||a3=="")
    {
      window.alert(" leave_start must be field out");
      return  false;
    }



     else if(a4==null ||a4=="")
{
      window.alert(" leave_end must be field out");
      return  false;
    }

    
  }


