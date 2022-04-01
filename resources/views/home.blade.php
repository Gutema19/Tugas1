<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Homeworksite</title>
    <meta property="og:title" content="New Project" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="/js/tugas.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style>
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}
    </style>
    <style>
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    />
    <link rel="stylesheet" href="/style.css" />
  </head>
  <body>
  <script>
      AOS.init({
        delay: 0, 
        duration: 600, 
        easing: 'ease-out',
      });
    </script>
    <div>
      <link href="/css/home.css" rel="stylesheet" />

      <div class="home-container">
        <div class="home-container01" data-aos="fade-down" data-aos-delay="300">
          <div class="home-container02">
            <img
              alt="image"
              src="/playground_assets/logo.svg"
              class="home-image"
            />
          </div>
          <div class="home-container03">
            <span class="home-text">Home</span>
          </div>
          <div class="home-container04">
            <img
              alt="image"
              src="/playground_assets/bullet.svg"
              class="home-image1"
            />
            <span class="home-text1">Task</span>
          </div>
          <div class="home-container05">
            <span class="home-text2">About</span>
          </div>
          <div class="home-container06">
            <span class="home-text3">Herry Liukae</span>
            <img
              alt="image"
              src="/playground_assets/ellipse%201.svg"
              class="home-image2"
            />
          </div>
        </div>
        <div class="home-container07">
          <div class="home-container08">
            <img 
              data-aos="zoom-in" data-aos-delay="500"
              alt="image"
              src="/playground_assets/cube-1.svg"
              class="home-image3"
            />
            <img 
              data-aos="zoom-in" data-aos-delay="600"
              alt="image"
              src="/playground_assets/sphere.svg"
              class="home-image4"
            />
            <img
            data-aos="zoom-in" data-aos-delay="500"
              alt="image"
              src="/playground_assets/cone.svg"
              class="home-image5"
            />
          </div>
          <div class="home-container09">
            <img 
              data-aos="zoom-in" data-aos-delay="400"
              alt="image"
              src="/playground_assets/line%2022.svg"
              class="home-image6"
            />
            <div class="home-container10">
              <div class="home-container11">
                <img
                  data-aos="fade-up" data-aos-delay="300"
                  alt="image"
                  src="/playground_assets/group%206.svg"
                  class="home-image7"
                />
                <span class="home-text4">
                  <span class="home-text5" data-aos="fade-up" data-aos-delay="325">
                    Kumpulkanlah semua tugas yang anda miliki, sehingga kita
                    dapat memberikan mereka petunjuk mengenai tugas yang sedang
                    mereka kerjakan.
                  </span>
                  <span class="home-text6"></span>
                </span>
              </div>
              <form class="home-form" id="formtgs" enctype="multipart/form-data" >
                @csrf
                <input data-aos="fade-up" data-aos-delay="350"
                  type="text"
                  placeholder="Masukkan nama tugas anda"
                  class="home-textinput input"
                />
                <input data-aos="fade-up" data-aos-delay="375"
                  type="file"
                  placeholder="Masukkan berkas tugas anda "
                  class="home-textinput1 input"
                  name = "file"
                />
                <button type="submit" class="home-button button" data-aos="fade-up" data-aos-delay="400">Send</button>
              </form>
            </div>
          </div>
        </div>
        <div class="home-container12"></div>
      </div>
    </div>
  </body>
</html>
