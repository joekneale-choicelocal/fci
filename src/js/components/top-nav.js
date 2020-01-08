import $ from 'jquery';


// gets the child dropdown from dropdown controller
const getDropdown = (event) => {
    const dropdowns = $(event.target).children('.dropdown');
    if (!dropdowns || dropdowns.length === 0) {
        return;
    }
    return dropdowns[0];
}

const openDropdown = (event) => {
    const dropdown = getDropdown(event);
    if (!dropdown) {
        return;
    }
    $(dropdown).show();
};

const closeDropdown = (event) => {
    const dropdown = getDropdown(event);
    if (!dropdown) {
        return;
    }
    $(dropdown).hide();
}

$(document).ready(() => {

});