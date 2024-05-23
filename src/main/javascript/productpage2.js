document.addEventListener('DOMContentLoaded', () => {
    // Sample data
    const rooms = [
        {
            name: 'Standard Room',
            description: 'A standard room with all modern amenities.',
            price: '$150 per night',
            image: '../resources/hotel1.jpg'
        },
        {
            name: 'Deluxe Room',
            description: 'A deluxe room with all modern amenities.',
            price: '$200 per night',
            image: '../resources/hotel3.jpg'
        },
        {
            name: 'Suite',
            description: 'A luxurious suite with a stunning view.',
            price: '$350 per night',
            image: '../resources/hotel2.jpg'
        }
    ];

    // Function to create a room card
    const createRoomCard = (room) => {
        const template = document.getElementById('room-template');
        const clone = template.cloneNode(true);
        clone.id = '';
        clone.style.display = 'flex'; // Make sure the cloned element is visible

        clone.querySelector('.room-image').src = room.image;
        clone.querySelector('.room-image').alt = room.name;
        clone.querySelector('.room-name').textContent = room.name;
        clone.querySelector('.room-description').textContent = room.description;
        clone.querySelector('.room-price').textContent = room.price;
        return clone;
    };

    // Function to create a review
    const createReview = (review) => {
        const template = document.getElementById('review-template');
        const clone = template.cloneNode(true);
        clone.id = '';
        clone.querySelector('.reviewer-name').textContent = review.name;
        clone.querySelector('.review-text').textContent = review.text;
        return clone;
    };

    const roomContainer = document.querySelector('.room-types');
    rooms.forEach(room => {
        roomContainer.appendChild(createRoomCard(room));
    });

    const reviewContainer = document.querySelector('.reviews');
    reviews.forEach(review => {
        reviewContainer.appendChild(createReview(review));
    });

    const roomTemplate = document.getElementById('room-template');
    roomTemplate.remove();


});
