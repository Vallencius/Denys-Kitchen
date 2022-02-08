gsap.registerPlugin(ScrollTrigger);
let speed = 100;

// Scene 1
// First Frame
let scene_1_1 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_1_1,
  trigger: "#home",
  start: "top top",
  end: "+=500",
  scrub: 3
});
scene_1_1.to("#scene-1", { padding: '0px 0px 0px 0px' }, 0);
// Second Frame
let scene_1_2 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_1_2,
  trigger: "#home",
  start: "top top",
  end: "+=500",
  scrub: 3
});
scene_1_2.to("#lower-lava", { top: '0vh' }, 0);
// Third Frame
let scene_1_3 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_1_3,
  trigger: "#home",
  start: "5% top",
  end: "+=500",
  scrub: 3
});
scene_1_3.to("#lava-flow", { top: '60vh' }, 0);
// Fourth Frame
let scene_1_4 = gsap.timeline();
ScrollTrigger.create({
  animation:  scene_1_4,
  trigger: "#background-1",
  start: "20% top",
  end: "+=500",
  scrub: 3
});
scene_1_4.to(".oprec-text", { top: '50vh' }, 0);
// Fifth Frame
let scene_1_5 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_1_5,
  trigger: "#background-1",
  start: "30% top",
  end: "+=500",
  scrub: 3
});
scene_1_5.to("#scene-1", { backgroundColor: 'black' }, 0);
scene_1_5.to("#lower-lava", { opacity: '0.4' }, 0);
scene_1_5.to("#upper-lava", { opacity: '0.2' }, 0);
// Sixth Frame
let scene_1_6 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_1_6,
  trigger: "#background-1",
  start: "50% top",
  end: "+=1000",
  scrub: 1
});
scene_1_6.to(".oprec-text", { opacity: '0', zIndex:'-1' }, 0);
scene_1_6.to("#lava-flow", { opacity: '0' }, 0);
scene_1_6.to("#lava-flow-2", { top: '-100vh' }, 0);

// Scene 2
// First Frame
let scene_2_1 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_2_1,
  trigger: "#scene-2",
  start: "-20% top",
  end: "+=500",
  scrub: 3
});
scene_2_1.to(".cloud-left", { left: '-20vh' }, 0);
scene_2_1.to(".cloud-right", { right: '-20vh' }, 0);
// Second Frame
let scene_2_2 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_2_2,
  trigger: "#scene-2",
  start: "5% top",
  end: "+=1000",
  scrub: 3
});
scene_2_2.to(".cloud-left", { top: '-110vh' }, 0);
scene_2_2.to(".cloud-right", { top: '-110vh' }, 0);
// Third Frame
let scene_2_3 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_2_3,
  trigger: "#scene-2",
  start: "5% top",
  end: "+=500",
  scrub: 3
});
// scene_2_3.to("#lava-flow-2", { opacity: '0' }, 0);
scene_2_3.to("#mountain-left", { top: '10vh' }, 0);
scene_2_3.to("#mountain-right", { top: '10vh' }, 0);
scene_2_3.to(".cloud-left", { opacity: '0' }, 0);
scene_2_3.to(".cloud-right", { opacity: '0' }, 0);
if($( window ).width() <= 996){
  scene_2_3.to("#foreground", { top: '40vh' }, 0);
  scene_2_3.to("#foreground-2", { top: '40vh' }, 0);
}
else if($( window ).width() <= 1300){
  scene_2_3.to("#foreground", { top: '30vh' }, 0);
  scene_2_3.to("#foreground-2", { top: '30vh' }, 0);
}
else{
  scene_2_3.to("#foreground", { top: '10vh' }, 0);
  scene_2_3.to("#foreground-2", { top: '10vh' }, 0);
};
// Fourth Frame
let scene_2_4 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_2_4,
  trigger: "#scene-2",
  start: "15% top",
  end: "+=500",
  scrub: 3
});
scene_2_4.to(".umn-eco-logo", { top: '30%' }, 0);
if($( window ).width() <= 996){
  scene_2_4.to(".butterfly", { top: '41%', right: '0%' }, 0);
  scene_2_4.to(".bird", { top: '34%', left: '-5%' }, 0);
}
else{
  scene_2_4.to(".butterfly", { top: '25%' }, 0);
  scene_2_4.to(".bird", { top: '5%', left: '15%' }, 0);
};
// Fifth Frame
let scene_2_5 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_2_5,
  trigger: "#scene-3",
  start: "top bottom",
  end: "+=500",
  scrub: 0.5
});
scene_2_5.to("#foreground", { top: '-100vh' }, 0);
// Sixth Frame
let scene_2_6 = gsap.timeline();
ScrollTrigger.create({
  animation: scene_2_6,
  trigger: "#scene-3",
  start: "top top",
  end: "+=100",
  scrub: 3
});
scene_2_6.to(".navbar", { backgroundColor: '#1B3627' }, 0);
scene_2_6.to(".scroll-icon", { display: 'none' }, 0);
if($( window ).width() <= 767){
  scene_2_6.to(".navigation-toggle-span", { display: 'block' }, 0);
  scene_2_6.to(".navigation-toggle-span", { opacity: '1' }, 0);
  scene_2_6.to(".toggler-container", { display: 'block' }, 0);
  scene_2_6.to(".toggler-container", { opacity: '1' }, 0);
  scene_2_6.to(".hashtag", { display: 'block' }, 0);
  scene_2_6.to(".navbar-blue-logo", { display: 'block' }, 0);
  scene_2_6.to(".hashtag", { opacity: '1' }, 0);
  scene_2_6.to(".navbar-blue-logo", { opacity: '1' }, 0);
}
// Z-index
let scene_2_z = gsap.timeline();
ScrollTrigger.create({
  animation: scene_2_z,
  trigger: "#scene-2",
  start: "-25% top",
  end: "+=500",
  scrub: 2
});
scene_2_z.to(".scene-2-img", { zIndex: '2' }, 0);