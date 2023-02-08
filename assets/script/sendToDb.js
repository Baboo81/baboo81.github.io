const valider = function (form) {
    
    fetch(`./database/fonctionVerification.php?Name=${form.Nom.value}`)
    .then(response => {
        sessionStorage.setItem("User", form.Nom.value); 
    
    })
    .catch(error => {
        alert(error);
    });
    return false
}

const UpdateScore = function (score) {

    let user = sessionStorage.getItem("User");
    fetch(`./database/fonctionAddScore.php?Name=${user}&score=${score}`)
    .then(response=> {
        sessionStorage.setItem("Score",score.value);
    })
    .catch(error => {
        alert("Il y a une erreur:".error);

    });

   window.alert('ok') ;


}

