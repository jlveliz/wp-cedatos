jQuery(document).ready(function($) {

	$('.cedatos-popup').on('click', function(event) {
		var modalContainer = $("#popupmodal");

		var btnLink = $(this);

		//params 
		var size = btnLink.data('size') ? btnLink.data('size') : '';
		var title = btnLink.data('title') ? btnLink.data('title') : '';
		var content = btnLink.data('src') ? btnLink.data('src') : '';


		modalContainer.find('.modal-dialog').addClass("modal-"+size);
		modalContainer.find('.modal-title').text(title);
		modalContainer.find('iframe').attr('src', content);

		modalContainer.modal()


	});


	$('#main-nav a.dropdown-toggle').on('click',function(event){
		self.location = $(this).attr('href');
	})


	function getDomain() {
		return location.protocol + '//' + location.hostname  
	}


	var mouseIn = (e) =>{
		var el = $(e.currentTarget);
		var social = el.data('social')
		var icon = el.children()
		var newSource =  e.type == "mouseenter" ? "youtube" : getDomain() + '/wp-content/themes/cedatos/' ; 
		
		switch (social) {
			case 'facebook':
				newSource+="assets/images/icono-facebook-cedatos.png" 
				break;
			case 'twitter':
				newSource+="assets/images/icono-twitter-cedatos.png"
				break;
				default:
					break;
		}
		
		icon.attr('src',newSource)

	}
	
	var mouseOut = (e) =>{

		var el = e.currenTarget;

		console.log(el)

	}

	$(".social-footer").hover( mouseIn , mouseIn )

	

});