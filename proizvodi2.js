const div = document.getElementById('artikli');
const kategorija = document.getElementById('kategorija');
const alati = document.getElementById('alati');
const farbe = document.getElementById('farbe');
const hemija = document.getElementById('hemija');
const basta = document.getElementById('basta');
const rucni = document.getElementById('rucni');
const stiropor = document.getElementById('stiropor');
const sve = document.getElementById('sve');

// ajax function - send http request

const httpRequest = (method, url) => {
    const promise = new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();

        xhr.open(method, url, true);

        xhr.responseType = 'json';

        xhr.onload = () => {
            if(xhr.status >= 400){
                reject(xhr.response);
            } else{
                resolve(xhr.response);
            }
        };

        xhr.onerror = () => {
            reject('Error...');
        };

        xhr.send();
    });
    return promise;
};

// function for getting all products
const getSve = () => {
    httpRequest('GET', 'sve.php').then(responseData => {
        const data = responseData;
        let display = '';

        data.forEach(artikal => {
            display += `<li>${artikal.ime}</li>`;
        });
        div.innerHTML = display;
        kategorija.innerHTML = 'Svi proizvodi';
    }).catch(err => {
        console.log(err);
    });
};

// function for getting all products under category 'alati'
const getAlati = () => {
    httpRequest('GET', 'alati2.php').then(responseData => {
        const data = responseData;
        let display = '';
        
        data.forEach(artikal => {
            display += `<li>${artikal.ime}</li>`;
            a = artikal.kategorija;
        });
        div.innerHTML = display;
        kategorija.innerHTML = 'Alati';
    });
};
// function for getting all products under category 'farbe'
const getFarbe = () => {
    httpRequest('GET', 'farbe.php').then(responseData => {
        const data = responseData;
        let display = '';
        
        data.forEach(artikal => {
            display += `<li>${artikal.ime}</li>`;
        });
        div.innerHTML = display;
        kategorija.innerHTML = 'Farbe';
    });
};

// function for getting all products under category 'hemija'
const getHemija = () => {
    httpRequest('GET', 'hemija.php').then(responseData => {
        const data = responseData;
        let display = '';

        data.forEach(artikal => {
            display += `<li>${artikal.ime}</li>`;
        });
        div.innerHTML = display;
        kategorija.innerHTML = 'Kucna Hemija';
    });
};

// function for getting all products under category 'basta'
const getBasta = () => {
    httpRequest('GET', 'basta.php').then(responseData => {
        const data = responseData;
        let display = '';

        data.forEach(artikal => {
            display += `<li>${artikal.ime}</li>`;
        });
        div.innerHTML = display;
        kategorija.innerHTML = 'Bastenski Alati';
    });
};

// function for getting all products under category 'rucni'
const getRucni = () => {
    httpRequest('GET', 'rucni.php').then(responseData => {
        const data = responseData;
        let display = '';

        data.forEach(artikal => {
            display += `<li>${artikal.ime}</li>`;
        });
        div.innerHTML = display;
        kategorija.innerHTML = 'Rucni Alati';
    });
};

// function for getting all products under category 'stiropor'
const getStiropor = () => {
    httpRequest('GET', 'stiropor.php').then(responseData => {
        const data = responseData;
        let display = '';

        data.forEach(artikal => {
            display += `<li>${artikal.ime}</li>`;
        });
        div.innerHTML = display;
        kategorija.innerHTML = 'Stiropor';
    });
};

// Events
window.onload = getSve();
alati.addEventListener('click', getAlati);
farbe.addEventListener('click', getFarbe);
hemija.addEventListener('click', getHemija);
basta.addEventListener('click', getBasta);
rucni.addEventListener('click', getRucni);
stiropor.addEventListener('click', getStiropor);
sve.addEventListener('click', getSve);
