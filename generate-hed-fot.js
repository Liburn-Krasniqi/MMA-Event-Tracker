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
    <a href="Rankings.html">Rankings</a>
    <a href="Login.html">Log In</a>
    <div class="dropdown">
        <p class="dropbtn" > Search </p>
        <div class="dropdown-content" id="myDropdown">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div>
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
              <li><a href="">About us</a></li>
              <li><a href="">Sign for news letter</a></li>
              <li><a href="">Our sports betting site</a></li>
              <li><a href="">Privacy policy</a></li>
              <li><a href="">Cookie settings</a></li>
          </ul>
      </div>

      <div class="footer-column">
          <h4>Get Help</h1>
          <ul>
              <li><a href="">FAQ</a></li>
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