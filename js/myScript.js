/*
* Scrolls to the top of the page 
* https://stackoverflow.com/questions/15935318/smooth-scroll-to-top/55926067
*/
const scrollToTop = () => {
    const c = document.documentElement.scrollTop;
    if (c > 0) {
      window.requestAnimationFrame(scrollToTop);
      window.scrollTo(0, c - c / 8);
    }
  };

  /*
  * Redirects to proper URL for *Table Rows*
  * https://stackoverflow.com/questions/17147821/how-to-make-a-whole-row-in-a-table-clickable-as-a-link
  */
 jQuery(document).ready(function($) {
  $(".clickable-row").click(function() {
      window.location = $(this).data("href");
  });
});