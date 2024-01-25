function generateHeader(){
    let setHtmlCode='';
    setHtmlCode=`
     <div class="row">
     <a href="index.html">Home</a>
    <a href="Abouti.html">About us</a>
    <a href="News.html">News</a>

    <a href="index.html" id="logo">FightLog</a>
    <!--
    e shkruva O per momentin masi simetrike 
    -->
    
    
    <div class="dropdown">
        <p class="dropbtn" > Search </p>
        <div class="dropdown-content" id="myDropdown">
            <a href="#">Events</a>
            <a href="#">Fighters</a>
            <a href="Rankings.html">Rankings</a>
          </div>
        </div>
        <div id='darkbutoni'>
        <i id="theme-toggle">☾</i> <i id="theme-toggle-dark">☼</i> </div>
        <a href="Login.html">Log In</a>
        
    </div> 
    `;
 return setHtmlCode;
}
document.querySelector('header').innerHTML=generateHeader()

function generateFooter(){
  let setHtmlCode='';
  setHtmlCode=`
  <div class="container">
  <div class="row">
      <div class="footer-column">
          <h4>Company</h1>
          <ul>
              <li><a href="Abouti.html">About us</a></li>
              <li><a href="">Sign for news letter</a></li>
              <li><a href="">Our sports betting site</a></li>
              <li><a href="">Privacy policy</a></li>
              <li><a href="">Cookie settings</a></li>
          </ul>
      </div>

      <div class="footer-column">
          <h4>Get Help</h1>
          <ul>
              <li><a onclick="scrollToTarget()">FAQ</a></li>
              <li><a href="">Promote your MMA event</a></li>
              <li><a href="">Site feedback</a></li>
          </ul>
      </div>

      <div class="footer-column">
          <h4>Follow Us</h4>
          <div class="SocialLinks-section">    
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-tiktok"></i></a>
          </div>
      </div>
  </div>

</div>
  `;
return setHtmlCode;
}
document.querySelector('footer').innerHTML=generateFooter()

// Get the theme toggle button element
const themeToggle = document.getElementById('darkbutoni');

// Function to toggle the dark theme
function toggleDarkTheme() {
  document.body.classList.toggle('dark-theme');
}

// Event listener for the theme toggle button
themeToggle.addEventListener('click', toggleDarkTheme);



const wrap=document.getElementById('maini');
const LoginLink=document.getElementById('Login-link');
const RegistLink=document.getElementById('Regist-link');


RegistLink.addEventListener('click',()=>{
    wrap.classList.add('active');
});
LoginLink.addEventListener('click',()=>{
    wrap.classList.remove('active');
});


function validateReg() {
    var username=document.getElementById('user').value;
    var email = document.getElementById('emailReg').value;
    var password = document.getElementById('passwordReg').value;
    var error = document.getElementById('errorReg');
    var valid = document.getElementById('validReg');
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passRegex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var usernameRegex=/^[a-zA-Z0-9_-]{3,16}$/;

    if (email === "" || password === "" || username === "") {
        error.textContent = "Please fill in all fields.";
    } else if (!emailRegex.test(email)) {
        error.textContent = "Please enter a valid email address.";
    }/*else if(username in databaz){         mas databazes
        error.textContent = "username Already taken";
    } /*/
    else if (!usernameRegex.test(username)){
        error.textContent = "Username should only contain letters underscore or hyphen and be 3-16 charachters long";

    }
    else if (!passRegex.test(password) ){
        error.textContent = "Password must be over 8 charachter and contain numbers,lower case and upper case letters";
    }
    else {
        error.textContent = "";
        setTimeout(function() {
            valid.textContent = "Register successful!";
        }, 100);
    }
}