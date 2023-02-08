const lemot='concatenation';

/*Je récupère mes éléments HTML*/
const btn = document.getElementById("Failed");
const zoneMot=document.getElementById("zoneDuMot");
/*ajout des événements*/
btn.addEventListener('click',CheckLetter);

/**************************************** *
 *            Le jeux commence 
 **************************************** */
/*Génération de P*/
let mesP='';
for(let i=0; i<lemot.length;i++)
{
   mesP+=`<span id='${i}'>_</span>`;
}
/*rechercher mon div pour mettre mes P*/
zoneMot.innerHTML=mesP;


/*Mes fonctions*/
function CheckLetter ()
{
    const letter= document.getElementById("lettre").value;
    if(lemot.includes(letter))
    {
       //je dois trouver les emplacements de la lettre
       for(let i=0; i<lemot.length;i++)
       {
           if(lemot[i]==letter)
           {
               document.getElementById(`${i}`).innerHTML=letter;
           }
       }
      
    }
    else
    {
        //Affichage de la zone erreur de la lettre fautive
        document.getElementById("zoneErreur").innerHTML+=letter;
        changeHangMan();
    }
     //j'efface mon textebox
     document.getElementById("lettre").value='';
     //je get mes span
     let ListeP = document.getElementsByTagName("span");
     let underscore=0;
     for(let i =0; i<ListeP.length && underscore<1;i++)
     {
           if(ListeP[i].innerHTML=='_')
           {
               underscore++;
           }
     }
     if(underscore==0) document.getElementsByTagName("body")[0].innerHTML="<h1>GAGNEE</h1>";
}


function changeHangMan()
{
    //Récupérer la div avec l'image
    const maDIv = document.getElementById("HangPic");
    //Récupérer sa classe
    let currentClass = maDIv.className;
    //Changer pour la classe suivante
    // Version tordue , illisible et non maintenable!
    //currentClass= `Step${ParseInt(currentClass.replace("Step","").replace("_pic",""))+1}_pic`
    //j'extrais le chiffre Step1_pic
    console.log(currentClass)
    let chiffre = currentClass.replace("step",""); // 1_pic
    console.log(chiffre)
    chiffre= chiffre.replace("_pic","");//1
    console.log(chiffre);
//si la valeur(chiffre) dépasse 8 on recommence
    //chiffre= chiffre>8?0:chiffre;
    if(chiffre>7)
    {
        //chiffre=1;
        document.getElementsByTagName("body")[0].innerHTML="<h1>LOOOSSSSEEEEERRRRR!!!</h1>"
    }
    else
    {
        //J'augmente de 1
    chiffre++; 
    }

    
    //je remove l'ancienne class
    maDIv.classList.remove(currentClass);
    // je recompose la classe
    currentClass=`step${chiffre}_pic`; //'Step'+chiffre+'_pic';
    //J'ajoute la classe à ma div
    maDIv.classList.add(currentClass);
}
