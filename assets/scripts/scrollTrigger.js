import gsap from 'gsap'
import ScrollTrigger from 'gsap/ScrollTrigger'

console.log('Running scrollTrigger.js')

// register Plugin
gsap.registerPlugin(ScrollTrigger)

console.log(document.querySelectorAll('.fade-in'))

// add Eventlistener refresh Scrolltrigger on resize
document.addEventListener('resize', () => {
  ScrollTrigger.refresh()
})

gsap.set('.fade-in', { opacity: 0 })
gsap.set('.move-in', { y: 150 })

ScrollTrigger.batch('.fade-in', {
  onEnter: (elements) => gsap.to(elements, { opacity: 1, stagger: 0.15, duration: 1 }),
  start: '20px bottom',
  end: 'top top'
})
ScrollTrigger.batch('.move-in', {
  onEnter: (elements) => gsap.to(elements, { y: 0, stagger: 0.15, duration: 0.5 }),
  start: '20px bottom',
  end: 'top top'
})

const parallaxBoxes = gsap.utils.toArray('.parallax')
parallaxBoxes.forEach((box, i) => {
  // Set up your animation
  const anim = gsap.to(box, { y: '-20vh', scaleX: 1.1, scaleY: 1.1, ease: 'none' })
  // Use callbacks to control the state of the animation
  ScrollTrigger.create({
    trigger: box,
    animation: anim,
    scrub: 0.1,
    start: '-15vh bottom',
    end: 'top top',
    ease: 'none'
  })
})
