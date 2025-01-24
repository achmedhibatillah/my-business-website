const style = document.createElement('style');
style.innerHTML = `
    .typed-cursor {
        display: none !important;
    }
`;
document.head.appendChild(style);

let typedInstance = null;

const startTyped = () => {
    if (typedInstance === null) {
        typedInstance = new Typed('#type-about-me', {
            strings: ['<h5 class="ls-1 text-color1" style="text-align:justify !important;">I’m a skilled <i class="fst-normal bg-color2 text-color4">web developer</i> with expertise in <i class="fst-normal bg-color3 text-color4 p-0">full-stack development</i>, both front-end and back-end. I’m proficient in <i class="fst-normal bg-color3 text-color4 p-0">PHP</i> and have hands-on experience using popular frameworks like CodeIgniter and Laravel for building robust back-end systems. On the front-end, I have strong skills in <i class="fst-normal bg-color3 text-color4 p-0">HTML</i>, <i class="fst-normal bg-color3 text-color4 p-0">CSS (Bootstrap)</i>, and <i class="fst-normal bg-color3 text-color4 p-0">JavaScript</i>, which allow me to create responsive and interactive user interfaces. I’m also adept at <i class="fst-normal bg-color3 text-color4 p-0">managing database query</i> and working with <i class="fst-normal bg-color3 text-color4 p-0">database programming</i> to ensure efficient data handling and smooth integration across applications.</h5>'],
            typeSpeed: 10,
            onTypingComplete: function () {
                window.scrollTo(0, 0);
            }
        });
    }
};

const isInViewport = (el) => {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};

window.addEventListener('scroll', () => {
    const element = document.getElementById('type-about-me');
    if (isInViewport(element)) {
        startTyped();
    }
});
