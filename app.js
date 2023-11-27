/*Show/hide FAQ */
const buttons = document.querySelectorAll('.faq-toggle')

buttons.forEach(button => {
    button.addEventListener('click', () => button.parentNode.classList.toggle('active'))
})

/*Aj tripi me shkronja nLogin */
const labels = document.querySelectorAll('.form-control label')

labels.forEach(label => {
    label.innerHTML = label.innerText
    .split('')
    .map((letter, idx) => `<span style="transition-delay:${idx * 30}ms">${letter}</span>`)
    .join('')
})


/* Scroll Buttoni */
const backToTopButton = document.querySelector('#back-to-top-btn');

window.addEventListener("scroll", scrollFunction);

function scrollFunction(){
    if(window.scrollY > 300){
        if(!backToTopButton.classList.contains("btnEntrance")){
            backToTopButton.classList.remove("btnExit");
            backToTopButton.classList.add("btnEntrance");
            backToTopButton.style.display = "block";
        }
    }else{
        if(!backToTopButton.classList.contains("btnExit")){
            backToTopButton.classList.remove("btnEntrance")
            backToTopButton.classList.add("btnExit");
            setTimeout(function() {
                backToTopButton.style.display = "none";
            }, 250);
        }
    }
}

backToTopButton.addEventListener("click", backToTop);

function backToTop(){
    window.scrollTo({
        top:0,
        behavior: 'smooth'
    });
}