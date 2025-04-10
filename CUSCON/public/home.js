document.addEventListener("DOMContentLoaded", function() {
    const etoilesElements = document.querySelectorAll(".etoiles");
    etoilesElements.forEach(function(etoilesElement) {
      const rating = parseInt(etoilesElement.getAttribute("data-rating"));
      etoilesElement.style.width = `${rating * 20}%`;
    });
  });
  