class SpinnerMail {
    constructor() {
        this.addEvents();
    }

    addEvents() {
        const spinner = document.createElement('div');
        spinner.classList.add('spinner-mail');
        return spinner;
    }
}

export default SpinnerMail;