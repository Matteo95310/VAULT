
const formulaire = document.querySelector('#form-ajout-carte');

formulaire.addEventListener('submit', function(event) {
    event.preventDefault();

    const donnees = new FormData(formulaire);

    fetch(formulaire.action, {
        method: 'POST',
        body: donnees
    })
    .then(reponse => reponse.json())
    .then(resultat => {
        if (resultat.success) {
    alert("Carte ajoutée avec succès !");
        } else {
    alert(resultat.message);
}
    })
    .catch(erreur => {
        alert("Une erreur est survenue.");
        console.error(erreur);
    });
});
