/* Javascript functions for DOCSMR.COM */

/* Form Load */
function onPageLoad() /* not being used right now */
{ 
document.getElementById("FormMenuDiv").visible = true;
document.getElementById("FormLoginDiv").visible = false;
/*alert("I'm changing your visibility");*/
}

function select_tab(TheTab) /* not being used right now */
{
alert("Tab " + TheTab + " selected");
var myTab = document.getElementById(TheTab);
//myTab.addEventListener('click', doStuff, false);
myTab.click();
}
