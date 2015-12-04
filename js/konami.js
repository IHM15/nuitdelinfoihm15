/**
 * Created by nonau on 04/12/15.
 */
//Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A
var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
    n = 0;
$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
            alert('Laissez vous tenter par le coté obscur de la force'); // à remplacer par votre code
            changeToObscure();
            n = 0;
            return false;
        }
    }
    else {
        n = 0;
    }
});

function changeToObscure() {

   /* var links = document.getElementsByTagName("link");

    var oldlink = links.item(links.length - 1);
    var newlink = document.createElement("link");
    newlink.setAttribute("rel", "stylesheet");
    newlink.setAttribute("type", "text/css");
    newlink.setAttribute("href", "css/themes.sw.css");
    console.log(document.getElementsByTagName("head"));
    document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);*/

    document.cookie =
        'sw=theforce; expires=Fri, 3 Aug 2021 20:47:11 UTC; path=/';
    location.reload();

}