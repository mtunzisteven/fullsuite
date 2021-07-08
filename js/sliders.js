export const imgSlider = (imgArray, imgElement) => {

    let len = imgArray.length;

    for(let i = 0; i < len; i++){

        imgElement.setAttribute('src', imgArray[i]);

        syncDelay(4000);

        if(i == len-1){
            
            i = 0;

        }

    }

};

export function divSlider(divElements){

    let len = divElements.length;

    for(let i = 0; i < len; i++){

        syncDelay(5000);

        divElements[i].setAttribute('class', 'hidden');

        if(i < (len -1)){

            divElements[i+1].setAttribute('class', 'hero');

        }
        else if(i == (len-1)){
        
            divElements[i].removeAttribute('class','hidden');


        }
    }

};

// delay unction
function syncDelay(milliseconds){
    var start = new Date().getTime();
    var end=0;
    while( (end-start) < milliseconds){
        end = new Date().getTime();
    }
   }