<footer class="text-center text-white" style="background-color: #d4edda; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid">
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
    .text-custom {
        text-decoration: none;
        color: #155724; /
        font-size: 1.3rem; 
        transition: 0.2s;
    }
    
    .text-custom:hover {
        color: #1b925a; 
    }

    .fab {
        font-size: 3rem; 
        color: black;
    }

    .fab:hover {
        transform: scale(1.1); 
    }

    footer {
        color: white;
        font-weight: 900;
        margin-top: auto;
    }

    .fab {
        transition: transform 0.3s ease; 
    }

    a:hover {
        text-decoration: none;
    }
</style>
