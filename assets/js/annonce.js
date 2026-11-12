//                              Ce qu'on veut faire conrétement :
//  EN TANT QU'utilisateur JE VEUX être averti des erreurs avant l’envoi d’un formulaire AFIN DE corriger plus facilement ma saisie




// Grace au vérifications les règles applicables côté serveur reprennent , dont la longueur du mot de passe et la confirmation.
// Les messages sont affichés près des champs concernés (si errreur).
// Un formulaire invalide n’est pas envoyé ; le premier champ erroné reçoit une alerte.

function checkAuthPassword() {
    const form = document.querySelector('#login-form');

    form?.addEventListener('submit', function(event) {
        event.preventDefault();

        const email     = form.querySelector('[name="email"]');  
        const password  = document.querySelector('[name="password"]');

        if (password.value.length < 8) {
            const error = document.createElement('span');
            error.innerText = "Password must be at least 8 characters long.";

            password.after(error);
        }

// Les formulaires PHP existants seront envoyé via JavaScript (AJAX). 
// Les retours du formulaire seront traités en JS. Par exemple, à l’ajout d’une carte, celle-ci sera charger dans le DOM sans aucun rechargement de page.


        else {
            fetch(form.action, {
                method: "POST", //Pour envoyer un message au serveur.
                body: new FormData(form) // Envoie au serveur tout ce que la personne a écrit dans ce formulaire.
            })
            .then(res => res.text()) //Quand la réponse arrive.
            .then(data => console.log("Réponse :", data)) // Ca s'affiche dans la console.
            .catch(err => console.error(err)); // S'il y a une erreur.
        }
  });
}

// Les formulaires d’inscription et de création ou modification d’un média bénéficient d’une validation JavaScript.
// Pour l'inscription

function checkRegisterPassword() {
    const form = document.querySelector('#register-form');

    form?.addEventListener('submit', function(event) {
        event.preventDefault();

        const nickname  = form.querySelector('[name="nickname"]');  
        const email     = form.querySelector('[name="email"]');  
        const password  = document.querySelector('[name="password"]');
        const password_confirmation  = document.querySelector('[name="password_confirmation"]');

        if (password.value.length < 8) {
            const error = document.createElement('span');
            error.innerText = "Password must be at least 8 characters long.";

            password.after(error);
        }

        else if (password.value !== password_confirmation.value) {  // Si les mdp ne corresponde pas, ça affiche une erreur. 
            const error = document.createElement('span');
            error.innerText = "Password does not match.";

            password.after(error);
        }

//Les formulaires PHP existants seront envoyé via JavaScript (AJAX). 
// Les retours du formulaire seront traités en JS. Par exemple, à l’ajout d’une carte, celle-ci sera charger dans le DOM sans aucun rechargement de page.


        else {
            fetch(form.action, {
                method: "POST", //Pour un envoyer un message au serveur.
                body: new FormData(form) // Envoie au serveur tout ce que la personne a écrit dans ce formulaire.
            })
            .then(res => res.text()) //Quand la réponse arrive.
            .then(data => console.log("Réponse :", data)) // Ca s'affiche dans la console.
            .catch(err => console.error(err)); // S'il y a une erreur.
        }
  });
}
checkAuthPassword();
checkRegisterPassword();






