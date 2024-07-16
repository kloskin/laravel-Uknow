
//Pokazywanie menu po wciśnieciu barsów
document.addEventListener('DOMContentLoaded', function () {
    console.log('Custom JavaScript loaded');

    document.getElementById('menuToggleUknow').addEventListener('click', function () {
        document.getElementById('mobileMenu').classList.toggle('d-none');
    });

    document.getElementById('menuCloseUknow').addEventListener('click', function () {
        document.getElementById('mobileMenu').classList.add('d-none');
    });
});