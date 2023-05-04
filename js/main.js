function getMenu() {
    let b = document.querySelector('body');
    let nav = document.querySelector('nav');
    let selector = document.querySelector('#cell');
    selector.style = "display: block; position: absolute; top: 0;";
    b.style = "overflow: hidden";
}
function hideMenu() {
    let b = document.querySelector('body');
    let nav = document.querySelector('nav');
    let selector = document.querySelector('#cell');
    nav.style = 'display: flex';
    selector.style = 'display: none';
    b.style = "overflow: scroll";
}