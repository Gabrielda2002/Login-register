// Agrega este script al final de tu archivo HTML, antes de cerrar el cuerpo </body>

    document.addEventListener("DOMContentLoaded", function() {
        var dropdownBtn = document.querySelector('.dropdown-btn');
        var dropdownContent = document.querySelector('.dropdown-content');

        dropdownBtn.addEventListener('click', function() {
            dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
        });

        window.addEventListener('click', function(event) {
            if (!event.target.matches('.dropdown-btn')) {
                if (dropdownContent.style.display === 'block') {
                    dropdownContent.style.display = 'none';
                }
            }
        });
    });

