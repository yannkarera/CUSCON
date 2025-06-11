    function slugify(text) {
      return text
        .toString()
        .normalize('NFD')                   // enleve accents
        .replace(/[\u0300-\u036f]/g, '')    // suppression des diacritiques
        .toLowerCase()
        .trim()
        .replace(/[^a-z0-9]+/g, '-')        // remplace tout sauf lettres/chiffres par des tirets
        .replace(/^-+|-+$/g, '');           // supprime tirets en début/fin
    }

    function updateSlug() {
      const nameInput = document.getElementById('name');
      const slugInput = document.getElementById('slug');
      slugInput.value = slugify(nameInput.value);
    }