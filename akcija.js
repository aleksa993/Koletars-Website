window.onload = () =>{
    
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'akcija.php', true);

    xhr.onload = () => {
    if(xhr.status == 200){
        
        const result = JSON.parse(xhr.responseText);
        
        if(result.length > 0){
            const artikli = document.getElementById('akcija');
            let display = '';
            document.getElementById('card').style.display = 'block';

            result.forEach(artikal => {
                display = `<li>${artikal.ime},</li>`;
                artikli.innerHTML += display;
            });
        }
    } else{
        console.log('error...');
    }
}

    xhr.send();
}