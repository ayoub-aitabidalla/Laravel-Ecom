<footer class="bg-dark text-light pt-5 pb-4">
    <div class="container">
        <div class="row">
            <!-- Brand & Description -->
            <div class="col-md-3">
                <h5 class="fw-bold">YourBrand</h5>
                <p class="small">Discover the latest trends and shop high-quality products at unbeatable prices.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-3">
                <h5 class="fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a class="text-light text-decoration-none">Home</a></li>
                    <li><a class="text-light text-decoration-none">Shop</a></li>
                    <li><a  class="text-light text-decoration-none">About Us</a></li>
                    <li><a class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Customer Support -->
            <div class="col-md-3">
                <h5 class="fw-bold">Customer Service</h5>
                <ul class="list-unstyled">
                    <li><a href="" class="text-light text-decoration-none">FAQs</a></li>
                    <li><a href="" class="text-light text-decoration-none">Returns & Refunds</a></li>
                    <li><a href="" class="text-light text-decoration-none">Shipping Policy</a></li>
                    <li><a href="" class="text-light text-decoration-none">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Newsletter Subscription -->
            <div class="col-md-3">
                <h5 class="fw-bold">Subscribe</h5>
                <form action="" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
                <div class="d-flex">
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-linkedin fa-lg"></i></a>
                </div>
            </div>
        </div>

        <hr class="bg-light my-4">

        <!-- Copyright & Legal Links -->
        <div class="row text-center">
            <div class="col">
                <p class="mb-0 small">&copy; {{ date('Y') }} YourBrand. All Rights Reserved. | <a href="" class="text-light text-decoration-none">Terms of Service</a> | <a href="" class="text-light text-decoration-none">Privacy Policy</a></p>
            </div>
        </div>
    </div>
</footer>
