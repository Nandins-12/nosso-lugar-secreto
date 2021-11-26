function toggle() {
    const nav = document.querySelector('header div.container nav')
    nav.classList.toggle('active')
    document.body.classList.toggle('menu-compatibility')
    document.querySelector('#btn-mobile').classList.toggle('active')
}
