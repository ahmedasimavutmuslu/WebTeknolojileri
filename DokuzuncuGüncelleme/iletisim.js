const form = document.getElementById('iletisim');
const isim = document.getElementById('isim');
const sisim = document.getElementById('sisim');
const email = document.getElementById('email');
const erkek = document.getElementById('erkek');
const kadin = document.getElementById('kadin');
const diger = document.getElementById('diger');
const ulke = document.getElementById('ulke');
const sehir = document.getElementById('sehir');
const sorun = document.getElementById('sorun');
const sorunAciklama = document.getElementById('sorunAciklama');
const cinsiyet = document.querySelector('input[name="cinsiyet"]:checked')

/*
if(form) {
    form.addEventListener('submit',(e)=> {

        e.preventDefault();
    
        checkInputs();
    });

}
*/
if(form) 
{
    form.addEventListener('submit',(e)=> {
        if(!checkInputs()) {
            e.preventDefault();
    
        }
        else 
        {
            document.getElementById("iletisim").submit();
        }
    });
}







function checkInputs() {
    const isimValue = isim.value.trim();
    const sisimValue = sisim.value.trim();
    const emailValue = email.value.trim();
    const erkekValue = erkek.value.trim();
    const kadinValue = kadin.value.trim();
    const digerValue = diger.value.trim();
    const ulkeValue = ulke.value.trim();
    const sehirValue = sehir.value.trim();
    const sorunValue = sorun.value.trim();
    const sorunAciklamaValue = sorunAciklama.value;
    const cinsiyetValue = cinsiyet.value;


    if(isimValue === '') 
    {
        setErrorFor(isim, 'İsim alanı boş bırakılamaz.');
        return false;
    }
    else 
    {
        setSuccesFor(isim);
    }

    if(sisimValue === '') 
    {
        setErrorFor(sisim, 'Soyisim alanı boş bırakılamaz.');
        return false;

    }
    else 
    {
        setSuccesFor(sisim);
    }
    if(emailValue === '') 
    {
        setErrorFor(email, 'Email alanı boş bırakılamaz.');
        return false;

    }
    else if(!isEmail(emailValue)) 
    {
        setErrorFor(email, 'Geçerli bir email giriniz.');
        return false;

    }
    else 
    {
        setSuccesFor(email);
    }
    if(cinsiyetValue === '') 
    {
        setErrorFor(cinsiyet, 'Bir cinsiyet seçiniz.');
        return false;

    }
    else 
    {
        setSuccesFor(cinsiyet);
    }
    if(ulkeValue === '') 
    {
        setErrorFor(ulke, 'Bir ülke giriniz.');
        return false;

    }
    else 
    {
        setSuccesFor(ulke);
    }
    if(sehirValue === '') 
    {
        setErrorFor(sehir, 'Bir şehir giriniz.');
        return false;

    }
    else 
    {
        setSuccesFor(sehir);
    }
    if(sorunValue === '') 
    {
        setErrorFor(sorun, 'Ne tür bir sorun yaşadığınızı seçiniz.');
        return false;

    }
    else 
    {
        setSuccesFor(sorun);
    }
    if(sorunAciklamaValue === '') 
    {
        setErrorFor(sorunAciklama, 'Açıklama alanı boş bırakılamaz.');
        return false;

    }
    else 
    {
        setSuccesFor(sorunAciklama);
        return true;
    }
}


function setErrorFor(input, message) {
    const formControl = input.parentElement; // form control divi
    const small = formControl.querySelector('small'); // hata mesaji icin
    small.innerText = message;
    formControl.className = 'form-control error';
}

function setSuccesFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';

}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

