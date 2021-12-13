window.onscroll = () => {
    console.log(window.scrollY);
    document.getElementById("L1").style.top = window.scrollY * 0.75 + "px";
    document.getElementById("L2").style.top = window.scrollY * 0.03 + "px";
    document.getElementById("L3").style.top = window.scrollY * 0.15 + "px";
    document.getElementById("L4").style.top = window.scrollY * 0.35 + "px";
    document.getElementById("L5").style.top = window.scrollY * 0.25 + "px";
    document.getElementById("L6").style.top = window.scrollY * 0.55 + "px";
    }