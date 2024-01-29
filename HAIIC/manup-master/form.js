const paper_id = document.getElementById('Paper_ID');
const paper_title = document.getElementById('Paper_title');
const abstract_link = document.getElementById('abstract_link');

const FAname = document.getElementById('FAuthor_name');
const FAaff = document.getElementById('FAuthor_aff');
const FAmail = document.getElementById('FAuthor_mail');

const Corrname = document.getElementById('CorrAuthor_name');
const Corraff = document.getElementById('CorrAuthor_aff');
const Corrmail = document.getElementById('CorrAuthor_mail');

const Othername = document.getElementById('OtherAuthor_name');
const Otheraff = document.getElementById('OtherAuthor_aff');
const Othermail = document.getElementById('OtherAuthor_mail');


const form = document.getElementById('cfp');

cfp.addEventListener('submit', (e) => {
    let messages = []
    if (paper_id.value === '' || paper_id.value == null) {
        messages.push('This field is required!!');
    }
    if (paper_title.value === '' || paper_title.value == null) {
        messages.push('This field is required!!');
    }
    if (abstract_link.value === '' || abstract_link.value == null) {
        messages.push('This field is required!!');
    }

    if (FAname.value === '' || FAname.value == null) {
        messages.push('This field is required!!');
    }
    if (FAaff.value === '' || FAaff.value == null) {
        messages.push('This field is required!!');
    }
    if (famFAmail.value === '' ||FAmail.value == null) {
        messages.push('This field is required!!');
    }

    if (Corrname.value === '' || Corrname.value == null) {
        messages.push('This field is required!!');
    }
    if (Corraff.value === '' || Corraff.value == null) {
        messages.push('This field is required!!');
    }
    if (Corrmail.value === '' || Corrmail.value == null) {
        messages.push('This field is required!!');
    }

    if (Othername.value === '' || Othername.value == null) {
        messages.push('This field is required!!');
    }
    if (Otheraff.value === '' || Otheraff.value == null) {
        messages.push('This field is required!!');
    }
    if (Othermail.value === '' || Othermail.value == null) {
        messages.push('This field is required!!');
    }

    e.preventDefault();
})