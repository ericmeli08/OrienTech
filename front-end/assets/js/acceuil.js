let progress_bar_find_book = document.querySelectorAll("#acceuil .progress-bar")
let user = document.getElementById("user")
let log_out = document.getElementById('log-out')


progress_bar_find_book.forEach(element => {
    let text = element.parentElement.parentElement.textContent
    element.style.width = text
    console.log(text)
});



log_out.addEventListener('click',function(){
    if(user.style.visibility == "visible"){
        user.style.visibility = "hidden"
        user.style.transform = "translateY(0px)"

    }else{
        user.style.visibility = "visible"
        user.style.transform = "translateY(10px)"

    }

})