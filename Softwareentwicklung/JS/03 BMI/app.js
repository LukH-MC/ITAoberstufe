var iframeInput = document.getElementById("input");
var iframeOutput = document.getElementById("output");

function inputMale(){
    var size;
    var weight;
    var bmi;
    var wertung;

    size = document.getElementById("size");
    weight = document.getElementById("weight");

    if(weight <= 400 && weight >= 0 && size <= 300 && size >= 0){
        bmi = weight / math.pow(size, 2) * 10000;

        if(bmi <= 16){
            wertung = " extrem Untergewichtig.";
            output(bmi, wertung);
        }
        else if(bmi <= 16.99){
            wertung = " mäßig Untergewichtig.";
            output(bmi, wertung);
        }
        else if(bmi <= 18.4){
            wertung = " leicht Untergewichtig.";
            output(bmi, wertung);
        }
        else if(bmi <= 24.99){
            wertung = " Normalgewichtig.";
            output(bmi, wertung);
        }
        else if(bmi <= 29.99){
            wertung = " leicht Übergewichtig.";
            output(bmi, wertung);
        }
        else if(bmi <= 39.99){
            wertung = " stark Übergewichtig.";
            output(bmi, wertung);
        }
        else if(bmi >= 40){
            wertung = " extrem Übergewichtig.";
            output(bmi, wertung);
        }
    }
    else{
        iframeInput.contentWindow.location.reload(true);
    }
}

function inputFemale(){
    var size;
    var weight;
    var bmi;
    var wertung;

    size = document.getElementById("size");
    weight = document.getElementById("weight");

    if(weight <= 400 && weight >= 0 && size <= 300 && size >= 0){
        bmi = weight / math.pow(size, 2) * 10000;

        if(bmi <= 15){
            wertung = " extrem Untergewichtig.";
            output(bmi, wertung);
        }
        else if(bmi <= 15.99){
            wertung = " mäßig Untergewichtig.";
            output(bmi, wertung);
        }
        else if(bmi <= 17.4){
            wertung = " leicht Untergewichtig.";
            output(bmi, wertung);
        }
        else if(bmi <= 23.99){
            wertung = " Normalgewichtig.";
            output(bmi, wertung);
        }
        else if(bmi <= 33.99){
            wertung = " leicht Übergewichtig.";
            output(bmi, wertung);
        }
        else if(bmi <= 38.99){
            wertung = " stark Übergewichtig.";
            output(bmi, wertung);
        }
        else if(bmi >= 39){
            wertung = " extrem Übergewichtig.";
            output(bmi, wertung);
        }
    }
    else{
        iframeInput.contentWindow.location.reload(true);
    }
}

function output(bmi, wertung){
    iframeOutput.contentWindow.location.reload(true);
    iframeOutput.document.getElementById("BMI").innerHTML = bmi;
    iframeOutput.document.getElementById("wertung").innerHTML = wertung;
}