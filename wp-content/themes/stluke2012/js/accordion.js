//jQuery Accordion code by www.wessray.com. Edited by nickroz.
$(document).ready(function() {	

//If its a page parent (based off wordpress), add the class "displayMenu"
//not sure if this is necessary
if ($('#navAccordion li').hasClass("current_page_ancestor")) {
	$('#navAccordion li ul').addClass("displayMenu");
	}

//If parent does not have class current_page_ancestor, hide its child UL.
$('#navAccordion li:not(.current_page_ancestor) ul').hide();

//Hide the submenus if they are not the current page menu and add .nextitem to the sub UL.
if ($('#navAccordion li').hasClass("current_page_ancestor")) {
	$('.current_page_ancestor > ul').addClass("currentMenu").addClass("nextitem");
	}

//ACCORDION IMAGE ROTATE
//If title <li> is open on load, apply open accordion image to <a>.  If not, add closed image.
$('#navAccordion ul li.current_page_parent > a').addClass("navmenutitleopen");
$('#navAccordion ul li:not(.current_page_parent):has(ul) > a').addClass("navmenutitleclosed");
//END IMAGES

	
//$('#navAccordion ul li ul li a').addClass('navmenuitem');

//Add a class to the parent li IF it has sub UL's
$("#navAccordion ul li:has(ul)").addClass('navmenutitle');

//Add a class to the pages
$("#navAccordion ul li ul li:has(a)").addClass('navmenuitem');

//Remove the link if it has a submenu
$('#navAccordion .navmenutitle > a').attr('href', '#');

//When clicked, it toggles.
//ORIGINAL LINE $('#navAccordion ul li.navmenutitle a').click(
$("#navAccordion ul li.navmenutitle a[class*='navmenutitle']").click(
	function() {
	
	//Onclick Remove the class displayMenu which is only display:block;
	//This way they can close it if they click it or it will glitch
	$(this).next().slideToggle('slow').removeClass("displayMenu");
	
	//nickroz open and closed accordion arrow
	//ERRORS WITH arrow appearing on click
	if ($(this).hasClass('navmenutitleopen')) {
		$(this).removeClass('navmenutitleopen').addClass('navmenutitleclosed');
		} else {
		$(this).removeClass('navmenutitleclosed').addClass('navmenutitleopen');
		}
	
	//Added by nickroz
	$(this).next().addClass("nextitem");
	
	//return false so the # doenst move view to the top of the page
	if ($(this).attr('href') == '#') { 
		return false;  
		}
	
	//Close it all out
	});

});
