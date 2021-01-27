document.querySelector('.open-overlay').addEventListener("click",
    function openMenu() {
        let overlay_navigation = document.querySelector('.overlay-navigation');
        let nav_item_1 = document.querySelector('nav li:nth-of-type(1)');
        let nav_item_2 = document.querySelector('nav li:nth-of-type(2)');
        let nav_item_3 = document.querySelector('nav li:nth-of-type(3)');
        let nav_item_4 = document.querySelector('nav li:nth-of-type(4)');
        let nav_item_5 = document.querySelector('nav li:nth-of-type(5)');
        let top_bar = document.querySelector('.bar-top');
        let middle_bar = document.querySelector('.bar-middle');
        let bottom_bar = document.querySelector('.bar-bottom');
        overlay_navigation.classList.toggle('overlay-active');

        if (overlay_navigation.classList.contains('overlay-active')) {
            top_bar.classList.remove('animate-out-top-bar');
            top_bar.classList.add('animate-top-bar');
            middle_bar.classList.remove('animate-out-middle-bar');
            middle_bar.classList.add('animate-middle-bar');
            bottom_bar.classList.remove('animate-out-bottom-bar');
            bottom_bar.classList.add('animate-bottom-bar');
            overlay_navigation.classList.remove('overlay-slide-up');
            overlay_navigation.classList.add('overlay-slide-down');
            nav_item_1.classList.remove('slide-in-nav-item-reverses');
            nav_item_1.classList.add('slide-in-nav-item');
            nav_item_2.classList.remove('slide-in-nav-item-delay-1-reverse');
            nav_item_2.classList.add('slide-in-nav-item-delay-1');
            nav_item_3.classList.remove('slide-in-nav-item-delay-2-reverse');
            nav_item_3.classList.add('slide-in-nav-item-delay-2');
            nav_item_4.classList.remove('slide-in-nav-item-delay-3-reverse');
            nav_item_4.classList.add('slide-in-nav-item-delay-3');
            nav_item_5.classList.remove('slide-in-nav-item-delay-4-reverse');
            nav_item_5.classList.add('slide-in-nav-item-delay-4');
        } else {
            top_bar.classList.remove('animate-top-bar');
            top_bar.classList.add('animate-out-top-bar');
            middle_bar.classList.remove('animate-middle-bar');
            middle_bar.classList.add('animate-out-middle-bar');
            bottom_bar.classList.remove('animate-bottom-bar');
            bottom_bar.classList.add('animate-out-bottom-bar');
            overlay_navigation.classList.remove('overlay-slide-down');
            overlay_navigation.classList.add('overlay-slide-up')
            nav_item_1.classList.remove('slide-in-nav-item');
            nav_item_1.classList.add('slide-in-nav-item-reverse');
            nav_item_2.classList.remove('slide-in-nav-item-delay-1');
            nav_item_2.classList.add('slide-in-nav-item-delay-1-reverse');
            nav_item_3.classList.remove('slide-in-nav-item-delay-2');
            nav_item_3.classList.add('slide-in-nav-item-delay-2-reverse');
            nav_item_4.classList.remove('slide-in-nav-item-delay-3');
            nav_item_4.classList.add('slide-in-nav-item-delay-3-reverse');
            nav_item_5.classList.remove('slide-in-nav-item-delay-4');
            nav_item_5.classList.add('slide-in-nav-item-delay-4-reverse');
        }
    }
)