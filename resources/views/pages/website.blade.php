@extends('layouts.app')

@section('title', 'Ellen - B2 First')

@section('content')
<main id="main" role="main" class="m-auto">

  <section class="py-5 text-center bg-light">
    <div class="main py-5">
      <div class="d-flex flex-column justify-content-center">
        <div class="w-75 mx-auto">
          <p  class="text-center p-big"> We believe in simplicity. Whether your audience is reading content, watching a video or purchasing an item, every action should be clear throughout the website. Our goal is to create a website that highlights your company’s brand while ensuring ease of use and simplicity for your audience.</h3>
        </div>
        {{-- <img src="/images/code.png" alt="" class="website-img animate-right mx-auto"> --}}
      </div>
    </div>
  </section>

  

  <section id="tech" class="py-5 bg-grey">
    <div class="main py-5">
      <h2 class="text-center">TECHNOLOGIES THAT CREATE WONDERS</h2>
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>
      <div class="">
        <div class="p-5">
          <p class="p-big text-center">You can think of a modern website as a cake that has multiple layers. Each layer represents a certain technology. Each “technology layer” has its own function and purpose. Choose them wisely and you have a great-tasting cake. Choose poorly, and your product will be inedible.</p>
        </div>
        <div class="pl-4">
          <div class="d-flex justify-content-center tech tech1">
            <div data-anijs="if: mouseover, do: swing animated">
              <span>HTML</span>
            </div>
            <div data-anijs="if: mouseover, do: swing animated">
              <span>SCSS</span>
            </div>
          </div>
          <div class="d-flex justify-content-center tech tech2">   
            <div data-anijs="if: mouseover, do: swing animated">
              <span>PHP</span>
            </div>
            <div data-anijs="if: mouseover, do: swing animated">
              <span>MySQL</span>
            </div>
            <div data-anijs="if: mouseover, do: swing animated">
              <span>Laravel</span>
            </div>
          </div>
          <div class="d-flex justify-content-center tech tech3">
            <div data-anijs="if: mouseover, do: swing animated">
              <span>JavaScript</span>
            </div>
            <div data-anijs="if: mouseover, do: swing animated">
              <span>Git</span>
            </div>
            <div data-anijs="if: mouseover, do: swing animated">
              <span>Bootstrap</span>
            </div>
            <div data-anijs="if: mouseover, do: swing animated">
              <span>Photoshop</span>
            </div>
          </div>
        </div>
      </div> 
    </div>
