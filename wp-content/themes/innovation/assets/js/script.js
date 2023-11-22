
document.addEventListener("DOMContentLoaded", function(event) {
    // Your code to run since DOM is loaded and ready
    let navContainer = document.querySelector('.nav-links');
    document.querySelector('#toggler').addEventListener('click', function(){
      this.name = this.name === 'menu' ? 'close' : 'menu';
      navContainer.classList.toggle('top-[16%]');
      console.log('Hamburger clické');
    });
  
    // document.querySelector('#menu-item-12 a').classList.remove('');
    document.querySelector('#menu-item-12 a').classList.add('rounded-2xl', 'px-12', 'py-4', 'md:bg-white', 'md:text-[#2c2887]', 'bg-[#2c2887]', 'text-white');
  
   
  });
  
  
  
  
  
  
  
  
  
  