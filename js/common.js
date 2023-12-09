//上から300以上スクロールしたら#page-topに.openを追加し、300未満の時は.openをはずす

const getScrollY = () => {
    const scrolled = window.scrollY;
    const pageTop = document.querySelector('#page-top');

    if (scrolled >= 300) {
        pageTop.classList.add( 'open' );
    } else {
        pageTop.classList.remove( 'open' );
    }
};

window.addEventListener('scroll',getScrollY);