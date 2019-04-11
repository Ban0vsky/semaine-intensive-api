const loginImage = document.querySelector('.loginImage')
const signupButton = document.querySelector('.signupButton')
const loginButton = document.querySelector('.loginButton')
const welcomeText = document.querySelector('.welcomeText')
const background = document.querySelector('.map')
const login = document.querySelector('.login')
const loginAction = document.querySelector('.loginAction')
const signupAction = document.querySelector('.signupAction')
const history = document.querySelector('.history')
const leaderboard = document.querySelector('.leaderboard')
const friendList = document.querySelector('.friendList')
const downBarInfos = document.querySelector('.downBarInfos')
let closeButton = document.querySelectorAll('.closeButton')
let lottieAnimation = document.querySelector('.lottieAnimation')


lottie.loadAnimation({
    container: lottieAnimation, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://www.grossyoan.fr/beer.json'
});


loginImage.addEventListener('click', () => {
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



loginButton.addEventListener('click', () => {
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
    }
    login.classList.add('visible')
    loginAction.classList.add('visible')
})




signupButton.addEventListener('click', () => {
    let visible = document.querySelectorAll('.visible')
    for (var i = 0; i < visible.length; i++) {
        visible[i].classList.remove('visible')
        console.log("yes")
    }
    login.classList.add('visible')
    signupAction.classList.add('visible')
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