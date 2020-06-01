var background = gsap.timeline( {paused: true} );
background.set('#sidenavBackground', {display: "block"});
background.to('#sidenavBackground', .3, {opacity: .5, ease: "none"}, "+=.2");

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    background.play();
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    background.reverse();
}