function registration(){
    document.querySelector("#transparent").classList.add("transparent");
    document.querySelector("body").style.overflow = "hidden";
    document.querySelector("#hide").classList.remove("hide");
}
function register(){
    document.querySelector("#login").classList.add("hide");
    document.querySelector("#transparent").classList.add("transparent");
    document.querySelector("#register").classList.remove("hide");
}
function login(){
    document.querySelector("#register").classList.add("hide");
    document.querySelector("#login").classList.remove("hide");
}
function closing(){
    document.querySelector("#login").classList.add("hide");
    document.querySelector("#register").classList.remove("hide");
    document.querySelector("#transparent").classList.remove("transparent");
    document.querySelector("body").style.overflow = "scroll";
    document.querySelector("#hide").classList.add("hide");
}
