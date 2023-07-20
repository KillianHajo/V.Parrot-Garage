// Filtre de Recherche véhicules d'occasions.


const product = [
    {
        id: 0,
        image: 'image/batterie.jpg',
        title: 'Batteries de voiture',
        price: 90,
        km: 'Nous contactez',
    },
    {
        id: 1,
        image: 'image/alternateur.webp',
        title: 'Alternateurs',
        price: 70,
        km: 'Nous contactez',
    },
    {
        id: 2,
        image: 'image/Démarreur.jpg',
        title: 'Démarreurs',
        price: 80,
        km: 'Nous contactez',
    },
    {
        id: 3,
        image: 'image/filtre.jpg',
        title: 'Filtres à air, à huile et à carburant',
        price: 40,
        km: 'Nous contactez',
    },
    {
        id: 4,
        image: 'image/plaquette.jpg',
        title: 'Plaquettes et disques de frein',
        price: 30,
        km: 'Nous contactez',
    },
    {
        id: 5,
        image: 'image/amortisseur.jpg',
        title: 'Amortisseurs et ressorts',
        price: 200,
        km: 'Nous contactez',
    },
    {
        id: 6,
        image: 'image/jante.webp',
        title: 'Pneus et jantes',
        price: 100,
        km: 'Nous contactez',
    },
    {
        id: 7,
        image: 'image/distrib.jpg',
        title: 'Courroies de distribution et courroies d\'accessoires',
        price: 40,
        km: 'Nous contactez',
    },
    {
        id: 8,
        image: 'image/fils-de-bougie.jpg',
        title: 'Bougies d\'allumage et fils de bougie',
        price: 100,
        km: 'Nous contactez',
    }
];

const categories = [...new Set(product.map((item) => { return item }))]

document.getElementById('searchBar').addEventListener('keyup', (e) => {
    const searchData = e.target.value.toLowerCase();
    const filteredData = categories.filter((item) => {
        return (
            item.title.toLowerCase().includes(searchData)
        )
    })
    displayItem(filteredData)
});

const displayItem = (items) => {
    document.getElementById('root1').innerHTML = items.map((item) => {
        var { image, title, price, km } = item;
        return (
            `<div class='box3'>
                <div class='img-box7'>
                    <img class='images4' src=${image}></img>
                </div> 
                <div class='bottom-shop'>
                    <p>${title}</p>
                    <h2>€ ${price}.00 </h2>
                    <p>${km}</p>
                    <a href="contact.php"><button class="shop-button-offer">Prendre Rendez-Vous</button></a>
                </div>
            </div>`
        )
    }).join('')
};
displayItem(categories);