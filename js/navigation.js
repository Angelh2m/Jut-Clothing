
"use strict"

class MobileMenu {
  constructor() {
    this.button = document.getElementById('nav');
    this.toggleButton = document.querySelector('.mobileNav')
    this.navigation = document.getElementById('responsive')
    this.menu = document.querySelectorAll('#primary-menu li');
    this.array = [...this.menu];
    this.preventGallery = document.querySelectorAll('.woocommerce-product-gallery__wrapper a');
    this.onClick();
    this.prevent();


    // console.log(this.preventGallery);


    this.array.forEach(function(object, index ) {
      setTimeout(function() {
        object.classList.add('active');
        console.log(object);
      }, index * 1000)
    });

  }


  prevent(){

    let selector = this.preventGallery;


    selector.forEach( function functionName(object, index) {

      object.addEventListener('click', (e)=>{
        // console.log('Added');

        // console.log(object.href);
        e.preventDefault();
      })
    })

  }

  onClick(){

    let navigation = this.navigation;
    let toggleButton = this.toggleButton;
    console.log(toggleButton);

    this.button.addEventListener('click', function() {

      navigation.classList.toggle('activeX');
      toggleButton.classList.toggle('activeX');

    });

  }
}

new MobileMenu();
