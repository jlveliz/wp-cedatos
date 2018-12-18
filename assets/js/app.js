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

});