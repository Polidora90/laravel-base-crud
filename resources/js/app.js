require('./bootstrap');

window.addEventListener('load', function() {
    const deleteForm = document.querySelectorAll('.delete-form');

    deleteForm.forEach(form => {
        form.addEventListener('submit', (event) => {
            if(!confirm("L'elemento sarà definitivamente cancellato. Vuoi continuare?")){
                event.preventDefault();
            }
        })
    })
})