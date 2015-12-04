/**
 * Created by nonau on 04/12/15.
 */
$( document ).ready(function() {
    $("#addevenemnt").click(function(){
        $("#popAddEvenement").css({'height' : $(window).height()});
        $("#popAddEvenement").show(500);
        $("#inputEventName").focus();
    });

    $("#cancelAddEvent").click(function(event){
        event.preventDefault();

        $("#popAddEvenement").hide(500);
    })
})