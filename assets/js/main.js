///////////////////////////////////////////////
//
//
//		CLICKING ON SITE SITE-LINKS
//
//
///////////////////////////////////////////////

$(document).ready(function(){
	
	History = window.History,
	State = History.getState();
	//check to see if we are at the site index and redirect to home/index.php if we are
	var re = new RegExp('/\?views/');
	if (!State.url.match(re)) {
		var path = window.location.pathname+'?'+$("#path_to_home_page").val();
		var title = 'Admin Services';
		History.pushState('ajax',title,path);
	}
	else{
		//there is a url so we need  to find and activate the appropriate link
		url_split = State.url.split("?");
		url = url_split[1];
		if($("[href='"+url+"']").closest("[role='navigation']").length>0){
			//this is a link in the nav menu that should have active class stuff done
			if($("[href='"+url+"']").closest("ul").hasClass('navbar-nav')){
				$("[href='"+url+"']").closest("li").siblings().removeClass('active');
				$("[href='"+url+"']").closest("li").addClass('active');
			}
			else{
				$(".dropdown-menu li").removeClass('active');
				$("[href='"+url+"']").closest("li").addClass('active');

				$("[href='"+url+"']").closest("ul").closest("li").siblings().removeClass('active');
				$("[href='"+url+"']").closest("ul").closest("li").addClass('active');
			}
		}

	}
	//load the ajax for the url
	load_ajax_data();

	$("body").on("click",".site-link",function(e){
		e.preventDefault();
		
		var path = window.location.pathname+'?'+$(this).attr('href');
		
		var title = 'Admin Services';
		History.pushState('ajax',title,path);
		//set the active status of the nav-menu if it is a nav menu
			if($(this).closest("[role='navigation']").length>0){
				if(!$(this).closest("ul").hasClass('navbar-nav')){
					//this is a submenu item so we need to remove active classes
					$(".dropdown-menu li").removeClass('active');
				}
				//unset the sibling active classes
				$(this).closest("li").siblings().removeClass('active');

				//add the active class to this element
				$(this).closest("li").addClass('active');
			}
	});

	// Bind to state change
	// When the statechange happens, load the appropriate url via ajax
	History.Adapter.bind(window,'statechange',function() { // Note: Using statechange instead of popstate
	load_ajax_data();
	});

	function load_ajax_data() {
		State = History.getState();
		$.post(State.url.replace("?",""), function(data) {
			//place the returned data into the main-content div found at views/layout/main.php
			$("#main-content").html(data);
		});
	}

});

