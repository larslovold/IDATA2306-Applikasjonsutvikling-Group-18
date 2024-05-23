package stayfinder.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;

@Entity
public class Hotel {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long hotelID;
    private String name;
    private String address;
    private String website;
    private String phoneNumber;
    private String locationType;
    private String roomTypeAvailable;
    private String extraFeatures;
    private String description;

    // Getters and Setters
    public Long getHotelID() {
        return hotelID;
    }

    public void setHotelID(Long hotelID) {
        this.hotelID = hotelID;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getWebsite() {
        return website;
    }

    public void setWebsite(String website) {
        this.website = website;
    }

    public String getPhoneNumber() {
        return phoneNumber;
    }

    public void setPhoneNumber(String phoneNumber) {
        this.phoneNumber = phoneNumber;
    }

    public String getLocationType() {
        return locationType;
    }

    public void setLocationType(String locationType) {
        this.locationType = locationType;
    }

    public String getRoomTypeAvailable() {
        return roomTypeAvailable;
    }

    public void setRoomTypeAvailable(String roomTypeAvailable) {
        this.roomTypeAvailable = roomTypeAvailable;
    }

    public String getExtraFeatures() {
        return extraFeatures;
    }

    public void setExtraFeatures(String extraFeatures) {
        this.extraFeatures = extraFeatures;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }
}