</section>

  <section id="plans" class="py-5 bg-dark-color">
    <div class="monthly-plans py-5">
      <h2 class="text-center">OUR WEBSITE SERVICES</h2>
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>
      <div class="d-flex flex-column justify-content-center">
        <p class=" mt-4 text-center">
          We offer a few different types of web design services, including templates and fully custom websites. All our websites are built to be responsive, meaning they work on any tablet or mobile phone.
        </p>
        <p class="mb-5 text-center">
          Each of our web design projects varies greatly and depends on your budget, goals, and timeframe. If you’re unsure of what you want, we can help you choose the right option that falls within your budget.
        </p>
      </div>
     
      <div class="plan-boxes p-lg-4 p-md-2 py-5 pb-md-0 pb-sm-0 pb-0 d-flex flex-wrap flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column justify-content-between">
        <div class="bg bg1 p-4">
          <div class="text-center">
            <h2 class="text-dark pb-5">PAPER 1 - READING & USE OF ENGLISH</h2>
            <p>
              Template websites are best for businesses with a smaller budget and willing to adhere to the limitations of a template. Our platform of choice is WordPress and there are thousands of different WordPress templates available. Our team will select 2-3 templates to present to you based on  your goals, number of pages, etc. and you will then select 1 for us to move forward with.
            </p>
            <p>
              Templates offer many customization options (such as color choice, logo, photos, etc.), but there are pros and cons to templates that we’ll make sure you’re aware of before beginning. The final pricing will depend on the number of hours we’ll need to complete your project.
            </p>
          </div>

        </div>
        <div class="bg bg2 p-4">
          <div class="text-center">
            <h2 class="text-dark pb-5">PAPER 2 - WRITING</h2>
            <p>
              Custom websites are for medium-large sized businesses that have a sizeable budget for a new website and that want full control over the look/feel. Once a client has been on-boarded, our team meets internally to start planning a sitemap, wireframes, and design direction. We then go through each step, presenting everything from initial concepts to structural planning to the final design. Our team will walk you through each phase until the final project is launched to ensure your 100% satisfaction.
            </p>
            <p>
              Final pricing will ultimately depend upon the number of hours we’ll need to put into your project.
            </p>
          </div>
        </div>

        <div class="bg bg3 p-4">
          <div class="text-center">
            <h2 class="text-dark pb-5">PAPER 3 - LISTENING</h2>
            <p>
              We love building new websites, but if you come to us with an existing website, we’re willing to work with that, too. We’ll review your existing website design, your code, and your overall goals to make design change recommendations and implement those. Website redesigns vary greatly in pricing and depend on the existing framework.
            </p>
            <p>
              The above offerings include most of the types of web design services we offer, but we also can work with you to include special functionality. This includes adding plugins that support your website’s needs. You tell us what you’d like your website to do and we can build it into your budget.
            </p>
          </div>
        </div>

        <div class="bg bg4 p-4">
          <div class="text-center">
            <h2 class="text-dark pb-5">PAPER 4 - SPEAKING</h2>
            <p>
              We manage websites for our own clients, or others who want to get on with running their business safe in the knowledge their website is up to date and always online.
            </p>
            <p>
              Web site maintenance services include:
            </p>
            <ul class="text-dark text-left">
              <li>Website management,performance and uptime monitoring</li>
              <li>Software security updates</li>
              <li>Server updates & upgrades</li>
              <li>Site backups</li>
              <li>Ongoing Search Engine Optimisation</li>
              <li>New ideas and features developments</li>
              <li>Malware and hack detection</li>
            </ul>
            <p>Each maintenance package is designed for both the size and the needs of your company.</p>
          </div>
        </div>

      </div>
      <div>
        <p class="text-center text-light px-5 pt-5">The best way to get all the info is by contacting us for a quick online meeting.</p>
      </div>
       
      <div>
        <a class="button mt-5" href="{{ route('contact.create') }}" >Contact us</a>
      </div>
    </div>
    </div>
  </section>

  <section class="py-5 bg-light">
    <div class="py-5">
      <h2 class="text-center">STAGES OF CUSTOM WEB DEVELOPMENT</h2>
      <div class="separator pb-5">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>
      <div class="web-stages">
        <div>
          <h4 class="pb-3">Stage 1. Gathering Information</h4>
          <ul>
            <li>Set main goals of the website</li>
            <li>Define target audience</li>
          </ul>
          <p class="pl-3 pt-2">Estimated time: 1 week</p>
        </div>
        <div>
          <h4 class="pb-3">Stage 2. Planning</h4>
          <ul>
            <li>Create a sitemap sketch (define the main areas of your website)</li>
            <li>Create a wireframe/mock-up (a visual representation of the user interface which the customer reviews)</li>
            <li>Select technology stack (programming language, frameworks, CMS)</li>
          </ul>
          <p class="pl-3 pt-2">Estimated time: 2-4 weeks</p>
        </div>
        <div>
          <h4 class="pb-3">Stage 3. Design</h4>
          <ul>
            <li>Create the website layout</li>
            <li>Client reviews the layouts</li>
            <li>Get client's feedback on the layouts</li>
            <li>Change the layout when required</li> 
          </ul>
          <p class="pl-3 pt-2">Estimated time: 2-6 weeks</p>
        </div>
        <div>
          <h4 class="pb-3">Stage 4. Content Management</h4>
          <ul>
            <li>Create new content (creation of catching headlines, text editing, writing new text, compiling the existing text, etc.)</li>
            <li>Get content ready for migration</li>
          </ul>  
          <p class="pl-3 pt-2">Estimated time: 2-6 weeks</p>
        </div>
        <div>
          <h4 class="pb-3">Stage 5. Coding</h4>
          <ul>
            <li>Build website according to the website hierarchy that was previously created</li>
            <li>Add special features and interactivity</li>
            <li>SEO for the website (the optimization of website elements)</li> 
          </ul>
          <p class="pl-3 pt-2">Estimated time: 4-12 weeks</p>
        </div>
        <div>
          <h4 class="pb-3">Stage 6. Testing, Review and Launch</h4>
          <ul>
            <li>Test the created website</li>
            <li>Upload the website to server</li>
            <li>Final testing and launch</li>
          </ul>
          <p class="pl-3 pt-2">Estimated time: 2-3 weeks</p>
        </div>
        <div>
          <h4 class="pb-3">Stage 7. Maintenance and Regular Updating</h4>
          <ul>
            <li>Add user report system</li>
            <li>Fix bugs</li>
            <li>Keep website up-to-date</li>
          </ul>  
          <p class="pl-3 pt-2">Estimated time: ongoing</p> 
        </div>
      </div>
    </div>
  </section>

  <section id="plans" class="py-5 bg-grey">
    <div class="main">
     <div class="py-5">
      <h2 class="text-center text-dark">TERMINOLOGY</h2>
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>
        <div class="d-flex flex-wrap justify-content-center mt-5">

          <div class="card">
            <div class="card-body">
              <h4 class="card-title">CUSTOM WEBSITE</h4>
              <p class="card-text"> Custom-built websites are tailored solely towards your business; every aspect is designed in the best interest of your business and you have complete control over the look.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">TEMPLATE WEBSITE</h4>
              <p class="card-text"> These are pre-designed websites which allow you to choose a theme for free (or for a small price), add your own text content and images, and you are good to go.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-dark">RESPONSIVE DESIGN</h4>
              <p class="card-text">Responsive design ensures that a website is displayed correctly no matter what device the user is viewing it on. Responsive websites are built in such a way that they adapt to different screen sizes.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">SITEMAP</h4>
              <p class="card-text">A sitemap is an outline of all the pages on a website. There are three different types of sitemaps: those used by web designers when planning a website, hierarchical listings intended for the human user, and structured listings intended for search engines.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">WIREFRAME</h4>
              <p class="card-text">Wireframes help designers to communicate to web developers how a website should be structured. A wireframe is essentially a bare-bones blueprint of the website where the focus is on functionality rather than aesthetics.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-dark">LANDING PAGE</h4>
              <p class="card-text">A landing page is the page where a visitor first enters a website. Oftentimes, a special landing page is created to elicit a specific action from the new visitor (usually in connection with an advertising or marketing campaign).</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">INFORMATION ARCHITECTURE</h4>
              <p class="card-text">Information architecture (IA) is the science of structuring content. The goal is to classify the content in a clear and understandable way and arrange it according to relations between the content pieces, allowing users to find what they need with less effort.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-dark">WEBSITE CONTENT</h4>
              <p class="card-text">Web content is the textual, visual, or aural content that is encountered as part of the user experience on websites. It may include text, images, sounds, videos, and animations.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">PLUGIN</h4>
              <p class="card-text">A plugin is basically an extension that adds extra functionality to an existing software.For instance, some plugins may help you to boost your website traffic while others help you to reduce your bounce rate and improve conversion rate.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">DEBUGGING</h4>
              <p class="card-text">Debugging is a multistep process: the developer locates the problem, isolates the source and then either gets to work fixing it or comes up with a workaround. The debugging process ends with testing and, if necessary, further fixes.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">MVP</h4>
              <p class="card-text">The minimum viable product is the most pared-down version of a product that can be released to market. Here evelopers first focus on the core features and functions that are absolutely crucial. Once the product has been released, they will continue to build the complete set of features.</p>
            </div>
          </div>
           <div class="card">
            <div class="card-body">
              <h4 class="card-title">SEO</h4>
              <p class="card-text">SEO stands for search engine optimization. It refers to techniques that help your website rank higher in search engine results pages. SEO is vital to your website's success as it makes your website more visible to people who are looking for solutions that your brand, product, or service can provide.</p>
            </div> 
          </div>
        </div>
      </div>
  </section>
  <section id="" class="p-5 text-justify bg-light">
    <div class="main py-5">
      <div class="d-flex flex-column justify-content-center">
        <h1 class="text-center">START YOUR PROJECT WITH US</h1>
        <div class="separator">
          <div class="line line-left"></div>
          <div class="asterisk"><i class="fas fa-circle"></i></div>
          <div class="line line-right"></div>
        </div>
        <h4 class="text-center mt-4 mb-5">Our team is ready to help you. Contact us now and we will answer you today.</h4>
        <div class="text-center">
          <a href="{{ route('contactproject.create') }}" class="btn">LET'S DISCUSS A PROJECT</a>
        </div>
      </div>
    </div>
  </section>
  </main>
    
@endsection
  