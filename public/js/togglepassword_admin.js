function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('showPasswordButton').querySelector('img');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        // Change the eye icon to closed eye
        eyeIcon.src = "../storage/image/eye_2.png";
    } else {
        passwordInput.type = 'password';
        // Change the eye icon to open eye
        eyeIcon.src = "../storage/image/eye.png";
    }
}