@extends('layouts.app')

@section('title', 'C1 Advanced | English with Ellen')

@section('content')
  <main role="main" class="m-auto">

    <section class="py-5 text-center bg-light">
      <div class="main py-5">
        <div class="d-flex flex-column justify-content-center">
          <div class="w-75 mx-auto">
            <p class="text-center p-big">A successful logo is simple and representative of the company it stands for. It basically serves as your personal stamp.</p>
            <p class="text-center p-big">Designing a small visual representation of an entire company can be a daunting task, but if the process is done correctly, a logo can be a very effective marketing device.</p>
          </div>
          {{-- <img src="/images/logo.png" alt="" class="website-img animate-right mx-auto"> --}}
        </div>
      </div>
    </section>
    
    <section class="py-5 text-justify bg-grey">
      <div class="main p-5">
        <h1 class="text-center" id="questionnaire">Logo Design Questionnaire</h1>
        <div class="separator">
          <div class="line line-left"></div>
          <div class="asterisk"><i class="fas fa-circle"></i></div>
          <div class="line line-right"></div>
        </div>
        <div class="d-flex flex-column">
          <div class="py-5 px-3">
            <p class="text-center p-big">There are certain questions we like to ask a client prior to beginning the logo design process. It may seem like a long list but it is helps us to know what our client needs and expects from their finished logo/branding. It also helps to clarify our client’s vision for their business branding.</p>            
          </div>
          <div id="logo-list" class="mx-auto">
            <div class="p-5 my-2">
              <h3 class="pink-text">Your business:</h3>
              <p>What is the name of your business?</p>
              <p>Describe in one sentence your business/service. (Difficult but vital!)</p>
              <p>What are your business short term, medium term and long term goals?</p>
              <p>What do you want your new logo to achieve?</p>
              <p>Who are your main competitors and how do you differ from them?</p>
              <p>What do you like or dislike about your competitor’s branding?</p>
              <p>Who are your potential clients?</p>
              <p>Where will your business be publicised?</p>
            </div>
            <div class="p-5 my-2">
              <h3 class="pink-text">Your logo:</h3>
              <p>Do you have a specific idea in mind for your logo?</p>
              <p>Do you want to use  existing brand colours or a particular range of colours?</p>
              <p>Are there any colors that you do not want to use?</p>
              <p>Do you have a particular font you would like to use – or ones you definitely do not want to use?</p>
              <p>What words should describe your logo?</p>
              <p>What message or emotion do you want your logo to portray?</p>
              <p>Does your logo have a tag line?</p>
              <p>Is your tag line to appear with your logo on all of your branding?</p>
              <p>Where will you logo be used  (ie. Internet / print) ?</p>
              <p>What logos do you like and why?</p>
            </div>
            <div class="p-5 my-2">
              <h3 class="pink-text">The practical bits:</h3>
              <p>When do you want your logo to be web/print-ready?</p>
              <p>What is your budget?</p>
              <p>Would you like any additional design services alongside your new logo? (eg. business cards, letterheads & other stationery, social media icons/banners, advertising material etc.)</p>
              <p>Any other comments?</p>
            </div>            
          </div>
        </div>
      </div>
    </section>

    <section id="" class="p-5 text-justify bg-dark">
      <div class="main py-5">
        <div class="d-flex flex-column justify-content-center">
          <h1 class="text-center">LET'S CREATE YOUR LOGO</h1>
          <div class="separator">
            <div class="line line-left"></div>
            <div class="asterisk"><i class="fas fa-circle"></i></div>
            <div class="line line-right"></div>
          </div>
          <h4 class="text-center mt-4 mb-5">Our team is ready to help you. Contact us now and we will answer you today.</h4>
          <div class="text-center">
            <a href="{{ route('contact.create') }}" class="btn">CONTACT US</a>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 text-justify bg-grey">
      <div class="main p-5">
        <h1 class="text-center">The stages of logo creation</h1>
        <div class="separator">
          <div class="line line-left"></div>
          <div class="asterisk"><i class="fas fa-circle"></i></div>
          <div class="line line-right"></div>
        </div>
        <div class="logo-text d-flex flex-column align-items-center pt-4">
          <div data-bg-text="One">
            <h3>Step 1: The Design Brief</h3>
            <h4>Getting to know the client’s business.</h4>
            <p>The first step in the logo design process is called the design brief. The designer discusses the project at length with the client - hence the <a href="#questionnaire">Logo Design Questionnaire</a>. It is of utmost importance to understand the company’s goals. The designer should gather as much information from the client as possible. It is significant to learn where the logo will be used - a logo used on a billboard might contain more detail than one used on business cards. The designer should also learn about the company’s target audience, as this can influence a logo design significantly. It is also important for the designer to learn whether the company has already established a visual aesthetic. If there is an existing color scheme or style established, it is crucial to find out whether the client would like to incorporate those characteristics into the new logo. In some circumstances, a new logo might be a chance to start fresh and create a brand new visual identity, whereas in other circumstances it might be important to the client that some sort of consistency is maintained.</p>
          </div>
          <div data-bg-text="Two">
            <h3>Step 2: Research</h3>
            <h4>Conducting research focused on the industry, its history, and competitors.</h4>
            <p>Once a sufficient amount of general information has been gathered, the designer must dive deeper into the research stage. Often clients cannot specifically express how they envisage their logo, so it is the designer’s role to elicit relevant information from the client. Asking strategic questions should help the client reveal what exactly they want. Also, establishing potential themes will benefit the designer, providing more material to use when brainstorming and sketching later in the process.</p>
            <p>In addition to speaking directly with the client, the designer often does some market research on the company and its competitors. A client’s opinion of their own company only tells half the story; any good designer should also look them up (online and offline) to get a sense of the target customer’s vision of the company. Examining similar companies’ identity systems may lend insight into the effectiveness of various logo styles. Researching current trends in the industry can also be wise.</p>
          </div>
          <div  data-bg-text="Three">
            <h3>Step 3: Brainstorming and Draft Production</h3>
            <h4>Developing the logo design concepts around the brief and research.</h4>
            <p>One common practice at this point in the creative process is identifying keywords related to the company and its product or service. These words will be used to inspire possible visual representations of the company. Once ideas begin flowing onto the page in text form, visual symbols and shapes will begin to form. Now it is time to begin conceptualizing the themes and text established earlier during the brainstorming phase.</p>
            <p>Making a draft is an essential step that encourages the designer to slow down and examine all possible angles and directions. This is where creativity comes into play. Some designers use a sketchbook and the others start right away with the computer. However, most famous logo designers would agree that sketching logos by hand works best. This stage is where the science – which is everything we learned so far and the strategy that grows from it – meets the art.</p>
          </div>
          <div  data-bg-text="Four">
            <h3>Step 4: Design Execution</h3>
            <h4>Selecting promising logo design concepts and executing them digitally.</h4>
            <p>Once sufficient time has been spent on research and sketching, the draft production process begins. Digital implementation is usually executed as the best ideas developed during the sketching phase will be recreated on the computer. They will begin to come to life with the addition of color and detail, and they will be tweaked until they accurately represent the client’s wishes. Some logos rely solely on words or text, called “wordmarks,” while for others text is just one piece of the puzzle. Regardless, it is important to note here that choosing the typeface will set the tone for the whole logo. Testing each logo option with a number of different fonts will ultimately lead to a more effective final product.</p>
            <p>It is crucial to keep in mind the three basic criteria of creating an effective logo. It needs to be relevant to the business, simple and memorable. A successful logo needs to hold the idea of the company. It should be simple in order to work effectively and flexibly in a wide range of sizes and media so that it looks good in small size, as a tiny favicon, and bigger in print. Finally, while the form must be simple, it ought to be distinctive – unusual enough to be remembered. To sum up, a logo is basically a marriage between simple and distinctive, while keeping it focused on the business.</p>
            <p>Sometimes we struggle to be objective and move beyond decisions made on what we simply like, or dislike. That is why it is important to always focus carefully on what the project is trying to achieve. When in doubt, we find it helpful to use a list of questions to keep on the right track:</p>
            <ul>
              <li>Do the logo designs work in black and white?</li>
              <li>Do the logo design ideas work across all media?</li>
              <li>Will these concepts stand the test of time?</li>
              <li>Are these images recognisable and memorable?</li>
              <li>Are the logo design ideas unique?</li>
              <li>Do the logo ideas support the brand manifesto?</li>
              <li>Are they representative of the brand as a whole?</li>
            </ul>
          </div>
          <div  data-bg-text="Five">
            <h3>Step 5: Presentation and Feedback</h3>
            <h4>Presenting logo design concepts to the client and working together towards the best solution.</h4>
            <p>Now that a number of options have been created, the most effective choices are presented to the client for consideration. Sometimes the logo options may be delivered contextually, to help the client envision how they will look on a piece of collateral, instead of on a blank piece of paper. Usually a written description of the project will accompany the logo options. 
            </p>
            <p>At this point, the client should consider the ideas and respond with notes. The designer then takes the client feedback into consideration, and makes changes accordingly. The improved logo is again presented to the client. Often there are many rounds of revisions before the client is satisfied with the final product.</p>
          </div>
          <div  data-bg-text="Six">
            <h3>Step 6: Delivery</h3>
            <h4>Deliver the final logo artwork and identity guidelines.</h4>
            <p>Once the client is happy with the resulting logo, the designer will produce a variety of file types that can be used for various outputs. Important file types include EPS, JPEG and possibly TIF in certain circumstances. Some clients may also need a black and white version of the final logo. A separate simplified version may be needed in situations in which the full-size logo is highly detailed and does not scale down well. Trying to anticipate all possible needs of the client can be advantageous, preventing the need for corrections and revisions in the future.
            </p>
            <p>Upon delivery of the final files, it is time to think about employing the logo on marketing materials and promotional products. Many times the designer will continue working with the client to create a full brand identity system using the new logo.
            </p>
          </div>
        </div>
      </div>
    </section>

  </main>
    
@endsection