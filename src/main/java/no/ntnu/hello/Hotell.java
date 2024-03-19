package no.ntnu.hello;

import jakarta.persistence.Entity;
import jakarta.persistence.Id;

@Entity
public class Hotell {
    @Id
    private int hotellId;
    private String hotelName;
    private String address;
    private float rating;
    private int phonenumber;
    private String Country;

    public Hotell(int hotellId, String hotelName, String address, float rating, int phonenumber, String country){
        this.hotellId = hotellId;
        this.hotelName = hotelName;
        this.address = address;
        this.rating = rating;
        this.phonenumber = phonenumber;
        this.Country = country;
    }
    public int getHotellId(){
        return hotellId;
    }

    public void setHotellId(int hotellId) {
        this.hotellId = hotellId;
    }

    public String getHotelName(){
        return hotelName;
    }

    public void setHotelName(String hotelName) {
        this.hotelName = hotelName;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public float getRating() {
        return rating;
    }

    public void setRating(float rating) {
        this.rating = rating;
    }

    public int getPhonenumber() {
        return phonenumber;
    }

    public void setPhonenumber(int phonenumber) {
        this.phonenumber = phonenumber;
    }

    public String getCountry() {
        return Country;
    }

    public void setCountry(String country) {
        Country = country;
    }
}
