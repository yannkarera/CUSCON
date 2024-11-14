function openSearchPopup() {
    
    document.getElementById("searchPopup").style.display = "block";

}

function closeSearchPopup() {
    document.getElementById("searchPopup").style.display = "none";

}

window.onclick = function(event) {
    if (event.target == document.getElementById("searchPopup")) {
        closeSearchPopup
    }
}
