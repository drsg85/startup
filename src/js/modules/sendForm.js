import SpinnerMail from './spinner-mail';
import CommonPopup from './commonPopup';

class SendForm {
    constructor(obj) {
        this.form = document.querySelector(obj.form);
        this.elems = this.form.querySelectorAll(obj.inputs);
        // this.elemsClass = obj.inputs.slice(1);
        this.submit = document.querySelector(obj.submit);
        this.popup = new CommonPopup().addEvents().popup;
        this.overlay = new CommonPopup().addEvents().overlay;
        this.textarea = document.querySelector('.contactus-form__text');
        this.events();
    }

    sendFormData(evt) {
        evt.preventDefault();

        let dataToSend = {};
        this.elems.forEach((el) => {
            dataToSend[el.name] = el.value;
        });
        // dataToSend[this.textarea.name] = this.textarea.value;
        let XHR = new XMLHttpRequest();
        //url for localhost dev
        let url = `${window.location.origin}/startup/testing-post`;
        
        //url for production
        // let url = `${window.location.origin}/post`;
        let jsonData = JSON.stringify(dataToSend);
        
        const spinnerMail = new SpinnerMail().addEvents();

        this.form.appendChild(spinnerMail);

        spinnerMail.classList.add('spinner-mail--active');
        
        XHR.open("POST", url, true);
        XHR.responseType = 'document';
        XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        XHR.onreadystatechange = () => {
            if(XHR.readyState == 4 && navigator.onLine) {
                if(XHR.status >= 200 && XHR.status < 304) {

                    spinnerMail.classList.remove('spinner-mail--active');

                    let xmlDoc = XHR.response.documentElement.querySelector('.common-popup__wrapper');
                    this.callBackResponse(xmlDoc);
                }
            }
        };
        XHR.send(jsonData);
    }

    callBackResponse(answer) {
        if(this.popup !== undefined ) {
            this.popup.appendChild(answer);
            
            this.form.reset();
            setTimeout(() => {
                this.popup.classList.add(`${this.popup.className}--active`);
            }, 250);
            const popupClose = this.popup.querySelector('.common-popup-content__close');
            popupClose.addEventListener('click', (event) => this.closePopup(event, this.popup));
        }
        return;
    }
    
    closePopup(evt, el) {
        evt.preventDefault();
        const regEpx = /\S+--active/gm;
        const classToRemove = el.className.match(regEpx)[0];
        el.classList.remove(classToRemove);
        document.querySelector('.common-popup__wrapper').remove();
    }

    events() {
        if(!this.form) return;
        this.form.appendChild(this.popup);
        this.form.appendChild(this.overlay);

        this.submit.addEventListener('click', () => this.sendFormData(event));
    };
}



export default SendForm;