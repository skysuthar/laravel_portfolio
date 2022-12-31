     const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");
  let toggle_ = true;

toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
    if(toggle_) {
       document.documentElement.style.setProperty('--side-nav-width', "250px");
    } else {
       document.documentElement.style.setProperty('--side-nav-width', "80px");
    }
  toggle_ = !toggle_;
  console.log("toggle");
});