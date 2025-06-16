document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('searchInput');
    const ajaxResults = document.getElementById('ajax-results');
    const phpResults = document.getElementById('php-results');

    input.addEventListener('input', () => {
        const query = input.value.trim();

        if(query.length < 2) {
            ajaxResults.innerHTML = '';
            if (phpResults) phpResults.style.display = 'block';
            return;
        }

        fetch(`/search/ajax?keywords=${encodeURIComponent(query)}`)
            .then(res => res.json())
            .then(data => {
                if (phpResults) phpResults.style.display = 'none';

                if(data.length === 0) {
                    ajaxResults.innerHTML = '<p>Aucun résultat trouvé.</p>';
                    return;
                }

                const ul = document.createElement('ul');
                data.forEach(item => {
                    const li = document.createElement('li');
                    const a = document.createElement('a');
                    a.href = '/catalog/detail/' + encodeURIComponent(item.slug);
                    a.textContent = item.name;
                    li.appendChild(a);
                    ul.appendChild(li);
                });

                ajaxResults.innerHTML = '';
                ajaxResults.appendChild(ul);
            })
            .catch(err => {
                console.error('Erreur AJAX:', err);
                ajaxResults.innerHTML = '<p>Erreur lors de la recherche.</p>';
            });
    });

    // Optionnel : empêcher la soumission du formulaire pour recherche uniquement AJAX
    /*
    document.getElementById('search-form').addEventListener('submit', e => {
        e.preventDefault();
    });
    */
});