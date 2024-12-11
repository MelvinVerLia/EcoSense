<footer class="text-center text-white" style="background-color: #d4edda; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
    <!-- Grid container -->
    <div class="container-fluid">
        <!-- Section: Links -->
        <section class="mt-5">
            <div class="row text-center d-flex justify-content-center pt-5">
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="{{ route('home') }}" class="text-custom">Home</a>
                    </h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="{{ route('article') }}" class="text-custom">Article</a>
                    </h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="{{ route('merchandise') }}" class="text-custom">Merchandise</a>
                    </h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="{{ route('contribute') }}" class="text-custom">Contribute</a>
                    </h6>
                </div>
            </div>
        </section>

        <hr class="my-5" />

        <section class="text-center mb-5">
            <!-- Social Media Icons with hover effect and separation -->
            <a href="" class="text-custom" style="font-size: 3.5rem; margin-right: 15px; text-decoration: none; transition: transform 0.3s ease;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="text-custom" style="font-size: 3.5rem; margin-right: 15px; text-decoration: none; transition: transform 0.3s ease;">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-custom" style="font-size: 3.5rem; margin-right: 15px; text-decoration: none; transition: transform 0.3s ease;">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="" class="text-custom" style="font-size: 3.5rem; margin-right: 15px; text-decoration: none; transition: transform 0.3s ease;">
                <i class="fab fa-tiktok"></i>
            </a>
            <a href="" class="text-custom" style="font-size: 3.5rem; margin-right: 15px; text-decoration: none; transition: transform 0.3s ease;">
                <i class="fab fa-instagram"></i>
            </a>
        </section>

    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 ECOSENSE
    </div>
</footer>

<style>
    /* Ensuring there's no underline on links */
    .text-custom {
        text-decoration: none;
        color: #155724; /* Custom text color */
        font-size: 1.3rem; /* Bigger text size */
        transition: 0.2s;
    }
    
    .text-custom:hover {
        color: #1b925a; /* Custom text color */
    }

    /* Adjusting the font size of icons */
    .fab {
        font-size: 3rem; /* Default icon size */
        color: black;
    }

    /* Hover effect to grow icons */
    .fab:hover {
        transform: scale(1.1); /* Slightly grow the icon */
    }

    /* Optional: Footer text color */
    footer {
        color: white;
        font-weight: 900;
    }

    /* Additional styling for hover effect on icons */
    .fab {
        transition: transform 0.3s ease; /* Smooth transition for scaling */
    }

    a:hover {
        text-decoration: none;
    }
</style>
