document.addEventListener('DOMContentLoaded', () => {
    const icon = document.getElementById('search-icon');
    const input = document.getElementById('search-input');
  
    if (icon && input) {
      icon.addEventListener('click', () => {
        input.style.display = input.style.display === 'none' ? 'block' : 'none';
      });
    }
  });
  