<div>
  @include('sweetalert::alert')
  
  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->

  <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="{{asset('frontend/assets/images/newsletter-1.jpg')}}" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>Nebraska V2</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>





  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="{{asset('frontend/assets/images/products/jewellery-1.jpg')}}" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone in new just bought
      </p>

      <p class="toast-title">
        Rose Gold Earrings
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>





  <!--
    - HEADER
  -->

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
            This Week Order Over - $55
          </p>
        </div>

        <div class="header-top-actions">


          <button id="toggleButton">Dark Mode</button>


          <select name="currency">

            <option value="usd">USD &dollar;</option>
            <option value="eur">EUR &euro;</option>

          </select>

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="fr">Fran&ccedil;ais</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="{{asset('frontend/assets/images/logo/logo.svg')}}" alt="Nebraska V2's logo" width="120" height="36">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <a href="#" class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </a>

          <a href="#" class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </a>


          <a href="cart" class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">{{ count($cart)}}</span>
          </a>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      @if (session()->has('success') || session()->has('error'))
          <script>
              Livewire.on('productRemovedSuccess', function () {
                  toast('Product removed successfully!', 'success');
                  document.getElementById('dealOfTheDay').focus(); // Focus on element
              });
      
              Livewire.on('productRemovedFailed', function () {
                  toast('Product removal failed!', 'error');
                  document.getElementById('dealOfTheDay').focus(); // Focus on element
              });
          </script>
      @endif

      

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Desktop</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Laptop</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Camera</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Tablet</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Headphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="{{asset('frontend/assets/images/electronics-banner-purple-1.png')}}" alt="headphone collection" width="250"
                      height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Men's</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sports</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Jacket</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sunglasses</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="{{asset('frontend/assets/images/mens-banner.jpg')}}" alt="men's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Women's</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Perfume</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Cosmetics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Bags</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="{{asset('frontend/assets/images/womens-banner.jpg')}}" alt="women's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Smart Watch</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Smart TV</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Keyboard</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Mouse</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Microphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="{{asset('frontend/assets/images/electronics-banner-purple-2.png')}}" alt="mouse collection" width="250" height="119">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Men's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Shorts & Jeans</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Safety Shoes</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Wallet</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Women's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Dress & Frock</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Makeup Kit</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Jewelry</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Couple Rings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bracelets</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Perfume</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Clothes Perfume</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Deodorant</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Flower Fragrance</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Air Freshener</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Hot Offers</a>
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Dress & Frock</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Makeup Kit</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Jewelry</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Couple Rings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Bracelets</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perfume</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Clothes Perfume</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Deodorant</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Flower Fragrance</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Air Freshener</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>



  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="{{asset('frontend/assets/images/banner-purple-1.png')}}" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">

            </div>

          </div>

          <div class="slider-item">

            <img src="{{asset('frontend/assets/images/banner-purple-2.png')}}" alt="modern sunglasses" class="banner-img">

            <div class="banner-content">

            </div>

          </div>

          <div class="slider-item">

            <img src="{{asset('frontend/assets/images/banner-purple-3.png')}}" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">


            </div>

          </div>

          <div class="slider-item">

            <img src="{{asset('frontend/assets/images/banner-purple-4.png')}}" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">

            </div>

          </div>

          <div class="slider-item">

            <img src="{{asset('frontend/assets/images/banner-purple-5.png')}}" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="{{asset('frontend/assets/images/icons/dress.svg')}}" alt="dress & frock" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Dress & frock</h3>

                <p class="category-item-amount">(53)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="{{asset('frontend/assets/images/icons/coat.svg')}}" alt="winter wear" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Winter wear</h3>

                <p class="category-item-amount">(58)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="{{asset('frontend/assets/images/icons/glasses.svg')}}" alt="glasses & lens" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Glasses & lens</h3>

                <p class="category-item-amount">(68)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="{{asset('frontend/assets/images/icons/shorts.svg')}}" alt="shorts & jeans" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Shorts & jeans</h3>

                <p class="category-item-amount">(84)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="{{asset('frontend/assets/images/icons/tee.svg')}}" alt="t-shirts" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">T-shirts</h3>

                <p class="category-item-amount">(35)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="{{asset('frontend/assets/images/icons/jacket.svg')}}" alt="jacket" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Jacket</h3>

                <p class="category-item-amount">(16)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="{{asset('frontend/assets/images/icons/watch.svg')}}" alt="watch" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Watch</h3>

                <p class="category-item-amount">(27)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="{{asset('frontend/assets/images/icons/hat.svg')}}" alt="hat & caps" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Hat & caps</h3>

                <p class="category-item-amount">(39)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->

        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="{{asset('frontend/assets/images/icons/dress.svg')}}" alt="clothes" width="20" height="20"
                      class="menu-title-img">

                    <p class="menu-title">Clothes</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                    @forelse ($category_clothe as $cc)
                        <li class="sidebar-submenu-category">
                            <a href="{{route('welcome.category.detail', 2)}}" class="sidebar-submenu-title">
                                <p class="product-name">{{$cc->name}}</p>
                                <data value="300" class="stock" title="Available Stock">{{ $cc->category_master_id }}</data>
                            </a>
                        </li>
                    @empty
                        <li class="sidebar-submenu-category">
                            data empty
                        </li>
                    @endforelse

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="{{asset('frontend/assets/images/icons/shoes.svg')}}" alt="footwear" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Footwear</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>


                    @forelse ($category_footwear as $cf)
    
                        <li class="sidebar-submenu-category">
                        <a href="#" class="sidebar-submenu-title">
                            <p class="product-name">{{$cf->name}}</p>
                            <data value="45" class="stock" title="Available Stock">{{$cf->category_master_id}}</data>
                        </a>
                        </li>
                      
                    @empty
                        data empty
                    @endforelse

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="{{asset('frontend/assets/images/icons/jewelry.svg')}}" alt="clothes" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Jewelry</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>


                    @forelse ($category_jewelry as $cj)
                        <li class="sidebar-submenu-category">
                        <a href="#" class="sidebar-submenu-title">
                            <p class="product-name">{{$cj->name}}</p>
                            <data value="46" class="stock" title="Available Stock">{{$cj->category_master_id}}</data>
                        </a>
                        </li>
                        
                    @empty
                        data empty
                    @endforelse


                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="{{asset('frontend/assets/images/icons/perfume.svg')}}" alt="perfume" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Perfume</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>


                    @forelse ($category_perfume as $cp)
                        <li class="sidebar-submenu-category">
                        <a href="#" class="sidebar-submenu-title">
                            <p class="product-name">{{$cp->name}}</p>
                            <data value="12" class="stock" title="Available Stock">{{$cp->category_master_id}} pcs</data>
                        </a>
                        </li>
                    @empty
                        no data
                    @endforelse

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="{{asset('frontend/assets/images/icons/cosmetics.svg')}}" alt="cosmetics" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Cosmetics</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                    @forelse ($category_cosmetic as $cc)
                        <li class="sidebar-submenu-category">
                        <a href="#" class="sidebar-submenu-title">
                            <p class="product-name">{{$cc->name}}</p>
                            <data value="68" class="stock" title="Available Stock">{{$cc->category_master_id}}</data>
                        </a>
                        </li>
                        
                    @empty
                        no data
                    @endforelse


                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="{{asset('frontend/assets/images/icons/glasses.svg')}}" alt="glasses" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Glasses</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                    @forelse ($category_glasses as $cg)
                        <li class="sidebar-submenu-category">
                        <a href="#" class="sidebar-submenu-title">
                            <p class="product-name">{{$cg->name}}</p>
                            <data value="50" class="stock" title="Available Stock">{{$cg->category_master_id}}</data>
                        </a>
                        </li>
                        
                    @empty
                        no data
                    @endforelse

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="{{asset('frontend/assets/images/icons/bag.svg')}}" alt="bags" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Bags</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                    @forelse ($category_bag as $cb)
                        <li class="sidebar-submenu-category">
                        <a href="#" class="sidebar-submenu-title">
                            <p class="product-name">{{$cb->name}}</p>
                            <data value="62" class="stock" title="Available Stock">{{$cb->category_master_id}}</data>
                        </a>
                        </li>
                        
                    @empty
                        no data
                    @endforelse


                </ul>

              </li>

            </ul>

          </div>

          <div class="product-showcase">

            <h3 class="showcase-heading">best sellers</h3>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="{{asset('frontend/assets/images/products/1.jpg')}}" alt="baby fabric shoes" width="75" height="75"
                      class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">baby fabric shoes</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$5.00</del>
                      <p class="price">$4.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="{{asset('frontend/assets/images/products/2.jpg')}}" alt="men's hoodies t-shirt" class="showcase-img"
                      width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">men's hoodies t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$17.00</del>
                      <p class="price">$7.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="{{asset('frontend/assets/images/products/3.jpg')}}" alt="girls t-shirt" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">girls t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$5.00</del>
                      <p class="price">$3.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="{{asset('frontend/assets/images/products/4.jpg')}}" alt="woolen hat for men" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">woolen hat for men</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$15.00</del>
                      <p class="price">$12.00</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>



        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">New Arrivals (in 3 days)</h2>

              <div class="showcase-wrapper has-scrollbar">

                @forelse ($new_arrival as $key => $nar)
                    @if ($loop->iteration % 4 === 1)
                    <div class="row">  @endif
                
                    <div class="showcase-container col-md-3">  <div class="showcase">
                        <a href="#" class="showcase-img-box">
                        <img src="{{asset('frontend/assets/images/products/clothes-1.jpg')}}" alt="..." width="70" class="showcase-img">
                        </a>
                        <div class="showcase-content">
                        <a href="#">
                            <h4 class="showcase-title">{{ $nar->product_name }}</h4>
                        </a>
                        <a href="#" class="showcase-category">Clothes</a>
                        <div class="price-box">
                            <p class="price">$45.00</p>
                            <del>$12.00</del>
                        </div>
                        </div>
                    </div>
                    </div>
                
                    @if ($loop->iteration % 4 === 0 || $loop->last)
                    </div>  @endif
                @empty
                    no data
                @endforelse
              

              </div>

            </div>

            <div class="product-showcase">
            
              <h2 class="title">Trending</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                @forelse ($new_arrival as $key => $nar)
                    @if ($loop->iteration % 4 === 1)
                    <div class="row">  @endif
                
                    <div class="showcase-container col-md-3">  <div class="showcase">
                        <a href="#" class="showcase-img-box">
                        <img src="{{asset('frontend/assets/images/products/clothes-1.jpg')}}" alt="..." width="70" class="showcase-img">
                        </a>
                        <div class="showcase-content">
                        <a href="#">
                            <h4 class="showcase-title">{{ $nar->product_name }}</h4>
                        </a>
                        <a href="#" class="showcase-category">Clothes</a>
                        <div class="price-box">
                            <p class="price">$45.00</p>
                            <del>$12.00</del>
                        </div>
                        </div>
                    </div>
                    </div>
                
                    @if ($loop->iteration % 4 === 0 || $loop->last)
                    </div>  @endif
                @empty
                    no data
                @endforelse
            
              </div>
            
            </div>

            <div class="product-showcase">
            
              <h2 class="title">Top Rated</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                @forelse ($new_arrival as $key => $nar)
                    @if ($loop->iteration % 4 === 1)
                    <div class="row">  @endif
                
                    <div class="showcase-container col-md-3">  <div class="showcase">
                        <a href="#" class="showcase-img-box">
                        <img src="{{asset('frontend/assets/images/products/clothes-1.jpg')}}" alt="..." width="70" class="showcase-img">
                        </a>
                        <div class="showcase-content">
                        <a href="#">
                            <h4 class="showcase-title">{{ $nar->product_name }}</h4>
                        </a>
                        <a href="#" class="showcase-category">Clothes</a>
                        <div class="price-box">
                            <p class="price">$45.00</p>
                            <del>$12.00</del>
                        </div>
                        </div>
                    </div>
                    </div>
                
                    @if ($loop->iteration % 4 === 0 || $loop->last)
                    </div>  @endif
                @empty
                    no data
                @endforelse
            
              </div>
            
            </div>

          </div>



          <!--
            - PRODUCT FEATURED
          -->

          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

                @forelse ($new_arrival as $nrl)
                    <div class="showcase-container">
    
                    <div class="showcase">
                        
                        <div class="showcase-banner">
                        <img src="{{asset('frontend/assets/images/products/shampoo.jpg')}}" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                        </div>
    
                        <div class="showcase-content">
                        
                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>
    
                        <a href="#">
                            <h3 class="showcase-title">{{ $nrl->product_name }}</h3>
                        </a>
    
                        <p class="showcase-desc">
                            {{ $nrl->desc }}
                        </p>
    
                        <div class="price-box">
                            <p class="price">{{ $nrl->price_before }}</p>
    
                            <del>{{ $nrl->price_after }}</del>
                        </div>
    
                        
                        {{-- <a href="{{ route('add.to.cart', $nrl->product_id) }}" class="add-cart-btn">add to cart</a> --}}
    

                        {{-- <a href="{{ route('add.to.cart', $nrl->product_id) }}"
                              class="add-cart-btn"
                              @if(isset($cart[$nrl->product_id]))
                                  title="Remove from Cart" style="background-color:red;"
                              @else
                                  title="Add to Cart"
                              @endif
                          >
                              @if(isset($cart[$nrl->product_id]))
                                  Remove from Cart
                              @else
                                  Add to Cart
                              @endif
                       </a> --}}

                       {{-- <a href="{{ route('remove.from.cart', $nrl->product_id) }}" class="" style="background-color:red;font-size:16px;font-weight:bold; border-radius:10px;padding:3px;color:white;width:50%;text-align:center;" title="Remove from Cart">
                           Remove from Cart
                       </a> --}}

                              @if(isset($cart[$nrl->id]))
                                <form action="{{ route('remove.from.cart',$nrl->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" id="dealOfTheDay" class="" style="background-color:red;font-size:16px;font-weight:bold; border-radius:10px;padding:3px;color:white;width:50%;text-align:center;" title="Remove from Cart">
                                      Remove from Cart
                                  </button>
                                </form>
                              @else
                                <a href="{{ route('add.to.cart', $nrl->id) }}" class="add-cart-btn" title="Add to Cart">
                                    Add to Cart
                                </a>
                              @endif
                          
                              {{-- @if(isset($cart[$nrl->product_id]))
                                  Remove from Cart
                              @else
                                  Add to Cart
                              @endif --}}
                       
