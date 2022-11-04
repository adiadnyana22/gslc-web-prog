<nav class="shadow-sm">
    <div class="container d-flex justify-content-between py-3">
        <div class="fs-2 text-primary"><strong>Logo</strong></div>
        <ul class="d-flex align-items-center gap-5 py-2 fs-6 mb-0" style="list-style: none">
            <li><a href="#" class="text-black text-decoration-none">Home</a></li>
            <li><a href="#" class="text-black text-decoration-none">Category</a></li>
            <li><a href="#" class="text-black text-decoration-none">Product</a></li>
            <li><a href="#" class="text-black text-decoration-none">About Us</a></li>
            <li><a href="#" class="text-white text-decoration-none btn btn-primary">
                    @if(isset($name))
                        Akun
                    @elseif(!isset($name))
                        Login
                    @endif
                </a></li>
        </ul>
    </div>
</nav>
