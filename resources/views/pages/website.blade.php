@extends('layouts.app')

@section('title', 'Web design&dev')

@section('content')
<main id="main" role="main" class="m-auto">

  <section class="py-5 text-center bg-light">
    <div class="main py-5">
      <div class="d-flex flex-column justify-content-center">
        <div class="animate-left w-75 mx-auto">
          <h5 class="p-big"> We believe in simplicity. Whether your audience is reading content, watching a video or purchasing an item, every action should be clear throughout the website. Our goal is to create a website that highlights your company’s brand while ensuring ease of use and simplicity for your audience.</h5>
        </div>
        <img src="/images/code.png" alt="" class="website-img animate-right mx-auto">
      </div>
    </div>
  </section>

  <section class="py-5 bg-grey">
    <div class="py-5">
      <h2 class="text-center">STAGES OF WEB DEVELOPMENT</h2>
      <div class="separator pb-5">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>
      <div class="web-stages">
        <div>
          <h4>Stage 1. Information Gathering</h4>
          <ul>
            <li>Set goals for the website</li>
            <li>Define target audience</li>
          </ul>
        </div>
        <div>
          <h4>Stage 2. Planning</h4>
          <ul>
            <li>Create a sitemap sketch</li>
            <li>Create a wireframe/mock-up</li>
            <li>Select technology stack (programming language, frameworks, CMS)</li>
          </ul>
        </div>
        <div>
          <h4>Stage 3. Design</h4>
          <ul>
            <li>Create colourful page layouts</li>
            <li>Review the layouts</li>
            <li>Get client's feedback on the layouts</li>
            <li>Change the layout when required</li>
          </ul>
        </div>
        <div>
          <h4>Stage 4. Content Writing and Assembly</h4>
          <ul>
            <li>Create new content</li>
            <li>Get content ready for migration</li>
          </ul>
        </div>
        <div>
          <h4>Stage 5. Coding</h4>
          <ul>
            <li>Build and deploy website</li>
            <li>Add special features and interactivity</li>
            <li>SEO for the website</li>
          </ul>
        </div>
        <div>
          <h4>Stage 6. Testing, Review and Launch</h4>
          <ul>
            <li>Test the created website</li>
            <li>Upload the website to server</li>
            <li>Final testing and launch</li>
          </ul>
        </div>
        <div>
          <h4>Stage 7. Maintenance and Regular Updating</h4>
          <ul>
            <li>Add user report system</li>
            <li>Fix bugs</li>
            <li>Keep website up-to-date</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="tech" class="py-5 bg-light">
    <div class="main py-5 container-fluid">
      <h2 class="text-center">TECHNOLOGIES THAT CREATE WONDERS</h2>
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>
      <div class="row mt-5">
        <div class="pl-5 ml-5 col-sm col-sm-12 col-md-6 pb-sm-5 m-auto">
          <p class="p-big">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolores magnam voluptates minus aliquam eos, perspiciatis, pariatur repudiandae ea quidem molestias omnis vitae iure fugiat beatae. Possimus deleniti accusantium molestias ducimus</p>
        </div>
        <div class="col col-sm col-sm-12 col-md-6 pl-4">
          <div class="d-flex justify-content-center help">
            <div data-anijs="if: mouseover, do: swing animated">
              <span>HTML</span>
            </div>
            <div data-anijs="if: mouseover, do: swing animated">
              <span>SCSS</span>
            </div>
            <div data-anijs="if: mouseover, do: swing animated">
              <span>PHP</span>
            </div>
          </div>
          <div class="d-flex justify-content-center help">
            <div data-anijs="if: mouseover, do: swing animated">
              <span>MySQL</span>
            </div>
            <div data-anijs="if: mouseover, do: swing animated">
              <span>Laravel</span>
            </div>
            <div data-anijs="if: mouseover, do: swing animated">
              <span>JavaScript</span>
            </div>
          </div>
          <div class="d-flex justify-content-center help">
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

  <section id="plans" class="py-5 bg-dark">
    <div class="monthly-plans py-5">
      <h2 class="text-center">OUR WEBSITE SERVICES</h2>
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>
      <div class="d-flex flex-column justify-content-center">
        <p class=" mt-4 mb-5 text-center">
          Websites are a necessity to compete in today’s business landscape. We offer a few different types of web design services, including templates, semi-custom, and fully custom websites. Each of our web design offerings includes a dedicated account manager, an in-depth kickoff meeting, a 40+ step post-launch SEO checklist, and more. We build most of our websites on WordPress, the web’s most popular content management system and all our websites are built to be responsive, meaning they work on any tablet or mobile phone.
        </p>
        <p class="mb-5 text-center">
          You’ll notice that we only list pricing ranges and not set pricing for reach offering. Each of our web design projects varies greatly and depends on your budget, goals, and timeframe. If you’re unsure of what you want, our team can help you choose the right option that falls within your budget.
        </p>
      </div>
     
      <div class="plan-boxes p-lg-4 p-md-2 py-5 pb-md-0 pb-sm-0 pb-0 d-flex flex-wrap flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column justify-content-between">
        <div class="bg bg1 p-4">
          <div class="text-center">
            <h2 class="text-dark pb-5">TEMPLATE WEBSITES</h2>
            {{-- <p class="pt-5 pb-1">Custom design / Information architecture</p>
            <p class="pb-1">Mobile friendly design</p>
            <p class="pb-1">Logo design</p>
            <p class="pb-1">Service and product pages</p>
            <p class="pb-1">Contact form</p> --}}
            <p>
              Template websites are best suited for businesses that have a smaller budget and are willing to adhere to the limitations of a template. Our platform of choice is WordPress and there are thousands (if not millions) of different WordPress templates available. Our team will select 2-3 templates to present to you based on our knowledge of your goals, number of pages, etc. and you will then select 1 for us to move forward with.
            </p>
            <p>
              Templates offer many customization options (such as color choice, logo, photos, etc.), but there are pros and cons to templates that we’ll make sure you’re aware of before beginning. Template websites from Atilus typically start around $4,500 and the final pricing will depend on the number of hours we’ll need to complete your project.
            </p>
          </div>

        </div>
        <div class="bg bg2 p-4">
          <div class="text-center">
            <h2 class="text-dark pb-5">CUSTOM WEBSITES</h2>
            {{-- <p class="pt-5 pb-1">Custom design / Information architecture</p>
            <p class="pb-1">Mobile friendly design</p>
            <p class="pb-1">Logo design</p>
            <p class="pb-1">Website content creation</p>
            <p class="pb-1">Service and product pages</p>
            <p class="pb-1">Contact form</p>
            <p class="pb-1">Gallery</p>
            <p class="pb-1">Blog setup</p> --}}
            <p>
              Custom websites are for medium-large sized businesses that have a sizeable budget for a new website and that want full control over the look/feel. Once a client has been on-boarded, our team meets internally to start planning a sitemap, wireframes, and design direction. We then go through each step, presenting everything from initial concepts to structural planning to the final design. Our team will walk you through each phase until the final project is launched to ensure your 100% satisfaction.
            </p>
            <p>
              Custom websites from Atilus typically start around $15,000 and final pricing will ultimately depend upon the number of hours we’ll need to complete your project.
            </p>
          </div>
        </div>

        <div class="bg bg3 p-4">
          <div class="text-center">
            <h2 class="text-dark pb-5">WEBSITE REDESIGNS & ADD-ONS</h2>
            {{-- <p class="pt-5 pb-1">Custom design / Information architecture</p>
            <p class="pb-1">Mobile friendly design</p>
            <p class="pb-1">Logo design</p>
            <p class="pb-1">Website content creation</p>
            <p class="pb-1">Service and product pages</p>
            <p class="pb-1">Contact form</p>
            <p class="pb-1">Gallery</p>
            <p class="pb-1">Blog setup</p>
            <p class="pb-1">Shopping cart integration and programming</p>  
            <p class="pb-1">Digital marketing setup (SEO)</p> --}}
            <p>
              We love building new websites, but if you come to us with an existing website, we’re willing to work with that, too. We’ll review your existing website design, your code, and your overall goals to make design change recommendations and implement those. Website redesigns vary greatly in pricing and depend on the existing framework.
            </p>
            <p>
              The above offerings encompass most of the types of web design services we offer, and we also can work with you to include special functionality. This includes adding plugins that support your website’s functionality, like IDX integration, event calendars, and more. You tell us what you’d like your website to do and we can build it into your budget.
            </p>
          </div>
        </div>

        <div class="bg bg4 p-4">
          <div class="text-center">
            <h2 class="text-dark pb-5">WEBSITE MAINTENANCE</h2>
            {{-- <p class="pt-5 pb-1">Custom design / Information architecture</p>
            <p class="pb-1">Mobile friendly design</p>
            <p class="pb-1">Logo design</p>
            <p class="pb-1">Website content creation</p>
            <p class="pb-1">Service and product pages</p>
            <p class="pb-1">Contact form</p>
            <p class="pb-1">Gallery</p>
            <p class="pb-1">Blog setup</p>
            <p class="pb-1">Shopping cart integration and programming</p>  
            <p class="pb-1">Digital marketing setup (SEO)</p> --}}
            <p>
              We manage websites for clients who want to get on with running their business safe in the knowledge their website is up to date and always online.
              Our web master team members are dedicated to providing client-service focused on website and application maintenance.
            </p>
            <p>
              Web site maintenance services include:

              Website management,performance and uptime monitoring
              Software security updates
              Server updates & upgrades
              Site backups
              Ongoing Search Engine Optimisation
              New ideas and features developments
              Malware and hack detection
              On-call web support / webmaster services
              Each maintenance package is designed for both the size and the needs of your company.
            </p>
            <p>SUPPORT & MAINTENACE SERVICES
              Maintenance and technical support
              Monitoring 24/7
              Hosting & domains managment
              Website Data Migrations
              Product Testing
              Email migration
              Web Security
              SSL certificate</p>
          </div>
        </div>

      </div>
      <div>
        <p class="text-center text-light px-5 pt-5">All plans also include website hosting and monthly performance audits. The best way to get all the info is by contacting us for a quick online meeting.</p>
      </div>
       
      <div>
        <a class="button mt-5" href="/project_plan">Tell us about your dream website</a>
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
              <h4 class="card-title">CUSTOM DESIGN</h4>
              <p class="card-text"> the visual design, UX design, imagery collection, and sitemap and page structure generation.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">INFORMATION ARCHITECTURE</h4>
              <p class="card-text">We generally spend up to 30 hours in this phase. That’s onboarding, initial meetings with our clients, and our design team’s work internally on the project, including final presentation and approval.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-dark">MOBILE FRIENDLY DESIGN</h4>
              <p class="card-text">Your new website will look great and operate correctly on all devices. From large desktop monitors down to the latest smartphones.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-dark">LOGO DESIGN</h4>
              <p class="card-text">Your new website will look great and operate correctly on all devices. From large desktop monitors down to the latest smartphones.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-dark">WEBSITE CONTENT CREATION</h4>
              <p class="card-text">Most business owners are too busy running their companies so our expert copy writers do the writing and you just need to review it.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">SERVICE AND PRODUCT PAGES</h4>
              <p class="card-text">Draw attention to your most popular products and services with ‘must know’ information. We’ll organize the details for quick navigation and easy reading.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">CONTACT FORM</h4>
              <p class="card-text">The whole point of your website is to get prospects to contact you and we make it easy. A short form with vital contact info will be emailed directly to you.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">GALLERY</h4>
              <p class="card-text">Stunning photos of completed projects are the best way to showcase your work. Pictures really are worth a thousand words.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">BLOG SETUP</h4>
              <p class="card-text">Blog posts are the best way to educate customers about your products and services. We do the writing while you reap all the benefits.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">SHOPPING CART INTEGRATION</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">PROGRAMMING</h4>
              <p class="card-text">Custom feature development can cost extra, but the benefits of a fully customized and unique website can outweigh the costs.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">DIGITAL MARKETING SETUP (SEO)</h4>
              <p class="card-text">SEO is vital to your website's success. For every project we work on, we have a 40+ step process to ensure the final site is SEO friendly and communicating to the search engines properly.</p>
            </div>
          </div>
         
        </div>
      </div>
  </section>
  </main>
    
@endsection
  