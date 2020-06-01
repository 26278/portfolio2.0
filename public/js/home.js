var tl = gsap.timeline();

tl.fromTo('.call, .title, .subtitle', .5, {y: 20}, {y: 0, opacity: 1, stagger: .35, ease: "power2.out"});
tl.fromTo('.mobile-image, .desktop-img', .4, {y: 20}, {y: 0, opacity: 1, ease: "power2.out"});
tl.fromTo('.line, .story, .buttons', .5, {y: 20}, {y: 0, opacity: 1, ease: "power2.out", stagger: .35});

