$(document).ready(function() {
    let currentIndex = 0;
    const slides = $(".slide");
    const totalSlides = slides.length;

    // Menampilkan slide pertama
    slides.eq(currentIndex).fadeIn();

    // Fungsi untuk mengganti slide
    function showNextSlide() {
        slides.eq(currentIndex).fadeOut(function() {
            currentIndex = (currentIndex + 1) % totalSlides;
            slides.eq(currentIndex).fadeIn();
        });
    }

    // Set interval untuk slider
    setInterval(showNextSlide, 3000);
});
