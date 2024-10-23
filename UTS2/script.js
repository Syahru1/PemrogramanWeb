document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('error-message');

    // Menghapus validasi username dan password tertentu
    if (username !== '' && password !== '') {
        alert('Login successful!');  // Login berhasil tanpa syarat khusus
        errorMessage.style.display = 'none';
    } else {
        errorMessage.style.display = 'block';
        errorMessage.textContent = 'Email and password are required!';
    }
});
