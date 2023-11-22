const compte_rebours = () =>{

    let body = document.querySelector('body');
    let message_rebours = document.querySelector('#message_rebours');
    let day = document.querySelector('#nb_day');
    let hours = document.querySelector('#nb_hours');
    let min = document.querySelector('#nb_min');
    let sec = document.querySelector('#nb_sec');

    let textD = document.querySelector('#textD');
    let textH = document.querySelector('#textH');
    let textM = document.querySelector('#textM');
    let textS = document.querySelector('#textS');

    let now = new Date();
    const dateOffsetInMinutes = now.getTimezoneOffset();

    const unJourEnMs = 1000 * 60 * 60 * 24;
    const uneHeureEnMs = 1000 * 60 * 60;
    const uneMinuteEnMs = 1000 * 60;

    // const newYear = new Date().getTime() + 10 * 60 * 1000; 
     
    const newYear = new Date(2023,11,15);

    const getCountDown = () => {
        let nowDate = Date.now();
       
        let tempsRestantEnMs = newYear - nowDate;
       

        //jours
        let nbjours = Math.floor(tempsRestantEnMs / unJourEnMs);

        //heures
        let restesTempsSansJoursEnMs = tempsRestantEnMs - nbjours * unJourEnMs;
        let nbheures = Math.floor(restesTempsSansJoursEnMs / uneHeureEnMs);

        //minutes
        let restesTempsSansheuresEnMs = restesTempsSansJoursEnMs - nbheures * uneHeureEnMs;
        let nbminutes = Math.floor(restesTempsSansheuresEnMs / uneMinuteEnMs);
        
       
        //secondes
        let restesTempsSansMinutesEnMs = restesTempsSansheuresEnMs - nbminutes * uneMinuteEnMs;
        let nbsecondes = Math.floor(restesTempsSansMinutesEnMs / 1000);
        
        
        day.textContent = nbjours;
        hours.textContent = nbheures;
        min.textContent = nbminutes;
        sec.textContent = nbsecondes;
    
        nbjours<=1 ? textD.textContent='' : textD.textContent='s';
        nbheures<=1 ? textH.textContent='' : textH.textContent='s';
        nbminutes<=1 ? textM.textContent='' : textM.textContent='s';
        nbsecondes<=1 ? textS.textContent='' : textS.textContent='s';

        if(tempsRestantEnMs <=0){
            clearInterval(countInterval);
            day.textContent = '00';
            hours.textContent = '00';
            min.textContent = '00';
            sec.textContent = '00';

            message_rebours.innerHTML='Terminé !';
        }
    }

    // initialisation
    getCountDown();

}

let countInterval = setInterval(compte_rebours,1000);


