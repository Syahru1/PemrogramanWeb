$(document).ready(function() {
    const $loginForm = $('#loginForm');
    const $sidebar = $('.sidebar');
    const $homeSection = $('.home');
    const $errorMessage = $('#error-message');
    const $laporanMenu = $('#laporan-menu');
    const $reportFrame = $('#reportFrame');
    const $dropdownMenu = $('.dropdown-menu');
    const $dropdownToggle = $('.dropdown-toggle');

    const $simpleAlert = $('#simpleAlert');
    const $simpleAlertMessage = $('#simpleAlertMessage');

    function showSimpleAlert(message) {
        $simpleAlertMessage.text(message);
        $simpleAlert.fadeIn(200).delay(2000).fadeOut(200);
    }

    $loginForm.on('submit', function(event) {
        event.preventDefault(); 

        const username = $('#username').val().trim(); 
        const password = $('#password').val().trim(); 

        if (username === '' || password === '') {
            showSimpleAlert('Harap isi nama pengguna dan kata sandi.'); 
            return; 
        }

        if (username === 'Syahrul' && password === '1234') {
            $sidebar.show(); 
            $homeSection.show(); 
            $('.login-form').hide(); 
            $errorMessage.text(''); 
        } else {
            showSimpleAlert('Username atau password salah'); 
        }
    });

    $dropdownToggle.on('click', function(event) {
        event.preventDefault();
        $dropdownMenu.slideToggle(); 
    });


    $laporanMenu.on('click', function() {
        $reportFrame.toggle(); 
    });
});
