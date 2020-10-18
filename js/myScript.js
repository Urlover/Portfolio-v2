/*
* Scrolls to the top of the page 
* https://stackoverflow.com/questions/15935318/smooth-scroll-to-top/55926067
*/
const scrollToTop = () => {
    const c = document.documentElement.scrollTop || document.body.scrollTop;
    if (c > 0) {
      window.requestAnimationFrame(scrollToTop);
      window.scrollTo(0, c - c / 8);
    }
  };
  scrollToTop();