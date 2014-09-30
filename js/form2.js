$(function(){


        $("#go2").click(function(e){

            
var yearborn = $("#howoldareyou").val();
var gender = $('.genderradio:checked').val();
var ethnic = $('.ethnicradio:checked').val();

       ajaxTrace(yearborn,gender,ethnic);
})
  

})

// function verify(arg){
//     var trimed = $.trim(arg);
//   if (trimed =="") 
//     return false;
// else if (!validEmail(trimed) && !ValidPhone(trimed)) {
//     return false;
// }
// else return true;
// }

// function validEmail(v) {
//     var r = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
//     return (v.match(r) == null) ? false : true;
// }

// function ValidPhone(v) {
//     var pattern = /^[0-9-+]+$/;
//     if (pattern.test(v)) {
//         return true;
//     }
//     return false;
// }

// function validSocial(v) {
//     var r = new RegExp("^[a-zA-Z'_ ]*$");
//     return (v.match(r) == null) ? false : true;
// }


function ajaxTrace(yearborn,gender,ethnic){
  
    var socials = "";

    $(".checkbox").find("input").each(function(){
        if ($(this).attr('checked')) {
            var val = $(this).attr('value');
            //alert(val)
            socials += val + ";";
        }
    })

    var altSocial = $.trim($(".alt_social").val());
    if (altSocial != "") { socials += normalize(altSocial) + ";"; };
    
//alert(socials)
    $.ajax({
        type: 'POST',
        url:  'php/trace2.php',
        data: {
            gender:gender,
            yearborn:yearborn,
            ethnic:ethnic,
            socials:socials
        },
        contentType: 'application/x-www-form-urlencoded',
        success: function(x) {
            if (typeof lan === 'undefined') {       
                window.document.location.href='end.php'; //ricarica una pagina                      
            }
            else{
     
                window.document.location.href='end.php?lan='+lan;
            }

            //alert(x)
            // var str =  window.document.location.href;
            // var array=str.split("?lan=");
            // var lan = array[1];

            // if (lan == null) {
            //     window.document.location.href='form2.php'; //ricarica una pagina               
            // }
            // else{
            //     window.document.location.href='form2.php?lan='+lan;
            // }
        },
        error: function(r) { 
            alert("Error "+r.status+" on resource '"+this.url+"':\n"+r.statusText); 
        }
    })
}

function normalize(str){
    var s = str;
    if(str != null && str !=undefined){
        s= str.replace(/&/g,"&amp;");
        s= s.replace(/'/g,"&apos;");
        s= s.replace(/"/g,"&quot;");
    }
    return s;
}