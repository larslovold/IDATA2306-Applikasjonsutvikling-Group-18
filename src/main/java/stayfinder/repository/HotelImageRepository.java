package stayfinder.repository;

import stayfinder.model.HotelImage;
import org.springframework.data.jpa.repository.JpaRepository;

public interface HotelImageRepository extends JpaRepository<HotelImage, Long> {
}
