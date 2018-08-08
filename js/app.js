$(function(){
    $("#rollno").on('blur',function(){
       if(!/(\d{2}((CO)|(DCO)|(EE)|(DEE)|(ME)|(dme)|(ce)|(dce)|(ces)|(dces))\d{2,3})/i.test(this.value)){
           alert("INVALID ROLLNO");
           this.value="";
           $(this).focus();
       } 
    });
    $("#sname").on('keypress',function(e){
       if(/[^a-zA-Z ]/.test(e.key)){
          alert("INVALID NAME. Only alphabets and spaces are allowed");
           this.value="";
           $(this).focus();
           return false;
       } 
    });
    $("#address").on('blur',function(){
       if(!((this.value.length>=50)&&(this.value.length<=150))){
          alert("INVALID ADRESS!!!");
           this.value="";
           $(this).focus();
       } 
    });
    $("#semail").on('blur',function(){
       if(!/[a-bA-Z0-9_.]+[@]+[a-bA-Z]+[.]+[a-zA-Z]+/.test(this.value)){
          alert("INVALID EMAIL ADRESS!!!");
           this.value="";
           $(this).focus();
       } 
    });
});