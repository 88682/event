document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const slideContainer = document.querySelector('.slide-container');

    function slide() {
        const slides = document.querySelectorAll('.slide');
        const firstSlide = slides[0];
        slideContainer.style.transition = 'transform 0.5s ease';
        slideContainer.style.transform = 'translateX(-33.33%)';
        setTimeout(() => {
            slideContainer.appendChild(firstSlide);
            slideContainer.style.transition = 'none';
            slideContainer.style.transform = 'translateX(0)';
        }, 1050);
    }

    setInterval(slide, 1050);
});
