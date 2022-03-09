import ScrollReveal from "scrollreveal";

ScrollReveal().reveal('.slide-up', {
    origin: 'bottom',
    distance: '150px',
    interval: 200,
    cleanup: true,
});

ScrollReveal().reveal('.slide-down', {
    origin: 'top',
    distance: '150px',
    interval: 200,
    cleanup: true,
});


ScrollReveal().reveal('.slide-left', {
    origin: 'right',
    distance: '150px',
    interval: 200,
    cleanup: true,
});

ScrollReveal().reveal('.slide-right', {
    origin: 'left',
    distance: '150px',
    interval: 200,
    cleanup: true,
});

ScrollReveal().reveal('.fade-in', {
    opacity: 0,
    distance: 0,
    interval: 200,
    cleanup: true,
});