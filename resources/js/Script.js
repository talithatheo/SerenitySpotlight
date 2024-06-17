document.addEventListener('DOMContentLoaded', function () {
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slideshow-img');
    const totalSlides = slides.length;

    // Function to change slide
    function changeSlide() {
        // Hide all slides
        slides.forEach(slide => slide.style.opacity = 0);

        // Increment the index
        currentIndex = (currentIndex + 1) % totalSlides;

        // Display the next slide with fade-in effect
        slides[currentIndex].style.opacity = 1;

        // Call the function again after 5 seconds
        setTimeout(changeSlide, 5000);
    }

    // Initially, show the first slide
    slides[0].style.opacity = 1;

    // Call the function to start the slideshow
    setTimeout(changeSlide, 5000);
});

let slideIndex = 0;
const slides = document.querySelectorAll('.video-slide');

function showSlides() {
    slides.forEach(slide => {
        slide.style.display = 'none';
    });
    slides[slideIndex].style.display = 'block';
}

function nextSlide() {
    if (slideIndex === slides.length - 1) {
        slideIndex = 0;
    } else {
        slideIndex++;
    }
    showSlides();
}

function prevSlide() {
    if (slideIndex === 0) {
        slideIndex = slides.length - 1;
    } else {
        slideIndex--;
    }
    showSlides();
}

showSlides();
