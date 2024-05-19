package no.ntnu.hello;

import jakarta.persistence.Entity;
import jakarta.persistence.Id;

@Entity
public class Hotel {
    @Id
    private int hotelId;
    private String hotelName;
    private String address;
    private float rating;
    private int phonenumber;
    private String Country;

    public Hotel(int hotelId, String hotelName, String address, float rating, int phonenumber, String country){
        this.hotelId = hotelId;
        this.hotelName = hotelName;
        this.address = address;
        this.rating = rating;
        this.phonenumber = phonenumber;
        this.Country = country;
    }

    public int getHotelId(){
        return hotelId;
    }

    public void setHotelId(int hotelId) {
        this.hotelId = hotelId;
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
