var ccju = ccju || {};

ccju.menu = {
    init: function() {
        document.getElementById('menuButton').addEventListener('click', function () {
            ccju.menu.toggleMenu(this);
        });

        this.initFocusEvents();
    },

    toggleMenu: function(clickedElement) {
        var menuBody = document.querySelector('.js-menu-body');
        clickedElement.classList.toggle('-active');
        menuBody.classList.toggle('-active');
    },

    initFocusEvents: function() {
        const focusClassName = '-focused';

        function handleFocusIn(event) {
            const parentMenuItem = event.target.closest('.menu-item-has-children');
            if (parentMenuItem) {
                parentMenuItem.classList.add(focusClassName);
            }
        }

        function handleFocusOut(event) {
            const parentMenuItem = event.target.closest('.menu-item-has-children');
            if (parentMenuItem && !parentMenuItem.contains(event.relatedTarget)) {
                parentMenuItem.classList.remove(focusClassName);
            }
        }

        const menuItems = document.querySelectorAll('.menu-item-has-children');

        menuItems.forEach(menuItem => {
            const focusableElements = menuItem.querySelectorAll('a');

            focusableElements.forEach(element => {
                element.addEventListener('focusin', handleFocusIn);
                element.addEventListener('focusout', handleFocusOut);
            });
        });
    }
};

ccju.menu.init();
