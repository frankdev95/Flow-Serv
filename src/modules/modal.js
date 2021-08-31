export default class Modal {
    constructor() {

    }

    init(backdropClass, modal) {
        this.backdrop = document.querySelector(backdropClass);
        this.modal = modal;

        this.backdropShowLength = this.backdrop.dataset.showAnimation;
        this.backdropHideLength = this.backdrop.dataset.hideAnimation;
        this.backdropHideDelay = this.backdrop.dataset.hideDelay;

        this.modalShowLength = this.modal.dataset.showAnimation;
        this.modalHideLength = this.modal.dataset.hideAnimation;
        this.modalShowDelay = this.modal.dataset.showDelay;
    }

    show() {
        this.backdrop.style.animation = `showOpacity ${this.backdropShowLength} forwards`;
        this.modal.style.animation = `scaleInModal ${this.modalShowLength} ${this.modalShowDelay} forwards`;
        this.modal.style.pointerEvents = "initial";
    }

    hide() {
        this.backdrop.style.opacity = ".8";
        this.backdrop.style.animation = `hideOpacity ${this.backdropHideLength} ${this.backdropHideDelay} forwards`;
        this.modal.style.animation = `moveYRightModal ${this.modalHideLength}`;
    }
}