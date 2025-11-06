@component('mail::message')
    # 💡 New Loan Inquiry

    Hello Team,

    A new customer inquiry has just been submitted through the website,
    Here are the details:

    # Full Name:
    {{ $data['fullname'] ?? 'N/A' }}

    # Email Address:
    {{ $data['email'] ?? 'N/A' }}

    # Phone Number :
    {{ $data['phone'] ?? 'N/A' }}

    # Loan Interested In:
    {{ $data['loanType'] ?? 'N/A' }}

    # Message:
    {{ $data['message'] ?? 'No message provided.' }}


    ✨ Let’s keep the momentum — respond promptly to continue building meaningful partnerships.


    Thanks & Regards,
    www.payhousefinance.com

@endcomponent
