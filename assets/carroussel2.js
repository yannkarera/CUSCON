document.querySelectorAll('.voir-plus').forEach(button => {
  button.addEventListener('click', () => {
    // Récupère la catégorie sélectionnée (radio button)
    const selectedCategory = document.querySelector('input[name="category"]:checked').value;

    // Récupère le thème du bouton "voir plus" cliqué
    const theme = button.getAttribute('data-category');

    // Redirection vers la page PHP (via index.php)
    window.location.href = `index.php?page=items&categorie=${selectedCategory}&theme=${theme}`;
  });
});
