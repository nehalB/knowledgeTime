/**
 * Created by Nehal on 10/7/2016.
 */

function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 20000);
}
