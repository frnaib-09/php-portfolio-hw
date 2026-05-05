
const dashPages = document.querySelectorAll('aside ul li');


function addActive(event) {
    dashPages.forEach(item => {
        item.classList.remove('active');
    });
}
dashPages.forEach(li => {
    li.addEventListener('click', addActive);
});