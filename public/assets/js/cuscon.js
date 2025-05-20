addEventListener("DOMContentLoaded", (event) => {
    document.querySelectorAll('.navbarToggle').forEach((button) => {
        button.addEventListener('click', (e) => {
            toggleSidebar();
        })
    })
});


function showSidebar(){
    document.querySelector('.navbar ul').classList.add('navbarActive')
}

function hideSidebar(){
    document.querySelector('.navbar ul').classList.remove('navbarActive')
}


function toggleSidebar(){
    document.querySelector('.navbar ul').classList.toggle('navbarActive')
}