export const navbar = {

    init: function(){

        const burger = document.getElementById("burger");
        burger.addEventListener("click", navbar.handleNavEvent);
    },

    handleNavEvent: function(evt) {
        const burger = evt.currentTarget;
        burger.classList.toggle('active');
    }
}

document.addEventListener("DOMContentLoaded", navbar.init);