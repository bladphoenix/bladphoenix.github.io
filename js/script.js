// event pada saat link di klik
$('.page-scroll').on('click', function(e) {

	//ambil isi href
	const tujuan = $(this).attr('href');
	//tangkap element yg bersangkutan
	const elementTujuan = $(tujuan);

	//pindahkan scrollnya
	$('html , body').animate({
		scrollTop: elementTujuan.offset().top - 50
	}, 1250, 'easeInOutExpo');

	e.preventDefault();
});