package no.ntnu.hello;

import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.ManyToOne;

@Entity
public class Room {
    @Id
    private int roomId;
    @ManyToOne
    private Hotell hotell;
    private String roomType;
    private String price;
    private boolean availability;

    public Room(int roomId, int hotellid, String roomType, String price, boolean availability){
        this.roomId = roomId;
        this.hotell = new Hotell(hotellid,"","","","","");
        this.roomType = roomType;
        this.price = price;
        this.availability = availability;
    }

    public int getRoomId() {
        return roomId;
    }

    public void setRoomId(int roomId) {
        this.roomId = roomId;
    }

    public String getRoomType() {
        return roomType;
    }

    public void setRoomType(String roomType) {
        this.roomType = roomType;
    }

    public String getPrice() {
        return price;
    }

    public void setPrice(String price) {
        this.price = price;
    }

    public void setAvailability(boolean availability) {
        this.availability = availability;
    }
}
