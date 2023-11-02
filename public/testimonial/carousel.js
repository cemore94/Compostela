'use strict';

class Carousel {
  constructor(el) {
    this.el = el;
    this.carouselOptions = ['previous', 'add', 'play', 'next'];
    this.carouselData = [
      {
        'id': '1',
        'src': 'http://fakeimg.pl/300/?text=1',
      },
      {
        'id': '2',
        'src': 'http://fakeimg.pl/300/?text=2',
      },
      {
        'id': '3',
        'src': 'http://fakeimg.pl/300/?text=3',
      },
      {
        'id': '4',
        'src': 'http://fakeimg.pl/300/?text=4',
      },
      {
        'id': '5',
        'src': 'http://fakeimg.pl/300/?text=5',
      }
    ];
    this.carouselInView = [1, 2, 3];
    this.carouselContainer;
    this.carouselPlayState;
  }

  mounted() {
    this.setupCarousel();
  }

  // Build carousel html
  setupCarousel() {
    const container = document.createElement('div');
    const controls = document.createElement('div');

    // Add container for carousel items and controls
    this.el.append(container, controls);
    container.className = 'carousel-container';
    controls.className = 'carousel-controls';

    // Take dataset array and append items to container
    //agregado por paxtor94
    if(this.preContent != null){
      this.preContent.forEach((item, index) => {
        const carouselItem = item.src ? document.createElement('img') : document.createElement('div');
        container.append(carouselItem);
        
        // Add item attributes
        carouselItem.className = `carousel-item carousel-item-${index + 1}`;
        
        carouselItem.setAttribute('loading', 'lazy');
        // Used to keep track of carousel items, infinite items possible in carousel however min 5 items required
        carouselItem.setAttribute('data-index', `${index + 1}`);
        //agregado por paxtor94
        carouselItem.append(item);
        //agregado por paxtor94
      });
    }
    //agregado por paxtor94
    else{
      this.carouselData.forEach((item, index) => {
        const carouselItem = item.src ? document.createElement('img') : document.createElement('div');
  
        container.append(carouselItem);
        
        // Add item attributes
        carouselItem.className = `carousel-item carousel-item-${index + 1}`;
        carouselItem.src = item.src;
        carouselItem.setAttribute('loading', 'lazy');
        // Used to keep track of carousel items, infinite items possible in carousel however min 5 items required
        carouselItem.setAttribute('data-index', `${index + 1}`);
      });
    }

    this.carouselOptions.forEach((option) => {
      const btn = document.createElement('button');
      const axSpan = document.createElement('span');

      // Add accessibilty spans to button
      if(option === 'previous'){
        let content = `<div class="div-carousel-control-prev-icon">
                          <span class="carousel-control-prev-icon" aria-hidden="true">
                              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                          </span>
                          <span class="visually-hidden">Previous</span>
                      </div>`;
        //let parser = new DOMParser();
        //let html = parser.parseFromString(content, 'text/html');
        //btn.append(html);
        btn.innerHTML = btn.innerHTML + content;

        // Add button attributes
        btn.className = `carousel-control carousel-control-${option} carousel-control-prev`;
        btn.setAttribute('data-name', option);
      }
      else if(option === 'next'){
        let content = `<div class="div-carousel-control-prev-icon">
                          <span class="carousel-control-next-icon" aria-hidden="true">
                              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                          </span>
                          <span class="visually-hidden">Next</span>
                      </div>`;
        //let parser = new DOMParser();
        //let html = parser.parseFromString(content, 'text/html');
        //btn.append(html);
        btn.innerHTML = btn.innerHTML + content;

        // Add button attributes
        btn.className = `carousel-control carousel-control-${option}`;
        btn.setAttribute('data-name', option);
      }
      else{
        axSpan.innerText = option;
        axSpan.className = 'ax-hidden';
        btn.append(axSpan);

        // Add button attributes
        btn.className = `carousel-control carousel-control-${option}`;
        btn.setAttribute('data-name', option);
      }

      // Add carousel control options
      controls.append(btn);
    });

    // After rendering carousel to our DOM, setup carousel controls' event listeners
    this.setControls([...controls.children]);

    // Set container property
    this.carouselContainer = container;
  }

  setControls(controls) {
    controls.forEach(control => {
      control.onclick = (event) => {
        event.preventDefault();

        // Manage control actions, update our carousel data first then with a callback update our DOM
        this.controlManager(control.dataset.name);
      };
    });
  }

  controlManager(control) {
    if (control === 'previous') return this.previous();
    if (control === 'next') return this.next();
    if (control === 'add') return this.add();
    if (control === 'play') return this.play();

    return;
  }

  previous() {
    // Update order of items in data array to be shown in carousel
    this.carouselData.unshift(this.carouselData.pop());

    // Push the first item to the end of the array so that the previous item is front and center
    this.carouselInView.push(this.carouselInView.shift());

    // Update the css class for each carousel item in view
    this.carouselInView.forEach((item, index) => {
      this.carouselContainer.children[index].className = `carousel-item carousel-item-${item}`;
    });

    // Using the first 5 items in data array update content of carousel items in view
    this.carouselData.slice(0, 3).forEach((data, index) => {
      document.querySelector(`.carousel-item-${index + 1}`).src = data.src;
    });
  }

  next() {
    // Update order of items in data array to be shown in carousel
    this.carouselData.push(this.carouselData.shift());

    // Take the last item and add it to the beginning of the array so that the next item is front and center
    this.carouselInView.unshift(this.carouselInView.pop());

    // Update the css class for each carousel item in view
    this.carouselInView.forEach((item, index) => {
      this.carouselContainer.children[index].className = `carousel-item carousel-item-${item}`;
    });

    // Using the first 5 items in data array update content of carousel items in view
    this.carouselData.slice(0, 3).forEach((data, index) => {
      document.querySelector(`.carousel-item-${index + 1}`).src = data.src;
    });
  }

  add() {
    const newItem = {
      'id': '',
      'src': '',
    };
    const lastItem = this.carouselData.length;
    const lastIndex = this.carouselData.findIndex(item => item.id == lastItem);
    
    // Assign properties for new carousel item
    Object.assign(newItem, {
      id: `${lastItem + 1}`,
      src: `http://fakeimg.pl/300/?text=${lastItem + 1}`
    });

    // Then add it to the "last" item in our carouselData
    this.carouselData.splice(lastIndex + 1, 0, newItem);

    // Shift carousel to display new item
    this.next();
  }

  play() {
    const playBtn = document.querySelector('.carousel-control-play');
    const startPlaying = () => this.next();

    if (playBtn.classList.contains('playing')) {
      // Remove class to return to play button state/appearance
      playBtn.classList.remove('playing');

      // Remove setInterval
      clearInterval(this.carouselPlayState); 
      this.carouselPlayState = null; 
    } else {
      // Add class to change to pause button state/appearance
      playBtn.classList.add('playing');

      // First run initial next method
      this.next();

      // Use play state prop to store interval ID and run next method on a 1.5 second interval
      this.carouselPlayState = setInterval(startPlaying, 1500);
    };
  }

}