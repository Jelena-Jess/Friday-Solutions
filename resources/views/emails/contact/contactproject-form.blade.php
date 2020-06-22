@component('mail::message')

# Thank you for your message

<strong>Name:</strong> {{ $data['name'] }}<br>
<strong>Email:</strong> {{ $data['email'] }}<br>
<strong>Phone:</strong> {{ $data['phone'] }}<br>
<strong>Company/Product name:</strong> {{ $data['company_name'] }}<br>
<strong>Desired web address:</strong> {{ $data['web_address'] }}<br>
<strong>Describe your company/product: </strong> {{ $data['description'] }}<br>
<strong>What do you want to achieve with this website?</strong> {{ $data['achieve'] }}<br>
<strong>What are the long-term goals for the website?</strong> {{ $data['goals'] }}<br>
<strong>What are the aims and objectives of the project?</strong> {{ $data['aims'] }}<br>
<strong>Budget:</strong> {{ $data['budget'] }}<br>
<strong>Deadline:</strong> {{ $data['deadline'] }}<br>
<strong>Who are your target audience?</strong> {{ $data['audience'] }}<br>
<strong>How will your audience interact with the website?</strong> {{ $data['interact'] }}<br>
<strong>List your main competitors:</strong> {{ $data['competitors'] }}<br>
<strong>What makes your company/product different and unique?</strong> {{ $data['uniqueness'] }}<br>
<strong>Do you have your website's content ready?</strong> {{ $data['content'] }}<br>
<strong>Do you have brand guidelines?</strong> {{ $data['brand'] }}<br>
<strong>What is your desired look and feel for the website?</strong> {{ $data['look'] }}<br>
<strong>List 5 websites you like and explain why?</strong> {{ $data['preference'] }}<br>
<strong>List the pages that you require?</strong> {{ $data['pages'] }}<br>
<strong>What features do you want to include on the website?</strong> {{ $data['features'] }}<br>
<strong>Do you have a current domain name and hosting package?</strong> {{ $data['domain'] }}<br>
@endcomponent