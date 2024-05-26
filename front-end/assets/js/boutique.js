let progress_bar_boutique = document.querySelectorAll("#container-boutique .progress-bar")

progress_bar_boutique.forEach(element => {
    let text = element.parentElement.parentElement.textContent
    element.style.width = text
});