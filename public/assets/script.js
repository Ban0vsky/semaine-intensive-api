console.log("WE GOOD BROTHER")
const loginImage = document.querySelector('.loginImage')
const signupButton = document.querySelector('.signupButton')
const loginButton = document.querySelector('.loginButton')
const welcomeText = document.querySelector('.welcomeText')
const background = document.querySelector('.map')
const start = document.querySelector('.start')
const login = document.querySelector('.login')
const loginAction = document.querySelector('.loginAction')
const signupAction = document.querySelector('.signupAction')
const history = document.querySelector('.history')
const leaderboard = document.querySelector('.leaderboard')
const friendList = document.querySelector('.friendList')
const historyData = document.querySelector('.historyData')
const leaderboardData = document.querySelector('.leaderboardData')
const friendListData = document.querySelector('.friendListData')
const downBarInfos = document.querySelector('.downBarInfos')
let closeButton = document.querySelectorAll('.closeButton')
let lottieAnimation = document.querySelector('.lottieAnimation')


lottie.loadAnimation({
  container: lottieAnimation, // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'https://www.grossyoan.fr/beer.json'});


loginImage.addEventListener('click', () =>
{
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
      }
login.classList.add('visible')
signupButton.classList.add('visible')
loginButton.classList.add('visible')
welcomeText.classList.add('visible')
})



loginButton.addEventListener('click', () =>
{
let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
login.classList.add('visible')
loginAction.classList.add('visible')
})

history.addEventListener('click', () =>
{
let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
historyData.classList.add('visible')
downBarInfos.classList.add('visible')
})

leaderboard.addEventListener('click', () =>
{
let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
leaderboardData.classList.add('visible')
downBarInfos.classList.add('visible')
})

friendList.addEventListener('click', () =>
{
let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
friendListData.classList.add('visible')
downBarInfos.classList.add('visible')
})

signupButton.addEventListener('click', () =>
{
let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
login.classList.add('visible')
signupAction.classList.add('visible')
})

background.addEventListener('click', () =>
{
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
      }
})

for (var j = 0; j < closeButton.length; j++) {
closeButton[j].addEventListener('click', () =>
{
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
      }
})
}

