<style>
  body {
    overflow-x: hidden;
  }

  .main-container {
    padding-top: 0px !important;
  }
</style>
<?= $this->extend('user/layout/template') ?>
<!-- PAGE CSS -->
<?= $this->section('styles') ?>
<link
  href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700&family=Outfit:wght@500;600&family=Manrope:wght@400;500;600&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url('template/css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('template/css/fare_list.css') ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<?= $this->endSection() ?>

<!-- PAGE BODY -->
<?= $this->section('content') ?>
<main class="main-container">
  <div class="container-fluid px-5">
    <div class="content-wrapper">
      <!-- <section class="promotions-section mb-4">
        <div class="search-bar-wrapper">
          <div class="search-bar">
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex align-items-end gap-5">
                <div class="flight-info">
                  <div class="d-flex align-items-start gap-2 mb-2">
                    <img
                      src="/vector.svg"
                      alt="Flight"
                      class="flight-icon" />
                    <span class="trip-type">One Way Trip</span>
                  </div>
                  <div class="trip-details">
                    Hyderabad (HYD) to Delhi (DEL), 1 Traveller, Economy
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center gap-3">
                <div class="departure-info">
                  <div class="d-flex align-items-center gap-2 mb-1">
                    <i class="bi bi-calendar"></i>
                    <span class="departure-label">Departure</span>
                  </div>
                  <div class="departure-date">Fri, 22 Aug</div>
                </div>
                <button class="btn btn-light search-btn">
                  <span class="search-btn-text">Search</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <div class="container-fluid FlightSearchTabbingSection">
        <!-- <div class="trip-tabs">
        <div class="trip-tab active">One Way</div>
        <div class="trip-tab">Round Trip</div>
        <div class="trip-tab">Multi City</div>
    </div> -->
        <!-- MAIN SEARCH result BAR and modify search -->
        <div class="search-bar">
          <div class="trip-info">
            <div class="title"><i class="fa-solid fa-plane" aria-hidden="true"></i> One Way Trip</div>
            <div class="subtitle">
              <span>Hyderabad (HYD) to Delhi (DEL),</span>
              <br>
              <span>
                1 Traveller, Economy
              </span>

            </div>
          </div>
          <div class="right-section">
            <div class="departure-box">
              <div class="label"><i class="fa-regular fa-calendar" aria-hidden="true"></i> Departure</div>
              <div class="date">Fri, 22 Aug</div>
            </div>
            <!-- <button class="search-btn">Search</button> -->
          </div>
        </div>
      </div>
      <section class="flight-options-section">
        <div class="filter-checkboxes mb-4">
          <div class="form-check form-check-inline filter-checkbox">
            <input class="form-check-input" type="checkbox" id="cabinBag" />
            <label class="form-check-label" for="cabinBag">Cabin Bag</label>
          </div>
          <div class="form-check form-check-inline filter-checkbox">
            <input class="form-check-input" type="checkbox" id="checkedBag" />
            <label class="form-check-label" for="checkedBag">Checked Bag</label>
          </div>
        </div>

        <div class="row g-4">
          <div class="col-lg-7">
            <div class="flight-providers">
              <div class="card provider-card mb-3">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-4">
                    <div class="provider-logo-section">
                      <img src="<?= base_url('template/images/conformation page/gobigo.png') ?>" alt="Goibbibo"
                        class="provider-logo" />
                      <h3 class="provider-name">Goibbibo</h3>
                      <div class="provider-rating">
                        <div class="d-flex align-items-center gap-2">
                          <img src="<?= base_url('template/images/conformation page/Star 1.png') ?>" alt="Star"
                            class="star-icon" />
                          <span class="rating-value">4.8/5</span>
                        </div>
                        <span class="rating-count">16,391</span>
                      </div>
                    </div>

                    <div class="flex-grow-1">
                      <div class="provider-features">
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/caller.png') ?>" alt="Support"
                            class="feature-icon iconImg" />
                          <p class="feature-text">24/7 customer support</p>
                        </div>
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/discount.png') ?>" alt="Discount"
                            class="feature-icon iconImg" />
                          <p class="feature-text">
                            Additional discounts of up to 20% may be
                            available using Exclusive code MMTSKYSUPER (for
                            international flights only)*
                          </p>
                        </div>
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/terms.png') ?>" alt="Terms"
                            class="feature-icon iconImg" />
                          <p class="feature-text">
                            Partner's Terms and Conditions applicable.
                          </p>
                        </div>
                      </div>
                      <button class="btn btn-link more-fares-btn" data-bs-toggle="modal" data-bs-target="#fareModal">
                        More Fares
                      </button>
                      <div class="modal fade" id="fareModal" tabindex="-1">
                        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                          <div class="modal-content rounded-4">

                            <div class="modal-header border-0">
                              <h5 class="modal-title fw-bold">Fare options for Flightnetwork</h5>
                              <button type="button" class="btn-close close-btn" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="fare-option-border-bottom">
                            <div  class="fare-options-card d-flex align-items-center justify-content-between">

                              <!-- Left -->
                              <div>
                                <div class="fare-options-route">New York - Tokyo</div>
                                <div class="fare-options-meta">Jan, 16 Wed • 1 Stop • 12h 30m • Economy</div>
                              </div>

                              <!-- Divider -->
                              <div class="fare-options-divider mx-4"></div>

                              <!-- Right -->
                              <div class="d-flex align-items-center">
                                <img
                                  src="<?= base_url('template/images/americanAirline.jpg') ?>"
                                  class="fare-options-logo me-3">
                                <div>
                                  <div class="fare-options-airline-name">American Airlines</div>
                                  <div class="fare-options-airline-meta">AA569 | Boeing 797</div>
                                </div>
                              </div>

                            </div>
                            </div>

                            <div class="modal-body">

                              <div class="fare-wrapper p-0 rounded-4">

                                <!-- Swiper -->
                                <div class="swiper fareSwiper">
                                  <div class="swiper-wrapper">

                                    <!-- Card -->
                                    <div class="swiper-slide">
                                      <div class="fare-card" data-price="14783">
                                        <div class="card-body">
                                          <div class="top-row">
                                            <h6 class="top-class-title">Economy Class</h6>
                                            <div class="em-class-price-details">
                                              <span class="price">₹ 14,783</span>
                                              <span class="total">Total ₹15,220</span>
                                            </div>
                                          </div>

                                          <h6 class="section-title">Baggage</h6>
                                          <p>1 cabin bag<br>1 checked bag (15kg)</p>

                                          <h6 class="section-title">Flexibility</h6>
                                          <p>Extra fee for seat selection<br>Extra fee for booking changes</p>

                                          <h6 class="section-title">Seats, Meals & More</h6>
                                          <p>Chargeable seats<br>Meals info not available</p>
                                        </div>

                                        <button class="btn select-btn">Select</button>
                                      </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="swiper-slide">
                                      <div class="fare-card" data-price="14783">
                                        <div class="card-body">
                                          <div class="top-row">
                                            <h6 class="top-class-title">Economy Class</h6>
                                            <div class="em-class-price-details">
                                              <span class="price">₹ 14,783</span>
                                              <span class="total">Total ₹15,220</span>
                                            </div>
                                          </div>

                                          <h6 class="section-title">Baggage</h6>
                                          <p>1 cabin bag<br>1 checked bag (15kg)</p>

                                          <h6 class="section-title">Flexibility</h6>
                                          <p>Extra fee for seat selection<br>Extra fee for booking changes</p>

                                          <h6 class="section-title">Seats, Meals & More</h6>
                                          <p>Chargeable seats<br>Meals info not available</p>
                                        </div>

                                        <button class="btn select-btn">Select</button>
                                      </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="swiper-slide">
                                      <div class="fare-card" data-price="14783">
                                        <div class="card-body">
                                          <div class="top-row">
                                            <h6 class="top-class-title">Economy Class</h6>
                                            <div class="em-class-price-details">
                                              <span class="price">₹ 14,783</span>
                                              <span class="total">Total ₹15,220</span>
                                            </div>
                                          </div>

                                          <h6 class="section-title">Baggage</h6>
                                          <p>1 cabin bag<br>1 checked bag (15kg)</p>

                                          <h6 class="section-title">Flexibility</h6>
                                          <p>Extra fee for seat selection<br>Extra fee for booking changes</p>

                                          <h6 class="section-title">Seats, Meals & More</h6>
                                          <p>Chargeable seats<br>Meals info not available</p>
                                        </div>

                                        <button class="btn select-btn">Select</button>
                                      </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="swiper-slide">
                                      <div class="fare-card" data-price="14783">
                                        <div class="card-body">
                                          <div class="top-row">
                                            <h6 class="top-class-title">Economy Class</h6>
                                            <div class="em-class-price-details">
                                              <span class="price">₹ 14,783</span>
                                              <span class="total">Total ₹15,220</span>
                                            </div>
                                          </div>

                                          <h6 class="section-title">Baggage</h6>
                                          <p>1 cabin bag<br>1 checked bag (15kg)</p>

                                          <h6 class="section-title">Flexibility</h6>
                                          <p>Extra fee for seat selection<br>Extra fee for booking changes</p>

                                          <h6 class="section-title">Seats, Meals & More</h6>
                                          <p>Chargeable seats<br>Meals info not available</p>
                                        </div>

                                        <button class="btn select-btn">Select</button>
                                      </div>
                                    </div>
                                    <!-- Card -->
                                    <div class="swiper-slide">
                                      <div class="fare-card" data-price="14783">
                                        <div class="card-body">
                                          <div class="top-row">
                                            <h6 class="top-class-title">Economy Class</h6>
                                            <div class="em-class-price-details">
                                              <span class="price">₹ 14,783</span>
                                              <span class="total">Total ₹15,220</span>
                                            </div>
                                          </div>

                                          <h6 class="section-title">Baggage</h6>
                                          <p>1 cabin bag<br>1 checked bag (15kg)</p>

                                          <h6 class="section-title">Flexibility</h6>
                                          <p>Extra fee for seat selection<br>Extra fee for booking changes</p>

                                          <h6 class="section-title">Seats, Meals & More</h6>
                                          <p>Chargeable seats<br>Meals info not available</p>
                                        </div>

                                        <button class="btn select-btn">Select</button>
                                      </div>
                                    </div>

                                    <!-- Card -->
                                    <div class="swiper-slide">
                                      <div class="fare-card featured" data-price="9616">
                                        <div class="card-body">
                                          <div class="top-row">
                                            <h6 class="top-class-title">Economy Class</h6>
                                            <div class="em-class-price-details">
                                              <span class="price">₹ 14,783</span>
                                              <span class="total">Total ₹15,220</span>
                                            </div>
                                          </div>

                                          <h6 class="section-title">Baggage</h6>
                                          <p>1 cabin bag<br>1 checked bag (15kg)</p>

                                          <h6 class="section-title">Flexibility</h6>
                                          <p>Cancellation fee starts at ₹2,500</p>

                                          <h6 class="section-title">Seats, Meals & More</h6>
                                          <p>Chargeable seats<br>Meals info not available</p>
                                        </div>

                                        <button class="btn select-btn">Select</button>
                                      </div>
                                    </div>

                                    <!-- Card -->
                                    <div class="swiper-slide">
                                      <div class="fare-card" data-price="9788">
                                        <div class="card-body">
                                          <div class="top-row">
                                            <h6 class="top-class-title">Economy Class</h6>
                                            <div class="em-class-price-details">
                                              <span class="price">₹ 14,783</span>
                                              <span class="total">Total ₹15,220</span>
                                            </div>
                                          </div>

                                          <h6 class="section-title">Baggage</h6>
                                          <p>1 cabin bag<br>1 checked bag (15kg)</p>

                                          <h6 class="section-title">Flexibility</h6>
                                          <p>Extra fee for seat selection</p>

                                          <h6 class="section-title">Seats, Meals & More</h6>
                                          <p>Free seats<br>Complimentary meals</p>
                                        </div>

                                        <button class="btn select-btn">Select</button>
                                      </div>
                                    </div>

                                  </div>
                                </div>

                              </div>

                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="baggage-info">
                        <div class="baggage-item baggage-info-item">
                          <div class="d-flex align-items-center gap-1">
                            <img src="<?= base_url('template/images/conformation page/include.png') ?>" alt="Included"
                              class="check-icon" />
                            <span class="included-text">Included</span>
                          </div>
                          <img src="<?= base_url('template/images/conformation page/include-bags.png') ?>"
                            alt="Cabin Bag" class="baggage-icon feature-icon iconImg" />
                        </div>
                        <div class="baggage-item baggage-info-item">
                          <div class="d-flex align-items-center gap-1">
                            <img src="<?= base_url('template/images/conformation page/include.png') ?>" alt="Included"
                              class="check-icon" />
                            <span class="included-text">Included</span>
                          </div>
                          <img src="<?= base_url('template/images/conformation page/Trolly bag.png') ?>"
                            alt="Checked Bag" class="baggage-icon feature-icon iconImg" />
                        </div>
                      </div>
                    </div>

                    <div class="vr"></div>

                    <div class="pricing-section">
                      <div class="price-details">
                        <span class="total-price">Total ₹15,220</span>
                        <div class="discounted-price">
                          <!-- <span class="currency">₹ </span> -->
                          <span class="price-value"><span class="currency">₹ </span>14,783</span>
                        </div>
                      </div>
                      <button class="btn btn-primary select-btn">
                        Select
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card provider-card mb-3">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-4">
                    <div class="provider-logo-section">
                      <img src="<?= base_url('template/images/conformation page/Makemytrip_logo 1.png') ?>"
                        alt="Makemytrip" class="provider-logo" />
                      <h3 class="provider-name">Makemytrip</h3>
                      <div class="provider-rating">
                        <div class="d-flex align-items-center gap-2">
                          <img src="<?= base_url('template/images/conformation page/Star 1.png') ?>" alt="Star"
                            class="star-icon" />
                          <span class="rating-value">4.8/5</span>
                        </div>
                        <span class="rating-count">16,391</span>
                      </div>
                    </div>

                    <div class="flex-grow-1">
                      <div class="provider-features">
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/caller.png') ?>" alt="Support"
                            class="feature-icon iconImg" />
                          <p class="feature-text">24/7 customer support</p>
                        </div>
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/discount.png') ?>" alt="Discount"
                            class="feature-icon iconImg" />
                          <p class="feature-text">
                            Additional discounts of up to 20% may be
                            available using Exclusive code MMTSKYSUPER (for
                            international flights only)*
                          </p>
                        </div>
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/terms.png') ?>" alt="Terms"
                            class="feature-icon iconImg" />
                          <p class="feature-text">
                            Partner's Terms and Conditions applicable.
                          </p>
                        </div>
                      </div>
                      <button class="btn btn-link more-fares-btn">
                        More Fares
                      </button>

                      <div class="baggage-info">
                        <div class="baggage-item baggage-info-item">
                          <div class="d-flex align-items-center gap-1">
                            <img src="<?= base_url('template/images/conformation page/include.png') ?>" alt="Included"
                              class="check-icon" />
                            <span class="included-text">Included</span>
                          </div>
                          <img src="<?= base_url('template/images/conformation page/include-bags.png') ?>"
                            alt="Cabin Bag" class="baggage-icon feature-icon iconImg" />
                        </div>
                        <div class="baggage-item baggage-info-item">
                          <div class="d-flex align-items-center gap-1">
                            <img src="<?= base_url('template/images/conformation page/include.png') ?>" alt="Included"
                              class="check-icon" />
                            <span class="included-text">Included</span>
                          </div>
                          <img src="<?= base_url('template/images/conformation page/Trolly bag.png') ?>"
                            alt="Checked Bag" class="baggage-icon feature-icon iconImg" />
                        </div>
                      </div>
                    </div>

                    <div class="vr"></div>

                    <div class="pricing-section">
                      <div class="price-details">
                        <span class="total-price">Total ₹15,220</span>
                        <div class="discounted-price">
                          <span class="price-value"><span class="currency">₹ </span> 14,783</span>
                        </div>
                      </div>
                      <button class="btn btn-primary select-btn">
                        Select
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card provider-card mb-3">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-4">
                    <div class="provider-logo-section">
                      <img src="<?= base_url('template/images/conformation page/Yatra_logo.svg (1) 1.png') ?>"
                        alt="Yatra.com" class="provider-logo" />
                      <h3 class="provider-name">Yatra.com</h3>
                      <div class="provider-rating">
                        <div class="d-flex align-items-center gap-2">
                          <img src="<?= base_url('template/images/conformation page/Star 1.png') ?>" alt="Star"
                            class="star-icon" />
                          <span class="rating-value">4.8/5</span>
                        </div>
                        <span class="rating-count">16,391</span>
                      </div>
                    </div>

                    <div class="flex-grow-1">
                      <div class="provider-features">
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/caller.png') ?>" alt="Support"
                            class="feature-icon iconImg" />
                          <p class="feature-text">24/7 customer support</p>
                        </div>
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/discount.png') ?>" alt="Discount"
                            class="feature-icon iconImg" />
                          <p class="feature-text">
                            Additional discounts of up to 20% may be
                            available using Exclusive code MMTSKYSUPER (for
                            international flights only)*
                          </p>
                        </div>
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/terms.png') ?>" alt="Terms"
                            class="feature-icon iconImg" />
                          <p class="feature-text">
                            Partner's Terms and Conditions applicable.
                          </p>
                        </div>
                      </div>
                      <button class="btn btn-link more-fares-btn">
                        More Fares
                      </button>

                      <div class="baggage-info">
                        <div class="baggage-item baggage-info-item">
                          <div class="d-flex align-items-center gap-1">
                            <img src="<?= base_url('template/images/conformation page/include.png') ?>" alt="Included"
                              class="check-icon" />
                            <span class="included-text">Included</span>
                          </div>
                          <img src="<?= base_url('template/images/conformation page/include-bags.png') ?>"
                            alt="Cabin Bag" class="baggage-icon feature-icon iconImg" />
                        </div>
                        <div class="baggage-item baggage-info-item">
                          <div class="d-flex align-items-center gap-1">
                            <img src="<?= base_url('template/images/conformation page/include.png') ?>" alt="Included"
                              class="check-icon" />
                            <span class="included-text">Included</span>
                          </div>
                          <img src="<?= base_url('template/images/conformation page/Trolly bag.png') ?>"
                            alt="Checked Bag" class="baggage-icon feature-icon iconImg" />
                        </div>
                      </div>
                    </div>

                    <div class="vr"></div>

                    <div class="pricing-section">
                      <div class="price-details">
                        <span class="total-price">Total ₹15,220</span>
                        <div class="discounted-price">
                          <!-- <span class="currency">₹ </span> -->
                          <span class="price-value"><span class="currency">₹ </span>14,783</span>
                        </div>
                      </div>
                      <button class="btn btn-primary select-btn">
                        Select
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card provider-card mb-3">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-4">
                    <div class="provider-logo-section">
                      <img src="<?= base_url('template/images/conformation page/gobigo.png') ?>" alt="Goibbibo"
                        class="provider-logo" />
                      <h3 class="provider-name">Goibbibo</h3>
                      <div class="provider-rating">
                        <div class="d-flex align-items-center gap-2">
                          <img src="<?= base_url('template/images/conformation page/Star 1.png') ?>" alt="Star"
                            class="star-icon" />
                          <span class="rating-value">4.8/5</span>
                        </div>
                        <span class="rating-count">16,391</span>
                      </div>
                    </div>

                    <div class="flex-grow-1">
                      <div class="provider-features">
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/caller.png') ?>" alt="Support"
                            class="feature-icon iconImg"/>
                          <p class="feature-text">24/7 customer support</p>
                        </div>
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/discount.png') ?>" alt="Discount"
                            class="feature-icon iconImg"/>
                          <p class="feature-text">
                            Additional discounts of up to 20% may be
                            available using Exclusive code MMTSKYSUPER (for
                            international flights only)*
                          </p>
                        </div>
                        <div class="feature-item">
                          <img src="<?= base_url('template/images/conformation page/terms.png') ?>" alt="Terms"
                            class="feature-icon iconImg"/>
                          <p class="feature-text">
                            Partner's Terms and Conditions applicable.
                          </p>
                        </div>
                      </div>
                      <button class="btn btn-link more-fares-btn">
                        More Fares
                      </button>

                      <div class="baggage-info">
                        <div class="baggage-item baggage-info-item">
                          <div class="d-flex align-items-center gap-1">
                            <img src="<?= base_url('template/images/conformation page/include.png') ?>" alt="Included"
                              class="check-icon" />
                            <span class="included-text">Included</span>
                          </div>
                          <img src="<?= base_url('template/images/conformation page/include-bags.png') ?>"
                            alt="Cabin Bag" class="feature-icon iconImg" />
                        </div>
                        <div class="baggage-item baggage-info-item">
                          <div class="d-flex align-items-center gap-1">
                            <img src="<?= base_url('template/images/conformation page/include.png') ?>" alt="Included"
                              class="check-icon" />
                            <span class="included-text">Included</span>
                          </div>
                          <img src="<?= base_url('template/images/conformation page/Trolly bag.png') ?>"
                            alt="Checked Bag" class="baggage-icon feature-icon iconImg" />
                        </div>
                      </div>
                    </div>

                    <div class="vr"></div>

                    <div class="pricing-section">
                      <div class="price-details">
                        <span class="total-price">Total ₹15,220</span>
                        <div class="discounted-price">
                          <span class="price-value"><span class="currency">₹ </span>14,783</span>
                        </div>
                      </div>
                      <button class="btn btn-primary select-btn">
                        Select
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="flight-details-sidebar">
              <div class="card flight-details-card mb-3">
                <div class="card-body">
                  <header class="flight-header">
                    <h2 class="flight-route">New York - Tokyo</h2>
                    <p class="flight-meta">
                      Jan, 16 Wed • 1 Stop • 12h 30m • Economy
                    </p>
                  </header>

                  <div class="flight-segments">
                    <div class="flight-segment">
                      <div class="d-flex gap-3 mb-3">
                        <div class="airline-info">
                          <div class="airline-logo-wrapper">
                            <img src="<?= base_url('template/images/conformation page/American Airlines - jpeg.png') ?>"
                              alt="" class="airline-logo" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h3 class="airline-name">American Airlines</h3>
                          <p class="flight-number">AA569 | Boing 797</p>
                        </div>
                      </div>

                      <div class="d-flex gap-3 ">
                        <div class="flex-grow-1 d-flex">
                          <div class="flight-time-info">
                            <div class="departure-info-detail">
                              <time class="flight-date">Jan, 16 wed</time>
                              <time class="flight-time">01:05</time>
                              <span class="flight-city">New York</span>
                            </div>
                            <p class="airport-address">
                              John F. Kennedy International Airport, New
                              York, USA
                            </p>
                            <span class="terminal-info">Terminal 2</span>
                          </div>

                          <div class="flight-duration-wrapper">
                            <span class="duration-text">6h 20min</span>
                            <div class="flight-path">
                              <!-- <img src="/vector-9.svg" alt="Path" class="path-line"> -->
                              <img src="<?= base_url('template/images/conformation page/connected-flights.png') ?>"
                                alt="Flight" class="flight-icon-small" />
                            </div>
                          </div>

                          <div class="flight-time-info">
                            <div class="arrival-info-detail">
                              <time class="flight-date">Jan, 17 wed</time>
                              <time class="flight-time">02:00</time>
                              <span class="flight-city">Dubai</span>
                            </div>
                            <p class="airport-address">
                              Dubai International Airport, Dubai, UAE
                            </p>
                            <span class="terminal-info">Terminal 3</span>
                          </div>
                        </div>

                        <div class="baggage-seats-info">
                          <div class="baggage-section mb-3">
                            <div class="d-flex align-items-center gap-2 mb-2">
                              <img src="<?= base_url('template/images/conformation page/Trolly bag.png') ?>"
                                alt="Baggage" class="baggage-label-icon iconImg" />
                              <span class="baggage-label">Baggage</span>
                            </div>
                            <div class="baggage-details">
                              <div class="baggage-detail-item">
                                <img src="<?= base_url('template/images/conformation page/Trolly bag.png') ?>"
                                  alt="Checked" class="baggage-type-icon iconImg" />
                                <span class="baggage-weight">20 kg</span>
                              </div>
                              <hr class="my-1" />
                              <div class="baggage-detail-item">
                                <img src="<?= base_url('template/images/conformation page/Cabin bag.png') ?>"
                                  alt="Cabin" class="baggage-type-icon iconImg" />
                                <span class="baggage-weight">07 kg</span>
                              </div>
                            </div>
                          </div>
                          <div class="seats-section">
                            <img src="<?= base_url('template/images/conformation page/Seat.png') ?>" alt="Seats"
                              class="seat-icon iconImg" />
                            <span class="seats-text">Seats: 12</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- <div class="layover-badge">
                      <hr class="flex-grow-1" />
                      <span class="badge layover-text">Change of Flight • layover of 2hrs in Kolkata •
                        Self Transfer</span>
                      <hr class="flex-grow-1" />
                    </div> -->
                    <!-- Layover pill -->
                    <div class="layover-pill-border layover-pill-spacing">
                      <div class="booking-page-layover-pill">
                        <span>Change of Flight</span>
                        <span class="dot">•</span>
                        <span>layover of 2hrs in Kolkata</span>
                        <span class="dot">•</span>
                        <span>Self Transfer</span>
                      </div>
                    </div>

                    <div class="flight-segment">
                      <div class="d-flex gap-3 mb-3">
                        <div class="airline-info">
                          <div class="airline-logo-wrapper">
                            <img src="<?= base_url('template/images/conformation page/American Airlines - jpeg.png') ?>"
                              alt="" class="airline-logo" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h3 class="airline-name">American Airlines</h3>
                          <p class="flight-number">AA569 | Boing 797</p>
                        </div>
                      </div>

                      <div class="d-flex gap-3">
                        <div class="flex-grow-1 d-flex">
                          <div class="flight-time-info">
                            <div class="departure-info-detail">
                              <time class="flight-date">Jan, 17 wed</time>
                              <time class="flight-time">03:45</time>
                              <span class="flight-city">Dubai</span>
                            </div>
                            <address class="airport-address">
                              Dubai International Airport, Dubai, UAE
                            </address>
                            <span class="terminal-info">Terminal 3</span>
                          </div>

                          <div class="flight-duration-wrapper">
                            <span class="duration-text">6h 20min</span>
                            <div class="flight-path">
                              <!-- <img src="<?= base_url('template/images/conformation page/connected-flights.png"') ?> alt="Path" class="path-line"> -->
                              <img src="<?= base_url('template/images/conformation page/connected-flights.png') ?>"
                                alt="Flight" class="flight-icon-small" />
                            </div>
                          </div>

                          <div class="flight-time-info">
                            <div class="arrival-info-detail">
                              <time class="flight-date">Jan, 17 wed</time>
                              <time class="flight-time">08:15</time>
                              <span class="flight-city">Tokyo</span>
                            </div>
                            <address class="airport-address">
                              Tokyo Haneda Airport, Tokyo, Japan
                            </address>
                            <span class="terminal-info">Terminal 2</span>
                          </div>
                        </div>

                        <div class="baggage-seats-info">
                          <div class="baggage-section mb-3">
                            <div class="d-flex align-items-center gap-2 mb-2">
                              <img src="<?= base_url('template/images/conformation page/Trolly bag.png') ?>"
                                alt="Baggage" class="baggage-label-icon iconImg" />
                              <span class="baggage-label">Baggage</span>
                            </div>
                            <div class="baggage-details">
                              <div class="baggage-detail-item">
                                <img src="<?= base_url('template/images/conformation page/Trolly bag.png') ?>"
                                  alt="Checked" class="baggage-type-icon iconImg" />
                                <span class="baggage-weight">20 kg</span>
                              </div>
                              <hr class="my-1" />
                              <div class="baggage-detail-item">
                                <img src="<?= base_url('template/images/conformation page/Cabin bag.png') ?>"
                                  alt="Cabin" class="baggage-type-icon iconImg" />
                                <span class="baggage-weight">07 kg</span>
                              </div>
                            </div>
                          </div>
                          <div class="seats-section">
                            <!-- <img src="<?= base_url('template/images/conformation page/Seat.png') ?>"
                              alt="Seats"
                              class="seat-icon" /> -->
                            <span class="seats-text"><img src="<?= base_url('template/images/icons/Seat.png') ?>"
                                alt="">Seats: 12</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="promotional-image">
              <img src="<?= base_url('template/images/conformation page/promotion.png') ?>" alt="Promotion"
                class="rounded" />
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>
<script>
  document.addEventListener("DOMContentLoaded", () => {

    /* Swiper */
    const swiper = new Swiper(".fareSwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      grabCursor: true,
      speed: 700,
      breakpoints: {
        768: { slidesPerView: 2 },
        1200: { slidesPerView: 3 }
      }
    });

    /* Card Selection */
    document.querySelectorAll(".fare-card").forEach(card => {
      card.querySelector(".select-btn").addEventListener("click", () => {
        document.querySelectorAll(".fare-card").forEach(c => c.classList.remove("active"));
        card.classList.add("active");

        gsap.fromTo(card,
          { scale: 0.96 },
          { scale: 1, duration: 0.4, ease: "power3.out" }
        );
      });
    });

    /* ===== 3D TILT EFFECT (FIXED) ===== */

    // const tiltCards = document.querySelectorAll(".fare-card");

    // tiltCards.forEach(card => {

    //   let bounds = null;

    //   card.addEventListener("mouseenter", () => {
    //     bounds = card.getBoundingClientRect();
    //     gsap.to(card, { duration: 0.3, scale: 1.04 });
    //   });

    //   card.addEventListener("mousemove", (e) => {
    //     if (!bounds) return;

    //     const x = e.clientX - bounds.left;
    //     const y = e.clientY - bounds.top;

    //     const centerX = bounds.width / 2;
    //     const centerY = bounds.height / 2;

    //     const rotateX = -(y - centerY) / 18;
    //     const rotateY = (x - centerX) / 18;

    //     gsap.to(card, {
    //       rotateX: rotateX,
    //       rotateY: rotateY,
    //       duration: 0.2,
    //       ease: "power2.out"
    //     });
    //   });

    //   card.addEventListener("mouseleave", () => {
    //     gsap.to(card, {
    //       rotateX: 0,
    //       rotateY: 0,
    //       scale: 1,
    //       duration: 0.4,
    //       ease: "power3.out"
    //     });
    //     bounds = null;
    //   });

    // });

    /* Entrance animation */
    gsap.from(".fare-card", {
      opacity: 0,
      y: 40,
      scale: 0.95,
      duration: 0.8,
      stagger: 0.15,
      ease: "power3.out"
    });

  });

</script>
<script>
  let swiper;

  document.getElementById('fareModal').addEventListener('shown.bs.modal', () => {

    if (!swiper) {
      swiper = new Swiper(".fareSwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        grabCursor: true,
        speed: 700,
        breakpoints: {
          768: { slidesPerView: 2 },
          1200: { slidesPerView: 3 }
        }
      });
    }

    // GSAP entrance
    gsap.from(".fare-card", {
      opacity: 0,
      y: 40,
      scale: 0.95,
      duration: 0.8,
      stagger: 0.12,
      ease: "power3.out"
    });
  });
</script>
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?= $this->endSection() ?>