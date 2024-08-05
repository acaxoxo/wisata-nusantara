<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripalicious</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="section-1">
    <?php include 'header.php'; ?>
    <div class="container hero-section">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="display-3 text-light fw-bold hero-heading">
                    Where Adventure <br> Meets Tranquility
                </h1>
                <div class="btn-container">
                    <button type="button" class="btn btn-light btn-lg">Get Started</button>
                </div>            
            </div>
        </div>
    </div>
</section>
<section class="section-2">
    <div class="container text-justify">
        <h2 class="pb-2 border-bottom text-dark fw-bold">About Us</h2>
        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold text-body-emphasis">Experience The New Adventure</h2>
                <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id ante dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut ac lacinia velit, eu venenatis eros. Nulla at hendrerit turpis. Quisque mattis suscipit hendrerit. Duis non lacus elit.</p>
                <p class="text-body-secondary">Praesent vulputate nibh at nisl facilisis, et vestibulum est luctus. Vestibulum sed eros ac ipsum tincidunt commodo in nec felis. Sed sit amet neque ut lorem imperdiet lobortis et eget libero. Aenean gravida fermentum felis at sagittis. Aliquam lacus enim, lobortis quis lacus vitae, sollicitudin iaculis nibh. Proin tincidunt, odio ac sollicitudin placerat, velit elit ornare lorem, sit amet vehicula lorem magna ut massa. In at egestas metus.</p>
            </div>
            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 14.933a1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Safe Travelling</h4>
                        <p class="text-body-secondary">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                    </div>
                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.655.623v-1.192z"/>
                                <path d="M1 2.49a1.5 1.5 0 0 1 1.5-1.5h5A1.5 1.5 0 0 1 9 2.49V4h1V2.49a2.5 2.5 0 0 0-2.5-2.5h-5a2.5 2.5 0 0 0-2.5 2.5v9.02a2.5 2.5 0 0 0 2.5 2.5h3.827A5.985 5.985 0 0 1 8.09 15H2.5A3.5 3.5 0 0 1 0 11.51V2.49z"/>
                                <path d="M1 3h7v1H1zm0 2h7v1H1zm0 2h7v1H1zm5 2H1v1h5z"/>
                                <path d="M15 1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1v1h-1V6h-1V5h1V2H8v1H7V2a1 1 0 0 1 1-1h7z"/>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Affordable Prices</h4>
                        <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 4.41c-.91-1.093-2.566-1.214-3.536-.243-1.062 1.062-.985 2.798-.017 3.988L8 11.21l3.553-3.056c.968-1.19 1.045-2.926-.017-3.988-.97-.97-2.626-.85-3.536.242z"/>
                                <path d="M4.5 1a1.5 1.5 0 0 0-1.5 1.5v11.793l5-4.287 5 4.287V2.5a1.5 1.5 0 0 0-1.5-1.5h-7zM2 2.5A2.5 2.5 0 0 1 4.5 0h7A2.5 2.5 0 0 1 14 2.5v12.5a.5.5 0 0 1-.82.384L8 11.239l-5.18 4.145A.5.5 0 0 1 2 15V2.5z"/>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Memorable Moments</h4>
                        <p class="text-body-secondary">Vestibulum sed eros ac ipsum tincidunt commodo in nec felis.</p>
                    </div>
                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3 p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" fill="currentColor" class="bi bi-chat-square-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 1a2 2 0 0 0-2 2v11.5L3.5 12H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H3.5L1 13.5V3z"/>
                                <path d="M8 3.993c-1.282-1.172-3.3-.12-3.078 1.517C5.07 7.69 8 10.59 8 10.59s2.93-2.9 3.078-5.08C11.3 3.874 9.282 2.821 8 3.993z"/>
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Friendly Services</h4>
                        <p class="text-body-secondary">Aliquam lacus enim, lobortis quis lacus vitae.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-3">
        <div class="container">
            <h2 class="pb-2 border-bottom text-dark fw-bold">Destination</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card portrait-card">
                        <img src="img/pexels-freestockpro-2166559.jpg" alt="Kelingking Beach">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Kelingking Beach</a></h5>
                            <p class="card-text">Nusa Penida, Bali</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card landscape-card">
                                <img src="img/Pulau_Padar_1.jpg" alt="Padar Island">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">Padar Island</a></h5>
                                    <p class="card-text">East Nusa Tenggara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card landscape-card">
                                <img src="img/surface-in-Banda-island-scaled.jpg" alt="Banda Neira">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">Banda Neira</a></h5>
                                    <p class="card-text">Banda Neira, Maluku</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="card landscape-card">
                                <img src="img/raja_ampat.jpg" alt="Raja Ampat">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">Raja Ampat</a></h5>
                                    <p class="card-text">Papua</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="pricing">
    <div class="pricing-header p-3 pb-md-4 mx-auto">
        <h2 class="pb-2 border-bottom text-dark fw-bold align-items-start">Pricing</h2>
        <p class="fs-5 text-body-secondary align-items-lg-start text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet fringilla nisi, sodales vestibulum justo lobortis sit amet. Duis bibendum consectetur tellus, id eleifend lorem faucibus vitae. Morbi ac urna vel erat tristique faucibus ac volutpat risus. Sed gravida lacus eget felis laoreet euismod.</p>
    </div>
    <div class="pricing-container">
        <div class="pricing-plan bg-light">
            <div class="plan-title bg-primary text-light">Personal</div>
            <div class="plan-price">$15/MO</div>
            <div class="plan-features text-body-secondary">
                <ul>
                    <li>1 Person</li>
                    <li>3 Nights 4 Days</li>
                    <li>Dinner Included</li>   
                    <li>2 Travel Spots</li>
                    <li>Lunch Included</li>
                </ul>
                <button class="plan-button bg-primary text-light">Book Now</button>
            </div>
        </div>
        <div class="pricing-plan bg-light">
            <div class="plan-title bg-primary text-light">Premium</div>
            <div class="plan-price">$30/MO</div>
            <div class="plan-features text-body-secondary">
                <ul>
                    <li>50 Websites</li>
                    <li>4 Nights 5 Days</li>
                    <li>Dinner Included</li>
                    <li>3 Travel Spots</li>
                    <li>Lunch Included</li>
                </ul>
                <button class="plan-button bg-primary text-light">Book Now</button>
            </div>
        </div>
        <div class="pricing-plan bg-light">
            <div class="plan-title bg-primary text-light">Ultimate</div>
            <div class="plan-price">$100/MO</div>
            <div class="plan-features text-body-secondary">
                <ul>
                    <li>100 Websites</li>
                    <li>6 Nights 7 Days</li>
                    <li>Dinner Included</li>
                    <li>5 Travel Spots</li>
                    <li>Lunch Included</li>
                </ul>
                <button class="plan-button bg-primary text-light">Book Now</button>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
<script src="https://kit.fontawesome.com/0a0b8ed7fe.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Jz+MWsnVZTpwMIOqa7XKcWRFrB2DsZ5Y0sdxVx9+Y7Zlvo5NqMRdNjUnRl+3HiNx" crossorigin="anonymous"></script>
</body>
</html>