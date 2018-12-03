var fname,lname,sname,country,gender, dob, telephone, idno, email, country, campus, course, session, hschool, yc, grade, schooladd;
var country, ward, constituency, pfname, plname, paddress, ptelephone, pemail;
function _(x){
    return document.getElementById(x);

}

function personal(){
    
    fname= _("fname").value;
    lname= _("lname").value;
    sname= _("sname").value;
    
    gender = _("gender").value;
    dob = _("dob").value;
    telephone = _("telephone").value;
    idno = _("idno").value;
    email = _("email").value;
    
    if (fname!=""&& lname!=""&& sname!=""&&gender!=""&&dob!=""&&telephone!=""&&idno!=""&&email!="") {
        _("pbar").value=15;
    _("location").style.display="block";
    _("personal_details").style.display="none";
    
     
    }else{
    alert("fill out all fields");
    if (fname=="") {
        _("fname").style.borderColor="red";     
    }else{
        _("fname").style.borderColor="black"; 
    }
    if (lname=="") {
        _("lname").style.borderColor="red"; 
   }else{
    _("lname").style.borderColor="black"; 
}
   if (sname=="") {
    _("sname").style.borderColor="red"; 
   }else{
    _("sname").style.borderColor="black"; 
}
   if (gender=="") {
    _("gender").style.borderColor="red"; 
   }else{
    _("gender").style.borderColor="black"; 
}
   if (dob=="") {
    _("dob").style.borderColor="red"; 
   }else{
    _("dob").style.borderColor="black"; 
}
   if (telephone=="") {
    _("telephone").style.borderColor="red"; 
   }else{
    _("telephone").style.borderColor="black"; 
}
   if (idno=="") {
    _("idno").style.borderColor="red"; 
}else{
    _("idno").style.borderColor="black"; 
}
if (email=="") {
    _("email").style.borderColor="red";   
}else{
    _("email").style.borderColor="black"; 
}

    }   
     
}

function address(){
    country=_("country").value;
    county=_("county").value;
    ward=_("ward").value;
    constituency=_("constituency").value;
    if(country!=""&&county!=""&&ward!=""&&constituency!=""){
    _("location").style.display="none";
    _("parent").style.display="block";
    _("pbar").value=30;
    }else{
        alert("fill out all fields");
        if (country=="") {
            _("country").style.borderColor="red";     
        }else{
            _("country").style.borderColor="black"; 
        }
        if (county=="") {
            _("county").style.borderColor="red"; 
       }else{
        _("county").style.borderColor="black"; 
    }
       if (constituency=="") {
        _("constituency").style.borderColor="red"; 
       }else{
        _("constituency").style.borderColor="black"; 
    }
       if (ward=="") {
        _("ward").style.borderColor="red"; 
       }else{
        _("ward").style.borderColor="black"; 
    }
    }
}
function parent(){
    pfname=_("pfname").value;
    
    pemail=_("pemail").value;
    ptelephone=_("ptelephone").value;
    paddress=_("paddress").value;
    if (pfname!=""&&pemail!=""&&ptelephone!=""&&paddress!="") {
    _("parent").style.display="none";
    _("course").style.display="block"; 
    _("pbar").value=50;
    }else{
        alert("please fill out all fields");
        if (pfname=="") {
            _("pfname").style.borderColor="red";     
        }else{
            _("pfname").style.borderColor="black"; 
        }
        if (ptelephone=="") {
            _("ptelephone").style.borderColor="red"; 
       }else{
        _("ptelephone").style.borderColor="black"; 
    }
       if (paddress=="") {
        _("paddress").style.borderColor="red"; 
       }else{
        _("paddress").style.borderColor="black"; 
    }
       if (pemail=="") {
        _("pemail").style.borderColor="red"; 
       }else{
        _("pemail").style.borderColor="black"; 
    }
    }
    
}
function prog(){
campus=_("campus").value;
course=_("program").value;
session=_("session").value;
if(campus!=""&&course!=""&&session!=""){
_("course").style.display="none";
_("academic").style.display="block";
_("pbar").value=70;
}else{
    alert("please fill out all fields");
}
}

function academic(){
    hschool=_("hschool").value;
    yc=_("yc").value;
    grade=_("grade").value
    schooladd=_("schooladd").value;
    if (hschool!=""&&yc!=""&&grade!=""&&schooladd!="") {
    _("academic").style.display="none";
    _("final").style.display="block";
    _("pbar").value=100;
    _("fn").innerHTML=fname+" "+lname+" "+sname;
    
    _("gnd").innerHTML=gender;
    _("em").innerHTML=email;
    _("phone").innerHTML=telephone;
    _("db").innerHTML=dob;
    _("id").innerHTML=idno;
    _("country1").innerHTML=country;
    _("county1").innerHTML=county;
    _("const1").innerHTML=constituency;
    _("ward1").innerHTML=ward;
    _("gfn").innerHTML=pfname;
    _("gphone").innerHTML=ptelephone;
    _("gem").innerHTML=pemail;
    _("gadd").innerHTML=paddress;
    _("camp").innerHTML=campus;
    _("prog").innerHTML=course;
    _("sess").innerHTML=session;
    _("hschool1").innerHTML=hschool;
    _("yoc").innerHTML=yc;
    _("schadd").innerHTML=schooladd;
    _("grd").innerHTML=grade;
    
    
     }else{
         alert("please fill out all fields");
         
     }
}
function tc(){
    _("tc").style.display="block";
    
}
function keynum(event){
    var key=('which'in event)?event.which:event.keyCode;
    
    isNumeric=(key>=48&&key<=57 ) || (key>=96&&key<=105 ) ||(key==8) || (key==46) ||(key==37) ||(key==38) ||(key==39) ||(key==40);
    modifiers=(event.altKey||event.ctrlKey||event.shiftKey);
    return isNumeric||modifiers;
}
function keychar(event){
    var key=('which'in event)?event.which:event.keyCode;
    
    isNumeric=(key>=48&&key<=57 ) || (key>=96&&key<=105 ) ;
    modifiers=(event.altKey||event.ctrlKey||event.shiftKey);
    return !isNumeric||modifiers;
}
function regsubmit(){
    _("reg").method= "post";
    _("reg").action= "submit.php";
    _("reg").submit();
}