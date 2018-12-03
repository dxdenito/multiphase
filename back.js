function _(x){
    return document.getElementById(x);

}



function baddress(){
    
    _("location").style.display="none";
    _("personal_details").style.display="block";
    
}
function bparent(){
    
    _("parent").style.display="none";
    _("location").style.display="block"; 
    
    
}
function bprog(){

_("course").style.display="none";
_("parent").style.display="block";

}

function bacademic(){
  
    _("academic").style.display="none";
    _("course").style.display="block";
    
}
function bfinal(){
    _("final").style.display="none";
    _("academic").style.display="block";
    

}