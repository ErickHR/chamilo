
document.addEventListener('DOMContentLoaded', function(){
    let headerItem = document.querySelector( '.header__item--burger' )
    let headerNav = document.querySelector( '.header-nav' )

    let  headerNavButtonClose = document.querySelector('.header-nav__button-close')

    headerItem.addEventListener( 'click', function() {
        headerNav.classList.add( 'header-nav--active' )
    } )

    headerNavButtonClose.addEventListener( 'click', function() {
        headerNav.classList.remove( 'header-nav--active' )
    } )

})


