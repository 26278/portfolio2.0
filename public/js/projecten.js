// Get the modal
var modalparent = document.getElementsByClassName("modal__multi");

// Get the button that opens the modal
var modal_btn_multi = document.getElementsByClassName("myBtn__multi");

// Get the <span> element that closes the modal
var span_close_multi = document.getElementsByClassName("close__multi");

// // When the user clicks on the button, open the modal
// btn.onclick = function() {
//     modal.style.display = "block";
// }
//
// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }
//
// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }

function setDataIndex() {

    for (i = 0; i < modal_btn_multi.length; i++)
    {
        modal_btn_multi[i].setAttribute('data-index', i);
        modalparent[i].setAttribute('data-index', i);
        span_close_multi[i].setAttribute('data-index', i);
    }
}



for (i = 0; i < modal_btn_multi.length; i++)
{
    modal_btn_multi[i].onclick = function() {
        var ElementIndex = this.getAttribute('data-index');
        modalparent[ElementIndex].style.display = "block";
        gsap.to('.modal-filter', .5, {display: 'block', opacity: 1});
    };

    // When the user clicks on <span> (x), close the modal
    span_close_multi[i].onclick = function() {
        var ElementIndex = this.getAttribute('data-index');
        modalparent[ElementIndex].style.display = "none";
        gsap.to('.modal-filter', .5, {opacity: 0});
        gsap.set('.modal-filter', {delay: .5, display: "none"});
    };

}

window.onload = function() {

    setDataIndex();
};

window.onclick = function(event) {
    if (event.target === modalparent[event.target.getAttribute('data-index')]) {
        modalparent[event.target.getAttribute('data-index')].style.display = "none";
        gsap.to('.modal-filter', .5, {opacity: 0});
        gsap.set('.modal-filter', {delay: .5, display: "none"});
    }

};

var tl = gsap.timeline();
tl.fromTo('#title1', .5, {x: -50, opacity: 0}, {x: 0, opacity: 1});
tl.fromTo('.project', .5, {y: 50, opacity: 0}, {y: 0, opacity: 1, stagger: .3}, "-=.3");
tl.fromTo('#title2', .5, {x: -50, opacity: 0}, {x: 0, opacity: 1}, "-=1.4");
