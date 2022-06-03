let checkbox_appartement = document.getElementById("Appartement");
let checkbox_huis = document.getElementById("Huis"); 
let checkbox_studio = document.getElementById("Studio");
let list_of_houses = document.getElementsByTagName("li");

checkbox_appartement.checked=true;
checkbox_huis.checked=true;
checkbox_studio.checked=true;

checkbox_appartement.addEventListener('change', function(){
    if(checkbox_appartement.checked){
        for (let i = 0; i < list_of_houses.length; i++) {
            if (list_of_houses[i].dataset.kindOfHouse == 'Appartement') {
                list_of_houses[i].style.display = '';
            }
        }
    }
    else{
        for (let i = 0; i < list_of_houses.length; i++) {
            if (list_of_houses[i].dataset.kindOfHouse == 'Appartement') {
                list_of_houses[i].style.display = 'none';
            }
        }
    }
});

checkbox_studio.addEventListener('change', function(){
    if(checkbox_studio.checked){
        for (let i = 0; i < list_of_houses.length; i++) {
            if (list_of_houses[i].dataset.kindOfHouse == 'Studio') {
                list_of_houses[i].style.display = '';
            }
        }
    }
    else{
        for (let i = 0; i < list_of_houses.length; i++) {
            if (list_of_houses[i].dataset.kindOfHouse == 'Studio') {
                list_of_houses[i].style.display = 'none';
            }
        }
    }
});

checkbox_huis.addEventListener('change', function(){
    if(checkbox_huis.checked){
        for (let i = 0; i < list_of_houses.length; i++) {
            if (list_of_houses[i].dataset.kindOfHouse == 'Huis') {
                list_of_houses[i].style.display = '';
            }
        }
    }
    else{
        for (let i = 0; i < list_of_houses.length; i++) {
            if (list_of_houses[i].dataset.kindOfHouse == 'Huis') {
                list_of_houses[i].style.display = 'none';
            }
        }
    }
});