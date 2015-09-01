$(document).ready(function(){
    $("#sendMail").click(function(){
         var fieldsProp = {};
         var catMail = "contact";

         fieldsProp = ({
                 "catMail" : catMail,
                 "cont_name" : $("#name").val(),
                 "cont_email" : $("#email").val(),
                 "cont_msg" : $("#message").val()
         });

         $.post('./sendmail.php', fieldsProp, function(data) {
             if (data > 0){

                     alert("Thank you for contact us!")
             }
         });
    });
});
