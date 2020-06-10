'use strict';

class SendForm {
    constructor(obj) {
        this.form = document.querySelector(obj.form);
        this.elems = this.form.querySelectorAll(obj.inputs);
        // this.elemsClass = obj.inputs.slice(1);
        this.submit = document.querySelector(obj.submit);
        this.events();
    }

    sendFormData(evt) {
        evt.preventDefault();

        let dataToSend = {};
        this.elems.forEach((el) => {
            dataToSend[el.name] = el.value;
        });
        let XHR = new XMLHttpRequest();
        //url for localhost dev
        //let url = `${window.location.origin}/bw-re/post`;
        
        //url for production
        let url = `${window.location.origin}/post`;
        let jsonData = JSON.stringify(dataToSend);
        
        // const spinnerMail = new SpinnerMail().addEvents();

        // this.form.appendChild(spinnerMail);
        
        // spinnerMail.classList.add('spinner-mail--active');
        
        XHR.open("POST", url, true);
        XHR.responseType = 'document';
        XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        XHR.onreadystatechange = () => {
            if(XHR.readyState == 4 && navigator.onLine) {
                if(XHR.status >= 200 && XHR.status < 304) {

                    // spinnerMail.classList.remove('spinner-mail--active');

                    // let xmlDoc = XHR.response.documentElement.querySelector('.common-popup__wrapper');
                }
            }
        };

        XHR.send(jsonData);
    }

    events() {
        if(!this.form) return;

        this.submit.addEventListener('click', () => this.sendFormData(event));
    };
}



export default SendForm;