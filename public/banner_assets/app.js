const controller = new ScrollMagic.Controller();
//register the plugin (just once)

const FistTween = new TimelineLite();

FistTween.add(
  TweenLite.to('#textanimation', 1, {
    y: 0,
    scale: 1,
    borderRadius: 0,
    ease: Power1.easeInOut,
  })
)
  .add(
    TweenLite.to('.text-with', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
      onStart: animateOffWolf,
    })
  )
  .add(
    TweenLite.to('.text-a', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.text-coe', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.text-rcion', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.text-of', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('#textanimation', 1, {
      y: -250,
      scale: 0.9,
      borderRadius: 50,
      ease: Power1.easeInOut,
    })
  );

const FirstScene = new ScrollMagic.Scene({
  triggerElement: '#textanimation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(FistTween)
  //.addIndicators()
  .setPin('#textanimation')
  .addTo(controller);

const SecondTween = new TimelineLite();

SecondTween.add(
  TweenLite.to('#designanimation', 1, {
    x: 0,
    scale: 1,
    borderRadius: 0,
    ease: Power1.easeInOut,
  })
)
  .add(
    TweenLite.to('.second-text-des', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.second-text-si', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.second-text-gn', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.tree-image', 1, {
      width: '100%',
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('#designanimation', 1, {
      x: -250,
      scale: 0.9,
      borderRadius: 50,
      ease: Power1.easeInOut,
    })
  );

const SecondScene = new ScrollMagic.Scene({
  triggerElement: '#designanimation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(SecondTween)
  //.addIndicators()
  .setPin('#designanimation')
  .addTo(controller);

const ThirdTween = new TimelineLite();

ThirdTween.add(
  TweenLite.to('#technologyanimation', 1, {
    x: 0,
    scale: 1,
    borderRadius: 0,
    ease: Power1.easeInOut,
  })
)
  .add(
    TweenLite.to('.third-text-tech', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.third-text-nology', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )

  .add(
    TweenLite.to('.technology-image', 1, {
      width: '100%',
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('#technologyanimation', 1, {
      x: 250,
      scale: 0.9,
      borderRadius: 50,
      ease: Power1.easeInOut,
    })
  );

const ThirdScene = new ScrollMagic.Scene({
  triggerElement: '#technologyanimation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(ThirdTween)
  //.addIndicators()
  .setPin('#technologyanimation')
  .addTo(controller);

// fourth
const FourthTween = new TimelineLite();

FourthTween.add(
  TweenLite.to('#excellanceanimation', 1, {
    y: 0,
    scale: 1,
    borderRadius: 0,
    ease: Power1.easeInOut,
  })
)

  .add(
    TweenLite.to('.four-text-excel', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.four-text-lence', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )

  .add(
    TweenLite.to('.diamond-image', 1, {
      width: '100%',
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('#excellanceanimation', 1, {
      y: -250,
      scale: 0.9,
      borderRadius: 50,
      ease: Power1.easeInOut,
    })
  );

const FourthScene = new ScrollMagic.Scene({
  triggerElement: '#excellanceanimation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(FourthTween)
  //.addIndicators()
  .setPin('#excellanceanimation')
  .addTo(controller);

// Wolf Path

let width = window.innerWidth;
let widthminused = width - 200;
const wolfPath = {
  curviness: 0,
  autoRotate: false,
  values: [
    { x: -200, y: 150 },
    { x: -800, y: -150 },
    { x: -1000, y: 200 },
    { x: -widthminused, y: 200 },
  ],
};
const WolfPathAnim = new TimelineLite();

WolfPathAnim.add(
  TweenLite.to('#aboutanimation', 1, {
    x: 0,
    scale: 1,
    borderRadius: 0,
    ease: Power1.easeInOut,
  })
)
  .add(
    TweenLite.to('.wolf-hang', 1, {
      onStart: aboutWolfStart,
    })
  )
  .add(
    TweenLite.to('.fifth-text-about', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.fifth-text-us', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('#aboutanimation', 1, {
      x: 250,
      scale: 0.9,
      borderRadius: 50,
      ease: Power1.easeInOut,
    })
  );

const Wolfscene = new ScrollMagic.Scene({
  triggerElement: '#aboutanimation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(WolfPathAnim)
  //.addIndicators()
  .setPin('#aboutanimation')
  .addTo(controller);

// About Content animation

const AboutContentTween = new TimelineLite();

AboutContentTween.add(
  TweenLite.to('#aboutcontentanimation', 1, {
    x: 0,
    scale: 1,
    borderRadius: 0,
    ease: Power1.easeInOut,
    onStart: aboutWolfStop,
  })
)
  .add(
    TweenLite.to('.about-image', 1, {
      autoAlpha: 1,
      // width: '100%',
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.about-content1', 1, {
      autoAlpha: 1,
      display: 'block',
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.about-content1', 1, {
      autoAlpha: 0,
      display: 'none',
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.about-content2', 1, {
      autoAlpha: 1,
      display: 'block',
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('#aboutcontentanimation', 1, {
      x: 250,
      scale: 0.9,
      borderRadius: 50,
      ease: Power1.easeInOut,
    })
  );

const AboutContentScene = new ScrollMagic.Scene({
  triggerElement: '#aboutcontentanimation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(AboutContentTween)
  //.addIndicators()
  .setPin('#aboutcontentanimation')
  .addTo(controller);

// Services animation

const ServicesMainTween = new TimelineLite();

ServicesMainTween.add(
  TweenLite.to('#oursevicesanimation', 1, {
    y: 0,
    scale: 1,
    borderRadius: 0,
    ease: Power1.easeInOut,
  })
)
  .add(
    TweenLite.to('.services-image', 1, {
      autoAlpha: 1,
      // width: '100%',
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.services-text-our', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.services-text-services', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('#oursevicesanimation', 1, {
      y: -250,
      scale: 0.9,
      borderRadius: 50,
      ease: Power1.easeInOut,
    })
  );

const ServicesMainScene = new ScrollMagic.Scene({
  triggerElement: '#oursevicesanimation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(ServicesMainTween)
  //.addIndicators()
  .setPin('#oursevicesanimation')
  .addTo(controller);

// Digital Transformation Animation

const DigitalTransformationAnimation = new TimelineLite();

DigitalTransformationAnimation.add(
  TweenLite.to('.digitaltransformation-image', 1, {
    autoAlpha: 1,
    // width: '100%',
    ease: Power1.easeInOut,
  })
)
  .add(
    TweenLite.to('.servicesdigitaltransformation-text-digital', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.servicesdigitaltransformation-text-transformation', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  );

const DigitalTransformationScene = new ScrollMagic.Scene({
  triggerElement: '#servicesdigitaltransformation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(DigitalTransformationAnimation)
  //.addIndicators()
  .setPin('#servicesdigitaltransformation')
  .addTo(controller);

// Product Development Animation

const ProductDevelopmentAnimation = new TimelineLite();

ProductDevelopmentAnimation.add(
  TweenLite.to('.productdevelopment-text-product', 1, {
    autoAlpha: 1,
    ease: Power1.easeInOut,
  })
)
  .add(
    TweenLite.to('.productdevelopment-text-development', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.productdevelopment-image', 1, {
      autoAlpha: 1,
      // width: '100%',
      ease: Power1.easeInOut,
    })
  );

const ProductDevelopmentScene = new ScrollMagic.Scene({
  triggerElement: '#productdevelopmentanimation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(ProductDevelopmentAnimation)
  //.addIndicators()
  .setPin('#productdevelopmentanimation')
  .addTo(controller);

// Digital Process Animation

const DigitalProcessAnimation = new TimelineLite();

DigitalProcessAnimation.add(
  TweenLite.to('.digitalprocessautomation-image', 1, {
    autoAlpha: 1,
    // width: '100%',
    ease: Power1.easeInOut,
  })
)
  .add(
    TweenLite.to('.digitalprocessautomation-text-digital', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.digitalprocessautomation-text-processautomation', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  );

const DigitalProcessScene = new ScrollMagic.Scene({
  triggerElement: '#digitalprocessautomationanimation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(DigitalProcessAnimation)
  //.addIndicators()
  .setPin('#digitalprocessautomationanimation')
  .addTo(controller);

// Product Development Animation

const BrandingAnimation = new TimelineLite();

BrandingAnimation.add(
  TweenLite.to('.branding-text-branding', 1, {
    autoAlpha: 1,
    ease: Power1.easeInOut,
  })
)
  .add(
    TweenLite.to('.branding-text-uiux', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('.branding-image', 1, {
      autoAlpha: 1,
      // width: '100%',
      ease: Power1.easeInOut,
    })
  );

const BrandingScene = new ScrollMagic.Scene({
  triggerElement: '#brandinganimation',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(BrandingAnimation)
  //.addIndicators()
  .setPin('#brandinganimation')
  .addTo(controller);

// We Build Cool Stuff

const WeBuildTextTween = new TimelineLite();

WeBuildTextTween.add(
  TweenLite.to('#wolf-anim', 1, {
    autoAlpha: 1,
    ease: Power1.easeInOut,
    onStart: onStart,
  })
)
  .add(
    TweenLite.to(
      '.scrolldown-text',
      0.5,
      {
        autoAlpha: 0,
        ease: Power1.easeInOut,
      },
      '-=2'
    )
  )
  .add(
    TweenLite.to('#webuildtext', 1, {
      autoAlpha: 1,
      top: '50%',
      ease: Power1.easeInOut,
    })
  )
  .add(
    TweenLite.to('#webuildtext', 1, {
      autoAlpha: 1,
      ease: Power1.easeInOut,
    })
  );

const WeBuildTextAnim = new ScrollMagic.Scene({
  triggerElement: '#particlesbanner',
  duration: 1000,
  triggerHook: 0,
})
  .setTween(WeBuildTextTween)
  //.addIndicators()
  .setPin('#particlesbanner')
  .addTo(controller);

function onStart() {
  const player = document.querySelector('#wolf-anim');
  player.play();
}
function aboutWolfStart() {
  const player = document.querySelector('#wolfanimationabout');
  player.play();
}
function aboutWolfStop() {
  const player = document.querySelector('#wolfanimationabout');
  player.stop();
}
function animateOffWolf() {
  const player = document.querySelector('#wolf-anim');
  player.stop();
}
