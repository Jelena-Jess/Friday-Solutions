<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name','LSAPP')}}</title> 
        <style>
           html, body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            scroll-behavior: smooth;
            position: relative;
            margin: 0;
            padding: 0;
            width: 80%;
            background-position: 0px 0px;
            top: 0;
          }
          .container {
            flex: 1;
            border: 1px solid #355C7D;
            width: 80%;
            padding: 9px;
          }
          .header {
            top: 0; 
            width: 80%;
            height: 10vh;
            background-color: #355C7D;
            padding: 10px;
            text-align: center;
          }
          .title {
            font-size: 2rem;
            padding-bottom: 0;
            margin: 5px;
          }
          .main {
            flex: 1;
          }
          .footer{
            width: 80%;
            flex-shrink: 0;
            background-color: #355C7D;
            text-align: center;
            bottom: 0px;
            padding: 7px 10px;
          }
          .foot {
             color: #fff;
          }
          h1 {
            color: #FE4365;
          }

          h5{
            color: #fff;
            padding-bottom: 5px;
          } 

          p {
            color: black;
          }
        </style>
    </head>
    <body id="body">
      <div class="page">

        {{-- HEADER --}}
        <header class="header">
          <div>
            <div class="">
              <h1 class="title">Jessie&amp;Friday</h1>
              <h5>A COOL SIMPLE WEBSITE FOR YOU?</h5>
            </div>
          </div>
        </header>

      {{-- MAIN CONTENT --}}
      <div class="container">
        <main role="main" class="">
          <section>
            <div>
              <p> Name: {{ $e_name }}</p>
              <p> Phone number: {{ $e_phone }}</p>
              <p> Email address: {{ $e_email }}</p>
              <p> Company/Product name: {{ $e_com_name }}</p>
              <p> Desired web address: {{ $e_web_address }}</p>
              <p> Describe your company/product: {{ $e_description }}</p>
              <p> What do you want to achieve with this website? {{ $e_achieve }}</p>
              <p> What are the long-term goals for the website? {{ $e_goals }}</p>
              <p> What are the aims and objectives of the project? {{ $e_aims }}</p>
              <p> Budget: {{ $e_budget }}</p>
              <p> Deadline: {{ $e_deadline }}</p>
              <p> Who are your target audience? {{ $e_audience }}</p>
              <p> How will your audience interact with the website? {{ $e_interact }}</p>
              <p> List your main competitors: {{ $e_competitors }}</p>
              <p> What makes your company/product different and unique? {{ $e_uniqueness }}</p>
              <p> Do you have your website's content ready? {{ $e_content }}</p>
              <p> Do you have brand guidelines? {{ $e_brand }}</p>
              <p> What is your desired look and feel for the website? {{ $e_look }}</p>
              <p> List 5 websites you like and explain why? {{ $e_preference }}</p>
              <p> List the pages that you require? {{ $e_pages }}</p>
              <p> What features do you want to include on the website? {{ $e_features }}</p>
              <p> Do you have a current domain name and hosting package? {{ $e_domain }}</p>
            </div>
          </section>
        </main>
      </div>
      

      {{-- FOOTER --}}
      <footer class="footer">
        <div class="">
          <p class="foot">Copyright &copy; 2019 Jessie&Friday</p>
        </div>
      </div>
    </footer>
    <div>
  </body>
</html>