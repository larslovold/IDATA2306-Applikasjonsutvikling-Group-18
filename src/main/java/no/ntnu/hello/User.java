package no.ntnu.hello;

import jakarta.persistence.Entity;
import jakarta.persistence.Id;

@Entity
public class User {
    @Id
    private int userId;
    private String username;
    private String password;
    private String email;
    private int phonenumber;
    private boolean admin;

    public User(int userId, String username, String password, String email, int phonenumber, boolean admin){
        this.userId = userId;
        this.username = username;
        this.password = password;
        this.email = email;
        this.phonenumber = phonenumber;
        this.admin = admin;
    }

    public int getUserId() {
        return userId;
    }

    public void setUserId(int userId) {
        this.userId = userId;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public int getPhonenumber() {
        return phonenumber;
    }

    public void setPhonenumber(int phonenumber) {
        this.phonenumber = phonenumber;
    }

    public void setAdmin(boolean admin) {
        this.admin = admin;
    }
}
