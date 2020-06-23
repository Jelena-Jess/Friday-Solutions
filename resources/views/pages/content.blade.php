@extends('layouts.app')

@section('title', 'Content management')

@section('content')
<main role="main" class="m-auto">

  <section class="py-5 text-center bg-light">
    <div class="main py-5">
      <div class="d-flex flex-column justify-content-center">
        <div class="animate-left w-75 mx-auto">
          <h5 class="p-big"><p>To compete in today’s digital world, a business needs to become a content factory, rapidly producing and publishing content that audiences enjoy consuming and that inspires them to take action. But who has the time?</p></h5>
        </div>
        <img src="/images/content.png" alt="" class="website-img animate-right mx-auto">
      </div>
    </div>
  </section>

  <section class="p-5 text-justify bg-dark">
    <div id="content" class="py-5">
      <h1 class="text-center">Why Is Content Important?</h1>
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>
      <div class="d-flex flex-column align-items-center mx-auto pt-4">
        <div>
          <p class="text-center py-3">You must remember that internet users need to have a reason to keep visiting your site. Everyone has a limited amount of time to spend online and you need to offer your visitors something that will tempt them away from everything else that is on offer.</p>
          <p class="text-center">It’s important therefore not just to have original content, but also to vary the content regularly in order to entice visitors to return to your site again and again. The question of how often content should be added to a site is one we are asked a lot. The answer of course is as often as possible!</p>
          <p class="text-center">Google will penalise sites which simply do not change their content at all for months on end, so whatever kind of site you have you must try to add some new content on a regular basis.</p>  
        </div>
      </div>
    </div>
  </section>
          
  <section class="px-3 py-5 bg-light">
    <div id="content" class="py-5">
      <h1 class="text-center">Balancing Your Experience with Our Expertise</h1>
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>
      <div class="d-flex flex-column align-items-center pt-4">
        <div class="content">
          <div>
            <h3>Creating Content</h3>
            <p>Creating your own content can be a challenge. Yes, you may be the expert in your field, but you’re not a copywriter, editor, and graphic designer. This is why you need a team to work together to create, edit, revise, and design your message.</p>
            <p>Our team of content strategists, copywriters, and designers will work together to create content that informs, teaches, and inspires your audience to take action. Or we’ll create content to simply start a conversation.</p>
          </div>
          <div>
            <h3>“How can somebody write about my industry if they’re not living it each day?”</h3>
            <p>Actually, working with agency copywriters can be a huge asset. An outside pair of eyes and someone who writes marketing rhetoric five days a week can be just what your business needs to effectively communicate your most important customer benefits. Our in-depth research and content strategy recommendations directly inform the key messages within each page of the website. From there, writers use that information to fuel discussions with key client stakeholders to truly balance our marketing expertise with your industry experience.</p>
          </div>
          <div>
            <h3>Identifying which content to create</h3>
            <p>Before one can create content they must first identify which types of content to create. Our team will audit your website, identifying the content your business has already published, and what kind of content you should avoid.</p>
            <p>We will use our audit to identify gaps that need to be filled based on the content your audience enjoys consuming and the content that help them guide your audience through each stage of the buyer’s journey.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="" class="p-5 text-justify bg-grey">
    <div class="main py-5">
      <div class="d-flex flex-column justify-content-center">
        <h1 class="text-center">LET'S START TYPING</h1>
        <div class="separator">
          <div class="line line-left"></div>
          <div class="asterisk"><i class="fas fa-circle"></i></div>
          <div class="line line-right"></div>
        </div>
        <h4 class="text-center mt-4 mb-5">Ready to start a project or really curious about our process? Drop us a note or give us a call; we’re happy to answer all your questions.</h4>
        <div class="text-center">
          <a href="{{ route('contact.create') }}" class="btn">CONTACT US</a>
        </div>
      </div>
    </div>
  </section>
</main>
    
@endsection