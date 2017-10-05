const $BQSModalHide = document.getElementById('hide-modal');
const $BQSModal = document.getElementById('BQSModal');
const $BQSOverlay = document.getElementById('BQSOverlay');

$BQSModalHide.addEventListener('click',(event) => {
	Hide();
});

function Sended(){
	$BQSModal.style.animation = 'modalIn .8s forwards';
	$BQSOverlay.classList.add('active');
};

function Hide(){
	$BQSModal.style.animation = 'modalOut .8s forwards';
	$BQSOverlay.classList.remove('active');
};

$(function(){
	$('.BQSServices-prices-cta-link').click(function(){
		var target = $(this.hash);

		$('html,body').animate({
			scrollTop: target.offset().top
		}, 1000); 
	});
});

