package no.ntnu.hello;

import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.ManyToOne;

@Entity
public class Favorite {
    @Id
    private int favoriteId;
    @ManyToOne
    private User user;
    @ManyToOne
    private Hotell hotell;

    public Favorite(){
    }

    public int getFavoriteId() {
        return favoriteId;
    }

    public void setFavoriteId(int favoriteId) {
        this.favoriteId = favoriteId;
    }

}
