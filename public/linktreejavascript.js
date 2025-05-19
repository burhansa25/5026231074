
document.getElementById("check").addEventListener("change", function() {
    document.querySelector(".spanone").style.color = this.checked ? "#000000" : "white";
    document.querySelector(".spantwo").style.color = this.checked ? "white" : "#000000";
});



document.querySelector(".title-share-button i").addEventListener("click", function(event) {
    event.preventDefault();
    event.stopPropagation();
});



const toggle = document.getElementById('check');
const spanone = document.getElementById('spanone');
const spantwo = document.getElementById('spantwo');
const linkTab = document.getElementById('links-tab');
const shopTab = document.getElementById('shop-tab');

toggle.addEventListener('change', () => {
if (toggle.checked) {
    
    linkTab.style.display = "none";
    shopTab.style.display = "block";
    spanone.style.color = "white";
    spantwo.style.color = "#000000";
} else {
    
    shopTab.style.display = "none";
    linkTab.style.display = "block";
    spanone.style.color = "#000000";
    spantwo.style.color = "white";
}
});


window.addEventListener('DOMContentLoaded', () => {
if (toggle.checked) {
    linkTab.style.display = "none";
    shopTab.style.display = "block";
} else {
    linkTab.style.display = "block";
    shopTab.style.display = "none";
}
});
