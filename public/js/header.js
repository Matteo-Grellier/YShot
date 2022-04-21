let isMenuOpen = false;

document.querySelector('.menu-button').addEventListener('click', () => {
    (isMenuOpen) ? reduceDiv() : enlargeDiv();
});

const enlargeDiv = () => {

    document.querySelector('.navbar_wrapper').classList.add('navbar_wrapper_appear')
    document.querySelector('.menu-button').classList.add('open')
    isMenuOpen = true;
}

const reduceDiv = () => {

    document.querySelector('.navbar_wrapper').classList.remove('navbar_wrapper_appear')
    document.querySelector('.menu-button').classList.remove('open')
    isMenuOpen = false;
}