{{-- 
                       <div class="cart-button-container">
                        <a href="{{ route('add.to.cart', $nrl->product_id) }}" class="add-cart-btn" title="Add to Cart">
                            Add to Cart
                        </a>
                    
                        @if(isset($cart[$nrl->product_id]))
                            <a href="{{ route('remove.from.cart', $nrl->product_id) }}" class="remove-cart-btn" title="Remove from Cart">
                                Remove from Cart
                            </a>
                        @endif
                    </div> --}}
                    

                        <div class="showcase-status">
                            <div class="wrapper">
                            <p>
                                already sold: <b>20</b>
                            </p>
    
                            <p>
                                available: <b>40</b>
                            </p>
                            </div>
    
                            <div class="showcase-status-bar"></div>
                        </div>
    
                        <div class="countdown-box">
    
                            <p class="countdown-desc">
                            Hurry Up! Offer ends in:
                            </p>
    
                            <div class="countdown">
    
                            <div class="countdown-content">
    
                                <p class="display-number">360</p>
    
                                <p class="display-text">Days</p>
    
                            </div>
    
                            <div class="countdown-content">
                                <p class="display-number">24</p>
                                <p class="display-text">Hours</p>
                            </div>
    
                            <div class="countdown-content">
                                <p class="display-number">59</p>
                                <p class="display-text">Min</p>
                            </div>
    
                            <div class="countdown-content">
                                <p class="display-number">00</p>
                                <p class="display-text">Sec</p>
                            </div>
    
                            </div>
    
                        </div>
    
                        </div>
    
                    </div>
    
                    </div>
                
                @empty
                    no data
                @endforelse



            </div>

          </div>



          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid">

                @forelse ($new_arrival as $new_a)
                    <div class="showcase">
    
                    <div class="showcase-banner">
    
                        <img src="{{asset('frontend/assets/images/products/jacket-3.jpg')}}" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                        <img src="{{asset('frontend/assets/images/products/jacket-4.jpg')}}" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
    
                        <p class="showcase-badge">{{$new_a->discount}}%</p>
    
                        <div class="showcase-actions">
    
                        <button class="btn-action">
                            <ion-icon name="heart-outline"></ion-icon>
                        </button>
    
                        <button class="btn-action">
                            <ion-icon name="eye-outline"></ion-icon>
                        </button>
    
                        <button class="btn-action">
                            <ion-icon name="repeat-outline"></ion-icon>
                        </button>
    
                        <button class="btn-action">
                            <ion-icon name="bag-add-outline"></ion-icon>
                        </button>
    
                        </div>
    
                    </div>
    
                    <div class="showcase-content">
    
                        <a href="#" class="showcase-category">{{$new_a->category_name}}</a>
    
                        <a href="#">
                        <h3 class="showcase-title">{{$new_a->product_name}}</h3>
                        </a>
    
                        <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        {{-- <ion-icon name="star-outline"></ion-icon> --}}
                        </div>
    
                        <div class="price-box">
                        <p class="price">$48.00</p>
                        <del>$75.00</del>
                        </div>
    
                    </div>
    
                    </div>
                    
                @empty
                    no data
                @endforelse


            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="{{asset('frontend/assets/images/testimonial-1.jpg')}}" alt="alan doe" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Alan Doe</p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="{{asset('frontend/assets/images/icons/quotes.svg')}}" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>

            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="{{asset('frontend/assets/images/cta-banner.jpg')}}" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ $10</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>

              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over $100</p>
              
                </div>
              
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - BLOG
    -->

    <div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="{{asset('frontend/assets/images/blog-1.jpg')}}" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Fashion</a>

              <a href="#">
                <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
              </a>

              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="{{asset('frontend/assets/images/blog-2.jpg')}}" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Clothes</a>
          
              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="{{asset('frontend/assets/images/blog-3.jpg')}}" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Shoes</a>
          
              <h3>
                <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="{{asset('frontend/assets/images/blog-4.jpg')}}" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Electronics</a>
          
              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Aslan</cite> / <time datetime="2024">2024</time>
              </p>
          
            </div>
          
          </div>

        </div>

      </div>

    </div>

  </main>




  <script>
    const dealOfTheDay = $('#dealOfTheDay');
    // const categoryLabel = $('#categoryLabel');

    dealOfTheDay.on('click', function(event) {
        // if (event.target === categoryLabel[0]) {
        // $('#categorySelect').focus(); // Focus the dropdown
        // }
    });
  </script>
</div>
