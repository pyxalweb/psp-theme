// ***********************************
//  Layout Scripts
// ***********************************
// Created by Alex Winter for LET Group
// Last Modified: 2023-03-06 by AW




// ***********************************
//  Imports
// ***********************************
import Glide, { Autoplay, Controls, Breakpoints, Swipe } from './glide.modular.esm.js' // glide.js




(function () {
// ***********************************
//  Get Common DOM elements
// ***********************************
const root = document.documentElement

/**** header ****/
const header = document.querySelector('#site-header')
const headerContainer = document.querySelector('#site-header .header__container')
const headerLogo = document.querySelectorAll('.header__logo path')
const headerMenu = document.querySelectorAll('.menu-hamburger line')

/**** masthead ****/
const mastheadContainer = document.querySelector('#site-masthead')

/**** nav traditional ****/
const navTraditional = document.querySelector('.nav-traditional');
const navTraditionalListItem = document.querySelectorAll('.nav-traditional > ul > li');
const navTraditionalLink = document.querySelectorAll('.nav-traditional > ul > li > a');
const navTraditionalSub = document.querySelectorAll('.nav-traditional .sub-menu');

/**** nav overlay ****/
const navOverlayToggle = document.querySelector('.overlay-nav-toggle')
const navOverlay = document.querySelector('.overlay-nav')
const navOverlayItem = document.querySelectorAll('.overlay-nav .nav-item')
const navOverlayLink = document.querySelectorAll('.overlay-nav .nav-link')




// ***********************************
//  Prevent CSS transitions from firing on page load
// ***********************************
// requirement: the 'body' element on each page must have a class of 'preload'
// requirement: the necessary CSS for the 'preload' class must exist
window.onload = (event) => {
    document.querySelector('body').classList.remove('preload')
}




// **************************************************
//  Navigation Menu Traditional
//  Accessible Dropdowns
// **************************************************
const accessibleDropdowns = () => {
    // remove 'is-focused' classes
    const hide = () => {
        navTraditionalLink.forEach((element) => {
            element.classList.remove('is-focused');
        });
        navTraditionalListItem.forEach((element) => {
            element.classList.remove('is-focused');
        });
        navTraditionalSub.forEach((element) => {
            element.classList.remove('is-focused');
        });
    };

    // nav link element is focused or clicked
    navTraditionalLink.forEach((element) => {
        element.addEventListener('focus', () => {
            // clear all elements
            hide();

            // set 'link' element
            element.classList.add('is-focused');

            // set 'list item' element
            let listItem = element.parentElement;
            if (listItem) {
                listItem.classList.add('is-focused');
            };

            // set 'nav-sub' element
            let navDropdown = element.nextElementSibling;
            if (navDropdown) {
                navDropdown.classList.add('is-focused');
            };
        });

        element.addEventListener('click', () => {
            hide();
        });
    });

    // remove 'is-focused' from all 'nav-sub' elements when the user has blurred the navigation menu and clicked another link in the document
    document.querySelectorAll('a').forEach(element => {
        element.addEventListener('focus', () => {
            if (!element.classList.contains('nav-link')) {
                hide();
            };
        });
    });

    // hide when 'Escape' key is pressed
    document.addEventListener('keydown', event => {
        navTraditionalLink.forEach((element) => {
            if ((element.classList.contains('is-focused')) && (event.keyCode == 27)) {
                hide();
            };
        });
    });

    // hide when user clicks anywhere outside of the navigation menu
    document.addEventListener('click', event => {
        navTraditionalLink.forEach((element) => {
            if (element.classList.contains('is-focused')) {
                let targetElement = event.target;

                do {
                    if (targetElement == navTraditional) {
                        return;
                    }
                    targetElement = targetElement.parentNode;
                } while (targetElement);

                hide();
            };
        });
    });
};
accessibleDropdowns();




// **************************************************
//  Navigation Menu Traditional
//  Dropdown Position
// **************************************************
const dropdownPosition = () => {
    const navHeight = headerContainer != null ? headerContainer.offsetHeight : 0 // get nav height
    root.style.setProperty('--nav-dropdown-top', navHeight + 'px')
}
dropdownPosition();





// ***********************************
//  Navigation Menu Overlay
//  Toggle
// ***********************************
const toggleNav = () => {
    // show
    const show = () => {
        navOverlay.classList.toggle('show')
    }

    // hide
    const hide = () => {
        navOverlay.classList.remove('show')
    }

    // set all link elements to tabindex="0"
    const enable = () => {
        navOverlayLink.forEach((element) => {
            element.setAttribute('tabindex', '0')
        })
    }

    // set all link elements to tabindex="-1"
    const disable = () => {
        navOverlayLink.forEach((element) => {
            element.setAttribute('tabindex', '-1')
        })
    }
    disable() // run this on page load

    // focus the overlay 
    const focusOverlay = () => {
        navOverlay.setAttribute('tabindex', '0')
        navOverlay.focus()
        navOverlayToggle.classList.add('overlay-nav--visible') // mimics the toggle's hover/focus CSS
    }

    // focus the toggle 
    const focusToggle = () => {
        navOverlay.setAttribute('tabindex', '-1')
        navOverlayToggle.focus()
        navOverlayToggle.classList.remove('overlay-nav--visible')
    }

    // all functions to 'open' the menu
    const open = () => {
        show()
        enable()
        focusOverlay()
    }

    // all functions to 'close' the menu
    const close = () => {
        hide()
        disable()
        focusToggle()
    }

    // toggle is clicked
    navOverlayToggle.addEventListener('click', (event) => {
        if (!navOverlay.classList.contains('show')) {
            open()
        } else {
            close()
        }
        event.preventDefault()
    })

    // hide when 'Escape' key is pressed
    document.addEventListener('keydown', (event) => {
        if ((navOverlay.classList.contains('show')) && (event.keyCode == 27)) {
            close()
        }
    })

    // hide when user clicks anywhere outside of the overlay
    document.addEventListener('click', (event) => {
        if (navOverlay.classList.contains('show')) {
            let targetElement = event.target

            do {
                if (targetElement == navOverlay || targetElement == navOverlayToggle) {
                    return
                }
                targetElement = targetElement.parentNode
            } while (targetElement)

            close()
        }
    })

    // hide when a user scrolls up/down
    /*
    document.addEventListener('scroll', () => {
        close()
    })
    */
}
toggleNav()




// ***********************************
//  Navigation Menu Overlay
//  Dropdowns
// ***********************************
const overlayDropdowns = () => {
    // apply 'has-dropdown' classes and create 'dropdown-toggle' elements
    navOverlayItem.forEach((element) => {
        const navOverlaySub = element.querySelector('.sub-menu')
        const navOverlayLink = element.querySelector('.nav-link')

        if (navOverlaySub !== null) {
            element.classList.add('has-dropdown')

            navOverlayLink.insertAdjacentHTML('beforeend', '<span class="dropdown-toggle" aria-label="Expand or Collapse Dropdown" role="button" tabindex="-1"></span>')
        }
    })

    // toggle is clicked
    navOverlay.querySelectorAll('.has-dropdown').forEach((element) => {
        const dropdownToggle = element.querySelector('.dropdown-toggle');
        const navOverlaySub = element.querySelector('.sub-menu');

        if (dropdownToggle) {
            // note:  do not use arrow functions here!
            //        they don't allow the 'this' keyword

            // click
            dropdownToggle.addEventListener('click', function(event) {
                this.classList.toggle('show');
                navOverlaySub.classList.toggle('show');
                event.preventDefault();
            });

            // 'return' key (accessibility)
            dropdownToggle.addEventListener('keydown', function(event) {
                if (event.keyCode == 13) {
                    this.classList.toggle('show');
                    navOverlaySub.classList.toggle('show');
                    event.preventDefault();
                };
            });
        };
    });

    // set tabindex to 0 when overlay is displayed and -1 when hidden
    navOverlayToggle.addEventListener('click', (element) => {
        const dropdownToggle = document.querySelectorAll('.dropdown-toggle')

        if (navOverlay.classList.contains('show')) {
            dropdownToggle.forEach((element) => {
                element.setAttribute('tabindex', '0')
            })
        }
        else {
            dropdownToggle.forEach((element) => {
                element.setAttribute('tabindex', '-1')
            })
        }
    })
}
overlayDropdowns()




// ***********************************
// Masthead Height
// ***********************************
const setMastheadHeight = () => {
    // ternary operators
    // if the element is null (undefined and doesnt exist in DOM) then set its offsetHeight value to 0
    const headerHeight = header != null ? header.offsetHeight : 0 // get header height

    // get viewport height
    const viewportHeight = window.innerHeight;

    // calculate masthead height
    const mastheadHeight = viewportHeight - headerHeight

    // apply masthead height value to masthead element
    
        root.style.setProperty('--masthead-height', mastheadHeight + 'px')
        root.style.setProperty('--header-height', headerHeight + 'px')
    
}
setMastheadHeight()




// ***********************************
//  Thumb CTA
// ***********************************
const thumbCTA = () => {
    const element = document.querySelector('.thumb-cta')

    if (element == null) {
        return
    }

    // display after scrolling beyond masthead
    if (mastheadContainer) {
        setTimeout(function() {
            window.addEventListener('scroll', () => {
                const mastheadHeight = mastheadContainer.offsetHeight

                if (window.scrollY > mastheadHeight) {
                    element.classList.add('scrolled')
                    // console.log('more')
                } else {
                    element.classList.remove('scrolled')
                    // console.log('less')
                }
            })
        }, 1000)
    }
    // if there's no masthead element, display after scrolling down x percent of page
    else {
        const scrollPercentage = 0.25
        let scrollTrigger = true

        window.onscroll = function() {
            if (scrollTrigger && window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight) > scrollPercentage) {
                element.classList.add('scrolled')
                scrollTrigger = false
            }
        };
    }
}
thumbCTA();



// ***********************************
//  scroll-padding-top CSS
// ***********************************
// Note! You must apply the following CSS in your layout.scss file
// '200px' can change to whatever fallback (in case JS is disabled) you think is best

// html {
//   scroll-behavior: smooth
//   scroll-padding-top: var(--scroll-padding, 200px)
// }

const scrollPaddingTop = () => {
    const headerHeight = header.offsetHeight
    root.style.setProperty('--scroll-padding', headerHeight + 0 + 'px')
}
scrollPaddingTop()




// ***********************************
//  glide.js
// ***********************************
const glideElement = document.querySelector('.glide__slide')

if (glideElement) {
    // content slider
    document.querySelectorAll('.content-slider .glide').forEach((glide) => {
        let glideAutoplay = glide.getAttribute('data-autoplay')
        if (glideAutoplay == null) {
            glideAutoplay = 5000
        }

        let slideshow = new Glide(glide, {
            type: 'slider', // 'slideshow'
            bound: true,
            perView: 1,
            autoplay: glideAutoplay,
            swipeThreshold: 40
        })

        // generate pagination bullet for each slide
        if (glide.querySelector('.glide__bullets') !== null) {
            let glideIndex = glide.querySelectorAll('.glide__slide').length
            let glideCount = 0;
            while (glideCount < glideIndex) {
                const bullet = document.createElement('button')
                bullet.classList.add('glide__bullet')
                bullet.setAttribute("data-glide-dir", '=' + glideCount)
                const glideBullets = glide.querySelector('.glide__bullets')
                glideBullets.appendChild(bullet)
                glideCount++
            }
        }

        slideshow.mount({ Autoplay, Controls, Swipe })
    })
}






// ***********************************
//  GSAP Animations
// ***********************************
// Register the ScrollTrigger plug-in
gsap.registerPlugin(ScrollTrigger)




// ***********************************
//  GSAP - Scroll - Refresh All ScrollTriggers 
// ***********************************
// * Call this function within your scrollTrigger timeline to recalculate the positioning of all of the ScrollTriggers on the page.
// * This is useful on for the "Site Header" for example because it is a fixed element that changes heght after scrolling down below the fold, which breaks the placement of all other ScrollTriggers on the page.
// * This will fire after X miliseconds, hopefully after the animations have finished. Change the amount of time as needed.
const refreshScrollTrigger = () => {
    setTimeout(() => {
        ScrollTrigger.refresh() // https://greensock.com/docs/v3/Plugins/ScrollTrigger/static.refresh()
        // console.log('setTimeout has elapsed')
    }, 2000)
    // console.log('toggled inactive or active')
}




// ***********************************
//  GSAP - Scroll - Fade In (Selected element's children)
// ***********************************
// Class:       animate-children-scroll-fade-in
// Description: This appends the 'animate-fade-in-scroll' class and its data attributes to all respective child elements
// data-delay    = number (float)      - default is 0
// data-duration = number (float)      - default is 1
// data-trigger  = top, center, bottom - default is top
// data-scroller = top, center, bottom - default is bottom
// data-markers  = false, true         - default is false
let animateChildrenScrollFadeIn = document.querySelectorAll('.animate-children-scroll-fade-in')
animateChildrenScrollFadeIn.forEach((element) => {
    element.querySelectorAll(':scope > *').forEach((childElement) => {
        childElement.classList.add('animate-scroll-fade-in')

        if (element.dataset.delay) {
            childElement.dataset.delay = parseFloat(element.dataset.delay)
        }

        if (element.dataset.duration) {
            childElement.dataset.duration = parseFloat(element.dataset.duration)
        }

        if (element.dataset.trigger) {
            childElement.dataset.trigger = element.dataset.trigger
        }

        if (element.dataset.scroller) {
            childElement.dataset.scroller = element.dataset.scroller
        }

        if (element.dataset.markers) {
            childElement.dataset.markers = element.dataset.markers
        }
    })
})



// ***********************************
//  GSAP - Scroll - Fade In (Selected element only)
// ***********************************
// Class:       animate-scroll-fade-in
// Description: Fade in to opacity 1 - NOTE: You must set the element's CSS to be 'opacity: 0;'
// data-delay    = number (float)      - default is 0
// data-duration = number (float)      - default is 1
// data-trigger  = top, center, bottom - default is top
// data-scroller = top, center, bottom - default is bottom
// data-markers  = false, true         - default is false
let animateScrollFadeIn = gsap.utils.toArray('.animate-scroll-fade-in')
animateScrollFadeIn.forEach((element) => {
    let dataDelay = 0
    if (element.dataset.delay) {
        dataDelay = parseFloat(element.dataset.delay)
    }

    let dataDuration = 1
    if (element.dataset.duration) {
        dataDuration = parseFloat(element.dataset.duration)
    }

    let dataTrigger = 'top'
    if (element.dataset.trigger) {
        dataTrigger = element.dataset.trigger
    }

    let dataScroller = 'bottom'
    if (element.dataset.scroller) {
        dataScroller = element.dataset.scroller
    }

    let dataMarkers = false
    if (element.dataset.markers) {
        dataMarkers = element.dataset.markers
    }

    let timeline = gsap.timeline({
        scrollTrigger: {
            trigger: element,
            start: dataTrigger + " " + dataScroller,
            markers: dataMarkers,
            toggleActions: "play none none none",
            toggleClass: "visible"
        }
    })

    timeline.to(element, {
        opacity: 1,
        delay: dataDelay,
        duration: dataDuration
    })
})




// ***********************************
//  GSAP - Scroll - Slide Horizontal
// ***********************************
// Class:       animate-scroll-slide-horizontal
// Description: Slide in from left or right
// data-delay    = number (float)      - default is 0
// data-duration = number (float)      - default is 1
// data-trigger  = top, center, bottom - default is top
// data-scroller = top, center, bottom - default is bottom
// data-markers  = false, true         - default is false
// data-position = px, em, %, vh, etc  - default is "100px"
let animateScrollSlideHorizontal = gsap.utils.toArray('.animate-scroll-slide-horizontal')
animateScrollSlideHorizontal.forEach((element) => {
    let dataDelay = 0
    if (element.dataset.delay) {
        dataDelay = parseFloat(element.dataset.delay)
    }

    let dataDuration = 1
    if (element.dataset.duration) {
        dataDuration = parseFloat(element.dataset.duration)
    }

    let dataTrigger = 'top'
    if (element.dataset.trigger) {
        dataTrigger = element.dataset.trigger
    }

    let dataScroller = 'bottom'
    if (element.dataset.scroller) {
        dataScroller = element.dataset.scroller
    }

    let dataMarkers = false
    if (element.dataset.markers) {
        dataMarkers = element.dataset.markers
    }

    let dataPosition = "100px"
    if (element.dataset.position) {
        dataPosition = parseFloat(element.dataset.position)
    }

    let timeline = gsap.timeline({
        scrollTrigger: {
            trigger: element,
            start: dataTrigger + " " + dataScroller,
            markers: dataMarkers,
            toggleActions: "play none none none",
            toggleClass: "scrolled"
        }
    })

    timeline.from(element, {
        x: dataPosition,
        opacity: 0,
        delay: dataDelay,
        duration: dataDuration
    })
})




// ***********************************
//  GSAP - Scroll - Slide Vertical
// ***********************************
// Class:       animate-scroll-slide-vertical
// Description: Slide in from top or bottom
// data-delay    = number (float)      - default is 0
// data-duration = number (float)      - default is 1
// data-trigger  = top, center, bottom - default is top
// data-scroller = top, center, bottom - default is bottom
// data-markers  = false, true         - default is false
// data-position = px, em, %, vh, etc  - default is "100px"
/*
let animateScrollSlideVertical = gsap.utils.toArray('.animate-scroll-slide-vertical')
animateScrollSlideVertical.forEach((element) => {
    let dataDelay = 0
    if (element.dataset.delay) {
        dataDelay = parseFloat(element.dataset.delay)
    }

    let dataDuration = 1
    if (element.dataset.duration) {
        dataDuration = parseFloat(element.dataset.duration)
    }

    let dataTrigger = 'top'
    if (element.dataset.trigger) {
        dataTrigger = element.dataset.trigger
    }

    let dataScroller = 'bottom'
    if (element.dataset.scroller) {
        dataScroller = element.dataset.scroller
    }

    let dataMarkers = false
    if (element.dataset.markers) {
        dataMarkers = element.dataset.markers
    }

    let dataPosition = "100px"
    if (element.dataset.position) {
        dataPosition = parseFloat(element.dataset.position)
    }

    let timeline = gsap.timeline({
        scrollTrigger: {
            trigger: element,
            start: dataTrigger + " " + dataScroller,
            markers: dataMarkers,
            toggleActions: "play none none none"
        }
    })

    timeline.from(element, {
        y: dataPosition,
        opacity: 0,
        delay: dataDelay,
        duration: dataDuration
    })
})
*/




// ***********************************
//  GSAP - Scroll - Site Header
// ***********************************
// let timeline = gsap.timeline({
//     scrollTrigger: {
//         trigger: 'body',
//         start: "10px top",
//         toggleActions: "play none none reverse",
//         // markers: true,
//     }
// })
// timeline.to(headerContainer, { backgroundColor: 'white' })
// .to(headerLogo, { fill: 'black' }, '<')
// .to(headerMenu, { stroke: 'black' }, '<')
// .to(header, { borderBottomColor: 'rgb(0 0 0 0.15)' }, '<')




// ***********************************
//  Extra Code
//  Add code for THIS SPECIFIC WEBSITE ONLY here:
//  Please delete as needed!
// ***********************************

// ...




// ***********************************
//  Link List - Reduce
// ***********************************
const linkListReduce = () => {
    // get all '.expandable-list' elements
    const linkLists = document.querySelectorAll('.expandable-list')

    // iterate over each '.expandable-list' element
    linkLists.forEach((linkList) => {
        // get the number of items to display
        const dataReduce = linkList.dataset.reduce

        // get all list item elements
        const listItems = linkList.querySelectorAll('li')

        // hide list items that exceed the display limit
        listItems.forEach((item, index) => {
            if (index >= dataReduce) {
                item.classList.add('expandable-list__hide')
            }
        })

        // get all '.expandable-list__more' elements
        const moreButtons = linkList.querySelectorAll('.expandable-list__more')

        // add click event listener to each '.expandable-list__more' element
        moreButtons.forEach((button) => {
            button.addEventListener('click', () => {
                // show or hide additional list items depending on their current visibility
                listItems.forEach((item, index) => {
                    if (index >= dataReduce) {
                        item.classList.toggle('expandable-list__hide')
                    }
                })

                if (button.innerHTML === 'View More') {
                    button.innerHTML = 'View Less'
                } else {
                    button.innerHTML = 'View More'
                }

                // smooth scroll to the top of the expandable-list element, accounting for the fixed header height
                const headerHeight = parseInt(getComputedStyle(document.querySelector('.header')).getPropertyValue('--header-height')) * 16 // the '.header' height uses the 'em' unit which doesn't work when we use parseInt, so we must multiply by 16 (1em = 16px)
                const linkListTop = linkList.getBoundingClientRect().top + window.pageYOffset - headerHeight - 32 // subtract a little extra so it isn't flush to the top
                window.scrollTo({ top: linkListTop, behavior: 'smooth' })
            })
        })
    })
}
linkListReduce()




// ***********************************
//  Display a Random Quote
// ***********************************
const randomQuote = () => {
    const figures = document.querySelectorAll('.footer__quotes figure')
    const randomFigureIndex = Math.floor(Math.random() * figures.length)
    figures[randomFigureIndex].classList.add('quote__visible')
}
randomQuote()




// ***********************************
//  Empty Nav Links
// ***********************************
const emptyNavLinks = () => {
    const links = document.querySelectorAll('.nav-link')
    const linkAttribute = '#'

    for (let i = 0; i < links.length; i++) {
        const link = links[i]

        link.addEventListener('click', (event) => {
            if (link.getAttribute('href') === linkAttribute) {
                event.preventDefault()
            }
        })
    }
}
emptyNavLinks()




})() // end IIFE