

document.getElementById('burger-menu').addEventListener('click', function() {
    document.getElementById('nav-links').classList.toggle('active');
});

document.querySelectorAll('.dropdown-toggle').forEach(dropdownToggle => {
    dropdownToggle.addEventListener('click', function(event) {
        event.preventDefault();
        this.parentElement.classList.toggle('active');
    });
});
