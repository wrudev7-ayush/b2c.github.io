<!-- ================= FLIGHT DETAILS DROPDOWN (AJAX RENDER) ================= -->
<div class="flight-details-dropdown">
    <div class="expanded-details">
        <!-- ========== ONWARD FLIGHT ========== -->
        <div class="onward-flight-section">
            <div class="section-title">Onward Flight</div>
            <div class="detailed-flight-info">
                <div class="detailed-flight-content">
                    <div class="flight-main-row">
                        <!-- left -->
                        <div class="flight-left">
                            <div class="airline-header">
                                <div class="airline-logo-large">
                                    <img src="<?= base_url('template/images/americanAirline.jpg') ?>" alt="American Airlines">
                                </div>
                                <div class="airline-info">
                                    <div class="airline-name-large">American Airlines</div>
                                    <div class="flight-number-aircraft">AA569 | Boing 797</div>
                                </div>
                            </div>
                            <!-- timeline -->
                            <div class="flight-timeline">
                                <div class="timeline-content">
                                    <div class="departure-info">
                                        <div class="time-details">
                                            <div class="date-text">Jan, 16 wed</div>
                                            <div class="time-large">01:05</div>
                                            <div class="city-name">New York</div>
                                        </div>
                                        <div class="airport-name">John F. Kennedy International Airport, New York, USA</div>
                                        <div class="terminal-info">Terminal 2</div>
                                    </div>
                                    <div class="flight-duration-visual">
                                        <div class="duration-label">6h 20min</div>
                                        <div class="duration-line">
                                            <img src="<?= base_url('template/images/vectorFlight.png') ?>" class="duration-line-svg" alt="">
                                        </div>
                                    </div>
                                    <div class="arrival-info">
                                        <div class="time-details">
                                            <div class="date-text">Jan, 17 wed</div>
                                            <div class="time-large">02:00</div>
                                            <div class="city-name">Dubai</div>
                                        </div>
                                        <div class="airport-name">Dubai International Airport, Dubai, UAE</div>
                                        <div class="terminal-info">Terminal 3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right -->
                        <div class="flight-right">
                            <div class="baggage-section">
                                <div class="baggage-title">
                                    <i class="fa-solid fa-suitcase-rolling"></i> Baggage
                                </div>
                                <div class="baggage-box">
                                    <div class="bag-item">
                                        <div class="bag-label">
                                            <img src="<?= base_url('template/images/icons/CabinBag.png') ?>" alt="Seats" class="seat-icon" />
                                        </div>
                                        <div class="bag-weight">20 kg</div>
                                    </div>
                                    <div class="bag-item">
                                        <div class="bag-label">
                                            <img src="<?= base_url('template/images/icons/TrollyBag.png') ?>" alt="Seats" class="seat-icon" />
                                        </div>
                                        <div class="bag-weight">07 kg</div>
                                    </div>
                                </div>
                            </div>
                            <div class="seats-info">
                                <span class="seat-icon">
                                    <img src="<?= base_url('template/images/icons/FlightSeat.png') ?>" alt="">
                                </span>
                                <span class="seat-text">Seats: 12</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Layover pill -->
            <div class="layover-pill-border">
                <div class="layover-pill">
                    <span>Change of Flight</span>
                    <span class="dot">•</span>
                    <span>layover of 2hrs in Kolkata</span>
                    <span class="dot">•</span>
                    <span>Self Transfer</span>
                </div>
            </div>
            <!-- 2nd onward leg -->
            <div class="detailed-flight-info">
                <div class="detailed-flight-content">
                    <div class="flight-main-row">
                        <!-- left -->
                        <div class="flight-left">
                            <div class="airline-header">
                                <div class="airline-logo-large">
                                    <img src="<?= base_url('template/images/americanAirline.jpg') ?>" alt="American Airlines">
                                </div>
                                <div class="airline-info">
                                    <div class="airline-name-large">American Airlines</div>
                                    <div class="flight-number-aircraft">AA569 | Boing 797</div>
                                </div>
                            </div>
                            <div class="flight-timeline">
                                <div class="timeline-content">
                                    <div class="departure-info">
                                        <div class="time-details">
                                            <div class="date-text">Jan, 17 wed</div>
                                            <div class="time-large">03:45</div>
                                            <div class="city-name">Dubai</div>
                                        </div>
                                        <div class="airport-name">Dubai International Airport, Dubai, UAE</div>
                                        <div class="terminal-info">Terminal 3</div>
                                    </div>
                                    <div class="flight-duration-visual">
                                        <div class="duration-label">6h 20min</div>
                                        <div class="duration-line">
                                            <img src="<?= base_url('template/images/vectorFlight.png') ?>" class="duration-line-svg" alt="">
                                        </div>
                                    </div>
                                    <div class="arrival-info">
                                        <div class="time-details">
                                            <div class="date-text">Jan, 17 wed</div>
                                            <div class="time-large">08:15</div>
                                            <div class="city-name">Tokyo</div>
                                        </div>
                                        <div class="airport-name">Tokyo Haneda Airport, Tokyo, Japan</div>
                                        <div class="terminal-info">Terminal 2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right -->
                        <div class="flight-right">
                            <div class="baggage-section">
                                <div class="baggage-title">
                                    <i class="fa-solid fa-suitcase-rolling"></i> Baggage
                                </div>
                                <div class="baggage-box">
                                    <div class="bag-item">
                                        <div class="bag-label">
                                            <img src="<?= base_url('template/images/icons/CabinBag.png') ?>" alt="Seats" class="seat-icon" />
                                        </div>
                                        <div class="bag-weight">20 kg</div>
                                    </div>
                                    <div class="bag-item">
                                        <div class="bag-label">
                                            <img src="<?= base_url('template/images/icons/TrollyBag.png') ?>" alt="Seats" class="seat-icon" />
                                        </div>
                                        <div class="bag-weight">07 kg</div>
                                    </div>
                                </div>
                            </div>
                            <div class="seats-info">
                                <span class="seat-icon">
                                    <img src="<?= base_url('template/images/icons/FlightSeat.png') ?>" alt="">
                                </span>
                                <span class="seat-text">Seats: 12</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /onward-flight-section -->
        <!-- ========== RETURN FLIGHT ========== -->
        <div class="return-flight-section">
            <div class="section-title return-title">Return Flight</div>
            <div class="detailed-flight-info">
                <div class="detailed-flight-content">
                    <div class="flight-main-row">
                        <!-- left -->
                        <div class="flight-left">
                            <div class="airline-header">
                                <div class="airline-logo-large">
                                    <img src="<?= base_url('template/images/americanAirline.jpg') ?>" alt="American Airlines">
                                </div>
                                <div class="airline-info">
                                    <div class="airline-name-large">American Airlines</div>
                                    <div class="flight-number-aircraft">AA569 | Boing 797</div>
                                </div>
                            </div>
                            <div class="flight-timeline">
                                <div class="timeline-content">
                                    <div class="departure-info">
                                        <div class="time-details">
                                            <div class="date-text">Jan, 16 wed</div>
                                            <div class="time-large">01:05</div>
                                            <div class="city-name">Tokyo</div>
                                        </div>
                                        <div class="airport-name">Tokyo Haneda Airport, Tokyo, Japan</div>
                                        <div class="terminal-info">Terminal 2</div>
                                    </div>
                                    <div class="flight-duration-visual">
                                        <div class="duration-label">6h 20min</div>
                                        <div class="duration-line">
                                            <img src="<?= base_url('template/images/vectorFlight.png') ?>" class="duration-line-svg" alt="">
                                        </div>
                                    </div>
                                    <div class="arrival-info">
                                        <div class="time-details">
                                            <div class="date-text">Jan, 17 wed</div>
                                            <div class="time-large">08:15</div>
                                            <div class="city-name">New York</div>
                                        </div>
                                        <div class="airport-name">John F. Kennedy International Airport, New York, USA</div>
                                        <div class="terminal-info">Terminal 3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right -->
                        <div class="flight-right">
                            <div class="baggage-section">
                                <div class="baggage-title">
                                    <i class="fa-solid fa-suitcase-rolling"></i> Baggage
                                </div>
                                <div class="baggage-box">
                                    <div class="bag-item">
                                        <div class="bag-label">
                                            <img src="<?= base_url('template/images/icons/CabinBag.png') ?>" alt="Seats" class="seat-icon" />
                                        </div>
                                        <div class="bag-weight">20 kg</div>
                                    </div>
                                    <div class="bag-item">
                                        <div class="bag-label">
                                            <img src="<?= base_url('template/images/icons/TrollyBag.png') ?>" alt="Seats" class="seat-icon" />
                                        </div>
                                        <div class="bag-weight">07 kg</div>
                                    </div>
                                </div>
                            </div>
                            <div class="seats-info">
                                <span class="seat-icon">
                                    <img src="<?= base_url('template/images/icons/FlightSeat.png') ?>" alt="">
                                </span>
                                <span class="seat-text">Seats: 12</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /return-flight-section -->
    </div>
</div>