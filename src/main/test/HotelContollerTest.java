package com.example.demo;

import com.example.demo.controller.HotelController;
import com.example.demo.entity.Hotel;
import com.example.demo.repository.HotelRepository;
import org.junit.jupiter.api.Test;
import org.mockito.Mockito;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.autoconfigure.web.servlet.WebMvcTest;
import org.springframework.boot.test.mock.mockito.MockBean;
import org.springframework.test.web.servlet.MockMvc;
import org.springframework.test.web.servlet.request.MockMvcRequestBuilders;
import org.springframework.test.web.servlet.result.MockMvcResultMatchers;

import java.util.Arrays;

import static org.springframework.test.web.servlet.result.MockMvcResultHandlers.print;

@WebMvcTest(HotelController.class)
public class HotelControllerTest {

    @Autowired
    private MockMvc mockMvc;

    @MockBean
    private HotelRepository hotelRepository;

    @Test
    public void getAllHotelsTest() throws Exception {
        Hotel hotel1 = new Hotel();
        hotel1.setHotelID(1);
        hotel1.setName("Hotel One");

        Hotel hotel2 = new Hotel();
        hotel2.setHotelID(2);
        hotel2.setName("Hotel Two");

        Mockito.when(hotelRepository.findAll()).thenReturn(Arrays.asList(hotel1, hotel2));

        mockMvc.perform(MockMvcRequestBuilders.get("/hotels"))
                .andDo(print())
                .andExpect(MockMvcResultMatchers.status().isOk())
                .andExpect(MockMvcResultMatchers.jsonPath("$[0].name").value("Hotel One"))
                .andExpect(MockMvcResultMatchers.jsonPath("$[1].name").value("Hotel Two"));
    }

}
