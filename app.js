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

// qikjo e mundson me punu heren e par qysh duhet (e kom vjedh)
document.addEventListener("DOMContentLoaded", function () {
    scrollFunction();
});

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
    console.log("Scroll position:", window.scrollY); //per me debug o qikjo

    if (window.scrollY > 300) {
        if (!backToTopButton.classList.contains("btnEntrance")) {
            console.log("Adding btnEntrance class"); //per me debug o qikjo
            backToTopButton.classList.remove("btnExit");
            backToTopButton.classList.add("btnEntrance");
            backToTopButton.style.display = "block";
        }
    } else {
        if (!backToTopButton.classList.contains("btnExit")) {
            console.log("Adding btnExit class");
            backToTopButton.classList.remove("btnEntrance");
            backToTopButton.classList.add("btnExit");
            setTimeout(function () {
                console.log("Hiding button"); //per me debug o qikjo
                backToTopButton.style.display = "none";
            }, 250);
        }
    }
}

backToTopButton.addEventListener("click", backToTop);

function backToTop() {
    console.log("Scrolling back to top"); // per me debug o qikjo
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}


//shko te filan veni (dmth te FAQ) [ish kon mir me dit me bo ma general qit funksion]
function scrollToTarget() {
    var targetElement = document.getElementById('About-title-cards');
    console.log('Current Path:', window.location.pathname);

    if (window.location.pathname === '/Abouti.html') {
        console.log('Scrolling to target element.');
        targetElement.scrollIntoView({ behavior: 'smooth' });
    } else {
        console.log('Redirecting to Abouti.html.');
        window.location.href = 'Abouti.html#About-title-cards';
    }
}
/*validimi */
function validateForm() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var error = document.getElementById('error');
    var valid = document.getElementById('valid');
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "" || password === "") {
        error.textContent = "Please fill in all fields.";
    } else if (!emailRegex.test(email)) {
        error.textContent = "Please enter a valid email address.";
    } else {
        error.textContent = "";
        setTimeout(function() {
            valid.textContent = "LogIn successful!";
        }, 100);
    }
}

/*Show/hide Rankings  (@media) */
const buttonsR = document.querySelectorAll('.select-btn');

buttonsR.forEach(button => {
    button.addEventListener('click', () => {
        const divisionRank = button.closest('.division-rank');
        divisionRank.classList.toggle('active');
    });
});

//Slideri V2
// const slider = document.querySelector(".articles");

// const prev = document.querySelector("#leftButton");
// const next = document.querySelector("#rightButton");

// next.addEventListener('click', function() {
//     slider.style.transform = 'translate(-20%)';
// });

// Slideri
var articles = document.querySelector(".articles");
var articlesWidth =  parseFloat(getComputedStyle(articles).width);
var article1 = document.querySelector(".article");
var articleWidth = parseFloat(getComputedStyle(article1).width);
console.log(articlesWidth);
function slideLeft() {
    var currentMargin = parseFloat(getComputedStyle(article1).marginLeft);
   
    if (!isNaN(currentMargin)) {
        article1.style.marginLeft = (currentMargin - articleWidth) + "px";
    } else {
        console.error("Invalid margin value:", currentMargin);
    }
}


function slideRight() {
    var currentMargin = parseFloat(getComputedStyle(article1).marginLeft);
    console.log(currentMargin);
    if(currentMargin>0){
        article1.style.marginLeft = (articleWidth*3) + "px";
    }
    if (!isNaN(currentMargin)) {
        article1.style.marginLeft = (currentMargin + articleWidth) + "px";
    } else {
        console.error("Invalid margin value:", currentMargin);
    }
}

// articles.addEventListener('transitioned', function() {
//     articles.appendChild(articles.firstElementChild());

//     articles.style.transform = tranlate(0);
// })

