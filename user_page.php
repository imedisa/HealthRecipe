<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="" href="./assets/img/favicon.png" />
    <!--========== TAILWIND CONNECTION ==========-->

    <script src="https://cdn.tailwindcss.com"></script>

    <!--========== BOX ICONS ==========-->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Health Bank</title>
  </head>
  <body>
    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
      <nav class="nav bd-container">
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="./index.html" class="nav__link ">صفحه اصلی</a>
            </li>
            <li class="nav__item">
              <a href="./user_status.html" class="nav__link">وضعیت من</a>
            </li>
            

            <li><i class="bx bx-moon change-theme" id="theme-button"></i></li>
          </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-menu"></i>
        </div>
        <div class="flex items-center">
        <a href="#" class="nav__logo  lg:mr-5">سبزینو</a>

        </div>
      </nav>
    </header>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
      <i class="bx bx-chevron-up scrolltop__icon"></i>
    </a>


    <main class="l-main">
      <!--========== HOME ==========-->
      <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
          <div class="home__data">
            <h1 class="home__title font-bold">سبزینو</h1>
            <h2 class="home__subtitle">
              با سبزینو یک قدم به سبک زندگی جدید و سالم نزدیک تر می شوید
            </h2>
            <a href="#about" class="button">اطلاعات بیشتر</a>
          </div>

          <img src="assets/img/home.png" alt="" class="home__img" />
        </div>
      </section>

      <!--========== ABOUT ==========-->
      <section class="about section bd-container" id="about">
        <div class="about__container bd-grid">
          <div class="about__data">
            <span class="section-subtitle about__initial">درباره ما</span>
            <h2 class="section-title about__initial">
              سلامتی، سبک زندگی نوین، تناسب
            </h2>
            <p class="about__description">
              در سبزینو هدف ما فرهنگ سازی و اصلاح عادات غذایی اشتباه است، هدف
              سایت سبزینو ارائه ی برنامه های غذایی از پیش تعیین شده نمی باشد
              بلکه با در اختیار گذاشتن بستر های بارگذاری و اشتراک گذاری برای
              کاربران یک محیط مناسب و کاربر محور برای تجربیات غذایی فراهم میکند
              و در اخر با در نظر گرفتن درصد چربی و BMI بدن شما ، مناسب ترین وعده
              های غذایی را به شما معرفی می کند .
            </p>
            <a href="#services" class="button">برو بریم!</a>
          </div>

          <img src="assets/img/about.jpg" alt="" class="about__img" />
        </div>
      </section>

      <!--========== SERVICES ==========-->
      <section
        class="services section bd-container services__container services__content"
        id="services"
      >
        <span class="section-subtitle"
          >محاسبه رایگان BMI و درصد چربی بدن شما</span
        >
        <!--========== BMI FORM ==========-->

        <h2 class="section-title mt-7">BMI بدن من چقدر است؟</h2>
        <div>
          <form action="bmi.php" method="post" class="border border-green-600 p-7 rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
              <div>
                <input
                name="user_weight"
                  class="border border-green-600 w-full rounded-lg p-3"
                  type="number"
                  placeholder="وزن شما(kg) :"
                />
              </div>
              <div>
                <input
                name="user_height"
                  class="border border-green-600 w-full rounded-lg p-3"
                  type="number"
                  value="<?php echo isset($_SESSION['user_height']) ? htmlspecialchars($_SESSION['user_height']) : 'Guest'; ?>"
                  readonly
                />
              </div>
              <button class="button flex justify-center !items-center" type="submit">محاسبه</button>
              <!-- <a class="button flex justify-center !items-center"
                >محاسبه BMI
              </a> -->
            </div>
          </form>
        </div>
        <!--========== FAT PERCEMT ==========-->

        <h2 class="section-title mt-7">درصد چربی بدن من چقدر است؟</h2>
        <div>
          <form action="" class="border border-green-600 p-7 rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
              <div>
                <select
                  name=""
                  id=""
                  class="border border-green-600 text-gray-400 w-full bg-white rounded-lg p-3"
                >
                  <option value="value" selected disabled hidden>جنسیت</option>
                  <option value="خانم">خانم</option>
                  <option value="آقا">آقا</option>
                </select>
              </div>
              <div>
                <input
                  class="border border-green-600 w-full rounded-lg p-3"
                  type="number"
                  placeholder="سن شما :"
                />
              </div>

              <a class="button flex justify-center !items-center"
                >محاسبه درصد چربی
              </a>
            </div>
          </form>
        </div>
      </section>

      <!--========== MENU ==========-->
      <section class="menu section bd-container" id="menu">
        <span class="section-subtitle">منوی غذا</span>
        <h2 class="section-title">چه غذاهایی برای من مناسب است؟</h2>

        <div class="menu__container bd-grid">
          <div class="menu__content">
            <img src="assets/img/plate1.png" alt="" class="menu__img" />
            <h3 class="menu__name">سالاد کبابی</h3>
            <span class="menu__detail">سینه مرغ،کاهو،... بیشتر</span>
            <span class="menu__preci">کالری : 350</span>
            <a href="#" class="button menu__button"
              ><i class="bx bx-plus"></i
            ></a>
          </div>

          <div class="menu__content">
            <img src="assets/img/plate2.png" alt="" class="menu__img" />
            <h3 class="menu__name">سالاد سالمون</h3>
            <span class="menu__detail">ماهی سالمون، کام پیچ، قارچ...بیشتر</span>
            <span class="menu__preci">کالری : 230</span>
            <a href="#" class="button menu__button"
              ><i class="bx bx-plus"></i
            ></a>
          </div>

          <div class="menu__content">
            <img src="assets/img/plate3.png" alt="" class="menu__img" />
            <h3 class="menu__name">سالاد اسپانیایی</h3>
            <span class="menu__detail"
              >قارچ گریل شده، سس سویا، پیاز...بیشتر</span
            >
            <span class="menu__preci">کالری : 250</span>
            <a href="#" class="button menu__button"
              ><i class="bx bx-plus"></i
            ></a>
          </div>
        </div>
      </section>


      <!--========== CONTACT US ==========-->
      <section class="contact section bd-container" id="contact">
        <div class="contact__container bd-grid">
          <div class="contact__data">
            <span class="section-subtitle contact__initial"
              >با ما در ارتباط باشید</span
            >
            <h2 class="section-title contact__initial !mb-2">تماس با ما</h2>
            <p class="contact__description">
              شما میتوانید با درج نظرات و پیشنهادات خود موجب ارتقای کیفیت تیم
              سبزینو شوید .
            </p>
          </div>

          <div class="contact__button">
            <a href="#" class="button !items-end">ارسال پیام</a>
          </div>
        </div>
      </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
      <div class="footer__container bd-grid">
        <div class="footer__content">
          <a href="#" class="footer__logo">سبزینو</a>
          <span class="footer__description">پروژه پایانی</span>
          <div>
            <a href="#" class="footer__social"
              ><i class="bx bxl-facebook"></i
            ></a>
            <a href="#" class="footer__social"
              ><i class="bx bxl-instagram"></i
            ></a>
            <a href="#" class="footer__social"
              ><i class="bx bxl-twitter"></i
            ></a>
          </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">سرویس ها</h3>
          <ul>
            <li><a href="#" class="footer__link">نظرات</a></li>
            <li><a href="#" class="footer__link">کالری ها</a></li>
            <li><a href="#" class="footer__link">غذاهای مضر</a></li>
            <li><a href="#" class="footer__link">شخصی سازی پیشرفته</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">اطلاعات</h3>
          <ul>
            <li><a href="#" class="footer__link">رویداد ها</a></li>
            <li><a href="#" class="footer__link">درباره ما</a></li>
            <li><a href="#" class="footer__link">اعتماد و امنیت</a></li>
            <li><a href="#" class="footer__link">همکاری با ما</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">آدرس</h3>
          <ul>
            <li>ایران، تهران</li>
            <li>خانی آباد، دانشگاه شریعتی</li>
            <li>999 - 888 - 777</li>
            <li>Shariaty@gmail.com</li>
          </ul>
        </div>
      </div>

      <p class="footer__copy">&#169; ساخته شده توسط مدیسا حمزه و تینا حافظی</p>
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
