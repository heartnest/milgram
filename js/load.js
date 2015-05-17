$(function(){

 //   msgSENDER = "<span>sender ID is NOT CORRECT please check it again from the message you received.</span>"
 //   + "<br /><span> FOR TESTing, PLEASE INSERT '1'</span>";
 //   msgFORMAT = "<span>please insert a correct email address or cellphone number</span>";


    $('#targ').popover();  
 
    $("#go1").click(function(e){

        var inputOK = true;

        $(".wru").removeClass("has-error");
        $(".wst").removeClass("has-error");
        $(".warning2 span").remove();
        $(".warning1 span").remove();

        e.preventDefault();


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
        
        var checkCkbox = socials.indexOf(";");

        if (!verify($("#whoareyou").val())) { 
            inputOK = false;
            $(".wru").addClass("has-error");
            $(".warning1").append("<span>"+msgFORMAT+"</span>");

        }else if(checkCkbox == -1){
            $(".warning2").removeClass("hidden");
            $(".q2s2").addClass("bs-callout-warning")
        }
        else{
            $(".q2s2").removeClass("bs-callout-warning")
            $(".warning2").addClass("hidden");
             ajaxTrace($("#whoareyou").val(),$("#whosthat").val(),$("#whichnetwork").val(),socials);
        }
})

        $("#go2").click(function(e){
   
                    if (typeof lan === 'undefined') {
                       
                  window.document.location.href='end.php'; //ricarica una pagina               
                   
              }
              else{
     
                 window.document.location.href='end.php?lan='+lan;
            }
})
  
})

function verify(arg){
    var trimed = $.trim(arg);
  if (trimed =="") 
    return false;
else if (!validEmail(trimed) && !ValidPhone(trimed)) {
    return false;
}
else return true;
}

function validEmail(v) {
    var r = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
    return (v.match(r) == null) ? false : true;
}

function ValidPhone(v) {
    var pattern = /^[0-9-+]+$/;
    if (pattern.test(v)) {
        return true;
    }
    return false;
}

// function validSocial(v) {
//     var r = new RegExp("^[a-zA-Z'_ ]*$");
//     return (v.match(r) == null) ? false : true;
// }


// function ajaxVerify(arg){
//     var trimed = $.trim(arg);
//     $.ajax({
//         type: 'GET',
//         url:  'php/verifyid.php',
//         data: {
//             senderid:trimed
//         },
//         contentType: 'application/x-www-form-urlencoded',
//         success: function(x) {
//            // alert(x);
//             if (x == 0) {
//                 $(".warning2").append("<span>"+msgSENDER+"</span>");
//                 $(".wst").addClass("has-error");
//             }else if (x == 1) {
//                 ajaxTrace($("#whoareyou").val(),$("#whosthat").val(),$("#whichnetwork").val());
//             }
            
//         },
//         error: function(r) { 
//             alert("Error "+r.status+" on resource '"+this.url+"':\n"+r.statusText); 
//         }
//     })
// }

function ajaxTrace(arg1,arg2,arg3,socials){
    var trimed1 = $.trim(arg1);
    var trimed2 = $.trim(arg2);
    var trimed3 = $.trim(arg3);


    $.ajax({
        type: 'POST',
        url:  'php/trace.php',
        data: {
            yourid:trimed1,
            senderid:trimed2,
            network:trimed3,
            socials:socials
        },
        contentType: 'application/x-www-form-urlencoded',
        success: function(x) {
            if (x == 1) {
                var str =  window.document.location.href;
                var array=str.split("?lan=");
                var lan = array[1];
                if (lan == null) {
                    window.document.location.href='end.php'; //ricarica una pagina               
                }
                else{
                    window.document.location.href='end.php?lan='+lan;
                }
            }else{
                alert(x)
            }
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
