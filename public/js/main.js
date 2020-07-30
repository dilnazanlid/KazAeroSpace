
const header = document.querySelector("header");
const intro = document.querySelector(".intro");

const optionsNav = {
    root: null,
    threshold: 0.10,
    rootMargin: "-100px"
 };

const navbarObserver = new IntersectionObserver(function(entries, navbarObserver){
  entries.forEach(entry => {
    const div = header.querySelector('div');
    if(!entry.isIntersecting){
      div.classList.remove("headerIn");
      div.classList.add("headerOut");
    }else{
      div.classList.remove("headerOut");
      div.classList.add("headerIn");
    }
  });
}, optionsNav);


navbarObserver.observe(intro);
