console.log("WE GOOD BROTHER")
const loginImage = document.querySelector('.loginImage')
const background = document.querySelector('.map')
const login = document.querySelector('.login')
const history = document.querySelector('.history')
const leaderboard = document.querySelector('.leaderboard')
const friendList = document.querySelector('.friendList')
const historyData = document.querySelector('.historyData')
const leaderboardData = document.querySelector('.leaderboardData')
const friendListData = document.querySelector('.friendListData')
const downBarInfos = document.querySelector('.downBarInfos')
const launch = document.querySelector('.launch')
const progressBar = document.querySelector('.progressBar')
let closeButton = document.querySelectorAll('.closeButton')

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

launch.addEventListener('click', () =>
{
let visible = document.querySelectorAll('.visible')
for (var i = 0; i < visible.length; i++) {
    visible[i].classList.remove('visible')
    console.log("yes")
  }
progressBar.classList.add('visible')
})