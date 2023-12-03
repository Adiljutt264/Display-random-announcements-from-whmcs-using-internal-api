//* YOUR CUSTOMIZED JAVASCRIPT *//
// custom.js

function loadRandomAnnouncement() {
    fetch('get_random_announcement.php')
        .then(response => response.text())
        .then(data => {
            document.querySelector('.announcement').innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
}

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(loadRandomAnnouncement, 1000);
});
