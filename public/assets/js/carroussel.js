document.addEventListener( function () {
    const slides = document.querySelectorAll('.slide');
    const voirPlusButtons = document.querySelectorAll('.voir-plus');
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
        });
    }

    document.querySelector('.next').addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });

    document.querySelector('.prev').addEventListener('click', function () {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });

    // Gérer le bouton "Voir plus"
    voirPlusButtons.forEach(button => {
        button.addEventListener("click", function () {
            let selectedCategory = document.querySelector('input[name="category"]:checked').value;
            let selectedSubCategory = button.getAttribute("data-category");

            alert(`Catégorie: ${selectedCategory} | Theme: ${selectedSubCategory}`);
        });
    });

    // Initialisation
    showSlide(currentIndex);
});
