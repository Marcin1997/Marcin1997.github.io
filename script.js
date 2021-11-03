

/*const workLine = document.querySelector('.my-work-arrow')
const lineDown = document.querySelector('.fa-long-arrow-alt-down')

workLine.addEventListener('mouseover', () => {
    document.body.classList.remove('downward-line2')
    lineDown.classList.add('arrow-down-here')


})

workLine.addEventListener('mouseleave', () => {
    lineDown.classList.remove('arrow-down-here')

})*/



document.querySelector(".hamburger-menu").addEventListener('click', () => {
    document.querySelector(".container").classList.toggle('change');

});

const menuItems = document.querySelectorAll('.menu-link')


menuItems.forEach((e) => {
    e.addEventListener('click', () => {
        document.querySelector(".container").classList.toggle('change');
    })

})






/*
document.querySelector(".scroll-btn").addEventListener("click", () => {
    document.querySelector("html").style.scrollBehavior = "smooth";
    setTimeout(() => {
        document.querySelector("html").style.scrollBehavior = "unset";
    }, 1000)
});

*/


/*

window.onload = () => {
    setTimeout(() => {
        document.querySelector("body").classList.add("display")
    }, 1200)
}
*/

const aboutMeOne = [document.querySelector('.button-about'), document.querySelector('.about'), document.querySelector('.about-desktop-nav'), document.querySelector('.contact-mobile-side-link'), document.querySelector('.contact-desktop')]

const containerAbout = document.querySelector('.about-me-container')


aboutMeOne.forEach((e) => {
    e.addEventListener('click', () => {
        containerAbout.classList.toggle('about-me-toggle')
        document.body.style.overflow = "hidden"
        document.querySelector('.close-about-me').addEventListener('click', () => {
            containerAbout.classList.remove('about-me-toggle')
            document.body.style.overflowY = "scroll"
        })

    })
})




const arrowToggle = document.querySelector(".my-work-arrow")
const workLineOne = document.querySelector(".downward-line3")
const workLineTwo = document.querySelector(".downward-line4")
const workLineMain = document.querySelector(".downward-line2")



arrowToggle.addEventListener("mouseenter", () => {

    workLineOne.classList.add("toggleArrows")
    workLineTwo.classList.add("toggleArrows")
    workLineMain.classList.add("toggleArrows")
})

arrowToggle.addEventListener('mouseleave', () => {
    workLineOne.classList.remove("toggleArrows")
    workLineTwo.classList.remove("toggleArrows")
    workLineMain.classList.remove("toggleArrows")
})





/*
const careersBackground = document.querySelector('.image-project-one')
numbersCareers = 1;
animationCount = 1;
setInterval(function intervalsSet() {
    animationCount++
    numbersCareers++

    if (numbersCareers > 2) {
        numbersCareers = 1;
    }

    if (animationCount > 2) {
        animationCount = 1;
    }


    function addAnimation() {

        careersBackground.src = `imgs/project1bg${numbersCareers}.png`


    }

    addAnimation()

}, 3500)
*/