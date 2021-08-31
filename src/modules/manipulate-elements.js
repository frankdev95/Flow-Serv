export default class ManipulateEelements {
    constructor() {

    }

    appendChild(elClass, elToAppendClass, display) {
        const el = document.querySelector(`.${elClass}`);
        document.querySelector(`.${elToAppendClass}`).appendChild(el);
        el.style.display = display;
    }
}