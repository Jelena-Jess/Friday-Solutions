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
              <p>Name: {{ $e_name }}</p>
              <p> Phone number: {{ $e_phone }}</p>
              <p> Email address: {{ $e_email }}</p>
              <p>Message: {{ $e_msg }}</p>
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