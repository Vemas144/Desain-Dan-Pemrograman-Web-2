document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("loginForm");

    form.addEventListener("submit", function (event) {
        // Ambil nilai dari form
        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();
        
        let errorMessage = "";

        // Validasi JavaScript
        if (username === "" || password === "") {
            errorMessage = "Harus terisi";
        } else if (password.length > 6) {
            errorMessage = "Password maksimal 6 karakter";
        } else if (!/[A-Z]/.test(password) || !/[a-z]/.test(password)) {
            errorMessage = "Password harus terdiri dari huruf besar dan kecil";
        }

        if (errorMessage !== "") {
            event.preventDefault(); // Menghentikan submit jika ada error
            alert(errorMessage); // Menampilkan pesan error
        }
    });
});
