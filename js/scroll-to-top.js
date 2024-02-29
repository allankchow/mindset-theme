document.addEventListener('DOMContentLoaded', function () {
    var scrollToTopButton = document.getElementById('scrollToTop');

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    };

    // When the user clicks on the button, scroll to the top of the document
    scrollToTopButton.addEventListener('click', function () {
        window.scrollTo({top: 0, behavior: 'smooth'});
    });
});
