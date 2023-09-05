@php
    $menu = [['name' => 'Footwear'], ['name' => 'Essentials'], ['name' => 'Wholesale & Reseller'], ['name' => 'About Us']];
@endphp


<nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="/gambar/Nike.png" alt="Nike" width="110" height="50"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">

                @foreach ($menu as $navbarItem)
                    <li class="nav-item">

                        <a class="nav-link" href="{{  $navbarItem['name'] }}">{{ $navbarItem['name'] }}</a>



                    </li>
                @endforeach

                

                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Company
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Blog</a></li>
                        <li><a class="dropdown-item" href="#">About Us</a></li>
                        <li><a class="dropdown-item" href="#">Contact us</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Footwear
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="active">Active</a></li>
                        <li><a class="dropdown-item" href="boots">Boots</a></li>
                        <li><a class="dropdown-item" href="sandals">Sandals</a></li>
                        <li><a class="dropdown-item" href="signature">Signature</a></li>
                        <li><a class="dropdown-item" href="sneakers">Sneakers</a></li>
                    </ul>

            </li>

            <li class="nav-item dropdown">
                <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Essentials
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Daily Wear</a></li>
                    <li><a class="dropdown-item" href="#">Smart Casual</a></li>
                    <li><a class="dropdown-item" href="#">Outdoor Wear</a></li>
                    <li><a class="dropdown-item" href="#">Essentials</a></li>
                    <li><a class="dropdown-item" href="#">SKJ1992</a></li>
                </ul>

        </li>
        </ul>
            

            

            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark h5" href="" target="blank"><i
                            class="fab fa-google-plus-square"></i></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark h5" href="" target="blank"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark h5" href="" target="blank"><i
                            class="fab fa-facebook-square"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>