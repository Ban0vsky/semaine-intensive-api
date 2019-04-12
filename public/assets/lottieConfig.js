let lottieAnimation = document.querySelector('.lottieJson')
let lottieContainer = document.querySelector('.lottieAnimation')

if(!document.querySelector('.noMoreAnimation'))
{
  setTimeout(function() 
  {
    lottieContainer.style.opacity = "0"
    setTimeout(function() {
      lottieContainer.style.display = "none"
    }, 600);
  }, 4000);

  lottie.loadAnimation(
  {
    container: lottieAnimation, 
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: './assets/beer.json'
  });
}

