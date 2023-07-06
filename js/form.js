/***
	Traitement du formulaire par JQuery
	Version : 0.0
	Auteur : Moi
	
***/

$(function () {

	$('button[name="submit"]').on('click', function () {
		console.log('button click');
		let name = $('#uName').val();
		let mail = $('#uMail').val();
		let sujet = $('#sujet').val();
		let message = $('#content').val();
		if ((name) === '' || (mail) === '' || (sujet) === '' || (message) === '') {
			console.log('coucou');
			$('input').each(function () {
				if ($(this).val() == '') {
					console.log('check empty');
					$(this).prevAll('span').html(' (obligatoire)');
					$(this).addClass('error');
				} else {
					console.log('check name not empty')
					$(this).removeClass('error');
					$(this).prevAll('span').html('');
				}
			});
			if ((message) === '') {
				$('#content-info').html(' (obligatoire)');
				$('#content').addClass('error');
			} else {
				$('#content').removeClass('error');
				$('#content-info').html('');
			}
			// if ((name) == '') {
			// 	console.log('check name empty');
			// 	$('#uName-info').html(' (obligatoire)');
			// 	$('#uName').addClass('error');
			// } else {
			// 		console.log('check name not empty')
			// 		$('#uName').removeClass('error');
			// 		$('#uName-info').html('');
			// }
			// if ((mail) === '') {
			// 	$('#uMail-info').html(' (obligatoire)');
			// 	$('#uMail').addClass('error');
			// } else {
			// 	$('#uMail').removeClass('error');
			// 	$('#uMail-info').html('');
			// }
			// if ((sujet) === '') {
			// 	$('#sujet-info').html(' (obligatoire)');
			// 	$('#sujet').addClass('error');
			// } else {
			// 	$('#sujet').removeClass('error');
			// 	$('#sujet-info').html('');
			// }

		} 
		
		if (($('#uMail').val()) != '') {
			console.log('check mail');
			if (validateEmail($('#uMail').val())) {
				if (($('#uName').val()) != '' && ($('#uMail').val()) != '' && ($('#sujet').val()) != '' && ($('#content').val()) != '') {
					console.log('check form valid');
					$('#form-status').show();
					$('input').val('');
					$('textarea').val('');
					alert('Contenu du formulaire : \nNom : ' + name + '\n' + 'Email : ' + mail + '\n' + 'Sujet : ' + sujet + '\n' + 'Message : ' + message + '\n');
				}
				$('#uMail').addClass('ok');
				$('#form-status').hide();
			} else {
				$('#uMail').addClass('error');
				$('#uMail').val('Format de mail invalide');
			}
		} else {
			$('#uMail').addClass('error');
		}
		$('#uMail').on('click', function () {
			if (($('#uMail').val()) === 'Format de mail invalide') {
				$('#uMail').val('');
			}
		});
		
		function validateEmail(email) {
			let pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			return pattern.test(email);
		}
	});
});

