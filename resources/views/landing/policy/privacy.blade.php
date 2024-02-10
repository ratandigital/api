@extends('layouts.landing')
@section('title',$title)
@section('meta_title',$meta_title)
@section('meta_description',$meta_description)
@section('meta_keyword',$meta_keyword)
@section('meta_author',$meta_author)
@section('meta_image',$meta_image)
@section('meta_image_width',$meta_image_width)
@section('meta_image_height',$meta_image_height)
@section('content')
<section class="pt-[130px]" id="policy-page">
  <div class="wow fadeInUp relative z-10 bg-cover bg-center bg-no-repeat py-20 lg:py-[120px]" data-wow-delay=".2s">
    <div class="absolute top-0 left-0 z-10 h-full w-full bg-cover bg-center opacity-20 mix-blend-overlay bg-noise-pattern"></div>
    <div class="absolute top-0 left-0 -z-10 h-full w-full bg-[#EEF1FDEB] dark:bg-[#1D232DD9]"></div>
    <div class="px-4 xl:container">
      <div class="mx-auto max-w-[580px] text-center">
        <h1 class="mb-8 font-heading text-3xl font-semibold text-dark dark:text-white md:text-[44px] md:leading-tight">
          {{$title}}
        </h1>
      </div>
    </div>
  </div>
  <div class="px-4 pt-24 xl:container">
    <div class="border-b pb-20 dark:border-[#2E333D] lg:pb-[130px]">
        <h4 class="text-base text-dark-text mb-4">{{__('Introduction')}}</h4>
        <p class="mb-12 text-base text-dark-text">
            {!! __('Welcome to <a href=":appurl">:appurl</a>. We understand that privacy online is important to users of our Site, especially when conducting business.This statement governs our privacy policies with respect to those users of the Site (`Visitors`) who visit without transacting business and Visitors who register to transact business on the Site and make use of the various services offered by This APP (collectively, `Services`) (`Authorized Customers`).',['appurl'=>url('/')])!!}
         </p>

        <h4 class="text-base text-dark-text mb-4">{{__('Personally Identifiable Information')}}</h4>
        <p class="mb-12 text-base text-dark-text">
         {{__('Refers to any information that identifies or can be used to identify, contact, or locate the person to whom such information pertains, including, but not limited to, name, address, phone number, email addres, IP address, location and browser . Personally Identifiable Information does not include information that is collected anonymously (that is, without identification of the individual user) or demographic information not connected to an identified individual.')}}
        </p>

        <h4 class="text-base text-dark-text mb-4">{{__('What Personally Identifiable Information is collected?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('We may collect basic user profile information from all of our Visitors. We collect the following additional information from our Authorized Customers: the name, address, phone number, email addres, IP address, location and browser of Authorized Customers, the nature and size of the business, and the nature and size of the advertising inventory that the Authorized Customer intends to purchase.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('What organizations are collecting the information?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('In addition to our direct collection of information, our third party service vendors (such as credit card companies, clearinghouses and banks) who may provide such services as credit, insurance, and escrow services may collect this information from our Visitors and Authorized Customers. We do not control how these third parties use such information, but we do ask them to disclose how they use personal information provided to them from Visitors and Authorized Customers. Some of these third parties may be intermediaries that act solely as links in the distribution chain, and do not store, retain, or use the information given to them.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('How does the Site use Personally Identifiable Information?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('We use Personally Identifiable Information to customize the Site, to make appropriate service offerings, and to fulfill buying and selling requests on the Site. We may email Visitors and Authorized Customers about research or purchase and selling opportunities on the Site or information related to the subject matter of the Site. We may also use Personally Identifiable Information to contact Visitors and Authorized Customers in response to specific inquiries, or to provide requested information.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('With whom the information may be shared?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('Personally Identifiable Information about Authorized Customers may be shared with other Authorized Customers who wish to evaluate potential transactions with other Authorized Customers. We may share aggregated information about our Visitors, including the demographics of our Visitors and Authorized Customers, with third party vendors.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('How is Personally Identifiable Information stored?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('Personally Identifiable Information collected by This APP is securely stored and is not accessible to third parties or employees of This APP except for use as indicated above.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('What choices are available to Visitors regarding collection, use and distribution of the information?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('Visitors and Authorized Customers may opt out of receiving unsolicited information from or being contacted by us and/or our vendors and affiliated agencies by responding to emails as instructed, or by contacting us.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('Are Cookies Used on the Site?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('Cookies are used for a variety of reasons. We use Cookies to obtain information about the preferences of our Visitors and the services they select. We also use Cookies for security purposes to protect our Authorized Customers. For example, if an Authorized Customer is logged on and the site is unused, we will automatically log the Authorized Customer off.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('How does This APP use login information?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('This APP uses login information, including, but not limited to, IP addresses, ISPs, and browser types, to analyze trends, administer the Site, track a user`s movement and use, and gather broad demographic information.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('What partners or service providers have access to Personally Identifiable Information from Visitors and/or Authorized Customers on the Site?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('This APP has entered into and will continue to enter into partnerships and other affiliations with a number of vendors.Such vendors may have access to certain Personally Identifiable Information on a need to know basis for evaluating Authorized Customers for service eligibility. Our privacy policy does not cover their collection or use of this information. Disclosure of Personally Identifiable Information to comply with law. We will disclose Personally Identifiable Information in order to comply with a court order or subpoena or a request from a law enforcement agency to release information. We will also disclose Personally Identifiable Information when reasonably necessary to protect the safety of our Visitors and Authorized Customers.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('How does the Site keep Personally Identifiable Information secure?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('All of our employees are familiar with our security policy and practices. The Personally Identifiable Information of our Visitors and Authorized Customers is only accessible to a limited number of qualified employees who are given a password in order to gain access to the information. We audit our security systems and processes on a regular basis. Sensitive information, such as credit card numbers or social security numbers, is protected by encryption protocols, in place to protect information sent over the Internet and we do not store them. While we take commercially reasonable measures to maintain a secure site, electronic communications and databases are subject to errors, tampering and break-ins, and we cannot guarantee or warrant that such events will not take place and we will not be liable to Visitors or Authorized Customers for any such occurrences.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('How can Visitors correct any inaccuracies in Personally Identifiable Information?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('Visitors and Authorized Customers may contact us to update Personally Identifiable Information about them or to correct any inaccuracies by emailing us.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('Can a Visitor delete or deactivate Personally Identifiable Information collected by the Site?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('We provide Visitors and Authorized Customers with a mechanism to delete/deactivate Personally Identifiable Information from the Site`s database by contacting . However, because of backups and records of deletions, it may be impossible to delete a Visitor`s entry without retaining some residual information. An individual who requests to have Personally Identifiable Information deactivated will have this information functionally deleted, and we will not sell, transfer, or use Personally Identifiable Information relating to that individual in any way moving forward.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('What happens if the Privacy Policy Changes?')}}</h4>
        <p class="mb-12 text-base text-dark-text">{{__('We will let our Visitors and Authorized Customers know about changes to our privacy policy by posting such changes on the Site. However, if we are changing our privacy policy in a manner that might cause disclosure of Personally Identifiable Information that a Visitor or Authorized Customer has previously requested not be disclosed, we will contact such Visitor or Authorized Customer to allow such Visitor or Authorized Customer to prevent such disclosure.')}}</p>

        <h4 class="text-base text-dark-text mb-4">{{__('Links')}}</h4>
        <p class="mb-12 text-base text-dark-text">{!! __('<a href=":appurl">:appurl</a> contains links to other web sites. Please note that when you click on one of these links, you are moving to another web site. We encourage you to read the privacy statements of these linked sites as their privacy policies may differ from ours.',['appurl'=>url('/')])!!}</p>
    </div>
  </div>
</section>
@endsection