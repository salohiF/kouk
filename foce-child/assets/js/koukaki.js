jQuery(document).ready(function ($) {
  // Fade in all elements with the class "fade-in" with a delay
  $('.fade-in').each(function (index) {
    $(this).delay(500 * (index + 1)).fadeIn(1000);
  });


  var swiper = new Swiper('.characters-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });



});


//jQuery(window).scroll( function(){
jQuery(window).on("scroll", function ($) {

  /* Check the location of each desired element */
  jQuery('.fadeh2').each(function (i) {

    var bottom_of_object = jQuery(this).offset().top + jQuery(this).outerHeight();
    var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();



    /* If the object is completely visible in the window, fade it it */
    if (bottom_of_window > bottom_of_object) {
      console.log("must show")
      jQuery(this).animate({ 'opacity': '1' }, 2500);

    }

  });

  // Sélectionner tous les éléments avec la classe "title"
  const titles = document.querySelectorAll('.title');

  // Entourez chaque mot avec des balises span
  titles.forEach(title => {
    const titleContent = title.textContent; // string
    const words = titleContent.split(' ');
    const newWords = words.map(word => `<span>${word}</span>`);
    const newContent = newWords.join(' ');

    // Mettre à jour le contenu de l'élément avec les nouveaux mots entourés de balises span
    title.innerHTML = newContent;
  });


});

//animation nuages

function cloudanimation(){
  const clouds = document.querySelectorAll('.cloud img');
  const container = document.getElementById('place');
  let distance = container.getBoundingClientRect().top
  console.log(distance)
  clouds.forEach(cloud=>{
    cloud.style.setProperty('--distance',`${distance}px`)
  })
}
window.addEventListener('scroll',()=>{
  cloudanimation()
})


const menuToggle = document.querySelector('.menu-toggle');
const menuBurgerContainer = document.querySelector('.menu-burger-container');
const menuLinks = document.querySelectorAll('.menu a');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  menuBurgerContainer.classList.toggle('active');
  requestAnimationFrame(() => {
    menuBurgerContainer.style.display = 'flex';
  });
});

menuLinks.forEach((link) => {
  link.addEventListener('click', () => {
    menuBurgerContainer.classList.remove('active');
    menuToggle.classList.remove('active');
  });
});




