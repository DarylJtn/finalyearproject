<?php 

?>

<script>
function logout(){
$.post("logout.php");
    jQuery.mobile.changePage(window.location.href, {
        allowSamePageTransition: true,
        transition: 'none',
        reloadPage: true
    });
}


function questionnairePage(){
//system.log("questionnaire");
$.mobile.changePage( "questionnaire.php");
console.log(2);

//$.mobile.pageContainer.pagecontainer("questionnaire.php", "pagetwo");

}
function questionnairePage2(){
//system.log("questionnaire");
$.mobile.changePage( "questionnaire/index.php");
console.log(2);

//$.mobile.pageContainer.pagecontainer("questionnaire.php", "pagetwo");

}


function resultsPage(){
//system.log("questionnaire");
$.mobile.changePage( "results.php");
console.log(2);
//$.mobile.pageContainer.pagecontainer("questionnaire.php", "pagetwo");

}

 $( document ).on( "pageinit", "#aboutPage", function( event ) {
  alert( "This page was just enhanced by jQuery Mobile!" );
});
</script>
<div id="mainMenu" class="menu">
<button onclick="questionnairePage()" id='skip' rel="external" data-ajax="false">Take Questionnaire</button>
<button onclick="questionnairePage2()" id='skip' rel="external" data-ajax="false">Take Questionnaire2</button>
	<a href="questionnaire/index.php" rel="external" data-role="button" data-inline="true"class='button'>Non AJAX Questionnaire</a>        
<button onclick="resultsPage()" id='skip' rel="external" data-ajax="false">ViewResults</button>
<button onclick="logout()" id='skip' rel="external" data-ajax="false">logout</button>
</div>