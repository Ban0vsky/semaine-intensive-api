const loginImage = document.querySelector('.loginImage')
const background = document.querySelector('.map')
const start = document.querySelector('.start')
const history = document.querySelector('.history')
const leaderboard = document.querySelector('.leaderboard')
const friendList = document.querySelector('.friendList')
const historyData = document.querySelector('.historyData')
const leaderboardData = document.querySelector('.leaderboardData')
const friendListData = document.querySelector('.friendListData')
const downBarInfos = document.querySelector('.downBarInfos')
let closeButton = document.querySelectorAll('.closeButton')
let lottieAnimation = document.querySelector('.lottieJson')
let lottieContainer = document.querySelector('.lottieAnimation')
const profilePage = document.querySelector('.profilePage')
const profileData = document.querySelector('.profileData')
const killAccount = document.querySelector('.killAccount')
const killAccountData = document.querySelector('.killAccountData')
const deleteAccountButton = document.querySelector('.deleteAccountButton')
const deleteAccountValidation = document.querySelector('.quitValidation')
const addFriendButton = document.querySelector('.addFriendButton')
const addFriendData = document.querySelector('.addFriendData')
const notificationButton = document.querySelector('.notificationButton')
const friendRequestData = document.querySelector('.friendRequestData')

deleteAccountButton.addEventListener('click', () => {
  console.log()
    killAccount.classList.add('visible')
    killAccountData.classList.add('visible')
    profilePage.classList.remove('visible')
})



loginImage.addEventListener('click', () => {
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
    }
    profilePage.classList.add('visible')
    profileData.classList.add('visible')
})

setTimeout(function() {
    lottieContainer.style.opacity = "0"
    setTimeout(function() {
        lottieContainer.style.display = "none"
    }, 600);
}, 4000);


if(document.querySelector('.noMoreAnimation'))
{
  lottie.loadAnimation(
  {
    container: lottieAnimation, 
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: './assets/beer.json'
  });
}

history.addEventListener('click', () => {
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
    }
    historyData.classList.add('visible')
    downBarInfos.classList.add('visible')
})

leaderboard.addEventListener('click', () => {
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
    }
    leaderboardData.classList.add('visible')
    downBarInfos.classList.add('visible')
})

friendList.addEventListener('click', () => {
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
    }
    friendListData.classList.add('visible')
    downBarInfos.classList.add('visible')
})



background.addEventListener('click', () => {
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
    }
})

addFriendButton.addEventListener('click', () => {
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
    }
    addFriendData.classList.add('visible')
    downBarInfos.classList.add('visible')
})

notificationButton.addEventListener('click', () => {
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
    }
    friendRequestData.classList.add('visible')
    downBarInfos.classList.add('visible')
})

for (var j = 0; j < closeButton.length; j++) {
    closeButton[j].addEventListener('click', () => {
        let visible = document.querySelectorAll('.visible')
        for (var i = 0; i < visible.length; i++) {
            visible[i].classList.remove('visible')
            console.log("yes")
        }
    })
}