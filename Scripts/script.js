const dropList=document.querySelectorAll(".drop-list select"),
izValute=document.querySelector(".iz select"),
uValutu=document.querySelector(".u select"),
getButton=document.querySelector("form button");

for(let i=0; i <dropList.length; i++){
    for(currency_code in country_list){
        let selected;
        if(i == 0){
            selected = currency_code == "USD" ? "selected" : "";
        }
        else if(i == 1){
            selected = currency_code == "HRK" ? "selected" : "";
        }

        let optionTag=`<option value="${currency_code}" ${selected}>${currency_code}</option>`;
        dropList[i].insertAdjacentHTML("beforeend",optionTag);
    }
    dropList[i].addEventListener("change",e=>{
            loadFlag(e.target);
    });
}

function loadFlag(element){
    for(code in country_list){
        if(code == element.value){
            let imgTag=element.parentElement.querySelector("img");
            imgTag.src=`https://countryflagsapi.com/png/${country_list[code]}`;
        }
    }
}

window.addEventListener("load",()=>{
    pretvori();
});

getButton.addEventListener("click",e=>{
    e.preventDefault();
    pretvori();
});

const izmjena=document.querySelector(".drop-list .icon");
izmjena.addEventListener("click",()=>{
    let temp=izValute.value;
    izValute.value=uValutu.value;
    uValutu.value=temp;
    loadFlag(izValute);
    loadFlag(uValutu);
    pretvori();
});

function pretvori(){
    const iznos=document.querySelector(".iznos input");
    omjer_string=document.querySelector(".pretvori");
    let iznosVr=iznos.value;

    if(iznosVr == "" || iznosVr == 0 ){
        iznos.value = "1";
        iznosVr = 1;
    }
    omjer_string.innerText="Računanje...";
    let url=`https://v6.exchangerate-api.com/v6/2fce6a77df8cd27cb3d42491/latest/${izValute.value}`;
    fetch(url).then(response => response.json()).then(result =>{
        let omjer=result.conversion_rates[uValutu.value];
        let totalniOmjer=(iznosVr*omjer).toFixed(2);
        omjer_string.innerText=`${iznosVr} ${izValute.value} = ${totalniOmjer} ${uValutu.value}`;
    }).catch(()=>{
        omjer_string.innerText="Nešto nije u redu";
    });
}

