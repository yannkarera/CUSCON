document.querySelectorAll('.voir-plus').forEach(button => {
  button.addEventListener('click', () => {
    // Récupère la catégorie sélectionnée (radio button)
    const selectedCategory = document.querySelector('input[name="category"]:checked')?.value;

    // Récupère le thème du bouton "voir plus" cliqué
    const theme = button.getAttribute('data-theme'); // attention : mieux de l'appeler data-theme et pas data-category

    if (selectedCategory && theme) {
      // Redirection vers catalog avec paramètres GET
      window.location.href = `/catalog?categorie=${encodeURIComponent(selectedCategory)}&theme=${encodeURIComponent(theme)}`;
    } else {
      alert('Veuillez sélectionner une catégorie et un thème.');
    }
  });
});
