/**
 * Created by nonau on 04/12/15.
 */
//Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A
var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
    n = 0;
$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
            alert('Laissez vous tenter par le coté de la force'); // à remplacer par votre code
            changeCSS();
            n = 0;
            return false;
        }
    }
    else {
        n = 0;
    }
});

function changeToObscure() {

    var links = document.getElementsByTagName("link");

    var oldlink = links.item(links.length - 1);
    var newlink = document.createElement("link");
    newlink.setAttribute("rel", "stylesheet");
    newlink.setAttribute("type", "text/css");
    newlink.setAttribute("href", "css/theme.sw.css");

    document.getElementByTagName("head").item(0).replaceChild(newlink, oldlink);
}