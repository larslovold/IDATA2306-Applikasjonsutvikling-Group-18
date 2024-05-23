document.addEventListener("DOMContentLoaded", function() {
    fetch('http://localhost:8080/api/hotels')
        .then(response => response.json())
        .then(data => {
            const hotelsContainer = document.getElementById('hotelsContainer');
            data.forEach(hotel => {
                const div = document.createElement('div');
                div.innerHTML = `
                    <h2>${hotel.name}</h2>
                    <p>Address: ${hotel.address}</p>
                    <p>Phone: ${hotel.phoneNumber}</p>
                    <p>Website: <a href="${hotel.website}">${hotel.website}</a></p>
                    <p>Description: ${hotel.description}</p>
                `;
                hotelsContainer.appendChild(div);
            });
        })
        .catch(error => console.error('Error fetching hotels:', error));
});
