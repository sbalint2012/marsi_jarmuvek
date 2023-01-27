function myFunction() {

    let banner = document.getElementById("banner-image");
    var element = document.body;
    element.classList.toggle("dark-mode");
    if (banner.getAttribute('src') === "../images/mars_panorama.jpg") {
        banner.setAttribute('src', "../images/mars_panorama_dark.jpg");
    }
    else {
        banner.setAttribute('src', "../images/mars_panorama.jpg");
    }
  
}

window.onload=function() {
    if(localStorage.darkMode=="true") {
        myFunction();
        document.getElementById("myCheck").checked=true;
    }
};

document.getElementById("myCheck").addEventListener("change", () => {
    localStorage.darkMode=(localStorage.darkMode=="true")?"false":"true";
});