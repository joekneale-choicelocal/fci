import $ from 'jquery';

const getMobileNav = (event) => {
    const navId = event.currentTarget.dataset.mobile_nav_id;
    if (!navId) {
        return;
    }
    const nav = $(`#${navId}`);
    if (!nav) {
        return;
    }
    return nav;
}

const openMobileNav = (event) => {
    const nav = getMobileNav(event);
    if(!nav) {
        return;
    }
    nav.show();
    nav.animate({left:'0'}, 200);
}

const closeMobileNav = (event) => {
    const nav = getMobileNav(event);
    if(!nav) {
        return;
    }
    nav.animate({left:'-100%'}, 200);
    nav.hide(200);
};

$(document).ready(() => {
    // open mobile nav
    $('button[data-open_mobile_nav]').click(event => openMobileNav(event));

    // close active mobile nav
    $('button[data-close_mobile_nav]').click(event => closeMobileNav(event));
});
